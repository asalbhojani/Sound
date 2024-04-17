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
    <title>Sound | Release</title>
 
    <!-- Favicon --> 
    <link href="img/logo1.jpg" rel="icon" sizes="32x32">
    <link href="img/logo1.jpg" rel="icon" sizes="192x192">

    <!-- IOS Touch Icons -->
    <link rel="apple-touch-icon" href="https://admin.nemosofts.com/v1/tamilaudiopro/images/81253_26032022040648.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://admin.nemosofts.com/v1/tamilaudiopro/images/81253_26032022040648.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://admin.nemosofts.com/v1/tamilaudiopro/images/81253_26032022040648.png">
    <link rel="apple-touch-icon" sizes="167x167" href="https://admin.nemosofts.com/v1/tamilaudiopro/images/81253_26032022040648.png">

    <!-- Styles -->
    <link rel="stylesheet" href="css/audio.css" type="text/css">
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

<body data-new-gr-c-s-check-loaded="14.1085.0" data-gr-ext-installed="">
    <div id="pb_wrapper">
    
 
    <!-- Header And Navbar -->
    <?php include"header.php" ?>

    <br><br><br>
        

       <!-- Begin:: Theme main content -->
<main id="pb_main">
<div class="mein" style="margin-right: 100px;" >
        
       <!-- Begin:: Latest -->
       <h4 class="mb-4">Latest</h4>
        <div class="swiper-section mb-4">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events" data-slides="4">
                <div class="swiper-wrapper" id="swiper-wrapper-8e4ec1046410a73c7a" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">

                
               
                        <?php
$sel = mysqli_query ($con,"select * from music where year=2022");
$row = mysqli_num_rows($sel);

if($row > 0)
{
   while($row=mysqli_fetch_assoc($sel))
   {

?>

<div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 14" style="width: 179.2px; margin-right: 24px;background-color:#14182a;">
 <!-- Begin:: Theme card -->
 <div class="pb-card rounded-3"  data-audio-id="25" data-audio-name="<?php echo$row['name']?>" data-audio-artist="<?php echo$row['singer']?>" data-audio-album="<?php echo$row['year']?>" data-audio-url="<?php echo "admin/audio/".$row['audio']?>" data-audio-cover="<?php echo"admin/images/song/".$row['img']?>">
                            
                          <div class="pb-card__image" style="width: 100%;height:100%;">
                              <video id="video" width="250px" height="200px" controls poster="<?php echo"admin/images/song/".$row['img']?>" >
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
                            </div>
                        <!-- End:: Theme card -->
                        </div>
 <?php
   }
}


?>                                                  
                    
        </div>
                <!-- End:: Latest -->

        
        <!-- Begin:: Album -->
                <h4 class="mb-4">Latest album</h4>
        <div class="swiper-section mb-5">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events" data-slides="5">
                <div class="swiper-wrapper" id="swiper-wrapper-e3cdcfd3b432d4ca" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                     
                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 11" style="width: 179.2px; margin-right: 24px;">

                
                        <!-- Begin:: Theme card -->
                        <div class="pb-card pb-card--cover">
                            <a href="albumcoke.php" class="pb-card__image pb-page-link zoom-n-rotate">
                                <img src="img/coke2.jpg" alt="">
                            </a>
                            <div class="pb-card__content">
                                <div class="pb-card__content__text">
                                    <a href="https://codeigniter.nemosofts.com/v1/tamilaudiopro/station/album/11" class="pb-card__title pb-page-link">Coke Studio</a>
                                </div>
                            </div>
                        </div>
                        <!-- End:: Theme card -->
                    </div>
                                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 11" style="width: 179.2px; margin-right: 24px;">
                        <!-- Begin:: Theme card -->
                        <div class="pb-card pb-card--cover">
                            <a href="albumabdul.php" class="pb-card__image pb-page-link zoom-n-rotate">
                                <img src="img/abdul.jpg" alt="">
                            </a>
                            <div class="pb-card__content">
                                <div class="pb-card__content__text">
                                    <a href="https://codeigniter.nemosofts.com/v1/tamilaudiopro/station/album/11" class="pb-card__title pb-page-link">Abdul Hnnan</a>
                                </div>
                            </div>
                        </div>
                        <!-- End:: Theme card -->
                    </div>
                                     
                                       
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <!-- Swiper controls -->
            <div class="swiper-button swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-e3cdcfd3b432d4ca" aria-disabled="true">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </div>
            <div class="swiper-button swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-e3cdcfd3b432d4ca" aria-disabled="false">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
        </div>
                <!-- End:: Album -->
        
         <!-- Begin:: Artists -->
         <h4 class="mb-4">Latest Artists</h4>
        <div class="swiper-section mb-4">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events" data-slides="5">
                <div class="swiper-wrapper" id="swiper-wrapper-a1d440ecd1b38ade" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                       
              
                <?php
$sel = mysqli_query ($con,"select * from singer");
$row = mysqli_num_rows($sel);

if($row > 0)
{
   while($row=mysqli_fetch_assoc($sel))
   {

?>
               
               
                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 9" style="width: 179.2px;height:300px; margin-right: 24px;">
                        <div class="pb-card-list__item">
                            <!-- Begin:: Theme card -->
                            <div class="pb-card pb-card--avatar rounded-3">
                                <a class="pb-page-link" href="https://codeigniter.nemosofts.com/v1/tamilaudiopro/station/artists/3" style="height: 180px;">
                                    <img src="<?php echo"admin/images/singer/".$row['img']?>" class="pb-card__image" style="height: 180px;" alt="">
                                    </a><a href="https://codeigniter.nemosofts.com/v1/tamilaudiopro/station/artists/3" class="pb-card__title pb-page-link"><?php echo$row['name']?></a>
                                
                                <a class="pb-page-link btn btn-sm btn-danger btn-pill " href="artistsong.php?<?php echo "name=$row[name] "?>">Follow</a>
                            </div>
                            <!-- End:: Theme card -->
                        </div>
                    </div>


 <?php
   }
}

?>

                                       
        </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
            <!-- Swiper controls -->
            <div class="swiper-button swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-a1d440ecd1b38ade" aria-disabled="true">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </div>
            <div class="swiper-button swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-a1d440ecd1b38ade" aria-disabled="false">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
        </div>
                <!-- End:: Artists -->
        
       
        
        <!-- Begin:: Category -->
                <h4 class="mb-4">Latest Category</h4>
        <div class="swiper-section mb-5">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events" data-slides="5">
                <div class="swiper-wrapper" id="swiper-wrapper-b8256502af6ea7c8" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                       
                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 7" style="width: 179.2px; margin-right: 24px;">       
                <!-- Begin:: Theme card -->
                <a href="cat2022.php">
                        <div class="pb-card pb-card--cover">
                            <a href="cat2022.php" class="pb-card__image pb-page-link zoom-n-rotate">
                                <img src="https://admin.nemosofts.com/v1/tamilaudiopro/images/42833_category.png" alt="">
                            </a>
                            <div class="pb-card__content">
                                <div class="pb-card__content__text">
                                    <a href="cat2022.php" class="pb-card__title pb-page-link">2022</a>
                                </div>
                            </div>
                        </div>
                </a>
                        <!-- End:: Theme card -->
                    </div>
                         
                    
                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 7" style="width: 179.2px; margin-right: 24px;">
                    <!-- Begin:: Theme card -->
                    <a href="cat2021.php">
                        <div class="pb-card pb-card--cover">
                            <a href="cat2021.php" class="pb-card__image pb-page-link zoom-n-rotate">
                                <img src="https://admin.nemosofts.com/v1/tamilaudiopro/images/45289_category.png" alt="">
                            </a>
                            <div class="pb-card__content">
                                <div class="pb-card__content__text">
                                    <a href="cat2021.php" class="pb-card__title pb-page-link">2021</a>
                                </div>
                            </div>
                        </div>
                    </a>
                        <!-- End:: Theme card -->
                    </div>
                                    
                    
                    <div class="swiper-slide" role="group" aria-label="3 / 7" style="width: 179.2px; margin-right: 24px;">
                        <!-- Begin:: Theme card -->
                        <a href="cat2020.php">
                        <div class="pb-card pb-card--cover">
                            <a href="cat2020.php" class="pb-card__image pb-page-link zoom-n-rotate">
                                <img src="https://admin.nemosofts.com/v1/tamilaudiopro/images/30458_category.png" alt="">
                            </a>
                            <div class="pb-card__content">
                                <div class="pb-card__content__text">
                                    <a href="cat2020.php" class="pb-card__title pb-page-link">2020</a>
                                </div>
                            </div>
                        </div>
                        </a>
                        <!-- End:: Theme card -->
                    </div>
                                       

                    <div class="swiper-slide" role="group" aria-label="4 / 7" style="width: 179.2px; margin-right: 24px;">
                        <!-- Begin:: Theme card -->
                        <a href="cat2019.php">
                        <div class="pb-card pb-card--cover">
                            <a href="cat2019.php" class="pb-card__image pb-page-link zoom-n-rotate">
                                <img src="https://admin.nemosofts.com/v1/tamilaudiopro/images/61893_category.png" alt="">
                            </a>
                            <div class="pb-card__content">
                                <div class="pb-card__content__text">
                                    <a href="cat2019.php" class="pb-card__title pb-page-link">2019</a>
                                </div>
                            </div>
                        </div>
                        </a>
                        <!-- End:: Theme card -->
                    </div>
                          
                    
                    <div class="swiper-slide" role="group" aria-label="5 / 7" style="width: 179.2px; margin-right: 24px;">
                        <!-- Begin:: Theme card -->
                        <a href="cat2018.php">
                        <div class="pb-card pb-card--cover">
                            <a href="cat2018.php" class="pb-card__image pb-page-link zoom-n-rotate">
                                <img src="https://admin.nemosofts.com/v1/tamilaudiopro/images/64933_category.png" alt="">
                            </a>
                            <div class="pb-card__content">
                                <div class="pb-card__content__text">
                                    <a href="cat2018.php" class="pb-card__title pb-page-link">2018</a>
                                </div>
                            </div>
                        </div>
                        </a>
                        <!-- End:: Theme card -->
                    </div>
                                    
                    
                    <div class="swiper-slide" role="group" aria-label="6 / 7" style="width: 179.2px; margin-right: 24px;">
                        <!-- Begin:: Theme card -->
                        <a href="cat2017.php">
                        <div class="pb-card pb-card--cover">
                            <a href="cat2017.php" class="pb-card__image pb-page-link zoom-n-rotate">
                                <img src="https://admin.nemosofts.com/v1/tamilaudiopro/images/95163_category.png" alt="">
                            </a>
                            <div class="pb-card__content">
                                <div class="pb-card__content__text">
                                    <a href="cat2017.php" class="pb-card__title pb-page-link">2017</a>
                                </div>
                            </div>
                        </div>
                        </a>
                        <!-- End:: Theme card -->
                    </div>
                                    
                    
                    <div class="swiper-slide" role="group" aria-label="7 / 7" style="width: 179.2px; margin-right: 24px;">
                        <!-- Begin:: Theme card -->
                        <a href="cat2016.php">
                        <div class="pb-card pb-card--cover">
                            <a href="cat2016.php" class="pb-card__image pb-page-link zoom-n-rotate">
                                <img src="https://admin.nemosofts.com/v1/tamilaudiopro/images/80912_category.png" alt="">
                            </a>
                            <div class="pb-card__content">
                                <div class="pb-card__content__text">
                                    <a href="cat2016.php" class="pb-card__title pb-page-link">2016</a>
                                </div>
                            </div>
                        </div>
                    </a>
                        <!-- End:: Theme card -->
                    </div>
                </div>


            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <!-- Swiper controls -->
            <div class="swiper-button swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-b8256502af6ea7c8" aria-disabled="true">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </div>
            <div class="swiper-button swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-b8256502af6ea7c8" aria-disabled="false">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
        </div>
                <!-- End:: Category -->
              
           
                <!--Footer-->
                <?php include"footer.php" ?>
        
     </main></div>

<!-- End:: Theme main content -->
        <!-- Begin:: Theme playlist -->
        <div id="pb_playlist">
            <div id="pb_playlist_head">
                <span id="pb_playlist_head_title">Next Up</span>
                <a href="javascript:void(0);" id="pb_playlist_clear">Clear</a>
                <a href="javascript:void(0);" id="pb_playlist_head_close">×</a>
            </div>
            <div id="pb_playlist_body">
                <div id="pb_playlist_empty" class="col-sm-8 mx-auto text-center">
                    <p>Your queue is empty, Click the play button on an album, song, or playlist to add it to your queue</p>
                </div>
            </div>
        </div>
        <!-- End:: Theme playlist -->

</div>
	
    <!-- Scripts -->
    <script src="https://codeigniter.nemosofts.com/v1/tamilaudiopro/js/vendors.bundle.js"></script>
    <script src="https://codeigniter.nemosofts.com/v1/tamilaudiopro/js/notify.js"></script>
    <script src="https://codeigniter.nemosofts.com/v1/tamilaudiopro/js/scripts.bundle.js"></script>
    
        
    
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>
</html>