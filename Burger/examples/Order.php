<?php 
# link with DB
include 'DBOperations/connection.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Mobile Adminsite
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <style>
    .search-container {
            width: 300px;
            margin: 100px auto;
            text-align: center;
        }
        #search-results {
            list-style: none;
            padding: 0;
            margin: 0;
            border: 1px solid transparent;
            display: none;
            max-height: 200px;
            overflow-y: auto;
        }
        #search-results li {
            padding: 10px;
            cursor: pointer;
            border-bottom: 1px solid #ccc;
        }
        #search-results li:hover {
            background-color: #f0f0f0;
        }
body {
    font-family: Arial, sans-serif;
    padding: 20px;
    background-color: #fff !important;
}

h1 {
    text-align: center;
}




button {
    margin-top: 10px;
}

/* Modal form styling */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
    z-index: 100;
  margin-left: 260px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

label {
    display: block;
    margin: 10px 0 5px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
button {
  outline: none;
  padding: 10px;
  background-color: #F99225 ;
  border: none;
  color: #fff;
  border-radius: 5px;
}


  </style>
</head>

<body class="dark-edition"style="background-color: #000 !important;">
  <div class="wrapper style="background-color: #000 !important;"">
    <div class="sidebar" style="background-color: #000 !important;">
      <div class="logo"style="background-color: #F99225 !important;"><a href="" class="simple-text logo-normal">
          Admin
        </a><div class="search-container"
        style="width:100%;
        margin-top:10px;
        margin-bottom:10px;
        ">
                <input type="text" id="search-input" placeholder="Search Pages"
                style="border-radius:50px;
                outline:none;
                color:#fff;
                background-color:transparent;
                "
          >
                <ul id="search-results"></ul>
            </div>
          </div>
        <div class="sidebar-wrapper"style="background-color: #F99225 !important;">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="./user.php">
              <i class="material-icons">face</i>
              <p>Users</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Snacks.php">
              <i class="material-icons">cookie</i>
              <p>Snacks</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./Order.php">
              <i class="material-icons">content_paste</i>
              <p>Order</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Burger.php">
              <i class="material-icons">fastfood</i>
              <p>Burger</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Location.php">
              <i class="material-icons">place</i>
              <p>Location</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel"style="background-color: #000 !important;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Oredr</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">              
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="Order.php">new order is coming</a>
                <a class="dropdown-item" href="Location.php">Location is set</a>
                
                </div>
              </li>
              <li class="nav-item dropdown">
                <a  class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">person</i>
                  
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a  style="background-color: #F99225 !important;" class="dropdown-item" href="#">Log Out</a>
                
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
        <div class="content row" style="z-index: 100;">
        <div class="container-fluid">
          <div class="row">
            <button onclick="showAddUserForm()">Add new course</button>
    <table class="table table-responsive"  id="userTable">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>username</th>
                <th>phone Number</th>
                <th>Location</th>
                <th>Order</th>
                <th>Meal/Sandwich</th>
                <th>Total Price</th>
                <th>QRT</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM orders;";
          $result = $con->prepare($sql);
          $result->execute();
          $result->setFetchMode(PDO::FETCH_OBJ);
          $courses = $result->fetchAll();
          if($courses){
          foreach($courses as $course) {
            ?>
          <tr>
            <td><?= $course->id; ?></td>
            <td><?= $course->username; ?></td>
            <td><?= $course->phonenumber; ?></td>
            <td><?= $course->location; ?></td>
            <td><?= $course->order1; ?></td>
            <td><?= $course->mealorsandwich; ?></td>
            <td><?= $course->totalprice; ?></td>
            <td><?= $course->qrt; ?></td>
            
            <td>
            
            <button class="btn-sm" 
            data-id="<?= $course->id; ?>"
            data-username="<?= $course->username; ?>" 
            data-phonenumber="<?= $course->phonenumber; ?>" 
            data-location="<?= $course->location; ?>"
            data-order1="<?= $course->order1; ?>" 
            data-mealorsandwich="<?= $course->mealorsandwich; ?>"
            data-totalprice="<?= $course->totalprice; ?>"
            onclick="showEditUserForm(this)"
            >
                Edit
            </button>
            <button class="btn-sm"         
                  data-id="<?= $course->id; ?>"
                  onclick="deleteCourse(this)">Delete
            </button>
            
            </td>
          </tr><?php
                                          }
                                      }
                                      else
                                      {
                                          ?>
                                          <tr>
                                              <td colspan="5">No Record Found</td>
                                          </tr>
                                          <?php
                                      }
                                  ?>
          </tbody>
    </table>

    <!-- Add/Edit User Form -->
    <div id="userForm" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeUserForm()">&times;</span>
            <h2 id="formTitle">Add new Order</h2>
            <form action="DBOperations\add_new_course.inc.php" method="post" id="addEditUserForm" enctype="multipart/form-data">
                
                <input type="text" id="id" name="id" hidden><br>    
                
                <label for="usernamelabel" id="usernamelabel">username:</label>
                <input type="text" id="username" name="username">

                <label for="phonenumberlabel" id="phonenumberlabel">phonenumber:</label>
                <input type="phonenumber" id="phonenumber" name="phonenumber">

                <label for="locationlabel" id="locationlabel">location:</label>
                <input type="text" id="location" name="location">

                <label for="orderlabel" id="orderlabel">order:</label>
                <input type="text" id="order1" name="order1">

                <label for="mealorsandwichlabel" id="mealorsandwichlabel">meal or sandwich:</label>
                <input type="text" id="mealorsandwich" name="mealorsandwich">

                <label for="totalpricelabel" id="totalpricelabel">Total Price:</label>
                <input type="text" id="totalprice" name="totalprice">
                
                <p id="AreYouSureForDeleteaction"></p>
                <button type="submit" name="save" id="Deletebutton">Save</button>
            </form>
        </div>
    </div>
          </div>
        </div>
      </div>
      
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple active" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard-dark" target="_blank" class="btn btn-primary btn-block">Free Download</a>
        </li>
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard-dark/docs/2.0/getting-started/introduction.php" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard/tree/dark-edition" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });

function showAddUserForm() {
    document.getElementById('userForm').style.display = 'block';
    document.getElementById('formTitle').textContent = 'Add new Course';
    document.getElementById('addEditUserForm').reset();
}

function showEditUserForm(button) {
    var id = button.getAttribute('data-id');
    var username = button.getAttribute('data-username');
    var phonenumber = button.getAttribute('data-phonenumber');
    var location = button.getAttribute('data-location');
    var order1 = button.getAttribute('data-order1');
    var mealorsandwich = button.getAttribute('data-mealorsandwich');
    var totalprice = button.getAttribute('data-totalprice');
    
    document.getElementById('formTitle').innerText = "Edit Order details";
    document.getElementById('id').value = id;
    document.getElementById('username').value = username;
    document.getElementById('phonenumber').value = phonenumber;
    document.getElementById('location').value = location;
    document.getElementById('order1').value = order1;
    document.getElementById('mealorsandwich').value = mealorsandwich;
    document.getElementById('totalprice').value = totalprice;
    document.getElementById('addEditUserForm').action = 'DBOperations/edit_course.inc.php';
    document.getElementById('userForm').style.display = 'block';
}

function closeUserForm() {
    document.getElementById('userForm').style.display = 'none';
}

function deleteCourse(button) {

var id = button.getAttribute('data-id');
document.getElementById('id').value = id;

document.getElementById('formTitle').innerText = "Delete Order";
    
    var usernamelabel = document.getElementById('usernamelabel');
    usernamelabel.style.display = 'none';

    var phonenumberlabel = document.getElementById('phonenumberlabel');
    phonenumberlabel.style.display = 'none';

    var locationlabel = document.getElementById('locationlabel');
    locationlabel.style.display = 'none';

    var mealorsandwichlabel = document.getElementById('mealorsandwichlabel');
    mealorsandwichlabel.style.display = 'none';

    var totalpricelabel = document.getElementById('totalpricelabel');
    totalpricelabel.style.display = 'none';

    var orderlabel = document.getElementById('orderlabel');
    orderlabel.style.display = 'none';

    document.getElementById('username').setAttribute("type", "hidden");
    document.getElementById('phonenumber').setAttribute("type", "hidden");
    document.getElementById('location').setAttribute("type", "hidden");
    document.getElementById('order1').setAttribute("type", "hidden");
    document.getElementById('mealorsandwich').setAttribute("type", "hidden");
    document.getElementById('totalprice').setAttribute("type", "hidden");
    document.getElementById('username').setAttribute("type", "hidden");


  document.getElementById('AreYouSureForDeleteaction').innerHTML="Are you sure to delete this user"

  document.getElementById('Deletebutton').innerHTML="Delete"

  document.getElementById('addEditUserForm').action = 'DBOperations/deletecourse.inc.php';
  document.getElementById('userForm').style.display = 'block';
}


const pages = {
            "users": "user.php",
            "snacks": "Snacks.php",
            "Orders": "Order.php",
            "Burger": "Burger.php",
            "Location": "Location.php"
        };

        const searchInput = document.getElementById('search-input');
        const searchResults = document.getElementById('search-results');

        searchInput.addEventListener('input', () => {
            const query = searchInput.value.toLowerCase();
            searchResults.innerHTML = '';
            if (query) {
                for (let key in pages) {
                    if (key.toLowerCase().includes(query)) {
                        const li = document.createElement('li');
                        li.textContent = key;
                        li.addEventListener('click', () => {
                            window.location.href = pages[key];
                        });
                        searchResults.appendChild(li);
                    }
                }
                searchResults.style.display = searchResults.childElementCount ? 'block' : 'none';
            } else {
                searchResults.style.display = 'none';
            }
        });


  </script>
</body>

</html>