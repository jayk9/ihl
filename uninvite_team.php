<?php

	include('inc/dbconfig.php');
	
	$nsql = "delete from invitation where invi_tour_id = '".$_GET['tourid']."' and invi_team = '".$_GET['teamid']."'";
	$nres = mysqli_query($conn, $nsql);
	$ntot = mysqli_affected_rows($conn);

	if($ntot>0){
		header("location:schedule.php?invite=TeamUninvited");
		exit;
	}
	else{
		header("location:contprofile.php?msg=Error");
		exit;	
	}

?>