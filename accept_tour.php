<?php

	include('inc/dbconfig.php');
	
	$sql = "update invitation set team_approval = '1' where invi_team = '".$_SESSION['id']."'";
	$res = mysqli_query($conn, $sql);
	$tot = mysqli_affected_rows($conn);
	if($tot>0){
		$dsql = "delete from invitation where invi_team = '".$_SESSION['id']."' and team_approval = '0'";
		$dres = mysqli_query($conn,$dsql);
		header("location:invitations.php?msg=InvitationAccepted");
		exit;
	}
	else{
		header("location:invitations.php?msg=Error");
		exit;	
	}

?>