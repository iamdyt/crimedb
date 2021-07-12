<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Station;

class StationController extends Controller
{

    public function __construct()
    {
        $this->middleware('authy');
    }
    public function create(Station $station){
        $ref = $station->getReference();
        $states = State::all();
        return view('station.create', compact('states','ref'));
    }

    public function showAll(){
        $stations = Station::all();
        return view('station.all', compact('stations'));
    }

    public function store(){
        $station = Station::whereReference(request('reference'))->orWhere('name', request('name'))->first();
        if($station){
            return back()->withError('Station Existed Already');
        }
        Station::create(request()->except('_token'));
        return redirect()->route('station.all')->withMessage('Station Created!');
    }

    public function edit($ref){
        $states = State::all();
        $station = Station::whereReference($ref)->firstOrFail();
        return view('station.edit', compact('station','states'));
    }
    public function update($ref){
        $station = Station::whereReference($ref)->firstOrFail();
        $station->update(request()->except('_token'));
        return back()->withMessage('Station Updated Successfully');
    }
}
