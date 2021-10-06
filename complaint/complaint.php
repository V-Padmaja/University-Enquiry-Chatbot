<?php 
ob_start(); 
require 'config.php';

$regno = $_POST['regno'];
$name = $_POST['name'];
$email = $_POST['email'];
$complaint = $_POST['$complaint'];

$query = mysqli_query($con, "INSERT INTO `complaints`(`regno`, `name`, `email`, `complaint`) VALUES ('$regno','$name','$email','$complaint')");
echo '<script>alert("Thank You..! Your Complaint is valuable to us"); location.replace(document.referrer);</script>';

?>