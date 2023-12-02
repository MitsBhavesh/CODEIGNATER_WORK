
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
<body style="background-color: #0e6091c2;">
	<div class='container'>
			<?php include("alert.php"); ?>
		<form action="<?php echo base_url('CRUD/crud_process'); ?>"  method="POST">
		<div class="title">
			REGISTRATION FORM
		</div>
		<div class="form">
			<!-- <div class="input_field">
				<label>ID</label>
				<input type="text" class="input" name="id">
			</div> -->
			<div class="input_field">
				<label>First Name</label>
				<input type="text" class="input" name="fname">
			</div>
			<div class="input_field">
				<label>Last Name</label>
				<input type="text" class="input" name="lname">
			</div>
			<div class="input_field">
				<label>Password</label>
				<input type="Password" class="input" name="password">
			</div>
			<div class="input_field">
				<label>Confirm password</label>
				<input type="Password" class="input" name="conpassword">
			</div>
			<div class="input_field">
				<label>Email address</label>
				<input type="text" class="input" name="email">
			</div>
			<div class="input_field">
				<label>Phone Number</label>
				<input type="text" class="input" name="phone">
			</div>
			<div class="input_field">
				<label>Address</label>
				<textarea class="textarea" name="address"></textarea>
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

