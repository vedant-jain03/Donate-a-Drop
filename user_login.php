<?php

if(isset($_POST['login'])) {
ob_start();

$sql = mysqli_connect('localhost', 'bloodona_mood704', 'chaitanya1234');
	mysqli_select_db('bloodona_mood704', $sql);


 
 $a = $_POST['mobile'];
 $b = $_POST['password'];
 
 $c = "SELECT * FROM blood WHERE mobile='$a' AND password='$b'";
 $d = mysql_query($c) or die(mysql_error());
  
 $count = mysql_num_rows($d);
 
 if($count==1) {
     session_start();
    $_SESSION['user']=$a;  
	echo "<script>window.location.href='edit.php';</script>";
 } else {
echo "<script>alert('INVALID USERID PASSWORD COMBINATION');</script>";
 }
ob_end_flush();
 }

?>
<?php error_reporting(0); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blood Donation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel = "icon" href = "front_page/img/logo.jpg" type = "image/x-icon"> 
	<link rel="stylesheet" type="text/css" href="hr/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="hr/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="hr/login/css/main.css">
	
	                <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="hr/header/head.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script  src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
</head>
<body>
    
      <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="hr.php">Blood Donation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <!--<li class="nav-item ">
                    <a class="nav-link" href="index.php"><i class="fas fa-home"></i>Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="about.php"><i class="far fa-address-card"></i>About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hospital.php"><i class="far
                        fa-hospital"></i>Hospital</a>
                </li>-->
                 <li class="nav-item ">
                    <a class="nav-link" href="hr.php"><i class="fas fa-search-plus" active></i>Search Blood</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php"><i class="fas fa-file-signature"></i>Register as Donor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="user_login.php" style="color:blue;"><i class="fas fa-sign-in-alt"></i>Login</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="hospital_registration.php"><i class="fas fa-briefcase-medical"></i>Hospital Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"><i class="fas fa-phone-square-alt"></i>Contact</a>
                </li>-->

            </ul>
        </div>
    </nav>
    
        <br>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(hr/login/login.jpg);">
					<span class="login100-form-title-1">
						Login 
					</span>
				</div>
				


				<form class="login100-form validate-form" method="POST">
				    
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Phone Number</span>
						<input class="input100" type="text" name="mobile" placeholder="Enter Phone Number">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

 
	
	<?php include("hr/include.php")?>
 
    <script src="hr/header/head.js"></script>


	<script src="hr/login/vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="hr/login/js/main.js"></script>

</body>
</html>