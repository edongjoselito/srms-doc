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
                                        <h3 class="mt-0 mb-2 font-weight-bold">Accounting Module: Frequenty Asked Questions</h3>

                                        <hr />

                                    </div>

                                    <div class="p-lg-1 mt-1">
                                        <h4 class="mt-0 mb-2 font-weight-bold">How to accept payments?</h4>

                                        <p>
                                            From the Accounting menu, click on Payments. You have two options: Accounts and Services.
                                        </p>

                                        <img src="assets/images/20.png" alt="" class="image-spacing">

                                        <p>
                                        <ul>
                                            <li>
                                                <span style="color: red;">For payments related to regular students' accounts, click Accounts; otherwise, click Services.</span>
                                            </li>

                                        </ul>
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
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            2015 - 2020 © Velonic - by Coderthemes
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="http://coderthemes.com/" target="_blank">About</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
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