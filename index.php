<?php
session_start();
session_destroy();



?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CAMPUSWING MEMBERSHIP CAMPAIGN</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Phoenixcoded">
        <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
        <meta name="author" content="Phoenixcoded">
        <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/color/color-1.css" id="color" />
    </head>
    <body class="fix-menu">
        <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
            <div class="container-fluid">
                <div class="row">

 

   <!--  alert_start -->
                            <?php 
                            if(isset($_SESSION['alert_type'])&&(isset($_SESSION['alert_msg']))){
                            ?>
                            <div class="<?php echo $_SESSION['alert_type'];  ?>">
                               
                            <span onclick="this.parentElement.style.display='none'"
                            class="<?php echo $_SESSION['alert_typeclass'] ;?>" >&times;</span>
                            <h3><?php echo $_SESSION['alert_typei']; ?></h3>
                            <p><?php echo $_SESSION['alert_msg']; ?></p>
                            </div>
                            <?php
                        }
                        unset($_SESSION['alert_type']);
                         unset($_SESSION['alert_msg']);

                            ?>

                           <!--  alert_end -->

                    
                    <div class="col-sm-12">
                        <div class="login-card card-block auth-body">
                            <form class="md-float-material" method="post" action="functions/validate_login.php">
                                <div class="text-center">
                                    <h3 style="color: white">CAMPUSWING</h3>
                                </div>
                                <div class="auth-box">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-left txt-primary">Unit Log In </h3>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Campus Id"
                                        name="CampusId" required>
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="input-group">
                                        <input type="password" class="form-control" placeholder="Password"
                                        name="pass" required>
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript" src="assets/bower_components/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="assets/bower_components/tether/dist/js/tether.min.js"></script>
        <script type="text/javascript" src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script type="text/javascript" src="assets/bower_components/modernizr/modernizr.js"></script>
        <script type="text/javascript" src="assets/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
        <script type="text/javascript" src="assets/bower_components/i18next/i18next.min.js"></script>
        <script type="text/javascript" src="assets/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
        <script type="text/javascript" src="assets/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
        <script type="text/javascript" src="assets/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>
    </body>
</html>