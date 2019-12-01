<?php  
	include("DB.php");

	$StudfName = $_POST['Stud_fName']; 
	$StudlName = $_POST['Stud_lName']; 
	$StudCourse = $_POST['Stud_Course']; 
	$StudWorkAss = $_POST['Stud_WorkAss']; 
	$StudSched = $_POST['Stud_Sched']; 
	$Department = $_POST['Department']; 
	$Supervisor = $_POST['Supervisor']; 

	$query = "INSERT INTO student (Stud_fName, Stud_lName, Stud_Course, Stud_WorkAss, Stud_Sched, Department, Supervisor) VALUES('$StudfName', '$StudlName', '$StudCourse', '$StudWorkAss', '$StudSched', '$Department', '$Supervisor')"; 

	if (mysqli_query($conn, $query)){
		header("Location://localhost/WorkEdDB/StudentRecord.php");
	} else{
		echo "Try Again!";
	}
	mysqli_close($conn);
?>