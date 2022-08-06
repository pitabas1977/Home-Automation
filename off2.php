<?php


	$con=mysqli_connect("remotemysql.com","fayJl43f3d","anmmYyPePN","fayJl43f3d");

	
	if (isset($_GET['id'])){

		
		$course_id=$_GET['id'];

		
		$sql="UPDATE `courses1` SET
			`status`=0 WHERE id='$course_id'";

		
		mysqli_query($con,$sql);
	}

	
	header('location: Home2.php');
?>
