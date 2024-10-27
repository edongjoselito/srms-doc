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
                                        <img src="assets/images/13.png" width="100%" alt="" class="image-spacing">
                                        <hr />
                                    </div>

                                    <div class="p-lg-1 mt-1">
                                        <h4 class="faq-question" onclick="toggleFAQ('a')">How to Create a Class Program?</h4>
                                        <div id="a" class="faq-answer" style="display:none;">
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
                                                Enter the required information in the Teacher and Class Schedule columns. Click the <strong>Save</strong> button.
                                            </p>

                                        </div>
                                    </div>

                                    <div class="p-lg-1 mt-1">
                                        <h4 class="faq-question" onclick="toggleFAQ('b')">How to Enroll a Student?</h4>
                                        <div id="b" class="faq-answer" style="display:none;">

                                            <div class="p-lg-1">
                                                <h3 class="mt-0 mb-2 font-weight-bold">Enrollment Procedures</h3>

                                                <p>
                                                    This page will guide you through the step-by-step process of student enrollment.
                                                </p>
                                                <p>Note:<span style="color: red;"> <b>Disregard Step 1 if a student profile already exists.</b></span></p>
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
                                                <p>Note:<span style="color: red;"> <b>Before you perform step 2, make sure you have completed the following:</b></span></p>

                                                <ul>
                                                    <li>Grade Level Setup</li>
                                                    <li>Adviser's Assignments</li>
                                                    <li>Track and Strand for Senior High School</li>
                                                </ul>
                                            </div>

                                            <img src="assets/images/4.png" alt="" class="image-spacing">

                                            <p>
                                                Click the <strong>Admission >> Enrollment </strong> menu from the sidebar.

                                            </p>

                                            <p>
                                                Click the <strong>Enroll New </strong> button. A modal (dialog box) will appear.

                                            </p>

                                            <img src="assets/images/5.png" alt="" class="image-spacing">

                                            <p>
                                                Fill in the required information. Click the <img src="assets/images/6.png" alt=""> button.

                                            </p>


                                            <div class="p-lg-1 mt-1">
                                                <h4 class="mt-0 mb-2 font-weight-semibold">Step 3. Subject Enlishment</h4>
                                                <p>Note:<span style="color: red;"> <b>This is the step where you will enroll students in their subjects. Without this, you cannot proceed to encoding the grades.</b></span></p>


                                            </div>

                                            <img src="assets/images/7.png" alt="" class="image-spacing">

                                            <p>
                                                Under <strong>Admission</strong> menu, click <strong>Subject Enlishment</strong>.

                                            </p>

                                            <p>
                                                Click the <strong>Add Student</strong> button.

                                            </p>

                                            <img src="assets/images/8.png" alt="" class="image-spacing">

                                            <p>
                                                Search for the student you want to enroll in subjects. Click the <strong>Submit</strong> button. The following screen will appear.

                                            </p>

                                            <img src="assets/images/9.png" alt="" width="100%" class="image-spacing">
                                            <p>
                                                Click the <strong> Submit </strong> button.

                                            </p>

                                            <p>
                                                After successfully loading the subjects for the students, you can preview or print the <strong> Certificate of Registration </strong> by clicking any of the two icons <img src="assets/images/11.png" alt=""> in the Action column.
                                            </p>
                                            <img src="assets/images/10.png" alt="" width="100%" class="image-spacing">



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