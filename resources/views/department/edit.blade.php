@extends('layout.master')

@section('title')
    Edit Department
@endsection

@section('content')
<div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                   @if (session()->has('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                   @endif
                    <form method="POST" action="{{route('department.update', $department->id)}}">
                        {{csrf_field()}}
                        <label for="">Edit Department</label>
                        <input type="text" name="name" value="{{$department->name}}" placeholder=""  required class="form-control" id="">
                        <button class="btn btn-block btn-primary mt-2">Update Entry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection