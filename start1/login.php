<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<h1 style="font-size:36px; font-family:arial; text-align:center; margin-top:5%;">Welcome to Lost And Found</h1>
	
	
	<!--<form method="post" action="login.php">

		

		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user"><a href="lostfound.php">Login</a></button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>-->
	
	
	
	<div class="row">
		<div class="col-md-offset-4 col-md-4">
			<h1>Login</h1>
			<?php include('errors.php'); ?>
			<form method="post" action="login.php">
			
				
			  <div class="form-group">
				<label for="InputEmail1">Email address</label>
				<input type="email" name="email" class="form-control" id="InputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
				<label for="InputPassword1">Password</label>
				<input type="password" name="password" class="form-control" id="InputPassword1" placeholder="Password">
			  </div>
			   
			  <button type="submit" name="login_user" class="btn btn-default">Login</button>
			</form>
			<p class="help-block">Not yet a member? <a href="register.php">Sign up</a>.</p>
		</div>
	</div>

</body>
</html>