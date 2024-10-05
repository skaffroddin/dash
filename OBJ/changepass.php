<?php 
session_start();
include('connection.php');

if (!isset($_SESSION['id'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="post" action="changepassaction.php">
        Current Password: <input type="password" name="current_password" required><br>
        New Password: <input type="password" name="new_password" required><br>
        <input type="submit" name="submit" value="Change Password">
    </form>
</body>
</html>
