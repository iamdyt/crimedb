@extends('layout.master')
@section('title')
    Administrator's Dashboard
@endsection

@section('content')
@can('crud_case')
       <div class="row">
        <div class="col-sm-12 col-lg-3">
            <div class="card bg-orange">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                            <h1 class="m-b-0"><i class="mdi mdi-gradient text-white"></i></h1></div>
                        <div>
                            <h6 class="font-12 text-white m-b-5 op-7">&nbsp; Cases/Incident Reports</h6>
                            <h6 class="text-white font-medium m-b-0">&nbsp; {{$cases->count()}}</h6>
                        </div>
                            <div class="ml-auto">
                                <div class="crypto"></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-3">
            <div class="card bg-cyan">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                            <h1 class="m-b-0"><i class="fas fa-user text-white"></i></h1></div>
                        <div>
                            <h6 class="font-12 text-white m-b-5 op-7">&nbsp; Accuseds</h6>
                            <h6 class="text-white font-medium m-b-0">&nbsp; {{$accuseds->count()}}</h6>
                        </div>
                            <div class="ml-auto">
                                <div class="crypto"></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-3">
            <div class="card bg-purple">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                            <h1 class="m-b-0"><i class="fas fa-user text-white"></i></h1></div>
                        <div>
                            <h6 class="font-12 text-white m-b-5 op-7">&nbsp; Complainants</h6>
                            <h6 class="text-white font-medium m-b-0">&nbsp; {{$complainants}}</h6>
                        </div>
                            <div class="ml-auto">
                                <div class="crypto"></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-3">
            <div class="card bg-secondary">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                            <h1 class="m-b-0"><i class="fas fa-user text-white"></i></h1></div>
                        <div>
                            <h6 class="font-12 text-white m-b-5 op-7">&nbsp; Victims</h6>
                            <h6 class="text-white font-medium m-b-0">&nbsp; {{$victims}}</h6>
                        </div>
                            <div class="ml-auto">
                                <div class="crypto"></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Clerk recent incident -->
    <div class="row">
        <div class="col-12">
        <div class="card ">
            <div class="card-body">
                <h4 class="card-title">Recent Cases</h4>
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
@endcan

@can('view_officer')
   <div class="row">
        <div class="col-sm-12 col-lg-6">
            <div class="card bg-orange">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                            <h1 class="m-b-0"><i class="fas fa-user-circle text-white"></i></h1></div>
                        <div>
                            <h6 class="font-12 text-white m-b-5 op-7">&nbsp; All Officers</h6>
                            <h6 class="text-white font-medium m-b-0">&nbsp; {{$officers->count()}}</h6>
                        </div>
                            <div class="ml-auto">
                                <div class="crypto"></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-6">
            <div class="card bg-cyan">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                            <h1 class="m-b-0"><i class="fas fa-user text-white"></i></h1></div>
                        <div>
                            <h6 class="font-12 text-white m-b-5 op-7">&nbsp; Accuseds</h6>
                            <h6 class="text-white font-medium m-b-0">&nbsp; {{$accuseds->count()}}</h6>
                        </div>
                            <div class="ml-auto">
                                <div class="crypto"></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Recently Added Officers</h4>
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
@endcan

<!-- Central -->
@can('crud_station')
       <div class="row">
        <div class="col-sm-12 col-lg-4">
            <div class="card bg-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                            <h1 class="m-b-0"><i class="fas fa-university text-white"></i></h1></div>
                        <div>
                            <h6 class="font-12 text-white m-b-5 op-7">&nbsp; All Stations</h6>
                            <h6 class="text-white font-medium m-b-0">&nbsp; {{$stations->count()}}</h6>
                        </div>
                            <div class="ml-auto">
                                <div class="crypto"></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-4">
            <div class="card bg-cyan">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                            <h1 class="m-b-0"><i class="fas fa-building text-white"></i></h1></div>
                        <div>
                            <h6 class="font-12 text-white m-b-5 op-7">&nbsp; Departments</h6>
                            <h6 class="text-white font-medium m-b-0">&nbsp; {{$departments->count()}}</h6>
                        </div>
                            <div class="ml-auto">
                                <div class="crypto"></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-4">
            <div class="card bg-purple">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="m-r-10">
                            <h1 class="m-b-0"><i class="fas fa-tags text-white"></i></h1></div>
                        <div>
                            <h6 class="font-12 text-white m-b-5 op-7">&nbsp; Ranks</h6>
                            <h6 class="text-white font-medium m-b-0">&nbsp; {{$ranks->count()}}</h6>
                        </div>
                            <div class="ml-auto">
                                <div class="crypto"></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Clerk recent incident -->
    <div class="row">
        <div class="col-12">
        <div class="card ">
            <div class="card-body">
                <h4 class="card-title">State's  Stations</h4>
                <div class="table-responsive">
                    <table id="list_table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Division</th>
                                <th>Reference</th>
                                <th>State</th>
                            </tr>
                        </thead>
                            <tbody>
                                @forelse ($stations as $station )
                                    <tr class="odd" role="row">
                                        <td class="sorting_1">{{++$loop->index}}</td>
                                        <td>{{$station->name}}</td> 
                                        <td>{{$station->division}}</td>
                                        <td>{{$station->reference}}</td>
                                        <td>{{$station->state->name}}</td>                                               
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
@endcan
@endsection