<?php
$dsn = "mysql:host=localhost;dbname=your_database_name;charset=utf8";
$username = "your_username";
$password = "your_password";

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
