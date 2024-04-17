<?php
include "connect.php";
?>
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Sound/Add singer</title>
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
    <div id="content-page" class="content-page" style="background-color: #14182a;">
       <div class="container-fluid">
      <div class="row">
      <div class="col-sm-12">
      <div class="iq-card">
      <div class="iq-card-header d-flex justify-content-between"style="background-color: #b06ab3;border:#b06ab3;border-radius:10px;">
      <div class="iq-header-title">
    <h4 class="card-title" style="color:white;font-family: Georgia, serif;font-size: 27px; text-align: center;">Add Singer</h4>
         </div>
                     </div>

                     <div class="iq-card-body"style="background-color: #181c2e;">

    <form method="post" enctype="multipart/form-data">
       <div class="form-group">
          <label style="color:white;font-family: Georgia, serif;font-weight: bold;font-size: 20px;">Singer Name:</label>
          <input type="text" class="form-control" name="name">
       </div>


       <div class="iq-card-body">
<div class="add-img-user profile-img-edit">
   <label style="color:white;font-family: Georgia, serif;font-weight: bold;font-size: 20px;">singer image:</label>
     <img class="profile-pic img-fluid"  alt="profile-pic"> 
      <div class="p-image"> 
       <a href="javascript:void();" class="upload-button btn iq-bg-primary">File Upload</a>
     <input type="file" name="img" class="file-upload" accept="images/* " > 
    </div>
</div>



</div>


   <div class="form-group">
     <label style="color:white;font-family: Georgia, serif;font-weight: bold;font-size: 20px;">Singer Email:</label>
         <input type="email" class="form-control"  name="email">
            </div>
         <button type="submit" class="btn btn-primary" name="submit" style="font-family: Georgia, serif;font-size: 20px;">Submit</button>
    

                        </form>

 <?php
if(isset($_POST['submit']))
{
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
      $ins = mysqli_query($con,"INSERT INTO `singer`VALUES ('','$name','$img','$email')");
       if ($ins) {
           echo "File uploaded successfully";
       }
   } else {
       echo "Failed to upload file.";
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


   

   