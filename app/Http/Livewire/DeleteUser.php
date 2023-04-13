<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class DeleteUser extends Component
{
    public $delete_user;

    public function delete(){
        $user = User::where('username','=',$this->delete_user)->get();

        $user->each->delete();

        $this->emit('render');

        session()->flash('message', 'Usuario eliminado con exito.');
    }

    public function render()
    {
        $users = User::all();

        return view('livewire.delete-user', compact('users'));
    }
}
