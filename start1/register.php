<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	
	<!--<form method="post" action="register.php">

		
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
  		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>-->
	
	
	

	
	
	<div class="row">
		<div class="col-md-offset-4 col-md-4">
			<h1>Registration</h1>
			<?php include('errors.php'); ?>

			<form method="post" action="register.php">
			
				<div class="form-group">
				<label for="InputUsername">Username</label>
				<input type="text" name="username" class="form-control" id="InputUsername" placeholder="Username">
			  </div>
				
			  <div class="form-group">
				<label for="InputEmail1">Email address</label>
				<input type="email" name="email" class="form-control" id="InputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
				<label for="InputPassword1">Password</label>
				<input type="password" name="password_1" class="form-control" id="InputPassword1" placeholder="Password">
			  </div>
			   <div class="form-group">
				<label for="InputPassword1">Confirm password</label>
				<input type="password" name="password_2" class="form-control" id="InputPassword1" placeholder="Password">
			  </div>
			  
			 
			  <button type="submit"  name="reg_user" class="btn btn-default">Register</button>
			</form>
			<p class="help-block">Already a member? <a href="login.php">Sign in</a>.</p>
		</div>
	</div>
	
	
	
	
	
	
</body>
</html>