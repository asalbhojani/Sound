<?php
$new_id =$_GET['id'];
include('connect.php');
$query1="DELETE FROM music WHERE id={$new_id}";
$run1 =mysqli_query($con,$query1);
header("location:music.php")
?>