<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;

class DeleteClient extends Component
{
    public $delete_client;

    public function delete(){
        $client = Client::where('name','=',$this->delete_client)->get();

        $client->each->delete();

        $this->emit('render');

        session()->flash('message', 'Cliente eliminado con exito.');
    }

    public function render()
    {   
        $clients = Client::all();

        return view('livewire.delete-client', compact('clients'));
    }
}
