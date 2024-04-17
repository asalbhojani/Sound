<?php include "header.php"?>
<?php include "connect.php"?>

<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Sound/Add Song</title>
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
                           <h4 class="card-title"style="color:white;font-family: Georgia, serif;font-size: 27px; text-align: center;">Add Song</h4>
                        </div>
                     </div>
                     <div class="iq-card-body" style="background-color: #181c2e;">
                        <form method="post"  enctype="multipart/form-data">

                        
                        <div class="form-group">
                              <label style="color:white;font-family: Georgia, serif;font-weight: bold;font-size: 20px;"> Name:</label>
                              <input type="text" name="name" class="form-control">
                           </div>

                          

                        <!-- <div class="form-group">
                              <label style="color:white;font-family: Georgia, serif;font-weight: bold;font-size: 20px;">img:</label>
                              <input type="file" name="img" id="img" accept="image/*">
                         </div> -->


                         <div class="form-group">
                         <div class="iq-card-body">
<div class="add-img-user profile-img-edit">
   <label style="color:white;font-family: Georgia, serif;font-weight: bold;font-size: 20px;">song image:</label>
     <img class="profile-pic img-fluid"  alt="song image"> 
      <div class="p-image"> 
       <a href="javascript:void();" class="upload-button btn iq-bg-primary">File Upload</a>
     <input type="file" name="img" id="img" class="file-upload" accept="images/jpg,png,jpeg " > 
    </div>
</div>
</div>

                         
<div class="form-group" >
                              <label  style="color:white;font-family: Georgia, serif;font-weight: bold;font-size: 20px;"> audio</label>
                              <div class="custom-file">
                                 <input type="file" name="audio" class="form-control" id="customFile"  accept="audio/mp3">
                              </div>
                           </div>

                         

                           <div class="form-group">
                              <label  style="color:white;font-family: Georgia, serif;font-weight: bold;font-size: 20px;">video:</label>
                              <div class="custom-file">
                                 <input type="file" name="video"  class="form-control" id="formFile   " accept="video/*">
                              </div>
                           </div>

                          
                          
                           <div class="form-group">
                              <label style="color:white;font-family: Georgia, serif;font-weight: bold;font-size: 20px;">singer:</label>
                              <input type="text" name="singer" class="form-control">
                           </div>

                           <div class="form-group">
                              <label style="color:white;font-family: Georgia, serif;font-weight: bold;font-size: 20px;">year:</label>
                              <input type="text" name="year" class="form-control">
                           </div>

                           <div class="form-group">
                              <label style="color:white;font-family: Georgia, serif;font-weight: bold;font-size: 20px;">album:</label>
                              <input type="text" name="album" class="form-control">
                           </div>

                           <div class="form-group">
                              <label style="color:white;font-family: Georgia, serif;font-weight: bold;font-size: 20px;">Type:</label>
                              <input type="text" name="type" class="form-control">
                           </div>


                           <div class="form-group">
                              <label style="color:white;font-family: Georgia, serif;font-weight: bold;font-size: 20px;">genre:</label>
                              <select class="form-control" name="genre" id="exampleFormControlSelect1">
                                 <option >Song Category</option>
                                 <option>pop Music</option>
                                 <option>Rock Music</option>
                                 <option>Sad Pop Music</option>
                                 <option>Hip-Hop Music</option>
                                 <option>jazz Music</option>
                                 <option>Country Music</option>
                                 <option>Classical Music</option>
                                 <option>Folk Music</option>
                                 <option>Soul Music</option>
                              </select>
                           </div>

                           
                           
                   <button type="submit" class="btn btn-primary" name="submit" style="font-family: Georgia, serif;font-size: 20px;">Submit</button>
                        </form>



                        <?php
if(isset($_POST['submit']))
{
   
   $name= $_POST['name'];
   $singer = $_POST['singer'];
   $genre = $_POST['genre'];
   $year = $_POST['year'];
   $album = $_POST['album'];
   $type = $_POST['type'];

   $img = $_FILES['img']['name'];
   $tmploc_img = $_FILES['img']['tmp_name'];
   $destination_img = 'images/song/' . $img;
   $extension_img = pathinfo($img, PATHINFO_EXTENSION);

   $audio = $_FILES['audio']['name'];
   $tmploc_audio = $_FILES['audio']['tmp_name'];
   $destination_audio = 'audio/'.$audio;
   $extension_audio = pathinfo($audio, PATHINFO_EXTENSION);

   $video = $_FILES['video']['name'];
   $tmploc_video = $_FILES['video']['tmp_name'];
   $destination_video = 'video/'.$video;
   $extension_video = pathinfo($video, PATHINFO_EXTENSION);
   
if (in_array($extension_img, ['jpg', 'png', 'jpeg']) AND in_array($extension_audio, ['mp3']) AND in_array($extension_video, ['mp4']))
 {
   if (move_uploaded_file($tmploc_img, $destination_img) AND move_uploaded_file($tmploc_audio, $destination_audio) AND move_uploaded_file($tmploc_video, $destination_video))
    {
      include "connect.php";
      $ins = mysqli_query($con,"INSERT INTO `music` VALUES('' ,'$name','$img','$audio','$video','$singer','$year','$album','$genre','$type')");
       if ($ins) {
         echo "File uploaded successfully";
       }
   } 
   else {
       echo "Failed to upload Song";
   }
} 
 
else {
   echo '<script>alert("Your img file extension must be .jpg, .png or .jpeg ,Your audio file extension must be .mp3 ,Your video file extension must be .mp4")</script>';

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
<!--  End Page Content  -->


 <!-- Page php start  -->
   


