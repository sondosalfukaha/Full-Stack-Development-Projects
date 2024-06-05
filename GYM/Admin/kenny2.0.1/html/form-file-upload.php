<?php 
# link with DB
include '../includes/connection.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Admin dashboard</title>
		<meta name="description" content="Kenny is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Kenny Admin, kennyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- Bootstrap Dropify CSS -->
		<link href="vendors/bower_components/dropify/dist/css/dropify.min.css" rel="stylesheet" type="text/css"/>
				 
		
		
		<!-- Custom CSS -->
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		<div class="wrapper">
			<!-- Top Menu Items -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block mr-20 pull-left" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
				<a href="index.html"><img class="brand-img pull-left" src="dist/img/logo.png" alt="brand"/></a>
				<ul class="nav navbar-right top-nav pull-right">
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#site_navbar_search">
						<i class="fa fa-search top-nav-icon"></i>
						</a>
					</li>
					<li>
						<a id="open_right_sidebar" href="javascript:void(0);"><i class="fa fa-cog top-nav-icon"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-th top-nav-icon"></i></a>
						<ul class="dropdown-menu app-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
							<li>
								<ul class="app-icon-wrap">
									<li>
										<a href="#" class="connection-item">
										<i class="pe-7s-umbrella txt-info"></i>
										<span class="block">weather</span>
										</a>
									</li>
									<li>
										<a href="#" class="connection-item">
										<i class="pe-7s-mail-open-file txt-success"></i>
										<span class="block">e-mail</span>
										</a>
									</li>
									<li>
										<a href="#" class="connection-item">
										<i class="pe-7s-date txt-primary"></i>
										<span class="block">calendar</span>
										</a>
									</li>
									<li>
										<a href="#" class="connection-item">
										<i class="pe-7s-map txt-danger"></i>
										<span class="block">map</span>
										</a>
									</li>
									<li>
										<a href="#" class="connection-item">
										<i class="pe-7s-comment txt-warning"></i>
										<span class="block">chat</span>
										</a>
									</li>
									<li>
										<a href="#" class="connection-item">
										<i class="pe-7s-notebook"></i>
										<span class="block">contact</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="divider"></li>
							<li class="text-center"><a href="#">More</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell top-nav-icon"></i><span class="top-nav-icon-badge">5</span></a>
						<ul  class="dropdown-menu alert-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
							<li>
								<div class="streamline message-box message-nicescroll-bar">
									<div class="sl-item">
										<div class="sl-avatar avatar avatar-sm avatar-circle">
											<img class="img-responsive img-circle" src="dist/img/user.png" alt="avatar"/>
										</div>
										<div class="sl-content">
											<a href="javascript:void(0)" class="inline-block capitalize-font  pull-left">Sandy Doe</a>
											<span class="inline-block font-12  pull-right">12/10/16</span>
											<div class="clearfix"></div>
											<p>Neque porro quisquam est!</p>
										</div>
									</div>
									<hr/>
									<div class="sl-item">
										<div class="icon">
											<i class="fa fa-spotify"></i>
										</div>
										<div class="sl-content">
											<a href="javascript:void(0)" class="inline-block capitalize-font  pull-left">
											2 voice mails</a>
											<span class="inline-block font-12  pull-right">2pm</span>
											<div class="clearfix"></div>
											<p>Neque porro quisquam est</p>
										</div>
									</div>
									<hr/>
									<div class="sl-item">
										<div class="icon">
											<i class="fa fa-whatsapp"></i>
										</div>
										<div class="sl-content">
											<a href="javascript:void(0)" class="inline-block capitalize-font  pull-left">8 voice messanger</a>
											<span class="inline-block font-12 pull-right">1pm</span>
											<div class="clearfix"></div>
											<p>8 texts</p>
										</div>
									</div>
									<hr/>
									<div class="sl-item">
										<div class="icon">
											<i class="fa fa-envelope"></i>
										</div>
										<div class="sl-content">
											<a href="javascript:void(0)" class="inline-block capitalize-font  pull-left">2 new messages</a>
											<span class="inline-block font-12  pull-right">1pm</span>
											<div class="clearfix"></div>
											<p>ashjs@gmail.com</p>
										</div>
									</div>
									<hr/>
									<div class="sl-item">
										<div class="sl-avatar avatar avatar-sm avatar-circle">
											<img class="img-responsive img-circle" src="dist/img/user4.png" alt="avatar"/>
										</div>
										<div class="sl-content">
											<a href="javascript:void(0)" class="inline-block capitalize-font  pull-left">Sandy Doe</a>
											<span class="inline-block font-12  pull-right">1pm</span>
											<div class="clearfix"></div>
											<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="dist/img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
							<li>
								<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-fw fa-credit-card-alt"></i> my balance</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
							</li>
						</ul>
					</li>
				</ul>
				<div class="collapse navbar-search-overlap" id="site_navbar_search">
					<form role="search">
						<div class="form-group mb-0">
							<div class="input-search">
								<div class="input-group">	
									<input type="text" id="overlay_search" name="overlay-search" class="form-control pl-30" placeholder="Search">
									<span class="input-group-addon pr-30">
									<a  href="javascript:void(0)" class="close-input-overlay" data-target="#site_navbar_search" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="fa fa-times"></i></a>
									</span> 
								</div>
							</div>
						</div>
					</form>
				</div>
			</nav>
			<!-- /Top Menu Items -->
			
			<!-- Left Sidebar Menu -->
			<div class="fixed-sidebar-left">
				<ul class="nav navbar-nav side-nav nicescroll-bar">
					<li>
						<a href="form-element.php" data-toggle="collapse" data-target="#form_dr"><img src="dist/img/logo.png" alt="">Textual Editings<span class="pull-right"></span></a>
							<a href="form-file-upload.php" data-toggle="collapse" data-target="#form_dr"><img src="dist/img/logo.png" alt="">Images Editings<span class="pull-right"></span></a>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /Left Sidebar Menu -->
			
			<!-- Right Sidebar Menu -->
			<div class="fixed-sidebar-right">
				<ul class="right-sidebar nicescroll-bar">
					<li>
						<div  class="tab-struct custom-tab-1">
							<ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
								<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="chat_tab_btn" href="#chat_tab">chat</a></li>
								<li role="presentation" class=""><a  data-toggle="tab" id="messages_tab_btn" role="tab" href="#messages_tab" aria-expanded="false">messages</a></li>
								<li role="presentation" class=""><a  data-toggle="tab" id="todo_tab_btn" role="tab" href="#todo_tab" aria-expanded="false">todo</a></li>
							</ul>
							<div class="tab-content" id="right_sidebar_content">
								<div  id="chat_tab" class="tab-pane fade active in" role="tabpanel">
									<div class="chat-cmplt-wrap">
										<div class="chat-box-wrap">
											<form role="search">
												<div class="input-group mb-15">
													<input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
													<span class="input-group-btn">
													<button type="button" class="btn  btn-default"><i class="fa fa-search"></i></button>
													</span>
												</div>
											</form>
											<ul class="chat-list-wrap">
												<li class="chat-list">
													<div class="chat-body">
														<a  href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="dist/img/user.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">ryan gosling</span>
																	<span class="time block txt-grey">2pm</span>
																</div>
																<div class="status away"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a  href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="dist/img/user1.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">ryan gosling</span>
																	<span class="time block txt-grey">1pm</span>
																</div>
																<div class="status offline"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a  href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="dist/img/user2.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">ryan gosling</span>
																	<span class="time block txt-grey">2pm</span>
																</div>
																<div class="status online"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a  href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="dist/img/user3.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">ryan gosling</span>
																	<span class="time block txt-grey">2pm</span>
																</div>
																<div class="status online"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a  href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="dist/img/user4.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">ryan gosling</span>
																	<span class="time block txt-grey">2pm</span>
																</div>
																<div class="status online"></div>
																<div class="clearfix"></div>
															</div>
														</a>
													</div>
												</li>
											</ul>
										</div>
										<div class="recent-chat-box-wrap">
											<div class="panel panel-success card-view">
												<div class="panel-heading mb-20">
													<a class="goto-chat-list txt-light" href="javascript:void(0);"><i class="ti-angle-left"></i></a>
													<div class="text-center">
														<h6 class="panel-title txt-light">Alan Gilchrist</h6>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="panel-wrapper collapse in">
													<div class="panel-body">
														<div class="chat-content">
															<ul>
																<li class="friend">
																	<div class="friend-msg-wrap">
																		<img class="user-img img-circle block pull-left"  src="dist/img/user.png" alt="user"/>
																		<div class="msg pull-left">A forest is a large area of land covered with trees
																			<div class="msg-per-detail mt-5">
																				<span class="msg-per-name pr-5 txt-success">ryan</span>
																				<span class="msg-time txt-grey">2:30pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>	
																</li>
																<li class="self">
																	<div class="self-msg-wrap">
																		<div class="msg block pull-right"> Provide ecosystem...
																			<div class="msg-per-detail mt-5">
																				<span class="msg-time txt-grey">2:30pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>	
																</li>
																<li class="friend">
																	<div class="friend-msg-wrap">
																		<img class="user-img img-circle block pull-left"  src="dist/img/user.png" alt="user"/>
																		<div class="msg pull-left"> Account for 75% of the gross primary productivity of them Earth's biosphere
																			<div class="msg-per-detail mt-5">
																				<span class="msg-per-name pr-5 txt-success">ryan</span>
																				<span class="msg-time txt-grey">2:30pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>	
																</li>
															</ul>
														</div>
														<div class="input-group">
															<div class="input-group-btn">
																<div class="dropup">
																	<button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-smile-o"></i></button>
																	<ul class="dropdown-menu dropdown-menu-right">
																		<li><a href="javascript:void(0)">Action</a></li>
																		<li><a href="javascript:void(0)">Another action</a></li>
																		<li class="divider"></li>
																		<li><a href="javascript:void(0)">Separated link</a></li>
																	</ul>
																</div>
															</div>
															
															<input type="text" id="input_msg_send" name="send-msg" class="form-control" placeholder="Type something">
															<div class="input-group-btn">
																<div class="fileupload btn  btn-default"><i class="fa fa-paperclip"></i>
																	<input type="file" class="upload">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div id="messages_tab" class="tab-pane fade" role="tabpanel">
									<div class="message-box-wrap">
										<div class="streamline message-box">
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="dist/img/user.png" alt="avatar"/>
												</div>
												<div class="sl-content">
													<a href="javascript:void(0)" class="inline-block capitalize-font  mb-5 pull-left">Sandy Doe</a>
													<span class="inline-block font-12 mb-5 pull-right">12/10/16</span>
													<div class="clearfix"></div>
													<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
											<hr/>
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="dist/img/user1.png" alt="avatar"/>
												</div>
												<div class="sl-content">
													<a href="javascript:void(0)" class="inline-block capitalize-font  mb-5 pull-left">Sandy Doe</a>
													<span class="inline-block font-12 mb-5 pull-right">2pm</span>
													<div class="clearfix"></div>
													<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
											<hr/>
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="dist/img/user2.png" alt="avatar"/>
												</div>
												<div class="sl-content">
													<a href="javascript:void(0)" class="inline-block capitalize-font  mb-5 pull-left">Sandy Doe</a>
													<span class="inline-block font-12 mb-5 pull-right">1pm</span>
													<div class="clearfix"></div>
													<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
											<hr/>
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="dist/img/user3.png" alt="avatar"/>
												</div>
												<div class="sl-content">
													<a href="javascript:void(0)" class="inline-block capitalize-font  mb-5 pull-left">Sandy Doe</a>
													<span class="inline-block font-12 mb-5 pull-right">1pm</span>
													<div class="clearfix"></div>
													<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
											<hr/>
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="dist/img/user4.png" alt="avatar"/>
												</div>
												<div class="sl-content">
													<a href="javascript:void(0)" class="inline-block capitalize-font  mb-5 pull-left">Sandy Doe</a>
													<span class="inline-block font-12 mb-5 pull-right">1pm</span>
													<div class="clearfix"></div>
													<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div  id="todo_tab" class="tab-pane fade" role="tabpanel">
									<div class="todo-box-wrap">
										<!-- Todo-List -->
										<ul class="todo-list">
											<li class="todo-item">
												<div class="checkbox checkbox-default">
													<input type="checkbox" id="checkbox01"/>
													<label for="checkbox01">Record The First Episode Of HTML Tutorial</label>
												</div>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-pink">
													<input type="checkbox" id="checkbox02"/>
													<label for="checkbox02">Prepare The Conference Schedule</label>
												</div>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-warning">
													<input type="checkbox" id="checkbox03" checked/>
													<label for="checkbox03">Decide The Live Discussion Time</label>
												</div>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-success">
													<input type="checkbox" id="checkbox04" checked/>
													<label for="checkbox04">Prepare For The Next Project</label>
												</div>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-danger">
													<input type="checkbox" id="checkbox05" checked/>
													<label for="checkbox05">Finish Up AngularJs Tutorial</label>
												</div>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-purple">
													<input type="checkbox" id="checkbox06" checked/>
													<label for="checkbox06">Finish Infinity Project</label>
												</div>
											</li>
										</ul>
										<!-- /Todo-List -->
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<!-- /Right Sidebar Menu -->
			
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg bg-blue">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-light">file upload (Dropify)</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>forms</span></a></li>
							<li class="active"><span>file upload</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-6 ol-md-6 col-xs-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Update Fav Icon</h6>
									</div>
									
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										
										<p class="text-muted">Update favicon to more suitable one by drag it here:</p>
										<div class="mt-40">
											<form action="../includes/faciconHandler.inc.php" method="post" enctype="multipart/form-data">
												<input type="file" id="input-file-now" name="uploadfile" class="dropify"
													data-default-file = <?php 
														$sql = "SELECT `Favicon` FROM `favicon` WHERE 1;";
														$result = $con->prepare($sql);
														$result->execute();
														$resultCheck = $result->rowCount();
														if ($resultCheck > 0) {
															$value = $result->fetchColumn();
															$width = 100;
															$height = 100;
															echo "\"../Uploads/$value\" width=\"$width\" height=\"$height";
														}
													?>/>
													<input type="submit" value="">
												<button class="btn btn-primary mt-20" type="submit">Save Changes</button>
											</form>
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 ol-md-6 col-xs-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Update Website Logo</h6>
									</div>
									
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										
										<p class="text-muted">Update Website Logo to more suitable one by drag it here:</p>
										<div class="mt-40">
											<form action="../includes/LogoHandler.inc.php" method="post" enctype="multipart/form-data">
												<input type="file" id="input-file-now" name="uploadfile" class="dropify"
													data-default-file = <?php 
														$sql = "SELECT `Logo` FROM `logo` WHERE 1;";
														$result = $con->prepare($sql);
														$result->execute();
														$resultCheck = $result->rowCount();
														if ($resultCheck > 0) {
															$value = $result->fetchColumn();
															$width = 100;
															$height = 100;
															echo "\"../Uploads/$value\" width=\"$width\" height=\"$height";
														}
													?>/>
													<input type="submit" value="">
												<button class="btn btn-primary mt-20" type="submit">Save Changes</button>
											</form>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->

					<!-- Row -->
					<div class="row">
					<div class="col-sm-6 ol-md-6 col-xs-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Update Slider Video</h6>
									</div>
									
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										
										<p class="text-muted">Update Slider Video to more suitable one by drag it here:</p>
										<div class="mt-40">
											<form action="../includes/sliderVHandler.inc.php" method="post" enctype="multipart/form-data">
												<input type="file" id="input-file-now" name="uploadfile" class="dropify"
													data-default-file = <?php 
														$sql = "SELECT `Slider` FROM `Slider` WHERE 1;";
														$result = $con->prepare($sql);
														$result->execute();
														$resultCheck = $result->rowCount();
														if ($resultCheck > 0) {
															$value = $result->fetchColumn();
															$width = 100;
															$height = 100;
															echo "\"../Uploads/$value\" width=\"$width\" height=\"$height";
														}
													?>/>
													<input type="submit" value="">
												<button class="btn btn-primary mt-20" type="submit">Save Changes</button>
											</form>
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 ol-md-6 col-xs-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Update About Section Icons</h6>
									</div>
									
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										
										<p class="text-muted">All Icons will be the same there is just one icon for editing:</p>
										<div class="mt-40">
											<form action="../includes/iconHandler.inc.php" method="post" enctype="multipart/form-data">
												<input type="file" id="input-file-now" name="uploadfile" class="dropify"
													data-default-file = <?php 
														$sql = "SELECT `Icon` FROM `Icon` WHERE 1;";
														$result = $con->prepare($sql);
														$result->execute();
														$resultCheck = $result->rowCount();
														if ($resultCheck > 0) {
															$value = $result->fetchColumn();
															$width = 100;
															$height = 100;
															echo "\"../Uploads/$value\" width=\"$width\" height=\"$height";
														}
													?>/>
													<input type="submit" value="">
												<button class="btn btn-primary mt-20" type="submit">Save Changes</button>
											</form>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->

					<!-- Row -->
					<div class="row">
						<h1 class="text-center mt-40 mb-40">OUR CLASSES</h1>
					<div class="col-sm-3 col-md-3 col-xs-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">First Class Image</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<form action="../includes/class1ImageHandler.inc.php" method="post" enctype="multipart/form-data">
												<input type="file" id="input-file-now" name="uploadfile" class="dropify"
													data-default-file = <?php 
														$sql = "SELECT `Class1Image` FROM `Class1Image` WHERE 1;";
														$result = $con->prepare($sql);
														$result->execute();
														$resultCheck = $result->rowCount();
														if ($resultCheck > 0) {
															$value = $result->fetchColumn();
															$width = 100;
															$height = 100;
															echo "\"../Uploads/$value\" width=\"$width\" height=\"$height";
														}
													?>/>
													<input type="submit" value="">
												<button class="btn btn-primary mt-20" type="submit">Save Changes</button>
											</form>
							</div>
						</div>
						<div class="col-sm-3 col-md-3 col-xs-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Second Class Image</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<form action="../includes/class2ImageHandler.inc.php" method="post" enctype="multipart/form-data">
												<input type="file" id="input-file-now" name="uploadfile" class="dropify"
													data-default-file = <?php 
														$sql = "SELECT `Class2Image` FROM `Class2Image` WHERE 1;";
														$result = $con->prepare($sql);
														$result->execute();
														$resultCheck = $result->rowCount();
														if ($resultCheck > 0) {
															$value = $result->fetchColumn();
															$width = 100;
															$height = 100;
															echo "\"../Uploads/$value\" width=\"$width\" height=\"$height";
														}
													?>/>
													<input type="submit" value="">
												<button class="btn btn-primary mt-20" type="submit">Save Changes</button>
											</form>
							</div>
						</div>
						<div class="col-sm-3 col-md-3 col-xs-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Third Class Image</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<form action="../includes/class3ImageHandler.inc.php" method="post" enctype="multipart/form-data">
												<input type="file" id="input-file-now" name="uploadfile" class="dropify"
													data-default-file = <?php 
														$sql = "SELECT `Class3Image` FROM `Class3Image` WHERE 1;";
														$result = $con->prepare($sql);
														$result->execute();
														$resultCheck = $result->rowCount();
														if ($resultCheck > 0) {
															$value = $result->fetchColumn();
															$width = 100;
															$height = 100;
															echo "\"../Uploads/$value\" width=\"$width\" height=\"$height";
														}
													?>/>
													<input type="submit" value="">
												<button class="btn btn-primary mt-20" type="submit">Save Changes</button>
											</form>
							</div>
						</div>
						<div class="col-sm-3 col-md-3 col-xs-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Fourth Class Image</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<form action="../includes/class4ImageHandler.inc.php" method="post" enctype="multipart/form-data">
												<input type="file" id="input-file-now" name="uploadfile" class="dropify"
													data-default-file = <?php 
														$sql = "SELECT `Class4Image` FROM `Class4Image` WHERE 1;";
														$result = $con->prepare($sql);
														$result->execute();
														$resultCheck = $result->rowCount();
														if ($resultCheck > 0) {
															$value = $result->fetchColumn();
															$width = 100;
															$height = 100;
															echo "\"../Uploads/$value\" width=\"$width\" height=\"$height";
														}
													?>/>
													<input type="submit" value="">
												<button class="btn btn-primary mt-20" type="submit">Save Changes</button>
											</form>
							</div>
						</div>
						
					</div>
					<!-- /Row -->
				</div>
				
				<!-- Footer -->
				<footer class="footer container-fluid pl-30 pr-30"> 
					<div class="row">
						<div class="col-sm-5">
							<a href="index.html" class="brand mr-30"><img src="dist/img/logo-sm.png" alt="logo"/></a>
							<ul class="footer-link nav navbar-nav">
								<li class="logo-footer"><a href="#">help</a></li>
								<li class="logo-footer"><a href="#">terms</a></li>
								<li class="logo-footer"><a href="#">privacy</a></li>
							</ul>
						</div>
						<div class="col-sm-7 text-right">
							<p>2016 &copy; Kenny. Pampered by Hencework</p>
						</div>	
					</div>	
				</footer>
				<!-- /Footer -->
				
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScripts -->
		
		<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<!-- Bootstrap Daterangepicker JavaScript -->
		<script src="vendors/bower_components/dropify/dist/js/dropify.min.js"></script>
		
		<!-- Form Flie Upload Data JavaScript -->
		<script src="dist/js/form-file-upload-data.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
		
	</body>
</html>