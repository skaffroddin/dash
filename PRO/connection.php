<?php
$server = 'localhost';
$user = 'root';
$password = '';
$dbname = 'crud';

$conn = mysqli_connect($server,$user,$password,$dbname);

if($conn)
{
    // echo "Connected";

}
else{

    echo"not connected";
}

?>