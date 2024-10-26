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
                <div class="navbar-custom">
                    <a href="index.html" class="logo text-center d-none d-md-inline-block mr-2">
                        <!-- <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="18">
                        </span> -->
                        <h3>School Records Management System</h3>
                    </a>

                    <button type="button" class="btn btn-sm btn-dark d-inline-block d-lg-none button-menu-mobile">Menu</button>

                    <span class="badge badge-danger float-right mt-1">v5.0.0</span>
                </div>
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
                                        <h3 class="mt-0 mb-2 font-weight-bold">Enrollment Procedures</h3>
                                        <p>Note:<span style="color: red;"> <b>Disregard Step 1 if a student profile already exists.</b></span></p>
                                        <hr />

                                        <p>
                                            This page will guide you through the step-by-step process of student enrollment.
                                        </p>
                                    </div>

                                    <div class="p-lg-1 mt-1">
                                        <h4 class="mt-0 mb-2 font-weight-semibold">Step 1. Adding a Student Profile</h4>

                                        <p>
                                            From the sidebar menu, click <b> Admission >> Student’s Profile</b>.

                                        </p>
                                        <img src="assets/images/sidebar1.png" alt="" class="image-spacing">
                                        <p>
                                            The following window will appear.

                                        </p>
                                        <img src="assets/images/1.png" alt="" width="100%" class="image-spacing">

                                        <p>
                                            Click the <img src="assets/images/add-new-button.png"> button.

                                        </p>

                                        <p>
                                            Type in the student's information.

                                        </p>

                                        <img src="assets/images/2.png" alt="" width="100%" class="image-spacing">
                                        <p>
                                            If done, click the <img src="assets/images/3.png"> button at the bottom part.

                                        </p>

                                      

                                    </div>

                                    <div class="p-lg-1 mt-1">
                                        <h4 class="mt-0 mb-2 font-weight-semibold">Step 2. Enrollment</h4>
                                        <p>In order to change the width of left side navigation bar, open a file
                                            <code>src/scss/_variables.scss</code> and change the value of variable
                                            <code>$leftbar-width</code>. The default value is set to <code>240px</code>.
                                        </p>
                                    </div>

                                    <div class="p-lg-1 mt-1">
                                        <h4 class="mt-0 mb-2 font-weight-semibold">How to change background or menu text color?</h4>
                                        <p>In order to change the background color, open a file
                                            <code>src/scss/scss/_variables.scss</code> and change the value of variable
                                            <code>$bg-leftbar-light</code> the default light value is set to
                                            <code>#ffffff</code>, <code>$bg-leftbar-dark</code> the default dark value is set to
                                            <code>#2f353f</code>.
                                        </p>

                                        <p>
                                            When you change the background color, you might want to change the color of menu accordingly. To change
                                            the color of menu item, change the variable <code>$menu-item</code> (Default is set to <code>#70809a</code>).
                                            Similarly, change the value of variables <code>$menu-item-hover</code> and <code>$menu-item-active</code>.
                                        </p>
                                        <p>
                                            You can change other styles by making modifications in <code>src/scss/custom/structure/_left-menu.scss</code>.
                                        </p>
                                    </div>

                                    <div class="row mb-2 mt-4">
                                        <div class="col">
                                            <h4 class="mt-0 mb-2 font-weight-semibold">How to use pre-built layouts?</h4>
                                            <p>
                                                Each of the layout options is provided below with steps you would need to perform:
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-lg-4 col-md-6">
                                            <div class="img-thumbnail p-2 text-center mb-3">
                                                <img src="assets/images/demo/index_1.jpg" alt="image" class="img-fluid shadow-sm" />
                                                <h5 class="font-weight-semibold mt-3">Small Sidebar</h5>
                                                Keep your body element with class <code>left-side-menu-sm</code> E.g. <code> &lt;body class="left-side-menu-sm"&gt;</code> to have small sidebar.
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-4 col-md-6">
                                            <div class="img-thumbnail p-2 text-center mb-3">
                                                <img src="assets/images/demo/index_2.jpg" alt="image" class="img-fluid shadow-sm" />
                                                <h5 class="font-weight-semibold mt-3">Dark Sidebar & Topbar Light</h5>
                                                Keep your body element with class <code>left-side-menu-dark</code> E.g. <code> &lt;body class="left-side-menu-dark"&gt;</code> to have dark sidebar. Add class <code>topbar-light</code> to have light topnav.
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-4 col-md-6">
                                            <div class="img-thumbnail p-2 text-center mb-3">
                                                <img src="assets/images/demo/index_3.jpg" alt="image" class="img-fluid shadow-sm" />
                                                <h5 class="font-weight-semibold mt-3">Collapsed Sidebar</h5>
                                                Keep your body element with class <code>enlarged</code> and data attribute <code>data-keep-enlarged="true"</code> E.g. <code> &lt;body class="enlarged" data-keep-enlarged="true"&gt;</code> to have collapsed sidebar.
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-4 col-md-6">
                                            <div class="img-thumbnail p-2 text-center mb-3">
                                                <img src="assets/images/demo/index_4.jpg" alt="image" class="img-fluid shadow-sm" />
                                                <h5 class="font-weight-semibold mt-3">Boxed Layout</h5>
                                                Keep your body element with class <code>enlarged boxed-layout</code> and data attribute <code>data-keep-enlarged="true"</code> E.g. <code> &lt;body class="enlarged boxed-layout" data-keep-enlarged="true"&gt;</code> to have boxed layout.
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-4 col-md-6">
                                            <div class="img-thumbnail p-2 text-center">
                                                <img src="assets/images/demo/index_5.jpg" alt="image" class="img-fluid shadow-sm" />
                                                <h5 class="font-weight-semibold mt-3">Unsticky Layout</h5>
                                                Keep your body element with class <code>unsticky-layout</code> E.g. <code> &lt;body class="unsticky-layout"&gt;</code> to have unsticky layout.
                                            </div>
                                        </div> <!-- end col -->

                                    </div>
                                    <!-- end row -->

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