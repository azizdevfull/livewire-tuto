<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Clicker extends Component
{
    public $name;
    public $email;
    public $password;
    public function createNewUser()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);
    }
    public function render()
    {
        $users = User::all();
        return view('livewire.clicker', compact('users'));
    }
}
