<?php

	include('inc/dbconfig.php');
	
	$tsql = "update tournament set tour_status = '1' where tour_id = '".$_GET['tid']."'";
	$tres = mysqli_query($conn,$tsql);
	$ttot = mysqli_affected_rows($conn);
	if($ttot>0){
		header("location:schedule.php?msg=TournamentActive");
		exit;
	}
	else{
		header("location:schedule.php?msg=Error");
		exit;	
	}

?>