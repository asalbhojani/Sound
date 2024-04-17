<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Seo Meta -->
    <meta name="description" content="Tamilaudiopro - Music streaming platform">
    <meta name="keywords" content="music, streaming, platform, tamilaudiopro">

    <!-- Website Title -->
    <title>Sound | Trending</title>
 
    <!-- Favicon --> 
    <link href="img/logo1.jpg" rel="icon" sizes="32x32">
    <link href="img/logo1.jpg" rel="icon" sizes="192x192">

    <!-- IOS Touch Icons -->
    <link rel="apple-touch-icon" href="https://admin.nemosofts.com/v1/tamilaudiopro/images/81253_26032022040648.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://admin.nemosofts.com/v1/tamilaudiopro/images/81253_26032022040648.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://admin.nemosofts.com/v1/tamilaudiopro/images/81253_26032022040648.png">
    <link rel="apple-touch-icon" sizes="167x167" href="https://admin.nemosofts.com/v1/tamilaudiopro/images/81253_26032022040648.png">

    <!-- Styles -->
    <link rel="stylesheet" href="css/vendors.bundle.css" type="text/css">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
     <!-- SET GLOBAL BASE URL -->
    <script>var base_url = 'https://codeigniter.nemosofts.com/v1/tamilaudiopro';</script>

    <link rel="stylesheet" href="css/main.css">

<style>
    textarea {
      min-height: 150px !important;
    }
</style>

</head>
<body data-new-gr-c-s-check-loaded="14.1085.0" data-gr-ext-installed="">
    <div id="pb_wrapper">


    <!-- Header And Navbar -->
    <?php include"header.php" ?>

    <br><br>
        
    
        <!-- Begin:: Theme main content -->
<main id="pb_main">
<div class="mein" style="margin-right: 100px;" >
        <div class="pb-chart-list">

     

        <?php 
$name= $_GET['name']; 
        
$sel = mysqli_query ($con,"SELECT * FROM music WHERE singer like '%$name%' ");
$row = mysqli_num_rows($sel);

if($row > 0)
{

    ?>
    
<h3 style="color:#b06ab3;"><?php echo "$name"?></h3>

    <?php
   while($row=mysqli_fetch_assoc($sel))
   {

?>

      
<div class="pb-card pb-chart-list__item" data-audio-id="25" data-audio-name="<?php echo$row['name']?>" data-audio-artist="<?php echo$row['singer']?>" data-audio-album="<?php echo$row['year']?>" data-audio-url="https://download.nemosofts.com/audio/Magizhini/Magizhini.mp3" data-audio-cover="<?php echo"admin/images/song/".$row['img']?>" style="box-shadow: 0 1px 3px 0 rgb(0 0 0 / 10%), 0 1px 2px 0 rgb(0 0 0 / 6%); border-radius: 10px;">
                        <span class="pb-chart-list__item__number"></span>
                        <div class="pb-chart-list__cover" style="height: 190px;">
                        <video id="video" width="200px" height="200px" style="margin-top: -5px;" controls poster="<?php echo"admin/images/song/".$row['img']?>" >
                                    <source src="<?php echo "admin/video/".$row['video']?>" type="video/mp4" >
                                </video> 
                        </div>
                        <div class="pb-chart-list__info">
                            <div class="pb-chart-list__info__content" style="padding-left:100px;font-size:20px;padding-bottom:40px">
                                <span class="pb-chart-list__info__title" style="color: white;"><?php echo$row['name']?></span>
                                <span class="pb-chart-list__info__sub-title">•<?php echo$row['singer']?> <br>• <?php echo$row['year']?><br>• <?php echo$row['album']?></span>
                            </div>
                            <div class="pb-chart-list__option">
                                <button class="pb-btn-add d-inline-flex align-items-center" data-play-id="25"></button>
                            </div>
                        </div>

                    </div>

          <?php
                }
                ?>
                
                
                
                <?php
             }
             
           


         ?>
 

 <?php 
        
        $sel = mysqli_query ($con,"select * from music where year=2022 and type='english'  ");
        $row = mysqli_num_rows($sel);
        
        if($row > 0)
        {
            ?>
            
        <h3 style="color:#b06ab3;">English Songs</h3>
        
            <?php
           while($row=mysqli_fetch_assoc($sel))
           {
        
        ?>
        
              
        <div class="pb-card pb-chart-list__item" data-audio-id="25" data-audio-name="<?php echo$row['name']?>" data-audio-artist="<?php echo$row['singer']?>" data-audio-album="<?php echo$row['year']?>" data-audio-url="https://download.nemosofts.com/audio/Magizhini/Magizhini.mp3" data-audio-cover="<?php echo"admin/images/song/".$row['img']?>" style="box-shadow: 0 1px 3px 0 rgb(0 0 0 / 10%), 0 1px 2px 0 rgb(0 0 0 / 6%); border-radius: 10px;">
                                <span class="pb-chart-list__item__number"></span>
                                <div class="pb-chart-list__cover" style="height: 190px;">
                                <video id="video" width="200px" height="200px" style="margin-top: -5px;" controls poster="<?php echo"admin/images/song/".$row['img']?>" >
                                            <source src="<?php echo "admin/video/".$row['video']?>" type="video/mp4" >
                                        </video> 
                                </div>
                                <div class="pb-chart-list__info">
                                    <div class="pb-chart-list__info__content" style="padding-left:100px;font-size:20px;padding-bottom:40px">
                                        <span class="pb-chart-list__info__title" style="color: white;"><?php echo$row['name']?></span>
                                        <span class="pb-chart-list__info__sub-title"><?php echo$row['singer']?> <br> <?php echo$row['year']?><br> <?php echo$row['album']?></span>
                                    </div>
                                    <div class="pb-chart-list__option">
                                        <button class="pb-btn-add d-inline-flex align-items-center" data-play-id="25"></button>
                                    </div>
                                </div>
        
                            </div>
        
         <?php
             }
        }
          ?>


                                    </div>                

           
                <!--Footer-->
          <?php include"footer.php" ?>
        
          </div> </main>


	
	
    <!-- Scripts -->
    <script src="https://codeigniter.nemosofts.com/v1/tamilaudiopro/js/vendors.bundle.js"></script>
    <script src="https://codeigniter.nemosofts.com/v1/tamilaudiopro/js/notify.js"></script>
    <script src="https://codeigniter.nemosofts.com/v1/tamilaudiopro/js/scripts.bundle.js"></script>
    
        
    
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>
</html>