<?php  
	include_once 'DB.php';

	$deleteID = $_GET['id'];

	$sql = mysqli_query($conn, "SELECT * FROM student WHERE Stud_ID = '$deleteID'");

	while ($row = mysqli_fetch_assoc($sql)){
		$deleteID = $row['Stud_ID'];
		$deletefName = $row['Stud_fName'];
		$deletelName = $row['Stud_lName'];
		$deleteCourse = $row['Stud_Course'];
		$deleteWorkAss = $row['Stud_WorkAss'];
		$deleteSched = $row['Stud_Sched'];
		$deleteDepartment = $row['Department'];
		$deleteSupervisor = $row['Supervisor'];
	}
?>