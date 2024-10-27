<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SRMS User's Guide</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <style>
        .image-spacing {
            margin-bottom: 20px;
            /* Adjust the value as needed */
        }
    </style>

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Topbar Start -->
                <?php include('includes/top-bar.php'); ?>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">

                    <div class="page-wrapper">
                        <?php include('includes/sidebar.php'); ?>
                        <!-- end left-sidebar-->

                        <div class="page-content">
                            <div class="card">
                                <div class="card-body">
                                    <div class="p-lg-1">
                                        <h3 class="mt-0 mb-2 font-weight-bold">Accounting Module</h3>
                                        <img src="assets/images/12.png" width="100%" alt="" class="image-spacing">
                                        <hr />
                                    </div>


                                    <div class="p-lg-1">
                                        <h3 class="mt-0 mb-2 font-weight-bold">Creating Student's Accounts</h3>
                                        <hr />

                                    </div>



                                    <div class="p-lg-1 mt-1">
                                        <h4 class="mt-0 mb-2 font-weight-semibold">From the Accounting menu, click Student's Accounts.</h4>
                                    
                                        <img src="assets/images/14.png" alt="" width="100%" class="image-spacing">

                                    </div>

                                    <div class="p-lg-1 mt-1">
                                        <h4 class="mt-0 mb-2 font-weight-semibold">Click the Add New button.</h4>
                                        <img src="assets/images/15.png" alt="" width="100%" class="image-spacing">
                                    </div>  

                                    <div class="p-lg-1 mt-1">
                                        <h4 class="mt-0 mb-2 font-weight-semibold">Search for the student for whom you want to create an account.</h4>
                                       <p>
                                        Note: <span style="color: red";>If you cannot find the student, please ensure the following:</span>
                                       </p>
                                       <ul>
                                        <li>The student has a profile.</li>
                                        <li>The student does not have an account for the current school year.</li>
                                       </ul>
                                    </div>

                                    <img src="assets/images/16.png" alt="" width="100%" class="image-spacing">

                                    <div class="p-lg-1 mt-1">
                                        <h4 class="mt-0 mb-2 font-weight-semibold">Click the Submit button. A prompt message "Data entered successfully!" will appear.</h4>
                                        <img src="assets/images/17.png" alt=""  class="image-spacing">
                                    </div>  

                                    <div class="p-lg-1 mt-1">
                                        <h4 class="mt-0 mb-2 font-weight-semibold">To view students' accounts, select the Grade Level from the options then click the Submit button.</h4>
                                        <img src="assets/images/18.png" alt="" width="100%"  class="image-spacing">
                                    </div>  

                                    <div class="p-lg-1 mt-1">
                                        <h4 class="mt-0 mb-2 font-weight-semibold">The amount that appears in the Total Acct. column is clickable. Once you click it, you will be redirected to the printable Statement of Accounts. The same applies to the total payments.</h4>
                                        <img src="assets/images/19.png" alt="" width="100%"  class="image-spacing">
                                    </div>  

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end page-wrapper-->


                </div>

            </div>
            <!-- content -->
            <!-- Footer Start -->
            <?php include('includes/footer.php'); ?>
            <!-- end Footer -->

        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- bundle -->
    <script src="assets/js/app.min.js"></script>
</body>

</html>