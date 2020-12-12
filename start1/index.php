<?php 
	 if(!$_SESSION['email']){
		 header('location: login.php');
	 }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['email'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
			
		<?php endif ?>
	</div>
		
</body>
</html>