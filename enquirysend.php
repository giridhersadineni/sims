<?php
       include 'config.php';
            $firstname=$_POST["sfname"];
            $lastname=$_POST["slname"];
            $fathername=$_POST["fname"];
            $student=$_POST["student"];
            $college=$_POST["clgname"];
            $qualification=$_POST["qualification"];
            $contactdetails=$_POST["contactno"];
            $doj=$_POST["doj"];
            $courseids=$_POST["courseids"];        
            $email=$_POST["mail"];
            $addressline1=$_POST["hno"];
            $addressline2=$_POST["street"];
            $alternateno=$_POST["altcontactno"];
            $mandal=$_POST["mandal"];
            $district=$_POST["district"];
            $pincode=$_POST["pincode"];
            $state=$_POST["state"];       
            $attendedby=$_POST["attendedby"];
            $branchid=$_POST["branchid"];
            $remarks=$_POST["remarks"];
            $forwardon=$_POST["forwardon"];

$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);

if (!$conn){
                die("connection failed:".mysqli_connect_error());
            }
$sql = "INSERT INTO enquiries ( firstname, lastname, fathername, student,contactdetails,doj,courseids,college, qualification, attendedby,branchid,remarks, addressline1, addressline2,alternateno,email, mandal, district, pincode, state,forwardon) 
VALUES ('$firstname','$lastname','$fathername','$student','$contactdetails','$doj','$courseids','$college','$qualification','$attendedby','$branchid','$remarks','$addressline1','$addressline2','$alternateno','$email','$mandal','$district','$pincode','$state','$forwardon')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>