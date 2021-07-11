@extends('layout.master')
@section('title')
    {{$case->title}}/{{$case->case_reference}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-title text-center lead mt-2">{{$case->title}}/{{$case->case_reference}}/{{$case->status}}</div>
                <div class="card-title text-center">Date: {{$case->created_at->diffForHumans()}}</div>
                <div class="card-title text-center">Officer in Charge: {{$case->officer->rank->name}} - {{$case->officer->first_name}} {{$case->officer->last_name}}</div>
                <div class="card-body">
                    <div class="text-justify">
                       {{$case->description}} 
                    </div> <hr>
                    <!-- complainant -->
                    <div class="card-body d-inline">
                        <div id="verticalcenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="vcenter">Complainant's Details</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body row">
                                        <div class="col-md-8">
                                            <p>Name:{{$case->complainant->first_name}} - {{$case->complainant->last_name}}</p>
                                            <p>Address: {{$case->complainant->address}}</p>
                                            <p>E-Mail: {{$case->complainant->email}}</p>
                                            <p>Phone: {{$case->complainant->phone}}</p>
                                            <p>Gender: {{$case->complainant->gender}}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{asset('photos/'.$case->complainant->image)}}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
	                    <button  alt="default" data-toggle="modal" data-target="#verticalcenter" class="btn btn-primary"><i class="fas fa-user"></i>&nbsp;Complainant</button>
                </div>

                <!-- victim -->
                <div class="card-body d-inline">
                        <div id="verticalcenter4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="vcenter">Victim's Details</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body row">
                                        <div class="col-md-8">
                                            <p>Name:{{$case->victim->first_name}} - {{$case->victim->last_name}}</p>
                                            <p>Address: {{$case->victim->address}}</p>
                                            <p>E-Mail: {{$case->victim->email}}</p>
                                            <p>Phone: {{$case->victim->phone}}</p>
                                            <p>Gender: {{$case->victim->gender}}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{asset('photos/'.$case->victim->image)}}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
	                    <button  alt="default" data-toggle="modal" data-target="#verticalcenter4" class="btn btn-warning"><i class="fas fa-user"></i>&nbsp;Victim</button>


                        <!-- accused -->
                        <div class="card-body d-inline">
                        <div id="verticalcenter5" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="vcenter">Accused's Details</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body row">
                                        <div class="col-md-8">
                                            <p>Name:{{$case->accused->first_name}} - {{$case->accused->last_name}}</p>
                                            <p>Address: {{$case->accused->address}}</p>
                                            <p>E-Mail: {{$case->accused->email}}</p>
                                            <p>Phone: {{$case->accused->phone}}</p>
                                            <p>Gender: {{$case->accused->gender}}</p>
                                            <p>Status: {{$case->accused->status}}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{asset('photos/'.$case->accused->image)}}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
	                    <button  alt="default" data-toggle="modal" data-target="#verticalcenter5" class="btn btn-danger"><i class="fas fa-user"></i>&nbsp;Accused</button>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
