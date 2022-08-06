<?php

    $host = 'remotemysql.com';
    $user = 'fayJl43f3d';
	$database = 'fayJl43f3d';
	$password = 'anmmYyPePN';

	$con = mysqli_connect($host,$user,$password,$database);

	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

?>