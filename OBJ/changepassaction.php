<?php 
session_start();
include('connection.php');

$user_id = $_SESSION['id'];
$current_password = md5($_POST['current_password']);
$new_password = md5($_POST['new_password']);

$sql = "SELECT * FROM multi_user_full WHERE user_id='$user_id' AND password='$current_password'";
$data = $conn->query($sql);

if ($data->num_rows > 0) {
    $sql = "UPDATE multi_user_full SET password='$new_password' WHERE user_id='$user_id'";
    if ($conn->query($sql)) {
        echo "<script>alert('Password Changed Successfully')</script>";
        echo "<script>window.location.href='displayclient.php'</script>";
    }
} else {
    echo "<script>alert('Current Password Incorrect')</script>";
}

$conn->close();
?>
