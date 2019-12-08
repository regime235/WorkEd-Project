<?php  
	include ("DB.php");

	$StudfName = $_POST['Stud_fName']; 
	$StudlName = $_POST['Stud_lName']; 
	$Department = $_POST['Department']; 
	$Supervisor = $_POST['Supervisor'];
	$TimeIn = $_POST['Stud_TimeIn']; 
	$TimeOut = $_POST['Stud_TimeOut'];  

	$query = "INSERT INTO dtr (Stud_fName, Stud_lName, Department, Supervisor, Stud_TimeIn, Stud_TimeOut) VALUES('$StudfName', '$StudlName','$Department', '$Supervisor', '$Stud_TimeIn', '$Stud_TimeOut')"; 

	if (mysqli_query($conn, $query)){
		header("Location://localhost/Project/StudentLog.php");
	} else{
		echo "Try Again!";
	}
	mysqli_close($conn);
?>