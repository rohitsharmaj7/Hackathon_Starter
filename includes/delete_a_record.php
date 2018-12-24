<?php
    $id=$_GET['id'];
    $query="DELETE FROM `user_details` WHERE `id`='$id'";
    $update_query=mysqli_query($connection,$query);
    if(!$update_query)
    {
      die("query failed".mysqli_error($connection)); 
    }
    header('location:index.php');
?>