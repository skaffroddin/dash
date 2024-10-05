<?php 
$servername="localhost";
$username="root";
$password="";
$db="ajax";
$conn= mysqli_connect($servername,$username,$password,$db);
if($conn)
{
	//echo "connection success";
}
else
{
	echo "Not connected";
}
?>