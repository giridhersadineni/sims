<?php include "header.php";?>
<head>
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
                    <h3 class="text-primary">Dashboard</h3> </div>
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
                                <h4 class="m-b-0 text-white">STUDENT REGISTRATION </h4>

                            </div>
</center>

                            
                            <div class="card-body">
                                <div class="basic-form">
                <form action="checkpost.php" method="POST">
                            <div class="row p-t-20"><div class="col-md-6"><div class="form-group">
                            <p class="text-muted m-b-15 f-s-12"><h4>Student Firstname</h4></p>
                            <input type="text" class="form-control input-focus " placeholder="Enter student firstname" name="sfname"></div></div>
                            <div class="col-md-6">
                            <div class="form-group">

                        <p class="text-muted m-b-15 f-s-12"><h4>Student Lastname</h4></p>
                        <input type="text" class="form-control input-focus " placeholder="Enter student lastname">
                    </div></div></div>

                                    <div class="row p-t-20">
                                          <div class="col-md-6">
                                         <div class="form-group">

                                            <p class="text-muted m-b-15 f-s-12"><h4>Father Firstname</h4></p>
                                            <input type="text" class="form-control input-focus " placeholder="Enter Father's firstname"></div></div>
                                            <div class="col-md-6">
                                         <div class="form-group">

                                            <p class="text-muted m-b-15 f-s-12"><h4>Father Lastname</h4></p>
                                            <input type="text" class="form-control input-focus " placeholder="Enter Father's lastname">
                                        </div></div></div>

<div class="row p-t-20">
                                          <div class="col-md-6">
                                         <div class="form-group">

                                            <p class="text-muted m-b-15 f-s-12"><h4>Contact Number</h4></p>
                                            <input type="text" class="form-control input-focus " placeholder="Enter contact"></div></div>
                                            <div class="col-md-6">
                                         <div class="form-group">

                                            <p class="text-muted m-b-15 f-s-12"><h4>Alternate Contact Number</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="Enter Alt contact">
                                        </div></div></div>
<!--student name close-->


                                      
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>Email</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="enter your mail-id">
                                        </div>
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>ADDRESS:</h4></p>
                                           
                                        </div>
                                       <div class="row">
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>Address Line1</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="Address Line1">
                                          
                
                                        </div></div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>Street/Village/Area</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="Street">
                                        </div></div>
                                        </div>
                                       
                                        <div class="row">
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>Mandal</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="Mandal">
                                        </div></div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>City</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="City">
                                        </div></div>
                                        </div>
                                        <div class="row">
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>State</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="State">
                                        </div></div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>Pincode</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="Pincode">
                                        </div></div>
</div>
                              
                                        <br>                     
                                        <p align="right"> <input type="submit" class="button" value="Add Student">
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