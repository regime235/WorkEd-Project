<?php  
	include_once 'DB.php';

	$updateID = $_GET['id'];

	$sql = mysqli_query($conn, "SELECT * FROM dtr WHERE DTRNo = '$updateID'");

		while ($row = mysqli_fetch_array($sql)) {
			$updateID = $row['DTRNo'];
			$updateDTRfName = $row['Stud_fName'];
			$updateDTRlName = $row['Stud_lName'];
			$updateDTRDepartment = $row['Department'];
			$updateDTRSupervisor = $row['Supervisor'];
			$updateDTRTimeIn = $row['Stud_TimeIn'];
			$updateDTRTimeOut = $row['Stud_TimeOut'];
		}

?>