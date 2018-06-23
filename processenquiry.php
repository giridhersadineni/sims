<?php

include 'config.php';

$firstname=$_POST["sfname"];
$lastname=$_POST["slname"];
$fathername=$_POST["fname"];
$student=$_POST["student"];
$college=$_POST["clgname"];
$qualification=$_POST["qualification"];
$courseids=$_POST["courseid"];
$doj=$_POST["intrddate"];
$phoneno=$_POST["contactno"];
$alternateno=$_POST["altcontactno"];
$email=$_POST["mail-id"];
$addressline1=$_POST["hno"];
$addressline2=$_POST["street"];
$mandal=$_POST["mandal"];
$district=$_POST["district"];
$pincode=$_POST["pincode"];
$state=$_POST["state"];
$attendedby=$_POST["attendedby"];
$branchid=$_POST["branch-id"];
$remarks=$_POST["remarks"];
$courseinterested=implode(",",$_POST["coursesinterested"]);
echo $courseinterested;
$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);

if (!$conn){
    die("connection failed:".mysqli_connect_error());
}

$sql = "INSERT INTO `enquiries` ( `firstname`, `lastname`, `fathername`, `student`, `college`, `qualifcation`, `courseids`, `courseinterested`, `doj`, `phoneno`, `alternateno`, `email`, `address line 1`, `address line 2`, `mandal`, `district`, `pincode`, `state`, `attendedby`, `branchid`, `remarks`) VALUES ('".$firstname."','".$lastname."','".$fathername."','".$student."','".$college."','".$qualification."',$student,'".$courseinterested."','".$doj."','".$phoneno."','".$alternateno."','".$email."','".$addressline1."','".$addressline2."','".$mandal."','".$district."','".$pincode."','".$state."','attendedby',5,'remarks')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

