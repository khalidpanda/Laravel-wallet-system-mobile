<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Fube Pos</title>
  
 <link rel="shortcut icon" href="{{asset('dist/img/fube.png')}}" type="image/png">
 <link rel="stylesheet" href="{{ asset('css/style.css')}}">
 
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
<body class=" layout-footer-fixed ">
  
<div class="wrapper bg">
  <!-- Navbar -->
<!--  <nav class="main-header navbar navbar-expand navbar-white navbar-light">-->
    <!-- Left navbar links -->
    <div class="row">
    <div class="col">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link  link2 text-center" data-widget="pushmenu" href="#"><i class="fa fa-qrcode fa-lg"></i><br>pay</a>
      </li>
    </ul>
    </div>
    <div class="col">
    <h5 class="top-logo">icommunity</h5>
    </div>
    <div class="col">
      <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link  link3 text-center" data-widget="pushmenu" href="#"><i class="fa fa-qrcode fa-lg"></i><br>Receive</a>
      </li>
    </ul>
    </div>
  </div>
    
    


    <!-- SEARCH FORM -->
   <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <!-- <aside class="main-sidebar sidebar-dark-primary elevation-4"> -->
    <!-- Brand Logo -->
 <!--   <a href="{{ url('home') }}" class="brand-link">
      <img src="{{URL::asset('/dist/img/fube2.png')}}" alt="AdminLTE Logo" class="brand-image "
           style="opacity: .8">&nbsp;&nbsp;  
      <span class="brand-text font-weight-light">Pos System</span>
    </a> -->

    <!-- Sidebar -->
  <!--  <div class="sidebar"> -->
      <!-- Sidebar user panel (optional) -->
     <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{URL::asset('/dist/img/user4.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('profile') }}" class="d-block">{{ Auth::user()->name}}</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
    <!--  <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> -->
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
     <!--     <li class="nav-item">
                <a href="{{ url('home') }}" class="nav-link active" style="background-color: #ff8c00;">
                  <i class="fa fa-home nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
              <?php use App\Models\UserRole;?>
              <?php 
              $UserRole = UserRole::where('user_id', Auth::user()->id)->where('modules', 'Product Management')->first();
              $UserRole1 = UserRole::where('user_id', Auth::user()->id)->where('modules', 'UAC') ->first(); 
              $UserRole2 = UserRole::where('user_id', Auth::user()->id)->where('modules', 'Report') ->first(); 
              ?>
             


                 <?php if (!empty($UserRole2)):?>
                <?php if($UserRole2->view == 'on'):?>
                 <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('sales_report') }}" class="nav-link">
                  <i class="fas fa-chart-bar nav-icon"></i>
                  <p>Sales Report</p>
                </a>
              </li>
             
              
            </ul>
          </li>
           <?php endif;?>
          <?php endif;?>
              

                <?php if (!empty($UserRole1)):?>
                <?php if($UserRole1->edit == 'on' || $UserRole1->view == 'on'):?>
               <li class="nav-item">
                <a href="{{ url('user_access') }}" class="nav-link ">
                  <i class="fa fa-key nav-icon"></i>
                  <p>User Access Control</p>
                </a>
              </li>
               <?php endif;?>
                <?php endif;?>

               <li class="nav-item">
                <a href="{{ url('profile') }}" class="nav-link ">
                  <i class="fa fa-user nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
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
      </nav> -->
      <!-- /.sidebar-menu -->
   <!-- </div> -->
    <!-- /.sidebar -->
 <!-- </aside> -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg">
    <!-- Content Header (Page header) -->
    <div class="content-header bg">
      <div class="container-fluid">
      
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
   <div class="row">
    <div class="col">
        <div class="info">
          <a href="{{ url('profile') }}" class="d-block">{{ Auth::user()->name}}</a>
        </div>
    </div>
    <div class="col">
     <div class="image user-img">
          <img src="{{URL::asset('/dist/img/user4.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
    </div>
  </div>
       
     
      </div> 
      <hr class="new1">
      <div class="row top text-center">
    <div class="col">
      <p>Credits :<br>10.00</p>
    </div>
    <div class="vl"></div>
    <div class="col">
      <p>Rewards :<br>10</p>
    </div>
     <div class="vl"></div>
    <div class="col">
      <a href="#" class="btn btn-outline text-white top-btn" style="border:1px solid #f8ad3a; border-radius: 25px;">+ Top up</a>
    </div>
  </div>
   <hr class="new1">
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
  <footer class="main-footer me text-center" style="background:#e4aa52;">
  <div class="navbar me "  id="myNavbar">
  <a class="link" href="#home"><i class="fa fa-award fa-2x"></i><br>Reward</a>
  <a class="link" href="#news"><i class="fa fa-envelope fa-2x"></i><br>Message</a>
  <a class="link" href="#contact"><i class="fa fa-wallet fa-2x"></i><br>Wallet</a>
  <a class="link"href="#about"><i class="fa fa-history fa-2x"></i><br>History</a>
   <a class="link" href="#about"><i class="fa fa-user fa-2x"></i><br>Account</a>
  
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


<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{ asset('dist/js/pages/dashboard3.js') }}"></script>
<script src="{{ asset('dist/js/pages/dashboard4.js') }}"></script>
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
  
   var donutData= {
      labels: [
          'Chrome', 
          'IE',
          'FireFox', 
          'Safari', 
          'Opera', 
          
      ],
      datasets: [
        {
          data: [700,500,400,600,300],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc'],
        }
      ]
    }

 var pieChartCanvas = $('#pieChart').get(0).getContext('2d');
 var pieChartCanvas1 = $('#pieChart1').get(0).getContext('2d');
 var pieChartCanvas2 = $('#pieChart2').get(0).getContext('2d');
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })

    var pieChart1 = new Chart(pieChartCanvas1, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })

    var pieChart2 = new Chart(pieChartCanvas2, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })


} );
</script>
 @toastr_render
</body>
</html>
