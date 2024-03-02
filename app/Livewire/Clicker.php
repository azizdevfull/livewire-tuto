<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Clicker extends Component
{
    use WithPagination, WithFileUploads;

    #[Rule('required|min:2|max:50')]
    public $name = '';

    #[Rule('required|email|unique:users')]
    public $email = '';

    #[Rule('required|min:5')]
    public $password = '';

    #[Rule('nullable|sometimes|image|max:1024')]
    public $image;

    public function update($id)
    {
    }

    public function createNewUser()
    {

        sleep(1);

        $validated = $this->validate();

        if ($this->image) {
            $validated['image'] = $this->image->store('uploads', 'public');
        }
        $user = User::create($validated);

        $this->reset('name', 'email', 'password', 'image');

        session()->flash('success', 'User Created Successfully!');
        $this->dispatch('clicker', $user);
    }

    public function reloadList()
    {
        $this->dispatch('clicker');
    }
    public function render()
    {
        $users = User::paginate(5);
        return view('livewire.clicker', compact('users'));
    }
}
