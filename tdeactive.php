<?php

	include('inc/dbconfig.php');
	
	$tsql = "update tournament set tour_status = '0' where tour_id = '".$_GET['tid']."'";
	$tres = mysqli_query($conn,$tsql);
	$ttot = mysqli_affected_rows($conn);
	if($ttot>0){
		$chksql = "select * from invitation where invi_tour_id = '".$_GET['tid']."'";
		$chkres = mysqli_query($conn, $chksql);
		$chktot = mysqli_affected_rows($conn);
		if($chktot>0){
			$invisql = "delete from invitation where invi_tour_id = '".$_GET['tid']."'";
			$invires = mysqli_query($conn,$invisql);
			$invitot = mysqli_affected_rows($conn);
			if($invitot>0){
				header("location:schedule.php?msg=TournamentDeactivated");
				exit;
			}
			else{
				header("location:schedule.php?msg=Error400");
				exit;	
			}
		}
		else{
			header("location:schedule.php?msg=TournamentDeactivated");
			exit;
		}
	}
	else{
		header("location:schedule.php?msg=Error");
		exit;	
	}

?>