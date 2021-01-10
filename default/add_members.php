<?php
	session_start();
	if(!isset($_SESSION['Id'])){
			header('location:index.php');
	}



?>

<?php
$title = 'Membership Registration Page';
include_once 'static/header.php';
include_once 'static/sidebar.php';
?>

<div class="page-body">
									<div class="row">
										<div class="col-sm-12">
											<div class="card">
												<div class="card-header">
													<br>
													<h5>Add Members</h5>
													<span>After submiting details of one member. Add </span>
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
														<form action="functions/register.php" method="post" class="j-pro">
															<div class="j-content">
																<div class="j-row">
																	<div class="j-span12 j-unit">
																		<div class="j-input">
																			<label class="j-icon-right" for="first_name">
																				<i class="icofont icofont-ui-user"></i>
																			</label>
																			<input type="text" id="first_name" name="name" placeholder="Name" required>
																		</div>
																	</div>
																</div>
																<div class="j-row">
																	<div class="j-span6 j-unit" >
																		<div class="j-input">
																			<label class="j-icon-right" for="course" >
																				<i class="icofont icofont-bank-alt"></i>
																			</label>
																			<input type="text" placeholder="Course" id="course" name="course" required>
																		</div>
																	</div>
																	<div class="j-span6 j-unit">
																		<div class="j-input">
																			<label class="j-icon-right" for="year" >
																				<i class="icofont icofont-tasks-alt"></i>
																			</label>
																			<input type="text" placeholder="Year" id="year" name="year" required>
																			<span class="j-tooltip j-tooltip-right-top">Year of Study</span>
																		</div>
																	</div>
																</div>
																
																<div class="j-row">
																	<div class="j-span7 j-unit">
																		<div class="j-input">
																			<label class="j-icon-right" for="phone">
																				<i class="icofont icofont-ui-call"></i>
																			</label>
																			<input type="text" id="phone" placeholder="Phone No" name="phone" 
																			<?php if(isset($_SESSION['invalid'])){
																				echo "style='border:1px solid red; !important' ";

																			}?>
																			 required>
																			 <?php
																			 	if(isset($_SESSION['invalid'])){
																				?><small class='text-danger'>
																					<?php echo " ".$_SESSION['invalid']; ?>
																					</small>
																				<?php unset($_SESSION['invalid']);
																			 }
																			 ?>
																			 
																			 
 
																		</div>
																	</div>
																	<div class="j-span5 j-unit">
																		<div class="j-unit">
																	<label class="j-input j-select">
																		
																		<select name="bloodgroup">
																			<option value="" selected disabled>Select Blood Group</option>
																			<option value="A+">A+</option>
																			<option value="A-">A-</option>
																			<option value="B+">B+</option>
																			<option value="B-">B-</option>
																			<option value="AB+">AB+</option>
																			<option value="AB-">AB-</option>
																			<option value="O+">O+</option>
																			<option value="O-">O-</option>
																			
																		</select>
																		<i></i>
																	</label>
																</div>
																	</div>
																</div>
																<div class="j-unit">
															
																		<div class="j-input">
																			<label class="j-icon-right" for="email" >
																				<i class="icofont icofont-envelope"></i>
																			</label>
																			<input type="email" placeholder="Email (Optional) " id="email" name="email">
																		
																</div>
																<div class="divider gap-bottom-25"></div>
																															
															
																<div class="j-response"></div>
															</div>
															<div class="j-footer">
																<button type="submit" class="btn btn-primary"> +  Add Member</button>
																<button type="reset" class="btn btn-default m-r-20">Reset</button>
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


<script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bower_components/tableHTMLExport/tableHTMLExport.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../bower_components/tether/dist/js/tether.min.js"></script>
<script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
<script type="text/javascript" src="../bower_components/modernizr/modernizr.js"></script>
<script type="text/javascript" src="../bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
<script type="text/javascript" src="../bower_components/classie/classie.js"></script>
<script src="../bower_components/d3/d3.js"></script>
<script src="../bower_components/rickshaw/rickshaw.js"></script>
<script src="../bower_components/raphael/raphael.min.js"></script>
<script src="../bower_components/morris.js/morris.js"></script>
<script type="text/javascript" src="assets/pages/dashboard/horizontal-timeline/js/main.js"></script>
<script type="text/javascript" src="assets/pages/dashboard/amchart/js/amcharts.js"></script>
<script type="text/javascript" src="assets/pages/dashboard/amchart/js/serial.js"></script>
<script type="text/javascript" src="assets/pages/dashboard/amchart/js/light.js"></script>
<script type="text/javascript" src="assets/pages/dashboard/amchart/js/custom-amchart.js"></script>
<script type="text/javascript" src="../bower_components/i18next/i18next.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-i18next/jquery-i18next.min.js"></script>
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>

<script type="text/javascript" src="assets/pages/edit-table/jquery.tabledit.js"></script>
<script type="text/javascript" src="assets/pages/edit-table/editable.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<script type="text/javascript" src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
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
