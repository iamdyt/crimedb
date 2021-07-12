<?php

namespace App\Http\Controllers;

use App\Models\Accused;
use App\Models\Complainant;
use App\Models\Officer;
use App\Models\State;
use App\Models\Victim;
use App\Models\CaseFile;
use Illuminate\Http\Request;

class CaseFileController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('authy');
    }

    public function complainantView(){
        $states = State::getAllStates();
        return view('complainant.create', compact('states'));
    }

    public function storeComplainant(){
        if (request()->hasFile('image')){
            $filename = uniqid().request()->file('image')->getClientOriginalName();
            $complainant = Complainant::create(request()->except(['_token', 'image']));
            move_uploaded_file(request()->file('image'), public_path('photos/'.$filename));
            $complainant->update(['image'=>$filename]);
            return redirect()->route('victim.add')->withMessage('Complainant Added Successfully');
            
        }
    }

    public function victimView(){
        $states = State::getAllStates();
        return view('victim.create', compact('states'));
    }

    public function storeVictim(){
        if (request()->hasFile('image')){
            $filename = uniqid().request()->file('image')->getClientOriginalName();
            $victim = Victim::create(request()->except(['_token', 'image']));
            move_uploaded_file(request()->file('image'), public_path('photos/'.$filename));
            $victim->update(['image'=>$filename]);
            return redirect()->route('accused.add')->withMessage('Victim Added Successfully');
            
        }
    }

    public function accusedView(){
        $states = State::getAllStates();
        return view('accused.create', compact('states'));
    }

    public function storeAccused(){
        if (request()->hasFile('image')){
            $filename = uniqid().request()->file('image')->getClientOriginalName();
            $accused = Accused::create(request()->except(['_token', 'image']));
            move_uploaded_file(request()->file('image'), public_path('photos/'.$filename));
            $accused->update(['image'=>$filename]);
            return redirect()->route('case.add')->withMessage('Accused Added Successfully');
            
        }
    }

    public function caseView(){
        $state = State::whereId(auth()->user()->station->state->id)->first();
        $officers = Officer::whereStationId(auth()->user()->station_id)->get();
        $victim = Victim::whereStationId(auth()->user()->station_id)->latest()->first();
        $accused = Accused::whereStationId(auth()->user()->station_id)->latest()->first();
        $complainant = Complainant::whereStationId(auth()->user()->station_id)->latest()->first();
        $status = ['pending', 'Processing','In-Court','Closed'];

        return view('case.create', compact('state', 'officers', 'victim', 'accused', 'complainant','status'));
    }

    public function storeCase(){
        CaseFile::create(request()->except('_token'));
        return redirect()->route('case.clerk.all')->withMessage('Case Opened Successfully');
    }

    public function allClerkView(){
        $cases = CaseFile::whereStationId(auth()->user()->station_id)->get();
        return view('case.all', compact('cases'));
    }

    public function singleClerkView($ref){
        $case = CaseFile::whereCaseReference($ref)->first();
        return view('case.single', compact('case'));
    }
}
