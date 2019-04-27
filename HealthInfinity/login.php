<?php

// Used to start a session allowing the use of session variables.
session_start();

if(isset($_SESSION['email'])){
	session_unset();
	session_destroy();
	echo "You have successfully logged out!";
	header("refresh:2;url=HealthInfinity.php");
	exit();
}

$con = mysqli_connect("localhost","root","","fitness customers");

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$sql = "select firstname,username,password,email,phone_number from registration where username='$uname' and password='$pass'";

$result = mysqli_query($con,$sql);
$record = mysqli_fetch_assoc($result);
$_SESSION['fname']=$record['firstname'];
$_SESSION['lname']=$record['username'];
$_SESSION['email']=$record['email'];
$_SESSION['phone']=$record['phone_number'];

if(mysqli_num_rows($result)>0){
	echo "You are successfully logged in!";
	header("refresh:1.5;url=HealthInfinity.php");
}
else{
	echo "You have entered incorrect credentials!";
	session_unset();
	session_destroy();
	header("refresh:2.5;url=HealthInfinity.php");
}

?>