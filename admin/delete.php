<!-- <?php

include "connect.php";



    $id = $_POST['id'];

    $del = mysqli_query($con,"DELETE FROM `register` WHERE id='$id'");
    

    if($del ){
        echo'<script>alert("Data Deleted Successfully")</script>';
        ?>
    
        <meta http-equiv="refresh" content="0 url= http://localhost/sound/admin/userlist.php">
        <?php
    }
    else{
        echo'<script>alert("Data not Deleted ")</script>';
    }

   


?> -->

<?php
$new_id =$_GET['id'];
include('connect.php');
$query1="DELETE FROM register WHERE id={$new_id}";
$run1 =mysqli_query($con,$query1);
header("location:userlist.php")
?>