<?php

$empname=$_POST['name'];
	$empemail=$_POST['email'];
	$empphoneno=$_POST['phonenno'];
	$empgender=$_POST['gender'];
	$empcity=$_POST['city'];
	$empaddress=$_POST['address'];
	$empeducationalstatus=$_POST['edustatus'];
	$empeducation=$_POST['education'];
	$empfield=$_POST['field'];

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>