<?
if(isset($_POST['submit'])) {

	$a=$_POST['name'];
	$b=$_POST['email'];
	$c=$_POST['mobile'];
	$d=$_POST['message'];

	mail ("chaitanyarai19@gmail.com", "Online Inquiry", "Name : $a \n Email : $b \n Mobile : $c \n Message : $d", "From: web@bloodonation.in");
	mail("$b","Support","Thank You For Contacting Us!!!. We Will Contact you Shortly.","From: web@bloodonation.in");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mail</title>
</head>
<body>
	<center>
	<form action="" method="POST">
<h1>Send Mail to User and Admin</h1>
<input type="text" name="name" placeholder="Enter Your Name"><br><br>
<input type="email" name="email" placeholder="Enter Your Email"><br><br>
<input type="number" name="mobile" placeholder="Enter Your Phone no."><br><br>
<textarea name="message" placeholder="Enter Your Message"></textarea><br><br>
<button type="Submit" name="submit">Submit</button>

</form>
</center>
</body>
</html>