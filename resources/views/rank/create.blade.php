@extends('layout.master')

@section('title')
    Add Rank
@endsection

@section('content')
<div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{route('rank.store')}}">
                        {{csrf_field()}}
                        <label for="">Rank Name</label>
                        <input type="text" name="name"  placeholder="Rank Name"  required class="form-control" id="">
                        <button class="btn btn-block btn-primary mt-2">Submit Entry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection