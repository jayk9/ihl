<?php
	if(!isset($_SESSION['id']))
	{
		header("location:login.php?msg=LoginRequired");
		exit;	
	}
?>
