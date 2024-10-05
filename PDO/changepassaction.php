<?php 
session_start();
include('connection.php');

$user_id = $_SESSION['id'];
$new_password = md5($_REQUEST['new_password']);

$sql = "UPDATE multi_user_full SET password = ? WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$new_password, $user_id]);

if ($stmt) {
    echo "<script>alert('Password Changed Successfully');</script>";
    echo "<script>window.location.href='login.php';</script>";
}
?>
