<?php

// Responsible for carrying out signing up functionalities. Inserts the registration form details into the designated database.

// Used to establish connection between the PHP document and the MySQL database.
$con = mysqli_connect("localhost","root","","fitness customers");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$lookup1 = "select email from registration where email='$email'";
$lookup2 = "select username from registration where username='$lname'";

$result1 = mysqli_query($con,$lookup1);
$result2 = mysqli_query($con,$lookup2);

$ins = "insert into registration(firstname,username,password,email,phone_number) values('$fname','$lname','$pass','$email','$phone')";

if(mysqli_num_rows($result1)>0 || mysqli_num_rows($result2)>0) {
	echo "Sorry! This account is already registered after the name : $fname $lname. Please proceed to login!";
	header("refresh:3;url=HealthInfinity.php");
}
else
if($pass != $_POST['cpass']) {
	echo "Sorry! The passwords didn't matched! Please Try Again!";
	header("refresh:3;url=HealthInfinity.php");
}
else
if(mysqli_query($con,$ins)) {
	echo "You are successfully registered!";
	header("refresh:1.5;url=HealthInfinity.php");
}
else {
	echo "Sorry! The registration process failed. Please Try Again!";
	header("refresh:3;url=HealthInfinity.php");
}

?>