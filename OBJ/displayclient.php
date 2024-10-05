<?php 
session_start();
include('connection.php');

if (!isset($_SESSION['id'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Welcome User</h1>
    <a href="logout.php">Logout</a>
    <h2>Your Profile</h2>
    <?php
    $user_id = $_SESSION['id'];
    $sql = "SELECT * FROM multi_user_full WHERE user_id='$user_id'";
    $data = $conn->query($sql);
    $result = $data->fetch_assoc();
    ?>
    <p>Name: <?php echo $result['name']; ?></p>
    <p>Email: <?php echo $result['email']; ?></p>
    <p>Phone: <?php echo $result['phone']; ?></p>
    <p>Gender: <?php echo $result['gender']; ?></p>
    <p>Degree: <?php echo $result['degree']; ?></p>
    <p>Language: <?php echo $result['language']; ?></p>
    <img src="<?php echo $result['image']; ?>" alt="Profile Image"><br>
    <a href="changepass.php">Change Password</a>
</body>
</html>
