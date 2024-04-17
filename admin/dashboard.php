<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sound/Dashboard</title>
</head>

<?php include "header.php"?>
<?php include "connect.php"?>

<body>

<!-- Page Content  -->
<div id="content-page" class="content-page" style="background-color:#14182a;" >
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-6 col-md-6 col-lg-3">
            
               <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           <h3 style="font-size: 30px;font-family: 'Trebuchet MS', sans-serif;">Music Artist</h3>
                           <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>

                      <h2>  <?php
               $sql = "SELECT * from singer";

               if ($result = mysqli_query($con, $sql)) {
               
                   // Return the number of rows in result set
                   $rowcount = mysqli_num_rows( $result );
                   
                   // Display result
                    printf("%d\n", $rowcount);
                }
               ?></h2>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                           <div class="iq-map text-primary font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           <div class="d-flex align-items-center">
                              
                              <div class="rounded-circle iq-card-icon iq-bg-primary ml-3"> <i class="ri-inbox-fill"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>



               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           <h6>Music </h6>
                           <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                           <div class="iq-map text-success font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           <div class="d-flex align-items-center">
                              <h2>
                              <?php
               $sql = "SELECT * from music";

               if ($result = mysqli_query($con, $sql)) {
               
                   // Return the number of rows in result set
                   $rowcount = mysqli_num_rows( $result );
                   
                   // Display result
                    printf("%d\n", $rowcount);
                }
               ?>
                                 </h2>
                              <div class="rounded-circle iq-card-icon iq-bg-success ml-3"><i class="ri-price-tag-3-line"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>



               <div class="col-sm-6 col-md-6 col-lg-3">
               <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           <h3 style="font-size: 30px;font-family: 'Trebuchet MS', sans-serif;">Music followers</h3>
                           <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>

                      <h2>  <?php
               $sql = "SELECT * from register";

               if ($result = mysqli_query($con, $sql)) {
               
                   // Return the number of rows in result set
                   $rowcount = mysqli_num_rows( $result );
                   
                   // Display result
                    printf("%d\n", $rowcount);
                }
               ?></h2>
               
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                           <div class="iq-map text-primary font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           <div class="d-flex align-items-center">
                              
                              <div class="rounded-circle iq-card-icon iq-bg-primary ml-3"> <i class="ri-inbox-fill"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                           <h3 style="font-size: 30px;font-family: 'Trebuchet MS', sans-serif;">Music Comments</h3>
                           <span class="iq-icon"><i class="ri-information-fill"></i></span>
                        </div>
                        <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                           <div class="iq-map text-info font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           <div class="d-flex align-items-center">
                              <h2>5.2M</h2>
                              <div class="rounded-circle iq-card-icon iq-bg-info ml-3"><i class="ri-refund-line"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               </div>



               <div class="col-lg-4">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body">
                         

                     <h2>  <?php
               $sql = "SELECT * from register";

               if ($result = mysqli_query($con, $sql)) {
               
                   // Return the number of rows in result set
                   $rowcount = mysqli_num_rows( $result );
                   
                   // Display result
                    printf("%d\n", $rowcount);
                }
               ?></h2>


                
                        <p class="mb-0"style="font-size: 20px;font-family: 'Trebuchet MS', sans-serif;">Music Followers</p>
                        <h6 class="mb-4"><span class="text-success mr-2" style="font-family: 'Trebuchet MS', sans-serif;">20%</span>Positive reviews</h6>
                        <a href="addsong.php" style="color: #b06ab3;font-family: Georgia, serif;font-size: 20px;">  <button class="btn btn-danger d-block mt-6 mb-5"> Add Song</button></a>
                        <div class="mt-2">
                           <div class="d-flex align-items-center justify-content-between">
                              <p class="mt-1 mb-2">Songs</p>

                              <?php  $sql = "SELECT * from music";

                              if ($result = mysqli_query($con, $sql)) {

                               // Return the number of rows in result set
                                $rowcount = mysqli_num_rows( $result );
     
                                // Display result
                                 printf("%d\n", $rowcount);
                                    }
                               ?></h2>

                           
               
                           </div>
                           <div class="iq-progress-bar-linear d-inline-block w-100">
                              <div class="iq-progress-bar bg-primary-light iq-progress-bar-icon">
                                 <span class="bg-primary" data-percent="50"></span>
                              </div>
                           </div>
                        </div>
                        <div class="mt-2">
                           <div class="d-flex align-items-center justify-content-between">
                              <p class="mt-1 mb-2">Audio</p>

                              <?php  $sql = "SELECT * from music column5";

if ($result = mysqli_query($con, $sql)) {

 // Return the number of rows in result set
  $rowcount = mysqli_num_rows( $result );

  // Display result
   printf("%d\n", $rowcount);
      }
 ?></h2>

                            
                           </div>
                           <div class="iq-progress-bar-linear d-inline-block w-100">
                              <div class="iq-progress-bar bg-success-light iq-progress-bar-icon">
                                 <span class="bg-success" data-percent="50"></span>
                              </div>
                           </div>
                        </div>


                        <div class="mt-2">
                           <div class="d-flex align-items-center justify-content-between">
                              <p class="mt-1 mb-2">Videos</p>

                              <?php  $sql = "SELECT * from music column6";

if ($result = mysqli_query($con, $sql)) {

 // Return the number of rows in result set
  $rowcount = mysqli_num_rows( $result );

  // Display result
   printf("%d\n", $rowcount);
      }
 ?></h2>

                              
                           </div>
                           <div class="iq-progress-bar-linear d-inline-block w-100">
                              <div class="iq-progress-bar bg-danger-light iq-progress-bar-icon">
                                 <span class="bg-danger" data-percent="50"></span>
                              </div>
                           </div>
                        </div>
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







    
</body>
</html>