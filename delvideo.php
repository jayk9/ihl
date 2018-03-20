<?php

	include('inc/dbconfig.php');

	$vsql="delete from videos where v_id='".$_GET['id']."'";
	$vres=mysqli_query($conn,$vsql);
	$vtot=mysqli_affected_rows($conn);

	if($vtot>0){
		header("location:publishvids.php?msg=VideoDeleted");
		exit;
	}
	else{
		header("location:publishvids.php?msg=VideoNotDeleted");
		exit;	
	}

?>