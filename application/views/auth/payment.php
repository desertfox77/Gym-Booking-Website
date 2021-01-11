<?php
// define variables and set to empty values
$tipeErr ="";
$tipe = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["leo"])) {
    $tipeErr = "Choose Payment!";
  } else {
	$tipe = test_input($_POST["leo"]);
	
	$length=5;
	$characters = '0123456789abcdefghijklmnopqrs092u3tuvwxyzaskdhfhf9882323ABCDEFGHIJKLMNksadf9044OPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
		$randomString = '';
	for ($i = 0; $i < $length; $i++) {
	  $randomString .= $characters[rand(0, $charactersLength - 1)];
	  
	}
	date_default_timezone_set("Asia/Jakarta");
	$date = date("h:i:sa");
		$data = array(
		  
		  'type_payment' => $tipe,
		  'code_transaction' => $randomString,
		 
		'total_payment' => $this->session->userdata('biaya'),
		'user_id' => $this->session->userdata('userid'),
		'date' => $date
		  );
		  $this->db->insert('pembayaran',$data);
		 
		  $user =$this->db->get_where('user', ['email' => 
		  $this->session->userdata('email')])->row_array();
		  $t=$user['id']; 
		  $ola = $this->db->query("UPDATE user SET pay_id=2 WHERE id=$t");
		  redirect('Confirmation');
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Payment</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url('apayment/'); ?>images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('apayment/'); ?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('apayment/'); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('apayment/'); ?>fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('apayment/'); ?>vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('apayment/'); ?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('apayment/'); ?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('apayment/'); ?>vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('apayment/'); ?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('apayment/'); ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('apayment/'); ?>css/main.css">
<!--===============================================================================================-->
</head>
<style>
	.error {color: #FF0000;}
/* The container */
.container {
  display: block;
  position: relative;
  left: 0px;
  padding-left: 45px;
  margin-bottom: 20px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0px;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>

<body>
	

				
				<div class="container-login100" style="background-image: url('apayment/images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<span class="login100-form-title p-b-37">
					Payment 
				</span>
			
				<span class="login100-form-title p-b-10">
				<p align="left"><font size="4" color="black"> Date : <?=$hasil['date'];?> </font></p>
				</span>

				<span class="login100-form-title p-b-10">
				<p align="left"><font size="4" color="black"> Start Time : <?=$hasil['start_hours'];?> End Time : <?=$hasil['end_hours'];?> </font></p>
				</span>


				<span class="login100-form-title p-b-10">
				<p align="left"><font size="4" color="black"> Location	: <?=$hasil['lokasi'];?> </font></p>
				</span>

				<span class="login100-form-title p-b-10">
				<p align="left"><font size="4" color="black"> Biaya	: <?=$hasil['total_waktu'];?> x 100.000 </font></p>
				</span>

				<span class="login100-form-title p-b-10">
				<p align="left"><font size="4" color="black"> Total biaya	: <?=$hasil['jumlah_biaya'];?> </font></p>
				</span>

				<span class="login100-form-title p-b-20">
				<p align="left"><font size="4" color="black"> Customer	: <?=$user['name'];?> </font></p>
				</span>

				<span class="login100-form-title p-b-30">
				<font size="5" color="blue">Select your Payment!</font>
				</span>

<label class="container"><a class="login100-social-item"> 
						<img src="<?= base_url('apayment/'); ?>images/icons/ovo.jpg">
					</a> 
  <input type="radio" name="leo" <?php if (isset($tipe) && $tipe=="OVO") echo "checked";?>value="OVO">
  <span class="checkmark"></span>
</label>
<label class="container"><a class="login100-social-item"> 
						<img src="<?= base_url('apayment/'); ?>images/icons/Gopay.jpg">
					</a>
  <input type="radio"  name="leo" <?php if (isset($tipe) && $tipe=="GoPay") echo "checked";?>value="GoPay">
  <span class="checkmark"></span>
</label>
<label class="container"><a class="login100-social-item">
						<img src="<?= base_url('apayment/'); ?>images/icons/Dana.jpg">
					</a>
  <input type="radio" name="leo" <?php if (isset($tipe) && $tipe=="Dana") echo "checked";?>value="Dana">
  <span class="checkmark"></span>
</label>
<label class="container"><a class="login100-social-item">
						<img src="<?= base_url('apayment/'); ?>images/icons/LinkAja.png">
					</a>
  <input type="radio"  name="leo" <?php if (isset($tipe) && $tipe=="LinkAja") echo "checked";?>value="LinkAja">
  <span class="checkmark"></span>
  <span class="error">* <?php echo $tipeErr;?></span>
</label>

				
				<div class="container-login100-form-btn"  >
					<input class="login100-form-btn" type="submit" name="submit" value="Pay" >
					
				</div>
				<br>
				
				

		
				</form>
				<!-- <form class="login100-form validate-form"> -->
				<div class="container-login100-form-btn">
					<a class="login100-form-btn" href="<?= base_url('Payment/back')?>" data-toggle="modal" data-target="#logoutModal">Back</a>
				</div>
				<br>
<!-- </form> -->
				
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
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
        <div class="modal-body">Select "Back" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="login100-form-btn" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('Payment/back')?>">Back</a>
        </div>
      </div>
    </div>
  </div>

<!--===============================================================================================-->
	<script src="<?= base_url('apayment/'); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('apayment/'); ?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('apayment/'); ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('apayment/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('apayment/'); ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('apayment/'); ?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url('apayment/'); ?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('apayment/'); ?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('apayment/'); ?>js/main.js"></script>

</body>
</html>


