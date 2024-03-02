<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class UsersList extends Component
{
    use WithPagination;

    #[On('clicker')]
    public function updateList($user = null)
    {
    }

    public function render()
    {
        $users = User::latest()->paginate(3);
        return view('livewire.users-list', compact('users'));
    }
}
