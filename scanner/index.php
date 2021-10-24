
<?php

	if(isset($_POST['send'])) {
       	$sql = mysql_connect('localhost', 'bloodon1_mood704', 'donation@1234');
	mysql_select_db('bloodon1_mood704', $sql);
	
			$a = $_POST['name'];
			$b = $_POST['email'];
			$c = $_POST['phone'];
			$d = $_POST['address'];
			$e = $_POST['city'];
			$f = $_POST['pincode'];
		
			
        
$v2 = "INSERT INTO scanner (name, email, phone,address,city,pin)
			VALUES ('$a','$b','$c','$d','$e','$f')";
			$w2 = mysql_query($v2) or die(mysql_error());


$message = 'Hi '. $a .',' ."\n". 'Thanks for registering with our Organization. We will get back to you shortly.';

//$headers = 'From: chaitanyarai19@gmail.com' . "\r\n" .
   // 'Reply-To: chaitanyarai19@gmail.com' . "\r\n" .
   // 'X-Mailer: PHP/' . phpversion();

mail($b, "Thanks for applying", $message);

echo "<script>alert('Your are Successfully Registered !!!');</script>";

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="registration/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="registration/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="registration/css/util.css">
	<link rel="stylesheet" type="text/css" href="registration/css/main.css">
	
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    .bs-example{
        margin: 20px;
    }
</style>
	
	
	
</head>
<body style="background-color:#85929E;">

<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="#" class="navbar-brand">Brand Name</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="admin/index.php" class="nav-item nav-link">Admin</a>
                
            </div>
        </div>
    </nav>
</div>

	<div class="container-contact100">
				<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(registration/img.jpg);">
				<span class="contact100-form-title-1">
					User Registration
				</span>

			</div>

			<form method="POST" class="contact100-form validate-form">
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Full Name:</span>
					<input class="input100" type="text" name="name" placeholder="Enter full name">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email:</span>
					<input class="input100" type="text" name="email" placeholder="Enter email addess">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100">Phone:</span>
					<input class="input100" type="text" name="phone" placeholder="Enter phone number">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input" data-validate="Address is required">
					<span class="label-input100">Address:</span>
					<input class="input100" type="text" name="address" placeholder="Enter Full Address">
					<span class="focus-input100"></span>
				</div>
                 
				 <div class="wrap-input100 validate-input" data-validate="Your City is required">
					<span class="label-input100">City:</span>
					<input class="input100" type="text" name="city" placeholder="Enter Your City">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input" data-validate="Pin Code is required">
					<span class="label-input100">Pin Code:</span>
					<input class="input100" type="text" name="pincode" placeholder="Enter your Pin Code">
					<span class="focus-input100"></span>
				</div>
				
			
 
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" value="Register" name="send">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

	<script src="registration/jquery/jquery-3.2.1.min.js"></script>

	<script src="registration/main.js"></script>



</body>
</html>
