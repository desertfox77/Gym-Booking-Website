<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>West Bekasi</title>
  <link rel="icon" type="image/png" href="<?= base_url('alogin/'); ?>images/icons/favicon1.ico"/>
  <!-- Custom fonts for this template-->
  <link href="<?= base_url('vendor/startbootstrap-sb-admin-2-gh-pages/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('vendor/startbootstrap-sb-admin-2-gh-pages/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
<!--formden.js communicates with FormDen server to validate fields and submit via AJAX -->
<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>



  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Menu')?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-heartbeat"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Go-Fit<sup></sup></div>
		      </a>

		      <!-- Divider -->
		      <hr class="sidebar-divider my-0">

		      <!-- Nav Item - Dashboard -->
		      <li class="nav-item">
		        <a class="nav-link" href="<?= base_url('Menu')?>">
          <i class="fas fa-book"></i>
          <span>Reservation</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Location
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
       
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-city"></i>
          <span>Bekasi</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Available</h6>
            <a class="collapse-item" href="<?= base_url('Menu/eb')?>">East Bekasi</a>
            <a class="collapse-item" href="<?= base_url('Menu/wb')?>">West Bekasi</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-city"></i>
          <span>Jakarta</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Available</h6>
            <a class="collapse-item" href="<?= base_url('Menu/ej')?>">East Jakarta</a>
            <a class="collapse-item" href="<?= base_url('Menu/wj')?>">West Jakarta</a>
            <a class="collapse-item" href="<?= base_url('Menu/sj')?>">South Jakarta</a>
            <a class="collapse-item" href="<?= base_url('Menu/nj')?>">North Jakarta</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        User
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('History/payment')?>">
        <i class="fas fa-receipt"></i>
          <span>Payment History</span>
        </a>
              </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('History')?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Reservation History</span></a>
      </li>

       <!-- Divider -->
       <hr class="sidebar-divider">
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Menu/newlocation')?>">
        <i class="fas fa-map-marker-alt"></i>
          <span>New Location</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

      

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/') . $user['image']?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url('Menu/profile')?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                 My Profile
                </a>
                <a class="dropdown-item" href="<?= base_url('Edit')?>">
                <i class="fas fa-user-edit mr-2 text-gray-400"></i>
                  Profile Edit
                </a>
                <a class="dropdown-item" href="<?= base_url('Edit/editpassword')?>">
                <i class="fas fa-key mr-2 text-gray-400"></i>
                  Change Password
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('Menu/logout')?>"data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->


          <!-- Content Row -->
<section id="Summarecon Bekasi">
		      <div class="container wow fadeInUp">
		        <div class="section-header">
		          <h3 class="section-title">West Bekasi</h3>
		          <p class="section-description">Grand Kota Bintang</p>
		        </div>
		      </div>

		      <!-- Uncomment below if you wan to use dynamic maps -->
		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1087140966692!2d106.95465191381327!3d-6.249403162927754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698cf960642809%3A0x5b026617404193de!2sGrand%20Kota%20Bintang!5e0!3m2!1sen!2sid!4v1570954232375!5m2!1sen!2sid"   width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

		      <div class="container wow fadeInUp mt-5">
		        <div class="row justify-content-center">

		          <div class="col-lg-3 col-md-4">

		            <div class="info">
		              <div>
		                <i class="fa fa-map-marker"></i>
		                <p>Grand Kota Bintang<br>Jl. KH. Noer Ali No.1G, RT.005/RW.002, Jakasampurna, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17145</p>
		              </div>

		              <div>
		                <i class="fa fa-envelope"></i>
		                <p>info@example.com</p>
		              </div>

		              <div>
		                <i class="fa fa-phone"></i>
		                <p>+1 5589 55488 55s</p>
		              </div>
            </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <a class="btn btn-primary" href="<?= base_url('Menu/logout')?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('vendor/startbootstrap-sb-admin-2-gh-pages/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('vendor/startbootstrap-sb-admin-2-gh-pages/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('vendor/startbootstrap-sb-admin-2-gh-pages/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('vendor/startbootstrap-sb-admin-2-gh-pages/'); ?>js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>



</body>

</html>
