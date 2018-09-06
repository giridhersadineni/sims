<?php 
session_start();
if(!(isset($_SESSION['login'])))
{
    header("location:index.php?sessionexpired");
}
?>

<?php include "header.php";?>


<style>
.button
{
    background-color:#008CBA;
    color:white;
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
<h3 class="text-primary">Add Employee</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
<li class="breadcrumb-item active">Add Employee</li>
</ol>
</div>
</div>
<!-- End Bread crumb -->

            <!-- Container fluid  -->
<!-- Start Page Content -->


<div class="row">
<div class="col-lg-12">
<div class="card card-outline-primary">
<center>
<div class="card-header">
<h4 class="m-b-0 text-white">EMPLOYEE REGISTRATION FORM</h4>                          
</center>
     
                
<div class="col-md-15">
<div class="card">
<div class="card-body">
<h4 class="card-title"></h4>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
</ul>
<!-- Tab panes -->
<div class="tab-content tabcontent-border">
<div class="tab-pane active" id="employee" role="tabpanel">
<div class="p-100">
<div class="card-body">
<div class="basic-form">

<form enctype="multipart/form-data" action="employeedetails.php" method="POST">                            
<!--student name-->
<div class="row p-t-20">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Employee Firstname</h4></p>
<input type="text" class="form-control input-focus " placeholder="Enter firstname" name="empfname" required></div></div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Employee Lastname</h4></p>
<input type="text" class="form-control input-focus " placeholder="Enter lastname" name="emplname" required>
</div>
</div>
</div>

<!--student name close-->
<div class="row p-t-20">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Father Name</h4></p>
<input type="text" class="form-control input-focus " placeholder="Enter name" name="fname" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Lastname</h4></p>
<input type="text" class="form-control input-focus " placeholder="Enter lastname" name="name" required>
</div>
</div>
</div>
<!--student name-->
                                    
<!--student name close-->

<!--student name-->
<div class="row p-t-20">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>DOB</h4></p>
<input type="date" class="form-control input-focus " placeholder="dd/mm/yyyy" name="dob" value="date">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Age</h4></p>
<input type="text" class="form-control input-focus" placeholder="Enter Age" name="age" >
</div>
</div>

<!--student name close-->
<div class="col-md-6">
<div class="form-group">
<label>Qualification :</label>
<select class="form-control input-focus" name="qualification">
<option selected>--Select--</option>
<option value="qualification">SCC</option>
<option value="qualification">Intermediate</option>
<option value="qualification">B.tech</option>
</select>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
<label>Designation :</label>

<select class="form-control input-focus" name="designation">

<option selected>--Select--</option>
<option value="designation">Admin</option>
<option value="designation">recptionist</option>
<option value="designation">Cashier</option>
</select>
</div>
</div>
</div>

<div class="row p-t-20">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>DOJ</h4></p>
<input type="date" class="form-control input-focus " placeholder="dd/mm/yyyy" name="doj"  value="date" >
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Email</h4></p>
<input type="text" class="form-control input-focus" placeholder="enter your email" name="email" >
</div>
</div>
</div>
</div>
</div>
</div>
<!--
<ul  align="right" class="nav nav-tabs" role="tablist">
<li class="nav-item"> <a class="nav-link" align="right" data-toggle="tab" href="#profiles8" role="tab"></a> </li>
</ul>-->
<!--
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employee2" role="tab"><span>Next</span></a> </li>
</ul>-->

<!-- first page ended-->

<div class="row p-t-20">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Phone Number</h4></p>
<input type="text" class="form-control input-focus " placeholder="Enter contact" name="contactno" >
</div></div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Alternate Phone Number</h4></p>
<input type="text" class="form-control input-focus" placeholder="Enter Alt contact" name="altcontactno">
</div></div></div>
<!--student name close-->
 <div class="row p-t-20">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>AadharCard Number</h4></p>
<input type="text" class="form-control input-focus " placeholder="Enter Aadhar..." name="adharcardno">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>PanCard Number</h4></p>
<input type="text" class="form-control input-focus" placeholder="Enter Pan..." name="pancardno" >
</div>
</div>
</div>
<!--email-->

<!--employee type-->
<div class="row p-t-20">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"> <h4>Branch Id</h4> </p>
<select class="form-control input-focus" name="branchid">
<option value="branchid">--Select--</option>
<option value="branchid">b1</option>
<option value="branchid">b2</option>
<option value="branchid">b3</option>
</select> </div>

</div> </div>
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>ADDRESS:</h4></p>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Address Line1</h4></p>
<input type="text" class="form-control input-focus" placeholder="Address Line1" name="address1">
</div></div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Street/Village/Area</h4></p>
<input type="text" class="form-control input-focus" placeholder="Street" name="address2" >
</div></div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Mandal</h4></p>
<input type="text" class="form-control input-focus" placeholder="Mandal" name="mandal" >
</div></div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>District</h4></p>
<input type="text" class="form-control input-focus" placeholder="District" name="district" >
</div></div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Pincode</h4></p>
<input type="text" class="form-control input-focus" placeholder="Pincode" name="pincode">
</div></div> 

<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>State</h4></p>
<input type="text" class="form-control input-focus" placeholder="State" name="state">
</div></div>
</div>

<!--
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employee3" role="tab"><span>Next</span></a> </li></ul>-->
 <!--<ul class="nav nav-tabs" role="tablist">
<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile8" role="tab"><span>Prev</span></a> </li>
</ul> -->
                           
 <!--<p align="center"> <button style="height:45px;width:85px" id="profile8" class="button">PREV</button>
 <button style="height:45px;width:85px" id="profile8" class="button">NEXT</button></p>-->
<div class="row">
<div class="col-md-12">
<div class="form-group">
Upload employee's photo here:
<br>
<input type="file" class="form-control input-focus" multiple="false" accept="image/*" id="image" name="image">
<br>


Upload employee's Resume here:<br>
<input type="file" class=" form-control input-focus" id="employeeresume" name="employeeresume">
<br>
</div>
</div>
</div>
<center><input type="submit" value="Add an Employee" name="submit" class="btn-success" ></center>
<!--
    <div style="float:left;">
      <button type="button" id="nextBtn" class="btn-success" href="#employee">previous</button>
    </div>
-->
</form>
</div>
</div>
</div>
</div>
</div>
<!-- /# card -->
</div>
<!-- /# column -->
</div>
</div>
<!--end of page content-->
<?php include "footer.php";?>