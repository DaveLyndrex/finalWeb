<?php
session_start();//set session for adminusername
if (!isset($_SESSION['adminusername'])) { //if the adminusername variable is being set,
  header('location:adminlogin.php');// then it will set the location to adminlogin.php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- CHART AND ANALYTICS LINKS  -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
  <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
  <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
  <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <!-- END CHART AND ANALYTICS -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in HEAD tag ---------->
  <title>Admin</title>

</head>

<!-- opening body -->
<body>
  <!-- side navbar button -->
  <div class="page-wrapper chiller-theme toggled">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
      <i class="fas fa-bars"></i>
    </a>
    <!-- side navbar -->
    <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">
        <div class="sidebar-brand">
          <!-- header -->
          <a href="#">Administrator</a>
          <div id="close-sidebar">
            <i class="fas fa-times"></i>
          </div>
        </div>
        <!-- user profil picture -->
        <div class="sidebar-header">
          <div class="user-pic">
            <img class="img-responsive img-rounded" src="https://media-exp1.licdn.com/dms/image/C4E03AQFisMIW2P7mgg/profile-displayphoto-shrink_200_200/0/1616488312756?e=1625097600&v=beta&t=o8aClgNYR7pQuEKUIS6tUhvHlwJssJhhb1xQ14lqjDw" alt="User picture">
          </div>
      <!-- user information -->
          <div class="user-info">
            <strong> <?php echo $_SESSION['adminusername']; ?></strong>
            <span class="user-name">Admin
            </span>
            <!-- status weither admin or user -->
            <span class="user-status">
              <i class="fa fa-circle"></i>
              <!-- char2 online -->
              <span>Online</span>
            </span>
        <!-- logout icon -->
            <a href="logoutadmin.php" class="nav__link">
              <i class='bx bx-log-out nav__icon'></i>
              <span class="nav__name text-muted"> <i class="fa fa-sign-out text-muted" aria-hidden="true"></i>Sign out</i></span>
            </a>
          </div>
        </div>
        <!-- sidebar char2 search bar-->
        <div class="sidebar-search">
          <div>
            <div class="input-group">
              <input type="text" class="form-control search-menu" placeholder="Search...">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
       <!-- menu -->
        <div class="sidebar-menu">
          <ul>
            <li class="header-menu">
              <span>General</span>
            </li>
            <li class="sidebar-dropdown">
              <a href="#">
                <i class="fa fa-tachometer-alt"></i>
                <!-- dashboard includes users, admins, disabled admins, and disabled users -->
                <span>Dashboard</span>
                <span class="badge badge-pill badge-warning">New</span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="seeusers.php">Users
                      <span class="badge badge-pill badge-success">Pro</span>
                    </a>
                  </li>
                  <li>
                    <a href="seeadmin.php">Admins</a>
                  </li>
                  <li>
                    <a href="disableuser.php">Disabled Users</a>
                  </li>

                  <li>
                    <a href="disableadmin.php">Disabled Admins</a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- opening another drowdown -->
            <li class="sidebar-dropdown">
              <a>
                <i class="fa fa-shopping-cart"></i>
                <span>Products</span>


                <?php
                //db connection
                $servername = "localhost";//servername
                $username = "root";//default username
                $password = "";//default password
                $dbname = "dami";//database name

                //db connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                $count = 0;
                //query that selects all data from products table
                $query = ("SELECT * FROM products;");
                $query_run = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($query_run)) {
                  $count++;
                }
                //add count to the badge
                echo "<span class='badge badge-pill badge-danger'>$count</span> ";
                ?>
              </a>
                <!-- under the products dropdown -->
              <div class="sidebar-submenu">
                <ul>

                  <li>
                    <a href="products.php">Products </a>
                  </li>

                  <li>
                    <a href="seeorders.php">Orders</a>
                  </li>

                  <li>
                    <a href="seeorderhistory.php">Order History</a>
                  </li>

                </ul>

              </div>

            </li>
            <!-- opening another dropdown -->
            <li class="sidebar-dropdown">
              <a href="#">
                <i class="far fa-gem"></i>
                <!-- user request dropdown -->
                <span>User Requests</span>

                <?php
                // db connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "dami";

                $conn = new mysqli($servername, $username, $password, $dbname);

                $count = 0;
                //query that selects all data form request table
                $query = ("SELECT * FROM request;");
                $query_run = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($query_run)) {
                  $count++;
                }
                echo "<span class='badge badge-pill badge-danger'>$count</span> ";

                ?>
              </a>
                <!-- involve in user request dropdown -->
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="seeuserrequest.php">Show Requests</a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- another dropdown -->
            <li class="sidebar-dropdown">
              <a href="seeproductarchived.php">
                <i class="fa fa-chart-line"></i>
                <!-- products archived dropdown -->
                <span>Products Archived</span>
                <?php
                // db connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "dami";

                $conn = new mysqli($servername, $username, $password, $dbname);

                $count = 0;
                // query that selects all data from archivedproducts table
                $query = ("SELECT * FROM archivedproducts;");
                $query_run = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($query_run)) {
                  $count++;
                }
                echo "<span class='badge badge-pill badge-danger'>$count</span> ";

                ?>
              </a>

            </li>
            <!-- dropdown  -->
            <li class="sidebar-dropdown">
              <a href="#">
                <i class="fa fa-globe"></i>
                <span>Maps</span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="map.php">Google maps</a>
                  </li>
                  <li>
                    <a href="map.php">Open street map</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="header-menu">
              <span>Extra</span>
            </li>
            <li>
              <a href="documentation.php">
                <i class="fa fa-book"></i>
                <span>Documentation</span>
                <span class="badge badge-pill badge-primary">Beta</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-calendar"></i>
                <span>Calendar</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-folder"></i>
                <span>Examples</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- sidebar-menu  -->
      </div>
      <!-- sidebar-content  -->
      <div class="sidebar-footer">
        <a href="#">
          <i class="fa fa-bell"></i>
          <span class="badge badge-pill badge-warning notification">3</span>
        </a>
        <a href="#">
          <i class="fa fa-envelope"></i>
          <span class="badge badge-pill badge-success notification">7</span>
        </a>
        <a href="#">
          <i class="fa fa-cog"></i>
          <span class="badge-sonar"></span>
        </a>
        <a href="#">
          <i class="fa fa-power-off"></i>
        </a>
      </div>
    </nav>
    <!-- sidebar-wrapper  -->
    <main class="page-content">
      <div class="container-fluid">
        <h2>Dashboard</h2>
        <hr>
        <br><br>

        <div class="grey-bg container-fluid">
          <section id="minimal-statistics">
            <div class="row">
              <div class="col-12 mt-3 mb-1">
                <h4 class="text-uppercase">Store Statistics</h4>
                <p>Dave and Miguel lang manindahay.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="icon-pencil primary font-large-2 float-left"></i>
                        </div>
                        <div class="media-body text-right">

                          <?php


                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $dbname = "dami";

                          $conn = new mysqli($servername, $username, $password, $dbname);

                          $count = 0;

                          $query = ("SELECT * FROM request;");
                          $query_run = mysqli_query($conn, $query);
                          while ($row = mysqli_fetch_array($query_run)) {
                            $count++;
                          }
                          echo "  <h3>$count</h3>";

                          ?>

                          <span>User Product Request </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">


                          <?php


                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $dbname = "dami";

                          $conn = new mysqli($servername, $username, $password, $dbname);

                          $count = 0;

                          $query = "SELECT * FROM `orderhistory` WHERE result='approved'";
                          $query_run = mysqli_query($conn, $query);
                          while ($row = mysqli_fetch_array($query_run)) {
                            $count++;
                          }
                          echo " <h3 class='danger'>$count</h3>";

                          ?>



                          <span>Products Approved</span>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-rocket danger font-large-2 float-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">


                          <?php


                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $dbname = "dami";

                          $conn = new mysqli($servername, $username, $password, $dbname);

                          $count = 0;

                          $query = "SELECT * FROM `users` ";
                          $query_run = mysqli_query($conn, $query);
                          while ($row = mysqli_fetch_array($query_run)) {
                            $count++;
                          }
                          echo "  <h3 class='success'>$count</h3>";

                          ?>



                          <span>Total Users</span>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-user success font-large-2 float-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">

                          <?php


                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $dbname = "dami";

                          $conn = new mysqli($servername, $username, $password, $dbname);

                          $count = 0;

                          $query = "SELECT * FROM `admin` ";
                          $query_run = mysqli_query($conn, $query);
                          while ($row = mysqli_fetch_array($query_run)) {
                            $count++;
                          }
                          echo " <h3 class='primary'>$count</h3>";

                          ?>





                          <span>Total Admins</span>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-user success font-large-2 float-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="row">



            </div>

            <div class="row">
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">

                          <?php


                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $dbname = "dami";

                          $conn = new mysqli($servername, $username, $password, $dbname);

                          $count = 0;

                          $query = "SELECT * FROM `disableuser` ";
                          $query_run = mysqli_query($conn, $query);
                          while ($row = mysqli_fetch_array($query_run)) {
                            $count++;
                          }
                          echo "  <h3 class='primary'>$count</h3>";

                          ?>



                          <span>Total Disabled Users</span>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-user  warning  font-large-2 float-right"></i>
                        </div>
                      </div>
                      <div class="progress mt-1 mb-0" style="height: 7px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">


                          <?php


                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $dbname = "dami";

                          $conn = new mysqli($servername, $username, $password, $dbname);

                          $count = 0;

                          $query = "SELECT * FROM `disableadmin` ";
                          $query_run = mysqli_query($conn, $query);
                          while ($row = mysqli_fetch_array($query_run)) {
                            $count++;
                          }
                          echo "  <h3 class='success'>$count</h3>";

                          ?>


                          <span>Total Disabled Admin</span>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-user warning font-large-2 float-right"></i>
                        </div>
                      </div>
                      <div class="progress mt-1 mb-0" style="height: 7px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">


                          <?php


                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $dbname = "dami";

                          $conn = new mysqli($servername, $username, $password, $dbname);

                          $count = 0;

                          $query = "SELECT * FROM `orderhistory` WHERE result='cancel'";
                          $query_run = mysqli_query($conn, $query);
                          while ($row = mysqli_fetch_array($query_run)) {
                            $count++;
                          }
                          echo " <h3 class='danger'>$count</h3>";

                          ?>


                          <span>Total Ordered Cancel</span>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-cup success font-large-2 float-right"></i>
                        </div>
                      </div>
                      <div class="progress mt-1 mb-0" style="height: 7px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">

                          <?php


                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $dbname = "dami";

                          $conn = new mysqli($servername, $username, $password, $dbname);

                          $count = 0;

                          $query = "SELECT * FROM `order`";
                          $query_run = mysqli_query($conn, $query);
                          while ($row = mysqli_fetch_array($query_run)) {
                            $count++;
                          }
                          echo " <h3 class='danger'>$count</h3>";

                          ?>



                          <span>Orders in Process</span>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-direction danger font-large-2 float-right"></i>
                        </div>
                      </div>
                      <div class="progress mt-1 mb-0" style="height: 7px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section id="stats-subtitle">
            <div class="row">
              <div class="col-12 mt-3 mb-1">
                <h4 class="text-uppercase">Statistics Income</h4>
                <p>Share your blessings</p>
              </div>
            </div>


            <div class="row">
              <div class="col-xl-6 col-md-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body cleartfix">
                      <div class="media align-items-stretch">
                        <div class="align-self-center">


                          <?php


                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $dbname = "dami";

                          $conn = new mysqli($servername, $username, $password, $dbname);

                          $count = 0;
                          $totalprice = 0;

                          $query = "SELECT * FROM `orderhistory` WHERE result='approved'";
                          $query_run = mysqli_query($conn, $query);
                          while ($row = mysqli_fetch_array($query_run)) {

                            $count += ($row['quantity'] * $row['productPrice']);
                          }
                          echo " <h1 class='mr-2'>$count</h1>";

                          ?>



                        </div>
                        <div class="media-body">
                          <h4>Total Sales</h4>
                          <span>Current Sales Amount</span>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-heart danger font-large-2"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>




              <div class="col-xl-6 col-md-12">
                <div class="card overflow-hidden">
                  <div class="card-content">
                    <div class="card-body cleartfix">
                      <div class="media align-items-stretch">
                        <div class="align-self-center">
                          <i class="icon-pencil primary font-large-2 mr-2"></i>
                        </div>
                        <div class="media-body">
                          <h4>Total Products Stocks</h4>
                          <span>Current Overall Total Stocks</span>
                        </div>
                        <div class="align-self-center">

                          <?php


                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $dbname = "dami";

                          $conn = new mysqli($servername, $username, $password, $dbname);

                          $count = 0;
                          $totalprice = 0;

                          $query = "SELECT * FROM `products`";
                          $query_run = mysqli_query($conn, $query);
                          while ($row = mysqli_fetch_array($query_run)) {

                            $count += $row['stocks'];
                          }
                          echo "  <h1>$count</h1>";

                          ?>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



          </section>
        </div>


        <!-- QUERY HERE -->




        <!-- QUERY HERE -->























        <footer class="text-center">

        </footer>
      </div>
    </main>
    <!-- page-content" -->
  </div>
  <!-- page-wrapper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>


<style>
  @keyframes swing {
    0% {
      transform: rotate(0deg);
    }

    10% {
      transform: rotate(10deg);
    }

    30% {
      transform: rotate(0deg);
    }

    40% {
      transform: rotate(-10deg);
    }

    50% {
      transform: rotate(0deg);
    }

    60% {
      transform: rotate(5deg);
    }

    70% {
      transform: rotate(0deg);
    }

    80% {
      transform: rotate(-5deg);
    }

    100% {
      transform: rotate(0deg);
    }
  }

  @keyframes sonar {
    0% {
      transform: scale(0.9);
      opacity: 1;
    }

    100% {
      transform: scale(2);
      opacity: 0;
    }
  }

  body {
    font-size: 0.9rem;
  }

  .page-wrapper .sidebar-wrapper,
  .sidebar-wrapper .sidebar-brand>a,
  .sidebar-wrapper .sidebar-dropdown>a:after,
  .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before,
  .sidebar-wrapper ul li a i,
  .page-wrapper .page-content,
  .sidebar-wrapper .sidebar-search input.search-menu,
  .sidebar-wrapper .sidebar-search .input-group-text,
  .sidebar-wrapper .sidebar-menu ul li a,
  #show-sidebar,
  #close-sidebar {
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
  }

  /*----------------page-wrapper----------------*/

  .page-wrapper {
    height: 100vh;
  }

  .page-wrapper .theme {
    width: 40px;
    height: 40px;
    display: inline-block;
    border-radius: 4px;
    margin: 2px;
  }

  .page-wrapper .theme.chiller-theme {
    background: #1e2229;
  }

  /*----------------toggeled sidebar----------------*/

  .page-wrapper.toggled .sidebar-wrapper {
    left: 0px;
  }

  @media screen and (min-width: 768px) {
    .page-wrapper.toggled .page-content {
      padding-left: 300px;
    }
  }

  /*----------------show sidebar button----------------*/
  #show-sidebar {
    position: fixed;
    left: 0;
    top: 10px;
    border-radius: 0 4px 4px 0px;
    width: 35px;
    transition-delay: 0.3s;
  }

  .page-wrapper.toggled #show-sidebar {
    left: -40px;
  }

  /*----------------sidebar-wrapper----------------*/

  .sidebar-wrapper {
    width: 260px;
    height: 100%;
    max-height: 100%;
    position: fixed;
    top: 0;
    left: -300px;
    z-index: 999;
  }

  .sidebar-wrapper ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
  }

  .sidebar-wrapper a {
    text-decoration: none;
  }

  /*----------------sidebar-content----------------*/

  .sidebar-content {
    max-height: calc(100% - 30px);
    height: calc(100% - 30px);
    overflow-y: auto;
    position: relative;
  }

  .sidebar-content.desktop {
    overflow-y: hidden;
  }

  /*--------------------sidebar-brand----------------------*/

  .sidebar-wrapper .sidebar-brand {
    padding: 10px 20px;
    display: flex;
    align-items: center;
  }

  .sidebar-wrapper .sidebar-brand>a {
    text-transform: uppercase;
    font-weight: bold;
    flex-grow: 1;
  }

  .sidebar-wrapper .sidebar-brand #close-sidebar {
    cursor: pointer;
    font-size: 20px;
  }

  /*--------------------sidebar-header----------------------*/

  .sidebar-wrapper .sidebar-header {
    padding: 20px;
    overflow: hidden;
  }

  .sidebar-wrapper .sidebar-header .user-pic {
    float: left;
    width: 60px;
    padding: 2px;
    border-radius: 12px;
    margin-right: 15px;
    overflow: hidden;
  }

  .sidebar-wrapper .sidebar-header .user-pic img {
    object-fit: cover;
    height: 100%;
    width: 100%;
  }

  .sidebar-wrapper .sidebar-header .user-info {
    float: left;
  }

  .sidebar-wrapper .sidebar-header .user-info>span {
    display: block;
  }

  .sidebar-wrapper .sidebar-header .user-info .user-role {
    font-size: 12px;
  }

  .sidebar-wrapper .sidebar-header .user-info .user-status {
    font-size: 11px;
    margin-top: 4px;
  }

  .sidebar-wrapper .sidebar-header .user-info .user-status i {
    font-size: 8px;
    margin-right: 4px;
    color: #5cb85c;
  }

  /*-----------------------sidebar-search------------------------*/

  .sidebar-wrapper .sidebar-search>div {
    padding: 10px 20px;
  }

  /*----------------------sidebar-menu-------------------------*/

  .sidebar-wrapper .sidebar-menu {
    padding-bottom: 10px;
  }

  .sidebar-wrapper .sidebar-menu .header-menu span {
    font-weight: bold;
    font-size: 14px;
    padding: 15px 20px 5px 20px;
    display: inline-block;
  }

  .sidebar-wrapper .sidebar-menu ul li a {
    display: inline-block;
    width: 100%;
    text-decoration: none;
    position: relative;
    padding: 8px 30px 8px 20px;
  }

  .sidebar-wrapper .sidebar-menu ul li a i {
    margin-right: 10px;
    font-size: 12px;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    border-radius: 4px;
  }

  .sidebar-wrapper .sidebar-menu ul li a:hover>i::before {
    display: inline-block;
    animation: swing ease-in-out 0.5s 1 alternate;
  }

  .sidebar-wrapper .sidebar-menu .sidebar-dropdown>a:after {
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    content: "\f105";
    font-style: normal;
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    background: 0 0;
    position: absolute;
    right: 15px;
    top: 14px;
  }

  .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu ul {
    padding: 5px 0;
  }

  .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li {
    padding-left: 25px;
    font-size: 13px;
  }

  .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before {
    content: "\f111";
    font-family: "Font Awesome 5 Free";
    font-weight: 400;
    font-style: normal;
    display: inline-block;
    text-align: center;
    text-decoration: none;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-right: 10px;
    font-size: 8px;
  }

  .sidebar-wrapper .sidebar-menu ul li a span.label,
  .sidebar-wrapper .sidebar-menu ul li a span.badge {
    float: right;
    margin-top: 8px;
    margin-left: 5px;
  }

  .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .badge,
  .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .label {
    float: right;
    margin-top: 0px;
  }

  .sidebar-wrapper .sidebar-menu .sidebar-submenu {
    display: none;
  }

  .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active>a:after {
    transform: rotate(90deg);
    right: 17px;
  }

  /*--------------------------side-footer------------------------------*/

  .sidebar-footer {
    position: absolute;
    width: 100%;
    bottom: 0;
    display: flex;
  }

  .sidebar-footer>a {
    flex-grow: 1;
    text-align: center;
    height: 30px;
    line-height: 30px;
    position: relative;
  }

  .sidebar-footer>a .notification {
    position: absolute;
    top: 0;
  }

  .badge-sonar {
    display: inline-block;
    background: #980303;
    border-radius: 50%;
    height: 8px;
    width: 8px;
    position: absolute;
    top: 0;
  }

  .badge-sonar:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    border: 2px solid #980303;
    opacity: 0;
    border-radius: 50%;
    width: 100%;
    height: 100%;
    animation: sonar 1.5s infinite;
  }

  /*--------------------------page-content-----------------------------*/

  .page-wrapper .page-content {
    display: inline-block;
    width: 100%;
    padding-left: 0px;
    padding-top: 20px;
  }

  .page-wrapper .page-content>div {
    padding: 20px 40px;
  }

  .page-wrapper .page-content {
    overflow-x: hidden;
  }

  /*------scroll bar---------------------*/

  ::-webkit-scrollbar {
    width: 5px;
    height: 7px;
  }

  ::-webkit-scrollbar-button {
    width: 0px;
    height: 0px;
  }

  ::-webkit-scrollbar-thumb {
    background: #525965;
    border: 0px none #ffffff;
    border-radius: 0px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: #525965;
  }

  ::-webkit-scrollbar-thumb:active {
    background: #525965;
  }

  ::-webkit-scrollbar-track {
    background: transparent;
    border: 0px none #ffffff;
    border-radius: 50px;
  }

  ::-webkit-scrollbar-track:hover {
    background: transparent;
  }

  ::-webkit-scrollbar-track:active {
    background: transparent;
  }

  ::-webkit-scrollbar-corner {
    background: transparent;
  }


  /*-----------------------------chiller-theme-------------------------------------------------*/

  .chiller-theme .sidebar-wrapper {
    background: #31353D;
  }

  .chiller-theme .sidebar-wrapper .sidebar-header,
  .chiller-theme .sidebar-wrapper .sidebar-search,
  .chiller-theme .sidebar-wrapper .sidebar-menu {
    border-top: 1px solid #3a3f48;
  }

  .chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
  .chiller-theme .sidebar-wrapper .sidebar-search .input-group-text {
    border-color: transparent;
    box-shadow: none;
  }

  .chiller-theme .sidebar-wrapper .sidebar-header .user-info .user-role,
  .chiller-theme .sidebar-wrapper .sidebar-header .user-info .user-status,
  .chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
  .chiller-theme .sidebar-wrapper .sidebar-search .input-group-text,
  .chiller-theme .sidebar-wrapper .sidebar-brand>a,
  .chiller-theme .sidebar-wrapper .sidebar-menu ul li a,
  .chiller-theme .sidebar-footer>a {
    color: #818896;
  }

  .chiller-theme .sidebar-wrapper .sidebar-menu ul li:hover>a,
  .chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active>a,
  .chiller-theme .sidebar-wrapper .sidebar-header .user-info,
  .chiller-theme .sidebar-wrapper .sidebar-brand>a:hover,
  .chiller-theme .sidebar-footer>a:hover i {
    color: #b8bfce;
  }

  .page-wrapper.chiller-theme.toggled #close-sidebar {
    color: #bdbdbd;
  }

  .page-wrapper.chiller-theme.toggled #close-sidebar:hover {
    color: #ffffff;
  }

  .chiller-theme .sidebar-wrapper ul li:hover a i,
  .chiller-theme .sidebar-wrapper .sidebar-dropdown .sidebar-submenu li a:hover:before,
  .chiller-theme .sidebar-wrapper .sidebar-search input.search-menu:focus+span,
  .chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active a i {
    color: #16c7ff;
    text-shadow: 0px 0px 10px rgba(22, 199, 255, 0.5);
  }

  .chiller-theme .sidebar-wrapper .sidebar-menu ul li a i,
  .chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown div,
  .chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
  .chiller-theme .sidebar-wrapper .sidebar-search .input-group-text {
    background: #3a3f48;
  }

  .chiller-theme .sidebar-wrapper .sidebar-menu .header-menu span {
    color: #6c7b88;
  }

  .chiller-theme .sidebar-footer {
    background: #3a3f48;
    box-shadow: 0px -1px 5px #282c33;
    border-top: 1px solid #464a52;
  }

  .chiller-theme .sidebar-footer>a:first-child {
    border-left: none;
  }

  .chiller-theme .sidebar-footer>a:last-child {
    border-right: none;
  }

  .sidebar-wrapper .sidebar-header .user-pic img {
    object-fit: cover;
    height: 6%;
    width: 100%;
  }
</style>

<script>
  jQuery(function($) {

    $(".sidebar-dropdown > a").click(function() {
      $(".sidebar-submenu").slideUp(200);
      if (
        $(this)
        .parent()
        .hasClass("active")
      ) {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
          .parent()
          .removeClass("active");
      } else {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
          .next(".sidebar-submenu")
          .slideDown(200);
        $(this)
          .parent()
          .addClass("active");
      }
    });

    $("#close-sidebar").click(function() {
      $(".page-wrapper").removeClass("toggled");
    });
    $("#show-sidebar").click(function() {
      $(".page-wrapper").addClass("toggled");
    });




  });
</script>