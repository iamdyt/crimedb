@extends('layout.master')
@section('title')
    All Department
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
        <div class="card mx-4">
            <div class="card-body">
                <h4 class="card-title">Nigeria Intelligence -  States Intelligence Station Department</h4>
                <div class="table-responsive">
                    <table id="list_table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Settings</th>
                            </tr>
                        </thead>
                            <tbody>
                                @forelse ($departments as $dept )
                                    <tr class="odd" role="row">
                                        <td class="sorting_1">{{++$loop->index}}</td>
                                        <td>{{$dept->name}}</td>   
                                        <td><a href="{{route('department.edit', $dept->id)}}" class="btn btn-sm btn-info text-white">Edit</a><a href="{{route('department.delete',$dept->id)}}" class="btn btn-sm btn-danger text-white">Delete</a></td>   
                                              
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
