<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;


class CountClients extends Component
{
    public function render()
    {
        $clients = User::all();
        $clientsCount = $clients->count();

        return view('livewire.count-clients', compact('clientsCount'));
    }
}
