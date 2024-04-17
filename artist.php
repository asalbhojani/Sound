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
    <title>Sound | Artist</title>
 
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

<body data-new-gr-c-s-check-loaded="14.1085.0" data-gr-ext-installed="">
    <div id="pb_wrapper">

    
    <!-- Header And Navbar -->
    <?php include"header.php" ?>

    <br><br>
        

        <!-- Begin:: Theme main content -->
<main id="pb_main">
<div class="mein" style="margin-right: 100px;" >
        <div class="mb-5">
                            <div class="pb-card-list">

                            
                            <?php
$sel = mysqli_query ($con,"select * from singer");
$row = mysqli_num_rows($sel);

if($row > 0)
{
   while($row=mysqli_fetch_assoc($sel))
   {

?>


                            <div class="pb-card-list__item" >
                            <!-- Begin:: Theme card -->
                            <div class="pb-card pb-card--avatar rounded-3" style="height: 300px;">
                                <a class="pb-page-link" href="" style="height: 200px;">
                                    <img src="<?php echo"admin/images/singer/".$row['img']?>" style="height: 200px;" class="pb-card__image" alt="">
                                    </a>
                                    <a href="" class="pb-card__title pb-page-link"><?php echo$row['name']?></a>
                                
                                <a class="pb-page-link btn btn-sm btn-danger btn-pill" href="artistsong.php?<?php echo "name=$row[name] "?>">Follow</a>
                            </div>
                            <!-- End:: Theme card -->
                        </div>
                        
                        
  <?php
   }
}

?>

                     
                </div>
                    </div>
         
                <!--Footer-->
                <?php include"footer.php" ?>
        
</div> </main></div>

<!-- End:: Theme main content -->
	
    <!-- Scripts -->
    <script src="https://codeigniter.nemosofts.com/v1/tamilaudiopro/js/vendors.bundle.js"></script>
    <script src="https://codeigniter.nemosofts.com/v1/tamilaudiopro/js/notify.js"></script>
    <script src="https://codeigniter.nemosofts.com/v1/tamilaudiopro/js/scripts.bundle.js"></script>
    
        
    
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>