<?php 
include('connection.php');

$delete_id = $_REQUEST['del'];

$sql = "DELETE FROM multi_user_full WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$delete_id]);

if ($stmt) {
    echo "<script>alert('User Deleted');</script>";
    echo "<script>window.location.href='displayadmin.php';</script>";
}
?>
