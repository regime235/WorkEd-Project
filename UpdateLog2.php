<?php  
	include_once 'DB.php';

	$get_dtr_id_to_update = $_GET['updateID'];
	$get_dtr_fname_to_update = $_GET['updatefName'];
	$get_dtr_lname_to_update = $_GET['updatelName'];
	$get_dtr_department_to_update = $_GET['updateDepartment'];
	$get_dtr_supervisor_to_update = $_GET['updateSupervisor'];
	$get_dtr_timeIn_to_update = $_GET['updateTimeIn'];
	$get_dtr_timeOut_to_update = $_GET['updateTimeOut'];

	$sql_update = mysqli_query($conn, "UPDATE dtr SET Stud_fName = '$get_dtr_fname_to_update', 
		Stud_lName = '$get_dtr_lname_to_update', Department = '$get_dtr_department_to_update', Supervisor = '$get_dtr_supervisor_to_update', Stud_TimeIn = '$get_dtr_timeIn_to_update', Stud_TimeOut = '$get_dtr_timeOut_to_update' WHERE DTRNo = '$get_dtr_id_to_update'");

	echo "<script language = 'javascript'>alert('Data has been updated')</script>";
	echo "<script>window.location.href='StudentLog.php'</script>";

?>