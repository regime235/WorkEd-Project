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
			<form action="StudInsertRecord.php" method="post">
				<h5>First Name:</h5> <input type="text" placeholder="Enter First Name" name="Stud_fName" style="width: 200%">
				<br>
				<h5>Last Name:</h5> <input type="text"  placeholder="Enter Last Name" name="Stud_lName"style="width:200%">
				<br>
				<h5>Course:</h5> <input type="text"  placeholder="Enter Course" name="Stud_Course" style="width: 200%">
				<br>
				<h5>Work Assignment:</h5> <input type="text"  placeholder="Enter Assignment" name="Stud_WorkAss" style="width: 200%">
				<br>
				<h5>Work Schedule:</h5> <input type="text"  placeholder="Enter Schedule" name="Stud_Sched" style="width: 200%">
				<br>
				<h5>Department:</h5> <input type="text"  placeholder="Enter Department" name="Department" style="width: 200%">
				<br>
				<h5>Supervisor:</h5> <input type="text"  placeholder="Enter Supervisor" name="Supervisor" style="width: 200%">
				<br>
				<button  type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
		</div>
	</div>
</body>
</html>