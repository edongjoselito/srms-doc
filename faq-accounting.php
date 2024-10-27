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
                                        <h3 class="mt-0 mb-2 font-weight-bold">Accounting Module: Frequently Asked Questions</h3>
                                        <hr />
                                    </div>

                                    <div class="p-lg-1 mt-1">
                                        <h4 class="faq-question" onclick="toggleFAQ('a')">How to setup course fees?</h4>
                                        <div id="a" class="faq-answer" style="display:none;">
                                            <p>
                                                From the Accounting menu, click on <strong> Accounting Settings >> Course Fees Setup</strong>. <span style="color: red";>This task must be set up for each grade level every school year before enrollment.</span>
                                            </p>
                                            <img src="assets/images/29.png" alt="" class="image-spacing">
                                            <p>
                                                Click the Add New button.
                                            </p>

                                            <img src="assets/images/30.png" alt="" class="image-spacing">

                                            <p>
                                                Enter the details required, then click the Save Data button.
                                            </p>

                                        </div>
                                    </div>

                                    <div class="p-lg-1 mt-1">
                                        <h4 class="faq-question" onclick="toggleFAQ('b')">How to create students' accounts?</h4>
                                        <div id="b" class="faq-answer" style="display:none;">
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


                                    <div class="p-lg-1 mt-1">
                                        <h4 class="faq-question" onclick="toggleFAQ('faq1')">How to accept payments?</h4>
                                        <div id="faq1" class="faq-answer" style="display:none;">
                                            <p>
                                                From the Accounting menu, click on Payments. You have two options: Accounts and Services.
                                            </p>
                                            <img src="assets/images/20.png" alt="" class="image-spacing">
                                            <ul>
                                                <li>
                                                    <span style="color: red;">For payments related to regular students' accounts, click Accounts; otherwise, click Services.</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="p-lg-1 mt-1">
                                        <h4 class="faq-question" onclick="toggleFAQ('faq2')">Can I accept payment from a student even if they are not yet enrolled?</h4>
                                        <div id="faq2" class="faq-answer" style="display:none;">
                                            <p>
                                            You can accept payments from students even if they are not yet enrolled, as long as they have a profile. Once you create their account, all payments made will automatically be reflected and deducted from their total account balance.
                                            </p>


                                        </div>
                                    </div>

                                    <div class="p-lg-1 mt-1">
                                        <h4 class="faq-question" onclick="toggleFAQ('faq3')">How to encode school expenses?</h4>
                                        <div id="faq3" class="faq-answer" style="display:none;">
                                            <p>
                                                From the Accounting menu, click <strong>School Expenses >> Expenses </strong>.
                                            </p>
                                            <img src="assets/images/27.png" alt="" class="image-spacing">
                                            <p>
                                                Click the <strong>Add New</strong> button.
                                            </p>
                                            <img src="assets/images/28.png" alt="" class="image-spacing">



                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <script>
                            function toggleFAQ(faqId) {
                                var faqAnswer = document.getElementById(faqId);
                                if (faqAnswer.style.display === "none") {
                                    faqAnswer.style.display = "block";
                                } else {
                                    faqAnswer.style.display = "none";
                                }
                            }
                        </script>

                        <style>
                            .faq-question {
                                cursor: pointer;
                                color: #007bff;
                                margin: 10px 0;
                            }

                            .faq-answer {
                                margin-left: 20px;
                            }
                        </style>

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