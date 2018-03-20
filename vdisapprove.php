<?php

	include('inc/dbconfig.php');

	$vsql = "update videos set v_status = '2' where v_id = '".$_GET['vid']."'";
	$vres = mysqli_query($conn, $vsql);
	$vtot = mysqli_affected_rows($conn);

	if($vtot>0){
		header("location:contprofile.php?msg=VideoDispproved");
		exit;
	}
	else{
		header("location:contprofile.php?msg=Error");
		exit;	
	}

?>