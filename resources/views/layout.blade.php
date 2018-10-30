<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Samy Admin</title>
  <!-- Bootstrap core CSS-->
   <link rel="stylesheet"  href="{{ URL::asset('/vendor/bootstrap/css/bootstrap.min.css')}}">
  <!-- Custom fonts for this template-->
  <link rel="stylesheet"  href="{{ URL::asset('/vendor/font-awesome/css/font-awesome.min.css')}}">
  <!-- Page level plugin CSS-->
  <link rel="stylesheet"  href="{{ URL::asset('/vendor/datatables/dataTables.bootstrap4.css')}}">
  <!-- Custom styles for this template-->
  <link rel="stylesheet"  href="{{ URL::asset('/css/sb-admin.css')}}">

  <link rel="stylesheet"  href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" >

    <link rel="stylesheet" href="{{asset('css/jquery-confirm.min.css')}}">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{!! url('/admin') !!}">Welcome Samy</a>
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

       <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{!! url('admin/category') !!}">
          	<b class="badge badge-warning pull-right">3</b>
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Category</span>
          </a>
        </li>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{!! url('admin/subcategory') !!}">
            <b class="badge badge-warning pull-right">8</b>
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Sub category</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{!! url('admin/product') !!}">
            <b class="badge badge-warning pull-right">8</b>
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Products</span>
          </a>
        </li> -->
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                  <i class="fa fa-fw fa-file"></i>
                  <span class="nav-link-text">Categories</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                  <li>
                      <a href="{!! url('admin/category') !!}">All Categories </a>
                  </li>
                  <li>
                      <a href="{!! url('admin/addcategory') !!}">Add category </a>
                  </li>
                 <!-- <li>
                      <a href="{!! url('admin/category') !!}">Edit Category </a>
                  </li> -->
              </ul>
          </li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages1" data-parent="#exampleAccordion">
                  <i class="fa fa-fw fa-file"></i>
                  <span class="nav-link-text">Sub Categories</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseExamplePages1">
                  <li>
                      <a href="{!! url('admin/subcategory') !!}">All Subcatgories </a>
                  </li>
                  <li>
                      <a href="{!! url('admin/addsubcategory') !!}">Add Subcategory </a>
                  </li>
                <!--  <li>
                      <a href="{!! url('admin/subcategory') !!}">Edit SubCategory </a>
                  </li> -->
              </ul>
          </li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages2" data-parent="#exampleAccordion">
                  <i class="fa fa-fw fa-file"></i>
                  <span class="nav-link-text">Products</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseExamplePages2">
                  <li>
                      <a href="{!! url('admin/products') !!}">All Products </a>
                  </li>
                  <li>
                      <a href="{!! url('admin/addproduct') !!}">Add Product </a>
                  </li>
               <!--   <li>
                      <a href="{!! url('admin/product') !!}">Edit Product </a>
                  </li> -->
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
        <li class="breadcrumb-item active">@yield('title')</li>
      </ol>


            @yield('content')




          <!-- /Card Columns-->
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
<!--   <script src="{{ asset('js/sb-admin-charts.min.js')}}"></script> -->

   <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <script src="{{asset('js/jquery-confirm.min.js')}}"></script>
  <script src="{{ asset('js/jquery.toast.js')}}"></script>

   @yield('script')
  </div>
</body>

</html>
