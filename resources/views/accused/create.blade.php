@extends('layout.master')

@section('title')
    Add New Case
@endsection

@section('content')
<div class="row mt-3">
        <div class="col-md-8 offset-md-2 ">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">ACCUSED FORM</h4>
                     <hr>
                    <form action="{{route('accused.store')}}" method="post" class="row" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="col-md-6">
                            <label for="">First Name</label>
                            <input type="text" name="first_name" placeholder="First Name" required class="form-control">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" placeholder="Last Name" required class="form-control">
                            <label for="">Date of Birth</label>
                            <input type="date" name="date_of_birth" placeholder="Date of Birth" required class="form-control">
                            <label for="">Gender</label>
                            <select name="gender" class="form-control" id="">
                                <option value="">Choose a gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label for="">Mobile Phone</label>
                            <input type="text" name="phone" placeholder="phone" required class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Email</label>
                            <input type="email" name="email" placeholder="Valid E-Mail" required class="form-control">
                            <label for="">Address</label>
                            <input type="text" name="address" placeholder="Valid Address" required class="form-control">
                            <label for="">State</label>
                            <select name="state_id" class="form-control" id="">
                                <option value="">Choose your state</option>
                                @forelse ($states as $state )
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                @empty
                                    <p>No record</p>
                                @endforelse
                            </select>

                            <label for="">Station</label>
                            <select name="station_id" class="form-control" id="">
                                <option value="{{auth()->user()->station_id}}">{{auth()->user()->station->name}}</option>
                            </select>

                            <label for="">Image</label>
                            <input type="file" name="image" required class="form-control">
                        </div>

                        <button class="btn-block btn mt-2 btn-info">Submit Entry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection