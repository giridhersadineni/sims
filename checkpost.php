<?php
$servername = "localhost";
$dbuser = "rajesh";
$dbpwd = "rajesh@123";
$dbname = "sims";

$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$fathername=$_POST["fathername"];
$fatherphone=$_POST["fatherphone"];
$phone=$_POST["phone"];
$phonealt=$_POST["altphone"];
$emailid=$_POST["mailid"];
$branchid=$_POST["branchid"];
$addressline1=$_POST["addressline1"];
$addressline2=$_POST["addressline2"];
$mandal=$_POST["mandal"];
$city=$_POST["city"];
$state=$_POST["state"];
$pincode=$_POST["pincode"];


$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);

if (!$conn){
    die("connection failed:".mysqli_connect_error());
}

$sql = "INSERT INTO students (firstname, lastname,fathername,fatherphone,phonealt,phone,emailid,branchid,addressline1,addressline2, mandal,city,state,pincode)
VALUES ('$firstname', '$lastname','$fathername','$fatherphone','$phone','$phonealt','$emailid','$branchid','$addressline1','$addressline2','$mandal','$city','$state','$pincode')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
