<?php 
include('connection.php');

$unblock_id = $_GET['ublk'];
$sql = "UPDATE multi_user_full SET auth='0' WHERE user_id='$unblock_id'";
$data = $conn->query($sql);

if ($data) {
    echo "<script>alert('User Unblocked')</script>";
    echo "<script>window.location.href='displayadmin.php'</script>";
}
$conn->close();
?>
