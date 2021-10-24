<?php

if(isset($_GET['login'])) {
 
include('inc_config.php');

ob_start();
 
 $a = $_GET['mobile'];
 $b = $_GET['pswd'];
 
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
<html> 
<style> 
	
	/*assign full width inputs*/ 
	 
	.input{ 
		width: 100%; 
		padding: 12px 20px; 
		margin: 8px 0; 
		display: inline-block; 
		border: 1px solid #ccc; 
		box-sizing: border-box; 
	} 
	
	/*set a style for the buttons*/ 
	.button { 
		background-color: #4CAF50; 
		color: white; 
		padding: 14px 20px; 
		margin: 8px 0; 
		border: none; 
		cursor: pointer; 
		width: 100%; 
	} 
	
	/* set a hover effect for the button*/ 
	button:hover { 
		opacity: 0.8; 
	} 
	
	/*set extra style for the cancel button*/ 
	.cancelbtn { 
		width: auto; 
		padding: 10px 18px; 
		background-color: #f44336; 
	} 
	
	/*centre the display image inside the container*/ 
	.imgcontainer { 
		text-align: center; 
		margin: 24px 0 12px 0; 
		position: relative; 
	} 
	
	/*set image properties*/ 
	img.avatar { 
		width: 40%; 
		border-radius: 50%; 
	} 
	
	/*set padding to the container*/ 
	.container { 
		padding: 16px; 
	} 
	
	/*set the forgot password text*/ 
	span.psw { 
		float: right; 
		padding-top: 16px; 
	} 
	
	/*set the Modal background*/ 
	.modal { 
		display: none; 
		position: fixed; 
		z-index: 1; 
		left: 0; 
		top: 0; 
		width: 100%; 
		height: 100%; 
		overflow: auto; 
		background-color: rgb(0, 0, 0); 
		background-color: rgba(0, 0, 0, 0.4); 
		padding-top: 60px; 
	} 
	
	/*style the model content box*/ 
	.modal-content { 
		background-color: #fefefe; 
		margin: 5% auto 15% auto; 
		border: 1px solid #888; 
		
	} 
	
	/*style the close button*/ 
	.close { 
		position: absolute; 
		right: 25px; 
		top: 0; 
		color: #000; 
		font-size: 35px; 
		font-weight: bold; 
	} 
	
	.close:hover, 
	.close:focus { 
		color: red; 
		cursor: pointer; 
	} 
	
	/* add zoom animation*/ 
	.animate { 
		-webkit-animation: animatezoom 0.6s; 
		animation: animatezoom 0.6s 
	} 
	
	@-webkit-keyframes animatezoom { 
		from { 
			-webkit-transform: scale(0) 
		} 
		to { 
			-webkit-transform: scale(1) 
		} 
	} 
	
	@keyframes animatezoom { 
		from { 
			transform: scale(0) 
		} 
		to { 
			transform: scale(1) 
		} 
	} 
	
	@media screen and (max-width: 300px) { 
		span.psw { 
			display: block; 
			float: none; 
		} 
		.cancelbtn { 
			width: 100%; 
		} 
	} 
	
	@media screen and (max-width: 2000px) { 
	.modal-content { 
		width: 30%; 
	} 
	}
	
	@media screen and (max-width: 1200px) { 
	.modal-content { 
		width: 30%; 
	} 
	}
	
	@media screen and (max-width: 630px) { 
	.modal-content { 
		width: 80%; 
	} 
	}
	
	
</style> 

<body> 
<div class="topnav" id="myTopnav">
  <a  href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="hospital.html">Hospital</a>
  <a href="contact.php">Contact</a></li>
 
  <a class="active" href="register.php">Register as Donor</a>
   <a onclick="document.getElementById('id01').style.display='block'">Login</a>
 
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
	

	<div id="id01" class="modal"> 

		<form class="modal-content animate" method="GET"> 
			<div class="imgcontainer"> 
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span> 
				<img src= "img/logo.jpg" alt="Avatar" class="avatar"> 
			</div> 
             <center><b><h2>Login</h2></b></center>
             
			<div class="container"> 
				
				<input class="input" type="text" placeholder="Enter Phone No." name="mobile" required> 

				<input class="input" type="password" placeholder="Enter Password" name="pswd" required> 

				<button class="button" type="submit" name="login">LOGIN</button> 
			
			</div> 

			<div class="container" style="background-color:#f1f1f1"> 
				<button  type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><b>Cancel</b></button> 
				<span class="psw">Forgot <a href="#">password?</a></span> 
			</div> 
		</form> 
	</div> 

	<script> 
		var modal = document.getElementById('id01'); 
		window.onclick = function(event) { 
			if (event.target == modal) { 
				modal.style.display = "none"; 
			} 
		} 
	</script> 
</body> 

</html>