<?php 
session_start();
if(!(isset($_SESSION['login'])))
{
    header("location:index.php?sessionexpired");
}
?>


<?php
include "config.php";
//check connection

$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);

if ($conn->connect_error){
    die("connection failed:".mysqli_connect_error());
}
else{

    $sql = "select * from m_coursetype";
    $result = $conn->query($sql);
 
    $coursequery="select * from coursecategory";
    $courseresults= $conn->query($coursequery);
}
?>

<?php include "header.php";?>
<html>
<head>
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
<h3 class="text-primary">Add Course</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Course</li>
</ol>
</div>
</div>
</head>



<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
<!-- Start Page Content -->
<div class="row">
<div class="col-lg-12">
 <div class="card card-outline-primary">        
<center>

<div class="card-header">
<h4 class="m-b-0 text-white">COURSE FORM</h4>
</div>

</center>   

<div class="card-body">
<div class="basic-form">
<form action="coursedetails.php" method="POST">
<!--student name-->

<div class="row p-t-20">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Course name:</h4></p>
<input type="text" class="form-control input-focus " placeholder="Enter course name" name="name" required>
</div></div>

<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Branch id:</h4></p>
<input type="text" class="form-control input-focus " placeholder="Enter branch id" name="branchid" required>
</div></div></div>

<!--student name close-->

<!--student name-->



<div class="row p-t-20">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Category:</h4></p>
  
    <select name="category"  id="category" class="form-control input-focus" required>
    <option value="choose">--Select--</option>
  <?php
    while($row = mysqli_fetch_assoc($courseresults)) 
     {
    ?>
  <option name="id" value="<?php echo $row{"id"} ?>"> <?php echo $row{"name"} ?> </option>
    <?php
  }
  ?>
</select>

</div></div>

<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Type:</h4></p>
<select name="type" id="type" class="form-control input-focus" required>
<option value="choose">--Select--</option>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>
<option name="cid" value="<?php echo $row{"cid"}?>"> <?php echo $row{"coursetype"}?></option>
<?php
}
?>
</select>

</div></div></div>

<!--student name close-->  
<div class="row p-t-20">
<div class="col-md-6">                                 
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Description:</h4></p>
<textarea rows="3" cols="45" class="form-group input-focus" placeholder="Enter description" name="description" required></textarea>
</div></div>

<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Syllabus:</h4></p>
<textarea rows="3" cols="45" class="form-group input-focus" placeholder="Enter description" name="syllabus" required></textarea>
</div>
</div>
</div>

<div class="row p-t-20">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Duration:</h4></p>
<input type="text" class="form-control input-focus " placeholder="Enter Duration" name="duration" required></div></div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Fee:</h4></p>
<input type="text" class="form-control input-focus " placeholder="Enter Fee" name="fee" required>
</div></div></div>
<!--stu
<!--student name-->
<p align="right"> <button style="height:45px;width:85px" class="button">Add</button></p>
</form>
</div>
</div>
</div>
</div>
<!-- /# card -->
</div>
<!-- /# column -->
</div>
<!--end of page content-->
</html>
<?php include "footer.php";?>