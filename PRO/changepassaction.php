<?php 
session_start();
include('connection.php');
$uid= $_SESSION['id'];
$oldp= md5($_REQUEST['oldp']);
$newp= md5($_REQUEST['newp']);
$confp= md5($_REQUEST['confp']);
$pass_sql= "SELECT password FROM multi_user_full WHERE password='$oldp'";
$pass_data= mysqli_query($conn,$pass_sql);
$result= mysqli_fetch_assoc($pass_data);
$dbpassword= $result['password'];
if($dbpassword==$oldp)
{
	if($oldp != $newp)
	{
		if($newp == $confp)
		{
			$pass_update="UPDATE `multi_user_full` SET `password`='$confp' WHERE user_id='$uid'";
			$data= mysqli_query($conn,$pass_update);
			echo "<script>alert('Password Updated')</script>";
			echo "<script>window.location.href='displayclient.php'</script>";
		}
		else
		{
			echo "<script>alert('New Password and Confirm Password are dose not match')</script>";
			echo "<script>window.location.href='cngpass.php'</script>";
		}
	}
	else
	{
		echo "<script>alert('New Password and Old Password are same')</script>";
		echo "<script>window.location.href='cngpass.php'</script>";
	}

}
else
{
	echo "<script>alert('Database Password and Old Password are dose not match')</script>";
	echo "<script>window.location.href='cngpass.php'</script>";
}
?>
