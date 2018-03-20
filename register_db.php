<?php

	include('inc/dbconfig.php');

	$passkey = md5($_POST['tupass']);

	$sql = "insert into user(privid, teamname, city, address, managername, managercont, managermail, uname, upass) values('2','".$_POST['tname']."','".$_POST['tcity']."','".$_POST['taddress']."','".$_POST['tmanagername']."','".$_POST['tmanagercontact']."','".$_POST['tmanagermail']."','".$_POST['tuname']."','".$passkey."')";

	$res = mysqli_query($conn, $sql);
	$tot = mysqli_affected_rows($conn);

	if($tot>0){
		header("location:login.php?msg=LoginToContinue");
		exit;
	}
	else{
		header("location:registration_team.php?msg=RegisterFail");
		exit;	
	}

?>