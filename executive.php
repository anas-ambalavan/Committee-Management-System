<?php
include_once ('functions/connection.php');

session_start();
if(!isset($_SESSION['Id'])){
    header('location:index.php');
}

$conn=connect();
$qu=mysqli_query($conn,"SELECT * FROM `members`;");
$title="EXECUTIVE MEMBERS";
include_once 'static/header.php';
include_once 'static/sidebar.php'; 
?>

</nav>

<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">



<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5>CADET MEMBERS</h5>
<div class="card-header-right">
<i class="icofont icofont-rounded-down"></i>
<i class="icofont icofont-refresh"></i>
</div>

<br>

                                                    <div class="container">

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
</div>

</div>
<div class="card-block">
<div class="j-wrapper j-wrapper-640">
<form action="functions/execute.php" method="post" class="j-pro" id="j-pro">
<div class="j-content">

<div class="j-unit">
<label class="j-label">Member</label>
<div class="j-input">
<label class="j-icon-right" for="name">
<i class="icofont icofont-user"></i>
</label>
<select name="member" required>
	<option value="" selected disabled>Select Member</option>
		                <?php
                    while($qufe=mysqli_fetch_array($qu)){
                ?>
                    <option value="<?php echo($qufe['name']); ?>"><?php echo $qufe['id'].".".$qufe['name']; ?></option>
                <?php
                    }
                ?>
																			
		</select>
</div>
</div>


<div class="j-unit">
<label class="j-label">Question 1</label>
<div class="j-input">
<label class="j-icon-left" for="message">
<i class="icofont icofont-file-text"></i>Q1
</label>
<textarea placeholder="message..." spellcheck="false" name="q1" required></textarea>
</div>
</div>


<div class="j-unit">
<label class="j-label">Question 2</label>
<div class="j-input">
	<label class="j-icon-left" for="message">
<i class="icofont icofont-file-text"></i>Q2
</label>
<textarea placeholder="message..." spellcheck="false" name="q2" required></textarea>
</div>
</div>


<div class="j-unit">
<label class="j-label">Question 3</label>
<div class="j-input">
	<label class="j-icon-left" for="message">
<i class="icofont icofont-file-text"></i>Q3
</label>
<textarea placeholder="message..." spellcheck="false" name="q3" required></textarea>
</div>
</div>


<div class="j-unit">
<label class="j-label">Question 4</label>
<div class="j-input">
	<label class="j-icon-left" for="message">
<i class="icofont icofont-file-text"></i>Q4
</label>
<textarea placeholder="message..." spellcheck="false" name="q4" required></textarea>
</div>
</div>




<div class="j-response"></div>

</div>

<div class="j-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>
</div>
</div>
</div>

</div>
</div>
</div>

</div>

</div>


<div id="styleSelector">
</div>

</div>
<br><br>
                                <?php include_once 'static/footer.html'; ?>
</div>
</div>
</div>
</div>


<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script type="text/javascript" src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/bower_components/tether/dist/js/tether.min.js"></script>
<script type="text/javascript" src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="assets/pages/j-pro/js/jquery.ui.min.js"></script>
<script type="text/javascript" src="assets/pages/j-pro/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="assets/pages/j-pro/js/jquery.j-pro.js"></script>

<script type="text/javascript" src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<script type="text/javascript" src="assets/bower_components/modernizr/modernizr.js"></script>
<script type="text/javascript" src="assets/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

<script type="text/javascript" src="assets/bower_components/classie/classie.js"></script>

<script type="text/javascript" src="assets/bower_components/i18next/i18next.min.js"></script>
<script type="text/javascript" src="assets/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="assets/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="assets/bower_components/jquery-i18next/jquery-i18next.min.js"></script>

<script type="text/javascript" src="assets/pages/j-pro/js/custom/review-form.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
</body>

<!-- Mirrored from flatable.phoenixcoded.net/default/ready-review-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 12:08:50 GMT -->
</html>
