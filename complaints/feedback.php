<?php 
ob_start(); 
require 'config.php';

$view = $_POST['view'];
$name = $_POST['name'];
$comments = $_POST['comments'];
$email = $_POST['email'];
$regno = $_POST['regno'];


$query = mysqli_query($con, "INSERT INTO `poll`(`id`, `name`, `email`, `regno`, `complaints`) VALUES ('','$name','$email','$regno','$comments')");
echo '<script>alert("Thank You..! Your Feedback is Valuable to Us"); location.replace(document.referrer);</script>';
?>