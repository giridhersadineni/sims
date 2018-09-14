<?php include "header.php"?>

<script>
/*
var count = "160";
function limiter(){

var tex = document.myform.text.value;

var len = tex.length;

if(len > count){
   tex = tex.substring(0,count);
   document.myform.text.value =tex;
   return false;
}
 document.myform.limit.value = count-len;
} */  
</script>

<div class="page-wrapper">
<!-- Bread crumb -->


<div class="row justify-content-center">
<div class="col-lg-9">
<div class="card card-outline-primary">

<center>
<div class="card-header">
<h4 class="m-b-0 text-white"> BULCK SMS </h4>                          
</center>
     
                
<div class="col-md-15">
<div class="card">
<div class="card-body">
<h4 class="card-title"></h4>

<!-- Tab panes -->
<div class="tab-pane active" id="employee" role="tabpanel">
<div class="p-100">

<div class="card-body">
<div class="basic-form">

<form method="post" action="#">        
<div class="row ">
<div class="col-md-6">
<div class="form-group">
<input type="hidden"  name="Submitted" value="true">
    </div>
    </div>
    </div>

<div class="row">
<div class="col-md-6">
<div class="form-group">
		Phone Number:  (Seperate with ;)<textarea name="phone" class="input-focus" cols="50" rows="5"></textarea>
    </div>
    </div>
    </div>

 <div class="row ">
<div class="col-md-6">
    <div class="form-group">
        Message:<br>
<textarea name="Message" class="input-focus" id="myform" placeholder="characters only '160'" cols="60" rows="10"></textarea>

Character remain: 
    </div>
    </div>
    </div>
		<center><input type="submit" class="btn btn-success" value="Send Message"></center>
        
		</form>
        </div>
</div>
</div>
</div>
</div>
<!-- /# card -->
</div>

<br>
<br>

<?php include "footer.php"?>