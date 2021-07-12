<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Victim;

class VictimController extends Controller
{
    public function __construct()
    {
        $this->middleware('authy');
    }
    public function victimPerStation(){
        $victims = Victim::whereStationId(auth()->user()->station_id)->get();
        return view('victim.all', compact('victims'));
    }
}
