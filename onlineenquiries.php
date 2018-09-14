<?php include "header.php";?>

<div class="page-wrapper">
<!-- Bread crumb -->
<div class="row page-titles">

<div class="col-md-5 align-self-center">

<h3 class="text-primary">Online Enquiries</h3>
 </div>

<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Enquiries</a></li>
<li class="breadcrumb-item active">Online Enquiries</li>
</ol>
</div>
</div>

<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
<!-- Start Page Content -->
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="card">
<div class="card-body">
<div class="form-validation">
<form class="form-valide" action="onlineenquirycheck.php" method="post">
<div class="form-group row">
<label class="col-lg-4 col-form-label" for="val-username">Name <span class="text-danger">*</span></label>
<div class="col-lg-6">
<input type="text" class="form-control" id="val-username" name="name" placeholder="Enter a username..">
</div>
</div>
<div class="form-group row">
<label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span></label>
<div class="col-lg-6">
<input type="text" class="form-control" id="val-email" name="email" placeholder="Your valid email..">
</div>
</div>
<div class="form-group row">
<label class="col-lg-4 col-form-label" for="val-phoneus">Phone <span class="text-danger">*</span></label>
<div class="col-lg-6">
<input type="text" class="form-control" id="val-phoneus" name="phone" placeholder="98*******">
</div>
</div>
<div class="form-group row">
<label class="col-lg-4 col-form-label" for="student">Are you a student?<span class="text-danger">*</span></label>
<div class="col-lg-6">
<select class="form-control" id="val-skill" name="student">
<option value="">Please select</option>
<option value="1">Yes</option>
<option value="0">No</option>
</select>
</div>
</div>
<div class="form-group row">
<label class="col-lg-4 col-form-label" for="val-skill">Subscribed<span class="text-danger">*</span></label>
<div class="col-lg-6">
<select class="form-control" id="val-skill" name="subscribed">
<option value="">Please select</option>
<option value="1">Yes</option>
<option value="0">No</option>
</select>
</div>
</div>
</div>
<div class="form-group row">
<label class="col-lg-4 col-form-label" for="val-suggestions">Remarks <span class="text-danger">*</span></label>
<div class="col-lg-6">
<textarea class="form-control" id="val-suggestions" name="remarks"  rows="5" placeholder="What would you like to say?"></textarea>
</div>
</div>
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Courses interested in</h4></p>
<input type="checkbox" name="course[]" value="DIGITAL FOUNDATION COURSE">DIGITAL FOUNDATION COURSE<br>
<input type="checkbox" name="course[]" value="C C++"> C C++<br>
  <input type="checkbox" name="course[]" value="PGDCA" > PGDCA<br>
  <input type="checkbox" name="course[]" value="CORE JAVA" > CORE JAVA<br>
  <input type="checkbox" name="course[]" value=" ADVANCED JAVA" > ADVANCED JAVA<br>
  <input type="checkbox" name="course[]" value="ANDROID DEVELOPMENT" > ANDROID DEVELOPMENT<br>
  <input type="checkbox" name="course[]" value="WEB FRONT END BASICS HTML CSS JS" >WEB FRONT END BASICS HTML CSS JS<br>
  <input type="checkbox" name="course[]" value="WEB FRONT END BASICS WITH ANGULAR" >WEB FRONT END BASICS WITH ANGULAR<br>
  <input type="checkbox" name="course[]" value="WEB FRONT END BASICS WITH REACT">WEB FRONT END BASICS WITH REACT<br>
  <input type="checkbox" name="course[]" value="DATABASES MYSQL" >DATABASES MYSQL<br>
  <input type="checkbox" name="course[]" value="DATABASES ORACLE" >DATABASES ORACLE<br>
  <input type="checkbox" name="course[]" value="FULLSTACK PHP MVC" >FULLSTACK PHP MVC<br>
  <input type="checkbox" name="course[]" value="FULLSTACK ASP.NET MVC" > FULLSTACK ASP.NET MVC<br>
  <input type="checkbox" name="course[]" value="TESTING TOOLS SELENIUM & JMETER" >TESTING TOOLS SELENIUM & JMETER<br>
  <input type="checkbox" name="course[]" value="IT CAREER ACCELERATOR" >IT CAREER ACCELERATOR<br>
  <input type="checkbox" name="course[]" value="CSE PROJECTS" >CSE PROJECTS<br>
  <input type="checkbox" name="course[]" value="COMPUTER HARDWARE AND NETWORKING" >COMPUTER HARDWARE AND NETWORKING<br>
  <input type="checkbox" name="course[]" value="PENTESTING" >PENTESTING <br>
</div>
<div class="form-group row">
<label class="col-lg-4 col-form-label" for="val-skill" >Branch name<span class="text-danger">*</span></label>
<div class="col-lg-6">
<select class="form-control" id="branchname" name="branchname">
<option value="">Please select</option>
<option value="B1">B1</option>
<option value="B2">B2</option>
<option value="B3">B3</option>
</select>
</div>
</div>
<div class="form-group row">
<label class="col-lg-4 col-form-label" for="val-skill">Attended by<span class="text-danger">*</span></label>
<div class="col-lg-6">
<select class="form-control" id="attendedby" name="attendedby">
<option value="">Please select</option>
<option value="Employee">Employee</option>
<option value="Admin">Admin</option>
</select>
</div>
</div>
<div class="form-group row">
<label class="col-lg-4 col-form-label"><a data-toggle="modal" data-target="#modal-terms" href="#">Terms &amp; Conditions</a> <span class="text-danger">*</span></label>
<div class="col-lg-8">
<label class="css-control css-control-primary css-checkbox" for="val-terms">
<input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1">
<span class="css-control-indicator"></span> I agree to the terms
</label>
</div>
</div>
<div class="form-group row">
<div class="col-lg-8 ml-auto">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<!--end of page content-->
<?php include "footer.php";?>