<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php include "header.php"?>
<?php include "connect.php"?>

   <!-- Page Content  -->
   <div id="content-page" class="content-page" style="background-color:#14182a;" >
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Song Lists</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="addsong.php" class="btn btn-primary">Add New Song</a>
                        </div>
                     </div>
                     <div class="iq-card-body" style="background-color:#14182a;">
                        <div class="table-responsive">
                           <table class="data-tables table table-striped table-bordered" style="width:100%">
                              <thead>
                                 <tr>
                                    <th style="width: 5%;color:white;">id</th>
                                    <th style="width: 5%;color:white;">Image</th>
                                    <th style="width: 15%;color:white;"> Name</th>
                                    <th style="width: 15%;color:white;">singer</th>
                                    <th style="width: 10%;color:white;">audio</th>
                                    <th style="width: 10%;color:white;">video</th>
                                    <th style="width: 10%;color:white;">genre</th>
                                    <th style="width: 10%;color:white;">albumn</th>
                                    <th style="width: 10%;color:white;">year</th>
                                    <th style="width: 10%;color:white;">Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                              </tbody>
                           </table>
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

<?php
$url='img';
$sel = mysqli_query ($con,"select * from music");
$row = mysqli_num_rows($sel);

if($row > 0)

{
   while($row=mysqli_fetch_assoc($sel))
   {
      echo "<tr>";

      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['img'] . "</td>";
      echo "<td>" . $row['singer'] . "</td>";
      echo "<td>" . $row['audio'] . "</td>";
      echo "<td>" . $row['video'] . "</td>";
      echo "<td>" . $row['year'] . "</td>";
      echo "<td>" . $row['album'] . "</td>";
      echo "<td>" . $row['genre'] . "</td>";
     
  echo "</tr>";
   }
  
   
?>

<tbody>
            
<div class="flex align-items-center list-user-action">
<a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="admin-add-category.html"><i class="ri-pencil-line"></i></a>
<a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
</div>
</td>
</td>
</tr>

<?php
}
if(isset($_POST['btnsub'])){
   echo '<script type"text/javascripit"> window.location=" http://localhost/music/music.php";</script>';
}
?>
