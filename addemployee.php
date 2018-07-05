<?php include "header.php";?>
<head>
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
<div class="container-fluid">
                <!-- Start Page Content -->
<div class="row">
<div class="col-lg-12">
<div class="card card-outline-primary">
<center>
<div class="card-header">
<h4 class="m-b-0 text-white">EMPLOYEE REGISTRATION FORM</h4>
</div>                           
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


<form action="employeedetails.php" method="POST">                            
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
</div></div></div>
<!--student name close-->
<div class="row p-t-20">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Father Name</h4></p>
<input type="text" class="form-control input-focus " placeholder="Enter name" name="fname" required></div></div>
</div>
<!--student name-->
                                    
<!--student name close-->

<!--student name-->
<div class="row p-t-20">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>DOB</h4></p>
<input type="date" class="form-control input-focus " placeholder="dd/mm/yyyy" name="dob" value="date" required></div></div>

<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Age</h4></p>
<input type="text" class="form-control input-focus" placeholder="Enter Age" name="age" required >
</div></div></div>
<!--student name close-->
<div class="row p-t-20">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Qualification</h4></p>
<select name="qualification">
<option value="B.Tech">B.Tech</option>
<option value="Intermediate">Intermediate</option>
<option value="SSC" selected>SSC</option>   
</select>
<br><br><br>
</div>
</div>                 
<div class="form-group">
<label>Designation :</label>
<select class="form-control" name="designation">
<option selected>--Select--</option>
<option value="designation">Admin</option>
<option value="designation">recptionist</option>
<option value="designation">Cashier</option>
>
</select>
</div></div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>DOJ</h4></p>
<input type="date" class="form-control input-focus " placeholder="dd/mm/yyyy" name="doj"  value="date" required></div></div>
<ul  align="right" class="nav nav-tabs" role="tablist">
<li class="nav-item"> <a class="nav-link" align="right" data-toggle="tab" href="#profiles8" role="tab"></a> </li>
</ul>

<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employee2" role="tab"><span>Next</span></a> </li></ul>
</div>
</div>
</div>
</div>
<div class="tab-pane  p-20" id="employee2" role="tabpanel">
<div class="row p-t-20">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Phone Number</h4></p>
<input type="text" class="form-control input-focus " placeholder="Enter contact" name="contactno" required></div></div>
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
<input type="text" class="form-control input-focus " placeholder="Enter Aadhar..." name="adharcardno" required></div></div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>PanCard Number</h4></p>
<input type="text" class="form-control input-focus" placeholder="Enter Pan..." name="pancardno" required>
</div></div></div>
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Email</h4></p>
<input type="text" class="form-control input-focus" placeholder="enter your email" name="email" required>
</div>
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"> <h4>Employee Type</h4> </p>
<select name="etype">
<option value="b1">Manager</option>
<option value="b2">Executive</option>
<option value="b3">Cashier</option>
</select>
</div>
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"> <h4>Branch Id</h4> </p>
<select name="branchid">
<option value="branchid">b1</option>
<option value="branchid">b2</option>
<option value="branchid">b3</option>
</select>
</div>
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>ADDRESS:</h4></p>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Address Line1</h4></p>
<input type="text" class="form-control input-focus" placeholder="Address Line1" name="address1" required>
</div></div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Street/Village/Area</h4></p>
<input type="text" class="form-control input-focus" placeholder="Street" name="address2" required>
</div></div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Mandal</h4></p>
<input type="text" class="form-control input-focus" placeholder="Mandal" name="mandal" required>
</div></div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>District</h4></p>
<input type="text" class="form-control input-focus" placeholder="District" name="district" required>
</div></div>
</div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Pincode</h4></p>
<input type="text" class="form-control input-focus" placeholder="Pincode" name="pincode">
</div></div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>State</h4></p>
<input type="text" class="form-control input-focus" placeholder="State" name="state">
</div></div>
</div>
<ul class="nav nav-tabs" role="tablist" align="center">
<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employee" role="tab"><span>Previous</span></a> </li></ul>
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#employee3" role="tab"><span>Next</span></a> </li></ul>
<!-- <ul class="nav nav-tabs" role="tablist">
<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile8" role="tab"><span>Prev</span></a> </li>
</ul> -->
                           
 <!--<p align="center"> <button style="height:45px;width:85px" id="profile8" class="button">PREV</button>
 <button style="height:45px;width:85px" id="profile8" class="button">NEXT</button></p>-->
 </div>
<div class="tab-pane p-20" id="employee3" role="tabpanel">
Upload employee's photo here:
<br>
<input type="file" multiple="false" accept="image/*" name="image" >
<br>
<br>
Upload employee's Resume here:<br>
<input type="file" id="myFile" name="file">
<br>
<br>

<!--<ul class="nav nav-tabs" role="tablist">
<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profiles8" role="tab"><span>Prev</span></a> </li>
</ul>-->
<!--<p align="left"> <button style="height:45px;width:85px" id="profile8" class="button">PREV</button></p>-->
<center><input type="submit" value="Add an Employee" class="btn-danger" name="submit"></center>
</form></div>
</div>
</div>
</div>
</div>
</div>
<!-- /# card -->
</div>
<!-- /# column -->
</div>
<!--end of page content-->
<?php include "footer.php";?>