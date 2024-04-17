<?php
include "connect.php";
?>

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
    <title> Sound</title>
 
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
        
     <!-- SET GLOBAL BASE URL -->
    <script>var base_url = 'https://codeigniter.nemosofts.com/v1/tamilaudiopro';</script>
    
    <link rel="stylesheet" href="css/main.css">

        
<style>
    textarea {
      min-height: 150px !important;
    }
</style>
</head>
<body data-new-gr-c-s-check-loaded="14.1084.0" data-gr-ext-installed="">
<div id="pb_wrapper">

  <!-- Header And Navbar -->
<?php
include "header.php";
?>
<br><br>


<main id="pb_main">
<div class="mein" style="margin-right: 100px;" >

 <!-- Begin:: Most view -->
 
       
            <?php

if(isset($_POST['fetch-btn']))
{

    $fetch= $_POST['fetch'];

    $fetch_query = mysqli_query($con, "SELECT * FROM music WHERE name LIKE '%$fetch%'");
    if (mysqli_num_rows($fetch_query) > 0) {
        ?>
        
        <h4 class="mb-4">Music</h4><br>
        <div class="swiper-section swiper-section--content mb-4">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events" data-slides="5"  >
            <div class="swiper-wrapper" id="swiper-wrapper-e5f5e7ed567ef215" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);" >                                         
                       
        
        <?php
        while ($row = mysqli_fetch_array($fetch_query)) {
           
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
                            </div>
                        <!-- End:: Theme card -->
                        </div>
                       
<?php 
} 
   }
        }


?>
<!-- 
<script type="text/javascript">

var video = document.getElementById('video');

$(video).on({
mouseenter: function () {
video.setAttribute("controls","controls")
},
mouseleave: function () {
video.removeAttribute("controls");
}
});

// (function(window) {
//     function setupVideo()
//     {
//         var v = document.getElementById('videoElement');
//         v.addEventListener('mouseover', function() { this.controls = true; }, false);
//         v.addEventListener('mouseout', function() { this.controls = false; }, false);
//     }

//     window.addEventListener('load', setupVideo, false);
// })(window);
</script> -->
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



 <!-- Begin:: Most view -->
 
       
 <?php

if(isset($_POST['fetch-btn']))
{

    $fetch= $_POST['fetch'];

    $fetch_query = mysqli_query($con, "SELECT * FROM music WHERE year LIKE '%$fetch%'");
    if (mysqli_num_rows($fetch_query) > 0) {
        ?>
        
        <h4 class="mb-4" style="padding-left: 200px;">Year</h4>
        <div class="swiper-section swiper-section--content mb-4" style="margin-left: 200px;">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events" data-slides="5"  >
            <div class="swiper-wrapper" id="swiper-wrapper-e5f5e7ed567ef215" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);" >                                         
                       
        
        <?php
        while ($row = mysqli_fetch_array($fetch_query)) {
           
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
                                    <a href="#" class="pb-card__sub-title"><?php echo$row['year']?></a>
                                </div>
                            </div>
                            </div>
                        <!-- End:: Theme card -->
                        </div>
                       
<?php 
} 
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





 <!-- Begin:: Most view -->
 
       
 <?php

if(isset($_POST['fetch-btn']))
{

    $fetch= $_POST['fetch'];

    $fetch_query = mysqli_query($con, "SELECT * FROM music WHERE genre LIKE '%$fetch%'");
    if (mysqli_num_rows($fetch_query) > 0) {
        ?>
        
        <h4 class="mb-4" style="padding-left: 200px;">Genre</h4>
        <div class="swiper-section swiper-section--content mb-4" style="margin-left: 200px;">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events" data-slides="5"  >
            <div class="swiper-wrapper" id="swiper-wrapper-e5f5e7ed567ef215" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);" >                                         
                       
        
        <?php
        while ($row = mysqli_fetch_array($fetch_query)) {
           
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
                                    <a href="#" class="pb-card__sub-title"><?php echo$row['genre']?></a>
                                </div>
                            </div>
                            </div>
                        <!-- End:: Theme card -->
                        </div>
                       
<?php 
} 
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





 <!-- Begin:: Most view -->
 
       
 <?php

if(isset($_POST['fetch-btn']))
{

    $fetch= $_POST['fetch'];

    $fetch_query = mysqli_query($con, "SELECT * FROM music WHERE singer LIKE '%$fetch%'");
    if (mysqli_num_rows($fetch_query) > 0) {
        ?>
        
        <h4 class="mb-4" style="padding-left: 200px;">Artist</h4>
        <div class="swiper-section swiper-section--content mb-4" style="margin-left: 200px;">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events" data-slides="5"  >
            <div class="swiper-wrapper" id="swiper-wrapper-e5f5e7ed567ef215" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);" >                                         
                       
        
        <?php
        while ($row = mysqli_fetch_array($fetch_query)) {
           
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
                            </div>
                        <!-- End:: Theme card -->
                        </div>
                       
<?php 
} 
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




                

        
       

</div>
   </main>
</div>
<!-- End:: Theme main content -->
       
	


    <!-- Scripts -->
    <script src="https://codeigniter.nemosofts.com/v1/tamilaudiopro/js/vendors.bundle.js"></script>
    <script src="https://codeigniter.nemosofts.com/v1/tamilaudiopro/js/notify.js"></script>
    <script src="https://codeigniter.nemosofts.com/v1/tamilaudiopro/js/scripts.bundle.js"></script>
    

</body>
</html>