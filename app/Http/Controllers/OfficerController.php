<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Officer;
use App\Models\State;
use App\Models\Rank;
use App\Models\Station;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function create(){
        $states = State::getAllStates();
        $departments = Department::all();
        $ranks = Rank::all();
        $stations = Station::all();
        return view('officer.create', compact('states','departments','ranks','stations'));
    }

    public function store(){
        $filename = uniqid().request()->file('image')->getClientOriginalName();
        $officer = Officer::whereFirstName(request('first_name'))->whereLastName(request('last_name'))->first();
        if($officer){
            return back()->withError('Officer Existed Already');
        }
        $new_officer = Officer::create(request()->except(['_token','image']));
        $new_officer->update(['image'=> $filename]);
        \move_uploaded_file(request()->file('image'), public_path('photos/'.$filename));
        return redirect()->route('officer.all')->withMessage('Officer Added Successfuly');
    }

    public function showAll(){
        $officers = Officer::all();
        return view('officer.all', compact('officers'));
    }

    public function edit ($id){
        $officer = Officer::findOrFail($id);
        $ranks = Rank::all();
        $stations = Station::all();
        $states = State::all();
        $departments = Department::all();
        return view('officer.edit',compact('officer', 'ranks', 'stations','states','departments'));
    }
    public function update($id){
        $officer = Officer::findOrFail($id);
        if (request()->hasFile('image')){
            unlink(public_path('photos/'.$officer->image));
            $filename = uniqid().request()->file('image')->getClientOriginalName();
            move_uploaded_file(request()->file('image'), public_path('photos/'.$filename));
            $officer->update(request()->except('image'));
            $officer->update([
                'image' => $filename
            ]);
            return redirect()->route('officer.all')->withInfo('Profile Updated Successfully');
        }
        $officer->update(request()->except('image'));
        return redirect()->route('officer.all')->withInfo('Profile Updated Successfully');
    }
    public function delete($id){
        $officer = Officer::findOrFail($id);
        unlink(public_path('photos/'.$officer->image));
        $officer->delete();
        return back()->withInfo('Officer Deleted Successfully');
    }
}
