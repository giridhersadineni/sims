<?php include "header.php";?>
 <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Admin</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Online Enquiries</a></li>
                        <li class="breadcrumb-item active">Online Enquiries</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Enter a username..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Your valid email..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-phoneus">Phone <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-phoneus" name="val-phoneus" placeholder="98*******">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Are you a student?<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="val-skill">
                                                    <option value="">Please select</option>
                                                    <option value="html">Yes</option>
                                                    <option value="css">No</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Subscribed?<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="val-skill">
                                                    <option value="">Please select</option>
                                                    <option value="html">Yes</option>
                                                    <option value="css">No</option>
                                                    </select>
                                            </div>
                                        </div>
                                       
                                       

                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Remarks <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5" placeholder="What would you like to say?"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                           <p class="text-muted m-b-15 f-s-12"><h4>Courses interested in</h4></p>
                                           <input type="checkbox" name="courses" value="DIGITAL FOUNDATION COURSE">DIGITAL FOUNDATION COURSE<br>
                <input type="checkbox" name="courses interested" value="Bike"> C C++<br>
  <input type="checkbox" name="course[]" value="PGDCA" > PGDCA<br>
  <input type="checkbox" name="course[]" value="CORE JAVA" > CORE JAVA<br>
  <input type="checkbox" name="course[]" value=" ADVANCED JAVA" > ADVANCED JAVA<br>
  <input type="checkbox" name="course[]" value="CORE JAVA AND ADVANCED JAVA" > CORE JAVA AND ADVANCED JAVA<br>
  <input type="checkbox" name="course[]" value="ANDROID DEVELOPMENT" > ANDROID DEVELOPMENT<br>
  <input type="checkbox" name="course[]" value="WEB FRONT END BASICS HTML CSS JS" >WEB FRONT END BASICS HTML CSS JS<br>
  <input type="checkbox" name="course[]" value="WEB FRONT END BASICS WITH ANGULAR" >WEB FRONT END BASICS WITH ANGULAR<br>
  <input type="checkbox" name="course[]" value="WEB FRONT END BASICS WITH REACT">WEB FRONT END BASICS WITH REACT<br>
  <input type="checkbox" name="course[]" value="DATABASES MYSQL" >DATABASES MYSQL<br>
  <input type="checkbox" name="course[]" value="DATABASES ORACLE" >DATABASES ORACLE<br>
  <input type="checkbox" name="course[]" value="FULLSTACK PHP MVC" >FULLSTACK PHP MVC<br>
  <input type="checkbox" name="course[]" value="FULLSTACK ASP.NET MVC" > FULLSTACK ASP.NET MVC<br>
  <input type="checkbox" name="course[]" value="TESTING TOOLS SELENIUM & JMETER" >TESTING TOOLS SELENIUM & JMETER<br>
  <input type="checkbox" name="course[]" value="IT CAREER ACCELERATOR" >IT CAREER ACCELERATOR<br>
  <input type="checkbox" name="course[]" value="CSE PROJECTS" >CSE PROJECTS<br>
  <input type="checkbox" name="course[]" value="COMPUTER HARDWARE AND NETWORKING" >COMPUTER HARDWARE AND NETWORKING<br>
  <input type="checkbox" name="course[]" value="PENTESTING" >PENTESTING <br>
</div>

                                    <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Branch name<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="val-skill">
                                                    <option value="">Please select</option>
                                                    <option value="html">B1</option>
                                                    <option value="css">B2</option>
                                                    <option value="css">B3</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Attended by<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="val-skill">
                                                    <option value="">Please select</option>
                                                    <option value="html">Employee</option>
                                                    <option value="css">Admin</option>
                                                    </select>
                                            </div>
                                        </div>
                                       
                                       
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label"><a data-toggle="modal" data-target="#modal-terms" href="#">Terms &amp; Conditions</a> <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                                                                        <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1">
                                                                                        <span class="css-control-indicator"></span> I agree to the terms
                                                                                    </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>





            <!--end of page content-->

<?php include "footer.php";?>