<?php

// Responsible for carrying out signing up functionalities. Inserts the registration form details into the designated database.

// Used to establish connection between the PHP document and the MySQL database.
$con = mysqli_connect("localhost","root","","fitness customers");

date_default_timezone_set("Australia/Melbourne");	// Sets the default timezone as of Melbourne, Australia.
$time = date("h:i:sa");
$date = date("d/m/Y");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$discount = $_POST['discount'];
$time_date = $time." @ ".$date;

$ins = "insert into enquiries(time_date,firstname,lastname,email,phone_number,message,discount) values('$time_date','$fname','$lname','$email','$phone','$message','$discount')";

if(mysqli_query($con,$ins)) {
	echo "Your enquiry is successfully submitted!";
	header("refresh:1.5;url=HealthInfinity.php");
}
else {
	echo "Sorry! The submittion process failed. Please Try Again!";
	header("refresh:2.5;url=HealthInfinity.php");
}

?>