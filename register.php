<?php
	$conn=mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"student");

	$sname=trim($_POST['name']);
	$spassword=trim($_POST['password']);
	$semail=trim($_POST['email']);


	$querry1="select * from student_table where email='$semail'";

	$raw=mysqli_query($conn,$querry1);

	$count=mysqli_num_rows($raw);


	if($count>0){
		$response="$semail already registered";
	}else{
		$querry2="INSERT INTO `student_table` (`id`, `name`, `email`, `password`) 
		VALUES (NULL, '$sname`', '$semail', '$spassword')";
		
		$res=mysqli_query($conn,$querry2);
		if($res==true){
				$response="inserted";
		}else{
				$response="failed";
		}
	}
	 
	echo $response;
	
	
?>

	