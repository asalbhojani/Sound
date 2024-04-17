
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
include "connect.php";

session_start();
$q=mysqli_query($con,"update register set status='InActive' where name='$_SESSION[name]'");


if(session_destroy()){
    ?>
    <meta http-equiv="refresh" content="0 url= http://localhost/sound/index.php">
    <?php
}
session_unset();
header('location:index.php');
?>

</body>
</html>



