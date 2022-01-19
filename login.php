<?php
	$conn=mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"student");

	$spassword=trim($_GET['password']);
	$semail=trim($_GET['email']);


	$querry1="select * from student_table where email='$semail' and password='$spassword'";

	$raw1=mysqli_query($conn,$querry1);

	$count1=mysqli_num_rows($raw1);

	$querry2="select * from student_table where email='$semail'";

	$raw2=mysqli_query($conn,$querry2);

	$count2=mysqli_num_rows($raw2);


	if($count2>0){
		if($count1>0){
			$response="exist";
		}else{
			$response="wrong password";
		}
	}else{
		$response="not exist";
	}
	 
	echo $response;
	
	
?>

	