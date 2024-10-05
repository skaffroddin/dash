<?php 
include('connection.php');

$block_id = $_REQUEST['blk'];

$sql = "UPDATE multi_user_full SET auth = 1 WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$block_id]);

if ($stmt) {
    echo "<script>alert('User Blocked');</script>";
    echo "<script>window.location.href='displayadmin.php';</script>";
}
?>
