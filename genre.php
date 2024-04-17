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
    <title>Sound | Home</title>
 
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
    <link rel="stylesheet" href="css/audio.css" type="text/css">
    <link rel="stylesheet" href="css/styles.css" type="text/css">

     <!-- SET GLOBAL BASE URL -->
    <script>var base_url = 'https://codeigniter.nemosofts.com/v1/tamilaudiopro';</script>

    <!--bootstrap-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.7/mediaelementplayer.min.css'>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/player.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.7/mediaelement-and-player.min.js'></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
    textarea {
      min-height: 150px !important;
    }
    .carousel-inner > .item > img {
  width:100%;
  height:600px;
}
</style>

</head>


<body data-new-gr-c-s-check-loaded="14.1084.0" data-gr-ext-installed=""> 

    <div id="pb_wrapper">

    <!-- Header And Navbar -->
    <?php include"header.php" ?>
<br><br>



        <!-- Begin:: Theme main content -->
<main id="pb_main">

    <br><br>

    <div class="mein" style="margin-right: 100px;" >

       
                       
                        <?php
$sel = mysqli_query ($con,"select * from music where genre='pop music'");
$row = mysqli_num_rows($sel);

if($row > 0)
{

    ?>

 <!-- Begin:: Most view -->
 <h4 class="mb-4">POP MUSIC</h4>
        <div class="swiper-section swiper-section--content mb-4">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events" data-slides="5"  >
            <div class="swiper-wrapper" id="swiper-wrapper-e5f5e7ed567ef215" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);" >                                         

    <?php
   while($row=mysqli_fetch_assoc($sel))
   {

?> 

<div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 14" style="width: 179.2px; margin-right: 24px;background-color:#14182a;">
 <!-- Begin:: Theme card -->
 <div class="pb-card rounded-3"  data-audio-id="25" data-audio-name="<?php echo$row['name']?>" data-audio-artist="<?php echo$row['singer']?>" data-audio-album="<?php echo$row['year']?>" data-audio-url="<?php echo "admin/audio/".$row['audio']?>" data-audio-cover="<?php echo"admin/images/song/".$row['img']?>">
                            
                          <div class="pb-card__image" style="width: 100%;height:100%;">
                              <video id="video" width="230px" height="200px" controls poster="<?php echo"admin/images/song/".$row['img']?>" >
                                    <source src="<?php echo "admin/video/".$row['video']?>" type="video/mp4" >
                                </video> 
                          </div>

    
                            <div class="pb-card__content">
                                <div class="pb-card__content__text">
                                    <a href="#" class="pb-card__title"><?php echo$row['name']?></a>
                                    <a href="#" class="pb-card__sub-title"><?php echo$row['singer']?></a>
                                </div>
                                
 <audio controls style="width:100% ">
 <source src="<?php echo "admin/audio/".$row['audio']?>" type="audio/mp3">
 </audio>
                            </div>
                            </div>
                        <!-- End:: Theme card -->
                        </div>
                       
 <?php
   }
}

?>
           </div>          
                                   
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <!-- Swiper controls -->
            <div class="swiper-button swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-e5f5e7ed567ef215" aria-disabled="true">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </div>
            <div class="swiper-button swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-e5f5e7ed567ef215" aria-disabled="false">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
        </div>
                <!-- End:: Most view -->



                <?php
$sel = mysqli_query ($con,"select * from music where genre='hip-hop music'");
$row = mysqli_num_rows($sel);

if($row > 0)
{

    ?>

 <!-- Begin:: Most view -->
 <h4 class="mb-4">HIP-HOP MUSIC</h4>
        <div class="swiper-section swiper-section--content mb-4">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events" data-slides="5"  >
            <div class="swiper-wrapper" id="swiper-wrapper-e5f5e7ed567ef215" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);" >                                         

    <?php
   while($row=mysqli_fetch_assoc($sel))
   {

?> 

<div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 14" style="width: 179.2px; margin-right: 24px;background-color:#14182a;">
 <!-- Begin:: Theme card -->
 <div class="pb-card rounded-3"  data-audio-id="25" data-audio-name="<?php echo$row['name']?>" data-audio-artist="<?php echo$row['singer']?>" data-audio-album="<?php echo$row['year']?>" data-audio-url="<?php echo "admin/audio/".$row['audio']?>" data-audio-cover="<?php echo"admin/images/song/".$row['img']?>">
                            
                          <div class="pb-card__image" style="width: 100%;height:100%;">
                              <video id="video" width="230px" height="200px" controls poster="<?php echo"admin/images/song/".$row['img']?>" >
                                    <source src="<?php echo "admin/video/".$row['video']?>" type="video/mp4" >
                                </video> 
                          </div>

    
                            <div class="pb-card__content">
                                <div class="pb-card__content__text">
                                    <a href="#" class="pb-card__title"><?php echo$row['name']?></a>
                                    <a href="#" class="pb-card__sub-title"><?php echo$row['singer']?></a>
                                </div>
                                
 <audio controls style="width:100% ">
 <source src="<?php echo "admin/audio/".$row['audio']?>" type="audio/mp3">
 </audio>
                            </div>
                            </div>
                        <!-- End:: Theme card -->
                        </div>
                       
 <?php
   }
}

?>
           </div>          
                                   
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <!-- Swiper controls -->
            <div class="swiper-button swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-e5f5e7ed567ef215" aria-disabled="true">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </div>
            <div class="swiper-button swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-e5f5e7ed567ef215" aria-disabled="false">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
        </div>
                <!-- End:: Most view -->
       


                <?php
$sel = mysqli_query ($con,"select * from music where genre='folk music'");
$row = mysqli_num_rows($sel);

if($row > 0)
{

    ?>

 <!-- Begin:: Most view -->
 <h4 class="mb-4">FOLK MUSIC</h4>
        <div class="swiper-section swiper-section--content mb-4">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events" data-slides="5"  >
            <div class="swiper-wrapper" id="swiper-wrapper-e5f5e7ed567ef215" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);" >                                         

    <?php
   while($row=mysqli_fetch_assoc($sel))
   {

?> 

<div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 14" style="width: 179.2px; margin-right: 24px;background-color:#14182a;">
 <!-- Begin:: Theme card -->
 <div class="pb-card rounded-3"  data-audio-id="25" data-audio-name="<?php echo$row['name']?>" data-audio-artist="<?php echo$row['singer']?>" data-audio-album="<?php echo$row['year']?>" data-audio-url="<?php echo "admin/audio/".$row['audio']?>" data-audio-cover="<?php echo"admin/images/song/".$row['img']?>">
                            
                          <div class="pb-card__image" style="width: 100%;height:100%;">
                              <video id="video" width="230px" height="200px" controls poster="<?php echo"admin/images/song/".$row['img']?>" >
                                    <source src="<?php echo "admin/video/".$row['video']?>" type="video/mp4" >
                                </video> 
                          </div>

    
                            <div class="pb-card__content">
                                <div class="pb-card__content__text">
                                    <a href="#" class="pb-card__title"><?php echo$row['name']?></a>
                                    <a href="#" class="pb-card__sub-title"><?php echo$row['singer']?></a>
                                </div>
                                
 <audio controls style="width:100% ">
 <source src="<?php echo "admin/audio/".$row['audio']?>" type="audio/mp3">
 </audio>
                            </div>
                            </div>
                        <!-- End:: Theme card -->
                        </div>
                       
 <?php
   }
}

?>
           </div>          
                                   
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <!-- Swiper controls -->
            <div class="swiper-button swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-e5f5e7ed567ef215" aria-disabled="true">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </div>
            <div class="swiper-button swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-e5f5e7ed567ef215" aria-disabled="false">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
        </div>
                <!-- End:: Most view -->



                <?php
$sel = mysqli_query ($con,"select * from music where genre='rock music'");
$row = mysqli_num_rows($sel);

if($row > 0)
{

    ?>

 <!-- Begin:: Most view -->
 <h4 class="mb-4">Rock MUSIC</h4>
        <div class="swiper-section swiper-section--content mb-4">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events" data-slides="5"  >
            <div class="swiper-wrapper" id="swiper-wrapper-e5f5e7ed567ef215" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);" >                                         

    <?php
   while($row=mysqli_fetch_assoc($sel))
   {

?> 

<div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 14" style="width: 179.2px; margin-right: 24px;background-color:#14182a;">
 <!-- Begin:: Theme card -->
 <div class="pb-card rounded-3"  data-audio-id="25" data-audio-name="<?php echo$row['name']?>" data-audio-artist="<?php echo$row['singer']?>" data-audio-album="<?php echo$row['year']?>" data-audio-url="<?php echo "admin/audio/".$row['audio']?>" data-audio-cover="<?php echo"admin/images/song/".$row['img']?>">
                            
                          <div class="pb-card__image" style="width: 100%;height:100%;">
                              <video id="video" width="230px" height="200px" controls poster="<?php echo"admin/images/song/".$row['img']?>" >
                                    <source src="<?php echo "admin/video/".$row['video']?>" type="video/mp4" >
                                </video> 
                          </div>

    
                            <div class="pb-card__content">
                                <div class="pb-card__content__text">
                                    <a href="#" class="pb-card__title"><?php echo$row['name']?></a>
                                    <a href="#" class="pb-card__sub-title"><?php echo$row['singer']?></a>
                                </div>
                                
 <audio controls style="width:100% ">
 <source src="<?php echo "admin/audio/".$row['audio']?>" type="audio/mp3">
 </audio>
                            </div>
                            </div>
                        <!-- End:: Theme card -->
                        </div>
                       
 <?php
   }
}

?>
           </div>          
                                   
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <!-- Swiper controls -->
            <div class="swiper-button swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-e5f5e7ed567ef215" aria-disabled="true">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </div>
            <div class="swiper-button swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-e5f5e7ed567ef215" aria-disabled="false">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
        </div>
                <!-- End:: Most view -->


                <?php
$sel = mysqli_query ($con,"select * from music where genre='sad pop music'");
$row = mysqli_num_rows($sel);

if($row > 0)
{

    ?>

 <!-- Begin:: Most view -->
 <h4 class="mb-4">SAD POP MUSIC</h4>
        <div class="swiper-section swiper-section--content mb-4">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events" data-slides="5"  >
            <div class="swiper-wrapper" id="swiper-wrapper-e5f5e7ed567ef215" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);" >                                         

    <?php
   while($row=mysqli_fetch_assoc($sel))
   {

?> 

<div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 14" style="width: 179.2px; margin-right: 24px;background-color:#14182a;">
 <!-- Begin:: Theme card -->
 <div class="pb-card rounded-3"  data-audio-id="25" data-audio-name="<?php echo$row['name']?>" data-audio-artist="<?php echo$row['singer']?>" data-audio-album="<?php echo$row['year']?>" data-audio-url="<?php echo "admin/audio/".$row['audio']?>" data-audio-cover="<?php echo"admin/images/song/".$row['img']?>">
                            
                          <div class="pb-card__image" style="width: 100%;height:100%;">
                              <video id="video" width="230px" height="200px" controls poster="<?php echo"admin/images/song/".$row['img']?>" >
                                    <source src="<?php echo "admin/video/".$row['video']?>" type="video/mp4" >
                                </video> 
                          </div>

    
                            <div class="pb-card__content">
                                <div class="pb-card__content__text">
                                    <a href="#" class="pb-card__title"><?php echo$row['name']?></a>
                                    <a href="#" class="pb-card__sub-title"><?php echo$row['singer']?></a>
                                </div>
                                
 <audio controls style="width:100% ">
 <source src="<?php echo "admin/audio/".$row['audio']?>" type="audio/mp3">
 </audio>
                            </div>
                            </div>
                        <!-- End:: Theme card -->
                        </div>
                       
 <?php
   }
}

?>
           </div>          
                                   
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <!-- Swiper controls -->
            <div class="swiper-button swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-e5f5e7ed567ef215" aria-disabled="true">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </div>
            <div class="swiper-button swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-e5f5e7ed567ef215" aria-disabled="false">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
        </div>
                <!-- End:: Most view -->



                <?php
$sel = mysqli_query ($con,"select * from music where genre='jazz music'");
$row = mysqli_num_rows($sel);

if($row > 0)
{

    ?>

 <!-- Begin:: Most view -->
 <h4 class="mb-4">JAZZ MUSIC</h4>
        <div class="swiper-section swiper-section--content mb-4">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events" data-slides="5"  >
            <div class="swiper-wrapper" id="swiper-wrapper-e5f5e7ed567ef215" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);" >                                         

    <?php
   while($row=mysqli_fetch_assoc($sel))
   {

?> 

<div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 14" style="width: 179.2px; margin-right: 24px;background-color:#14182a;">
 <!-- Begin:: Theme card -->
 <div class="pb-card rounded-3"  data-audio-id="25" data-audio-name="<?php echo$row['name']?>" data-audio-artist="<?php echo$row['singer']?>" data-audio-album="<?php echo$row['year']?>" data-audio-url="<?php echo "admin/audio/".$row['audio']?>" data-audio-cover="<?php echo"admin/images/song/".$row['img']?>">
                            
                          <div class="pb-card__image" style="width: 100%;height:100%;">
                              <video id="video" width="230px" height="200px" controls poster="<?php echo"admin/images/song/".$row['img']?>" >
                                    <source src="<?php echo "admin/video/".$row['video']?>" type="video/mp4" >
                                </video> 
                          </div>

    
                            <div class="pb-card__content">
                                <div class="pb-card__content__text">
                                    <a href="#" class="pb-card__title"><?php echo$row['name']?></a>
                                    <a href="#" class="pb-card__sub-title"><?php echo$row['singer']?></a>
                                </div>
                                
 <audio controls style="width:100% ">
 <source src="<?php echo "admin/audio/".$row['audio']?>" type="audio/mp3">
 </audio>
                            </div>
                            </div>
                        <!-- End:: Theme card -->
                        </div>
                       
 <?php
   }
}

?>
           </div>          
                                   
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <!-- Swiper controls -->
            <div class="swiper-button swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-e5f5e7ed567ef215" aria-disabled="true">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </div>
            <div class="swiper-button swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-e5f5e7ed567ef215" aria-disabled="false">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
        </div>
                <!-- End:: Most view -->


                <?php
$sel = mysqli_query ($con,"select * from music where genre='country music'");
$row = mysqli_num_rows($sel);

if($row > 0)
{

    ?>

 <!-- Begin:: Most view -->
 <h4 class="mb-4">COUNTRY MUSIC</h4>
        <div class="swiper-section swiper-section--content mb-4">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events" data-slides="5"  >
            <div class="swiper-wrapper" id="swiper-wrapper-e5f5e7ed567ef215" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);" >                                         

    <?php
   while($row=mysqli_fetch_assoc($sel))
   {

?> 

<div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 14" style="width: 179.2px; margin-right: 24px;background-color:#14182a;">
 <!-- Begin:: Theme card -->
 <div class="pb-card rounded-3"  data-audio-id="25" data-audio-name="<?php echo$row['name']?>" data-audio-artist="<?php echo$row['singer']?>" data-audio-album="<?php echo$row['year']?>" data-audio-url="<?php echo "admin/audio/".$row['audio']?>" data-audio-cover="<?php echo"admin/images/song/".$row['img']?>">
                            
                          <div class="pb-card__image" style="width: 100%;height:100%;">
                              <video id="video" width="230px" height="200px" controls poster="<?php echo"admin/images/song/".$row['img']?>" >
                                    <source src="<?php echo "admin/video/".$row['video']?>" type="video/mp4" >
                                </video> 
                          </div>

    
                            <div class="pb-card__content">
                                <div class="pb-card__content__text">
                                    <a href="#" class="pb-card__title"><?php echo$row['name']?></a>
                                    <a href="#" class="pb-card__sub-title"><?php echo$row['singer']?></a>
                                </div>
                            </div>
                            
 <audio controls style="width:100% ">
 <source src="<?php echo "admin/audio/".$row['audio']?>" type="audio/mp3">
 </audio>
                            </div>
                        <!-- End:: Theme card -->
   
                        </div>
                       
 <?php
   }
}

?>
           </div>          
                                   
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <!-- Swiper controls -->
            <div class="swiper-button swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-e5f5e7ed567ef215" aria-disabled="true">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </div>
            <div class="swiper-button swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-e5f5e7ed567ef215" aria-disabled="false">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
        </div>
                <!-- End:: Most view -->



                <?php
$sel = mysqli_query ($con,"select * from music where genre='classical music'");
$row = mysqli_num_rows($sel);

if($row > 0)
{

    ?>

 <!-- Begin:: Most view -->
 <h4 class="mb-4">CLASSICAL MUSIC</h4>
        <div class="swiper-section swiper-section--content mb-4">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events" data-slides="5"  >
            <div class="swiper-wrapper" id="swiper-wrapper-e5f5e7ed567ef215" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);" >                                         

    <?php
   while($row=mysqli_fetch_assoc($sel))
   {

?> 

<div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 14" style="width: 179.2px; margin-right: 24px;background-color:#14182a;">
 <!-- Begin:: Theme card -->
 <div class="pb-card rounded-3"  data-audio-id="25" data-audio-name="<?php echo$row['name']?>" data-audio-artist="<?php echo$row['singer']?>" data-audio-album="<?php echo$row['year']?>" data-audio-url="<?php echo "admin/audio/".$row['audio']?>" data-audio-cover="<?php echo"admin/images/song/".$row['img']?>">
                            
                          <div class="pb-card__image" style="width: 100%;height:100%;">
                              <video id="video" width="230px" height="200px" controls poster="<?php echo"admin/images/song/".$row['img']?>" >
                                    <source src="<?php echo "admin/video/".$row['video']?>" type="video/mp4" >
                                </video> 
                          </div>

    
                            <div class="pb-card__content">
                                <div class="pb-card__content__text">
                                    <a href="#" class="pb-card__title"><?php echo$row['name']?></a>
                                    <a href="#" class="pb-card__sub-title"><?php echo$row['singer']?></a>
                                </div>
                                
 <audio controls style="width:100% ">
 <source src="<?php echo "admin/audio/".$row['audio']?>" type="audio/mp3">
 </audio>
                            </div>
                            </div>
                        <!-- End:: Theme card -->
                        </div>
                       
 <?php
   }
}

?>
           </div>          
                                   
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <!-- Swiper controls -->
            <div class="swiper-button swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-e5f5e7ed567ef215" aria-disabled="true">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </div>
            <div class="swiper-button swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-e5f5e7ed567ef215" aria-disabled="false">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
        </div>
                <!-- End:: Most view -->


                <?php
$sel = mysqli_query ($con,"select * from music where genre='soul music'");
$row = mysqli_num_rows($sel);

if($row > 0)
{

    ?>

 <!-- Begin:: Most view -->
 <h4 class="mb-4">SOUL MUSIC</h4>
        <div class="swiper-section swiper-section--content mb-4">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events" data-slides="5"  >
            <div class="swiper-wrapper" id="swiper-wrapper-e5f5e7ed567ef215" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);" >                                         

    <?php
   while($row=mysqli_fetch_assoc($sel))
   {

?> 

<div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 14" style="width: 179.2px; margin-right: 24px;background-color:#14182a;">
 <!-- Begin:: Theme card -->
 <div class="pb-card rounded-3"  data-audio-id="25" data-audio-name="<?php echo$row['name']?>" data-audio-artist="<?php echo$row['singer']?>" data-audio-album="<?php echo$row['year']?>" data-audio-url="<?php echo "admin/audio/".$row['audio']?>" data-audio-cover="<?php echo"admin/images/song/".$row['img']?>">
                            
                          <div class="pb-card__image" style="width: 100%;height:100%;">
                              <video id="video" width="230px" height="200px" controls poster="<?php echo"admin/images/song/".$row['img']?>" >
                                    <source src="<?php echo "admin/video/".$row['video']?>" type="video/mp4" >
                                </video> 
                          </div>

    
                            <div class="pb-card__content">
                                <div class="pb-card__content__text">
                                    <a href="#" class="pb-card__title"><?php echo$row['name']?></a>
                                    <a href="#" class="pb-card__sub-title"><?php echo$row['singer']?></a>
  
                                    </div>      
 
   <audio controls style="width:100% ">
 <source src="<?php echo "admin/audio/".$row['audio']?>" type="audio/mp3">
 </audio>
                            </div>
                            </div>
                        <!-- End:: Theme card -->
                        </div>
                       
 <?php
   }
}

?>
           </div>          
                                   
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <!-- Swiper controls -->
            <div class="swiper-button swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-e5f5e7ed567ef215" aria-disabled="true">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </div>
            <div class="swiper-button swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-e5f5e7ed567ef215" aria-disabled="false">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
        </div>
                <!-- End:: Most view -->







                <!--Footer-->
                          <?php include"footer.php" ?>
        
    </main></div>

<!-- End:: Theme main content -->

    <!-- Scripts -->
    <script src="https://codeigniter.nemosofts.com/v1/tamilaudiopro/js/vendors.bundle.js"></script>
    <script src="https://codeigniter.nemosofts.com/v1/tamilaudiopro/js/notify.js"></script>
    <script src="https://codeigniter.nemosofts.com/v1/tamilaudiopro/js/scripts.bundle.js"></script>
    
        
    
</body>

</html>