<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/tayech tel9a/blue-dark/extras-timeline.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Oct 2018 08:50:34 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="image/logo.png">

        <title>tayech tel9a</title>

        <link href="../plugins/switchery/switchery.min.css" rel="stylesheet" />

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

       <?php include 'menu_prin.php'?>
            <!-- Left Sidebar End -->




            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Timeline</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">tayech tel9a</a></li>
                                        <li class="breadcrumb-item"><a href="#">Extras</a></li>
                                        <li class="breadcrumb-item active">Timeline</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="timeline">
                                         <?php
                                          try {
                                            $bdd = new PDO('mysql:host=localhost;dbname=coding;charset=utf8', 'root', '');
                                           } catch (Exception $e) {
                                            die('Erreur : ' . $e->getMessage());
                                           }
                                           $i=0;
                                           $corr = $bdd->query('SELECT *FROM even');
                                           
                                           while($data=$corr->fetch()) {
                                            $a =$data["nom_event"];
                                            $cat=$data["cat_event"];
                                            $date=$data["date"];
                                            
                                            $i++;
                                        if($i%2!=0){
                                        echo "<article class=\"timeline-item alt\">
                                        <div class=\"text-right\">
                                            <div class=\"time-show first\">
                                                <a href=\"#\" class=\"btn btn-primary w-lg\">$date</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class=\"timeline-item alt\">
                                        <div class=\"timeline-desk\">
                                            <div class=\"panel\">
                                                <div class=\"panel-body\">
                                                    <span class=\"arrow-alt\"></span>
                                                    <span class=\"timeline-icon\"></span>
                                                    <h4 class=\"text-success\">$cat</h4>
                                                    <p class=\"timeline-date text-muted\"><small>08:25 am</small></p>
                                                    <p>You have an event $a of  $cat in $date contact us as soon as possible </p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>";
                                }else {
                                    echo "<article class=\"timeline-item alt\">
                                        <div class=\"text-right\">
                                            <div class=\"time-show first\">
                                                <a href=\"#\" class=\"btn btn-info w-lg\">$date</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class=\"timeline-item\">
                                        <div class=\"timeline-desk\">
                                            <div class=\"panel\">
                                                <div class=\"panel-body\">
                                                    <span class=\"arrow\"></span>
                                                    <span class=\"timeline-icon\"></span>
                                                    <h4 class=\"text-danger\">$cat</h4>
                                                    <p class=\"timeline-date text-muted\"><small>08:25 am</small></p>
                                                    <p>You have an event $a of  $cat in $date contact us as soon as possible </p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>";
                                }                                                           
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div>
                    <!-- end container -->
                </div>
                <!-- end content -->

                <footer class="footer">
                    2018 - 2019 © tayech tel9a
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <div class="">
                    <ul class="nav nav-tabs tabs-bordered nav-justified">
                        <li class="nav-item">
                            <a href="#home-2" class="nav-link active" data-toggle="tab" aria-expanded="false">
                                Activity
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                                Settings
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home-2">
                            <div class="timeline-2">
                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 minutes ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">30 minutes ago</small>
                                        <p><a href="#" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">59 minutes ago</small>
                                        <p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">1 hour ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">3 hours ago</small>
                                        <p><a href="#" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 hours ago</small>
                                        <p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane" id="messages-2">

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">Notifications</h5>
                                    <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">API Access</h5>
                                    <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">Auto Updates</h5>
                                    <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">Online Status</h5>
                                    <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- Custom main Js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/tayech tel9a/blue-dark/extras-timeline.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Oct 2018 08:50:34 GMT -->
</html>