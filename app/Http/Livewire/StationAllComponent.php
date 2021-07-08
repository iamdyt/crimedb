<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Station;
class StationAllComponent extends Component
{
    public function render()
    {
        $stations = Station::all();
        return view('livewire.station-all-component', compact('stations'));
    }
}
