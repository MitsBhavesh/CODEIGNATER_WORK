<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title>Login</title>
</head>
<body>

	<form action="<?php echo base_url()?>Login/login_process"  method="post">

		<h2>LOGIN</h2>
		
		<label>USER NAME</label>
		<input type="text" name="uname" placeholder="User Name"><br>
		
		<label>PASSWORD</label>
		<input type="password" name="password" placeholder="Password"><br>

		<button type="submit">Login</button>
		
	</form>
</body>
</html>
