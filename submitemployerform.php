<?php

if(isset($_POST['submit']))
{
	$cmpname=$_POST['name'];
	$cmpemail=$_POST['email'];
	$cmpphoneno=$_POST['phonenno'];
	$cmpcity=$_POST['city'];
	$cmpaddress=$_POST['address'];
	$cmpeducationalstatus=$_POST['edustatus'];
	$cmpjobdetails=$_POST['details'];
	$cmpfield=$_POST['field'];

	$con=mysqli_connect("localhost","root","","project");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to My SQL:",mysqli_connect_error();
	}
	$sql="INSERT INTO companies ('CName','CEmail','CPhoneNum','CCity','CAddress','CEstatus','CField','JobDetails') VALUES('$cmpname','$cmpemail','$cmpphoneno','$cmpcity','$cmpaddress','$cmpeducationalstatus','$cmpjobdetails','$cmpfield');
	if(!mysqli_query($con,$sql))
	{
		print("Failed to enter the record to the table. Please check the values that you have entered.");
		print('<br>');
	}
	print("One record added successfully to the table");
}
else
{
	print("Click on the submit button.");
}

?>