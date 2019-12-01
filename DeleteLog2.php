<?php  
	include 'DB.php';

	$get_dtr_id_to_delete = $_GET['deleteID'];
	$get_dtr_fname_to_delete = $_GET['deletedtrfName'];
	$get_dtr_lname_to_delete = $_GET['deletedtrlName'];
	$get_dtr_department_to_delete = $_GET['deletedtrDepartment'];
	$get_dtr_supervisor_to_delete = $_GET['deletedtrSupervisor'];
	$get_dtr_timeIn_to_delete = $_GET['deleteTimeIn'];
	$get_dtr_timeOut_to_delete = $_GET['deleteTimeOut'];

	$sql_delete = mysqli_query($conn, "DELETE FROM dtr WHERE DTRNo = '$get_dtr_id_to_delete'");

	echo "<script language = 'javascript'>alert('Data has been deleted')</script>";
	echo "<script>window.location.href='StudentLog.php'</script>";
?>