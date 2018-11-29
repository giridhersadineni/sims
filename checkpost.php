<?php
include 'config.php';

$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$fathername=$_POST["fathername"];
$fatherphone=$_POST["fatherphone"];
$phone=$_POST["phone"];
$emailid=$_POST["mailid"];
$college=$_POST["college"];
$course=$_POST["course"];
$branchid=$_POST["branchid"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
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

$sql = "INSERT INTO students (firstname, lastname,fathername,fatherphone,phone,emailid,college,course,branchid,dob,gender,addressline1,addressline2, mandal,city,state,pincode)
VALUES ('$firstname', '$lastname','$fathername','$fatherphone','$phone','$emailid','$college','$course','$branchid','$dob','$gender','$addressline1','$addressline2','$mandal','$city','$state','$pincode')";

if ($conn->query($sql) === TRUE) {
    echo " <h2 >Registered Successfully</h2>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
