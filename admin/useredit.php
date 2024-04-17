<?php

include "connect.php";



$id = $_GET['id'];
$name = $_GET['name'];
$email = $_GET['email'];
$address = $_GET['address'];
$status = $_GET['status'];
$pass = $_GET['pass'];


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
            <div class="container-fluid" style="background-color: #181c2e;">
               <div class="row">
                  
                  <div class="col-lg-12">
                     <div class="iq-edit-list-data">
                        <div class="tab-content">
                           <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                              <div class="iq-card">
                                
                              <div class="iq-card-header d-flex justify-content-between" style="background-color: #b06ab3;border:#b06ab3;">
                                    <div class="iq-header-title" >
                                       <h4 class="card-title" style="color:white;">Personal Information</h4>
                                    </div>
                                 </div>

                                 <div class="iq-card-body" style="background-color: #181c2e;">
                                    
                                 <form method="post"  enctype="multipart/form-data">

                                 <div class="iq-card-body">
                                      <div class="add-img-user profile-img-edit">
                                           <label>User image:</label>
                                           <img class="profile-pic img-fluid"  alt="profile-pic"> 
                                           <div class="p-image"> 
                                              <a href="javascript:void();" class="upload-button btn iq-bg-primary">File Upload</a>
                                              <input type="file" name="img" class="file-upload" accept="images/* " > 
                                          </div>
                                      </div>
                                 </div>

                                       <div class="form-group col-sm-6">
                                             <label for="lname" style="color:white;">ID:</label>
                                             <input type="text" name="id" class="form-control" id="lname" value="<?php echo $id ?>">
                                          </div>

                                          <div class="form-group col-sm-6">
                                             <label for="lname" style="color:white;">Name:</label>
                                             <input type="text" name="name" class="form-control" id="lname" value="<?php echo $name ?>">
                                          </div>

                                          <div class="form-group col-sm-6">
                                             <label for="uname" style="color:white;">Email:</label>
                                             <input type="text" name="email" class="form-control" id="uname" value="<?php echo $email ?>">
                                          </div>

                                          <div class="form-group col-sm-12">
                                             <label style="color:white;">Address:</label>
                                             <input type="text" name="address" class="form-control" id="cname" value="<?php echo $address ?>">
                                          </div>

                                          <div class="form-group col-sm-6">
                                             <label for="cname" style="color:white;">Status:</label>
                                             <input type="text" name="status" class="form-control" id="cname" value="<?php echo $status ?>">
                                          </div>

                                      
                                       <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                                       <button type="reset" class="btn iq-bg-danger"><a href="userlist.php">Cancel</a></button>
                                    </form>
                                    </div>
                                 </div>
                              </div>
                           </div>


                           
<?php

if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $status = $_POST['status'];

    $img = $_FILES['img']['name'];
    $destination = 'images/user/' . $img;
    $extension = pathinfo($img, PATHINFO_EXTENSION);
    $tmploc = $_FILES['img']['tmp_name'];

    if (!in_array($extension, ['jpg', 'png', 'jpeg'])) {
        echo '<script>alert("Your file extension must be .jpg, .png or .jpeg")</script>';
     }  else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($tmploc, $destination)) {
           include "connect.php";

           $upd = mysqli_query($con,"UPDATE `register` SET `id`='$id',`img`='$img',`name`='$name',`email`=' $email',`address`='$address',`status`='$status' where id='$id' ");

           if($upd ){
               echo '<script>alert("data updated")</script>';
               ?>
       
               <meta http-equiv="refresh" content="0 url= http://localhost/sound/admin/userlist.php">
               <?php
           } 
           else{
             echo '<script>alert("data NOT updated")</script>';
         }  
             
                     
         } else {
             echo '<script>alert("Failed to Update User.")</script>';
         }
      }
    }
         


    


?>


                                


                          <div class="tab-content">
                           <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                              <div class="iq-card">
                                
                                 <div class="iq-card-header d-flex justify-content-between" style="background-color: #b06ab3;border:#b06ab3;">
                                    <div class="iq-header-title" >
                                       <h4 class="card-title" style="color:white;">Change Password</h4>
                                    </div>
                                 </div>

                                 </div>

                                 <div class="iq-card-body">
                                    <form method="post">
                                       <div class="form-group">
                                          <label for="cpass" style="color:white;">Current Password:</label>
                                          <input type="text" class="form-control" id="cpass" value="<?php echo $pass ?>">
                                       </div>
                                       <div class="form-group">
                                          <label for="npass" style="color:white;">New Password:</label>
                                          <input type="text" name="pass" class="form-control" id="npass">
                                       </div>
                                       <div class="form-group">
                                          <label for="vpass" style="color:white;">Verify Password:</label>
                                          <input type="text" name="conpass" class="form-control" id="vpass">
                                       </div>
                                       <button type="submit" class="btn btn-primary mr-2" name="update">Submit</button>
                                       <button type="reset" class="btn iq-bg-danger"><a href="userlist.php"> Cancel</a></button>
                                    </form>
                                 </div>
                              </div>
                           </div>

                                                    

                           <?php

if(isset($_POST['update']))
{
    $pass = $_POST['pass'];
    $conpass = $_POST['conpass'];

if($pass == $conpass)
{

    $upd = mysqli_query($con,"UPDATE `register` SET `password`='$pass' where id='$id' ");

    if($upd ){
        echo '<script>alert("data updated")</script>';
        ?>

        <meta http-equiv="refresh" content="0 url= http://localhost/sound/admin/userlist.php">
        <?php
    }   
    else{
      echo '<script>alert("data NOT updated")</script>';
  }
}
else{
   echo '<script>alert("Passwords Dont Match")</script>';
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
      <!-- music js -->
      <script src="js/music-player.js"></script>
      <!-- music-player js -->
      <script src="js/music-player-dashboard.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
   </body>
</html>