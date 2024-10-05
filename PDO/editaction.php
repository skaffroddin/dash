<?php 
include('connection.php');

$user_id = $_POST['uid'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "UPDATE multi_user_full SET name = ?, email = ?, phone = ? WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$name, $email, $phone, $user_id]);

if ($stmt) {
    echo "<script>alert('Updated Successfully');</script>";
    echo "<script>window.location.href='displayadmin.php';</script>";
}
?>
