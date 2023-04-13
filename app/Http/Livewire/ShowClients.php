<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;

class ShowClients extends Component
{
    public function render()
    {
        $clients = Client::all();

        return view('livewire.show-clients', compact('clients'));
    }
}
