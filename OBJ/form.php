<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="post" action="formaction.php" enctype="multipart/form-data">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        Phone: <input type="number" name="phone" required><br>
        Gender: <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female<br>
        Degree: <select name="degree" required>
                <option value="">Select</option>
                <option value="B.Tech">B.Tech</option>
                <option value="M.Tech">M.Tech</option>
                </select><br>
        Language: <input type="checkbox" name="lang[]" value="Bengali">Bengali
                  <input type="checkbox" name="lang[]" value="English">English
                  <input type="checkbox" name="lang[]" value="Hindi">Hindi<br>
        Image: <input type="file" name="image" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
