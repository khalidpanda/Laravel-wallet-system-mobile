<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>ICommunity</title>
  
 <!-- <link rel="shortcut icon" href="{{asset('dist/img/fube.png')}}" type="image/png"> -->
 <link rel="stylesheet" href="{{ asset('css/app.css')}}">
 
 <script src="{{ asset('js/chart.js')}}"></script>
  <!-- Font Awesome Icons -->
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
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #212529;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars" style="color: white;"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
   <center><img class="logo" src="{{ asset('uploads/logo.png') }}" style="width: 20%;"></center>

    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('home') }}" class="brand-link">
     <!--  <img src="{{URL::asset('/dist/img/fube2.png')}}" alt="AdminLTE Logo" class="brand-image "
           style="opacity: .8">&nbsp;&nbsp;   -->
      <span class="brand-text font-weight-light">ICommunity</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img  style="width: 3.5rem !important;" src="{{URL::asset('/dist/img/user4.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('profile') }}" class="d-block">{{ Auth::user()->name}}</a>
          <a  class="d-block">Wallet : 
            @if ( Auth::user()->chips_total )
            ${{ Auth::user()->chips_total}}
            @else
            0
            @endif
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
                <a href="{{ url('home') }}" class="nav-link active" style="background-color: #ff8c00;">
                  <i class="fa fa-home nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
              <?php use App\Models\UserRole;?>
              <?php 
              $UserRole = UserRole::where('user_id', Auth::user()->id)->where('modules', 'Players')->first();
              $UserRole1 = UserRole::where('user_id', Auth::user()->id)->where('modules', 'Agents') ->first(); 
              $UserRole2 = UserRole::where('user_id', Auth::user()->id)->where('modules', 'UAC') ->first();
              $UserRole3 = UserRole::where('user_id', Auth::user()->id)->where('modules', 'Reports') ->first();
              $UserRole4 = UserRole::where('user_id', Auth::user()->id)->where('modules', 'Chips') ->first(); 

              $UserRole5 = UserRole::where('user_id', Auth::user()->id)->where('modules', 'Tables') ->first(); 
              ?>
             
              <li class="nav-item">
                <a href="{{ url('cars') }}" class="nav-link ">
                  <i class="fas fa-car nav-icon"></i>
                  <p>Cars</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="{{ url('profile') }}" class="nav-link ">
                  <i class="fa fa-user nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>


               <?php if (!empty($UserRole2)):?>
                <?php if($UserRole2->edit == 'on' || $UserRole2->view == 'on'):?>
               <li class="nav-item">
                <a href="{{ url('user_access') }}" class="nav-link ">
                  <i class="fa fa-key nav-icon"></i>
                  <p>User Access Control</p>
                </a>
              </li>
               <?php endif;?>
                <?php endif;?>
              
                

              

          <li class="nav-item">
            <a href="{{ url('logout') }}" class="nav-link"  
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fa fa-power-off nav-icon"></i>
              <p>
               {{ __('Logout') }}
              </p>
            </a>
            <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield('title')</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
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
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="https://www.fube.com.my/" style="color: #ff8c00;">ICommunity</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b style="color: #ff8c00;">Version 1.0</b> 
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
    $('.table').DataTable( {
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
