<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class ShowUsers extends Component
{
    protected $listeners = ['render' => 'render'];
    

    public function render()
    {
        $users = User::all();

        return view('livewire.show-users', [
            'users' => $users
        ]);
    }
}
