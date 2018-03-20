<?php
	
	session_start();
	
	$host="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="ihl";

	$conn=mysqli_connect($host,$dbuser,$dbpass) or die("error".mysqli_error());
	$db=mysqli_select_db($conn,$dbname) or die("db not found".mysqli_error());

?>