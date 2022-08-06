<?php
	session_start();
	ob_start();
	require('config.php');
	require('header.php');
	
?>

	<!-- <header id="head" class="secondary"> -->
		<div class="container1">
			<div class="row">
				<div class="col-sm-8">
					<center>
					<h1>Login</h1></center>
				</div>
			</div>
		</div>
	</header>
	
	<div class="container" id="glass">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
				<div class="panel-heading">
					<?php	
						if(isset($_POST['login'])){
							$username = mysqli_real_escape_string($con, $_POST['username']);
							$password = mysqli_real_escape_string($con, $_POST['password']);
							
							$query = "SELECT * FROM login WHERE Email='$username' AND Password='$password'";
							$run_query = mysqli_query($con,$query);
							$rows = mysqli_num_rows($run_query);
							$fetch = mysqli_fetch_assoc($run_query);
							$role = $fetch['role'];

							if($rows > 0){
								$_SESSION['id'] = $fetch['Login_ID'];
								if(isset($_SESSION['id'])){
									switch ($role){
										case "admin" : {
											header('LOCATION: user_page.php');
											break;
										}
										case "rajesh" :{
											header('LOCATION: user_page.php');
											break;
										}
										case "pitabas" :{
											header('LOCATION: user_page.php');
											break;
										}
										case "ashish" :{
											header('LOCATION: user_page.php');
											break;
										}
									}
								}
							}else{
								echo "Oops! Email or password is incorrect.";
							}
						}
					
					?>
					<div class="panel-title">Sign In</div>
					<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
				</div>     

				<div style="padding-top:30px" class="panel-body" >

					<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						
					<form id="loginform" class="form-horizontal" role="form" method='post'>
								
						<div style="margin-bottom: 25px" class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
								</div>
							
						<div style="margin-bottom: 25px" class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input id="login-password" type="password" class="form-control" name="password" placeholder="password">
								</div>
								
						<div class="input-group">
							  <div class="checkbox">
								<label>
								  <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
								</label>
							  </div>
						</div>


							<div style="margin-top:10px" class="form-group text-right">
								<!-- Button -->
								<div class="col-sm-12 controls">
								  <input type='submit' id="btn-login"  class="btn btn-success" name='login' value='Login'>
								</div>
							</div>
					</form>     
				</div>                     
            </div>  
        </div>
    </div>
    <style>
		body{
			background-image:url(5172658.jpg);
			background-repeat: no-repeat;
			background-size: 100% 1;
		}
		.container1{
			margin-top: 130px;
			color: white;

		}
		#glass{
			max-width: 950px;
			margin-top: 20px;
		
	background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 20px;
    border:1px solid rgba(255, 255, 255, 0.18);
    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
		}
	</style>
<?ph
	
?>