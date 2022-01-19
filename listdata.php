<?php
	$conn=mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"student");
	
	$qry="select * from student_table";
	$result=mysqli_query($conn,$qry);
	
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
		$res[]=$row;
	}
		
	}else{
		$res['error']="400";
	}
	
	print(json_encode($res));
	
?>
