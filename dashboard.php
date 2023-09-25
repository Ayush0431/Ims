<?php
session_start();
if(!isset($_SESSION['user'])) header('location :login.php');
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard - Inventory Management System</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
</head>

<body>
    <div id="dashboardMainContainer">
        <div class="dashboard_sidebar" id="dashboard_sidebar">
            <h3 class="dashboard_logo" id="dashboard_logo">IMS</h3>
            <div class="dashboard_sidebar_user">
                <img src="images/login-background.jpg" alt="User image. " id="userImage" />
                <span>
                    <?= $user['first_name'] . ' ' . $user['last_name'] ?>
                </span>

            </div>
            <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists">
                    <li cLass="menuActive">
                        <a href=""><i class="fa fa-dashboard"></i><span class="menuText"> Dashboard </span></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-bullhorn"></i><span class="menuText"> Campaigns </span></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-dollar"></i><span class="menuText"> Revenue Management </span></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-line-chart"></i><span class="menuText"> Configuration </span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="dasboard_content_container" id="dasboard_content_container">
            <div class="dashboard_topNav">
                <a href="" id="toggleBtn"><i class="fa fa-navicon"></i></a>
                <a href="database/logout.php" id="logoutBtn"><i class="fa fa-power-off"></i> Log-out </a>
            </div>
            <div class="dashboard_content">
                <div class="dashboard_content_main">
                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js"> </script>
</body>

</html>