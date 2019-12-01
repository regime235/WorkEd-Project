<?php  
	include 'DB.php';

	$get_student_id_to_delete = $_GET['deleteID'];
	$get_student_fname_to_delete = $_GET['deletefName'];
	$get_student_lname_to_delete = $_GET['deletelName'];
	$get_student_course_to_delete = $_GET['deleteCourse'];
	$get_student_workass_to_delete = $_GET['deleteWorkAss'];
	$get_student_sched_to_delete = $_GET['deleteSched'];
	$get_student_department_to_delete = $_GET['deleteDepartment'];
	$get_student_supervisor_to_delete = $_GET['deleteSupervisor'];

	$sql_delete = mysqli_query($conn, "DELETE FROM student WHERE Stud_ID = '$get_student_id_to_delete'");

	echo "<script language = 'javascript'>alert('Data has been deleted')</script>";
	echo "<script>window.location.href='StudentRecord.php'</script>";
?>