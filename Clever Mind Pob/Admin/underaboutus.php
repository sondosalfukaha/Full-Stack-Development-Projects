<?php 
include 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/Website Logo2.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Under About Us
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="icons.php" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="assets/img//Website Logo2.png">
          </div>
        </a>
        <a href="icons.php" class="simple-text logo-normal">
          Clever Mind POB
          <!-- <div class="logo-image-big">
            <img src="assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
        <li>
            <a href="./imageView.php">
              <i class="nc-icon nc-album-2"></i>
              <p>ImageView</p>
            </a>
          </li>
          <li>
            <a href="./aboutus.php">
              <i class="nc-icon nc-alert-circle-i"></i>
              <p>About Us</p>
            </a>
          </li>
          <li class="active">
            <a href="./underaboutus.php">
              <i class="nc-icon nc-satisfied"></i>
              <p>Under About Us</p>
            </a>
          </li>
          <li>
            <a href="./ourservers.php">
            <i class="nc-icon nc-satisfied"></i>
              <p>OUR SERVERS</p>
            </a>
          </li>
          <li>
            <a href="./user.php">
              <i class="nc-icon nc-single-02"></i>
              <p>User Feedback</p>
            </a>
          </li>
          <li>
            <a href="./ourworks.php">
            <i class="nc-icon nc-satisfied"></i>
              <p>Our Works</p>
            </a>
          </li>
          <li>
            <a href="./footer.php">
            <i class="nc-icon nc-satisfied"></i>
              <p>Footer</p>
            </a>
          </li>
          <li>
            <a href="./images.php">
            <i class="nc-icon nc-satisfied"></i>
              <p>Website Icon</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Under About Us</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content row">
      <form action="includes/underabouthandler.inc.php" method="post">
          <div class="col-auto">
          <label for="item1">Item 1 :</label>
          <input type="text" name="Item1" id="item1"class="form-control" value="<?php 
								$sql = "SELECT Item1 FROM underaboutus;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item1 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item1;

								}?>
          ">
          </div>
          <br>
          <div class="col-auto">
          <label for="item2">Item 2 :</label>
          <input type="text" name="Item2" id="item2" class="form-control" value="<?php 
								$sql = "SELECT Item2 FROM underaboutus;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item2 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item2;

								}?>
          ">
          </div>
          <br>
          <div class="col-auto">
          <label for="item3">Item 3 :</label>
          <input type="text" name="Item3" id="item3"class="form-control" value="<?php 
								$sql = "SELECT Item3 FROM underaboutus;";
								$resutl = $con->prepare($sql);
								$resutl->execute();
								$resultCheck = $resutl->rowCount();
								if($resultCheck > 0) {
								// Fetch the value of the column H2
    							$item3 = $resutl->fetchColumn();
								// Output the value inside the <h2> tag
								echo $item3;

								}?>
          ">
          </div>
          <br>
          <br>
          <div class="col-auto">
          <button class="btn">SAVE</button>
          <input type="reset" value="RE-SET" class="btn btn-secondary">
          </div>
      </form>
      
      </div>
      <form action="includes/underAboutImage.inc.php" method="post" enctype="multipart/form-data">
      <div class="col-auto">
          <label for="pic">Picture :</label>
          <input type="file" name="pic" />
          </div>
          <div class="col-auto">
          <?php
            $sql = "SELECT `imageAbout` FROM `underaboutus`;";
            $result = $con->prepare($sql);
            $result->execute();
            $resultCheck = $result->rowCount();

            if ($resultCheck > 0) {
                $imageData = $result->fetchColumn();
                echo '<img src="data:image/png;base64,' . base64_encode($imageData) . '" type="image/png"  style="width:50px">';
            }
        ?>
          </div>
          <div class="col-auto">
            <button class="btn btn-sm" type="sumbit">Upload</button>
            <button class="btn btn-sm" type="rest">Re-set</button>
          </div>
      </form>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      demo.initGoogleMaps();
    });
  </script>
</body>

</html>