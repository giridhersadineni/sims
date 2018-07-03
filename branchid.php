<?php
$servername = "localhost";
$dbuser = "rajesh";
$dbpwd = "rajesh@123";
$dbname = "sims";


$branchname=$_POST['branchname'];
$address=$_POST['address'];
$phoneno=$_POST['phoneno'];
$adminname=$_POST['adminname'];
$email=$_POST['email'];

$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);

if (!$conn){
    die("connection failed:".mysqli_connect_error());
}

$sql = "INSERT INTO m_branch (branchname, address, phoneno,adminname,email)
VALUES ('$branchname','$address','$phoneno','$adminname', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>