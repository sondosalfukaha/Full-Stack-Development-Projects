
<?php 
# link with DB
include 'Admin/nalika-master/nalika/includes/connection.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>
    <?php
          $sql = "SELECT `title` FROM `websitetitles` WHERE 1;";
          $result = $con->prepare($sql);
          $result->execute();
          $resultCheck = $result->rowCount();

          if ($resultCheck > 0) {
              $imageData = $result->fetchColumn();
              echo $imageData;
          }
          ?> 
    </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="Assets OF Software/css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="Assets OF Software/css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="Assets OF Software/css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="Assets OF Software/css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <?php
    // Assuming $con is the PDO database connection object
    $sql = "SELECT `favicon` FROM `favicon` WHERE 1;";
    $result = $con->prepare($sql);
    $result->execute();
    $resultCheck = $result->rowCount();

    if ($resultCheck > 0) {
        $imageData = $result->fetchColumn();
        echo '<link rel="icon" href="data:image/png;base64,' . base64_encode($imageData) . '" type="image/png">';
    }
?>
</head>
<!-- body -->
 
<body class="main-layout Recipes_page">
        <audio src="Assets OF Software/images/TRAY Restaurant BackgroundMusic.mp3" loop autoplay></audio>
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="Assets OF Software/images/loading.gif" alt="" /></div>
    </div>
<!-- end loader -->
    <div class="wrapper">
    

        <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="recipe.html">Recipes</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                </ul>

            </nav>
        </div>

    <div id="content">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="index.html"><img src="Assets OF Software/images/Website Logo.png" alt="#" style="width: 10%;" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                <li class="dinone">Contact Us<img style="margin-right: 15px;margin-left: 15px;" src="images/phone_icon.png" alt="#"><a href="#">+962795347341</a></li>
                                <li class="dinone"><img style="margin-right: 15px;" src="Assets OF Software/images/mail_icon.png" alt="#"><a href="#">
                                    <?php 
                                        $sql = "SELECT `Email` FROM `email` WHERE 1;";
                                        $result = $con->prepare($sql);
                                        $result->execute();
                                        $resultCheck = $result->rowCount();
                                        if ($resultCheck > 0) {
                                            echo $result->fetchColumn();
                                        }
                                          ?>
          </a></li>
                                <li class="dinone"><img style="margin-right: 15px;height: 21px;position: relative;top: -2px;" src="images/location_icon.png" alt="#"><a href="#">
                                <?php 
          $sql = "SELECT `Location` FROM `location`;";
          $result = $con->prepare($sql);
          $result->execute();
          $resultCheck = $result->rowCount();
          if ($resultCheck > 0) {
              echo $result->fetchColumn();
          }
          ?>
                                </a></li>
                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="Assets OF Software/images/menu_icon.png" alt="#">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    
    <div class="yellow_bg">
   <div class="container">
            <div class="row">
            <div class="col-md-12">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="product_blog_img">
                    <?php
                                                $sql = "SELECT `Image` FROM `recip1` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($imageData). '" />';
                                                }
                                            ?>
                    </div>
                    <div class="product_blog_cont">
                        <h3>
                        <?php
                                                $sql = "SELECT `Recipe_Name` FROM `recip1` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo $imageData;
                                                }
                                            ?>
                        </h3>
                        <h4><span class="theme_color"></span>
                        <?php
                                                $sql = "SELECT `Cost` FROM `recip1` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo $imageData;
                                                }
                                            ?></h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                    <?php
                                                $sql = "SELECT `Image` FROM `recip2` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($imageData). '" />';
                                                }
                                            ?>
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php
                                                $sql = "SELECT `Rec_Name` FROM `recip2` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo $imageData;
                                                }
                                            ?></h3>
                        <h4><span class="theme_color"></span><?php
                                                $sql = "SELECT `cost` FROM `recip2` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo $imageData;
                                                }
                                            ?></h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                    <?php
                                                $sql = "SELECT `Image` FROM `recip3` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($imageData). '" />';
                                                }
                                            ?>
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php
                                                $sql = "SELECT `Rec_Name` FROM `recip3` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo $imageData;
                                                }
                                            ?></h3>
                        <h4><span class="theme_color"></span><?php
                                                $sql = "SELECT `cost` FROM `recip3` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo $imageData;
                                                }
                                            ?></h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                    <?php
                                                $sql = "SELECT `Image` FROM `recip4` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($imageData). '" />';
                                                }
                                            ?>
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php
                                                $sql = "SELECT `Rec_Name` FROM `recip4` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo $imageData;
                                                }
                                            ?></h3>
                        <h4><span class="theme_color"></span><?php
                                                $sql = "SELECT `cost` FROM `recip4` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo $imageData;
                                                }
                                            ?></h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <?php
                                                $sql = "SELECT `Image` FROM `recip5` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($imageData). '" />';
                                                }
                                            ?>
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php
                                                $sql = "SELECT `Rec_Name` FROM `recip5` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo $imageData;
                                                }
                                            ?></h3>
                        <h4><span class="theme_color"></span><?php
                                                $sql = "SELECT `cost` FROM `recip5` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo $imageData;
                                                }
                                            ?></h4>
                    </div>


            </div>

                           <div class="item">
                    <div class="product_blog_img">
                    <?php
                                                $sql = "SELECT `Image` FROM `recip1` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($imageData). '" />';
                                                }
                                            ?>
                    </div>
                    <div class="product_blog_cont">
                        <h3>
                        <?php
                                                $sql = "SELECT `Recipe_Name` FROM `recip1` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo $imageData;
                                                }
                                            ?>
                        </h3>
                        <h4><span class="theme_color"></span>
                        <?php
                                                $sql = "SELECT `Cost` FROM `recip1` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo $imageData;
                                                }
                                            ?></h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                    <?php
                                                $sql = "SELECT `Image` FROM `recip2` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($imageData). '" />';
                                                }
                                            ?>
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php
                                                $sql = "SELECT `Rec_Name` FROM `recip2` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo $imageData;
                                                }
                                            ?></h3>
                        <h4><span class="theme_color"></span><?php
                                                $sql = "SELECT `cost` FROM `recip2` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo $imageData;
                                                }
                                            ?></h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                    <?php
                                                $sql = "SELECT `Image` FROM `recip3` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($imageData). '" />';
                                                }
                                            ?>
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php
                                                $sql = "SELECT `Rec_Name` FROM `recip3` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo $imageData;
                                                }
                                            ?></h3>
                        <h4><span class="theme_color"></span><?php
                                                $sql = "SELECT `cost` FROM `recip3` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo $imageData;
                                                }
                                            ?></h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                    <?php
                                                $sql = "SELECT `Image` FROM `recip4` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($imageData). '" />';
                                                }
                                            ?>
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php
                                                $sql = "SELECT `Rec_Name` FROM `recip4` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo $imageData;
                                                }
                                            ?></h3>
                        <h4><span class="theme_color"></span><?php
                                                $sql = "SELECT `cost` FROM `recip4` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo $imageData;
                                                }
                                            ?></h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <?php
                                                $sql = "SELECT `Image` FROM `recip5` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo '<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($imageData). '" />';
                                                }
                                            ?>
                    </div>
                    <div class="product_blog_cont">
                        <h3><?php
                                                $sql = "SELECT `Rec_Name` FROM `recip5` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo $imageData;
                                                }
                                            ?></h3>
                        <h4><span class="theme_color"></span><?php
                                                $sql = "SELECT `cost` FROM `recip5` WHERE 1;";
                                                $result = $con->prepare($sql);
                                                $result->execute();
                                                $resultCheck = $result->rowCount();

                                                if ($resultCheck > 0) {
                                                    $imageData = $result->fetchColumn();
                                                    echo $imageData;
                                                }
                                            ?></h4>
                    </div>


            </div>
        </div>
    </div>
            </div>
          </div>
</div>

    <!-- Start Recipes Section-->
    <div class="RECIPESS">
        <div class="rec1 mb-2" data-aos="fade-down" data-aos-duration="1200">
            <section class="resip_section">
                <div class="container">
                    <h1 class="text-white mb-4">Our Frequent Recipes</h1>
                    <div class="row">
                       
                        <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
        
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/rs1.png" alt="#" class="animation"  />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Homemade</h3>
                                <h4><span class="theme_color">$</span>10</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/rs2.png" alt="#" class="animation"/>
                            </div>
                            <div class="product_blog_cont">
                                <h3>Noodles</h3>
                                <h4><span class="theme_color">$</span>20</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/rs3.png" alt="#" class="animation" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Egg</h3>
                                <h4><span class="theme_color">$</span>30</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/rs4.png" alt="#" class="animation" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Sushi Dizzy</h3>
                                <h4><span class="theme_color">$</span>40</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/rs5.png" alt="#" class="animation" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>The Coffee Break</h3>
                                <h4><span class="theme_color">$</span>50</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/rs1.png" alt="#" class="animation"/>
                            </div>
                            <div class="product_blog_cont">
                                <h3>Homemade</h3>
                                <h4><span class="theme_color">$</span>10</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/rs2.png" alt="#" class="animation" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Noodles</h3>
                                <h4><span class="theme_color">$</span>20</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/rs3.png" alt="#" class="animation"  />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Egg</h3>
                                <h4><span class="theme_color">$</span>30</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/rs4.png" alt="#" class="animation"/>
                            </div>
                            <div class="product_blog_cont">
                                <h3>Sushi Dizzy</h3>
                                <h4><span class="theme_color">$</span>40</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/rs5.png" alt="#" class="animation"  />
                            </div>
                            <div class="product_blog_cont">
                                <h3>The Coffee Break</h3>
                                <h4><span class="theme_color">$</span>50</h4>
                            </div>
                        </div>
        
                    </div>
                </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="rec2 mb-2" >
            <section class="resip_section">
                <div class="container">
                    <h1 class="text-white mb-4">Fast Food</h1>
                    <div class="row" data-aos="fade-down" data-aos-duration="1200">
                       
                        <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
        
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/Inner Pic/Cheese burger.png" alt="Cheeseburger" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Cheeseburger</h3>
                                <h4><span class="theme_color">$</span>28</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/Inner Pic/Chicken.png" alt="#" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Chicken</h3>
                                <h4><span class="theme_color">$</span>10</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/Inner Pic/Beef Sandwich.png" alt="Beef Sandwich" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Beef Sandwich</h3>
                                <h4><span class="theme_color">$</span>17</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/Inner Pic/Chicken Sandwich.png" alt="#" style="width: 70%;" />
                            </div>
                            <div class="product_blog_cont">
                                <h3> Chicken Sandwich</h3>
                                <h4><span class="theme_color">$</span>32</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/Inner Pic/Butter Burger.png" alt="Butter Burger" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Butter Burger</h3>
                                <h4><span class="theme_color">$</span>13</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/Inner Pic/Cheese burger.png" alt="Cheeseburger" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Cheeseburger</h3>
                                <h4><span class="theme_color">$</span>28</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/Inner Pic/Chicken.png" alt="#" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Chicken</h3>
                                <h4><span class="theme_color">$</span>10</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/Inner Pic/Beef Sandwich.png" alt="Beef Sandwich" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Beef Sandwich</h3>
                                <h4><span class="theme_color">$</span>17</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/Inner Pic/Chicken Sandwich.png" alt="#" style="width: 70%;" />
                            </div>
                            <div class="product_blog_cont">
                                <h3> Chicken Sandwich</h3>
                                <h4><span class="theme_color">$</span>32</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/Inner Pic/Butter Burger.png" alt="Butter Burger" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Butter Burger</h3>
                                <h4><span class="theme_color">$</span>13</h4>
                            </div>
                        </div>



                        
        
                    </div>
                </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="rec3 mb-2">
            <section class="resip_section">
                <div class="container">
                    <h1 class="text-white mb-4"> Arabic Food</h1>
                    <div class="row" data-aos="fade-down" data-aos-duration="1200">
                       
                        <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
        
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/Inner Pic/Shawarma.png" alt="Shawarma" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Shawarma</h3>
                                <h4><span class="theme_color">$</span>12</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/Inner Pic/Homos.png" alt="Homos" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Homos</h3>
                                <h4><span class="theme_color">$</span>5</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/Inner Pic/Mansaf.png" alt="Mansaf" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Mansaf</h3>
                                <h4><span class="theme_color">$</span>30</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/Inner Pic/Falafel Sandwich.png" alt="Falafel Sandwich" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Falafel Sandwich</h3>
                                <h4><span class="theme_color">$</span>3</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/Inner Pic/Makloba.png" alt="Makloba" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Makloba</h3>
                                <h4><span class="theme_color">$</span>20</h4>
                            </div>
                        </div>

                       <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/Inner Pic/Shawarma.png" alt="Shawarma" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Shawarma</h3>
                                <h4><span class="theme_color">$</span>12</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/Inner Pic/Homos.png" alt="Homos" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Homos</h3>
                                <h4><span class="theme_color">$</span>5</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/Inner Pic/Mansaf.png" alt="Mansaf" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Mansaf</h3>
                                <h4><span class="theme_color">$</span>30</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/Inner Pic/Falafel Sandwich.png" alt="Falafel Sandwich" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Falafel Sandwich</h3>
                                <h4><span class="theme_color">$</span>3</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_blog_img">
                                <img src="Assets OF Software/images/Inner Pic/Makloba.png" alt="Makloba" />
                            </div>
                            <div class="product_blog_cont">
                                <h3>Makloba</h3>
                                <h4><span class="theme_color">$</span>20</h4>
                            </div>
                        </div>
        
                    </div>
                </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--End Recipes Section-->
    <!--Start Our Market-->
    <div class="slider_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3> Amman-BT 1</h3>
                                                <a class="main_bt_border" href="#contact">Contact Us</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="slider_image full text_align_center">
                                                <img class="img-responsive" src="Assets OF Software/images/Inner Pic/Market 1.png" alt="Market 1" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3>Amman-BR 2</h3>
                                                <a class="main_bt_border" href="#contact">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 full text_align_center">
                                            <div class="slider_image">
                                                <img class="img-responsive" src="Assets OF Software/images/Inner Pic/Market 2.png" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3>Amman-BE 3</h3>
                                                
                                                <a class="main_bt_border" href="#contact">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 full text_align_center">
                                            <div class="slider_image">
                                                <img class="img-responsive" src="Assets OF Software/images/Inner Pic/Market 2.png" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                                <i class="fa fa-angle-up"></i>
                            </a>
                            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                                <i class="fa fa-angle-down"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Start Our Market-->
    <!--Who we are-->
    <div class="bg_bg">
        <!-- about -->
        <div class="about" id="about">
            <div class="container">
              <div class="row">
                 <div class="col-md-12">
                     <div class="title">
                        <i><img src="Assets OF Software/images/title.png" alt="#"/></i>
                        <h2>About Our Food & Restaurant</h2>
                        <span> Order food from
                            hundreds of Flavors. we are placed since 2005,<br> with amazing places and chefs
                             all over the world,<br> the best you can find it here. we make food with love
                            passion and great hands always help.
                        </span>
                     </div>
                  </div>
               </div>
               <div class="row">
                 <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                     <div class="about_box">
                         <h3>Best Food</h3>
                         <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscureContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard </p>
                     </div>
                 </div>
                  <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
                     <div class="about_img">
                         <figure><img src="Assets OF Software/images/about-img.jpg" alt="#/"></figure>
                     </div>
                 </div>      
               </div> 
            </div>
        </div>
        <!-- end about -->

    <!-- footer -->
    <fooetr>
        <div class="footer p-5">
            <div class="container-fluid">
                <div class="row" id="contact">
                    <div class=" col-md-12">
                        <h2>Request  A<strong class="white"> Call  Back</strong></h2>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      
                        <form class="main_form">
                            <div class="row">
                             
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Name" type="text" name="Name">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Email" type="text" name="Email">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Phone" type="text" name="Phone">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="img-box">
                            <figure><img src="Assets OF Software/images/img.jpg" alt="img" /></figure>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer_logo">
                        <?php
    $sql = "SELECT `favicon` FROM `favicon` WHERE 1;";
    $result = $con->prepare($sql);
    $result->execute();
    $resultCheck = $result->rowCount();

    if ($resultCheck > 0) {
        $imageData = $result->fetchColumn();
        echo '<img style="width: 100px; height: 100px; margin-bottom: 10px;" src="data:image/jpeg;base64,'.base64_encode($imageData). '" />';
    }
?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="container-fluid addbySondos text-center pt-4 p-5">
            <div class="row">
                <div class="col-md-4">
                    <h3>Contact Information</h3>
                    <p>
                        Call: <?php 
                                        $sql = "SELECT `PN` FROM `phonenumber` WHERE 1;";
                                        $result = $con->prepare($sql);
                                        $result->execute();
                                        $resultCheck = $result->rowCount();
                                        if ($resultCheck > 0) {
                                            echo $result->fetchColumn();
                                        }
                                        ?> - Clever Care Team
                        <br>
                        Email: <?php 
                                        $sql = "SELECT `Email` FROM `email` WHERE 1;";
                                        $result = $con->prepare($sql);
                                        $result->execute();
                                        $resultCheck = $result->rowCount();
                                        if ($resultCheck > 0) {
                                            echo $result->fetchColumn();
                                        }
                                          ?>
                    </p>
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    
                        <p>© 2021 All Rights Reserved Design by Clever Mind POB</p>
                    
                </div>
                <div class="col-md-4">
                    <h3>GPS Location</h3>
                    <p>
                    <?php 
          $sql = "SELECT `Location` FROM `location`;";
          $result = $con->prepare($sql);
          $result->execute();
          $resultCheck = $result->rowCount();
          if ($resultCheck > 0) {
              echo $result->fetchColumn();
          }
          ?>
                    </p>
                    

                </div>
            </div>
        </div>
    </fooetr>
    <!-- end footer -->

    </div>
    </div>
    <!--Who we are-->

    <div class="overlay"></div>
    <!-- Javascript files-->
    <script src="Assets OF Software/js/jquery.min.js"></script>
    <script src="Assets OF Software/js/popper.min.js"></script>
    <script src="Assets OF Software/js/bootstrap.bundle.min.js"></script>
    <script src="Assets OF Software/js/owl.carousel.min.js"></script>
    <script src="Assets OF Software/js/custom.js"></script>
     <script src="Assets OF Software/js/jquery.mCustomScrollbar.concat.min.js"></script>
    
     <script src="Assets OF Software/js/jquery-3.0.0.min.js"></script>
   <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

<script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 5
               }
             }
           })
         })
      </script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>AOS.init();</script>

</body>

</html>