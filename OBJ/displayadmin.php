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
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Welcome Admin</h1>
    <a href="logout.php">Logout</a>
    <h2>Users</h2>
    <table>
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php
        $sql = "SELECT * FROM multi_user_full";
        $data = $conn->query($sql);

        while ($row = $data->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['user_id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>
                        <a href='block.php?blk={$row['user_id']}'>Block</a>
                        <a href='unblock.php?ublk={$row['user_id']}'>Unblock</a>
                        <a href='edit.php?id={$row['user_id']}'>Edit</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
