@extends('layout.master')
@section('title')
    All Cases
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
        <div class="card mx-4">
            <div class="card-body">
                <h4 class="card-title">Nigeria Police - {{auth()->user()->station->name}} All Cases</h4>
                <div class="table-responsive">
                    <table id="list_table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Title</th>
                                <th>Case Reference</th>
                                <th>Status</th>
                                <th>Complainant</th>
                                <th>Accused</th>
                                <th>Officer in Charge</th>
                                <th>Settings</th>
                            </tr>
                        </thead>
                            <tbody>
                                @forelse ($cases as $case )
                                    <tr class="odd" role="row">
                                        <td class="sorting_1">{{++$loop->index}}</td>
                                        <td>{{$case->title}}</td> 
                                        <td>{{$case->case_reference}}</td>
                                        <td>{{$case->status}}</td>
                                        <td>{{$case->complainant->first_name}}</td> 
                                        <td>{{$case->accused->first_name}}</td>
                                        <td>{{$case->officer->rank->name}} - {{$case->officer->first_name}}</td>
                                        <td><a href="{{route('case.clerk.single', $case->case_reference)}}" class="btn btn-sm btn-info text-white">view</a></td>   
                                              
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
