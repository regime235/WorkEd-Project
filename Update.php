<?php  
	include_once 'DB.php';

	$updateID = $_GET['id'];

	$sql = mysqli_query($conn, "SELECT * FROM student WHERE Stud_ID = '$updateID'");

		while ($row = mysqli_fetch_array($sql)) {
			$updateID = $row['Stud_ID'];
			$updatefName = $row['Stud_fName'];
			$updatelName = $row['Stud_lName'];
			$updateCourse = $row['Stud_Course'];
			$updateWorkAss = $row['Stud_WorkAss'];
			$updateSched = $row['Stud_Sched'];
			$updateDepartment = $row['Department'];
			$updateSupervisor = $row['Supervisor'];
		}

?>