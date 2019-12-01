<?php 
	include_once 'DB.php';
	
	$deleteID = $_GET['id'];

	$sql = mysqli_query($conn, "SELECT * FROM dtr WHERE DTRNo = '$deleteID'");

	while ($row = mysqli_fetch_assoc($sql)){
		$deleteID = $row['DTRNo'];
		$deleteDTRfName = $row['Stud_fName'];
		$deleteDTRlName = $row['Stud_lName'];
		$deleteDTRDepartment = $row['Department'];
		$deleteDTRSupervisor = $row['Supervisor'];
		$deleteDTRTimeIn = $row['Stud_TimeIn'];
		$deleteDTRTimeOut = $row['Stud_TimeOut'];
	} 
?>