<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class CreateUser extends Component
{
    public $name;
    public $username;
    public $password;
    public $confirm;

    public function save()
    {
        if ($this->password == $this->confirm) {
            User::create([
                'name' => $this->name,
                'username' => $this->username,
                'password' => Hash::make($this->password),
            ]);    
        }        

        $this->emit('render');
    
        session()->flash('message', 'Usuario creado con exito.');
    }

    public function render()
    {
        return view('livewire.create-user');
    }
}
