<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Velonic - Admin Dashboard Template</title>
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
                <div class="navbar-custom">
                    <a href="index.html" class="logo text-center d-none d-md-inline-block mr-2">
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="18">
                        </span>
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
                            <div class="card m-b-30">
                                    <div class="card-body">
                                        <div class="p-lg-3">
                                            <h3 class="mt-0 mb-2 font-weight-bold">Introduction</h3>

                                            <hr/>

                                            <p>Velonic is a fully featured premium admin template built on top of awesome
                                                <strong class="text-danger">Bootstrap 4.4.1</strong>. It's crafted using modern web technologies
                                                <strong class="text-danger">HTML5, CSS3 </strong>and <strong class="text-danger">jQuery</strong>. The theme includes beautiful dashboard, many
                                                ready to use hand crafted components, UI elements, widgets, pages, etc. The components could
                                                be used very easily on any page. The theme is fully responsive and customizable.
                                            </p>
                                            <p>
                                                We really care for our buyers and so in case if you are having any question or feedback, please feel free to get back to
                                                us via email <code>support@coderthemes.com</code> or by filling out contact form on our <a href="http://coderthemes.com/#contact" target="_blank">website</a>.
                                            </p>
                                        </div>
    
                                        <div class="p-lg-3">
                                            <h4 class="mt-0 mb-2 font-weight-bold">Structure</h4>
    
                                            <p>Extract the zip file you received after purchase and you would find the exact below
                                                files and folders:
                                            </p>
    
                                            <pre>
    
├── Documentation
├── Landing
├── Horizontal
│     ├── dist
│     ├── src/
│     │   └── fonts
│     │   └── images
│     │   └── html
│     │   └── js
│     │   └── scss
│     ├── gulpfile.js
│     ├── package.json
│     ├── package-lock.json
│     └── README.md
├── Vertical                              
</pre>        
                                        </div>
                                        <div class="p-lg-3">
                                            <h4 class="mt-0 mb-2 font-weight-bold">Credits/Plugins</h4>
                                            <p>
                                                Here is the list of Plugins (with a link to the official documentation) which helped us to make uplon better.
                                            </p>
    
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Plugins</th>
                                                            <th>Url</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Bootstrap</td>
                                                            <td><a href="http://getbootstrap.com/" target="_blank">http://getbootstrap.com/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>jQuery</td>
                                                            <td><a href="https://jquery.com/" target="_blank">https://jquery.com/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bootstrap colorpicker</td>
                                                            <td><a href="https://farbelous.io/bootstrap-colorpicker/" target="_blank">https://farbelous.io/bootstrap-colorpicker/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bootstrap Datepicker</td>
                                                            <td><a href="https://uxsolutions.github.io/bootstrap-datepicker/" target="_blank">https://uxsolutions.github.io/bootstrap-datepicker/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bootstrap Tag Input</td>
                                                            <td><a href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/" target="_blank">https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bootstrap Timepicker</td>
                                                            <td><a href="https://jdewit.github.io/bootstrap-timepicker/" target="_blank">https://jdewit.github.io/bootstrap-timepicker/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bootstrap Touchspin</td>
                                                            <td><a href="https://github.com/istvan-ujjmeszaros/bootstrap-touchspin" target="_blank">https://github.com/istvan-ujjmeszaros/bootstrap-touchspin</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>C3</td>
                                                            <td><a href="https://c3js.org/" target="_blank">https://c3js.org/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Chart.js</td>
                                                            <td><a href="https://www.chartjs.org/" target="_blank">https://www.chartjs.org/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Chartist</td>
                                                            <td><a href="https://gionkunz.github.io/chartist-js/" target="_blank">https://gionkunz.github.io/chartist-js/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Custombox</td>
                                                            <td><a href="http://dixso.github.io/custombox/" target="_blank">http://dixso.github.io/custombox/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>D3</td>
                                                            <td><a href="https://d3js.org/" target="_blank">https://d3js.org/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Datatables</td>
                                                            <td><a href="https://datatables.net/" target="_blank">https://datatables.net/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dropzone</td>
                                                            <td><a href="https://www.dropzonejs.com/" target="_blank">https://www.dropzonejs.com/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Easy pie chart</td>
                                                            <td><a href="http://rendro.github.io/easy-pie-chart/" target="_blank">http://rendro.github.io/easy-pie-chart/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Flot charts</td>
                                                            <td><a href="https://www.flotcharts.org/" target="_blank">https://www.flotcharts.org/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fullcalendar</td>
                                                            <td><a href="https://fullcalendar.io/" target="_blank">https://fullcalendar.io/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gmaps</td>
                                                            <td><a href="https://hpneo.github.io/gmaps/examples.html" target="_blank">https://hpneo.github.io/gmaps/examples.html</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ion-rangeslider</td>
                                                            <td><a href="http://ionden.com/a/plugins/ion.rangeSlider/en.html" target="_blank">http://ionden.com/a/plugins/ion.rangeSlider/en.html</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jquery-knob</td>
                                                            <td><a href="http://anthonyterrien.com/demo/knob/" target="_blank">http://anthonyterrien.com/demo/knob/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jquery-mask-plugin</td>
                                                            <td><a href="https://github.com/igorescobar/jQuery-Mask-Plugin" target="_blank">https://github.com/igorescobar/jQuery-Mask-Plugin</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jquery-sparkline</td>
                                                            <td><a href="https://omnipotent.net/jquery.sparkline/#s-about" target="_blank">https://omnipotent.net/jquery.sparkline/#s-about</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jquery-tabledit</td>
                                                            <td><a href="https://markcell.github.io/jquery-tabledit/" target="_blank">https://markcell.github.io/jquery-tabledit/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jquery-validation</td>
                                                            <td><a href="https://jqueryvalidation.org/" target="_blank">https://jqueryvalidation.org/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jszip</td>
                                                            <td><a href="https://stuk.github.io/jszip/" target="_blank">https://stuk.github.io/jszip/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Katex</td>
                                                            <td><a href="https://katex.org/" target="_blank">https://katex.org/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Magnific-popup</td>
                                                            <td><a href="https://dimsemenov.com/plugins/magnific-popup/" target="_blank">https://dimsemenov.com/plugins/magnific-popup/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Moment</td>
                                                            <td><a href="https://momentjs.com/" target="_blank">https://momentjs.com/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Morris-js</td>
                                                            <td><a href="https://morrisjs.github.io/morris.js/" target="_blank">https://morrisjs.github.io/morris.js/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nestable2</td>
                                                            <td><a href="http://ramonsmit.github.io/Nestable2/" target="_blank">http://ramonsmit.github.io/Nestable2/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Owl Carousel</td>
                                                            <td><a href="http://owlcarousel2.github.io/OwlCarousel2/" target="_blank">http://owlcarousel2.github.io/OwlCarousel2/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Parsleyjs</td>
                                                            <td><a href="http://parsleyjs.org/" target="_blank">http://parsleyjs.org/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pdfmake</td>
                                                            <td><a href="http://pdfmake.org/#/" target="_blank">http://pdfmake.org/#/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Peity</td>
                                                            <td><a href="http://benpickles.github.io/peity/" target="_blank">http://benpickles.github.io/peity/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quill</td>
                                                            <td><a href="https://quilljs.com/" target="_blank">https://quilljs.com/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Raphael</td>
                                                            <td><a href="http://dmitrybaranovskiy.github.io/raphael/" target="_blank">http://dmitrybaranovskiy.github.io/raphael/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rickshaw</td>
                                                            <td><a href="https://tech.shutterstock.com/rickshaw/" target="_blank">https://tech.shutterstock.com/rickshaw/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Select2</td>
                                                            <td><a href="https://select2.org/" target="_blank">https://select2.org/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Summernote</td>
                                                            <td><a href="https://summernote.org/" target="_blank">https://summernote.org/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sweetalert2</td>
                                                            <td><a href="https://sweetalert2.github.io/" target="_blank">https://sweetalert2.github.io/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Switchery</td>
                                                            <td><a href="http://abpetkov.github.io/switchery/" target="_blank">http://abpetkov.github.io/switchery/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Toastr</td>
                                                            <td><a href="https://codeseven.github.io/toastr/" target="_blank">https://codeseven.github.io/toastr/</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>X-editable</td>
                                                            <td><a href="http://vitalets.github.io/x-editable/" target="_blank">http://vitalets.github.io/x-editable/</a></td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                        </div>

                    </div>
                    <!-- end page-wrapper-->

                    <div class="row">
                        <div class="col-md-2">
                            
                        </div>

                        <div class="col-md-10">
                            
                        </div>
                    </div>
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