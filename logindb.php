<?php

	include('inc/dbconfig.php');

	$passkey = md5($_POST['upass']);

	$sql="select * from user where uname = '".$_POST['uname']."' and upass = '".$passkey."'";
	$res=mysqli_query($conn,$sql);
	$tot=mysqli_affected_rows($conn);
	$row=mysqli_fetch_array($res);

	if($tot>0){
		$_SESSION['id'] = $row['id'];
		$_SESSION['uname'] = $row['uname'];
		$_SESSION['priv'] = $row['privid'];
		header("location:profile.php?msg=welcome");
		exit;
	}

	else{
		header("location:login.php?msg=LoginFail");
		exit;
	}

?>