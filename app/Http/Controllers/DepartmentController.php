<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function create(){
        return view('department.create');
    }

    public function store(){
        $dept = Department::whereName(request('name'))->first();
        if($dept){
            return back()->withError('Department Existed Already');
        }
        Department::Create(request()->except('_token'));
        return back()->withMessage('Department Added Successfully');
    }

    public function showAll(){
        $departments = Department::all();
        return view('department.all', compact('departments'));
    }

    public function edit($id){
        $department = Department::whereId($id)->firstOrFail();
        return view('department.edit', compact('department'));
    }

    public function update($id){
        $department = Department::findOrFail($id);
        $department->update(request()->except('_token'));
        return back()->withMessage('Department Updated Successfully');
    }

    public function delete($id){
        $department = Department::findOrFail($id);
        $department->delete();
        return back()->withMessage('Deleted Successfully');
    }
}
