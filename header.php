<?php
include "connect.php";
session_start();

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


* {
  box-sizing: inherit;
}

img {
  max-width: 100%;
  height: auto;
}

nav {
  background-color: #14182a5c;
  padding: 0 3rem;
  border-radius: 0.625rem;
}

ul {
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
  gap: 3rem;
}

li {
  list-style-type: none;
  position: relative;
  padding: 0.625rem 0 0.5rem;
}
li ul {
  flex-direction: column;
  position: absolute;
  background-color: #b06ab3;
  align-items: flex-start;
  transition: all 0.5s ease;
  width: 20rem;
  right: -3rem;
  top: 80%;
  border-radius: 0.325rem;
  gap: 0;
  padding: 1rem 0rem;
  opacity: 0;
  box-shadow: 0px 0px 100px rgba(20, 18, 18, 0.25);
  display: none;
}

ul li:hover > ul,
ul li ul:hover {
  visibility: visible;
  opacity: 1;
  display: flex;
}

.material-icons-outlined {
  color: white;
  transition: all 0.3s ease-out;
}

.material-icons-outlined:hover {
  color: white;
  transform: scale(1.25) translateY(-4px);
  cursor: pointer;
}


.profile {
  height: 50px;
  width: 60px;
  border-radius: 50%;
  cursor: pointer;
}

.sub-item {
  width: 100%;
  display: flex;
  align-items: center;
  gap: 0.725rem;
  cursor: pointer;
  padding: 0.5rem 1.5rem;
}

.sub-item:hover {
  background-color: #14182a5c;
}

.sub-item:hover .material-icons-outlined {
  color: white;
  transform: scale(1.08) translateY(-2px);
  cursor: pointer;
}

.sub-item:hover p {
  color: white;
  cursor: pointer;
}

.sub-item p {
  font-size: 0.85rem;
  color: white;
  font-weight: 500;
  margin: 0.4rem 0;
  flex: 1;
}


/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;

}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  width: 400px;
  position: fixed;
  bottom: 0;
  right: 600px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

        
<style>
    textarea {
      min-height: 150px !important;
    }
</style>
</head>
<body data-new-gr-c-s-check-loaded="14.1084.0" data-gr-ext-installed="">

  <!-- Theme loader -->
  <div id="pb_loader" class="pb-loaded" style="display: none;">Loading!</div>
        
        <div id="pb_progress" style="display: none; width: 0px;"></div>

        <!-- Begin:: Theme header -->
        <header id="pb_header">
			<div class="pb-header-container">
                <div class="pb-header-left">
                   
                    <a href="index.php" class="pb-brand pb-page-link">
                        <img src="img/logo.jpg" alt="" style="width: 70px;height:60px; border-radius: 3px; margin-right: 10px;">
                    </a>
                    <!-- Brand -->
                    <a href="index.php" class="web-title pb-brand pb-page-link" style="z-index: 1;font-family: Luminari fantasy;font-size:40px;color:#b06ab3;font-weight:bold;">Sound</a>
                </div>
                
                
                <form action="search.php" class="pb-search-form mx-sm-auto pb-page-link" id="pb-search-form"  method="post">
                    <input type="search" id="pb-search-input" name="fetch" placeholder="Search your favorites..." class="pb-page-link" style="color: var(--color-grey-30);">
                    <button style="border-color:#b06ab3;" for="pb-search-input" id="pb_search_icon" name="fetch-btn" class="btn btn-pill btn-danger pb-page-link"  >
                        <i class="pb-icon-search" ><i></i></i>
                    </button>
                </form>

                
				<nav class="navbar flex-shrink-0">
					<ul class="navbar-nav flex-row align-items-center">
					        						<li class="nav-item"></li>


                                <a href="signin.php" class="btn btn-pill btn-danger pb-page-link ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" role="img" focusable="false">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                                    </svg>
                                    <span class="ms-1"style="font-family: Georgia, serif;font-size: 15px;" >Sign in</span>
                        </a>


                            <a href="signup.php" class="btn btn-pill btn-danger pb-page-link ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" role="img" focusable="false">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                                    </svg>
                                    <span class="ms-1"style="font-family: Georgia, serif;font-size: 15px;">Signup</span>
                        </a>
                            
                        		</ul>
				</nav>
				
			</div>


		</header>
        <!-- End:: Theme header -->

        <!-- Begin:: Theme sidebar -->
        
        <header id="pb_header" style="margin-top:63px;">
			<div class="pb-header-container">

            <nav class="navbar flex-shrink-0" style="margin-left:10%;">
                <ul class="navbar-nav flex-row align-items-center" >
                    
                    
                    <li class="nav-item active" style="padding-right:30px;padding-left:30px;padding-bottom: -27px;">
                        <a class="nav-link pb-page-link" href="index.php">
                            <svg class="nav-link__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" role="img" focusable="false">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 14.5c-2.49 0-4.5-2.01-4.5-4.5S9.51 7.5 12 7.5s4.5 2.01 4.5 4.5-2.01 4.5-4.5 4.5zm0-5.5c-.55 0-1 .45-1 1s.45 1 1 1 1-.45 1-1-.45-1-1-1z"></path>
                            </svg>
                            <span class="nav-link__text" style="font-size: 18px;">Home</span>
                        </a>
                    </li>

                    <li class="nav-item" style="padding-right:30px;padding-left:30px;">
                        <a class="nav-link pb-page-link" href="latest.php">
                            <svg class="nav-link__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" role="img" focusable="false">
                                <path d="M20 2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 5h-3v5.5a2.5 2.5 0 0 1-5 0 2.5 2.5 0 0 1 2.5-2.5c.57 0 1.08.19 1.5.51V5h4v2zM4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6z"></path>
                            </svg>
                            <span class="nav-link__text"style="font-size: 18px;">New Release</span>
                        </a>
                    </li>
                    
                    <li class="nav-item" style="padding-right:30px;padding-left:30px;">
                        <a class="nav-link pb-page-link" href="category.php">
                            <svg class="nav-link__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" role="img" focusable="false">
                                <path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"></path>
                            </svg>
                            <span class="nav-link__text"style="font-size: 18px;">Categories</span>
                        </a>
                    </li>
                    
                    <li class="nav-item" style="padding-right:30px;padding-left:30px;">
                        <a class="nav-link pb-page-link" href="album.php">
                            <svg class="nav-link__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" role="img" focusable="false">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 14.5c-2.49 0-4.5-2.01-4.5-4.5S9.51 7.5 12 7.5s4.5 2.01 4.5 4.5-2.01 4.5-4.5 4.5zm0-5.5c-.55 0-1 .45-1 1s.45 1 1 1 1-.45 1-1-.45-1-1-1z"></path>
                            </svg>
                            <span class="nav-link__text"style="font-size: 18px;">Album</span>
                        </a>
                    </li>
                    
                    <li class="nav-item" style="padding-right:30px;padding-left:30px;">
                        <a class="nav-link pb-page-link" href="artist.php">
                            <svg class="nav-link__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" role="img" focusable="false">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <span class="nav-link__text"style="font-size: 18px;">Artist</span>
                        </a>
                    </li>
                    
                    <li class="nav-item" style="padding-right:30px;padding-left:30px;">
                        <a class="nav-link pb-page-link" href="trending.php">
                            <svg class="nav-link__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" role="img" focusable="false">
                                <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z"></path>
                            </svg>
                            <span class="nav-link__text"style="font-size: 18px;">Trending</span>
                        </a>
                    </li>

                    <li class="nav-item" style="padding-right:30px;padding-left:30px;">
                        <a class="nav-link pb-page-link" href="genre.php">
                            <svg class="nav-link__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" role="img" focusable="false">
                                <path d="M15 6H3v2h12V6zm0 4H3v2h12v-2zM3 16h8v-2H3v2zM17 6v8.18c-.31-.11-.65-.18-1-.18-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3V8h3V6h-5z"></path>
                            </svg>
                            <span class="nav-link__text"style="font-size: 18px;">Genre</span>
                        </a>
                    </li>



                     
                    <?php 
                    
                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                    ?>
                  <nav>
      <ul>
       

          <?php

$sel = mysqli_query($con,"select * from register");
$row = mysqli_num_rows($sel);
$row = mysqli_fetch_assoc($sel);

if($row > 0)
{
    $sel = mysqli_query($con,"select * from register where name='$_SESSION[name]'");
        ?>
 <li>
          <img src="<?php echo"admin/images/user/".$row['img']?>" class="profile" />
         
                            
 <?php


}

?>


          <ul>
            <li class="sub-item">
            <button id="logout" onclick="openForm()" class="btn btn-pill btn-danger pb-page-link dropdown-content open-button" style="text-decoration:none;padding-left: 10px;padding-right: 10px;" >
                            <span>Update Profile</span>
                            </button>         
            </li>





            <li class="sub-item">
                <form method="post">
                <button id="logout" name="logout" class="btn btn-pill btn-danger pb-page-link dropdown-content" style="text-decoration:none;padding-left: 10px;padding-right: 10px;" >
                            <span>Logout</span>
                            </button>
                </form>
                            <?php
                            
                            if(isset($_POST['logout']))
                                {
                                    include "connect.php";

                                    session_start();
                                    $q=mysqli_query($con,"update register set status='InActive' where name='$_SESSION[name]'");
                                    session_destroy();
                                    
                                    session_unset();
                                    header('location:index.php');
                        ?>
  <meta http-equiv="refresh" content="0 url= http://localhost/sound/index.php">
                       <?php

                                }
                            
                            ?>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
                    

                        <?php
                    }
                    ?>



                    
                </ul>
            </nav>


            <div class="form-popup" id="myForm" style="background-color: #b06ab3 ;">
  <form  class="form-container" method="post"  enctype="multipart/form-data" style="background-color: #b06ab3 ;">
    <h1>Login</h1>

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


                                          <div class="form-group col-sm-12">
                                             <label for="lname" style="color:white;">Name:</label>
                                             <input type="text" name="name" class="form-control" id="lname" >
                                          </div>

                                          <div class="form-group col-sm-12">
                                             <label for="uname" style="color:white;">Email:</label>
                                             <input type="text" name="email" class="form-control" id="uname" >
                                          </div>

                                          <div class="form-group col-sm-12">
                                             <label style="color:white;">Address:</label>
                                             <input type="text" name="address" class="form-control" id="cname" >
                                          </div>

                                          <div class="form-group col-sm-6">
                                             <label for="cname" style="color:white;">Old Password:</label>
                                             <input type="password" name="oldpass" class="form-control" id="cname" >
                                          </div>

                                           <div class="form-group col-sm-6">
                                             <label for="cname" style="color:white;">New Password:</label>
                                             <input type="password" name="newpass" class="form-control" id="cname" >
                                          </div>

    <button type="submit" name="submit" class="btn">Update</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>


                           
    <?php

if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];

    $img = $_FILES['img']['name'];
    $destination = 'admin/images/user/' . $img;
    $extension = pathinfo($img, PATHINFO_EXTENSION);
    $tmploc = $_FILES['img']['tmp_name'];

    if (!in_array($extension, ['jpg', 'png', 'jpeg'.'pdf'])) {
        echo '<script>alert("Your file extension must be .jpg, .png or .jpeg or .pdf")</script>';
     }  else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($tmploc, $destination)) {
           include "connect.php";
           $upd = mysqli_query($con,"UPDATE `register` SET `img`='$img',`name`='$name',`email`=' $email',`address`='$address',`password`='$newpass' where password='$oldpass' ");

           if($upd ){
               echo '<script>alert("data updated")</script>';
               ?>
       
               <meta http-equiv="refresh" content="0 url= http://localhost/sound/index.php">
               <?php
           } 
           else{
             echo '<script>alert("data NOT updated")</script>';
         }  
        }
                     
         else {
             echo '<script>alert("Failed to Update User.")</script>';
         }
      }
    }

?>




  </form>
</div>






<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

            </div>
		</header>




      
    
</body>
</html>