<?php 
include('connection.php');
$uid= $_REQUEST['uid'];
$name= $_REQUEST['name'];
$email= $_REQUEST['email'];
$phone= $_REQUEST['phone'];

$sql="UPDATE `multi_user_full` SET `name`='$name',`email`='$email',`phone`='$phone' WHERE `user_id`='$uid'";
$data= mysqli_query($conn,$sql);
if($data)
{
	echo "<script>alert('Update Success')</script>";
	echo "<script>window.location.href='display.php'</script>";
}
else
{
	echo "Not Updated";
}
?>