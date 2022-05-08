<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\State;
use App\Models\Station;

class StationComponent extends Component
{
    public $reference; public $name; public $state; public $division; public $address;
    public function render(Station $station)
    {
        $this->reference = $station->getReference();
        $states = State::getAllStates();
        return view('livewire.station-component', compact('states'));
    }

    public function saveStation(){
        Station::saveStation($this->reference, $this->name, $this->state, $this->division, $this->address);
        $this->name = null; $this->division = null; $this->address = null;
        session()->flash('message', 'Intelligence Station Added Successfully');
    }

}
