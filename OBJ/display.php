<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Display Users</title>
</head>
<body>
    <h3>Display All Users</h3>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Degree</th>
            <th>Language</th>
            <th>Image</th>
        </tr>
        <?php
        include('connection.php');
        $sql = "SELECT * FROM multi_user_full";
        $data = mysqli_query($conn, $sql);
        while ($result = mysqli_fetch_assoc($data)) {
            ?>
            <tr>
                <td><?php echo $result['name']; ?></td>
                <td><?php echo $result['email']; ?></td>
                <td><?php echo $result['phone']; ?></td>
                <td><?php echo $result['gender']; ?></td>
                <td><?php echo $result['degree']; ?></td>
                <td><?php echo $result['language']; ?></td>
                <td><img src="<?php echo $result['image']; ?>" height="100px" width="100px"></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>
