<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('template/assets/images/favicon.png')}}">
    <link href="{{asset('template/assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('template/dist/css/style.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('template/assets/extra-libs/dataTables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/assets/libs/toastr/build/toastr.min.css')}}">
    <title>@yield('title')</title>
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper">
        @include('layout.header')
        @include('layout.side')

        <div>
            <div class="page-wrapper">
              <div class="container-fluid">
                @yield('content')
              </div>
            </div>
        </div> 
        <footer class="footer text-center">
           A Project By :
        </footer>
    </div>
    <script src="{{asset('template/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
 
    <script src="{{asset('template/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- apps -->
    <script src="{{asset('template/dist/js/app.min.js')}}"></script>
    <script src="{{asset('template/dist/js/app.init.light-sidebar.js')}}"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('template/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('template/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('template/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('template/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('template/dist/js/custom.js')}}"></script>
    <script src="{{asset('template/assets/extra-libs/dataTables/datatables.min.js')}}"></script>
    <script src="{{asset('template/assets/libs/toastr/build/toastr.min.js')}}"></script>
    <script>
        $(document).ready( function () {
            $('#list_table').DataTable();
        } );
        
        @if(session('error'))
            toastr.error("{{session('error') ?? ''}}")
        @endif

        @if(session('info'))
            toastr.info("{{session('info') ?? ''}}")
        @endif
        @if(session('message'))
            toastr.success("{{session('message') ?? ''}}")
        @endif
    </script>
</body>

</html>