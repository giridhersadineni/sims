<?php 
session_start();
if(!(isset($_SESSION['login'])))
{
    header("location:index.php?sessionexpired");
}
?>


<?php include "header.php";?>
 <div class="page-wrapper">
<!-- Bread crumb -->
<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">Add CourseType</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Masters</a></li>
<li class="breadcrumb-item active"> Coursetype</li>
</ol>
</div>
</div>
<!-- End Bread crumb -->

<!-- Container fluid  -->
<div class="container-fluid">
<!-- Start Page Content -->
<div class="card">
<center>

<div class="card-header">
<h4 class="m-b-0 text-primary display-6">Course Type </h4>
</div>
  </center><br>
<div class="card-body">
<div class="basic-form">
<form action="typedetails.php" method="POST">

<div class="form-group">
<label for="name">Course Type:</label>
<input type="text" class="form-control" id="type" placeholder="Enter course Name" name="type">
</div>
<div class="form-group">
<label for="dsp">Description:</label><br>
<textarea rows="10"cols="70" class="form" id="description" name="description"></textarea>
</div>
<button type="submit" class="btn btn-primary">Update</button>
<button type="cancel" class="btn btn-primary">Cancel</button>
</form>
</div>
</div>
</div>
<!--end of page content-->
<?php include "footer.php";?>