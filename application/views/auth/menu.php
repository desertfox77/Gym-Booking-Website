<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Main Menu</title>
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

          <!-- Topbar Search -->
         
        

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
        
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Reservation</h1>

          </div>
          
          
        <ul class="nav nav-pills tab-nav mb-4" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-sunday-tab" data-toggle="pill" href="#pills-sunday" role="tab" aria-controls="pills-sunday" aria-selected="true">Normal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-monday-tab" data-toggle="pill" href="#pills-monday" role="tab" aria-controls="pills-monday" aria-selected="true">Private Class</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-monday-tab" data-toggle="pill" href="#pills-manday" role="tab" aria-controls="pills-manday" aria-selected="true">Gym With Trainer</a>
          </li>
          
          
        </ul>
          <!-- Content Row -->
          <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-sunday" role="tabpanel" aria-labelledby="pills-sunday-tab">
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form action="Menu/save" id="reservasi_form" class="form-horizontal" method="post">
<select name="location" id="wgtmsr" style="width: 500px;" required>
		  <option value="">Select Location</option>
		  <option value="Ayo gym-westbekasi">Ayo gym-westbekasi</option>
		  <option value="Ayo gym-eastbekasi">Ayo gym-eastbekasi</option>
		  <option value="Ayo gym-westjakarta">Ayo gym-westjakarta</option>
		  <option value="Ayo gym-eastjakarta">Ayo gym-eastjakarta</option>
		  <option value="Ayo gym-southjakarta">Ayo gym-southjakarta</option>
      <option value="Ayo gym-northjakarta">Ayo gym-northjakarta</option>
      <?php foreach($hasil->result_array() as $row) : ?>
        <option value="<?=$row ['shop_name']; ?>-<?=$row ['location']; ?>"><?=$row ['shop_name']; ?>-<?=$row ['location']; ?></option>
      <?php endforeach ?>
</select>
<br>
<br>
     <div class="form-group ">
      <label class="control-label col-sm-2 requiredField" for="date">
       Date
       <span class="asteriskField">
       </span>
      </label>
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" required/>
       </div>
      </div>
     </div>
     <div class="form-group">
      <div class="col-sm-10 col-sm-offset-2">
       <input name="_honey" style="display:none" type="text"/>

      </div>
     </div>
     <br>
          <br>
          <p>Pick time :</p>
          <div class="row">
          <!-- <div class="md-form">
  <input name ='min' placeholder="Selected time" type="text" id="input_starttime" class="form-control timepicker">
  <label for="input_starttime">Twelve hour clock</label>
</div> -->
<!-- <div class="md-form">
  <input name='max' placeholder="Selected time" type="text" id="input_starttime" class="form-control timepicker">
  <label for="input_starttime">Twelve hour clock</label>
</div> -->
            <input type="time" class="form-control" name="min" min='00:01' required>
            <input type="time" class="form-control" name="max" max='23:59' required>
</div>

     <!-- <div class="checkbox">
	   <label><input name="schedule" type="checkbox" value="1"> 11.00-13.00 </label>
	 </div>
	 <div class="checkbox">
	   <label><input name="schedule" type="checkbox" value="2"> 13.00-15.00 </label>
	 </div>
	 <div class="checkbox disabled">
	   <label><input name="schedule" type="checkbox" value="3" > 15.00-17.00 </label>
</div>
<div class="checkbox disabled">
	   <label><input name="schedule" type="checkbox" value="4" > 17.00-19.00 </label>
</div>
<div class="checkbox disabled">
	   <label><input name="schedule" type="checkbox" value="5" > 19.00-21.00 </label>
</div>
<div class="checkbox disabled">
	   <label><input name="schedule" type="checkbox" value="6" > 21.00-23.00 </label>
</div> -->
<br>
<button class="btn btn-primary "  name="submit" type="submit">
        Go to Payment
       </button>
    </form>
   </div>
  </div>
 </div>
</div>
      </div>

      <div class="tab-pane fade" id="pills-manday" role="tabpanel" aria-labelledby="pills-manday-tab">

      <?php foreach($drogba->result_array() as $pie) : ?>
            <div class="row-wrap">
              <div class="row bg-white p-4 align-items-center">
                <div class="col-sm-3 col-md-3 col-lg-2"><h3 class="h5"><?=$pie['name'];?></h3></div>
                <div class="col-sm-3 col-md-3 col-lg-2"><span class="icon-person mr-3"></span> <img src="<?= base_url('assets/img/') . $pie['image']?>"  width="50" height="50"></div>
                 <div class="col-sm-3 col-md-3 col-lg-2"><span class="icon-person mr-3"></span> <?=$pie['price'];?></div>
                 <div class="col-sm-3 col-md-3 col-lg-2"><span class="icon-person mr-3"></span> <?=$pie['sessions'];?></div>
                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-person mr-3"></span> <?=$pie['location'];?></div>
                <div class="col-sm-3 col-md-3 col-lg-2 text-md-right"><a href="<?= base_url('Paytrainer?id=')?><?php echo $pie['id']; ?>" class="btn btn-primary pill px-4 mt-3 mt-md-0">Join Now</a></div>     
              </div>
            </div> 
            <?php endforeach ?>
      </div>
      <div class="tab-pane fade" id="pills-monday" role="tabpanel" aria-labelledby="pills-monday-tab">
      <ul class="nav nav-pills tab-nav mb-4" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-sonday-tab" data-toggle="pill" href="#pills-sonday" role="tab" aria-controls="pills-sonday" aria-selected="true">Sunday</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-munday-tab" href="<?= base_url('Menu/monday')?>" role="tab" aria-controls="pills-munday" aria-selected="true">Monday</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-toesday-tab"  href="<?= base_url('Menu/tuesday')?>" role="tab" aria-controls="pills-toesday" aria-selected="false">Tuesday</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-wednesday-tab"  href="<?= base_url('Menu/wednesday')?>" role="tab" aria-controls="pills-wednesday" aria-selected="false">Wednesday</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-thursday-tab"  href="<?= base_url('Menu/thursday')?>" role="tab" aria-controls="pills-thursday" aria-selected="false">Thursday</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-friday-tab"  href="<?= base_url('Menu/friday')?>" role="tab" aria-controls="pills-friday" aria-selected="false">Friday</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-friday-tab"  href="<?= base_url('Menu/saturday')?>" role="tab" aria-controls="pills-friday" aria-selected="false">Saturday</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
        <form method="POST">
        
        <div class="tab-pane fade show active" id="pills-sonday" role="tabpanel" aria-labelledby="pills-sonday-tab">
        <?php foreach($leo->result_array() as $pie) : ?>
            <div class="row-wrap">
              <div class="row bg-white p-4 align-items-center">
                <div class="col-sm-3 col-md-3 col-lg-2"><h3 class="h5"><?=$pie['name'];?></h3></div>
                <div class="col-sm-3 col-md-3 col-lg-2"><span class="icon-clock-o mr-3"></span><?=$pie['start_hours'];?> &mdash; <?=$pie['end_hours'];?></div>
                <div class="col-sm-3 col-md-3 col-lg-2"><span class="icon-person mr-3"></span> <?=$pie['price'];?></div>
                
                <div class="col-sm-3 col-md-3 col-lg-3"><span class="icon-person mr-3"></span> <?=$pie['location'];?></div>
                <div class="col-sm-3 col-md-3 col-lg-2 text-md-right"><a href="<?= base_url('Paypriva?id=')?><?php echo $pie['id']; ?>" class="btn btn-primary pill px-4 mt-3 mt-md-0">Join Now</a></div>     
              </div>
            </div>
            <?php endforeach ?>

          </div>
       
          
       
</form>

          </div>
        </div>
            </div>
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
  	$(document).ready(function(){
  		var date_input=$('input[name="date"]'); //our date input has the name "date"
  		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  		date_input.datepicker({
  			format: 'mm/dd/yyyy',
  			container: container,
  			todayHighlight: true,
  			autoclose: true,
        startDate: truncateDate(new Date())
  		})
      $('#date').datepicker('setStartDate', truncateDate(new Date()));
  	})
    function truncateDate(date) {
  return new Date(date.getFullYear(), date.getMonth(), date.getDate());
}
    
</script>

<script>
</script>

</body>

</html>
