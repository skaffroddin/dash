<?php 
include('connection.php');

$unblock_id = $_REQUEST['ublk'];

$sql = "UPDATE multi_user_full SET auth = 0 WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$unblock_id]);

if ($stmt) {
    echo "<script>alert('User Unblocked');</script>";
    echo "<script>window.location.href='displayadmin.php';</script>";
}
?>
