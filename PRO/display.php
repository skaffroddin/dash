<?php  
// session_start();
include 'connection.php';
// $uid=$_SESSION['id'];
$sql = "select * from `multi-user-full`";
$data = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <table border="2px">
       <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Degree</th>
        <th>Language</th>
        <th>Image</th>
        <th>Action</th>
       </tr>

       <?php 
       while($result=mysqli_fetch_assoc($data))
       {

        ?>
        <tr>
        
        <td><?php echo $result['name'];?></td>
        <td><?php echo $result['email'];?></td>
        <td><?php echo $result['password'];?></td>
        <td><?php echo $result['phone'];?></td>
        <td><?php echo $result['gender'];?></td>
        <td><?php echo $result['degree'];?></td>
        <td><?php echo $result['language'];?></td>
        <td><?php echo $result['image'];?></td>
        <td>
            <a href="#">Edit</a>
            <a href="#">Delete</a>
        </td>
        </tr>
        <?php
       }

       ?>

    </table>   
    <center><a href="logout.php"> <button>Logout</button></a></center> 

</body>
</html>