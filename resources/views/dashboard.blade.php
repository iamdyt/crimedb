@extends('layout.master')
@section('title')
    Administrator's Dashboard
@endsection

@section('content')
    <div class="row">
    <div class="col-sm-12 col-lg-4">
        <div class="card bg-orange">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="m-r-10">
                        <h1 class="m-b-0"><i class="cc BTC text-white"></i></h1></div>
                    <div>
                        <h6 class="font-12 text-white m-b-5 op-7">BTC / Bitcoin</h6>
                        <h6 class="text-white font-medium m-b-0">$12,567.53</h6>
                    </div>
                        <div class="ml-auto">
                            <div class="crypto"></div>
                        </div>
                </div>
                <div class="row text-center text-white m-t-30">
                    <div class="col-4">
                        <span class="font-14 d-block">% 1h</span>
                        <span class="font-medium"><i class="fas fa-arrow-up"></i>0.08</span>
                    </div>
                    <div class="col-4">
                        <span class="font-14 d-block">% 24h</span>
                        <span class="font-medium"><i class="fas fa-arrow-down"></i>-3.06</span>
                    </div>
                    <div class="col-4">
                        <span class="font-14 d-block">% 7d</span>
                        <span class="font-medium"><i class="fas fa-arrow-up"></i>-20.08</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection