<?php

	include('inc/dbconfig.php');
	include('logincheck.php');

	$qwer = "update player set pname = '".$_POST['updnm2']."', paddress = '".$_POST['updaddr']."', pposition = '".$_POST['updpos2']."', pheight = '".$_POST['updheight2']."', pweight = '".$_POST['updweight2']."', pdob = '".$_POST['upddob2']."', pcontact = '".$_POST['updcontact2']."', pcity = '".$_POST['updcity2']."', pteamindex = '".$_POST['updtindex2']."' where pid = '".$_POST['hidden']."'";
	$sres = mysqli_query($conn, $qwer);
	
	if($sres){
		header("location:profile.php?msg=EditOperationSuccess");
		exit;
	}
	else{
		header("location:profile.php?msg=EditOperationFail");
		exit;
	}

?>