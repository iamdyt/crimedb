<?php

namespace App\Http\Controllers;

use App\Models\Rank;
use Illuminate\Http\Request;

class RankController extends Controller
{
    
    public function create(){
        return view('rank.create');
    }

    public function store(){
        $rank = Rank::whereName(request('name'))->first();
        if($rank){
            return redirect()->back()->withError('Rank Existed');
        }
        Rank::create(request()->except('_token'));
        return redirect()->route('rank.all')->withInfo('Rank Added Successfully');
    }

    public function showAll(){
        $ranks = Rank::all();
        return view('rank.all', compact('ranks'));
    }

    public function edit($id){
        $rank = Rank::findOrFail($id);
        return view('rank.edit', compact('rank'));
    }

    public function update($id){
        $rank = Rank::findOrFail($id);
        $rank->update(request()->except('_token'));
        return redirect()->route('rank.all')->withMessage('Rank Updated Successfully');
    }

    public function delete($id){
        $rank = Rank::findOrFail($id);
        $rank->delete();
        return redirect()->route('rank.all')->withInfo('Rank Deleted Successfully');
    }
}
