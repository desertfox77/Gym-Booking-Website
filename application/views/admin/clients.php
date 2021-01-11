<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clients</title>
  <link rel="icon" type="image/png" href="<?= base_url('alogin/'); ?>images/icons/favicon2.ico"/>
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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://localhost/mainhome/Admin">
        <div class="sidebar-brand-icon">
        <i class="fas fa-user-cog"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Go-Fit<sup></sup></div>
		      </a>

		      <!-- Divider -->
		      <hr class="sidebar-divider my-0">

		      <!-- Nav Item - Dashboard -->
		      <li class="nav-item">
		        <a class="nav-link" href="http://localhost/mainhome/Admin">
          <i class="fas fa-book"></i>
          <span>Menu</span></a>
      </li>

      <!-- Divider -->
     

      <!-- Heading -->
      

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        User
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/mainhome/Admin/clients">
        <i class="fas fa-user"></i>
          <span>Clients</span>
        </a>
              </li>

      <!-- Nav Item - Charts -->
     

       <!-- Divider -->
      

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

          <!-- Topbar Search -->
          <div class="col-sm-3 col-md-3 col-lg-10 text-md-right"><a href="<?= base_url('Admin/clear')?>" class="btn btn-primary pill px-4 mt-3 mt-md-0">Clear Data</a></div>

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

            


            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/') . $user['image']?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('Admin/logout')?>"data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <ul class="nav nav-pills tab-nav mb-4" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-sunday-tab" data-toggle="pill" href="#pills-sunday" role="tab" aria-controls="pills-sunday" aria-selected="true">Gym</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-monday-tab" data-toggle="pill" href="#pills-monday" role="tab" aria-controls="pills-monday" aria-selected="true">Private Class</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" id="pills-monday-tab" data-toggle="pill" href="#pills-minday" role="tab" aria-controls="pills-minday" aria-selected="true">Gym with Trainer</a>
          </li>
          
          
        </ul>
          <!-- Page Heading -->
          <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-sunday" role="tabpanel" aria-labelledby="pills-sunday-tab">
          <table class="table">
          <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">Order</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Start</th>
      <th scope="col">End</th>
      <th scope="col">Location</th>
      <th scope="col">Arrival</th>
      
     
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?=$leo ['name']; ?></td>
      <td><?=$hasil ['date']; ?></td>
      <td><?=$hasil ['start_hours']; ?></td> 
      <td><?=$hasil ['end_hours']; ?></td>
      <td><?=$hasil ['lokasi']; ?></td>
      <td><?=$hasil ['date_arrival']; ?></td>
     
    
    </tr>
    
    
  </tbody>
  
</table>
      </div>
      <div class="tab-pane fade" id="pills-monday" role="tabpanel" aria-labelledby="pills-monday-tab">
      <table class="table">
          <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">Order</th>
      <th scope="col">Order Created</th>
      <th scope="col">Name</th>
      <th scope="col">Class Name</th>
      <th scope="col">Day</th>
      <th scope="col">Start</th>
      <th scope="col">End</th>
      <th scope="col">Location</th>
      <th scope="col">Arrival</th>
     
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?= date('d F Y', $sheren['date_created']); ?></td>
      <td><?=$eva['name']; ?></td>
      <td><?=$sheren['class_name']; ?></td>
      <td><?=$sheren ['day']; ?></td>
      <td><?=$sheren ['start_hours']; ?></td> 
      <td><?=$sheren ['end_hours']; ?></td>
      <td><?=$sheren ['location']; ?></td>
      <td><?=$sheren ['date_arrival']; ?></td>
    </tr>
    
    
  </tbody>
  
</table>
    </div>
    <div class="tab-pane fade" id="pills-minday" role="tabpanel" aria-labelledby="pills-minday-tab">
    <table class="table">
          <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">Order</th>
      <th scope="col">Order Created</th>
      <th scope="col">Name</th>
      <th scope="col">Trainer Name</th>
      <th scope="col">Sessions</th>
     
      <th scope="col">Location</th>
      <th scope="col">Arrival</th>
     
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?= date('d F Y', $sherrile['date_created']); ?></td>
      <td><?=$ayaka['name']; ?></td>
      <td><?=$sherrile['name']; ?></td>
     
      <td><?=$sherrile ['sessions']; ?></td> 
    
      <td><?=$sherrile ['location']; ?></td>
      <td><?=$sherrile ['date_arrival']; ?></td>
    </tr>
    
    
  </tbody>
  
</table>
  
  
  </div>


          </div>
        


          <!-- Content Row -->
          
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
          <a class="btn btn-primary" href="<?= base_url('Admin/logout')?>">Logout</a>
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

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  
 
<script>
</script>

</body>

</html>
