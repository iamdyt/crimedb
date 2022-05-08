@extends('layout.master')
@section('title')
    All Complainants
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
        <div class="card mx-4">
            <div class="card-body">
                <h4 class="card-title">Nigeria Intelligence - {{auth()->user()->station->name}} - All Complainants</h4>
                <div class="table-responsive">
                    <table id="list_table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>DOBirth</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Associated Cases</th>
                                
                            </tr>
                        </thead>
                            <tbody>
                                @forelse ($complainants as $comp )
                                    <tr class="odd" role="row">
                                        <td class="sorting_1">{{++$loop->index}}</td>
                                        <td>{{$comp->first_name}}</td> 
                                        <td>{{$comp->last_name}}</td>
                                        <td>{{$comp->date_of_birth}}</td>
                                        <td>{{$comp->phone}}</td> 
                                        <td>{{$comp->gender}}</td>
                                        <td>{{$comp->email}}</td>
                                        <td>
                                            <select name="" onchange="window.location.href= '/case/'+this.value+'/view' " id="">
                                                <option value="">Select Case</option>
                                                @forelse ($comp->reports as $rep )
                                                    <option value="{{$rep->case_reference}}">{{$rep->title}}</option>
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
