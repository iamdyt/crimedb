@extends('layout.master')

@section('title')
    Edit Rank
@endsection

@section('content')
<div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{route('rank.update', $rank->id)}}">
                        {{csrf_field()}}
                        <label for="">Edit Rank</label>
                        <input type="text" name="name" value="{{$rank->name}}" placeholder=""  required class="form-control" id="">
                        <button class="btn btn-block btn-primary mt-2">Update Entry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection