@extends('layout.master')
@section('title')
    All Stations
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
        <div class="card mx-4">
            <div class="card-body">
                <h4 class="card-title">Nigeria Police -  States Police Stations</h4>
                <div class="table-responsive">
                    <table id="list_table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Reference</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Division</th>
                                <th>State</th>
                                <th>Settings</th>
                            </tr>
                        </thead>
                            <tbody>
                                @forelse ($stations as $station )
                                    <tr class="odd" role="row">
                                        <td class="sorting_1">{{++$loop->index}}</td>
                                        <td>{{$station->reference}}</td>
                                        <td>{{$station->name}}</td>
                                        <td>{{$station->address}}</td>
                                        <td>{{$station->division}}</td>
                                        <td>{{$station->state->name}}</td>    
                                        <td><a href="{{route('station.edit', $station->reference)}}" class="btn btn-sm btn-info text-white">Edit</a></td>        
                                    </tr>
                                    @empty
                                        <p>No Record Found</p>
                                    @endforelse
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
