<?php
include_once ('functions/connection.php');
session_start();
if(!isset($_SESSION['Id'])){
    header('location:index.php');
}
$conn=connect();
$qu1=mysqli_query($conn,"SELECT * FROM `committee` where id=1;");
$quf1=mysqli_fetch_array($qu1);


?>

<?php
$title = 'Committee';
include_once 'static/header.php';
include_once 'static/sidebar.php';
?>

<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Add Committee Details</h5>
                    <span>Fill committee form after completing membership registration. </span>
                    <div class="card-header-right">
                        <i class="icofont icofont-rounded-down"></i>
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
                        <form action="functions/comm.php" method="post" class="j-pro">
                            <div class="j-content">


<?php
for ($i=0; $i <10; $i++) { 

    if($i==0){

     $name='chairman';
     $label="Chairman";


   }elseif ($i==1) {
    
    $name='vice_chairman1';
    $label="Vice Chairman 1";
   
   }
   elseif ($i==2) {
    
    $name='vice_chairman2';
    $label="Vice Chairman 2";
   
   }
   elseif ($i==3) {
    
    $name='general_convenor';
    $label="General Convenor";
   
   }
   elseif ($i==4) {
   
    $name='convenor1';
    $label="Convenor 1";
   
   }
   elseif ($i==5) {
   
    $name='convenor2';
    $label="Convenor 2";
   
   }
   elseif ($i==6) {
    
    $name='treasurer';
    $label="Treasurer";
   }
   elseif ($i==7) {
    
    $name='SIT';
    $label="SIT Coordinator";

   }elseif ($i==8) {
    
    $name='district_counsellor';
    $label="District Counsellor";
   
   }elseif ($i==9) {
    
    $name='state_counsellor';
    $label="State Counsellor";
   
   }else{
    
    $name="";
    $label="";
   
   }
    
    $qunew=mysqli_query($conn,"SELECT `members`.`id` from `members` where id=(SELECT `committee`.`$name` FROM `committee`);");
    $qunewf=mysqli_fetch_array($qunew);
    

?>
                                <div class="j-row">
                                    <label class="j-label"><?php echo($label); ?></label>
                                    <div class="j-unit">
                                        <div class="j-input">
                                            <label class="j-input j-select">

                                                <select name="<?php echo($name); ?>">
                                                    <option value="" disabled>Choose Name</option>
                                                                                                      
                                                    <?php
                                                    $qu=mysqli_query($conn,"SELECT * FROM `members`;");
                                                        while($qufe=mysqli_fetch_array($qu)){
                                                        
                                                            if ($qunewf['id']==$qufe['id']) {
                                                                $selected="selected";
                                                            }else{$selected='';}
                                                        
                                                    ?>
                                                        
                                                            <option value="<?php echo($qufe['id']); ?>" <?php echo $selected;?> ><?php echo $qufe['id'].".".$qufe['name']; ?></option>
                                                    <?php
                                                        }
                                                    ?>

                                                </select>
                                                <i></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>


<?php

}?>
                              



                                <div class="j-footer">
                                    <button type="submit" class="btn btn-primary"> Submit Committee Report</button>
                                    <button type="reset" class="btn btn-default m-r-20">Reset</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
                                <?php include_once 'static/footer.html'; ?>

<script>
//     $('select').change(function() {
 
//     $(this)
//         .siblings('select')
//         .children('option[value=' + this.value + ']')
//         .attr('disabled', true)
        
    
// }); 

</script>
<script>
    //to disable the selected option
    $('select').on('change', function() {
    
    $('select').find('option').prop('disabled', false);
    
    $('select').each(function() {
       $('select').not(this).find('option[value="' + this.value + '"]').prop('disabled', true); 
    });
    
});

    $(window).on('load', function() {
    
    $('select').find('option').prop('disabled', false);
    
    $('select').each(function() {
       $('select').not(this).find('option[value="' + this.value + '"]').prop('disabled', true); 
    });
    
});


</script>

<script type="text/javascript" src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="assets/bower_components/tableHTMLExport/tableHTMLExport.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/bower_components/tether/dist/js/tether.min.js"></script>
<script type="text/javascript" src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
<script type="text/javascript" src="assets/bower_components/modernizr/modernizr.js"></script>
<script type="text/javascript" src="assets/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
<script type="text/javascript" src="assets/bower_components/classie/classie.js"></script>
<script src="assets/bower_components/d3/d3.js"></script>
<script src="assets/bower_components/rickshaw/rickshaw.js"></script>
<script src="assets/bower_components/raphael/raphael.min.js"></script>
<script src="assets/bower_components/morris.js/morris.js"></script>
<script type="text/javascript" src="assets/pages/dashboard/horizontal-timeline/js/main.js"></script>
<script type="text/javascript" src="assets/pages/dashboard/amchart/js/amcharts.js"></script>
<script type="text/javascript" src="assets/pages/dashboard/amchart/js/serial.js"></script>
<script type="text/javascript" src="assets/pages/dashboard/amchart/js/light.js"></script>
<script type="text/javascript" src="assets/pages/dashboard/amchart/js/custom-amchart.js"></script>
<script type="text/javascript" src="assets/bower_components/i18next/i18next.min.js"></script>
<script type="text/javascript" src="assets/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="assets/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="assets/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>

<script type="text/javascript" src="assets/pages/edit-table/jquery.tabledit.js"></script>
<script type="text/javascript" src="assets/pages/edit-table/editable.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<script type="text/javascript" src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/pages/j-pro/js/jquery.ui.min.js"></script>
<script type="text/javascript" src="assets/pages/j-pro/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="assets/pages/j-pro/js/jquery.j-pro.js"></script>
<!-- <script type="text/javascript" src="assets/pages/j-pro/js/custom/form-job.js"></script>
 --><script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
</body>
<!-- Mirrored from flatable.phoenixcoded.net/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 11:30:25 GMT -->
</html>
