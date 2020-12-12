<?php include('server.php'); 


if(isset($_POST['submit']))
				 {
					 		$productid=mysqli_real_escape_string($db,$_POST['productid']);
							if (empty($productid)) { array_push($errors, "ProductID is required"); }
							
							if (count($errors) == 0) {
							mysqli_query($db,"delete from product  where product_id='$productid'"); 
							
							header('location: RemoveSuccess.php');
							}
				 };



?>
<html>
<head>
		<title>Product Details</title>
		
		<!--<link rel="stylesheet" type="text/css" href="style.css">-->
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>

<?php

?>


<div class="row" style="margin-top:10%">
	
		<div class="col-md-offset-4 col-md-4">
<?php include 'errors.php'; unset($errors);?>
<form method="post">

<div class="form-group">

					<label for="InputProductID">Input ProductID To Remove (To know the Product-Id please contact the admin by calling +991243) :</label>
					<input type="text" name="productid" class="form-control" id="InputProductID" placeholder="product id">
				</div>
				<button type="submit"  name="submit" class="btn btn-default">Submit</button>
				
				</form>
				

</html>