<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complainant;

class ComplainantController extends Controller
{

    public function __construct()
    {
        $this->middleware('authy');
    }
    public function complainantPerStation(){
        $complainants = Complainant::whereStationId(auth()->user()->station_id)->get();
        return view('complainant.all', compact('complainants'));
    }
}
