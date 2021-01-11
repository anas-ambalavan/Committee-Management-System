<?php
include_once ('functions/connection.php');
	session_start();
	if(!isset($_SESSION['Id'])){
			header('location:index.php');
	}
	$_SESSION['edit_id']=$_GET['id'];
$name=$_GET['name'];
$course=$_GET['course'];
$year=$_GET['year'];
$phone=$_GET['phone'];
$blood=$_REQUEST['bl'];//the data in $_REQUEST is automatically decode
//$blood=urldecode($blood1);
$campus=$_GET['campus'];


$conn=connect();
$qu=mysqli_query($conn,"SELECT * FROM `campuses`;");

?>

<?php
$title = 'Edit Member';
include_once 'static/header.php';
include_once 'static/sidebar.php';
?>

<div class="page-body">
									<div class="row">
										<div class="col-sm-12">
											<div class="card">
												<div class="card-header">
													<h5>EDIT MEMBERS</h5>
													<div class="card-header-right">
														<i class="icofont icofont-rounded-down"></i>
													</div>

													
												</div>
												<div class="card-block">
													<div class="j-wrapper j-wrapper-640">
														<form action="functions/eview.php" method="post" class="j-pro">
															<div class="j-content">
																<div class="j-row">
																	<div class="j-span12 j-unit">
																		<div class="j-input">
																			<label class="j-icon-right" for="first_name">
																				<i class="icofont icofont-ui-user"></i>
																			</label>
																			<input type="text" id="first_name" name="name" placeholder="Name" required value="<?php echo($name);?>">
																		</div>
																	</div>
																</div>
																
																<div class="j-row">
																	<div class="j-span6 j-unit" >
																		<div class="j-input">
																			<label class="j-icon-right" for="course" >
																				<i class="icofont icofont-bank-alt"></i>
																			</label>
																			<input type="text" placeholder="Course" id="course" name="course" required value="<?php echo($course);?>">
																		</div>
																	</div>
																	<div class="j-span6 j-unit">
																		<div class="j-input">
																			<label class="j-icon-right" for="year" >
																				<i class="icofont icofont-tasks-alt"></i>
																			</label>
																			<input type="text" placeholder="Year" id="year" name="year" required value="<?php echo($year);?>">
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
																			<input type="text" id="phone" placeholder="Phone No" name="phone" required value="<?php echo($phone);?>">
																		</div>
																	</div>
																	<div class="j-span5 j-unit">
																		<div class="j-unit">
																	<label class="j-input j-select">
																		<select name="bloodgroup" id="bloodgroup" >
																			<option value="" >Select Blood Group</option>
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
																
																															
															
																															</div>
															<div class="j-footer">
																<button type="submit" class="btn btn-primary"> Save</button>
																<button type="reset" class="btn btn-default m-r-20">Reset</button>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<br><br><br><br><br><br><br>
								<?php include_once 'static/footer.html'; ?>


<script>
$('#bloodgroup option[value="<?php echo $blood;?>"]').attr('selected', 'selected');
//this statement is to select the bloodgroup in the option which has same value if $blood=B+ ,it select option B+ 
</script>



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




<script type="text/javascript" src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/pages/j-pro/js/jquery.ui.min.js"></script>
<script type="text/javascript" src="assets/pages/j-pro/js/jquery.maskedinput.min.js"></script> 
<script type="text/javascript" src="assets/pages/j-pro/js/jquery.j-pro.js"></script> 
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>

</body>
<!-- Mirrored from flatable.phoenixcoded.net/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 11:30:25 GMT -->
</html>
