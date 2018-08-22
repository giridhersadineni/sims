<?php 
include "config.php";
$category = $_GET["id"];
$resultset= array();
$conn=mysqli_connect($servername,$dbuser,$dbpwd,$dbname);
if($conn->connect_error){
    die("connection failed:".mysqli_connect_error());
}
else{
    $sql="SELECT `cid`,`name` FROM `m_courses` WHERE `categoryid`=".$category;
    $results=$conn->query($sql);
    while($row= mysqli_fetch_assoc($results)){
            
            $resultset[] = array(
                'courseid' => $row['cid'],
                'coursename' => $row['name']
             );
        }
        echo json_encode($resultset);
}








?>