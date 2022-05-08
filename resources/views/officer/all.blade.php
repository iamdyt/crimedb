@extends('layout.master')
@section('title')
    All Officers
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
        <div class="card mx-4">
            <div class="card-body">
                <h4 class="card-title">Nigeria Intelligence -  All Officers</h4>
                <div class="table-responsive">
                    <table id="list_table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>Reference</th>
                                <th>Mobile No</th>
                                <th>Station</th>
                      
                                <th>Settings</th>
                            </tr>
                        </thead>
                            <tbody>
                                @forelse ($officers as $officer )
                                    <tr class="odd" role="row">
                                        <td class="sorting_1">{{++$loop->index}}</td>
                                        <td>{{$officer->first_name}}</td> 
                                        <td>{{$officer->last_name}}</td>
                                        <td>{{$officer->references}}</td>
                                        <td>{{$officer->phone}}</td> 
                                        <td>{{$officer->station->name}}</td>
                                        <td><a href="{{route('officer.edit', $officer->id)}}" class="btn btn-sm btn-info text-white">Edit</a><a href="{{route('officer.delete', $officer->id)}}" class="btn btn-sm btn-danger text-white">Delete</a></td>   
                                              
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
