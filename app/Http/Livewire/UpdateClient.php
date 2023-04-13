<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;

class UpdateClient extends Component
{
    public $update_client;
    public $address;
    public $phone;
    public $phone2;

    public function update(){
        $client = Client::where('name','=',$this->update_client)->get();

        $client->each->update([
            'address' => $this->address,
            'phone' => $this->phone,
            'phone2' => $this->phone2,
        ]);

        $this->emit('render');
    
        session()->flash('message', 'Cliente actualizado con exito.');
    }

    public function render()
    {
        $clients = Client::all();

        return view('livewire.update-client', compact('clients'));
    }
}
