<?php 
include('connection.php');

$user_id = $_GET['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$degree = $_POST['degree'];
$language = implode(",", $_POST['lang']);
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];

if ($image) {
    $path = "images/" . $image;
    move_uploaded_file($image_tmp, $path);
    $sql = "UPDATE multi_user_full SET name='$name', email='$email', phone='$phone', gender='$gender', degree='$degree', language='$language', image='$path' WHERE user_id='$user_id'";
} else {
    $sql = "UPDATE multi_user_full SET name='$name', email='$email', phone='$phone', gender='$gender', degree='$degree', language='$language' WHERE user_id='$user_id'";
}

$data = $conn->query($sql);

if ($data) {
    echo "<script>alert('User Updated Successfully')</script>";
    echo "<script>window.location.href='displayadmin.php'</script>";
}

$conn->close();
?>
