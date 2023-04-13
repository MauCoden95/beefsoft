<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;

class CreateClient extends Component
{
    public $name;
    public $dni;
    public $address;
    public $phone;
    public $phone2;

    public function save()
    {
        Client::create([
            'name' => $this->name,
            'dni' => $this->dni,
            'address' => $this->address,
            'phone' => $this->phone,
            'phone2' => $this->phone2,
        ]);    
        

        $this->emit('render');
    
        session()->flash('message', 'Cliente creado con exito.');
    }

    public function render()
    {
        return view('livewire.create-client');
    }
}
