<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Student</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/style.css">
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
    <script src="js/active.js"></script>
</head>

<body style="background-image: url(img/aup1.jpg); background-size: cover;" >


	<header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="razoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"><img src="img/aup_logo.png" alt="" height="75" width="75"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="HomePage.php">Home</a></li>
                                    <li><a href="Student.php">Student</a>
                                    <li><a href="#">Student Record</a></li>
                                    <li><a href="StudentLog.php">Student Log</a>
                                    <li><a href="index.php">Log Out</a></li>
                                    
                                        
                                </ul>

                                <!-- Share Icon -->
                                <div class="social-share-icon">
                                    <i class="social_share"></i>
                                </div>

                                <!-- Search Icon -->
                                <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                                    <i class="icon_search"></i>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
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