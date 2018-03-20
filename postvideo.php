<?php

	include('inc/dbconfig.php');

	$vc=$_POST['videocode'];
	$vt=$_POST['videotitle'];
	$vsql="insert into videos(v_title, v_content, v_status) values('".$vt."','".$vc."','0')";
	$vres=mysqli_query($conn,$vsql);
	$vtot=mysqli_affected_rows($conn);

	if($vtot>0){
		header("location:publishvids.php?msg=VideoSubmitted");
		exit;
	}
	else{
		header("location:publishvids.php?msg=VideoSubmitFailed");
		exit;	
	}

?>