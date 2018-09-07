<?php 
session_start();
if(!(isset($_SESSION['login'])))
{
    header("location:index.php?sessionexpired");
}
?>



<?php
include "config.php";
//check connection

$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
if ($conn->connect_error){
    die("connection failed:".mysqli_connect_error());
}
else{
 
    $coursequery="select * from m_courses";
    $courseresults= $conn->query($coursequery);
}
?>
<?php include "header.php"?>

<div class="page-wrapper">
<!-- Bread crumb -->
<div class="row page-titles">

<div class="col-md-5 align-self-center">
<h3 class="text-primary"></h3>
 </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Invoice form</li>
</ol>
</div>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="card card-outline-primary">
<center>
<div class="card-header">
<h4 class="m-b-0 text-white">INVOICE FORM</h4>
</div>
</center>

<div class="card">
<div class="card-body">
<div class="card-body">
<div class="input-states">
<form class="form-horizontal">


<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Customer Name</label>
<div class="col-sm-9">
<input type="text" class="form-control">
</div>
</div>
</div>
<div class="form-group has-warning">
<div class="row">
<label class="col-sm-3 control-label">Invoice#*</label>
<div class="col-sm-9">
<input type="text" class="form-control">
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Order Number</label>
<div class="col-sm-9">
<input type="text" class="form-control ">
</div>
</div>
</div>
<div class="form-group has-warning ">
<div class="row">
<label class="col-sm-3 control-label">Invoice Date*</label>
<div class="col-sm-9">
<input type="date" class="form-control input-focus">
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Due Date</label>
<div class="col-sm-9">
<input type="date" class="form-control">
</div>
</div>
</div>

<table id="" class="display nowrap table  table-bordered" >

<thead>
<tr>
<th>Iteam Details</th>
<th>Quantity</th>
<th>Rate</th>
<th>Discount</th>
<th>Amount</th>
</tr>

<tbody>
<tr>

<td>

<select name="category" onchange="showCustomer(this.value)" id="category" class="form-control input-focus">
    
    <option value="choose">--Select--</option>


<?php
  while($row = mysqli_fetch_assoc($courseresults)) 
   {
  ?>
<option name="cid" value="<?php echo $row{"cid"} ?>"> <?php echo $row{"name"} ?> </option>
  <?php
}
?>

</select>

</td>

    <td><input type="text" class="form-control" value=""/></td>
    <td><input type="text" class="form-control" value=""/></td>
    <td><input type="text" class="form-control" value=""/></td>
    <td><input type="text" class="form-control" value=""/></td>

</tbody>

</thead>
</table>
<script>

function showCustomer(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "m_courses.asp?q="+str, true);
  xhttp.send();
}
</script>

<div class="row">
<div class="col-lg-4 col-sm-5">
</div>
<div class="col-lg-4 col-sm-5 ml-auto">

<table class="table table-clear">
<tbody>
<tr>
<td class="left">
<strong>Subtotal</strong>
</td>
<td class="right"></td>
</tr>

<tr>
<td class="left">
<strong>Discount</strong>
</td>
<td class="right"></td>
</tr>

<tr>
<td class="left">
 <strong>Round Off</strong>
</td>
<td class="right"></td>
</tr>

<tr>
<td class="left">
<strong>Total</strong>
</td>
<td class="right">
<strong></strong>
</td>

</tr>
</tbody>
</table>

</div>
</div><br>
<a href="#" class="btn btn-success" > Send & Save</a></p>
</form>
</div>
</div>
</div>
</div>
</div>


            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
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
    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
</body>

</html>