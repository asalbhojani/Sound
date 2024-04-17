<?php 
include "header.php";
include "connect.php";

$id = $_GET['id'];
$name = $_GET['name'];
$img = $_GET['img'];
$audio = $_GET['audio'];
$video = $_GET['video'];
$singer = $_GET['singer'];
$year = $_GET['year'];
$album = $_GET['album'];
$genre = $_GET['genre'];


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
<div id="content-page" class="content-page" style="background-color: #14182a;">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Edit Song Information</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <form method="post"  enctype="multipart/form-data">

                        <div class="form-group">
                              <label> ID:</label>
                              <input type="text" name="name" class="form-control" value="<?php echo $id ?>">
                           </div>

                        <div class="form-group">
                              <label> Name:</label>
                              <input type="text" name="name" class="form-control" value="<?php echo $name ?>">
                           </div>

                        <div class="form-group">
                              <label>img:</label>
                              <input type="file" name="img" id="img" accept="image/*" value="<?php echo $img ?>">
                         </div>

                         
                         <div class="form-group">
                              <label> audio</label>
                              <div class="custom-file">
                                 <input type="file" name="audio" class="custom-file-input" id="customFile" value="<?php echo $audio ?>"  accept="audio/mp3"/>
                                 <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                           </div>

                         

                           <div class="form-group">
                              <label>video:</label>
                              <div class="custom-file">
                                 <input type="file" name="video"  class="custom-file-input" id="customFile" value="<?php echo $video ?>" accept="video/*"> 
                                 <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                           </div>

                          
                          
                           <div class="form-group">
                              <label>singer:</label>
                              <input type="text" name="singer" class="form-control" value="<?php echo $singer ?>">
                           </div>

                           <div class="form-group">
                              <label>year:</label>
                              <input type="text" name="year" class="form-control" value="<?php echo $year ?>">
                           </div>

                           <div class="form-group">
                              <label>album:</label>
                              <input type="text" name="album" class="form-control" value="<?php echo $album ?>">
                           </div>


                           <div class="form-group">
                              <label>genre:</label>
                              <select class="form-control" name="genre" id="exampleFormControlSelect1" >
                                 <option><?php echo $genre ?></option>
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

                           
                           
                   <button type="submit" class="btn btn-primary" name="submit">Update</button>
                        </form>



                        <?php
if(isset($_POST['submit']))
{
   
   $name= $_POST['name'];
   $singer = $_POST['singer'];
   $genre = $_POST['genre'];
   $year = $_POST['year'];
   $album = $_POST['album'];

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
      $ins = mysqli_query($con,"UPDATE `music` SET `id`='$id',`name`='$name',`img`='$img',`audio`='$audio',`video`='$video',`singer`='$singer',`year`='$year',`album`='$album',`genre`='$genre' WHERE `id`='$id'");
       if ($ins) {
           echo '<script>alert("Song updated successfully")</script>';
           echo  '<script type="text/javascript"> window.location="http://localhost/sound/admin/music.php";</script>';
       }
   } 
   else {
       echo '<script>alert("Failed to update Song.")</script>';
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
   


