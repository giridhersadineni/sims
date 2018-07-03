<?php include "header.php";?>
 <div class="page-wrapper">
<!-- Bread crumb -->
<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary"></h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Dashboard</li>
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
<h4 class="m-b-0 text-white">ENQUIRY FORM</h4>
</div>
</center>
<div class="col-md-12">
<div class="card">
<div class="card-body">
<h4 class="card-title"></h4>
<!-- Nav tabs -->
     <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#Student" role="tab"><span>Personal Info</span></a> </li>
 <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Student2" role="tab"><span>Courses Interested</span></a> </li>
  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Student3" role="tab"><span>Contact Details</span></a> </li>
</ul>
<!-- Tab panes -->
<div class="tab-content tabcontent-border">
<div class="tab-pane active" id="Student" role="tabpanel">
<div class="p-100">
<div class="card-body">
<div class="basic-form">
<form action="enquirysend.php" method="post">
<div class="row p-t-20">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Student Name</h4></p>
<input type="text" class="form-control input-focus " placeholder="firstname" name="sfname" required ></div></div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4> Lastname</h4></p>
<input type="text" class="form-control input-focus " placeholder="lastname" name="slname" required >
</div></div></div>
<!--student name close-->
<div class="row p-t-20">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Father Name</h4></p>
<input type="text" class="form-control input-focus " placeholder="firstname" name="fname" required ></div></div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Lastname</h4></p>    
<input type="text" class="form-control input-focus " placeholder="lastname" required >
</div></div></div>
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4> Are you a student?</h4></p>
<input type="radio" name="student" value="1">Yes</input><br>
<input type="radio" name="student" value="0">No</input>
</div>
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"> <h4>College Name</h4> </p>
<input type="text" class="form-control input-focus" placeholder="college name" name="clgname" required >
</div>
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"> <h4>Highest Qualification</h4> </p>
<select name="qualification">
    <option value="choose">choose</option>
    <option value="ssc">SSC</option>
    <option value="Inter">INTER</option>
    <option value="diploma">DIPLOMA</option>
    <option value="ug">UG DEGREE</option>
    <option value="degree">PG DEGREE</option>
    <option value="btech">B.TECH</option>
    <option value="mtech">M.TECH</option>
    <option value="amie">AMIE</option>
  </select>
</div>
</div>
</div>
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Student2" role="tab"><span>Next</span></a> </li></ul>


 </div>
</div>                                                                                                 
<div class="tab-pane  p-20" id="Student2" role="tabpanel">
<div class="form-group">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Course_Id</h4>
<input type="text" class="form-control input-focus" placeholder="courseid" name="courseids" value="1" required>
</div></div></div
<p class="text-muted m-b-15 f-s-12"><h4>Course Details</h4></p>
  <input type="checkbox" name="courseinterested" value="course">DIGITAL FOUNDATION COURSE<br>
  <input type="checkbox" name="courseinterested" value="c c++"> C C++<br>
  <input type="checkbox" name="courseinterested" value="pgdca" > PGDCA<br>
  <input type="checkbox" name="courseinterested" value="core java" > CORE JAVA<br>
  <input type="checkbox" name="courseinterested" value="advcnce" > ADVANCED JAVA<br>
  <input type="checkbox" name="courseinterested" value="java" > CORE JAVA AND ADVANCED JAVA<br>
  <input type="checkbox" name="courseinterested" value="android" > ANDROID DEVELOPMENT<br>
  <input type="checkbox" name="courseinterested" value="web" >WEB FRONT END BASICS HTML CSS JS<br>
  <input type="checkbox" name="courseinterested" value="angular" >WEB FRONT END BASICS WITH ANGULAR<br>
  <input type="checkbox" name="courseinterested" value="react">WEB FRONT END BASICS WITH REACT<br>
  <input type="checkbox" name="courseinterested" value="database" >DATABASES MYSQL<br>
  <input type="checkbox" name="courseinterested" value="oracle" >DATABASES ORACLE<br>
  <input type="checkbox" name="courseinterested" value="php" >FULLSTACK PHP MVC<br>
  <input type="checkbox" name="courseinterested" value="asp.net" > FULLSTACK ASP.NET MVC<br>
  <input type="checkbox" name="courseinterested" value="testing" >TESTING TOOLS SELENIUM & JMETER<br>
  <input type="checkbox" name="courseinterested" value="it" >IT CAREER ACCELERATOR<br>
  <input type="checkbox" name="courseinterested" value="cse" >CSE PROJECTS<br>
  <input type="checkbox" name="courseinterested" value="hardware" >COMPUTER HARDWARE AND NETWORKING<br>
  <input type="checkbox" name="courseinterested" value="pentesting" >PENTESTING <br>
</div><br>
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Interested Date of joining</h4></p>
<input type="date" name="doj" value=""><br>
</div>

<ul class="nav nav-tabs" role="tablist" align="center">
<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Student" role="tab"><span>Previous</span></a> </li></ul>
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Student3" role="tab"><span>Next</span></a> </li></ul>
</div>
  <div class="tab-pane p-20" id="Student3" role="tabpanel">
     <div class="form-group">
  <p class="text-muted m-b-15 f-s-12"><h4>Communication Details</h4></p>
       <div class="row p-t-20">
    <div class="col-md-6">
      <div class="form-group">
  <p class="text-muted m-b-15 f-s-12"><h4>Contact Number</h4></p>
      <input type="text" class="form-control input-focus " placeholder="Enter contact" name="contactno" required></div></div>
   <div class="col-md-6">
          <div class="form-group">
  <p class="text-muted m-b-15 f-s-12"><h4>Alternate ContactNumber</h4></p>
 <input type="text" class="form-control input-focus" placeholder="Enter Alt contact" name="altcontactno" required>
 </div></div></div>
<!--student name close-->                                    
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Mail-id</h4></p>
<input type="text" class="form-control input-focus" placeholder="enter your mail-id" name="mail" required>
</div>
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>ADDRESS:</h4></p>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Address Line1</h4></p>
<input type="text" class="form-control input-focus" placeholder="H.No" name="hno" required>
</div></div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Street/Village/Area</h4></p>
<input type="text" class="form-control input-focus" placeholder="Street" name="street" required>
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
<div class="row">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Pincode</h4></p>
<input type="text" class="form-control input-focus" placeholder="Pincode" name="pincode" required>
</div></div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>State:</h4></p>
<input type="text" class="form-control input-focus" placeholder="state" name="state" required>
</div>
</div>                
</div>      
<div class="row">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Branch Id</h4></p>
<input type="text" class="form-control input-focus" placeholder="branch id" name="branch-id" required>
</div></div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Attended by</h4></p>
<input type="text" class="form-control input-focus" placeholder="attended by" name="attendedby" required>
</div></div>
                  
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Remarks</h4></p>
<input type="text" class="form-control input-focus" placeholder="remarks" name="remarks" required>
</div>
</div>
</div
<center><button class="button">Submit</button></center>
</div>
</form>
</div>
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