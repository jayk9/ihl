<?php

	include('inc/dbconfig.php');
	include('logincheck.php');
	$qurr = "delete from news where news_id = '".$_GET['newsid']."'";
	$ress = mysqli_query($conn, $qurr);
	$toto = mysqli_affected_rows($conn);
	header("location:pubprofile.php?msg=RecordDeleted");
	exit;

?>