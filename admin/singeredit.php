<?php

include "connect.php";

$id = $_GET['id'];
$img = $_GET['img'];
$name = $_GET['name'];
$email = $_GET['email'];

?>

<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Muzik - Responsive Bootstrap 4 Admin Dashboard Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
   </head>
   <body class="sidebar-main-active right-column-fixed">
      <!-- Wrapper Start -->

      <div class="wrapper">
        
<!--HEADER-->
   <?php  include"header.php" ?>


  <!-- Page Content  -->  
    <div id="content-page" class="content-page" style="background-color:#14182a;">
       <div class="container-fluid">
      <div class="row">
      <div class="col-sm-12">
      <div class="iq-card">
      <div class="iq-card-header d-flex justify-content-between">

      <div class="iq-header-title">
    <h4 class="card-title">Edit Singer</h4>
         </div>
                     </div>

                     <div class="iq-card-body">

    <form method="post" enctype="multipart/form-data">

       <div class="form-group">
          <label>Singer ID:</label>
          <input type="text" class="form-control" name="id" value="<?php echo $id ?>">
       </div>

       <div class="form-group">
          <label>Singer Name:</label>
          <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
       </div>


       <div class="iq-card-body">
<div class="add-img-user profile-img-edit">
   <label>singer image:</label>
     <img class="profile-pic img-fluid"  alt="profile-pic"> 
      <div class="p-image"> 
       <a href="javascript:void();" class="upload-button btn iq-bg-primary">File Upload</a>
     <input type="file" name="img" class="file-upload" accept="images/* " value="<?php echo $img ?>" > 
    </div>
</div>

<div class="img-extension mt-3">
  <div class="d-inline-block align-items-center">
       <span>Only</span>
        <a >.jpg</a>
         <a >.png</a>
       <a >.jpeg</a>
     <span>allowed</span>
  </div>
</div>

</div>


   <div class="form-group">
     <label>Singer Email:</label>
         <input type="email" class="form-control"  name="email" value="<?php echo $email ?>">
            </div>
            
         <button type="submit" class="btn btn-primary" name="upd">Update</button>
      <button type="reset" class="btn btn-danger">Reset</button>



                        </form>
                              
 <?php
if(isset($_POST['upd']))
{
   $id = $_POST['id'];
   $name = $_POST['name'];
   $email = $_POST['email'];

   $img = $_FILES['img']['name'];
   $destination = 'images/singer/' . $img;
   $extension = pathinfo($img, PATHINFO_EXTENSION);
   $tmploc = $_FILES['img']['tmp_name'];
   $size = $_FILES['img']['size'];




if (!in_array($extension, ['jpg', 'png', 'jpeg'])) {
   echo "You file extension must be .jpg, .png or .jpeg";
} elseif ($_FILES['img']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
   echo "File too large!";
} else {
   // move the uploaded (temporary) file to the specified destination
   if (move_uploaded_file($tmploc, $destination)) {
      include "connect.php";
      $ins = mysqli_query($con,"UPDATE `singer` SET `id`='$id', `name`='$name',`img`='$img',`email`='$email' WHERE `id`='$id'");
       if ($ins) {
           echo '<script>alert("Singer Data Updated Successfully")</script>';
           echo  '<script type="text/javascript"> window.location="http://localhost/sound/admin/singer.php";</script>';
          
       }
   } else {
       echo '<script>alert("Failed to upload file.")</script>';
   }
}

}
   
   
   ?>


                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
 <!-- Page Content  -->  


</body>
</html>