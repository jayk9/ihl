<?php
	include('inc/dbconfig.php');
		error_reporting(0);
		//print_r($_POST);
		//exit;
	$qur = "insert into player(pname, capid, paddress, pdob, pcontact, pposition, pheight, pweight, pteamindex, pcity) values('".$_POST['pname']."','".$_SESSION['id']."','".$_POST['paddress']."','".$_POST['pdob']."','".$_POST['pcontact']."','".$_POST['pposition']."','".$_POST['pheight']."','".$_POST['pweight']."','".$_POST['ptindex']."','".$_POST['pcity']."')";
	$qres = mysqli_query($conn, $qur);
	$tot = mysqli_affected_rows($conn);
	
	if($qres){
		$lastid=mysqli_insert_id($conn);
		$savefolder="images/playerpic/";
		$newname=$lastid."_".$_FILES['pdp']['name'];
		$targetpath=$savefolder.$newname;
		if(isset($_FILES['pdp']) && $_FILES['pdp']['name']!=""){
			if(move_uploaded_file($_FILES['pdp']['tmp_name'], $targetpath)){
				$iqur="update player set pphoto='".$newname."' where pid='".$lastid."'";
				$ires=mysqli_query($conn,$iqur);
			}
		}
	}
	$tot = mysqli_affected_rows($conn);
	
	if($tot>0){
		header("location:profile.php?msg=PlayerRegistered");
		exit;
	}
	else{
		header("location:addplayerform.php?msg=RegisterFail");
		exit;
	}
	
?>