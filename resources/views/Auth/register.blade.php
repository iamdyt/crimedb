<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>NPF-CrimeDB-Admin Auth Area</title>
    <link href="{{asset('template/dist/css/style.min.css')}}" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>

        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="margin-top: -6rem;">
            <div class="auth-box">
                <div>
                    <div class="logo">
                        <span class="db"><img src="{{asset('template/assets/images/users/2.jpeg')}}" width="40%" alt="logo" /></span>
                        <h5 class="font-medium m-b-20">Sign Up to Admin</h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal m-t-5" method="POST" action="{{route('register.post')}}">
                                {{csrf_field()}}
                                <div class="form-group row ">
                                    <div class="col-12 ">
                                        <input name="username" class="form-control form-control-lg" type="text" required placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input name="email" class="form-control form-control-lg" type="text" required placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input name="password" class="form-control form-control-lg" type="password" required placeholder="Password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <select name="role" required class="form-control">
                                            <option value="">Select a Role</option>
                                            @forelse ($roles as $role )
                                                <option value="{{$role}}">{{$role}}</option>
                                            @empty
                                                <p>No record</p>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <select name="station_id" required id="" class="form-control">
                                            <option value="">Select a Station</option>
                                            @forelse ($stations as $station )
                                                <option value="{{$station->id}}">{{$station->name}}</option>
                                            @empty
                                                <p>No record</p>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group text-center ">
                                    <div class="col-xs-12 p-b-20 ">
                                        <button class="btn btn-block btn-lg btn-info " type="submit ">SIGN UP</button>
                                    </div>
                                </div>
                                <div class="form-group m-b-0 m-t-10 ">
                                    <!-- <div class="col-sm-12 text-center ">
                                        Already have an account? <a href="authentication-login1.html " class="text-info m-l-5 "><b>Sign In</b></a>
                                    </div> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('template/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('template/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script>
    $('[data-toggle="tooltip "]').tooltip();
    $(".preloader ").fadeOut();
    </script>
</body>

</html>