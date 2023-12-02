<?php 
// print_r($data);
// $Fname = $data[0]['fname'];
// print_r($Fname);
// exit;
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style type="text/css">
	label {
    font-weight: 600;
    color: #666;
	}
	body {
	  background: #f1f1f1;
	}
	.box8{
	  box-shadow: 0px 0px 5px 1px #999;
	}
	.mx-t3{
	  margin-top: -3rem;
	}
	.container{
	max-width: 500px;
	width: 100%;
	background-color: white;
	margin: 20px auto;
	padding: 30px;
	box-shadow: 5px 5px 2px rgba(0, 0, 0, 0.125);
	}
	.container .title
	{
	font-size: 24px;
	font-weight: 700;
	margin-bottom: 25px;
	color:#006280 ;
	text-transform: uppercase;
	text-align: center;
	}
	.container .form{
		width: 100%;
	}
	
	.container .form .input_field label{
		width: 150px;
		margin-right: 10px;
	}
</style>
<div class="container mt-3">
 <form action="<?php echo base_url('CRUD/UPDATE_Process'); ?>"  method="POST">

    <div class="jumbotron box8">
      <div class="col-sm-12 mx-t3 mb-4">
        <h2 class="text-center text-info">UPDATE FORM</h2>
      </div>
        <input type="hidden" name="Id" value="<?php echo $data[0]["Id"];?>">

        <!-- <input type="hidden" name="AccountType" value="<?php echo $data[0]["Id"]; ?>">  -->
     
      <div class="form-group">
        <label for="name-f">First Name</label>

        <input type="text" class="input" name="fname" value="<?php echo $data[0]["fname"];?>"> 
      </div>
      <div class="form-group">
        <label for="name-l">Last name</label>
        <input type="text" class="input" name="lname" value="<?php echo $data[0]["lname"]; ?>">
      </div>
      <div class=" form-group">
        <label for="email">Password</label>
        <input type="Password" class="input" name="password" value="<?php echo $data[0]["password"]; ?>">
      </div>
      <div class="form-group">
        <label for="address-1">Confrim Password</label>
        <input type="Password" class="input" name="conpassword" value="<?php echo $data[0]["conpassword"]; ?>">
      </div>
      <div class=" form-group">
        <label for="address-2">Email</label>
        <input type="text" class="input" name="email" value="<?php echo $data[0]["email"]; ?>">
      </div>
      <div class="form-group">
        <label for="State">Phone</label>
        <input type="text" class="input" name="phone" value="<?php echo $data[0]["phone"]; ?>">
      </div>
      <div class=" form-group">
        <label for="zip">Address</label>
        <input type ="text" class="input" name="address" value="<?php echo $data[0]["address"]; ?>">
       <!--  <textarea class="input" name="address" value="<?php echo $data[0]["address"]; ?>"></textarea> -->
      </div>

        <div class=" form-group mb-0">
        <input type="submit" value="Update" class="btn" name="Update">
        <input type="submit" value="Close" class="btn" name="Close">
		</div>
</div>
</div>
</form>

</head>

</html>