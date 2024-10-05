<?php 
session_start();
include("connection.php");

$email = $_REQUEST['email'];
$password = md5($_REQUEST['password']);

$sql = "SELECT * FROM multi_user_full WHERE email = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$email, $password]);
$total = $stmt->rowCount();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($total) {
    if ($result['auth'] == 0) {
        $_SESSION['id'] = $result['user_id'];
        if ($result['user_type'] == 'ADMIN') {
            header("location:displayadmin.php");
        } else {
            header("location:displayclient.php");
        }
    } else {
        echo "<script>alert('You are blocked by admin');</script>";
        echo "<script>window.location.href='login.php';</script>";
    }
} else {
    echo "Login failure";
}
?>
