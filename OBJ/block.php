<?php 
include('connection.php');

$block_id = $_GET['blk'];
$sql = "UPDATE multi_user_full SET auth='1' WHERE user_id='$block_id'";
$data = $conn->query($sql);

if ($data) {
    echo "<script>alert('User Blocked')</script>";
    echo "<script>window.location.href='displayadmin.php'</script>";
}
$conn->close();
?>
