<?php 
session_start();
include('connection.php');

$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM multi_user_full WHERE email='$email' AND password='$password'";
$data = $conn->query($sql);

if ($data->num_rows > 0) {
    $result = $data->fetch_assoc();
    $user = $result['user_type'];
    $auth = $result['auth'];
    
    if ($auth == 0) {
        $_SESSION['id'] = $result['user_id'];
        if ($user == 'ADMIN') {
            header("location:displayadmin.php");
        } else {
            header("location:displayclient.php");
        }
    } else {
        echo "<script>alert('You are blocked by admin')</script>";
        echo "<script>window.location.href='login.php'</script>";
    }
} else {
    echo "<script>alert('Login Failure')</script>";
}

$conn->close();
?>
