<?php 
session_start();
if(!(isset($_SESSION['login'])))
{
    header("location:index.php?sessionexpired");
}
?>
<?php include 'config.php';
  $conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
  if (!$conn){
    die("connection failed:".mysqli_connect_error());
}
$gettotalstudents ="SELECT count(firstname) AS total FROM students";
$totalstudents=mysqli_query($conn,$gettotalstudents);

$gettotalcourses="SELECT count(cid) AS total FROM m_courses";
$totalcourses=mysqli_query($conn,$gettotalcourses);

$gettotalenquiries="SELECT count(enquiryid) AS total FROM enquiries";
$totalenquiries=mysqli_query($conn,$gettotalenquiries);

?>



<?php  include "header.php";?>
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
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-usd f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                <h2><?php
                                    $values=mysqli_fetch_assoc($totalstudents);
                                    $num_rows=$values['total'];
                                    echo $num_rows;
                                    ?></h2>
                                    <p class="m-b-0">Total Students</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-shopping-cart f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                <h2><?php
                                    $values=mysqli_fetch_assoc($totalenquiries);
                                    $num_rows=$values['total'];
                                    echo $num_rows;
                                    ?></h2>
                                    <p class="m-b-0">Enquires</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                  <h2><?php
                                  $values=mysqli_fetch_assoc($totalcourses);
                                  $num_rows=$values['total'];
                                  echo $num_rows;
                                  ?>
                                  </h2>
                                    <p class="m-b-0">Total Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>0</h2>
                                    <p class="m-b-0">PGDC Course</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-info"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>0</h2>
                                    <p class="m-b-0">Web Development Course</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>0</h2>
                                    <p class="m-b-0">Computer HardWare Network</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>0</h2>
                                    <p class="m-b-0">Android Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>0</h2>
                                    <p class="m-b-0">Hacking Course</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               

<?php include "footer.php";?>