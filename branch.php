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
<li class="breadcrumb-item active">branchid</li>
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
<h4 class="m-b-0 text-white">Branch Details</h4>
</div>
</center>

                            
<div class="card-body">
<div class="basic-form">
<form action="branchdetails.php" method="POST">
     <div class="row p-t-20"><div class="col-md-6"><div class="form-group">
         <p class="text-muted m-b-15 f-s-12"><h4>Branch name</h4></p>
      <input type="text" class="form-control input-focus " placeholder="Enter branch " name="branchname"></div></div>
        <div class="col-md-6">
      <div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Admin name</h4></p>
<input type="text" class="form-control input-focus " placeholder="Enter name" name="adminname">
</div>
</div>
</div>
<div class="row p-t-20">
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4>Email</h4></p>
<input type="text" class="form-control input-focus " placeholder="Enter email" name="email"></div></div>
<div class="col-md-6">
<div class="form-group">
<p class="text-muted m-b-15 f-s-12"><h4> Phone Number</h4></p>
<input type="text" class="form-control input-focus " placeholder="Phone number" name="phoneno">
</div>
</div>
</div>
<div class="form-group">
<label for="address">Address</label><br>
<textarea rows="10"cols="80" class="form input-focus" id="address" placeholder="Enter address"name="address"></textarea>
</div>


<!--student name close-->


                              
  <br>                     
   <p> <input type="submit" class="button" value="Add ">
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