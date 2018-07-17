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
$branchid=$_POST["branchid"];
$address=$_POST["address1"];
$addressline2=$_POST["address2"];
$designation=$_POST["designation"];
$mandal=$_POST["mandal"];
$district=$_POST["district"];
$pincode=$_POST["pincode"];
$state=$_POST["state"];
$pphoto=$_POST["image"];
$resume=$_POST["employeeresume"];


$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);

if (!$conn){
    die("connection failed:".mysqli_connect_error());
}
$sql = "INSERT INTO `employee` ( `firstname`, `lastname`, `fathername`, `dob`, `age`, `qualification`, `doj`, `contactno`, `alternateno`,`designation`, `aadharno`,`pannumber`,`emailid`, `address`,`addressline2`,  `mandal`, `district`, `pincode`, `state`, `pphoto`,`resume`) 
VALUES ('".$firstname."','".$lastname."','".$fathername."','".$dob."','".$age."','".$qualification."','".$doj."','".$contactno."','".$alternateno."','".$designation."','".$aadharno."','".$pannumber."','".$emailid."','".$address."','".$addressline2."','".$mandal."','".$district."','".$pincode."','".$state."','".$pphoto."','".$resume."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<?php
$servername = "localhost";
$dbuser = "rajesh";
$dbpwd = "rajesh@123";
$dbname = "sims";

$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
if (!$conn){
    die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['picsubmitted'])){

$target_dir = "uploads/employeeresumes";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 1000000) 
{
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<script>alert('Unable to upload the file ')</script>";   
    // if everything is ok, try to upload file
    }
    else
    {
    $target_file = $target_dir . $row["firstname"].$row["eid"].".jpg";
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $nsql="update employee SET `pphoto`='".$row["firstname"].$row["eid"].".jpg'"." where eid=".$_GET["id"];
    if($conn->query($nsql)===TRUE){
    echo "<script>alert('success ')</script>";  
    }
    else{
    echo '<script>alert("'.mysqli_error($conn).'Unable to insert filename query= '.$nsql.'");</script>';
    }
    /*if($dbupdate->num_rows>0){
    while($message=$dbupdate->fetch_assoc()){
    echo $message[0];
    }
    } */

    }
    }
}

?>