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
                                    <form action="checkpost.php" method="POST">
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
                                        <input type="radio" name="student" value="yes">Yes</input><br>
                                        <input type="radio" name="student" value="No">No</input>
                                     
 

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
                                            <p class="text-muted m-b-15 f-s-12"><h4>Course-id
                                            <input type="text" class="form-control input-focus" placeholder="courseid" name="courseid" required>
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

                                            <p class="text-muted m-b-15 f-s-12"><h4>Contact Number</h4></p>
                                            <input type="text" class="form-control input-focus " placeholder="Enter contact" name="contactno" required></div></div>
                                            <div class="col-md-6">
                                         <div class="form-group">

                                            <p class="text-muted m-b-15 f-s-12"><h4>Alternate ContactNumber</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="Enter Alt contact" name="altcontactno">
                                        </div></div></div>
<!--student name close-->


                                      
                                         <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>Mail-id</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="enter your mail-id" name="mail-id" required >
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
                                        </div></div>
                  
</div>      
<div class="row">
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>Branch-id</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="branchid" name="branch-id">
                                        </div></div></div>
                                        <div class="row">
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>Attended By</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="taken by" name="attendedby">
                                        </div></div></div>
                                        <div class="row">
                                       <div class="col-md-12">
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>Remarks</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="remarks" name="remarks" required>
                                        </div></div></div>

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