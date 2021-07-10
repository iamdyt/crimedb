@extends('layout.master')

@section('title')
    Add New Case
@endsection

@section('content')
<div class="row mt-3">
        <div class="col-md-8 offset-md-2 ">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">CASE FORM</h4>
                     <hr>
                    <form action="{{route('case.store')}}" method="post" class="row">
                        {{csrf_field()}}
                        <div class="col-md-6">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control">

                            <label for="">Reference</label>
                            <input type="text" name="case_reference" readonly value="{{'CAS'.uniqid().date('Y')}}" class="form-control">

                            <label for="">Description</label> <br>
                            <textarea name="description" required id=" class="form-control" cols="43" rows="4">Statement From Complainant and Victims</textarea> <br>

                            <label for="">Complainant</label>
                            <select name="complainant_id" id="" class="form-control">
                                <option value="">Choose Complainant</option>
                                    <option value="{{$complainant->id}}">{{$complainant->first_name}}-{{$complainant->last_name}}</option>
                            </select>

                            <label for="">Victim</label>
                            <select name="victim_id" id="" class="form-control">
                                <option value="">Choose Victim</option>
                                    <option value="{{$victim->id}}">{{$victim->first_name}}-{{$victim->last_name}}</option>
                            </select>

                        </div>
                        <div class="col-md-6">

                            <label for="">Accused</label>
                            <select name="accused_id" id="" class="form-control">
                                <option value="">Choose Accused</option>
                                    <option value="{{$accused->id}}">{{$accused->first_name}}-{{$accused->last_name}}</option>
                            </select>

                            <label for="">Assign Officer to Case</label>
                            <select name="officer_in_charge" id="" class="form-control">
                                <option value="">Assign Officer</option>
                                @forelse ($officers as $off )
                                    <option value="{{$off->id}}"> {{$off->rank->name}}-{{$off->first_name}}-{{$off->last_name}}</option>
                                @empty
                                    <p>No Record</p>
                                @endforelse
                            </select>

                            <label for="">State</label>
                            <select name="state_id" class="form-control" id="">
                                <option value="">Choose your state</option>
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                            </select>

                            <label for="">Station</label>
                            <select name="station_id" class="form-control" id="">
                                <option value="{{auth()->user()->station_id}}">{{auth()->user()->station->name}}</option>
                            </select>
                        </div>
                        <button class="btn-block btn mt-2 btn-info">Submit Entry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection