<?php

	include('inc/dbconfig.php');

	$nsql = "update news set news_approval = '2' where news_id = '".$_GET['nid']."'";
	$nres = mysqli_query($conn, $nsql);
	$ntot = mysqli_affected_rows($conn);

	if($ntot>0){
		header("location:contprofile.php?msg=NewsDispproved");
		exit;
	}
	else{
		header("location:contprofile.php?msg=Error");
		exit;	
	}

?>