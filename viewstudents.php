<?php include "header.php";?>
<?php
include "config.php";
//check connection
$conn=mysqli_connect($servername,$dbuser,$dbpwd,$dbname);
if ($conn->connect_error){
    die("connection failed:".mysqli_connect_error());
}
else{
    $sql = "select * from students";
    $result = $conn->query($sql);
}
?>

<!-- End Left Sidebar  -->
<!-- Page wrapper  -->
<div class="page-wrapper">
<!-- Bread crumb -->
<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">Dashboard</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Student Details</li>
</ol>
</div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
<!-- Start Page Content -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<h4 class="card-title">Student Table</h4>
<div class="table-responsive m-t-40">
<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
<th>Student ID</th>
<th>First name</th>
<th>Last name</th>
<th>Father name</th>
<th>Phone</th>
<th>Father Phone</th>
<th>Alternate Phone</th>
<th>Email</th>
<th>Actions</th>
</tr>
</thead>
<?php

if ($result->num_rows > 0) {
    // output data of each row
while($row = mysqli_fetch_assoc($result)) {
echo "<tr>";
echo "<td><a href='studentdetails.php?id=". $row["sid"]."'>".$row["sid"]."</a></td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" .$row["fathername"]. "</td><td>" . $row["fatherphone"]. "</td><td>" . $row["phone"]. "</td><td>"  . $row["emailid"]."</td>";

echo '<td><a href="studentdetails.php?id='.$row["sid"].'" class="btn btn-success">View</a></td></tr>';
    }
} else {
echo '<tr><td colspan="5">No Branches - Empty Table</td></tr>';
}
?>
<?php 
mysqli_close($conn);
?> 
</table>
<!-- End PAge Content -->
</div>
<!-- End Container fluid  -->
<!-- footer -->
<?php include "footer.php";?>