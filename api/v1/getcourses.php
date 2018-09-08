<?php 
include "config.php";

$courseid = $_GET["course"];
$resultset= array();

$conn=mysqli_connect($servername,$dbuser,$dbpwd,$dbname);

if($conn->connect_error){
    die("connection failed:".mysqli_connect_error());
}
else{

    $sql='SELECT * FROM `m_courses` WHERE cid='. $courseid;
    
    $results=$conn->query($sql);
    while($row= mysqli_fetch_assoc($results)){
            
            $resultset[] = array(
                'courseid' => $row['cid'],
                'coursename' => $row['name'],
                'fee'=>$row['fee'],
                'duration'=>$row['duration']
             );
        }
        echo json_encode($resultset);
}








?>