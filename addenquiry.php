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
    $sql = "select * from m_branch";
    $result = $conn->query($sql);

}
?>

<!--another connection-->
<?php
include "config.php";
//check connection

$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
if ($conn->connect_error){
    die("connection failed:".mysqli_connect_error());
}
else{
    $sql = "select * from coursecategory";
    $result = $conn->query($sql);

}
?>
<?php include "header.php";?>
 <div class="page-wrapper">
<!-- Bread crumb -->
<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary"></h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">enquiry form</li>
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

<!-- Nav tabs -->
     <!--<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#Student" role="tab"><span>Personal Info</span></a> </li>
 <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Student2" role="tab"><span>Courses Interested</span></a> </li>
  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Student3" role="tab"><span>Contact Details</span></a> </li>
</ul>-->
<!-- Tab panes -->
<!--<div class="tab-content tabcontent-border">-->
<div class="tab-pane active" id="Student" role="tabpanel">

<div class="p-100">
<div class="card-body">
<div class="basic-form">

<form action="enquirysend.php" method="post">

<div class="row p-t-20">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Student Name</h4></p>
<input type="text" class="form-control input-focus " placeholder="firstname" name="sfname" required >
</div> </div>

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

<div class="col-md-6"
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"> <h4>College Name</h4> </p>
<input type="text" class="form-control input-focus" placeholder="college name" name="clgname" required >
</div>
</div>
</div>
<!---->

<div class="row p-t-20">

<div class="col-md-6">
 <div class="form-group"> 
 <p class="text-muted m-b-15 f-s-12"><h4>Contact Number</h4></p>
    <input type="text" class="form-control input-focus " placeholder="Enter contact" name="contactno" required>
  </div>
  </div>

   <div class="col-md-6">
   <div class="form-group">
  <p class="text-muted m-b-15 f-s-12"><h4>Alternate ContactNumber</h4></p>
 <input type="text" class="form-control input-focus" placeholder="Enter Alt contact" name="altcontactno" required>
 </div></div>
 </div>

<div class="row p-t-20">
<div class="col-md-6">
 <div class="form-group"> 
 <p class="text-muted m-b-15 f-s-12"><h4>Email</h4></p>
    <input type="email" class="form-control input-focus " placeholder="Enter email" name="mail" required>
  </div>
  </div>

  <div class="col-md-6">
   <div class="form-group">
  <p class="text-muted m-b-15 f-s-12"><h4>Interested of Joining Date</h4></p>
 <input type="date" class="form-control input-focus" name="doj">

 </div>
 </div>
 </div>

<div class="row p-t-20">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"> <h4>Highest Qualification</h4> </p>
<select name="qualification" class="form-control input-focus">
    <option name ="qualification"value="choose">--Select--</option>
    <option name ="qualification" value="ssc">SSC</option>
    <option name ="qualification" value="Inter">INTER</option>
    <option name ="qualification" value="diploma">DIPLOMA</option>
    <option name ="qualification" value="ug">UG DEGREE</option>
    <option name ="qualification" value="degree">PG DEGREE</option>
    <option name ="qualification" value="btech">B.TECH</option>
    <option name ="qualification" value="mtech">M.TECH</option>
    <option name ="qualification" value="amie">AMIE</option>
  </select>

</div>
</div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4> Are you a student?</h4></p>
<input type="radio" name="student" value="yes">Yes</input><br>
<input type="radio" name="student" value="No">No</input>
</div>
</div>
</div>


<div class="row p-t-20">

<div class="col-md-6">
 <div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Course_Id</h4>
     <input type="text" class="form-control input-focus" placeholder="courseid" name="courseids" value="" required>
  </div> 
  </div> 

  <div class="col-md-6">
   <div class="form-group">
  <p class="text-muted m-b-15 f-s-12"><h4>Course Details</h4></p>
  <select name="courseinterested" class="form-control input-focus">
    <option value="choose">--Select--</option>

    <?php
    while($row = mysqli_fetch_assoc($result)) 
     {
      ?>
      
<option name="id" value="<?php echo $row{"id"} ?>"> <?php echo $row{"name"} ?> </option>
  <?php
  }
  ?>
 
    <!--
    <option name="courseinterested" value="course">DIGITAL FOUNDATION COURSE</option>
    <option name="courseinterested" value="course">C C++</option>
    <option name="courseinterested" value="pgdca" > PGDCA</option>
    <option name="courseinterested" value="core java" > CORE JAVA</option>
    <option name="courseinterested" value="advcnce" > ADVANCED JAVA</option>
    <option name="courseinterested" value="java" > CORE JAVA AND ADVANCED JAVA</option>
    <option name="courseinterested" value="android" > ANDROID DEVELOPMENT>M.TECH</option>
    <option name="courseinterested" value="web">WEB FRONT END BASICS HTML CSS JS</option>
    <option name="courseinterested" value="react">WEB FRONT END BASICS WITH REACT</option>
    <option name="courseinterested" value="database" >DATABASES MYSQL</option>
    <option name="courseinterested" value="oracle" >DATABASES ORACLE</option>
    <option name="courseinterested" value="php" >FULLSTACK PHP MVC</option>
    <option name="courseinterested" value="asp.net" > FULLSTACK ASP.NET MVC</option>
    <option name="courseinterested" value="testing" >TESTING TOOLS SELENIUM & JMETER</option>
    <option name="courseinterested" value="it" >IT CAREER ACCELERATOR</option>
    <option name="courseinterested" value="cse" >CSE PROJECTS</option>
    <option name="courseinterested" value="hardware" >COMPUTER HARDWARE AND NETWORKING</option>-->

  </select>
  </div>
</div>

</div>

  <!--
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
   -->





 
 <!--student name close-->                                    

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
  <p class="text-muted m-b-15 f-s-12"><h4>Branch</h4></p>

  <select name="branchid" class="form-control input-focus">
  <option> ---Select--</option>
   
   
   <?php
    while($row = mysqli_fetch_assoc($result)) 
     {
      ?>
      
<option name="branchid" value="<?php echo $row{"bid"} ?>"> <?php echo $row{"branchname"} ?> </option>
  <?php
  }
  ?>
    
</select>
  

</div>
</div>



<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Attended by</h4></p>
<input type="text" class="form-control input-focus" placeholder="attended by" name="attendedby" required>
</div></div>
                  
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Remarks</h4></p>
<textarea rows="6"cols="50" class="form input-focus"  name="remarks"></textarea>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Forward On</h4></p>
<input type="date" class="form-control input-focus" name="forwardon" required>
</div></div>
</div



<center><button type="submit" class="btn btn-primary">Submit</button></center>
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
</div>
</div>
<!--end of page content-->
<?php include "footer.php";?>