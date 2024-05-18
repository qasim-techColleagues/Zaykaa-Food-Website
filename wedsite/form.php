<?php 
	$cname = $_POST['cname'];  				
	$email = $_POST['mail'];
	$phone = $_POST['phone'];
	$address=$_POST['address'];
	$pname=$_POST['pname'];
	$quantity=$_POST['qun'];
$con = mysqli_connect("localhost","root","","food");
$query = "INSERT INTO data VALUES ('$cname','$email','$phone','$address','$pname','$quantity')";
$run = mysqli_query($con,$query);
?>
 

