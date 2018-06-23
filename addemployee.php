
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

<?php
if(isset($_POST["submit"])){
         echo '<h1>inside submit</h1>';
     include 'config.php';
$firstname=$_POST["empfname"];
$lastname=$_POST["emplname"];
$fathername=$_POST["fname"];
$dob=$_POST["dob"];
$age=$_POST["age"];
$qualification=$_POST["qualification"];
$designation=$_POST["designation"];
$doj=$_POST["doj"];
$contactno=$_POST["contactno"];
$alternateno=$_POST["altcontactno"];
$aadharno=$_POST["adharcardno"];
$pancardno=$_POST["pancardno"];
$emailid=$_POST["email"];
$etype=$_POST["etype"];
$branchid=$_POST["branchid"];
$addressline1=$_POST["address1"];
$street=$_POST["street"];
$mandal=$_POST["mandal"];
$district=$_POST["district"];
$pincode=$_POST["pincode"];
$state=$_POST["state"];
$profile=$_POST["image"];
$empresume=$_POST["file"];
$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);

if (!$conn){
    echo '<script>alert("SERVER UNREACHABLE! CONTACT 9676211990")</script>';
                header("Location:","error.php?error=".mysqli_connect_error);
                
}

$sql = "INSERT INTO `employee` ( `firstname`, `lastname`, `fathername`, `dob`, `age`, `qualification`, `designation`, `doj`, `contactno`, `alternateno`, `aadharno`,`pancardno`,`emailid`, `addressline1`, `street`, `mandal`, `district`, `pincode`, `state`, `profile`, `empresume`) VALUES ('".$firstname."','".$lastname."','".$fathername."','".$dob."','".$age."','".$qualification."','".$designation."','".$doj."','".$contactno."','".$alternateno."','".$aadharno."','".$pancardno."','".$emailid."','".$addressline1."','".$street."','".$mandal."','".$district."','".$pincode."','".$state."','".$profile."','".$empresume."')";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Added Employee Successfully");</script>';
} 
else {
      echo '<script>alert("'.$sql."Error =".$conn->error.'");</script>';

}
$conn->close();
}
?>

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
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile8" role="tab"><span>Person details</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profiles8" role="tab"><span>Contact details</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages8" role="tab"><span>CV</span></a> </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active" id="profile8" role="tabpanel">
                                        <div class="p-100">







                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="addemployee.php" method="POST">
                                       
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
<div class="col-md-6">
                                         <div class="form-group">

                                            <p class="text-muted m-b-15 f-s-12"><h4>Designation</h4></p>
                                            <select name="designation">
                                            <option value="cashier">cashier</option>
                                            <option value="Receptionist">Receptionist</option>
                                            <option value="manager" selected>Manager</option>
    
  </select>
  <br><br><br>
                    </div></div></div>
                           
                    <div class="col-md-6">
                                         <div class="form-group">
                                       
                                            <p class="text-muted m-b-15 f-s-12"><h4>DOJ</h4></p>
                                            <input type="date" class="form-control input-focus " placeholder="dd/mm/yyyy" name="doj"  value="date" required></div></div>
                                            <ul  align="right" class="nav nav-tabs" role="tablist">
                                         <li class="nav-item"> <a class="nav-link" align="right" data-toggle="tab" href="#profiles8" role="tab"></a> </li>
                                         </ul>
                                          <!--  <p align="right"> <button style="height:45px;width:85px" id="profile8" class="button">NEXT</button></p>-->
                                    
                                </div>
                            </div>
                        </div>



                        </div>




                        <div class="tab-pane  p-20" id="profiles8" role="tabpanel">

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
    <option value="b1">b1</option>
    <option value="b2">b2</option>
    <option value="b3">b3</option>
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
                                       <!-- <ul class="nav nav-tabs" role="tablist">
                                         <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile8" role="tab"><span>Prev</span></a> </li>
                                         </ul> -->
                                         <ul class="nav nav-tabs" role="tablist">
                                         <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages8" role="tab"></a> </li>
                                         </ul>                            
 <!--<p align="center"> <button style="height:45px;width:85px" id="profile8" class="button">PREV</button>
 <button style="height:45px;width:85px" id="profile8" class="button">NEXT</button></p>-->
 </div>
<div class="tab-pane p-20" id="messages8" role="tabpanel">
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