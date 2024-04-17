<?php
include "connect.php ";
session_start();
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
   <body>
      
      <!-- Wrapper Start -->
      <div class="wrapper">
        
      <!--HEADER-->
   <?php  include"header.php" ?>


      <!-- Page Content  -->
   <div id="content-page" class="content-page"  style="background-color: #14182a;">
      <div class="container-fluid">
         <div class="row" >
            <div class="col-sm-12"  >
                  <div class="iq-card" style="background-color: #181c2e;">
                     <div class="iq-card-header d-flex justify-content-between"  style="background-color: #b06ab3;border:#b06ab3;">
                        <div class="iq-header-title">
                           <h4 class="card-title" style="color:white;">User List</h4>
                        </div>
                     </div>
                     
                     <div class="iq-card-body" style="background-color: #181c2e;">
                        <div class="table-responsive">
                           <div class="row justify-content-between">
                              <div class="col-sm-12 col-md-6">
                                 <div id="user_list_datatable_info" class="dataTables_filter">
                                    <form class="mr-3 position-relative">
                                       <div class="form-group mb-0">
                                          <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                                       </div>
                                    </form>
                                 </div>
                              </div>
                             
                           </div>

                           <form method="post">
                           <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info" style="color:white">
                             <thead>
                                 <tr>
                                    <th>ID</th>
                                    <th>Img</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Password</th>
                                    <th>Action</th>
                                 </tr>
                             </thead>

 <?php

$sel = mysqli_query($con,"select * from register");
$row = mysqli_num_rows($sel);

if($row > 0)
{
    while($row = mysqli_fetch_assoc($sel))
{
        ?>


                             <tbody >
                                 <tr>
                                    <td name="id" style="color:#b06ab3;"><?php echo $row['id']?></td>
                                    <td  style="color:#b06ab3;"><img style="width:100px;" src="<?php echo"images/user/".$row['img']?>" > </td>
                                    <td style="color:#b06ab3;"><?php echo $row['name']?></td>
                                    <td style="color:#b06ab3;"><?php echo $row['email']?></td>
                                    <td style="color:#b06ab3;"><?php echo $row['address']?></td>
                                    <td style="color:#b06ab3;"><span class="badge iq-bg-primary"><?php echo $row['status'] ?></span></td>
                                    <td style="color:#b06ab3;"><?php echo $row['password']?></td>
                                    <td>
                                       <div class="d-flex align-items-center list-user-action">
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="useredit.php?<?php echo " id=$row[id]&name=$row[name]&email=$row[email]&address=$row[address]&status=$row[status]&pass=$row[password] "?>"><i class="ri-pencil-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="delete.php"><i class="ri-delete-bin-line"></i></a>
                                       </div>
                                    </td>
                                 </tr>

                                 <?php
}

}

?>


                             </tbody>
                           </table>
</form>
                        </div>
                           
                     </div>
                  </div>
            </div>
         </div>
      </div>
   </div>
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
      <!-- Style Customizer -->
      <script src="js/style-customizer.js"></script>
      <script src="js/chart-custom.js"></script>
      <!-- Music js -->
         <script src="js/music-player.js"></script>
         <!-- Music-player js -->
         <script src="js/music-player-dashboard.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
   </body>
</html>