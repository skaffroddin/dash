<?php 
session_start();
include('connection.php');

if (!isset($_SESSION['id'])) {
    header('location:login.php');
}

$user_id = $_SESSION['id'];
$sql = "SELECT * FROM multi_user_full WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h5>Welcome, <?php echo $user['name']; ?></h5>
    <a href="changepass.php">Change Password</a><br>
    <a href="logout.php">Logout</a>
</body>
</html>
