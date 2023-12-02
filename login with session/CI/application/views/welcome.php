<!DOCTYPE html>
	<head>
		<title>HOME</title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	    <?php  ?>
	</head>
	<body>
		<?php $Username = $_SESSION["Username"] ?? ""; ?>
		<h5><?php print_r($Username); ?></h5> 
		<h2>HELLO ARHAMSHARE PVT LTD</h2><br>
		<a href="<?php echo base_url(); ?>Login/logout">Logout</a>
	</body>
	
</html>