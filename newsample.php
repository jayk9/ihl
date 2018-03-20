<?php
include('dbconfig.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sample</title>
</head>
<body>
	<form method="post" action="#">
		<input type="number" name="number"><input type="submit" name="ok">
	</form>
</body>
</html>
<?php

	//$n=$_POST['number'];
	//for($i=1;$i<=$n;$i++)
	//{
	$qry=mysqli_query($conn,"select uname from user where privid=2");	
	$tot=mysqli_affected_rows($conn);
	
	$row=array();
	$i=0;
	while($arr=mysqli_fetch_array($qry)){
		$row[$i]=$arr['uname'];
		$i++;
	}	

	for($i=0;$i<$tot;$i++)
	{
		for($j=$i+1;$j<$tot;$j++){
			echo $row[$i]." vs ".$row[$j]."</br>";
			//echo $i." vs ".$j;
		}
	}
	//}
?>