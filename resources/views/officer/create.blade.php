@extends('layout.master')

@section('title')
    Add Officer
@endsection

@section('content')
<div class="row mt-5">
        <div class="col-md-10 offset-md-1 ">
            <div class="card">
                <div class="card-body">
                    <p class="lead">New Police Officer Entry</p>
                    <hr>
                    <form method="POST" class="row" action="{{route('officer.store')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="col-md-6">
                            <label for="">First Name</label>
                            <input type="text" name="first_name"  placeholder="Officer's First Name"  required class="form-control" id="">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name"  placeholder="Officer's Last Name"  required class="form-control" id="">
                            <label for="">Mobile Number</label>
                            <input type="number" name="phone"  placeholder="Mobile Number"  required class="form-control" id="">
                            <label for="">Serial Reference</label>
                            <input type="text" name="references" readonly value="{{uniqid().'NPF'}}"  placeholder="Serial Reference"  required class="form-control" id="">
                            <label for="">Choose Image</label>
                            <input type="file" name="image"  placeholder="Image"  required class="form-control" id="">
                        </div>
                        
                        <div class="col-md-6">
                            <label for="">Choose Rank</label>
                            <select name="rank_id" id="" required class="form-control">
                                <option value="">Select a Rank</option>
                                @forelse ($ranks as $rank )
                                    <option value="{{$rank->id}}">{{$rank->name}}</option>
                                    @empty
                                        <p>No Record Found</p>
                                @endforelse
                            </select>

                            <label for="">Choose Department</label>
                            <select name="department_id" id="" required class="form-control">
                                <option value="">Select a Department</option>
                                @forelse ($departments as $dept )
                                    <option value="{{$dept->id}}">{{$dept->name}}</option>
                                    @empty
                                        <p>No Record Found</p>
                                @endforelse
                            </select>

                            <label for="">Choose Station</label>
                            <select name="station_id" id="" required class="form-control">
                                <option value="">Select a Station</option>
                                @forelse ($stations as $station )
                                    <option value="{{$station->id}}">{{$station->name}}</option>
                                    @empty
                                        <p>No Record Found</p>
                                @endforelse
                            </select>

                            <label for="">State of Origin</label>
                            <select name="state_of_origin_id" id="" required class="form-control">
                                <option value="">Select a Station</option>
                                @forelse ($states as $state )
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                    @empty
                                        <p>No Record Found</p>
                                @endforelse
                            </select>
                        </div>
                        
                        <button class="btn btn-large mx-3 btn-primary mt-2">Submit Entry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection