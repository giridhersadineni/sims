<?php

$servername = "localhost";
$dbuser = "rajesh";
$dbpwd = "rajesh@123";
$dbname = "sims";

$name=$_POST['name'];
$branchid=$_POST["branchid"];
$category=$_POST["category"];
$type=$_POST["type"];
$description=$_POST["description"];
$syllabus=$_POST["syllabus"];
$duration=$_POST["duration"];
$fee=$_POST["fee"];


$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);

if (!$conn){
    die("connection failed:".mysqli_connect_error());
}

$sql = "INSERT INTO m_courses (name, branchid,category,type, description,syllabus,duration,fee)
VALUES ('$name', '$branchid','$category','$type','$description','$syllabus','$duration','$fee')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
