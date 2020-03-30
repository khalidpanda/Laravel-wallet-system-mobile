<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>iCommunity E-wallet</title>
   <link rel="shortcut icon" href="{{asset('uploads/logo.png')}}" type="image/png">
  
 <!-- <link rel="shortcut uploads" href="{{asset('dist/img/fube.png')}}" type="image/png"> -->
 <link rel="stylesheet" href="{{ asset('css/style.css')}}">
 
 <script src="{{ asset('js/chart.js')}}"></script>
  <!-- Font Awesome uploadss -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  
</head>
<body class="layout-footer-fixed ">
  
<div class="wrapper bg1 bg no-gutters">
  <!-- Navbar -->
<!--  <nav class="main-header navbar navbar-expand navbar-white navbar-light">-->
    <!-- Left navbar links -->
    <div class="row no-gutters">
    <div class="col">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link  link2 text-center" data-widget="pushmenu" href="#"> <img class="pay" src="{{ asset('uploads/pay2.png') }}"><br>pay</a>
      </li>
    </ul>
    </div>
    <div class="col">
    <img class="logo" src="{{ asset('uploads/logo.png') }}">
    </div>
    <div class="col">
      <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link  link3 text-center" data-widget="pushmenu" href="#"> <img class="pay" src="{{ asset('uploads/pay2.png') }}"><br>Receive</a>
      </li>
    </ul>
    </div>
  </div>
    
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg1 bg">
    <!-- Content Header (Page header) -->
    <div class="content-header bg1 bg">
      <div class="container-fluid">

      
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
   <div class="row">
    <div class="col">
        <div class="info">
          <a href="{{ url('profile') }}" class="d-block text-white">{{ Auth::user()->name}}</a>

        </div>
    </div>
    <div class="col">
     <div class=" user-img">
          <img src="{{URL::asset('uploads/profile.png')}}" class="img-circle  img-responsive" alt="User Image">
        </div>
    </div>
  </div>
       
     
      </div> 
      <hr class="new1">
      <div class="row top text-center">
    <div class="col">
      <p>Credits :<br>{{number_format(Auth::user()->wallet,2)}}</p>
    </div>
    <div class="vl"></div>
    <div class="col">
      <p>Rewards :<br>{{number_format(Auth::user()->points,2)}}</p>
    </div>
     <div class="vl"></div>
    <div class="col">
      <a href="topup/" class="btn btn-outline text-white top-btn" style="border:1px solid #f8ad3a; border-radius: 25px;">+ Top up</a>
    </div>
  </div>
   <hr class="new1">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield('title')</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content bg">
      <div class="container-fluid">
        <!-- Info boxes -->
      
             @yield('content')
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer me text-center" style="background:#F4B84A;">
  <div class="navbar me "  id="myNavbar">
  <a class="link" href="{{ url('rewards') }}"><img class="menu1" src="{{ asset('uploads/Reward.png') }}"><br>Reward</a>
  <a class="link" href="#news"><img class="menu1" src="{{ asset('uploads/Message.png') }}"><br>Message</a>
  <a class="link" href="{{url('wallet')}}"><img class="menu1" src="{{ asset('uploads/Wallet.png') }}"><br>Wallet</a>
  <a class="link"href="{{url('history')}}"><img class="menu1" src="{{ asset('uploads/History.png') }}"><br>History</a>
   <a class="link" href="{{url('profile')}}"><img class="menu1" src="{{ asset('uploads/Account.png') }}"><br>Account</a>
  
</div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('dist/js/demo.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>



<script type="text/javascript">
    $(document).ready(function() {
    $('#table').DataTable( {
        responsive: {
            details: {
                type: 'column',
                target: 'tr'
            }
        },
        columnDefs: [ {
            className: 'control',
            orderable: false,
            targets:   0
        } ],
        order: [ 1, 'asc' ]
    } );

$('.datepicker').datepicker({
        todayHighlight: true,
         autoclose: true
      });

$('.datepicker1').datepicker({
        format: "mm-yyyy",
    startView: "months", 
    minViewMode: "months",
    autoclose: true

      });
  
 


} );
</script>
 @toastr_render
</body>
</html>
