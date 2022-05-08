@extends('layout.master')
@section('title')
    All Accuseds
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
        <div class="card mx-4">
            <div class="card-body">
                <h4 class="card-title">Nigeria Intelligence - {{auth()->user()->station->name}} - All Accuseds</h4>
                <div class="table-responsive">
                    <table id="list_table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>LastName</th>
                                <th>DOBirth</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Cases</th>
                                @can('view_officer')
                                    <th>Settings</th>
                                @endcan
                                
                            </tr>
                        </thead>
                            <tbody>
                                @forelse ($accuseds as $acc )
                                    <tr class="odd" role="row">
                                        <td class="sorting_1">{{++$loop->index}}</td>
                                        <td>{{$acc->first_name}}</td> 
                                        <td>{{$acc->last_name}}</td>
                                        <td>{{$acc->date_of_birth}}</td>
                                        <td>{{$acc->phone}}</td> 
                                        <td>{{$acc->email}}</td>
                                        <td>{{$acc->status}}</td>
                                        <td>
                                            <select name="" onchange="window.location.href= '/case/'+this.value+'/view' " id="">
                                                <option value="">Select Case</option>
                                                @forelse ($acc->cases as $case )
                                                    <option value="{{$case->case_reference}}">{{$case->title}}</option>
                                                @empty
                                                    <p>No record</p>
                                                @endforelse
                                            </select>
                                        </td>  
                                        @can('view_officer')
                                            <td>
                                                <select name="" onchange="window.location.href='/accused/'+{{$acc->id}}+'/'+this.value" id="">
                                                    <option value="">Change status</option>
                                                    @forelse ($status as $st )
                                                        <option value="{{$st}}">{{$st}}</option>
                                                    @empty
                                                        
                                                    @endforelse
                                                </select>
                                            </td> 
                                        @endcan       
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
