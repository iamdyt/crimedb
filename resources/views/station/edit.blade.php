@extends('layout.master')

@section('title')
    Edit Station
@endsection

@section('content')
<div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                   @if (session()->has('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                   @endif
                    <form method="POST" action="{{route('station.update', $station->reference)}}">
                        {{csrf_field()}}
                        <label for="">Reference</label>
                        <input type="text" name="reference" value="{{$station->reference}}" placeholder=""  readonly required class="form-control" id="">

                        <label for="">Station Name</label>
                        <input type="text" name="name" placeholder="Name" value="{{$station->name}}"  required class="form-control" id="">

                        <label for="">Division</label>
                        <input type="text" name="division" value="{{$station->division}}" placeholder="Division" required class="form-control" id="">

                        <label for="">Station Address</label>
                        <input type="text" name="address" value="{{$station->address}}" placeholder="Address" required class="form-control" id="">

                        <label for="">State</label>
                        <select name="state_id" required class="form-control" id="">
                            <option value="{{$station->state_id}}">{{$station->state->name}}</option>
                            @forelse ( $states as $state)
                              <option value="{{$state->id}}"> {{$state->name}} </option>  
                            @empty
                                <p>Nothing to display</p>
                            @endforelse
                        </select>
                        <button class="btn btn-block btn-primary mt-2">Update Entry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection