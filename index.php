<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">

  </head>
  <body>

    <section>
      <input type="checkbox" id="check">
      <header>
        </div>
        <div class="branding">
			<h2><span class="logo">HOME</span><span class="lg">Automation</span></h2>
		</div>
        <div class="navigation">
          <a href="index.php">Home</a>
          <a href="#">About</a>
          <a href="index2.php">Contact</a>
          <a href="login.php">Log In</a>
          <!-- <a href="register.php">Sign Up</a> -->
        </div>
        <label for="check">
        <i class="fas fa-bars menu-btn"></i>
        <i class="fas fa-times close-btn"></i>
        </label>
      </header>
      <!-- <div class="content">
        <div class="info">
          <h2>Home Management system <br><span>with control process.</span></h2>
          <p>IoT home automation is the ability to control domestic appliances by electronically controlled, internet-connected systems... <br> It may include setting complex heating and lighting systems in advance and setting alarms and home security controls, all connected by a central hub and remote-controlled by a mobile app. .</p>
          <a href="login.php" class="info-btn">Join Now</a>
        </div>
      </div> -->
      <!-- <div class="media-icons">
        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
      </div> -->
    </section>
    <footer class="footer">
    	<div class="f-container">
    		<div class="foot-row">
    			<div class="foot-col">
    				<h4>Company</h4>
    				<ul>
    					<li><a href="about.php">About Us</a></li>
    					<li><a href="contact.php">Contact</a></li>
    					<li><a href="privacy.php">Privacy Policy</a></li>
    				</ul>
    			</div>
    			<div class="foot-col">
    				<h4>Get Help</h4>
    				<ul>
    					<li><a href="">FAQs</a></li>
    				</ul>
    			</div>
    			<div class="foot-col">
    				<h4>Follow Us</h4>
    				<div class="social-links"></div>
    					<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
    					<a href="#"><i class="fab fa-instagram"></i></a>
    					<a href="#"><i class="fab fa-twitter"></i></a>
    					<a href="#"><i class="fab fa-linked-in"></i></a>
    				</div>
    			</div>
    		</div>
    	</div>
    </footer>

  </body>
</html>
