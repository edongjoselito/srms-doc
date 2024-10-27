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
                                        <h3 class="mt-0 mb-2 font-weight-bold">Registrar's Module: Frequenty Asked Questions</h3>

                                        <hr />

                                    </div>

                                    <div class="p-lg-1 mt-1">
                                        <h4 class="mt-0 mb-2 font-weight-bold">How to Create a Class Program?</h4>
                                        <p>
                                            <span style="color: red;">Creating a class program is a task that must be completed each school year by either the registrar or the admin account.</span>
                                        </p>
                                        <p>
                                            From the Configuration menu, click Class Program.
                                        </p>

                                        <img src="assets/images/22.png" alt="" class="image-spacing">

                                        <img src="assets/images/23.png" width="100%" alt="" class="image-spacing">

                                        <p>
                                            Click the <img src="assets/images/24.png" alt="" class="image-spacing"> button. The following screen will appear.
                                        </p>

                                        <img src="assets/images/25.png" width="100%" alt="" class="image-spacing">

                                        <p>
                                            Select the Year Level and Section.
                                        </p>

                                        <img src="assets/images/26.png" width="100%" alt="" class="image-spacing">

                                        <p>
                                            Enter the required information in the Teacher and Class Schedule columns.  Click the <strong>Save</strong> button.
                                        </p>

                                    </div>

                                    <!-- <div class="p-lg-1 mt-1">
                                        <h4 class="mt-0 mb-2 font-weight-bold">How to change colors?</h4>
                                        <p>In order to change colors (including primary, secondary, success, info, danger, warning, etc.), do the following:</p>
                                        <ul>
                                            <li>A file
                                                <code>src/scss/config/_variables.scss</code> is containing the overridden colors and other configurations of bootstrap.
                                                You can change any values here and it would get reflected in any bootstrap
                                                based components or elements.
                                            </li>
                                        </ul>
                                    </div> -->

                                    <!-- <div class="p-lg-1 mt-1">
                                        <h4 class="mt-0 mb-2 font-weight-bold">How to change particular UI element?</h4>
                                        <p>In order to change the particular UI element, widget, chart, etc., please check folder
                                            <code>src/scss/custom/plugins</code>. You should be able to change any style by simply making modifications in corresponding
                                            file here.
                                        </p>
                                    </div> -->

                                    <!-- <div class="p-lg-1 mt-1">
                                        <h4 class="mt-0 mb-2 font-weight-bold">How to change footer?</h4>
                                        <p>
                                            In order to add, change or remove any ui elements from footer or sidebar, simply edit in file
                                            <code>src/html/partials/footer.html</code>). The change would reflect in all the files automatically.
                                        </p>
                                    </div> -->
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