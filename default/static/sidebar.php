



		<div class="theme-loader">
			<div class="ball-scale">
				<div></div>
			</div>
		</div>
		<div id="pcoded" class="pcoded">
			<div class="pcoded-overlay-box"></div>
			<div class="pcoded-container navbar-wrapper">
				<nav class="navbar header-navbar pcoded-header" header-theme="theme4">
					<div class="navbar-wrapper">
						<div class="navbar-logo">
							<a class="mobile-menu" id="mobile-collapse" href="#!">
								<i class="ti-menu"></i>
							</a>
							<a class="mobile-search morphsearch-search" href="#">
								<i class="ti-search"></i>
							</a>
							<a href="index-2.html">
								<img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
							</a>
							<a class="mobile-options">
								<i class="ti-more"></i>
							</a>
						</div>
						<div class="navbar-container container-fluid">
							<div>
								<ul class="nav-left">
									<li>
										<div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
									</li>
									
									<li>
										<a href="#!" onclick="javascript:toggleFullScreen()">
											<i class="ti-fullscreen"></i>
										</a>
									</li>
								</ul>
								
								<ul class="nav-right">
									<li><a href="functions/logout.php">
												<i class="icofont icofont-ui-power"></i> Logout
										</a>
									</li>
									
								</ul>
								
							</div>
						</div>
					</div>
				</nav>
				
				
				<div class="pcoded-main-container">

					<div class="pcoded-wrapper">

						<nav class="pcoded-navbar" pcoded-header-position="relative">
							<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
							<div class="pcoded-inner-navbar main-menu">
								<div class="">
									<div class="main-menu-header">
										<img class="img-40" src="assets/images/user.png" alt="User-Profile-Image">
										<div class="user-details">
											<span><?php echo $_SESSION['campus'];?></span>
										</div>
									</div>
									<div class="main-menu-content">
									
									</div>
								</div>

								
								<ul class="pcoded-item pcoded-left-item">
									
									
								<?php 
									$add_members='';
									$executive='';
									$committee='';
									$view='';
									$membership='';
									$viewtab='';
									if(strpos($_SERVER['SCRIPT_NAME'], 'add_members') !== false){ $add_members='active';
									$membership='active '.'pcoded-trigger';}
									elseif(strpos($_SERVER['SCRIPT_NAME'], 'executive') !== false){ $executive='active';
									$membership='active '.'pcoded-trigger';}
									elseif(strpos($_SERVER['SCRIPT_NAME'], 'committee') !== false){ $committee='active';
									$membership='active '.'pcoded-trigger';}
									elseif(strpos($_SERVER['SCRIPT_NAME'], 'view_members') !== false){ $view=' active';
									$viewtab='active '.'pcoded-trigger';}
									elseif(strpos($_SERVER['SCRIPT_NAME'], 'edit_member') !== false){ $edit=' active';
									$viewtab='active '.'pcoded-trigger';}

									

								?>
									
									
									<li class="pcoded-hasmenu <?php echo $membership;?>">
										<a href="javascript:void(0)" data-i18n="nav.ready-to-use.main">
											<span class="pcoded-micon"><i class="ti-receipt"></i></span>
											<span class="pcoded-mtext">Membership</span>
											<span class="pcoded-badge label label-danger">New<span>
											<span class="pcoded-mcaret"></span>
										</a>
										<ul class="pcoded-submenu">
											<li class="<?php echo $add_members;?>">
												<a href="add_members.php" data-i18n="nav.ready-to-use.registration-form">
													<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
													<span class="pcoded-mtext">Add Members</span>
													<span class="pcoded-mcaret"></span>
												</a>
											</li>
											<li class="<?php echo $executive;?>">
												<a href="executive.php" data-i18n="nav.ready-to-use.registration-form">
													<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
													<span class="pcoded-mtext">Add Executive Member</span>
													<span class="pcoded-mcaret"></span>
												</a>
											</li>
											<li class="<?php echo $committee;?>">
												<a href="committee.php" data-i18n="nav.ready-to-use.registration-form">
													<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
													<span class="pcoded-mtext">Committee</span>
													<span class="pcoded-mcaret"></span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="pcoded-item pcoded-left-item">
									<li class="pcoded-hasmenu <?php echo $viewtab;?>">
										<a href="javascript:void(0)" >
											<span class="pcoded-micon"><i class="ti-write"></i></span>
											<span class="pcoded-mtext">View/Edit Member</span>
											<span class="pcoded-mcaret"></span>
										</a>
									
									<ul class="pcoded-submenu">
											<li class="<?php echo $view;?>">
												<a href="view_members.php" data-i18n="nav.ready-to-use.registration-form">
													<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
													<span class="pcoded-mtext">View/Edit Members</span>
													<span class="pcoded-mcaret"></span>
												</a>
											</li>
									</ul>
									<?php
										if (strpos($_SERVER['SCRIPT_NAME'], 'edit_member') !== false) {
											
										?>
									<ul class="pcoded-submenu">
											<li class="<?php echo $edit;?>">
												<a href="view_members.php" data-i18n="nav.ready-to-use.registration-form">
													<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
													<span class="pcoded-mtext">Edit Members</span>
													<span class="pcoded-mcaret"></span>
												</a>
											</li>
									</ul>
									<?php
										}
									?>
								    </li>
								    </li>


								</ul>
						</nav>
				<div class="pcoded-content">