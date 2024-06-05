<?php 
# link with DB
include 'Admin/kenny2.0.1/includes/connection.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href=
            <?php 
				$sql = "SELECT `Favicon` FROM `favicon` WHERE 1;";
				$result = $con->prepare($sql);
				$result->execute();
				$resultCheck = $result->rowCount();
				if ($resultCheck > 0) {
				$value = $result->fetchColumn();
				echo "\"./Admin/kenny2.0.1/Uploads/$value\"";
				}?>
                                                    type="image/x-icon">
    <title>
    <?php $sql = "SELECT `WName` FROM `WName`;";
        $result = $con->prepare($sql);
        $result->execute();
		$resultCheck = $result->rowCount();
			if ($resultCheck > 0) {
				echo $result->fetchColumn();
			}?>
    </title>
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">Training<em> Studio</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#features">About</a></li>
                            <li class="scroll-to-section"><a href="#our-classes">Classes</a></li>
                            <li class="scroll-to-section"><a href="#schedule">Schedules</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Contact</a></li> 
                            <!--<li class="main-button"><a href="#">Sign Up</a></li>-->
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src=
            <?php 
														$sql = "SELECT `Slider` FROM `Slider` WHERE 1;";
														$result = $con->prepare($sql);
														$result->execute();
														$resultCheck = $result->rowCount();
														if ($resultCheck > 0) {
															$value = $result->fetchColumn();
															echo "\"./Admin/kenny2.0.1/Uploads/$value\"";
														}
													?>
            
            type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
            <h6><?php
																	$sql = "SELECT `Title` FROM `Title`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></h6>
                <h2><?php 
																$sql = "SELECT `Description` FROM `Description`;";
																$result = $con->prepare($sql);
																$result->execute();
																$resultCheck = $result->rowCount();
																if ($resultCheck > 0) {
																	echo $result->fetchColumn();
																}
															?></h2>
                <!-- <div class="main-button scroll-to-section">
                    <a href="#features">Become a member</a>
                </div> -->
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Choose <em>Program</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <p>Training Studio is free CSS template for gyms and fitness centers. You are allowed to use this layout for your business website.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src=<?php 
														$sql = "SELECT `Icon` FROM `Icon` WHERE 1;";
														$result = $con->prepare($sql);
														$result->execute();
														$resultCheck = $result->rowCount();
														if ($resultCheck > 0) {
															$value = $result->fetchColumn();
															echo "\"./Admin/kenny2.0.1/Uploads/$value\"";
														}
													?> alt="First One">
                            </div>
                            <div class="right-content">
                                <h4><?php
																	$sql = "SELECT `Title` FROM `section1`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></h4>
                                <p><?php
																	$sql = "SELECT `Description` FROM `section1`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></p>
                                
                                <p style="visibility: hidden;">Please do not re-distribute this template ZIP file on any template collection website. This is not allowed.</p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src=<?php 
														$sql = "SELECT `Icon` FROM `Icon` WHERE 1;";
														$result = $con->prepare($sql);
														$result->execute();
														$resultCheck = $result->rowCount();
														if ($resultCheck > 0) {
															$value = $result->fetchColumn();
															echo "\"./Admin/kenny2.0.1/Uploads/$value\"";
														}
													?> alt="second one">
                            </div>
                            <div class="right-content">
                                <h4><?php
																	$sql = "SELECT `Title` FROM `section2`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></h4>
                                <p><?php
																	$sql = "SELECT `Description` FROM `section2`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></p>
                                <p style="visibility: hidden;">If you wish to support TemplateMo website via PayPal, please feel free to contact us. We appreciate it a lot.</p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src=<?php 
														$sql = "SELECT `Icon` FROM `Icon` WHERE 1;";
														$result = $con->prepare($sql);
														$result->execute();
														$resultCheck = $result->rowCount();
														if ($resultCheck > 0) {
															$value = $result->fetchColumn();
															echo "\"./Admin/kenny2.0.1/Uploads/$value\"";
														}
													?> alt="third gym training">
                            </div>
                            <div class="right-content">
                                <h4>
                                    <?php
																	$sql = "SELECT `Title` FROM `section3`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></h4>
                                <p><?php
																	$sql = "SELECT `Description` FROM `section3`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></p>
                                <p style="visibility: hidden;">Credit goes to <a rel="nofollow" href="https://www.pexels.com" target="_blank">Pexels website</a> for images and video background used in this HTML template.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src=<?php 
														$sql = "SELECT `Icon` FROM `Icon` WHERE 1;";
														$result = $con->prepare($sql);
														$result->execute();
														$resultCheck = $result->rowCount();
														if ($resultCheck > 0) {
															$value = $result->fetchColumn();
															echo "\"./Admin/kenny2.0.1/Uploads/$value\"";
														}
													?> alt="fourth muscle">
                            </div>
                            <div class="right-content">
                            <h4>
                                    <?php
																	$sql = "SELECT `Title` FROM `section4`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></h4>
                                <p><?php
																	$sql = "SELECT `Description` FROM `section4`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></p>
                                <p style="visibility: hidden;">You may want to browse through <a rel="nofollow" href="https://templatemo.com/tag/digital-marketing" target="_parent">Digital Marketing</a> or <a href="https://templatemo.com/tag/corporate">Corporate</a> HTML CSS templates on our website.</p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src=<?php 
														$sql = "SELECT `Icon` FROM `Icon` WHERE 1;";
														$result = $con->prepare($sql);
														$result->execute();
														$resultCheck = $result->rowCount();
														if ($resultCheck > 0) {
															$value = $result->fetchColumn();
															echo "\"./Admin/kenny2.0.1/Uploads/$value\"";
														}
													?> alt="training fifth">
                            </div>
                            <div class="right-content">
                            <h4>
                                    <?php
																	$sql = "SELECT `Title` FROM `section5`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></h4>
                                <p><?php
																	$sql = "SELECT `Description` FROM `section5`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></p>
                                <p style="visibility: hidden;">This template is built on Bootstrap v4.3.1 framework. It is easy to adapt the columns and sections.</p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src=<?php 
														$sql = "SELECT `Icon` FROM `Icon` WHERE 1;";
														$result = $con->prepare($sql);
														$result->execute();
														$resultCheck = $result->rowCount();
														if ($resultCheck > 0) {
															$value = $result->fetchColumn();
															echo "\"./Admin/kenny2.0.1/Uploads/$value\"";
														}
													?> alt="gym training">
                            </div>
                            <div class="right-content">
                            <h4>
                                    <?php
																	$sql = "SELECT `Title` FROM `section6`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></h4>
                                <p><?php
																	$sql = "SELECT `Description` FROM `section6`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></p>
                                <p style="visibility: hidden;">Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh sapien, vehicula et auctor.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
<!--     <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Don’t <em>think</em>, begin <em>today</em>!</h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                        <div class="main-button scroll-to-section">
                            <a href="#our-classes">Become a member</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Classes</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Our Classes Are The Best! Let's Take a Look !</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><img src="assets/images/tabs-first-icon.png" alt=""><?php
																	$sql = "SELECT `Title` FROM `class1`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></a></li>
                  <li><a href='#tabs-2'><img src="assets/images/tabs-first-icon.png" alt=""><?php
																	$sql = "SELECT `Title` FROM `class2`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></a></a></li>
                  <li><a href='#tabs-3'><img src="assets/images/tabs-first-icon.png" alt=""><?php
																	$sql = "SELECT `Title` FROM `class3`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></a></a></li>
                  <li><a href='#tabs-4'><img src="assets/images/tabs-first-icon.png" alt=""><?php
																	$sql = "SELECT `Title` FROM `class4`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></a></a></li>
                  <div class="main-rounded-button"><a href="#">View All Schedules</a></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src=<?php 
														$sql = "SELECT `Class1Image` FROM `Class1Image` WHERE 1;";
														$result = $con->prepare($sql);
														$result->execute();
														$resultCheck = $result->rowCount();
														if ($resultCheck > 0) {
															$value = $result->fetchColumn();
															echo "\"./Admin/kenny2.0.1/Uploads/$value\"";
														}
													?> alt="First Class">
                    <h4><?php
																	$sql = "SELECT `Title` FROM `class1`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></h4>
                    <p><?php
																	$sql = "SELECT `Description` FROM `class1`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src=<?php 
														$sql = "SELECT `Class2Image` FROM `Class2Image` WHERE 1;";
														$result = $con->prepare($sql);
														$result->execute();
														$resultCheck = $result->rowCount();
														if ($resultCheck > 0) {
															$value = $result->fetchColumn();
															echo "\"./Admin/kenny2.0.1/Uploads/$value\"";
														}
													?> alt="Second Training">
                    <h4><?php
																	$sql = "SELECT `Title` FROM `class2`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></h4>
                    <p><?php
																	$sql = "SELECT `Description` FROM `class2`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src=<?php 
														$sql = "SELECT `Class3Image` FROM `Class3Image` WHERE 1;";
														$result = $con->prepare($sql);
														$result->execute();
														$resultCheck = $result->rowCount();
														if ($resultCheck > 0) {
															$value = $result->fetchColumn();
															echo "\"./Admin/kenny2.0.1/Uploads/$value\"";
														}
													?> alt="Third Class">
                    <h4><?php
																	$sql = "SELECT `Title` FROM `class3`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></h4>
                    <p><?php
																	$sql = "SELECT `Description` FROM `class3`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <img src=<?php 
														$sql = "SELECT `Class4Image` FROM `Class4Image` WHERE 1;";
														$result = $con->prepare($sql);
														$result->execute();
														$resultCheck = $result->rowCount();
														if ($resultCheck > 0) {
															$value = $result->fetchColumn();
															echo "\"./Admin/kenny2.0.1/Uploads/$value\"";
														}
													?> alt="Fourth Training">
                    <h4><?php
																	$sql = "SELECT `Title` FROM `class4`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></h4>
                    <p><?php
																	$sql = "SELECT `Description` FROM `class4`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?></p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->
    
    <section class="section" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Classes <em>Schedule</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Let's check Your Time !</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul class="schedule-filter">
                            <li class="active" data-tsfilter="monday">Monday</li>
                            <li data-tsfilter="tuesday">Tuesday</li>
                            <li data-tsfilter="wednesday">Wednesday</li>
                            <li data-tsfilter="thursday">Thursday</li>
                            <li data-tsfilter="friday">Friday</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="day-time">Fitness Class</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">10:00AM - 11:30AM</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">2:00PM - 3:30PM</td>
                                    <td>William G. Stewart</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Muscle Training</td>
                                    <td class="friday ts-item" data-tsmeta="friday">10:00AM - 11:30AM</td>
                                    <td class="thursday friday ts-item" data-tsmeta="thursday" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Paul D. Newman</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Body Building</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">10:00AM - 11:30AM</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">2:00PM - 3:30PM</td>
                                    <td>Boyd C. Harris</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Yoga Training Class</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">10:00AM - 11:30AM</td>
                                    <td class="friday ts-item" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Hector T. Daigle</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Advanced Training</td>
                                    <td class="thursday ts-item" data-tsmeta="thursday">10:00AM - 11:30AM</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">2:00PM - 3:30PM</td>
                                    <td>Bret D. Bowers</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Testimonials Starts ***** -->
    <!-- <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Expert <em>Trainers</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/first-trainer.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Strength Trainer</span>
                            <h4>Bret D. Bowers</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/second-trainer.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Muscle Trainer</span>
                            <h4>Hector T. Daigl</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/third-trainer.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Power Trainer</span>
                            <h4>Paul D. Newman</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ***** Testimonials Ends ***** -->
    
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                    <?php
																	$sql = "SELECT `GPS` FROM `gps` WHERE 1;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>
                     </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h3>Contact Information</h3>
                    <p class="details">
                        Call: +962-792-848-931 - Clever Care Team
                        <br>
                        Email: <?php $sql = "SELECT `Email` FROM `Email`;";
													$result = $con->prepare($sql);
													$result->execute();
													$resultCheck = $result->rowCount();
													if ($resultCheck > 0) {
														echo $result->fetchColumn();
													}
													?>
                    </p>
                    
                </div>
                <div class="col-lg-4">
                    <h3>Our Location</h3>
                    <p class="details">
                    <?php $sql = "SELECT `Location` FROM `Location`;";
                        $result = $con->prepare($sql);
                        $result->execute();
                        $resultCheck = $result->rowCount();
                        if ($resultCheck > 0) {
                            echo $result->fetchColumn();
                        }
                        ?>
                    </p>
                    <!--<iframe class="map_location" src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d3384.2675629210516!2d35.82534186875191!3d31.980761504312746!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sar!2sjo!4v1695467035697!5m2!1sar!2sjo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
                </div>
                <div class="col-lg-4">
                    <h3>Social Medial<h3>
                    
                            <ul style="display: flex;
                                        flex-direction: row;
                                        justify-content: center;";>
                            <li><a href="<?php 
																$sql = "SELECT `Twitter` FROM `Social`;";
																$result = $con->prepare($sql);
																$result->execute();
																$resultCheck = $result->rowCount();
																if ($resultCheck > 0) {
																	echo $result->fetchColumn();
																}
															?>" class="col-lg-4" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?php 
																$sql = "SELECT `Twitter` FROM `Social`;";
																$result = $con->prepare($sql);
																$result->execute();
																$resultCheck = $result->rowCount();
																if ($resultCheck > 0) {
																	echo $result->fetchColumn();
																}
															?>" class="col-lg-4" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="<?php
																	$sql = "SELECT `Instagram` FROM `Social`;";
																	$result = $con->prepare($sql);
																	$result->execute();
																	$resultCheck = $result->rowCount();
																	if ($resultCheck > 0) {
																		echo $result->fetchColumn();
																	}
																?>" class="col-lg-4" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    
                
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>