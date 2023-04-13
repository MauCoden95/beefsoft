<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;


class CountClients extends Component
{
    protected $listeners = ['render' => 'render'];
    public function render()
    {
        $clients = Client::all();
        $clientsCount = $clients->count();

        return view('livewire.count-clients', compact('clientsCount'));
    }
}
