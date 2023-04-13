<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{

    protected $listeners = ['render' => 'render'];
    public function render()
    {
        $users = User::all();
        $countUsers = $users->count();

        return view('livewire.users', [
            'users' => $users,
            'countUsers' => $countUsers
        ]);
    }
}
