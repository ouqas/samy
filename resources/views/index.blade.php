<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Peter Admin</title>
  <!-- Bootstrap core CSS-->
   <link rel="stylesheet"  href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
  <!-- Custom fonts for this template-->
  <link rel="stylesheet"  href="{{ URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}">
  <!-- Page level plugin CSS-->
  <link rel="stylesheet"  href="{{ URL::asset('vendor/datatables/dataTables.bootstrap4.css')}}">
  <!-- Custom styles for this template-->
  <link rel="stylesheet"  href="{{ URL::asset('css/sb-admin.css')}}">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{!! url('/admin') !!}">Welcome Peter</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{!! url('/admin') !!}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">SEO Dashboard</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{!! url('/reservations') !!}">
          	<b class="badge badge-warning pull-right">3</b>
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Reservations</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{!! url('/ourqualities') !!}">
            <b class="badge badge-warning pull-right">3</b>
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">OURQUALITIES</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{!! url('/slides') !!}">
            <b class="badge badge-warning pull-right">8</b>
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Slides</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Sections management</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
          <li>
              <a href="{!! url('/admin') !!}">WELCOME PAGE </a>
            </li>

            <li>
              <a href="{!! url('/admin') !!}">DAY TRIPS </a>
            </li>
            <li>
              <a href="{!! url('/admin') !!}">RESERVATION </a>
            </li>
            <li>
              <a href="{!! url('/admin') !!}">TRIPS AND TOURS </a>
            </li>
            <li>
              <a href="{!! url('/admin') !!}">GUESTBOOK </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="row mb-4">
        	<div class="col-md-3">
            <div class="d-flex border">
                <div class="bg-info text-light p-4">
                    <div class="d-flex align-items-center h-100">
                        <i class="fa fa-3x fa-fw fa-eye"></i>
                    </div>
                </div>
                <div class="flex-grow-1 bg-white p-4">
                    <p class="text-uppercase text-secondary mb-0"> Customers views</p>
                    <h3 class="font-weight-bold mb-0">1,6</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="d-flex border">
                <div class="bg-success text-light p-4">
                    <div class="d-flex align-items-center h-100">
                        <i class="fa fa-3x fa-fw fa-comments"></i>
                    </div>
                </div>
                <div class="flex-grow-1 bg-white p-4">
                    <p class="text-uppercase text-secondary mb-0">  new messages</p>
                    <h3 class="font-weight-bold mb-0">374</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="d-flex border">
                <div class="bg-info text-light p-4">
                    <div class="d-flex align-items-center h-100">
                        <i class="fa fa-3x fa-fw fa-car"></i>
                    </div>
                </div>
                <div class="flex-grow-1 bg-white p-4">
                    <p class="text-uppercase text-secondary mb-0"> Next Drives/trips </p>
                    <h3 class="font-weight-bold mb-0"> 33</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="d-flex border">
                <div class="bg-danger text-light p-4">
                    <div class="d-flex align-items-center h-100">
                        <i class="fa fa-3x fa-fw fa fa-laptop"></i>
                    </div>
                </div>
                <div class="flex-grow-1 bg-white p-4">
                    <p class="text-uppercase text-secondary mb-0"> booking news</p>
                    <h3 class="font-weight-bold mb-0">73</h3>
                </div>
            </div>
        </div>
    </div>
      </div>
      <!-- Area Chart Example-->



      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Area Chart Example</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>


            @section('content')
          <!-- /Card Columns-->
        </div>




        <div class="col-lg-4">
          <!-- Example Pie Chart Card-->

          <!-- Example Notifications Card-->
          <div class="card mb-3">
            <div class="card-header font-weight-bold mb-0 badge-warning" >
              <i class="fa fa-bell-o"></i> New Reservations</div>
            <div class="list-group list-group-flush small">
              <a class="list-group-item list-group-item-action" href="#">
                <div class="media">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                  	<i class="fa fa-code-fork"></i>
                    A new reservation from<strong>CostumerName</strong>
                    <br>
                    <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action" href="#">
                <div class="media">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                  	<i class="fa fa-code-fork"></i>
                    A new reservation from<strong>CSamantha King</strong>
                    <br>
                    <div class="text-muted smaller">Today at 4:37 PM - 1hr ago</div>
                  </div>
                </div>
              </a>

              <a class="list-group-item list-group-item-action" href="#">
                <div class="media">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <i class="fa fa-code-fork"></i>
                    A new reservation from<strong>Monica Dennis</strong>
                    <br>
                    <div class="text-muted smaller">Today at 3:54 PM - 2hrs ago</div>
                  </div>
                </div>
              </a>

            </div>

          </div>
        </div>

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright ©  Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->

    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>

    <!-- Custom scripts for all pages-->

   <script src="{{ asset('js/sb-admin.min.js')}}"></script>

    <!-- Custom scripts for this page-->
   <script src="{{ asset('js/sb-admin-datatables.min.js')}}"></script>
   <script src="{{ asset('js/sb-admin-charts.min.js')}}"></script>
  </div>
</body>

</html>
