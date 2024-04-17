<?php

include "connect.php";


session_start();
if(isset($_SESSION["name"])!=null )
{



}
else{
    
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
    <title>Sound | Login</title>
 
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
        <div class="row">
            <div class="login-form">
                <form  method="post" class="text-left">
                    <h3 style="color: var(--theme-primary-color);">Welcome</h3>
                    <p>Sign In to continue</p>
                    <p class="login-username pt-2">
                        <input type="text" name="name" id="user_login" class="input input_test" placeholder="Name" autocomplete="off" required="">
                    </p>
                    <p class="login-password">
                        <input type="password" name="pass" id="user_pass" class="input input_test" placeholder="Password" autocomplete="off" required="">
                    </p>
                    <br>
                    <button type="submit" name="login" class="btn btn-danger rounded-pill rounded-2 " >Log In</button>
                    <br>
                    <span class="mt-3">New to Logistics? <a href="signup.php" class="pb-page-link" style="color: var(--theme-primary-color);">Register</a></span>
                    
                </form>
            </div>
        </div>



        <?php



if(isset($_POST['login']))
{

$name = $_POST['name'];
$pass = $_POST['pass'];
     
   
$qu = mysqli_query($con,"select * from admin where name='$name' and password='$pass'");
$qu1 = mysqli_query($con,"select * from register where name='$name' and password='$pass'");
$num = mysqli_num_rows($qu);
$num1 = mysqli_num_rows($qu1);
$row = mysqli_fetch_array($qu);
$row1 = mysqli_fetch_array($qu1);

if($row > 0)
{

   
    $_SESSION['name']=$row[1]; 

    echo $_SESSION["name"];


    echo'<script>alert("Login Done");</script>';
    echo'<script>window.location="admin/dashboard.php";</script>';
  

}

if($row1 > 0)
{

    $_SESSION['loggedin']= true;
    $_SESSION['name']=$row1[2]; 

    echo $_SESSION["name"];
    $q=mysqli_query($con,"update register set status='Active' where name='$_SESSION[name]'");
    echo'<script>alert("Login Done");</script>';
    echo'<script>window.location="index.php";</script>';

}

else{

    echo'<script>alert("Incorrect Name or Password");</script>';
}

}


?>




           
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

        <!-- Begin:: Theme player -->
        <div id="pb_player">
            <button class="pb-btn-player amplitude-prev">
                <svg role="presentation">
                    <use xlink:href="https://codeigniter.nemosofts.com/v1/tamilaudiopro/images/player-icons.svg#prev"></use>
                </svg>
            </button>
            <button class="pb-btn-player amplitude-play-pause">
                <svg class="pb-btn-player__play" role="presentation">
                    <use xlink:href="https://codeigniter.nemosofts.com/v1/tamilaudiopro/images/player-icons.svg#play"></use>
                </svg>
                <svg class="pb-btn-player__pause" role="presentation">
                    <use xlink:href="https://codeigniter.nemosofts.com/v1/tamilaudiopro/images/player-icons.svg#pause"></use>
                </svg>
            </button>
            <button class="pb-btn-player amplitude-next">
                <svg role="presentation">
                    <use xlink:href="https://codeigniter.nemosofts.com/v1/tamilaudiopro/images/player-icons.svg#next"></use>
                </svg>
            </button>
            <button class="pb-btn-player amplitude-repeat">
                <svg role="presentation">
                    <use xlink:href="https://codeigniter.nemosofts.com/v1/tamilaudiopro/images/player-icons.svg#repeat"></use>
                </svg>
            </button>
            <button class="pb-btn-player amplitude-shuffle">
                <svg role="presentation">
                    <use xlink:href="https://codeigniter.nemosofts.com/v1/tamilaudiopro/images/player-icons.svg#shuffle"></use>
                </svg>
            </button>
            <div class="pb-player-cover">
                <img src="https://admin.nemosofts.com/v1/tamilaudiopro/images/81253_26032022040648.png" data-amplitude-song-info="cover_art_url" alt="">
                <div class="pb-player-cover__content">
                    <div class="pb-player-cover__content__head">
                        <span class="pb-player-cover__title" data-amplitude-song-info="name">Tamilaudiopro</span>
                        <span class="pb-player-cover__sub-title" data-amplitude-song-info="artist">Tamilaudiopro</span>
                        <span class="pb-player-timer">
                            <span class="amplitude-current-minutes"></span>:<span class="amplitude-current-seconds"></span> /
                            <span class="amplitude-duration-minutes"></span>:<span class="amplitude-duration-seconds"></span>
                        </span>
                    </div>
                    <div class="pb-player-progress">
                        <input type="range" class="amplitude-song-slider" value="0">
                        <progress class="pb-player-progress__played amplitude-song-played-progress"></progress>
                        <progress class="pb-player-progress__buffered amplitude-buffered-progress" value="0"></progress>
                    </div>                 
                </div>
            </div>
            <button class="pb-btn-player amplitude-mute">
                <svg class="pb-btn-player__muted" role="presentation">
                    <use xlink:href="https://codeigniter.nemosofts.com/v1/tamilaudiopro/images/player-icons.svg#muted"></use>
                </svg>
                <svg class="pb-btn-player__volume" role="presentation">
                    <use xlink:href="https://codeigniter.nemosofts.com/v1/tamilaudiopro/images/player-icons.svg#volume"></use>
                </svg>
            </button>
            <input type="range" class="pb-player-volume-slider amplitude-volume-slider" value="50">
            <button id="pb_playlist_toggler" class="pb-btn-player">
                <svg role="presentation">
                    <use xlink:href="https://codeigniter.nemosofts.com/v1/tamilaudiopro/images/player-icons.svg#list"></use>
                </svg>
            </button>
        </div>
        <!-- End:: Theme player -->
	

	<!-- Share link modal -->
    <div id="pb_share_music" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Share your music</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                </div>
                <div class="modal-body">
                    <a><b>Embed</b></a>
                    <pre id="pb_share_music_frame" class="pre-code"></pre>
                    
                    <a><b>Share Link</b></a>
                    <pre id="pb_share_music_url" class="pre-code"></pre>
                </div>
            </div>
        </div>
    </div>
	
    <!-- Scripts -->
    <script src="https://codeigniter.nemosofts.com/v1/tamilaudiopro/js/vendors.bundle.js"></script>
    <script src="https://codeigniter.nemosofts.com/v1/tamilaudiopro/js/notify.js"></script>
    <script src="https://codeigniter.nemosofts.com/v1/tamilaudiopro/js/scripts.bundle.js"></script>


    
</body>

</html>

<?php 

 } 

?>