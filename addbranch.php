<?php include "header.php";?>
<?php
if(isset($_POST["submit"])){
$servername = "localhost";
$dbuser = "sims";
$dbpwd = "sai@12345";
$dbname = "sims";

$branchname=$_POST["branchname"];
$adminname=$_POST["adminname"];
$phoneno=$_POST["phoneno"];
$mail=$_POST["mail"];
$address=$_POST["address"];
$line2=$_POST["line2"];
$mandal=$_POST["mandal"];
$city=$_POST["city"];
$state=$_POST["state"];
$pincode=$_POST["pincode"];


$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);

if (!$conn){
    die("connection failed:".mysqli_connect_error());
}

$sql = "INSERT INTO m_branch (branchname, adminname,phoneno,mail,address,line2, mandal,city,state,pincode)
VALUES ('$branchname', '$adminname','$phoneno','$mail','$address','$line2','$mandal','$city','$state','$pincode')";

if ($conn->query($sql) === TRUE) {
  $toast=true;
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>


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
            <!--end of page content-->

               <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-12">



<div class="card card-outline-primary">
                            <center>
                            <div class="card-header">

                                <h4 class="m-b-0 text-white">BRANCH FORM</h4>
                                <?php  if($toast){
                                    echo '<script>alert("Branch Added Succfully");</script>';
                                    }?>                    
                            </div>
</center>

<br>

                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="addbranch.php" method="POST">
                                    <br>
                                    <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>Branch Name</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="enter Branch Name" name="branchname" required>
                                        </div>
                                       
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>Branch Head</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="adminname" name="adminname" requrired>
                                        </div>
                                        <div class="row p-t-20">
                                          <div class="col-md-6">
                                         <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>Contact Number</h4></p>
                                            <input type="text" class="form-control input-focus " placeholder="Enter contact" name="phoneno" required></div></div>
                                            <div class="col-md-6">
                                         <div class="form-group">

                                            <p class="text-muted m-b-15 f-s-12"><h4>Email</h4></p>
                                            <input type="email" class="form-control input-focus" placeholder="Enter Email-id" name="mail" required> 
                                        </div></div></div>


                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>ADDRESS:</h4></p>
                                           
                                        </div>
                                       <div class="row">
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>Address Line1</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="Address Line1" name="address" required>
                                          
                
                                        </div></div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>Street/Village/Area</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="Street" name="line2" required>
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
                                            <p class="text-muted m-b-15 f-s-12"><h4>City</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="City" name="city" required>
                                        </div></div>
                                        </div>
                                        <div class="row">
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>State</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="State" name="state" required>
                                        </div></div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12"><h4>Pincode</h4></p>
                                            <input type="text" class="form-control input-focus" placeholder="Pincode" name="pincode" required>
                                        </div></div>
                                        </div>
                              



                                         <br>
                                      
                                      <p align="right"> <input type="submit" style="height:45px;width:85px" class="button" name="submit" value="Add Branch"></p>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                      <!-- /# card -->
                  </div>
                  <!-- /# column -->
              </div>
<?php include "footer.php";?>



