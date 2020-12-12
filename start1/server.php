<?php

session_start();

$username = '';
$dbname = '370';
$email    = "";
$errors = array(); 


$db = new mysqli('localhost','root',"",$dbname) or die ("unable to connect");

// connect to database
//$db = mysqli_connect('localhost', 'root', '', 'registration');


// REGISTER USER
if (isset($_POST['reg_user'])) {
	// receive all input values from the form
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { array_push($errors, "Username is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($password_1)) { array_push($errors, "Password is required"); }

	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database
		//$password = $password_1;
		$query = "INSERT INTO user (username, email, password) 
				  VALUES('$username', '$email', '$password')";
		mysqli_query($db, $query);
		header('location: login.php');
	}

}
if (isset($_POST['login_user'])) {
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		$password = md5($password);
//$password = $password;
		$query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
		$results = mysqli_query($db, $query);
		$user = mysqli_fetch_array($results);

		if (mysqli_num_rows($results) > 0) {
			$_SESSION['email'] = $user['email'];
			$_SESSION['id'] = $user['id'];
			$_SESSION['success'] = "You are now logged in";
			header('location: lostfound.php');
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}

?>

