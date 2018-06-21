<?php include "config.php"?>
<?php

$conn = new mysqli($servername, $dbuser, $dbpwd, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["sid"]. " - Name: " . $row["sname"]. " " . $row["fathername"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>