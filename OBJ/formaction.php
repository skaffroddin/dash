<?php 
include('connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$degree = $_POST['degree'];
$language = implode(",", $_POST['lang']);
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
$path = "images/" . $image;

move_uploaded_file($image_tmp, $path);

$sql = "INSERT INTO multi_user_full (name, email, password, phone, gender, degree, language, image, user_type, auth) 
        VALUES ('$name', '$email', '$password', '$phone', '$gender', '$degree', '$language', '$path', 'client', '0')";

$data = $conn->query($sql);

if ($data) {
    echo "<script>alert('Registration Success')</script>";
    echo "<script>window.location.href='login.php'</script>";
} else {
    echo "<script>alert('Not Registered')</script>";
}

$conn->close();
?>
