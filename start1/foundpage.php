<?php include 'server.php'; // php er por include er age space hobe 

				 if(isset($_POST['submit']))
				{
				$productname=mysqli_real_escape_string($db,$_POST['product-name']);  //ekhane single quote hobe
				$location=mysqli_real_escape_string($db,$_POST['location']);
				$date=mysqli_real_escape_string($db,$_POST['date']);
				$detail=mysqli_real_escape_string($db,$_POST['detail']);
				
						if (empty($location)) { array_push($errors, "Location is required"); }
						if (empty($date)) { array_push($errors, "Date is required"); }
						if (empty($detail)) { array_push($errors, "Detail is required"); }
				 if (count($errors) == 0) {
				 mysqli_query($db,"INSERT INTO product (user_id, category, location, date, detail) VALUES ('$_SESSION[id]','$productname','$location', '$date','$detail')"); 

				header('location: AddedSuccess.php');
				 }
				
						

				//mysqli_query($db,"INSERT INTO product (mobile, location, date) VALUES ('$productname','$location', '$date')"); 

				//echo " Added Successfully ";

				
				
				}
 
				if(isset($_POST['deleteBT']))
				 {
					 		$d_id=mysqli_real_escape_string($db,$_POST['deleteID']);
							mysqli_query($db,"delete from product  where product_id='$d_id'"); 
				 };


?>
<html>
	<head>
		<title> Upload Found Products</title>
		
		<!--<link rel="stylesheet" type="text/css" href="style.css">-->
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>

	<body>
	
	
	<a href="login.php" class="btn btn-primary btn-lg active" role="button">Logout</a>
	
	<div class="row" style="margin-top:10%">
		<div class="col-md-offset-4 col-md-4">
			<h1>Please Upload Found Item</h1>
			<?php include 'errors.php'; unset($errors);?>

			<form method="post">
				
				<div class="form-group">
					<label for="InputLocation">Location</label>
					<input type="text" name="location" class="form-control" id="InputLocation" placeholder="location">
				</div>
				<div class="form-group">
					<label for="InputDetails">Details</label>
					<input type="text" name="detail" class="form-control" id="InputDetails" placeholder="detail">
				</div>
			  <div class="form-group">
				<label for="InputDate">Date</label>
				<input type="date" name="date" class="form-control" id="InputDate" placeholder="date">
			  </div>
			 
			  <div class="form-group">
			  <label> Product Type</label>
				<select name="product-name">
					<option value="Select">Select</option>}
					<option value="camera">Camera</option>
					<option value="mobile">Mobile</option>
					<option value="laptop">Laptop</option>
					<option value="audi">Car</option>
				</select>
				</div>
			 
			  <button type="submit"  name="submit" class="btn btn-default">Submit</button>
			 
			</form>
		</div>
	</div>

<!--<h3 >I have Found...</h3>	
		<form method="POST">
		
		
			<select name="product-name">
		  <option class="selection" value="Select">Select</option>}
		  <option class="camera" value="camera">Camera</option>
		  <option class="mobile" value="mobile">Mobile</option>
		  <option class="laptop" value="laptop">Laptop</option>
		  <option class="car" value="audi">Car</option>
			</select>
			
			<label>Location:</label> <input type="text" name="location" /><br><br>
			<label>Date:</label> <input type="date" name="date" /><br><br>
 
			
			<button type="submit" name="submit" class="submission" >Submit</button>

		
		
		
		</form>
			<br />
			<br />
			<br />
			<br />
			<h2>Do you want to delete something?</h2>
					<form method="POST">

			<input placeholder="enter id" name="deleteID" required></input>
			<button type="submit" name="deleteBT" >Delete</button>
					</form> -->

	</body>
<html>








