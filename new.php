<?php
include("inc_config.php");

if(isset($_GET['search'])) { 

			echo "<script>alert('We have received your abuse request. We will look into it shortly !!!');</script>";
			echo "<script>window.location.href='new.php';</script>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blood Donation</title>
         <link rel = "icon" href = "front_page/img/logo.jpg"
        type = "image/x-icon"> 
        
<link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
<link href="hr/css/top_nav.css" rel="stylesheet">

<!--table-->

 <link rel="stylesheet" type="text/css" href="other_css/user_detail_table/table-responsive.css"> 
<!--table end--> 

      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="hr/header/head.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script  src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
    </head>
   
    <script data-ad-client="ca-pub-9494752717912198" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
              
                <li class="nav-item active">
                    <a class="nav-link" href="login.php"><i class="fas fa-info-circle" active></i>Donor Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hospital_registration.php"><i class="fas fa-briefcase-medical"></i>Hospital Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"><i class="fas fa-phone-square-alt"></i>Contact</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </li>

            </ul>
        </div>
    </nav>
    
        <br>
    <!-- END nav -->

 
	  
        
        <div class="container">	
 
        <?php 
	if(isset($_POST['search'])) {
		
		$a = $_POST['bg'];
		$b = $_POST['city'];
?>
<center><h2 style="text-transform:uppercase;">List of <span style="color:red; font-weight:bold; font-size:51px;"><?php echo $a; ?></span> blood donors in <span style="color:red; font-weight:bold; font-size:51px;"><?php echo $b; ?></span></h2></center>

 <br><br>
 <!-- new -->
 
 <div id="wrapper">
          <table>
            <thead>
              <tr>
                  <th>S.No.</th>
                <th>Name</th>
                <th>Moblie</th>
                <th>Address</th>
                <th>City</th>
                <th>Email</th>
                <th>Report</th>
              </tr>
            </thead>
    

 <!-- new end -->



<?php 		
		$c = "SELECT * FROM blood WHERE blood_group ='$a' AND city ='$b' ORDER BY RAND()";
			$d = mysql_query($c) or die(mysql_error());
		//$count=1;
		while($row=mysql_fetch_array($d)) {
			extract($row);
?>

<tr>
	<td data-label="S.No."><?php echo $count; $count++; ?></td>
	<td style="text-transform:uppercase;"><?php echo $name; ?></td>
	<td><?php echo "<a href='tel:$mobile'>$mobile</a>"; ?></td>
	<td><?php echo $address; ?></td>
	<td><?php echo $city; ?></td>
	<td><?php echo "<a href='mailto:$email'>$email</a>"; ?></td>
	<!--<td><a href="edit.php?sno=<?php echo $sno; ?>">Edit</a></td>-->
	<td><a href="?report=<?php echo $sno; ?>" onClick='return validate()'>Report</a></td>
</tr>
<?php
		}
	}
?>


<script>
$('#convert-table').click( function() {
  var table = $('#example-table').tableToJSON(); // Convert the table into a javascript object
  console.log(table);
  alert(JSON.stringify(table));
});
</script>

 
 </table>
  
  
</div>



<?php
	if(!isset($_POST['search'])) {	
?>

	<?php } ?>
	
</table>


<!--table-->

	<!--table end -->
	
	<?php include("hr/include.php")?>
 
    <script src="hr/header/head.js"></script>
    <!-- Modal -->

        
           <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
    </body>
</html>