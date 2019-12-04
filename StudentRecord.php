<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Student Record</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
  		<!-- jQuery -->
<script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- All Plugins -->
    <script src="js/razo.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>
</head>
<body style="background-color: gray">
	<nav class="navbar navbar-expand-sm bg-dark" >
  <ul class="navbar-nav">
  	<li class="nav-item">
      <a class="nav-link" href="HomePage.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Student.php">Student</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Student Record</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="StudentLog.php">Student Log</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">Log Out</a>
    </li>
  </ul>
</nav>
	<div class="container">
		<h1>Student Record</h1>
		<hr>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Course</th>
					<th>Work Assignment</th>
					<th>Work Schedule</th>
					<th>Department</th>
					<th>Supervisor</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php  
					include 'DB.php';

					$query = "SELECT * FROM student";
					$result = mysqli_query($conn,$query);

					while($row = mysqli_fetch_array($result))
						echo'
							<tr>
								<td>'.$row['Stud_fName'].'</td>
								<td>'.$row['Stud_lName'].'</td>
								<td>'.$row['Stud_Course'].'</td>
								<td>'.$row['Stud_WorkAss'].'</td>
								<td>'.$row['Stud_Sched'].'</td>
								<td>'.$row['Department'].'</td>
								<td>'.$row['Supervisor'].'</td>
								<td>
									<a href = "UpdateRecord.php? id='.$row['Stud_ID'].'" class = "btn btn-success btn-xs" role="button">Update</a>
									<a href = "DeleteRecord.php? id='.$row['Stud_ID'].'" class = "btn btn-danger btn-xs" role="button">Delete</a>
							</tr>';
			?>					
			</tbody>
		</table>

</body>
</html>