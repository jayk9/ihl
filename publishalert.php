<?php

	include('inc/dbconfig.php');

	if(isset($_POST['captain'])){
		foreach ($_POST['captain'] as $key => $value) {
			$psql="insert into alert(alrtcontent, alrtcapid) values('".$_POST['alrtcontent']."','".$value."')";
			$pres=mysqli_query($conn,$psql);
			$ptot=mysqli_affected_rows($conn);
		}
		header("location:contprofile.php?msg=CaptainsNotified");
		exit;
	}
	else{
		header("location:contprofile.php?msg=SelectCaptain");
		exit;	
	}

?>