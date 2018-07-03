<?php include "header.php";?>
<?php
$servername = "localhost";
$dbuser = "rajesh";
$dbpwd = "rajesh@123";
$dbname = "sims";
//connection 
$conn = new mysqli($servername, $dbuser, $dbpwd, $dbname);
//check connection
if ($conn->connect_error){
    die("connection failed:".mysqli_connect_error());
}
else{
    $sql = "select * from students";
    $result = $conn->query($sql);

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
<!-- Start Page Content -->

      <div class="row">
      <div class="col-md-12  toppad  pull-right col-md-offset-6 ">  
<div class="panel panel-info">
<div class="panel-heading">
<h3 class="panel-title">Student Details</h3>
</div>
<div class="panel-body">
<div class="row">
<div class="col-md-3 col-lg-3 " align="center"><img src="images\avatar-6.jpg" alt="user pic" class="img-rounded" style="width: 110px; he"/> </div>

<div class=" col-md-9 col-lg-9 "> 
<table class="table table-user-information">
<tbody>
<tr>
<td>Full Name:</td>
<td></td>
</tr>
<tr>
<td>Father Name:</td>
<td></td>
</tr>
<tr>
<td>Date of Birth:</td>
<td></td>
</tr>
<tr>
<tr>
<td>Gender:</td>
<td></td>
</tr>
<tr>
<td>Home Address:</td>
<td></td>
</tr>
<tr>
<td>Email:</td>
<td><a href="#"></a></td>
</tr>
<td>Phone Number:</td>
<td>(Landline)<br><br>(Mobile)
</td>
</tr>                    
</tbody>
</table>
<p align="right"> <input type="submit" class="button" value="Print ">

</div>
</div>
</div>
</div>
</div>
</div>



<!--end of page content-->

<?php include "footer.php";?>