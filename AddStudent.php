<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Student</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: gray">
	<nav class="navbar navbar-expand-sm bg-dark" >
  <ul class="navbar-nav">
  	<li class="nav-item">
      <a class="nav-link" href="HomePage.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Student</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="StudentRecord.php">Student Record</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="StudentLog.php">Student Log</a>
    </li>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">Log Out</a>
    </li>
  </ul>
</nav>
	<div class="container">
		<h1>Add Student</h1>
		<hr>
	<div class="row" id="myForm">
		<div class="col-xs-12">
			<form action="StudentInsertLog.php" method="post">
				<h5>First Name:</h5> <input type="text" name="Stud_fName" style="width: 200%">
				<br>
				<h5>Last Name:</h5> <input type="text"  name="Stud_lName"style="width:200%">
				<br>
				<h5>Department:</h5> <input type="text"   name="Department" style="width: 200%">
				<br>
				<h5>Supervisor:</h5> <input type="text"   name="Supervisor" style="width: 200%">
				<br>
				<h5>Time-in:</h5> <input type="text"   name="Stud_TimeIn" style="width: 200%">
				<br>
				<h5>Time-Out:</h5> <input type="text"   name="Stud_TimeOut" style="width: 200%">
				<br>
				<button  type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
		</div>
	</div>
</body>
</html>