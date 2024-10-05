<?php 
include('connection.php');

$sql = "SELECT * FROM multi_user_full";
$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h5>User List</h5>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($results as $user) : ?>
        <tr>
            <td><?php echo $user['user_id']; ?></td>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['phone']; ?></td>
            <td>
                <a href="edit.php?ed_id=<?php echo $user['user_id']; ?>">Edit</a>
                <a href="block.php?blk=<?php echo $user['user_id']; ?>">Block</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
