<?php
include 'Admin/includes/dbh.inc.php';
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php
    // Assuming $con is the PDO database connection object
    $sql = "SELECT `image` FROM `image`;";
    $result = $con->prepare($sql);
    $result->execute();
    $resultCheck = $result->rowCount();

    if ($resultCheck > 0) {
        $imageData = $result->fetchColumn();
        echo '<link rel="icon" href="data:image/png;base64,' . base64_encode($imageData) . '" type="image/png">';
    }
?>

	<title>Clever Mind Pop</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="Assets OF Software/css/bootstrap.css">
	<link rel="stylesheet" href="Assets OF Software/vendors/linericon/style.css">
	<link rel="stylesheet" href="Assets OF Software/css/font-awesome.min.css">
	<link rel="stylesheet" href="Assets OF Software/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="Assets OF Software/css/magnific-popup.css">
	<link rel="stylesheet" href="Assets OF Software/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="Assets OF Software/vendors/animate-css/animate.css">
	<link rel="stylesheet" href="Assets OF Software/vendors/flaticon/flaticon.css">
	<!-- main css -->
	<link rel="stylesheet" href="Assets OF Software/css/style.css">
</head>
<body>
	
	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="Assets OF Software/img/Website Logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center">
							<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
							<!--------------------------------------SONDOS EDIT HERE-------------------------->
							<li class="nav-item"><a class="nav-link" href="#">ABOUT US</a></li>
							<li class="nav-item"><a class="nav-link" href="#">OUR SERVES</a></li>
							<li class="nav-item"><a class="nav-link" href="#">OUR WORKS</a></li>
							<li class="nav-item"><a class="nav-link" href="#">OUR TEAM</a></li>
							<li class="nav-item"><a class="nav-link" href="#">CONTACT US</a></li>
							<!--<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="#" class="primary_btn text-uppercase">free trial</a></li>
						</ul>-->
						<!--------------------------------------SONDOS EDIT HERE-------------------------->
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="banner_content">
<!--------------------------------------SONDOS EDIT HERE-------------------------->
							<h2>
								<?php 
								$sql = "SELECT H2 FROM imageview;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$h2_value = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $h2_value;

								}
								?>
							</h2>
							<p>
							<?php 
								$sql = "SELECT P FROM imageview;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$h2_value = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $h2_value;

								}
								?>
							</p>
<!--------------------------------------SONDOS EDIT HERE-------------------------->
							<div class="d-flex align-items-center">
								<a class="primary_btn" href="#ABOUT"><span>Get Started</span></a>
<!--------------------------------------SONDOS EDIT HERE-------------------------->
								<!--<a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?time_continue=2&v=J9YzcEe29d0">-->
<!--------------------------------------SONDOS EDIT HERE-------------------------->
									<span></span>
								</a>
<!--------------------------------------SONDOS EDIT HERE-------------------------->
							<!--<div class="watch_video text-uppercase">
									watch the video
								</div> -->
<!--------------------------------------SONDOS EDIT HERE-------------------------->
							</div>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="home_right_img">
							<img class="img-fluid" src="Assets OF Software/img/banner/home-right.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Start Features Area =================-->
	<section id="ABOUT" class="section_gap features_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<!--------------------------------------SONDOS EDIT HERE-------------------------->
						<p class="top_title"><?php 
								$sql = "SELECT Title1 FROM aboutus;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$Title1 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $Title1;

								}
								?></p>
						<!--------------------------------------SONDOS EDIT HERE-------------------------->
						<h2><?php 
								$sql = "SELECT Title2 FROM aboutus;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$Title2 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $Title2;

								}
								?></h2>
						<!--------------------------------------SONDOS EDIT HERE-------------------------->
						<p><?php 
								$sql = "SELECT Description1 FROM aboutus;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$Description1 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $Description1;

								}
								?></p>
							<!--------------------------------------SONDOS EDIT HERE-------------------------->
						<!--<a href="#" class="primary_btn"><span>Start Free Trial Now!</span></a>-->
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="left_features">
							<!--------------------------------------SONDOS EDIT HERE-------------------------->
							<?php
            $sql = "SELECT `imageAbout` FROM `underaboutus`;";
            $result = $con->prepare($sql);
            $result->execute();
            $resultCheck = $result->rowCount();

            if ($resultCheck > 0) {
                $imageData = $result->fetchColumn();
                echo '<img src="data:image/png;base64,' . base64_encode($imageData) . '" type="image/png" class="img-fluid" >';
            }
        ?>							<!--------------------------------------SONDOS EDIT HERE-------------------------->
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<!-- single features -->
					<div class="single_feature">
						<div class="feature_head">
							<span class="lnr lnr-screen"></span>
							<!--------------------------------------SONDOS EDIT HERE-------------------------->
							<h4><?php 
								$sql = "SELECT Item1 FROM underaboutus;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item1 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item1;

								}?></h4>
							<!--------------------------------------SONDOS EDIT HERE-------------------------->
						</div>
						<div class="feature_content">
							<!--<p>Here, I focus on a range of items and features that we use in life without giving them a second thought such as Coca Cola.</p>-->
						</div>
					</div>
					<!-- single features -->
					<div class="single_feature">
						<div class="feature_head">
							<span class="lnr lnr-screen"></span>
							<!--------------------------------------SONDOS EDIT HERE-------------------------->
							<h4><?php 
								$sql = "SELECT Item1 FROM underaboutus;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item2 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item2;

								}?></h4>
					        <!--------------------------------------SONDOS EDIT HERE-------------------------->

						</div>
						<div class="feature_content">
							<!--<p>Here, I focus on a range of items and features that we use in life without giving them a second thought such as Coca Cola.</p>-->
						</div>
					</div>
					<!-- single features -->
					<div class="single_feature">
						<div class="feature_head">
							<span class="lnr lnr-screen"></span>
							<!--------------------------------------SONDOS EDIT HERE-------------------------->
							<h4><?php 
								$sql = "SELECT Item3 FROM underaboutus;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item3 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item3;

								}?></h4>
							<!--------------------------------------SONDOS EDIT HERE-------------------------->
						</div>
						<div class="feature_content">
							<!--------------------------------------SONDOS EDIT HERE-------------------------->
							<!--<p>Here, I focus on a range of items and features that we use in life without giving them a second thought such as Coca Cola.</p>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Features Area =================-->

	<!--================Recent Update Area =================-->
	<section class="recent_update_area">
		<div class="container">
			<div class="recent_update_inner">
				<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
							<span class="lnr lnr-screen"></span>
							<!--------------------------------------SONDOS EDIT HERE-------------------------->
							<h6>
							<?php 
								$sql = "SELECT Tab1 FROM ourservers;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$h2_value = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $h2_value;

								}
								?>
							</h6>
							<!--------------------------------------SONDOS EDIT HERE-------------------------->
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
						 aria-selected="false">
						 <span class="lnr lnr-screen"></span>
<!--------------------------------------SONDOS EDIT HERE-------------------------->
     			         <h6>
						  <?php 
								$sql = "SELECT Tab2 FROM ourservers;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$h2_value = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $h2_value;

								}
								?>
						 </h6>
<!--------------------------------------SONDOS EDIT HERE-------------------------->
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
						 aria-selected="false">
						 <span class="lnr lnr-screen"></span>
<!--------------------------------------SONDOS EDIT HERE-------------------------->
					     <h6>
						 <?php 
								$sql = "SELECT Tab3 FROM ourservers;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$h2_value = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $h2_value;

								}
								?>
						 </h6>
<!--------------------------------------SONDOS EDIT HERE-------------------------->
						</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="row recent_update_text align-items-center">
							<div class="col-lg-5">
								<div class="common_style">
<!--------------------------------------SONDOS EDIT HERE-------------------------->
									<p class="line">
									<?php 
								$sql = "SELECT Tab1 FROM ourservers;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$h2_value = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $h2_value;

								}
								?>
									</p>
									<!--<h3>We Believe that <br /> Inner beauty Lasts Long</h3>-->
									<p>We're Covering all Software Development Solutions With a Smart Way of
										Thinking to Give Our Clients the Best Resources for Businesses and Lead them
										towards Smart Ways.and Build Web & Mobile Technology and all Software
										Development , that Provide For Our clients All Needs For businesses and lead
										them towards Smart Ways , also We provide technical support throughout the
										year 24/7.
										</p>
									<!--<a class="primary_btn" href="#"><span>Learn More</span></a>-->
<!--------------------------------------SONDOS EDIT HERE-------------------------->
								</div>
							</div>
							<div class="col-lg-6">
								<div class="chart_img">
									<img class="img-fluid" src="Assets OF Software/img/chart.png" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="row recent_update_text align-items-center">
							<div class="col-lg-5">
								<div class="common_style">
<!--------------------------------------SONDOS EDIT HERE-------------------------->
									<p class="line">
									<?php 
								$sql = "SELECT Tab2 FROM ourservers;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$h2_value = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $h2_value;

								}
								?>
									</p>
									<!--<h3>We Believe that <br /> Inner beauty Lasts Long</h3>-->
									<p>One of The Most Amazing Thing is, to Give Our Youth The Best Training For
										Increase Their Passion for The Best Future.
									</p>
									<!--<a class="primary_btn" href="#"><span>Learn More</span></a>-->
<!--------------------------------------SONDOS EDIT HERE-------------------------->
								</div>
							</div>
							<div class="col-lg-6">
								<div class="chart_img">
									<img class="img-fluid" src="Assets OF Software/img/chart.png" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						<div class="row recent_update_text align-items-center">
							<div class="col-lg-5">
								<div class="common_style">
<!--------------------------------------SONDOS EDIT HERE-------------------------->
									<p class="line">
									<?php 
								$sql = "SELECT Tab3 FROM ourservers;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$h2_value = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $h2_value;

								}
								?>
									</p>
									<!--<h3>We Believe that <br /> Inner beauty Lasts Long</h3>-->
									<p>In Clever Mind POB We Provide All Courses About Softwares Development and
										the Most Common things in IT Business</p>
									<!--<a class="primary_btn" href="#"><span>Learn More</span></a>-->
<!--------------------------------------SONDOS EDIT HERE-------------------------->
								</div>
							</div>
							<div class="col-lg-6 text-right">
								<div class="chart_img">
									<img class="img-fluid" src="Assets OF Software/img/chart.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ Recent Update Area =================-->

	<!--================Start Big Features Area =================-->
	<section class="section_gap big_features">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
<!--------------------------------------SONDOS EDIT HERE-------------------------->
						<p class="top_title"><?php
				$sql = "SELECT Title11 FROM ourworks;";
				$result = $con->prepare($sql);
				$result->execute();
							$resultCheck = $result->rowCount();
				if($resultCheck > 0) {
							// Fetch the value of the column H2
						$tap1_value = $result->fetchColumn();
							// Output the value inside the <h2> tag
							echo $tap1_value;
				}
				?></p>
						<h2><?php
				$sql = "SELECT Title12 FROM ourworks;";
				$result = $con->prepare($sql);
				$result->execute();
							$resultCheck = $result->rowCount();
				if($resultCheck > 0) {
							// Fetch the value of the column H2
						$tap1_value = $result->fetchColumn();
							// Output the value inside the <h2> tag
							echo $tap1_value;
				}
				?></h2>
						<p><?php
				$sql = "SELECT Paragraph11 FROM ourworks;";
				$result = $con->prepare($sql);
				$result->execute();
							$resultCheck = $result->rowCount();
				if($resultCheck > 0) {
							// Fetch the value of the column H2
						$tap1_value = $result->fetchColumn();
							// Output the value inside the <h2> tag
							echo $tap1_value;
				}
				?></p>
<!--------------------------------------SONDOS EDIT HERE-------------------------->
					</div>
				</div>
			</div>
			<div class="row features_content">
				<div class="col-lg-4 offset-lg-1">
					<div class="big_f_left">
						<img class="img-fluid" src=" Assets OF Software/img/f-img1.png" alt="">
					</div>
				</div>
				<div class="col-lg-4 offset-lg-2">
					<div class="common_style">
<!--------------------------------------SONDOS EDIT HERE-------------------------->

						<p class="line"><?php
				$sql = "SELECT Title21 FROM ourworks;";
				$result = $con->prepare($sql);
				$result->execute();
							$resultCheck = $result->rowCount();
				if($resultCheck > 0) {
							// Fetch the value of the column H2
						$tap1_value = $result->fetchColumn();
							// Output the value inside the <h2> tag
							echo $tap1_value;
				}
				?></p>
						<h3><?php
				$sql = "SELECT Title22 FROM ourworks;";
				$result = $con->prepare($sql);
				$result->execute();
							$resultCheck = $result->rowCount();
				if($resultCheck > 0) {
							// Fetch the value of the column H2
						$tap1_value = $result->fetchColumn();
							// Output the value inside the <h2> tag
							echo $tap1_value;
				}
				?></h3>
						<p><?php
				$sql = "SELECT Paragraph21 FROM ourworks;";
				$result = $con->prepare($sql);
				$result->execute();
							$resultCheck = $result->rowCount();
				if($resultCheck > 0) {
							// Fetch the value of the column H2
						$tap1_value = $result->fetchColumn();
							// Output the value inside the <h2> tag
							echo $tap1_value;
				}
				?></p>
						<!--<a class="primary_btn" href="#"><span>Learn More</span></a>-->

<!--------------------------------------SONDOS EDIT HERE-------------------------->
					</div>
				</div>
				<div class="border-line"></div>
				<img class="shape1"src=" Assets OF Software/img/shape1.png" alt="">		
				<img class="shape2"src=" Assets OF Software/img/shape2.png" alt="">		
				<img class="shape3"src=" Assets OF Software/img/shape1.png" alt="">		
			</div>

			<div class="row features_content bottom-features">
				<div class="col-lg-5">
					<div class="common_style">
<!--------------------------------------SONDOS EDIT HERE-------------------------->

						<p class="line"><?php
				$sql = "SELECT Title31 FROM ourworks;";
				$result = $con->prepare($sql);
				$result->execute();
							$resultCheck = $result->rowCount();
				if($resultCheck > 0) {
							// Fetch the value of the column H2
						$tap1_value = $result->fetchColumn();
							// Output the value inside the <h2> tag
							echo $tap1_value;
				}
				?></p>
						<h3><?php
				$sql = "SELECT Title32 FROM ourworks;";
				$result = $con->prepare($sql);
				$result->execute();
							$resultCheck = $result->rowCount();
				if($resultCheck > 0) {
							// Fetch the value of the column H2
						$tap1_value = $result->fetchColumn();
							// Output the value inside the <h2> tag
							echo $tap1_value;
				}
				?></h3>
						<p><?php
				$sql = "SELECT Paragraph31 FROM ourworks;";
				$result = $con->prepare($sql);
				$result->execute();
							$resultCheck = $result->rowCount();
				if($resultCheck > 0) {
							// Fetch the value of the column H2
						$tap1_value = $result->fetchColumn();
							// Output the value inside the <h2> tag
							echo $tap1_value;
				}
				?></p>
						<!--<a class="primary_btn" href="#"><span>Learn More</span></a>-->

						<!--------------------------------------SONDOS EDIT HERE-------------------------->
					</div>
				</div>
				<div class="col-lg-5 offset-lg-2">
					<div class="big_f_left">
						<img class="img-fluid" src=" Assets OF Software/img/f-img2.png" alt="">
					</div>
				</div>
				<div class="border-line"></div>
				<img class="shape1"src=" Assets OF Software/img/shape1.png" alt="">		
				<img class="shape2"src=" Assets OF Software/img/shape2.png" alt="">		
				<img class="shape3"src=" Assets OF Software/img/shape1.png" alt="">		
			</div>
		</div>
	</section>
	<!--================End Big Features Area =================-->
	
	<!--================Srart Pricing Area =================-->
	<!--<section class="price_area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<p class="top_title">Features Specifications</p>
						<h2>Amazing Features That make it Awesome!</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
					</div>
				</div>
			</div>
			<div class="price_inner row justify-content-center">
				<div class="col-lg-4 col-md-6">
					<div class="price_item">
						<div class="price_head">
							<h4>Real Basic</h4>
						</div>
						<div class="price_body">
							<ul class="list">
								<li><a href="#">2.5 GB Space</a></li>
								<li><a href="#">Secure Online Transfer</a></li>
								<li><a href="#">Unlimited Styles</a></li>
								<li><a href="#">Customer Service</a></li>
							</ul>
						</div>
						<div class="price_footer">
							<h3><span class="dlr">$</span> 39</h3>
							<a class="primary_btn" href="#"><span>Get Started</span></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="price_item">
						<div class="price_head">
							<h4>Real Standard</h4>
						</div>
						<div class="price_body">
							<ul class="list">
								<li><a href="#">10 GB Space</a></li>
								<li><a href="#">Secure Online Transfer</a></li>
								<li><a href="#">Unlimited Styles</a></li>
								<li><a href="#">Customer Service</a></li>
							</ul>
						</div>
						<div class="price_footer">
							<h3><span class="dlr">$</span> 69</h3>
							<a class="primary_btn" href="#"><span>Get Started</span></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="price_item">
						<div class="price_head">
							<h4>Real Ultimate</h4>
						</div>
						<div class="price_body">
							<ul class="list">
								<li><a href="#">Unlimited Space</a></li>
								<li><a href="#">Secure Online Transfer</a></li>
								<li><a href="#">Unlimited Styles</a></li>
								<li><a href="#">Customer Service</a></li>
							</ul>
						</div>
						<div class="price_footer">
							<h3><span class="dlr">$</span> 99</h3>
							<a class="primary_btn" href="#"><span>Get Started</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>-->
	<!--================End Pricing Area =================-->

	<!--================ Start Testimonial Area =================-->
	<div class="section_gap_top testimonial_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<p class="top_title">User Feedback</p>
						<h2>What Our Clients Say About Us</h2>
						<p><?php 
								$sql = "SELECT `Description` FROM userfeed;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item3 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item3;

								}?></p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="active_testimonial owl-carousel" data-slider-id="1">
						<!-- single testimonial -->
						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src=" Assets OF Software/img/quote.png" alt="">
								<h4><?php 
								$sql = "SELECT `C1` FROM userfeed;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item3 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item3;

								}?></h4>
								<div class="review">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="testimonial_content">
								<p><?php 
								$sql = "SELECT `D1` FROM userfeed;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item3 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item3;

								}?></p>
							</div>
						</div>

						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src=" Assets OF Software/img/quote.png" alt="">
								<h4><?php 
								$sql = "SELECT `C2` FROM userfeed;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item3 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item3;

								}?></h4>
								<div class="review">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="testimonial_content">
								<p><?php 
								$sql = "SELECT `D2` FROM userfeed;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item3 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item3;

								}?></p>
							</div>
						</div>

						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src=" Assets OF Software/img/quote.png" alt="">
								<h4><?php 
								$sql = "SELECT `C3` FROM userfeed;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item3 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item3;

								}?></h4>
								<div class="review">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="testimonial_content">
								<p><?php 
								$sql = "SELECT `D3` FROM userfeed;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item3 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item3;

								}?></p>
							</div>
						</div>
<!--------------------------------------SONDOS EDIT HERE-------------------------->
						<!-- <div class="single_testimonial">
							<div class="testimonial_head">
								<img src="img/quote.png" alt="">
								<h4>Fanny Spencer</h4>
								<div class="review">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="testimonial_content">
								<p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her faceand She is the host to your journey.</p>
							</div>
						</div> -->
<!--------------------------------------SONDOS EDIT HERE-------------------------->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================ End Testimonial Area =================-->

	<!--================ Srart Brand Area =================-->
	<!--<section class="brand_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="owl-carousel brand-carousel">
						<!-- single-brand 
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo1.png" alt="">
							</div>
						</div>
						<!-- single-brand 
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo2.png" alt="">
							</div>
						</div>
						<!-- single-brand 
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo3.png" alt="">
							</div>
						</div>
						<!-- single-brand 
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo4.png" alt="">
							</div>
						</div>
						<!-- single-brand 
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo5.png" alt="">
							</div>
						</div>
						<!-- single-brand 
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo6.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
-->
	<!--================ End Brand Area =================-->

	<!--================Impress Area =================-->
	<section class="impress_area">
		<div class="container">
			<div class="impress_inner">
				<h2>Our Team</h2>
				<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
				<a class="primary_btn" href="#"><span>Request Free Demo</span></a>-->
			</div>
			<!--------------------------------------SONDOS EDIT HERE-------------------------->
			<div class="Graet_Team">
				<div class="Dana">
					<img src=" Assets OF Software/img/woman(1).png" alt="">
					<p class="name">Dana ABU-SOUFA</p>
					<p class="position">OWNER & CTO</p>
				</div>
				<div class="rest">
					<img src=" Assets OF Software/img/employees.png" alt="">
					<p class="name">CLEVER MIND OPO TEAM</p>
					<p class="position">OUR CARE CENTER <br> & DEVELOPMENT TEAM </p>
				</div>
			</div>
			<!--------------------------------------SONDOS EDIT HERE-------------------------->
		</div>
	</section>
	<!--================End Impress Area =================-->


	<!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="container">
			<div class="row footer_inner">
				<div class="col-lg-5 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
<!--------------------------------------SONDOS EDIT HERE-------------------------->
							<h3>Contact US</h3>
						</div>
						<p><?php 
								$sql = "SELECT `Name` FROM footer;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item1 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item1;

								}?>
							<br>
							Call: <?php 
								$sql = "SELECT `PN` FROM footer;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item1 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item1;

								}?> - Clever Care Team
							<br>
							Email: <?php 
								$sql = "SELECT `Email` FROM footer;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item1 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item1;

								}?>
							<br>
							<br>
							<br>
							ALL rights reserved | This template is made with <?php 
								$sql = "SELECT `Name` FROM footer;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item1 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item1;

								}?>
						</p>
						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!--<Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>-->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</aside>
				</div>
				<div class="col-lg-5 col-sm-6">
					<aside class="f_widget news_widget">
						<div class="f_title">
							<h3>Our Location</h3>
						</div>
						<p><?php 
								$sql = "SELECT `Location` FROM footer;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item1 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item1;

								}?>
						<br>
						<img src=" Assets OF Software/img/Location.png" alt="">
						</p>
						<!--
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
									 required="" type="email">
									<button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
						-->
					</aside>
				</div>
				<div class="col-lg-2">
					<aside class="f_widget social_widget">
						<div class="f_title">
							<h3>Follow Me</h3>
						</div>
						<p>Let us be social</p>
						<ul class="list">
							<!--------------------------------------SONDOS EDIT HERE-------------------------->
							
							<li><a href="<?php 
								$sql = "SELECT `Facebook` FROM footer;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item1 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item1;

								}?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?php 
								$sql = "SELECT `Twitter` FROM footer;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item1 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item1;

								}?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="<?php 
								$sql = "SELECT `Instagram` FROM footer;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item1 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item1;

								}?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
<!-- 							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li> -->
    
							<!--------------------------------------SONDOS EDIT HERE-------------------------->

						</ul>
					</aside>
				</div>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src=" Assets OF Software/js/jquery-3.2.1.min.js"></script>
	<script src=" Assets OF Software/js/popper.js"></script>
	<script src=" Assets OF Software/js/bootstrap.min.js"></script>
	<script src=" Assets OF Software/js/stellar.js"></script>
	<script src=" Assets OF Software/js/jquery.magnific-popup.min.js"></script>
	<script src=" Assets OF Software/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src=" Assets OF Software/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src=" Assets OF Software/vendors/isotope/isotope-min.js"></script>
	<script src=" Assets OF Software/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src=" Assets OF Software/js/jquery.ajaxchimp.min.js"></script>
	<script src=" Assets OF Software/vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src=" Assets OF Software/vendors/counter-up/jquery.counterup.min.js"></script>
	<script src=" Assets OF Software/js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src=" Assets OF Software/js/gmaps.min.js"></script>
	<script src=" Assets OF Software/js/theme.js"></script>
</body>

</html>