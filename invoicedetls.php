<?php
include 'config.php';

$firstname=$_POST["empfname"];
$lastname=$_POST["emplname"];
$fathername=$_POST["fname"];
$dob=$_POST["dob"];
$age=$_POST["age"];
$qualification=$_POST["qualification"];
$doj=$_POST["doj"];
$contactno=$_POST["contactno"];
$alternateno=$_POST["altcontactno"];

$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);

if (!$conn){
    die("connection failed:".mysqli_connect_error());
}
$sql = "INSERT INTO `invoice` ( `firstname`, `lastname`, `fathername`, `dob`, `age`, `qualification`, `doj`, `contactno`, `alternateno`,`designation`, `aadharno`,`pannumber`,`emailid`, `address`,`addressline2`,  `mandal`, `district`, `pincode`, `state`, `pphoto`,`resume`) 
VALUES ('".$firstname."','".$lastname."','".$fathername."','".$dob."','".$age."','".$qualification."','".$doj."','".$contactno."','".$alternateno."','".$designation."','".$aadharno."','".$pannumber."','".$emailid."','".$address."','".$addressline2."','".$mandal."','".$district."','".$pincode."','".$state."','".$pphoto."','".$resume."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>