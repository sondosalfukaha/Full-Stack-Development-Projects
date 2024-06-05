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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		
		
		<!-- Jasny-bootstrap CSS -->
		<link href="vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
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
						  <h5 class="txt-light">Textual Editing</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="#"><span>Admin</span></a></li>
							<li class="active"><span>Textual Editings</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
												
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Textual Editing</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<!--Location Form-->
												<div class="form-group">
													<form action="../includes/Location.inc.php" method="POST">
														<label class="control-label mb-10 text-left">
															<i class="fa-solid fa-location-dot" style="color: #2d2de4;"></i>
															Location
															<span class="help" style="font-size:10px;">( Location As text <span style="color:red;">Not GPS Link</span>)</span>
														</label>
													<input name="Location" type="text" class="form-control" 
													value="<?php $sql = "SELECT `Location` FROM `Location`;";
													$result = $con->prepare($sql);
													$result->execute();
													$resultCheck = $result->rowCount();
													if ($resultCheck > 0) {
														echo $result->fetchColumn();
													}
													?>">
													<div>
													<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
													<input type="reset" value="rest" class="btn btn-warning mt-5">
													</div>
													</form>
												</div>
												<div class="form-group">
												<form action="../includes/Email.inc.php" method="POST">
														<label class="control-label mb-10 text-left">
														<i class="fa-solid fa-envelope" style="color:red;"></i>
															Email
															<span class="help" style="font-size:10px;"></span>
														</label>
													<input name="Email" type="Email" class="form-control" 
													value="<?php $sql = "SELECT `Email` FROM `Email`;";
													$result = $con->prepare($sql);
													$result->execute();
													$resultCheck = $result->rowCount();
													if ($resultCheck > 0) {
														echo $result->fetchColumn();
													}
													?>">
													<div>
													<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
													<input type="reset" value="rest" class="btn btn-warning mt-5">
													</div>
													
													</form>
												</div>
												<div class="form-group">
												<form action="../includes/Number.inc.php" method="POST">
														<label class="control-label mb-10 text-left">
														<i class="fa-solid fa-phone" style="color:green;"></i>
															Phone Number
															<span class="help" style="font-size:10px;">( 0779-123-123 )</span>
														</label>
													<input type="tel" id="phone" name="Number" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" class="form-control"
													value="<?php $sql = "SELECT `Number` FROM `Number`;";
													$result = $con->prepare($sql);
													$result->execute();
													$resultCheck = $result->rowCount();
													if ($resultCheck > 0) {
														echo $result->fetchColumn();
													}
													?>">
													<div>
													<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
													<input type="reset" value="rest" class="btn btn-warning mt-5">
													</div>
													</form>
												</div>
												<div class="form-group">
												<form action="../includes/WName.inc.php" method="POST">
														<label class="control-label mb-10 text-left">
														<i class="fa-solid fa-earth-africa" style="color: #74C0FC;"></i>
															Website Name
															
														</label>
													<input type="texr" name="WName" class="form-control"
													value="<?php $sql = "SELECT `WName` FROM `WName`;";
													$result = $con->prepare($sql);
													$result->execute();
													$resultCheck = $result->rowCount();
													if ($resultCheck > 0) {
														echo $result->fetchColumn();
													}
													?>">
													<div>
													<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
													<input type="reset" value="rest" class="btn btn-warning mt-5">
													</div>
													</form>
												</div>
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
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Social Media Accounts</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form class="form-horizontal">
												<div class="form-group mb-0">
													<div class="col-sm-12">
														<div class="row">
														<div class="col-sm-4"  style="display:none">
															<form action="../includes/Title.inc.php" method="POST">
																	
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Title` FROM `Title`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
														<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
														</div>
														</form>
															</div>
															<div class="col-sm-4">
															<form action="../includes/Instagram.inc.php" method="POST">
																	<i class="fa-brands fa-instagram" style="color: pink;"></i>
																	<label class="control-label mb-10">Instagram</label>
																	<input type="text" name="Instagram" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Instagram` FROM `Social`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
														<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
														</div>
														</form>
															</div>
															<div class="col-sm-4">
																<form action="../includes/Twitter.inc.php" method="POST">
																<i class="fa-brands fa-x-twitter" style="color: #000000;"></i>
																<label class="control-label mb-10">Twitter</label>
																<input type="text" name="Twitter" class="form-control filled-input" value="<?php 
																$sql = "SELECT `Twitter` FROM `Social`;";
																$result = $con->prepare($sql);
																$result->execute();
																$resultCheck = $result->rowCount();
																if ($resultCheck > 0) {
																	echo $result->fetchColumn();
																}
															?>">
															<div>
													<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
													<input type="reset" value="rest" class="btn btn-warning mt-5">
													</div>
																</form>
															</div>
															<div class="col-sm-4">
																<form action="../includes/Facebook.inc.php" method="POST">
																<i class="fa-brands fa-facebook" style="color: #1b65e4;"></i>
																<label class="control-label mb-10">Facebook</label>
																<input type="text" name="Facebook" class="form-control filled-input" value="<?php
																$sql = "SELECT `Facebook` FROM `Social`;";
																$result = $con->prepare($sql);
																$result->execute();
																$resultCheck = $result->rowCount();
																if ($resultCheck > 0) {
																	echo $result->fetchColumn();
																}
															?>">
															<div>
													<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
													<input type="reset" value="rest" class="btn btn-warning mt-5">
													</div>
																</form>
															</div>
														</div>
													</div>	
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Video View Section</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form class="form-horizontal">
												<div class="form-group mb-0">
													<div class="col-sm-12">
														<div class="row">
														<div class="col-sm-4"  style="display:none">
															<form action="../includes/Title.inc.php" method="POST">
																	
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Title` FROM `Title`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
														<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
														</div>
														</form>
															</div>
															<div class="col-sm-4">
															<form action="../includes/Title.inc.php" method="POST">
																	
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Title` FROM `Title`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
														<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
														</div>
														</form>
															</div>
															<div class="col-sm-4">
																<form action="../includes/Description.inc.php" method="POST">
																<label class="control-label mb-10">Description</label>
																<input type="text" name="Description" class="form-control filled-input" value="<?php 
																$sql = "SELECT `Description` FROM `Description`;";
																$result = $con->prepare($sql);
																$result->execute();
																$resultCheck = $result->rowCount();
																if ($resultCheck > 0) {
																	echo $result->fetchColumn();
																}
															?>">
															<div>
													<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
													<input type="reset" value="rest" class="btn btn-warning mt-5">
													</div>
																</form>
															</div>
															
														</div>
													</div>	
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<!-- Row -->
					<!--Row-->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">About (CHOOSE PROGRAM) Section</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form class="form-horizontal">
												<div class="form-group mb-0">
													<div class="col-sm-12">
														<div class="row">
														<div class="col-sm-4"  style="display:none">
															<form action="../includes/Title.inc.php" method="POST">
															<div>
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Title` FROM `section1`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
																</div>
																
																<div>
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Description` FROM `section1`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
																</div>
														<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
														</div>
														</form>
															</div>
															<div class="col-sm-4"  style="display:none">
															<form action="../includes/Title.inc.php" method="POST">
															<div>
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Title` FROM `section1`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
																</div>
																
																<div>
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Description` FROM `section1`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
																</div>
														<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
														</div>
														</form>
															</div>
															<div class="col-sm-4">
															<form action="../includes/section1.inc.php" method="POST">
																	Section1 <br>
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Title` FROM `section1`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
																
																<label class="control-label mb-10">Description</label>
																<input type="text" name="Description" class="form-control filled-input" value="<?php 
																$sql = "SELECT `Description` FROM `section1`;";
																$result = $con->prepare($sql);
																$result->execute();
																$resultCheck = $result->rowCount();
																if ($resultCheck > 0) {
																	echo $result->fetchColumn();
																}
															?>">
															
																
																<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
																</div>
														</form>
															</div>
																<!--section2-->
																<div class="col-sm-4">
															<form action="../includes/section2.inc.php" method="POST">
																	Section2 <br>
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Title` FROM `section2`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
																
																<label class="control-label mb-10">Description</label>
																<input type="text" name="Description" class="form-control filled-input" value="<?php 
																$sql = "SELECT `Description` FROM `section2`;";
																$result = $con->prepare($sql);
																$result->execute();
																$resultCheck = $result->rowCount();
																if ($resultCheck > 0) {
																	echo $result->fetchColumn();
																}
															?>">
															
																
																<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
																</div>
														</form>
																</div>
																<!--section3-->
																<div class="col-sm-4">
															<form action="../includes/section3.inc.php" method="POST">
																	Section3 <br>
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Title` FROM `section3`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
																
																<label class="control-label mb-10">Description</label>
																<input type="text" name="Description" class="form-control filled-input" value="<?php 
																$sql = "SELECT `Description` FROM `section3`;";
																$result = $con->prepare($sql);
																$result->execute();
																$resultCheck = $result->rowCount();
																if ($resultCheck > 0) {
																	echo $result->fetchColumn();
																}
															?>">
															
																
																<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
																</div>
														</form>
																</div>
																<!--section4-->
																<div class="col-sm-4">
															<form action="../includes/section4.inc.php" method="POST">
																	Section4 <br>
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Title` FROM `section4`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
																
																<label class="control-label mb-10">Description</label>
																<input type="text" name="Description" class="form-control filled-input" value="<?php 
																$sql = "SELECT `Description` FROM `section4`;";
																$result = $con->prepare($sql);
																$result->execute();
																$resultCheck = $result->rowCount();
																if ($resultCheck > 0) {
																	echo $result->fetchColumn();
																}
															?>">
															
																
																<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
																</div>
														</form>
																</div>
																<!--section5-->
																<div class="col-sm-4">
															<form action="../includes/section5.inc.php" method="POST">
																	Section5 <br>
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Title` FROM `section5`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
																
																<label class="control-label mb-10">Description</label>
																<input type="text" name="Description" class="form-control filled-input" value="<?php 
																$sql = "SELECT `Description` FROM `section5`;";
																$result = $con->prepare($sql);
																$result->execute();
																$resultCheck = $result->rowCount();
																if ($resultCheck > 0) {
																	echo $result->fetchColumn();
																}
															?>">
															
																
																<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
																</div>
														</form>
																</div>
																<!--section6-->
																<div class="col-sm-4">
															<form action="../includes/section6.inc.php" method="POST">
																	Section6 <br>
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Title` FROM `section6`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
																
																<label class="control-label mb-10">Description</label>
																<input type="text" name="Description" class="form-control filled-input" value="<?php 
																$sql = "SELECT `Description` FROM `section6`;";
																$result = $con->prepare($sql);
																$result->execute();
																$resultCheck = $result->rowCount();
																if ($resultCheck > 0) {
																	echo $result->fetchColumn();
																}
															?>">
															
																
																<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
																</div>
														</form>
																</div>
														</div>
													</div>	
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<!--Row-->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Our Classes Section</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form class="form-horizontal">
												<div class="form-group mb-0">
													<div class="col-sm-12">
														<div class="row">
														<div class="col-sm-4"  style="display:none">
															<form action="../includes/Title.inc.php" method="POST">
															<div>
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Title` FROM `section1`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
																</div>
																
																<div>
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Description` FROM `section1`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
																</div>
														<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
														</div>
														</form>
															</div>
															<div class="col-sm-4"  style="display:none">
															<form action="../includes/Title.inc.php" method="POST">
															<div>
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Title` FROM `section1`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
																</div>
																
																<div>
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Description` FROM `section1`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
																</div>
														<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
														</div>
														</form>
															</div>
															<div class="col-sm-3">
															<form action="../includes/class1.inc.php" method="POST">
																	Class1 <br>
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Title` FROM `class1`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
																
																<label class="control-label mb-10">Description</label>
																<input type="text" name="Description" class="form-control filled-input" value="<?php 
																$sql = "SELECT `Description` FROM `class1`;";
																$result = $con->prepare($sql);
																$result->execute();
																$resultCheck = $result->rowCount();
																if ($resultCheck > 0) {
																	echo $result->fetchColumn();
																}
															?>">
															
																
																<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
																</div>
														</form>
															</div>
																<!--section2-->
																<div class="col-sm-3">
															<form action="../includes/class2.inc.php" method="POST">
															Class2 <br>
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Title` FROM `class2`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
																
																<label class="control-label mb-10">Description</label>
																<input type="text" name="Description" class="form-control filled-input" value="<?php 
																$sql = "SELECT `Description` FROM `class2`;";
																$result = $con->prepare($sql);
																$result->execute();
																$resultCheck = $result->rowCount();
																if ($resultCheck > 0) {
																	echo $result->fetchColumn();
																}
															?>">
															
																
																<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
																</div>
														</form>
																</div>
																<!--section3-->
																<div class="col-sm-3">
															<form action="../includes/class3.inc.php" method="POST">
															class3 <br>
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Title` FROM `class3`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
																
																<label class="control-label mb-10">Description</label>
																<input type="text" name="Description" class="form-control filled-input" value="<?php 
																$sql = "SELECT `Description` FROM `class3`;";
																$result = $con->prepare($sql);
																$result->execute();
																$resultCheck = $result->rowCount();
																if ($resultCheck > 0) {
																	echo $result->fetchColumn();
																}
															?>">
															
																
																<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
																</div>
														</form>
																</div>
																<!--section4-->
																<div class="col-sm-3">
															<form action="../includes/class4.inc.php" method="POST">
															Class4 <br>
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Title` FROM `class4`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
																
																<label class="control-label mb-10">Description</label>
																<input type="text" name="Description" class="form-control filled-input" value="<?php 
																$sql = "SELECT `Description` FROM `class4`;";
																$result = $con->prepare($sql);
																$result->execute();
																$resultCheck = $result->rowCount();
																if ($resultCheck > 0) {
																	echo $result->fetchColumn();
																}
															?>">
															
																
																<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
																</div>
														</form>
																</div>
																
														</div>
													</div>	
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<!--Row-->
					<!--Row-->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Contact Section</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form class="form-horizontal">
												<div class="form-group mb-0">
													<div class="col-sm-12">
														<div class="row">
														<div class="col-sm-4"  style="display:none">
															<form action="../includes/Title.inc.php" method="POST">
															<div>
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Title` FROM `section1`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
																</div>
																
																<div>
																	<label class="control-label mb-10">Title</label>
																	<input type="text" name="Title" class="form-control filled-input" value="<?php
																	$sql = "SELECT `Description` FROM `section1`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>">
																</div>
														<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
														</div>
														</form>
															</div>
															<div class="col-sm-12">
															<form action="../includes/GPS.inc.php" method="POST">
															<div>
																	<label class="control-label mb-10">GPS</label>
																	<span class="help" >(Please attach the html link for the location)</span>
																	
																<textarea class="form-control filled-input" name="GPS" id="" cols="30" rows="10">
																<?php $sql = "SELECT `GPS` FROM `gps` WHERE 1;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>
																</textarea>
																</div>
																
																
														<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
														</div>
														</form>
															</div>
															
																
														</div>
													</div>	
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Row-->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Contact Section</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form class="form-horizontal">
												<div class="form-group mb-0">
													<div class="col-sm-12">
														<div class="row">
														<div class="col-sm-4">
															</div>
															<div class="col-sm-12">
															<form action="../includes/GPS.inc.php" method="POST">
															<div>
																	<label class="control-label mb-10">GPS</label>
																	<span class="help" >(Please attach the html link for the location)</span>
																	
																<textarea class="form-control filled-input" name="GPS" id="" cols="30" rows="10">
																<?php $sql = "SELECT `GPS` FROM `gps` WHERE 1;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>
																</textarea>
																</div>
																
																
														<div>
														<Button type="submit" class="btn btn-primary mt-5" value="Save">Save</Button>
														<input type="reset" value="rest" class="btn btn-warning mt-5">
														</div>
														</form>
															</div>
															
																
														</div>
													</div>	
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
			<!-- /Main Content -->
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>
</html>