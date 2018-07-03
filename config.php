<?php
$servername = "localhost";
$dbuser = "rajesh";
$dbpwd = "rajesh@123";
$dbname = "sims";
//connection 
$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
//check connection
if (!$conn){
    die("connection failed:".mysqli_connect_error());
}
?> 