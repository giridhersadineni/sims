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
$aadharno=$_POST["adharcardno"];
$pannumber=$_POST["pancardno"];
$emailid=$_POST["email"];
$etype=$_POST["etype"];
$branchid=$_POST["branchid"];
$address=$_POST["address1"];
$addressline2=$_POST["address2"];
$designation=$_POST["designation"];
$mandal=$_POST["mandal"];
$district=$_POST["district"];
$pincode=$_POST["pincode"];
$state=$_POST["state"];
$pphoto=$_POST["image"];
$resume=$_POST["file"];


$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);

if (!$conn){
    die("connection failed:".mysqli_connect_error());
}
$sql = "INSERT INTO `employee` ( `firstname`, `lastname`, `fathername`, `dob`, `age`, `qualification`, `doj`, `contactno`, `alternateno`,`designation`, `aadharno`,`pannumber`,`emailid`, `address`,`addressline2`,  `mandal`, `district`, `pincode`, `state`, `pphoto`, `resume`) 
VALUES ('".$firstname."','".$lastname."','".$fathername."','".$dob."','".$age."','".$qualification."','".$doj."','".$contactno."','".$alternateno."','".$designation."','".$aadharno."','".$pannumber."','".$emailid."','".$address."','".$addressline2."','".$mandal."','".$district."','".$pincode."','".$state."','".$pphoto."','".$resume."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
