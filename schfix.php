<?php

	include('inc/dbconfig.php');

	$tot=0;
	$count=$_POST['count'];
	for($i=1;$i<=$count;$i++){
		$op1=
		$sql="insert into matches(m_tour_type,m_opp1,m_opp2,m_venue,m_date,m_time,m_result) values('".$_POST['seltour']."','".$_POST['match_opp1_'.$i]."','".$_POST['match_opp2_'.$i]."','".$_POST['match_venue_'.$i]."','".$_POST['match_date_'.$i]."','".$_POST['match_time_'.$i]."','0')";
		$res=mysqli_query($conn,$sql);
		echo $tot=$tot+1;
	}
	if($tot==$count){
		header("location:schedule.php?msg=".$_POST['seltour']."ScheduledSuccessfully");
		exit;
	}
	else{
		header("location:schedule.php?msg=".$_POST['seltour']."ScheduleFail");
		exit;	
	}

?>