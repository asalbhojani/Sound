<?php 
include "connect.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Sound/Music</title>
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
   <div id="content-page" class="content-page" style="background-color:#14182a;" >
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="iq-card"  style="background-color: #181c2e; color:white;">
                     
                  <div class="iq-card-header d-flex justify-content-between"  style="background-color: #b06ab3;border:#b06ab3;border-radius:10px;">
                        <div class="iq-header-title">
                           <h4 class="card-title" style="color:white;font-family: Georgia, serif;font-size: 30px; text-align: center;" >Song Lists</h4>
                        </div>
                  </div>

<div class="iq-card-header d-flex justify-content-between" style="border:#14182a;">
<div class="iq-card-header-toolbar d-flex align-items-center">
<a href="addsong.php" class="btn btn-primary"style="font-family: Georgia, serif;font-size: 20px;">Add New Song</a>
</div>
</div>

                   
                     
                     <div class="iq-card-body" >
                        <div class="table-responsive">
                           <table class="data-tables table table-striped table-bordered" style="width:100%">
                              <thead>
                                 <tr>
                                    <th style="width: 5%;color:white;width: 5%;color:white;font-size: 20px;font-family: 'Trebuchet MS', sans-serif;">id</th>
                                    <th style="width: 5%;color:white;width: 5%;color:white;font-size: 20px;font-family: 'Trebuchet MS', sans-serif;">Name</th>
                                    <th style="width: 15%;color:white;width: 5%;color:white;font-size: 20px;font-family: 'Trebuchet MS', sans-serif;">Img</th>
                                    <th style="width: 15%;color:white;width: 5%;color:white;font-size: 20px;font-family: 'Trebuchet MS', sans-serif;">Audio</th>
                                    <th style="width: 10%;color:white;width: 5%;color:white;font-size: 20px;font-family: 'Trebuchet MS', sans-serif;">Video</th>
                                    <th style="width: 10%;color:white;width: 5%;color:white;font-size: 20px;font-family: 'Trebuchet MS', sans-serif;">Singer</th>
                                    <th style="width: 10%;color:white;width: 5%;color:white;font-size: 20px;font-family: 'Trebuchet MS', sans-serif;">Year</th>
                                    <th style="width: 10%;color:white;width: 5%;color:white;font-size: 20px;font-family: 'Trebuchet MS', sans-serif;">Albumn</th>
                                    <th style="width: 5%;color:white;width: 5%;color:white;font-size: 20px;font-family: 'Trebuchet MS', sans-serif;">Genre</th>
                                    <th style="width: 10%;color:white;width: 5%;color:white;font-size: 20px;font-family: 'Trebuchet MS', sans-serif;">Type</th>
                                    <th style="width: 5%;color:white;width: 5%;color:white;font-size: 20px;font-family: 'Trebuchet MS', sans-serif;">Action</th>
                                 </tr>
                              </thead>
                              

                              <?php

$sel = mysqli_query ($con,"select * from music");
$row = mysqli_num_rows($sel);

if($row > 0)

{
   while($row=mysqli_fetch_assoc($sel))
   {

      ?>

      <tbody>
      
      <tr>
      <td style="color:#bb06ab3;"><?php echo $row['id']?></td>
      <td style="color:#bb06ab3;"><?php echo $row['name']?></td>
      <td style="color:#bb06ab3;"><img style="width:100px;" src="<?php echo"images/song/".$row['img']?>" > </td>
      <td style="color:#bb06ab3;"><?php echo $row['audio']?></td>
      <td style="color:#bb06ab3;"><?php echo $row['video']?></td>
      <td style="color:#bb06ab3;"><?php echo $row['singer']?></td>
      <td style="color:#bb06ab3;"><?php echo $row['year']?></td>
      <td style="color:#bb06ab3;"><?php echo $row['album']?></td>
      <td style="color:#bb06ab3;"><?php echo $row['genre']?></td>
      <td style="color:#bb06ab3;"><?php echo $row['type']?></td>
      <td>            
      <div class="d-flex align-items-center list-user-action">
 <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"  href="musicedit.php?id=<?php echo $row['id']?>"><i class="ri-pencil-line"></i></a>

  <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="songdel.php?id=<?php echo $row['id']?>"><i class="ri-delete-bin-line"></i></a>
                                       </div>
      </td>
      </tr>
      
      
      
      
      </td>
      </tr>
      
      <?php
         }
      }
if(isset($_POST['btnsub'])){
   echo '<script type"text/javascripit"> window.location=" http://localhost/music/music.php";</script>';
}
?>


                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Wrapper END -->
</body>
</html>
