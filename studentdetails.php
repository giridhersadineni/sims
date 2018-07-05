<?php include "header.php";?>
<?php
include "config.php";
//check connection

$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
//check connection
if ($conn->connect_error){
    die("connection failed:".mysqli_connect_error());
}
else{
$sql = "select * from students where sid=".$_GET['id'];
$result = $conn->query($sql);
echo "  ".$result->num_rows;
if($result->num_rows>0){
while($row=$result->fetch_assoc()) {
break;
       }
    }
}
?>
<!--Profile Pic-->
<?php
   if(isset($_POST['picsubmitted'])){
    
    $conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
//check connection
      if ($conn->connect_error){
          die("connection failed:".mysqli_connect_error());
      }
      else{
      $sql = "select * from students where sid=".$_GET['id'];
      $result = $conn->query($sql);
      echo "  ".$result->num_rows;
      if($result->num_rows>0){
      while($row=$result->fetch_assoc()) {
      break;
            }
       //FILE UPLOAD CODE
       $target_dir = "uploads/profilepics/";
       $target_file = $target_dir . basename($_FILES["profilepic"]["name"]);
       $uploadOk = 1;
       $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       // Check if image file is a actual image or fake image
       if(isset($_POST["submit"])) {
           $check = getimagesize($_FILES["profilepic"]["tmp_name"]);
           if($check !== false) {
               echo "File is an image - " . $check["mime"] . ".";
               $uploadOk = 1;
           } else {
               echo "File is not an image.";
               $uploadOk = 0;
           }
       }
       // Check if file already exists
       if (file_exists($target_dir.$row["firstname"].$row['sid'].".jpg")) {
        unlink($target_dir.$row["firstname"].$row['sid'].".jpg");
        $uploadOk = 1;
       }
       // Check file size
       if ($_FILES["profilepic"]["size"] > 1000000) 
       {
        echo "<script>alert('Your file is too large ')</script>";
           $uploadOk = 0;
       }
       // Allow certain file formats
       if($imageFileType != "jpg") {
        echo "<script>alert('Only Jpg Files can be uploaded ')</script>";
           $uploadOk = 0;
       }
       // Check if $uploadOk is set to 0 by an error
       if ($uploadOk == 0) {
             echo "<script>alert('Unable to upload the file ')</script>";   
        // if everything is ok, try to upload file
       } else {
              $target_file = $target_dir . $row["firstname"].$row["sid"].".jpg";
           if (move_uploaded_file($_FILES["profilepic"]["tmp_name"], $target_file)) {
             $nsql="update students SET `ppfilename`='".$row["firstname"].$row["sid"].".jpg'"." where sid=".$_GET["id"];
             if($conn->query($nsql)===TRUE){
              echo "<script>alert('success ')</script>";  
             }
             else{
               echo '<script>alert("'.mysqli_error($conn).'Unable to insert filename query= '.$nsql.'");</script>';
             }
             /*if($dbupdate->num_rows>0){
               while($message=$dbupdate->fetch_assoc()){
                 echo $message[0];
               }
             } 
            */
    
           } else {
               echo "Sorry, there was an error uploading your file.";
           }
       }
      }
    }
   }


?>

<style>
.button
{
    background-color:#008CBA;
    color:white
}
h3
{
    color:blue;
}
</style>
 <div class="page-wrapper">
            <!-- Bread crumb -->
<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">Student Details</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">View Student</a></li>
<li class="breadcrumb-item active">Student Details</li>
</ol>
</div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container">
<div class="row">
<div class="col-md-12  toppad  pull-right col-md-offset-6 ">  
<div class="panel panel-info">
<div class="panel-heading">
<h3 class="panel-title">Student Details</h3>
</div>
<div class="panel-body">
<div class="row">
<div class="img">
<div class="col-md-3 col-lg-3 " align="center"><img src=<?php echo '"uploads/profilepics/'.$row['ppfilename'].'"';?> alt="user pic" class="img-rounded" style="width: 150px;"/> </div>
<br>


<!--button-->
<div class="container">
  <!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Uploads
</button>
<!-- The Modal -->
<div class="modal" id="myModal">
<div class="modal-dialog">
<div class="modal-content">
<!-- Modal Header -->
<div class="modal-header">
<h4 class="modal-title">Select Photo</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<!-- Modal body -->
<form action=<?php echo '"studentdetails.php?id='.$_GET['id'].'"';?> method="POST" enctype="multipart/form-data">
<div class="modal-body">
<input type="file" id="profilepic" name="profilepic">
</div>      
<!-- Modal footer -->
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
<input type="submit" class="btn btn-success" value="Upload Photo" name="picsubmitted">
</form>
</div>       
</div>
</div>
</div>
</div>
</div>
<div class=" col-md-9 col-lg-9 "> 
<table class="table table-user-information">
<tbody>
<tr>
<td>Full Name:</td>
<td><center><?php echo $row["firstname"]." ".$row["lastname"]?></center></td>
</tr>
<tr>
<td>Father Name:</td>
<td><center><?php echo $row["fathername"]?></center></td>
</tr>
<tr>
<td>Date of Birth:</td>
<td><center><?php echo $row["dob"]?></center></td>
</tr>
<tr>
<td>Gender:</td>
<td><center><?php echo $row["gender"]?></center></td>
</tr>
<tr>
<td>Home Address:</td>
<td><center><?php echo $row["addressline1"]." ".$row["addressline2"]?></center></td>
</tr>
<tr>
<td>Email:</td>
<td><center><?php echo $row["emailid"]?></center></td>
</tr>
<td>Phone Number:</td>
<td><center><?php echo $row["phone"]?></center></td>
</tr>                    
</tbody>
</table>
<br>
<p align="right"> <input type="submit" class="button" value="Print ">
</div>
</div>
</div>
</div>
</div>
</div>
<!--end of page content-->

<?php include "footer.php";?>