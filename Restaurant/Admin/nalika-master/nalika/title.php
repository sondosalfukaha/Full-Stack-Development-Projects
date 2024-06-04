<?php 
# link with DB
include 'includes/connection.inc.php';
?>
<!doctype php>
<php class="no-js" lang="en">

<head>
    <style>
      .coolform {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        align-items: center;

        /*margin-top: 100px;*/
        transform: translateY(100%);
      }
      .coolform button {
        margin-top: 10px;
      }
      .input__container {
        max-width: 500px;
        display: flex;
        flex-direction: column;
        gap: 6px;
        background: rgba(255, 255, 255, 0.3);
        padding: 50px;
        border-radius: 20px;
        position: relative;
      }

.input__container::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: -1;
  filter: blur(25px);
  border-radius: 20px;
  background-color: #344463;
  background-image: radial-gradient(at 47% 69%, #afaf29 0px, transparent 50%),
radial-gradient(at 9% 32%, #344463 0px, transparent 50%);
}

.input__label {
  display: block;
  margin-left: 0.4em;
  color: #000;
  font-size: 0.9em;
  font-weight: bold;
}

.input__description {
  font-size: 0.6em;
  font-weight: bold;
  text-align: center;
  color: rgba(0, 0, 0, 0.5);
}

.input {
  border: none;
  outline: none;
  width: 100%;
  padding: 0.6em;
  padding-left: 0.9em;
  border-radius: 20px;
  background: #344463;
  /*transition: background 300ms, color 300ms;*/
}

.input:hover,.input:focus {
  background: #344463;
  color: #fff;
}
    </style>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TRY RESTURANT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="left-sidebar-pro">
        <nav id="sidebar" style="
        class="">
            <div class="sidebar-header">
                <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" style="width: 70px; height: 70px; margin-top: 50px;" /></a>
            </div>
			 
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="index.php">
								   <i class="icon nalika-home icon-wrap"></i>
								   <span class="mini-click-non">Header</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Fav Icon" href="favicon.php"><span class="mini-sub-pro">Fav Icon</span></a></li>
                                <li><a class="active" title="Title" href="title.php"><span class="mini-sub-pro">Title</span></a></li>
                                <li><a title="Phone Number" href="PhoneNumber.php"><span class="mini-sub-pro">Phone Number</span></a></li>
                                <li><a title="Email" href="Email.php"><span class="mini-sub-pro">Email</span></a></li>
                                <li><a title="Location" href="Location.php"><span class="mini-sub-pro">Location</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="index2.php">
								   <i class="icon nalika-home icon-wrap"></i>
								   <span class="mini-click-non">Home</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Fav Icon" href="slide1.php"><span class="mini-sub-pro">Slide 1</span></a></li>
                                <li><a title="Title" href="slide2.php"><span class="mini-sub-pro">Slide 2</span></a></li>
                                <li><a title="Phone Number" href="slide3.php"><span class="mini-sub-pro">Slide 3</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="index3.php">
								<i class="icon nalika-home icon-wrap"></i>
								<span class="mini-click-non">Recipes</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li ><a href="Recipe1.php"><span class="mini-sub-pro">Recipe 1</span></a></li>
                                <li><a href="Recipe2.php"><span class="mini-sub-pro">Recipe 2</span></a></li>
                                <li><a href="Recipe3.php"><span class="mini-sub-pro">Recipe 3</span></a></li>
                                <li><a href="Recipe4.php"><span class="mini-sub-pro">Recipe 4</span></a></li>
                                <li><a href="Recipe5.php"><span class="mini-sub-pro">Recipe 5</span></a></li>
                                <li><a href="Recipe5.php"><span class="mini-sub-pro">Recipe 5</span></a></li>
                                <li><a href="Recipe5.php"><span class="mini-sub-pro">Recipe 5</span></a></li>
                                <li><a href="Recipe5.php"><span class="mini-sub-pro">Recipe 5</span></a></li>
                                <li><a href="Recipe5.php"><span class="mini-sub-pro">Recipe 5</span></a></li>
                            </ul>
                        </li>
                        <li>
                <a class="has-arrow" href="index4.php">
								<i class="icon nalika-home icon-wrap"></i>
								<span class="mini-click-non">Clients</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a href="client1.php"><span class="mini-sub-pro">Client 1</span></a></li>
                                <li><a href="client2.php"><span class="mini-sub-pro">Client 2</span></a></li>
                                <li><a href="client3.php"><span class="mini-sub-pro">Client 3</span></a></li>
                            </ul>
                        </li>
                        <li>
                                <a href="index5.php">
								<i class="icon nalika-home icon-wrap"></i>
								<span class="mini-click-non">About Our Food & Restaurant</span>
								</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <form action="includes/titleHANDLER.inc.php" method="POST" class="coolform">
            <div class="input__container">
      <label class="input__label">Website Title</label>
  <input 
      placeholder="<?php
          $sql = "SELECT `title` FROM `websitetitles` WHERE 1;";
          $result = $con->prepare($sql);
          $result->execute();
          $resultCheck = $result->rowCount();

          if ($resultCheck > 0) {
              $imageData = $result->fetchColumn();
              echo $imageData;
          }
      ?>" 
      value ="<?php
          $sql = "SELECT `title` FROM `websitetitles` WHERE 1;";
          $result = $con->prepare($sql);
          $result->execute();
          $resultCheck = $result->rowCount();

          if ($resultCheck > 0) {
              $imageData = $result->fetchColumn();
              echo $imageData;
          }
          ?>"  
          class="input" 
          name="text" 
          type="text">
  <p class="input__description">What do you want to change your website for?</p>
</div>
<div>
<button type="submit" class="btn btn-block btn-warning">Sumbit</button>
</div>
            </form>
        </div>
        <div class="header-advance-area">
            
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.php">Dashboard v.1</a></li>
                                                <li><a href="index-1.php">Dashboard v.2</a></li>
                                                <li><a href="index-3.php">Dashboard v.3</a></li>
                                                <li><a href="product-list.php">Product List</a></li>
                                                <li><a href="product-edit.php">Product Edit</a></li>
                                                <li><a href="product-detail.php">Product Detail</a></li>
                                                <li><a href="product-cart.php">Product Cart</a></li>
                                                <li><a href="product-payment.php">Product Payment</a></li>
                                                <li><a href="analytics.php">Analytics</a></li>
                                                <li><a href="widgets.php">Widgets</a></li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
	<!-- float JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</php>