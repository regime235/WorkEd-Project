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
<body style="background-image: url(aup1.jpg);">
	<nav class="navbar navbar-expand-sm " style="background-color: yellow">
  <ul class="navbar-nav">
  	<li class="nav-item">
      <a class="nav-link" href="HomePage.php"><font color="black"><p style="font-family: cambria;">Home</p></font></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Student.php"><font color="black"><p style="font-family: cambria;">Student</p></font></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="StudentRecord.php"><font color="black"><p style="font-family: cambria;">Student Record</p></font></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="StudentLog.php"><font color="black"><p style="font-family: cambria;">Student Log</p></font></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php"><font color="black"><p style="font-family: cambria;">Log Out</p></font></a>
    </li>
  </ul>
</nav>
	<div class="container">
		<h1 style="color: yellow">Add Student</h1>
		<hr>
	<div class="row" id="myForm">
		<div class="col-xs-12">
			<form action="StudInsertRecord.php" method="post">
				<h5 style="color: yellow">First Name:</h5> <input type="text" placeholder="Enter First Name" name="Stud_fName" style="width: 200%">
				<br>
				<h5 style="color: yellow">Last Name:</h5> <input type="text"  placeholder="Enter Last Name" name="Stud_lName"style="width:200%">
				<br>
				<h5 style="color: yellow">Course:</h5> <input type="text"  placeholder="Enter Course" name="Stud_Course" style="width: 200%">
				<br>
				<h5 style="color: yellow">Work Assignment:</h5> <input type="text"  placeholder="Enter Assignment" name="Stud_WorkAss" style="width: 200%">
				<br>
				<h5 style="color: yellow">Work Schedule:</h5> <input type="text"  placeholder="Enter Schedule" name="Stud_Sched" style="width: 200%">
				<br>
				<h5 style="color: yellow">Department:</h5> <input type="text"  placeholder="Enter Department" name="Department" style="width: 200%">
				<br>
				<h5 style="color: yellow">Supervisor:</h5> <input type="text"  placeholder="Enter Supervisor" name="Supervisor" style="width: 200%">
				<br>
				<br>
				<button  type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
		</div>
	</div>
</body>
</html>