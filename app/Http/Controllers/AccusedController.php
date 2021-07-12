<?php

namespace App\Http\Controllers;

use App\Models\Accused;
use Illuminate\Http\Request;

class AccusedController extends Controller
{
    public function __construct()
    {
        $this->middleware('authy');
    }

    public function accusedPerStation(){
        $status = ['Invited', 'Arrested', 'Bailed','Jailed', 'Freed'];
        $accuseds = Accused::whereStationId(auth()->user()->station_id)->get();
        return view('accused.all', compact('accuseds', 'status'));
    }

    public function changeStatus($id, $status){
        Accused::findOrFail($id)->update(['status'=>$status]);
        return back()->withInfo('Accused is '.$status);
    }
}
