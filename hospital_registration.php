<?php
	if(isset($_POST['register'])) {
		include('inc_config.php');
		
			$a = $_POST['hospital_name'];
			$b = $_POST['city'];
			$c = $_POST['email'];
			$d = $_POST['number'];
			$e = $_POST['checkbox'];
					
			
			$f = "INSERT INTO hospital (name,city,email, phone_no, terms_and_condition) VALUES ('$a', '$b', '$c', '$d', '$e')";
			$g = mysql_query($f) or die(mysql_error());
			
			echo "<script>alert('You are successfully registered !!!');</script>";
			//echo "<script>window.location.href='index.php';</script>";
	}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blood Donation</title>
	
	<script data-ad-client="ca-pub-9719935806824171" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	
	 <link rel = "icon" href = "front_page/img/logo.jpg"
        type = "image/x-icon"> 
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="other_css/css5/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="other_css/css5/style.css"/>
    <link rel="stylesheet" href="hr/css/top_nav.css"/>
    <link rel="stylesheet" href="front_page/css/style.css">
<script data-ad-client="ca-pub-9494752717912198" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


	                <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="hr/header/head.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script  src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    
</head>
<body>
    
 <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="index.php">Blood Donation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item ">
                    <a class="nav-link" href="index.php"><i class="fas fa-home"></i>Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="about.php"><i class="far fa-address-card"></i>About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hospital.php"><i class="far
                        fa-hospital"></i>Hospital</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php"><i class="fas fa-file-signature"></i>Register as Donor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user_login.php"><i class="fas fa-sign-in-alt"></i>Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  active" href="hospital_registration.php"><i class="fas fa-briefcase-medical"></i>Hospital Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"><i class="fas fa-phone-square-alt"></i>Contact</a>
                </li>

            </ul>
        </div>
    </nav>
    
        <br>
 


	<div class="page-content">
		<div class="form-v4-content">
			<div class="form-left">
				<h2>Terms and Condition</h2>
				<li > This website is developed keeping all the necessary points related to user convenience and ease. </li><br>
	<li>This website is secured and keeps all your data and information safe. </li><br>
	<li> This website is linked to different hospitals and various donors , hence do not involve any kind of amalgamation and maintains complete transparency. </li><br>
	<li> This website act as an interface between the two, it has nothing to do with receiver and donor end individually. </li><br>
	<li> This site is just to help and avail various hospitals with as many donors as possible. </li><br>
     <li><b>If in case any miscommunication happens between both the parties this website and Its member are not liable for it.</b></li><br>
     <li> Any donor making registration on this website is himself answerable and responsible for any kind of commitment done to receiver end. </li><br>
     <li>The hospitals working in partnership with this site shouldn't be dependable on any kind of move as this site doesn't promises anything ,it's just a mode of communication. </li><br>
			</div>
            
            
			<form class="form-detail" action="#" method="POST" id="myform">
				<h2>Hospital Registration</h2>
                
                <div class="form-row">
					<label for="Hospital name">Enter Hospital Name</label>
					<input type="text" name="hospital_name" id="name" class="input-text" required>
				</div>
                
                <div class="form-row">
					<label for="City">City</label>
					<input type="text" name="city" id="name" class="input-text">
				</div>
                
			
				<div class="form-row">
					<label for="your_email">Your Email</label>
					<input type="text" name="email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
                <div class="form-row">
					<label for="Contact No.">Contact Number</label>
					<input type="number" name="number" id="name" class="input-number" min="6000000000" max="9999999999">
				</div>
                
				<!--<div class="form-group">
					<div class="form-row form-row-1 ">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="input-text" required>
					</div>
					<div class="form-row form-row-1">
						<label for="comfirm-password">Comfirm Password</label>
						<input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required>
					</div>
				</div>-->
                
                
				<div class="form-checkbox">
					<label class="container"><p>I agree to the <a href="#" class="text">Terms and Conditions</a></p>
					  	<input type="checkbox" name="checkbox" value="yes" required>
					  	<span class="checkmark"></span>
					</label>
				</div>
				
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>

    <!-- END cta-link -->

	
	<?php include("hr/include.php")?>
 
    <script src="hr/header/head.js"></script>
  
	
</body>
</html>