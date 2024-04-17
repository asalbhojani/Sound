<?php
include "connect.php";

session_start();
if(isset($_SESSION["name"])==null)
{

header('location:http://localhost/sound/signin.php');


}

else{



  ?>
<!doctype html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Sound/Admin Pannel</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="images/favicon.ico" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="css/typography.css">
   <!-- Style CSS -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/variable.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">

   

</head>
<body>
   
   <!-- Wrapper Start -->

   <div class="wrapper">

 <!-- Sidebar  -->
 <div class="iq-sidebar"  style="background-color:  #181c2e;">
         <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="dashboard.php" class="header-logo">
               <img src="images/logo.jpg" class="img-fluid rounded-normal" alt="">
               <div class="logo-title">
                  <span class="text-uppercase" style="z-index: 1;font-family: Luminari fantasy;font-size:40px;color:#b06ab3;font-weight:bold;">Sound</span> 
               </div>
            </a>
         </div>

         <div id="sidebar-scrollbar" >
            <nav class="iq-sidebar-menu" >
               <ul id="iq-sidebar-toggle" class="iq-menu">
             
                  <li class="active">
                     <span  style="color: #b06ab3; padding-left:25px;font-size: 25px;font-family: Georgia, serif;font-weight: bold ">Admin</span>
                     <ul id="admin" class="iq-submenu " >
                        <li class="active"><a href="dashboard.php"  style="color: #b06ab3;font-size: 20px;font-family: Georgia, serif;"><i class="las la-house-damage"></i>Dashboard</a></li>
                        <li><a href="singer.php" style="color: #b06ab3;font-size: 20px;font-family: Georgia, serif;"><i class="las la-microphone-alt"></i>Singer</a></li>
                        <li><a href="music.php" style="color: #b06ab3;font-size: 20px;font-family: Georgia, serif;"><i class="las la-play-circle"></i>Music</a></li>
   
                     </ul>
                  </li>
                  
                  <li>
                  <span  style="color: #b06ab3; padding-left:25px;font-size: 25px;font-family: Georgia, serif;font-weight: bold">User</span>
                     <ul id="userinfo" class="iq-submenu " >
                        <li><a href="userlist.php" style="color: #b06ab3;font-size: 20px;font-family: Georgia, serif;"><i class="las la-th-list"></i>User List</a></li>
                        <li><a href="useredit.php" style="color: #b06ab3;font-size: 20px;font-family: Georgia, serif;"><i class="las la-edit"></i>User Edit</a></li>
                     </ul>
                  </li>

               </ul>
            </nav>
         </div>
      </div>

      <!-- TOP Nav Bar -->
      <div class="iq-top-navbar" style="background-color:  #181c2e;">
         <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
             
               
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
                  <ul class="navbar-nav ml-auto navbar-list">
                    
                    <li class="nav-item nav-icon">
                        <h3 style="color: #b06ab3;padding-top:20px;padding-right:800px; font-size: 40px; font-style: italic;"> Welcome <?php echo $_SESSION['name'];  ?></h3>
                    </li>

                     <li class="nav-item nav-icon">
                       <a href="logout.php"> <button style="background-color:#b06ab3;color:white;border:#b06ab3;border-radius:5px;padding-left:30px;padding-right:30px;margin-left:-150px;margin-top:-30px;">Sign Out</button></a>
                    </li>

                   

                     

                     

                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!-- TOP Nav Bar END -->

      </div>
   <!-- Wrapper END -->

  
   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <!-- Appear JavaScript -->
   <script src="js/jquery.appear.js"></script>
   <!-- Countdown JavaScript -->
   <script src="js/countdown.min.js"></script>
   <!-- Counterup JavaScript -->
   <script src="js/waypoints.min.js"></script>
   <script src="js/jquery.counterup.min.js"></script>
   <!-- Wow JavaScript -->
   <script src="js/wow.min.js"></script>
   <!-- Apexcharts JavaScript -->
   <script src="js/apexcharts.js"></script>
   <!-- Slick JavaScript -->
   <script src="js/slick.min.js"></script>
   <!-- Select2 JavaScript -->
   <script src="js/select2.min.js"></script>
   <!-- Owl Carousel JavaScript -->
   <script src="js/owl.carousel.min.js"></script>
   <!-- Magnific Popup JavaScript -->
   <script src="js/jquery.magnific-popup.min.js"></script>
   <!-- Smooth Scrollbar JavaScript -->
   <script src="js/smooth-scrollbar.js"></script>
   <!-- lottie JavaScript -->
   <script src="js/lottie.js"></script>
   <!-- am core JavaScript -->
   <script src="js/core.js"></script>
   <!-- am charts JavaScript -->
   <script src="js/charts.js"></script>
   <!-- am animated JavaScript -->
   <script src="js/animated.js"></script>
   <!-- am kelly JavaScript -->
   <script src="js/kelly.js"></script>
   <!-- am maps JavaScript -->
   <script src="js/maps.js"></script>
   <!-- am worldLow JavaScript -->
   <script src="js/worldLow.js"></script>
   <!-- Raphael-min JavaScript -->
   <script src="js/raphael-min.js"></script>
   <!-- Morris JavaScript -->
   <script src="js/morris.js"></script>
   <!-- Morris min JavaScript -->
   <script src="js/morris.min.js"></script>
   <!-- Flatpicker Js -->
   <script src="js/flatpickr.js"></script>
   <!-- Style Customizer -->
   <script src="js/style-customizer.js"></script>
   <!-- Chart Custom JavaScript -->
   <script src="js/chart-custom.js"></script>
<!-- Music js -->
   <script src="js/music-player.js"></script>
   <!-- Music-player js -->
   <script src="js/music-player-dashboard.js"></script>
   <!-- Custom JavaScript -->
   <script src="js/custom.js"></script>
</body>
</html>


<?php
}
?>