@extends('layout.master')
@section('title')
    All Victims
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
        <div class="card mx-4">
            <div class="card-body">
                <h4 class="card-title">Nigeria Intelligence - {{auth()->user()->station->name}} - All Victims</h4>
                <div class="table-responsive">
                    <table id="list_table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Date of Birth</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Associated Cases</th>
                                
                            </tr>
                        </thead>
                            <tbody>
                                @forelse ($victims as $vic )
                                    <tr class="odd" role="row">
                                        <td class="sorting_1">{{++$loop->index}}</td>
                                        <td>{{$vic->first_name}}</td> 
                                        <td>{{$vic->last_name}}</td>
                                        <td>{{$vic->date_of_birth}}</td>
                                        <td>{{$vic->phone}}</td> 
                                        <td>{{$vic->gender}}</td>
                                        <td>{{$vic->email}}</td>
                                        <td>
                                            <select name="" onchange="window.location.href= '/case/'+this.value+'/view' " id="">
                                                <option value="">Select Case</option>
                                                @forelse ($vic->incidents as $inc )
                                                    <option value="{{$inc->case_reference}}">{{$inc->title}}</option>
                                                @empty
                                                    <p>No record</p>
                                                @endforelse
                                            </select>
                                        </td>           
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
