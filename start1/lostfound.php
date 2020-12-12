<?php
session_start(); 

	if (!isset($_SESSION['email'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['email']);
		header("location: login.php");
	}
	
	
	
?>

<html>

	<head>
		<title>LOST OR FOUND ?</title>
		
		<!--<link rel="stylesheet" type="text/css" href="style.css">-->
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>


	<body id="lostfoundpage">
	<a href="login.php" class="btn btn-primary btn-lg active" role="button">Logout</a>
		<div class="row" style="margin-top:10%">
			<div class="col-md-offset-4 col-md-5">
				<h1 class="text-center">Welcome TO LOST AND FOUND Website!!!</h1>
				<a href="foundpage.php" class="btn btn-primary btn-lg active" role="button">Found</a>
				<a href="lostpage.php" class="btn btn-primary btn-lg active" role="button">Lost</a>
				
			</div>
			<a href="updateinfo.php" class="btn btn-primary btn-lg active pull-right" role="button">If found Please Remove The Product</a>
	</div>	
		<!--<div class="input-group">
			
			<input type="button" name="found"  value="FOUND" onclick='window.location.href="http://localhost/start/foundpage.php"'/>
			<input type="button" name="lost"  value="LOST" onclick='window.location.href="http://localhost/start/lostpage.php"'/>

		</div>-->
	</body>
	
</html>