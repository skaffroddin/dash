<?php 
session_start();
include('connection.php');
$edit_id= $_REQUEST['ed_id'];
$sql= "SELECT * FROM multi_user_full WHERE user_id='$edit_id'";
$data= mysqli_query($conn,$sql);
$result= mysqli_fetch_assoc($data);
//print_r($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Form</title>
</head>
<body>
<form method="post" action="editaction.php">
	<input type="hidden" name="uid" value="<?php echo $result['user_id'];?>">
	Name: <input type="text" name="name" value="<?php echo $result['name'];?>"><br>
	Email: <input type="email" name="email" value="<?php echo $result['email'];?>"><br>
	Phone: <input type="number" name="phone" value="<?php echo $result['phone'];?>"><br>
	<button type="submit">Update</button>
</form>
</body>
</html>
