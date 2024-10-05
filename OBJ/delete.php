<?php 
include('connection.php');

$user_id = $_GET['id'];
$sql = "DELETE FROM multi_user_full WHERE user_id='$user_id'";
$data = $conn->query($sql);

if ($data) {
    echo "<script>alert('User Deleted Successfully')</script>";
    echo "<script>window.location.href='displayadmin.php'</script>";
}
$conn->close();
?>
