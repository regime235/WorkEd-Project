<?php  
	include_once 'DB.php';

	$get_student_id_to_update = $_GET['updateID'];
	$get_student_fname_to_update = $_GET['updatefName'];
	$get_student_lname_to_update = $_GET['updatelName'];
	$get_student_course_to_update = $_GET['updateCourse'];
	$get_student_workass_to_update = $_GET['updateWorkAss'];
	$get_student_sched_to_update = $_GET['updateSched'];
	$get_student_department_to_update = $_GET['updateDepartment'];
	$get_student_supervisor_to_update = $_GET['updateSupervisor'];

	$sql_update = mysqli_query($conn, "UPDATE student SET Stud_fName = '$get_student_fname_to_update', 
		Stud_lName = '$get_student_lname_to_update', Stud_Course = '$get_student_course_to_update', Stud_WorkAss = '$get_student_workass_to_update', Stud_Sched = '$get_student_sched_to_update', Department = '$get_student_department_to_update', Supervisor = '$get_student_supervisor_to_update' WHERE Stud_ID = '$get_student_id_to_update'");

	echo "<script language = 'javascript'>alert('Data has been updated')</script>";
	echo "<script>window.location.href='StudentRecord.php'</script>";



?>