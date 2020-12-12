
<?php

//echo "WHAT ARE YOU LOOKING FOR";
include 'server.php';

 
if(isset($_POST['submit']))
				{
				$itemname=mysqli_real_escape_string($db,$_POST['item-name']);  //ekhane single quote hobe
				$lostlocation=mysqli_real_escape_string($db,$_POST['lostlocation']);
				
						//if (empty($itemname)) { array_push($errors, "Location is required"); }
						//if (empty($lostlocation)) { array_push($errors, "Date is required"); }
				// if (count($errors) == 0) {
				if(empty($lostlocation) && $itemname!='select'){
					$sql = mysqli_query($db,"SELECT * FROM product WHERE category = '$itemname'");
				}else if(!empty($lostlocation) && $itemname!='select'){
					$sql = mysqli_query($db,"SELECT * FROM product WHERE category = '$itemname' and location = '$lostlocation'");
				}else if(empty($lostlocation) && $itemname=='select'){

							echo "Please select something";
				
				}
				/**$sql = mysqli_query($db,"SELECT * FROM product WHERE mobile = '$itemname' and location = '$lostlocation'");
				
					/**$query="SELECT * FROM product WHERE mobile = 'camera'";
					$sql = mysqli_query($query);**/
					
					/**while($row=mysqli_fetch_array($sql)){
							$item = $row["mobile"];
							echo $item; 
							echo $lostlocation;
						
					}*/
				//header('location: AddedSuccess.php');
				// }
				//}
				}
?>
<html>
	<!--<head></head>
	
	
	<title>Static Dropdown List</title>
	
	<body bgcolor="pink">
	

		What have you found Sir?
		
		
		<form method="POST"> 
		
		
		<select name="item-name">
		  <option value="select">Select</option>}
		  <option class="camera" value="camera">Camera</option>
		  <option class="mobile" value="mobile">Mobile</option>
		  <option class="laptop" value="laptop">Laptop</option>
		  <option class="car" value="cae">Car</option>
		</select>
			
			<label>LostLocation:</label> <input type="text" name="lostlocation"  placeholder="Location"/><br><br>
			
			<button type="submit" name="submit" style="padding:10px; padding-right:15px;padding-left:15px; background:#d50000; color:white; border:0px">Submit</button>
			
			</form>-->
			
			
			
	<head>
		<title>Found Products</title>
		
		<!--<link rel="stylesheet" type="text/css" href="style.css">-->
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>

	<body>
	
	
	
	<div class="row" style="margin-top:10%">
	
		<div class="col-md-offset-4 col-md-4">
		
			<h1>Have you lost anything?</h1>
			<?php include 'errors.php'; unset($errors);?>
             
			<form method="post">
				
				<div class="form-group">
					<label for="InputLocation">Location</label>
					<input type="text" name="lostlocation" class="form-control" id="InputLocation" placeholder="Lost Location">
				</div>
				
				  
			 
			    <div class="form-group">
					<label> Product Type</label>
					<select name="item-name">
					  <option value="select">Select</option>}
					  <option class="camera" value="camera">Camera</option>
					  <option class="mobile" value="mobile">Mobile</option>
					  <option class="laptop" value="laptop">Laptop</option>
					  <option class="car" value="audi">Car</option>
					</select>
				</div>
			 
			  <button type="submit"  name="submit" class="btn btn-default">Submit</button>
			</form>
			
			
		</div>
	</div>
	<div class="table table-striped">
				  <table class="table">
					<tr>
						<th>Product ID</th>
						<th>Product</th>
						<th>Location</th>
						<th>Date</th>
						<th>Detail</th>
						<th>Finder</th>
					</tr>
			<?php
			
						if(isset($sql)){
						while($row=mysqli_fetch_array($sql)){			
							$p_id = $row["product_id"];
							$loc = $row["location"];
							$date = $row["date"];
							$item = $row["category"]; 
							$user_id =$row["user_id"]; 
							$detail =$row["detail"];
							$u = mysqli_fetch_array(mysqli_query($db,"SELECT user.username as name FROM user JOIN product ON user.id='$user_id'"));
							
			?>
								
								<tr class="active">
								  <td ><?php echo $p_id ?></td>
								  <td ><?php echo $item ?></td>
								  <td ><?php echo $loc ?></td>
								   <td ><?php echo $date ?></td>
								   <td ><?php echo $detail ?></td>
								   <td ><?php echo $u['name']; ?></td>
								</tr>
								
								
								
							
							
			<?php
							

				} 
			}
			
			?>
			
								
			  </table>
			</div>
	</body>
</html>