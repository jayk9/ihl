<?php
//first you have to set where you want to store files
//in this image upload script we keep file in folder upload
//$_FILES['ufile']['name']; = upload file name
//for example upload file name click4knowledge.gif . $path will be upload/click4knowledge.gif
 
print_r($_FILES);
	exit;
 
$path= "upload/".$_FILES['ufile']['name'];
if($_FILES['ufile']['name'] != "")
{
if(copy($_FILES['ufile']['tmp_name'], $path))
{
echo "Successful<BR/>";
// print uploaded data after successful upload
echo "File Name :".$_FILES['ufile']['name']."<BR/>";
echo "File Size :".$_FILES['ufile']['size']."<BR/>";
echo "File Type :".$_FILES['ufile']['type']."<BR/>";
echo "<img src=\"$path\" width=\"150\" height=\"150\">";
}
else
{
echo "Error";
}
}
?>