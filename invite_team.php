<?php

	include('inc/dbconfig.php');
	
	$sql = "select * from invitation where invi_team = '".$_GET['teamid']."'";
	$res = mysqli_query($conn, $sql);
	$tot = mysqli_affected_rows($conn);

	if($tot>0){
		$arr = mysqli_fetch_array($res);
		header("location:schedule.php?invite=Team Already Busy In ".$arr['invi_tour']);
		exit;
	}
	else{
		$nsql = "insert into invitation(invi_tour, invi_tour_id, invi_team, invi_status) values('".$_GET['tourtype']."','".$_GET['tourid']."','".$_GET['teamid']."','1')";
		$nres = mysqli_query($conn, $nsql);
		$ntot = mysqli_affected_rows($conn);

		if($ntot>0){
			header("location:schedule.php?invite=TeamInvited");
			exit;
		}
		else{
			header("location:schedule.php?msg=Error");
			exit;	
		}
	}
?>