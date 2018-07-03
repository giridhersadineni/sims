<?php
$servername = "localhost";
$dbuser = "rajesh";
$dbpwd = "rajesh@123";
$dbname = "sims";

//if(isset($_POST["submit"]))
{

$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$student=$_POST["student"];
$subscribed=$_POST["subscribed"];
$remarks=$_POST["remarks"];
$attendedby=$_POST["attendedby"];
$branchname=$_POST["branchname"];
$courseinterested=implode(",",$_POST["course"]);

$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
if (!$conn){
    echo '<script>alert("SERVER UNREACHABLE! CONTACT 9676211990")</script>';
    header("Location:","error.php?error=".mysqli_connect_error);
    
}


$sql  = "INSERT INTO `onlineenquiries` (`name`, `email`, `phone`, `student`, `subscribed`, `remarks`, `courseinterested`, `branchname`, `attendedby`) VALUES ('".$name."', '".$email."', '".$phone."', '$student', '$subscribed', '".$remarks."', '".$courseinterested."', '".$branchname."', '".$attendedby."')";
if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Added Enquiry Successfully");</script>';
} 
else {
    echo '<script>alert("'.$sql."Error =".$conn->error.'");</script>';
     }

$conn->close();
    }
?>
