<?php include "header.php";?>
<?php
    if(isset($_POST["submit"])){
            echo '<h1>inside submit</h1>';
            include 'config.php';
            $firstname=$_POST["sfname"];
            $lastname=$_POST["slname"];
            $fathername=$_POST["fname"];
            $student=$_POST["student"];
            $college=$_POST["clgname"];
            $qualification=$_POST["qualification"];
            $courseids=$_POST["courseid"];
            $doj=$_POST["intrddate"];
            $phoneno=$_POST["contactno"];
            $alternateno=$_POST["altcontactno"];
            $email=$_POST["mail-id"];
            $addressline1=$_POST["hno"];
            $addressline2=$_POST["street"];
            $mandal=$_POST["mandal"];
            $district=$_POST["district"];
            $pincode=$_POST["pincode"];
            $state=$_POST["state"];
            $attendedby=$_POST["attendedby"];
            $branchid=$_POST["branch-id"];
            $remarks=$_POST["remarks"];
            $courseinterested=implode(",",$_POST["coursesinterested"]);
            echo $courseinterested;
            $conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
            if (!$conn){
                echo '<script>alert("SERVER UNREACHABLE! CONTACT 9676211990")</script>';
                header("Location:","error.php?error=".mysqli_connect_error);
                
            }
            $sql = "INSERT INTO `enquiries` ( `firstname`, `lastname`, `fathername`, `student`, `college`, `qualifcation`, `courseids`, `courseinterested`, `doj`, `phoneno`, `alternateno`, `email`, `address line 1`, `address line 2`, `mandal`, `district`, `pincode`, `state`, `attendedby`, `branchid`, `remarks`) VALUES ('".$firstname."','".$lastname."','".$fathername."','".$student."','".$college."','".$qualification."',$student,'".$courseinterested."','".$doj."','".$phoneno."','".$alternateno."','".$email."','".$addressline1."','".$addressline2."','".$mandal."','".$district."','".$pincode."','".$state."','attendedby',5,'remarks')";
            if ($conn->query($sql) === TRUE) {
                echo '<script>alert("Added Enquiry Successfully");</script>';
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
                    <h3 class="text-primary">Add Enquiry</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Enquiries</a></li>
                        <li class="breadcrumb-item active">Add Enquiry</li>
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
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile8" role="tab"><span>Personal Info</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profiles8" role="tab"><span>Courses Interested</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages8" role="tab"><span>Contact Details</span></a> </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active" id="profile8" role="tabpanel">
                                        <div class="p-100">
                                        <div class="card-body">
                                
                                <div class="basic-form">
                        <form action="addenquiry.php" method="POST">
                                    <div class="row p-t-20">
                                          <div class="col-md-6">
                                         <div class="form-group">
                                           <p class="text-muted m-b-15 f-s-12"><h4>Student Name</h4></p>
                                          
                                            <input type="text" class="form-control input-focus " placeholder="firstname" name="sfname" required ></div></div>
                                              
                                            <div class="col-md-6">
                                        <div class="form-group">

                                            <p class="text-muted m-b-15 f-s-12"><h4> Lastname</h4></p>
                                            <input type="text" class="form-control input-focus " placeholder="lastname" name="slname" required 
                                            >
                                      </div></div></div>
                                           
<!--student name close-->
<div class="row p-t-20">
                                          <div class="col-md-12">
                                         <div class="form-group">
                                           <p class="text-muted m-b-15 f-s-12"><h4>Father Name</h4></p>
                                           <input type="text" class="form-control input-focus " placeholder="lastname" name="fname" required 
                                            >
                                      </div></div></div>

                                        <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12" required><h4> Are you a student?</h4></p>
                                        <input type="radio" name="student" value="1">Yes</input><br>
                                        <input type="radio" name="student" value="0">No</input>
                                     
 

                                        </div>

                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"> <h4>College Name</h4> </p>
                                            <input type="text" class="form-control input-flat" placeholder="college name" name="clgname" required>
                                        </div>
                                        <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12" required> <h4>Highest Qualification</h4> </p>
                                        <select name="qualification">
    <option value="choose">choose</option>
    <option value="ssc">SSC</option>
    <option value="inter">INTER</option>
    <option value="diploma">DIPLOMA</option>
    <option value="ug degree">UG DEGREE</option>
    <option value="pg degree">PG DEGREE</option>
    <option value="b tech">B.TECH</option>
    <option value="m tech">M.TECH</option>
    <option value="amie">AMIE</option>
  </select>
</div>

                                    
                                </div>
</div>

                                            </div>
</div>
                               
                                    
                                   
                                    <div class="tab-pane  p-20" id="profiles8" role="tabpanel">
                                    <div class="form-group">
                                    <div class="row">
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>Course_ID
                                            <input type="text" class="form-control input-focus" placeholder="courseid" name="courseid" value="1" required>
                                        </div></div></div>

                                           <p class="text-muted m-b-15 f-s-12" required><h4>Course Details</h4></p>
                                           <input type="checkbox" name="coursesinterested[]" value="DIGITAL FOUNDATION COURSE">DIGITAL FOUNDATION COURSE<br>
  <input type="checkbox" name="coursesinterested[]" value="C C++"> C C++<br>
  <input type="checkbox" name="coursesinterested[]" value="PGDCA" > PGDCA<br>
  <input type="checkbox" name="coursesinterested[]" value="CORE JAVA" > CORE JAVA<br>
  <input type="checkbox" name="coursesinterested[]" value="ADVANCED JAVA" > ADVANCED JAVA<br>
  <input type="checkbox" name="coursesinterested[]" value="CORE JAVA AND ADVANCED JAVA" > CORE JAVA AND ADVANCED JAVA<br>
  <input type="checkbox" name="coursesinterested[]" value="ANDROID DEVELOPMENT" > ANDROID DEVELOPMENT<br>
  <input type="checkbox" name="coursesinterested[]" value="WEB FRONT END BASICS HTML CSS JS" >WEB FRONT END BASICS HTML CSS JS<br>
  <input type="checkbox" name="coursesinterested[]" value="WEB FRONT END BASICS WITH ANGULAR" >WEB FRONT END BASICS WITH ANGULAR<br>
  <input type="checkbox" name="coursesinterested[]" value="WEB FRONT END BASICS WITH REACT">WEB FRONT END BASICS WITH REACT<br>
  <input type="checkbox" name="coursesinterested[]" value="DATABASES MYSQL" >DATABASES MYSQL<br>
  <input type="checkbox" name="coursesinterested[]" value="DATABASES ORACLE" >DATABASES ORACLE<br>
  <input type="checkbox" name="coursesinterested[]" value="FULLSTACK PHP MV" >FULLSTACK PHP MVC<br>
  <input type="checkbox" name="coursesinterested[]" value="FULLSTACK ASP.NET MVC" > FULLSTACK ASP.NET MVC<br>
  <input type="checkbox" name="coursesinterested[]" value="TESTING TOOLS SELENIUM & JMETER" >TESTING TOOLS SELENIUM & JMETER<br>
  <input type="checkbox" name="coursesinterested[]" value="IT CAREER ACCELERATOR" >IT CAREER ACCELERATOR<br>
  <input type="checkbox" name="coursesinterested[]" value="CSE PROJECTS" >CSE PROJECTS<br>
  <input type="checkbox" name="coursesinterested[]" value="COMPUTER HARDWARE AND NETWORKING" >COMPUTER HARDWARE AND NETWORKING<br>
  <input type="checkbox" name="coursesinterested[]" value="PENTESTING" >PENTESTING <br>
</div><hr>
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Interested Date of joining</h4></p>
<input type="date" name="intrddate" value="date"><br>
</div>
                                    </div>
                                    <div class="tab-pane p-20" id="messages8" role="tabpanel">
                                    <div class="form-group">
                                           <p class="text-muted m-b-15 f-s-12"><h4>Communication Details</h4></p>
                                           <div class="row p-t-20">
                                         <div class="col-md-6">
                                         <div class="form-group">

                                            <p class="text-muted m-b-15 f-s-12"><h4>Phone Number</h4></p>
                                            <input type="text" class="form-control input-focus " placeholder="Enter phoneno" name="contactno" required></div></div>
                                            <div class="col-md-6">
                                         <div class="form-group">

                                            <p class="text-muted m-b-15 f-s-12"><h4>Alternate ContactNumber</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="Enter Alt phoneno" name="altcontactno">
                                        </div></div></div>
<!--student name close-->


                                      
                                         <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>Email</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="enter your email" name="mail-id" required >
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
                                            <p class="text-muted m-b-15 f-s-12"><h4>State</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="state" name="state" required>
                                        </div></div>
                  
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
                                        </div>

<center><input type="submit" value="Add an Enquiry" class="btn-danger" name="submit"></center>
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