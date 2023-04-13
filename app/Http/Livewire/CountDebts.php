<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Debt;

class CountDebts extends Component
{
    public function render()
    {
        $debts = Debt::all();
        $countDebts = $debts->count();

        return view('livewire.count-debts', compact('countDebts'));
    }
}
