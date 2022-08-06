<?php


	// $con = mysqli_connect("localhost","root","","courses");
  $con=mysqli_connect("remotemysql.com","fayJl43f3d","anmmYyPePN","fayJl43f3d");


	$sql = "SELECT * FROM `courses1`";
	$Sql_query = mysqli_query($con,$sql);
	$All_courses = mysqli_fetch_all($Sql_query,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
	

	<style>
		body{
			background-image: url(18940-removebg-preview.png),url(Happy_woman_chatting_with_friends_online-removebg-preview.png);
            background-position: top right,top right;
            background-repeat: no-repeat;
            margin: 10px;
            background-position-x: 1400px,1450px;
            background-position-y: 60px,490px;
            background-size: 420px 320px;
		}
		.btn{
			background-color: red;
			border: none;
			color: white;
			width:90px;
			padding: 5px 5px;
			/* text-align: center; */
			text-decoration: none;
	
			font-size: 20px;
		
			cursor: pointer;
			border-radius: 20px;
		}
		.green{
			background-color: #199319;
		}
		.red{
			background-color: red;
		}
		table,th{
			/* border-style : solid;
			border-width : none; */
			width: 1000px;
			height: 900px;
			text-align :center;
			margin:50px;
			background-image: url(logo.png), url(logo2.png),url(ac.png),url(lcd.png),url(img5.png);
            background-repeat: no-repeat;
		
            background-size: 85px 100px,98px 100px,200px 120px,200px 120px,380px 500px ;
            background-position: 600px 60px, 600px 280px,600px 500px,600px 720px,left ;
			padding: 20px;
  box-shadow:
       inset 0 -3em 3em rgba(0,0,0,0.1),
             0 0  0 2px rgb(255,255,255),
             0.3em 0.3em 1em rgba(0,0,0,0.3);
		}
		td{
			text-align :center;
		}
	</style>	
</head>

<body>

	<table>
		
		</tr> 
		<?php

		
			foreach ($All_courses as $course1) { ?>
			
			
				<!-- <?php
						
						if($course1['status']=="1")
							echo "ON";
						else
							echo "OFF";
					?>						 -->
				</td>
				<td>
					<?php
					if($course1['status']=="1")

						
						echo
"<a href=off2.php?id=".$course1['id']." class='btn red'>OFF</a>";
					else
						echo
"<a href=on2.php?id=".$course1['id']." class='btn green'>ON</a>";
					?>
			</tr>
		<?php
				}
				
		?>
	</table>
</body>

</html>
