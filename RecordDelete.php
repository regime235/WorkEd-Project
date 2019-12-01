<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>DBMS</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body style="background-color: gray">
	<div class="container">
		<h1>Delete Information</h1>
		<hr>
	<div class="row" id="myForm">
		<div class="col-xs-12">
			<?php  
				include 'DeleteLog.php';
				?>
			<form method="GET" action="DeleteLog2.php">
				<input type="hidden" name="deleteID" class="form-control" value="<?php echo $deleteID?>">
				<h5>First Name:</h5> <input type="text"  name="deleteDTRfName" style="width: 200%" value="<?php echo $deleteDTRfName?>">
				<br>
				<h5>Last Name:</h5> <input type="text"  name="deletedtrlName"style="width:200%" value="<?php echo $deleteDTRlName?>">
				<br>
				<h5>Department:</h5> <input type="text"   name="deletedtrDepartment" style="width: 200%" value="<?php echo $deleteDTRDepartment?>">
				<br>
				<h5>Supervisor:</h5> <input type="text"  name="deletedtrSupervisor" style="width: 200%" value="<?php echo $deleteDTRSupervisor?>">
				<h5>Time-In:</h5> <input type="text"   name="deleteTimeIn" style="width: 200%" value="<?php echo $deleteDTRTimeIn?>">
				<br>
				<h5>Time-Out:</h5> <input type="text"  name="deleteTimeOut" style="width: 200%" value="<?php echo $deleteDTRTimeOut?>">
				<p></p>
				<button  type="submit" class="btn btn-success">Delete</button>
			</form>
		</div>
	</div>
</body>
</html>