<?php include "header.php";?>
 <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Add Course</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                        <li class="breadcrumb-item active">Add Course</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->

                 <div class="card">
                            <div class="card-title">
                                <h4>Enter Course Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="processcourse.php" method="POST">
                                        <div class="form-group">
                                            <label>Course Name</label>
                                            <input type="text" class="form-control" placeholder="enter course name" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <input type="text" class="form-control" placeholder="category" name="description">
                                        </div>
                                        <div class="checkbox">
                                            <label>
													<input type="checkbox"> Check me out
												</label>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>









            <!--end of page content-->


<?php include "footer.php";?>