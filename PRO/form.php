
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>


    <style>
        input {
            margin: 10px;
        }
    </style>
</head>

<body>

    <h4>Register</h4>

    <form action="formaction.php" method="post" enctype="multipart/form-data">
        <input type="text" placeholder="Your Name" name="name"><br>
        <input type="email" placeholder="Email" name="email"><br>
        <input type="password" placeholder="Password" name="password"><br>
        <input type="number" placeholder="Phone" name="phone"><br>
        Gender<input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female <br>
        Degree <select name="degree" id="">
            <option value="none">Select</option>
            <option value="bca">BCA</option>
            <option value="mca">MCA</option>
            <option value="btech">BTECH</option>
            <option value="mtech">MTECH</option>

        </select>
        <br>
        Languages: <input type="checkbox" name="language[]" value="English"> English
        <input type="checkbox" name="language[]" value="Hindi"> Hindi
        <input type="checkbox" name="language[]" value="Frech"> French
        <br>

        <input type="file" name="image"><br>
        <button type="submit" name="submit" value="Submit">Submit</button>


    </form>

</body>

</html>