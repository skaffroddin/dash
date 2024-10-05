<?php 
include('connection.php');

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = md5($_REQUEST['password']);
$phone = $_REQUEST['phone'];
$gender = $_REQUEST['gender'];
$degree = $_REQUEST['degree'];
$language = implode(',', $_REQUEST['lang']);
$filename = $_FILES['image']['name'];
$tempname = $_FILES['image']['tmp_name'];
$folder = 'upload/' . $filename;

move_uploaded_file($tempname, $folder);

$check_email = "SELECT email FROM multi_user_full WHERE email = ?";
$stmt = $conn->prepare($check_email);
$stmt->execute([$email]);
$existEmail = $stmt->rowCount();

if ($existEmail) {
    echo "<script>alert('Email ID already exists');</script>";
    echo "<script>window.location.href='form.php';</script>";
} else {
    $sql = "INSERT INTO multi_user_full (name, email, password, phone, gender, degree, language, image, user_type, auth) VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'CLIENT', 0)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $email, $password, $phone, $gender, $degree, $language, $folder]);

    if ($stmt) {
        header("location:login.php");
    } else {
        echo "Not inserted";
    }
}
?>
