
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<?php include("connection.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> PHP CRUD OPERATION </title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<script type="text/javascript" src="<?php echo base_url('./assets/js/validation.js');?>"></script>
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script> -->
	<body style="background-color: #0e6091c2;">
	<div class='container'>
			<?php include("alert.php"); ?>
		<form action="<?php echo base_url('CRUD/crud_process'); ?>" name="form" onsubmit = "return validateForm();" method="POST">
		<div class="title">
			REGISTRATION FORM
		</div>
		<div class="form">
			<!-- <div class="input_field">
				<label>ID</label>
				<input type="text" class="input" name="id">
			</div> -->
			<div class="input_field">
				<label style="width:100px">First Name</label>
				<input type="text" class="input" id="fname" name="fname" placeholder="Enter Your First Name" onchange="return validateForm();">
				<small  id="error_fname" style="color:red"></small><br>
			</div>
			<div class="input_field">
				<label style="width:100px">Last Name</label>
				<input type="text" class="input" id="lname" name="lname" placeholder="Enter Your Last Name" onchange="return validateForm();" >
				<small id="error_lname" style="color:red"></small><br>
			</div>
			<div class="input_field">
				<label style="width:100px">Password</label>
				<input type="Password"  class="input" id="password" name="password" placeholder="Enter the Password" onchange="return validateForm();">
				<small id="error_password" style="color:red"></small><br>
			</div>
			<div class="input_field">
				<label style="width:100px">Confirm password</label>
				<input type="Password" class="input"  id="conpassword" name="conpassword" placeholder="Enter the Confirm Password" onchange="return validateForm();">
				<small id="error_conpassword" style="color:red"></small><br>
			</div>
			<div class="input_field">
				<label style="width:100px">Email address</label>
				<input type="text" class="input" id="email" name="email" placeholder="Enter Email Address" onchange="return validateForm();" >
				<small id="error_email" style="color:red"></small><br>
			</div>
			<div class="input_field">
				<label style="width:100px">Phone Number</label>
				<input type="Number" class="input" id="phone" name="phone" placeholder="Enter Phone Number"  maxlength="10" onchange="return validateForm();">
				<small id="error_phone" style="color:red"></small><br>
			</div>
			<div class="input_field">
				<label style="width:100px">Address</label>
				<textarea class="textarea" id="address" name="address" placeholder="Enter Address" ></textarea onchange="return validateForm();">
				<small id="error_address" style="color:red"></small>
			</div>
			</div>
			<div class="input_field" style="text-align-last: end;">
				
				<button type="submit" class="btn btn-outline-primary" value="Register" class="btn" name="register">SUBMIT</button>

			<!-- </div> -->
             <!-- <div class="input_field"> -->
				<!-- <input type="view" value="Register" class="btn" name="view"> -->
				<a href="<?php echo base_url('REGISTER');?>" style="float: left;">
					<button type="button" class="btn btn-outline-primary" name="View"> VIEW</button>
				</a>
			</div>
		</div>
	</form>
</div>
</body>
</html>

