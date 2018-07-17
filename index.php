
<!DOCTYPE html>
<html>      
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>SKILLVERSE LOGIN PAGE</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>


<?php

$error='';
if(isset($_GET['loggedout']) && $_GET['loggedout']==true){
    $_SESSION=array();
    $_COOKIE=array();
}

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$error=''; // Variable To Store Error Message

include ('config.php');
$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);

// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);
// Selecting Database
// SQL query to fetch information of registerd users and finds user match.
$result = $conn->query("select * from login where password='$password' AND username='$username'");
$rows = $result->num_rows;
if ($rows == 1) {
    session_start(); // Starting Session
    $_SESSION['login']=$username; // Initializing Session
    setcookie("userid",$_POST['username']);
    header("location:dashboard.php");
} else {
$error = "Username or Password is invalid";
$_SESSION=array();
session_destroy();
}
mysqli_close($conn); // Closing Connection
}
}

if((isset($_SESSION['login'])))
{
    header("location:dashboard.php");
}
if(isset($_GET['logoff'])){
    session_destroy();
    $_SESSION = array();
    header("location:index.php");
}
?>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">

 <div class="unix-login">
 <div class="container-fluid">
 <div class="row justify-content-center">
 <div class="col-lg-4">
 <div class="login-content card">
 <div class="login-form">
 <h4>Login</h4>
 <form method="POST" action="index.php">
 <div class="form-group">
<label>Register Name</label>
<input type="text" class="form-control" name ="username" placeholder="Enter Name">
</div>
<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" name="password" placeholder="Password">
</div>
<div class="checkbox">
<label>
<input type="checkbox"> Remember Me
</label>
<label class="pull-right">
<a href="#">Forgotten Password?</a>
</label>

<label class="text-danger"><?php if($error!=''){
 echo $error;

}?></label>
</div>
 <input type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="submit" value="Sign In"></input>
<div class="register-link m-t-15 text-center">
<p>Don't have account ? <a href="register.php"> Sign Up Here</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/scripts.js"></script>

</body>

</html>