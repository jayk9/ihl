<?php

	include('inc/dbconfig.php');
	include('logincheck.php');
	$qurr = "delete from player where pid = '".$_GET['id']."'";
	$ress = mysqli_query($conn, $qurr);
	$toto = mysqli_affected_rows($conn);
	header("location:profile.php?msg=PlayerDeleted");
	exit;

?>