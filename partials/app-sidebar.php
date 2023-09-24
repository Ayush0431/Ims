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