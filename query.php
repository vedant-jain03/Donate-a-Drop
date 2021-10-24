<?php
include('inc_config.php');

$c = "delete FROM blood";
$d = mysqli_query($conn, $c) or die(mysql_error());
?>