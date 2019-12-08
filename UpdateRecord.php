<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>DBMS</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
  		<link rel="stylesheet" href="style.css">
  		<link rel="stylesheet" href="css/style.css">
  		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
    	<!-- Popper -->
    	<script src="js/popper.min.js"></script>
    	<!-- Bootstrap -->
    	<script src="js/bootstrap.min.js"></script>
    	<!-- All Plugins -->
    	<script src="js/razo.bundle.js"></script>
    	<!-- Active -->
    	<script src="js/active.js"></script>
</head>
<body style="background-color: gray">
	<div class="container">
		<h1>Update Information</h1>
		<hr>
	<div class="row" id="myForm">
		<div class="col-xs-12">
			<?php  
				include 'Update.php';
			?>
		<form method="GET" action="Update2.php">
			<input type="hidden" name="updateID" class="form-control" value="<?php echo $updateID?>">
				<h5>First Name:</h5> <input type="text"  name="updatefName" style="width: 200%" value="<?php echo $updatefName?>">
				<br>
				<h5>Last Name:</h5> <input type="text"  name="updatelName"style="width:200%" value="<?php echo $updatelName?>">
				<br>
				<h5>Course:</h5> <input type="text"   name="updateCourse" style="width: 200%" value="<?php echo $updateCourse?>">
				<br>
				<h5>Work Assignment:</h5> <input type="text"  name="updateWorkAss" style="width: 200%" value="<?php echo $updateWorkAss?>">
				<br>
				<h5>Work Schedule:</h5> <input type="text"   name="updateSched" style="width: 200%" value="<?php echo $updateSched?>">
				<br>
				<h5>Department:</h5> <input type="text"   name="updateDepartment" style="width: 200%" value="<?php echo $updateDepartment?>">
				<br>
				<h5>Supervisor:</h5> <input type="text"  name="updateSupervisor" style="width: 200%" value="<?php echo $updateSupervisor?>">
				<p></p>
				<button  type="submit" class="btn btn-success">Update</button>
			</form>
		</div>
	</div>
	</div>
</body>
</html>