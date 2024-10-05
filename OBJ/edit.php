<?php 
include('connection.php');

$user_id = $_GET['id'];
$sql = "SELECT * FROM multi_user_full WHERE user_id='$user_id'";
$data = $conn->query($sql);
$result = $data->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="post" action="editaction.php?id=<?php echo $user_id; ?>" enctype="multipart/form-data">
        Name: <input type="text" name="name" value="<?php echo $result['name']; ?>" required><br>
        Email: <input type="email" name="email" value="<?php echo $result['email']; ?>" required><br>
        Phone: <input type="number" name="phone" value="<?php echo $result['phone']; ?>" required><br>
        Gender: <input type="radio" name="gender" value="Male" <?php if ($result['gender'] == 'Male') echo 'checked'; ?>>Male
                <input type="radio" name="gender" value="Female" <?php if ($result['gender'] == 'Female') echo 'checked'; ?>>Female<br>
        Degree: <select name="degree" required>
                <option value="">Select</option>
                <option value="B.Tech" <?php if ($result['degree'] == 'B.Tech') echo 'selected'; ?>>B.Tech</option>
                <option value="M.Tech" <?php if ($result['degree'] == 'M.Tech') echo 'selected'; ?>>M.Tech</option>
                </select><br>
        Language: <input type="checkbox" name="lang[]" value="Bengali" <?php if (in_array("Bengali", explode(",", $result['language']))) echo 'checked'; ?>>Bengali
                  <input type="checkbox" name="lang[]" value="English" <?php if (in_array("English", explode(",", $result['language']))) echo 'checked'; ?>>English
                  <input type="checkbox" name="lang[]" value="Hindi" <?php if (in_array("Hindi", explode(",", $result['language']))) echo 'checked'; ?>>Hindi<br>
        Image: <input type="file" name="image"><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
