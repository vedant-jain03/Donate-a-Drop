<?php
 
if(isset($_GET['login'])) {
 
ob_start();

$cn = mysql_connect("localhost", "bloodona_mood704", "chaitanya1234");
mysql_select_db("bloodona_mood704", $cn);
 
 $a = $_GET['username'];
 $b = $_GET['password'];
 
 $c = "SELECT * FROM login WHERE username='$a' AND password='$b'";
 $d = mysql_query($c) or die(mysql_error());
  
 $count = mysql_num_rows($d);
 
 if($count==1) {
  $_SESSION['login']=$a;  
	
	echo "<script>window.location.href='hr.php';</script>";
 } else {
	echo "INVALID USERID PASSWORD COMBINATION";
 }
 ob_end_flush();
 }
?>




<html>

<head>
    <meta charset="UTF-8">
    <title>Blood Donation</title>
	 <link rel = "icon" href = "front_page/img/logo.jpg"
        type = "image/x-icon"> 
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminlogin/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="hr/css/top_nav.css" rel="stylesheet">
    <script data-ad-client="ca-pub-9494752717912198" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <style>
        body {
            background-color: #303641;
        }
    </style>
             <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="hr/header/head.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script  src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    
</head>

<body>
    
     <!-- END starts -->
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
                <li class="nav-item active">
                    <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt" active></i>Hospital Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hospital_registration.php"><i class="fas fa-briefcase-medical"></i>Hospital Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"><i class="fas fa-phone-square-alt"></i>Contact</a>
                </li>

            </ul>
        </div>
    </nav>
    
        <br>
    <!-- END nav -->

    <div id="container-login" style="margin-bottom:50px;">
        
        <div id="title" style="color:#fff;">
            <b><i class="material-icons lock">lock</i> Login</b>
        </div>
          
        <form method="GET">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input name="username" id="username" placeholder="Username" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input name="password" id="password" placeholder="Password" type="password" required class="validate" autocomplete="off">
            </div>

            <div class="remember-me">
                <input type="checkbox">
                <span style="color: #DDD">Remember Me</span>
            </div>

            <input name="login" type="submit" />
        </form>

        

        <div class="forgot-password">
            <a href="#">Forgot your password?</a>
        </div>
        <div class="privacy">
            <a href="#">Privacy Policy</a>
        </div>

        <div class="register">
            Don't have an account yet?
            <a href="hospital_registration.php"><button id="register-link">Register here</button></a>
        </div>
   
</select> 
  </div>
  
      <!-- END section -->

<?php include("hr/include.php")?>
 
    <script src="hr/header/head.js"></script>
    <!-- Modal -->
  
  
    <script src="hr/js/top_nav.js"></script>
</body>

</html>