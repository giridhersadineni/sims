<?php include "header.php"?>

<style>
.button
{
    background-color:#008CBA;
    color:white;
}
h3
{
    color:blue;
}
</style>
<div class="page-wrapper">
<!-- Bread crumb -->

<!-- End Bread crumb -->

            <!-- Container fluid  -->
<!-- Start Page Content -->


<div class="row">
<div class="col-lg-12">
<div class="card card-outline-primary">
<center>
<div class="card-header">
<h4 class="m-b-0 text-white">EMAIL US</h4>                          
</center>
     
                
<div class="col-md-15">
<div class="card">
<div class="card-body">
<h4 class="card-title"></h4>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
</ul>
<!-- Tab panes -->
<div class="tab-content tabcontent-border">
<div class="tab-pane active" id="employee" role="tabpanel">
<div class="p-100">
<div class="card-body">
<div class="basic-form">


<?php
	if (!array_key_exists('Submitted',$_POST))
	{
?>
		<form method="post" action="email.php">
            
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
		To: <input type="text" class="form-control input-focus" name="To" size="25">
    </div>
    </div>
    </div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
		From: <input type="text" class="form-control input-focus" name="From" size="25">
    </div>
    </div>
    </div>
    <div class="row ">
<div class="col-md-6">
<div class="form-group">
		Subject: <input type="text" class="form-control input-focus" name="Subject" size="25">
    </div>
    </div>
    </div>
    <div class="row ">
<div class="col-md-6">
    <div class="form-group">
        Message:<br>
<textarea name="Message" class="input-focus" cols="40" rows="10"></textarea>
    </div>
    </div>
    </div>
		<input type="submit" class="button" value="Send Email">
        
		</form>
        </div>
</div>
</div>
</div>
</div>
<!-- /# card -->
</div>
<!-- /# column -->
</div>

<?php
	}
	else
	{
		ini_set('SMTP',$_POST['Host']);
		$to = $_POST['To'];
		$from = 'From: ' . $_POST['From'];
		$subject = $_POST['Subject'];
		$message = $_POST['Message'];
	
		if(mail($to,$subject,$message,$from))
		{
			echo "Message Sent";
		}
		else
		{
			 echo "Message Not Sent";
		}
	}
?>
</div>
</div>
<?php include "footer.php"?>



