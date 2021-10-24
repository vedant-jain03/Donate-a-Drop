<?php
session_start(); 
if(!isset($_SESSION['user'])) {
	  header("location: index.php");
}

$sno = $_SESSION['user'];
//$sno = $_GET['sno'];
include('inc_config.php');
?>

<?php
	if(isset($_POST['register'])) {
		
			$a = $_POST['name'];
			$b = $_POST['bg'];
			$c = $_POST['mobile'];
			$d = $_POST['email'];
			$e = $_POST['address'];
			$f = $_POST['city'];	
			$g = $_POST['pswd'];				
			//$g = $_GET['sno'];			
		
			
		$sql1="update blood set name='$a',blood_group='$b',email='$d',address='$e',city='$f', password='$g' where mobile='$c'";
		$query1=mysql_query("$sql1") or die(mysql_error()); 
			echo "<script>alert('Your profile is updated sucessfully !!!');</script>";
			echo "<script>window.location.href='index.php';</script>";
	}
?>

<!DOCTYPE html>
<html lang="en">
<?php include('inc_head.php'); ?>
<title>Blood Donation</title>
 <link rel = "icon" href = "front_page/img/logo.jpg"
        type = "image/x-icon"> 
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" >
    <meta name="author" >
    <meta name="keywords" >
     <!-- Icons font CSS-->
    <link href="register_data/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="register_data/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="register_data/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="register_data/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    
    
                    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="hr/header/head.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script  src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Main CSS-->
    <link href="register_data/css/main.css" rel="stylesheet" media="all">
    <link href="hr/css/top_nav.css" rel="stylesheet" media="all">
      
    <script data-ad-client="ca-pub-7768195495845816" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    

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
                <li class="nav-item active">
                    <a class="nav-link" href="edit.php"><i class="fas fa-edit"></i>Update Donor Details</a>
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
        
        
 

<?php
		
		//$sno = $_GET['sno'];		
		//$a = "SELECT * FROM blood WHERE mobile=$sno";
		$a = "SELECT * FROM blood WHERE mobile=$sno";
		$b = mysql_query($a) or die(mysql_error());
		
		while($row=mysql_fetch_array($b)) {
			extract($row);
?>

		<?php
			}
		?>
		
		
 <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">UPDATE DONOR DETAILS</h2>
                    
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" value="<?php echo $name; ?>" name="name" placeholder="NAME"  required>
                        </div>
						
						<div class="input-group">
                            <input class="input--style-1" type="number" value="<?php echo $mobile; ?>" min="6000000000" max="9999999999" placeholder="PHONE NO." name="mobile" required>
                        </div>
						
						<div class="input-group">
                            <input class="input--style-1" type="email" value="<?php echo $email; ?>" placeholder="Email" name="email" required>
                        </div>
						
						  <div class="input-group">
						
                            <input type="text" value="<?php echo $blood_group; ?>" name="bg" placeholder="Blood Group"/>   
                                        <div class="select-dropdown"></div>
                            
					     </div>
									
						
                               <div class="input-group">
						<div class="rs-select2 js-select-simple select--no-search"  required>
                                       
                            <input type="text" value="<?php echo $city; ?>" name="city" placeholder="City"/>
                                            
                                       
                                    </div>
					     </div>						
									
						<!--			
                         <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="CITY" name="city" required>
                        </div>-->
                           
					     <div class="input-group">
                            <input class="input--style-1"  type="text" value="<?php echo $address; ?>" placeholder="Address" name="address" required>
                        </div>
                            
						 <div class="input-group">
                            <input class="input--style-1" value="<?php echo $password; ?>" placeholder="PASSWORD" name="pswd" required>
                        </div>	
                            
             
                       
                        
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="register">Submit</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>


<?php include("hr/include.php")?>
 
    <script src="hr/header/head.js"></script>


 <!-- Jquery JS-->
    <script src="register_data/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="register_data/vendor/select2/select2.min.js"></script>
    <script src="register_data/vendor/datepicker/moment.min.js"></script>
    <script src="register_data/vendor/datepicker/daterangepicker.js"></script>
<!-- Main JS-->
    <script src="register_data/js/global.js"></script>
    <script src="hr/js/top_nav.js"></script>


	  </body>
	  </html>