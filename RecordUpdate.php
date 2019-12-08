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
		<h1 style="font-size: 50px">Update Information</h1>
		<hr>
	<div class="row" id="myForm">
			<div class="col-xs-12">
				<?php  
					include 'UpdateLog.php';
				?>
				<form method="GET" action="UpdateLog2.php">
					<input type="hidden" name="updateID" class="form-control" value="<?php echo $updateID ?>" style="width: 200px">
					<br>
					<h5>First Name:</h5> <input type="text"  name="updatefName" style="width: 200%" value="<?php echo $updateDTRfName?>">
					<br>
					<h5>Last Name:</h5> <input type="text"  name="updatelName"style="width:200%" value="<?php echo $updateDTRlName?>">
					<br>
					<h5>Department:</h5> <input type="text"   name="updateDepartment" style="width: 200%" value="<?php echo $updateDTRDepartment?>">
					<br>
					<h5>Supervisor:</h5> <input type="text"  name="updateSupervisor" style="width: 200%" value="<?php echo $updateDTRSupervisor?>">
					<h5>Time-In:</h5> <input type="text"   name="updateTimeIn" style="width: 200%" value="<?php echo $updateDTRTimeIn?>">
					<br>
					<h5>Time-Out:</h5> <input type="text"  name="update TimeOut" style="width: 200%" value="<?php echo $updateDTRTimeOut?>">
					<p></p>
					<button  type="submit" class="btn btn-success">Update</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>