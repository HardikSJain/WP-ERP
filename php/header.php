
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">WP_erp</a>
            </div>

        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <!-- <div class="user-img-div">
                            <img src="img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo $_SESSION['erp_name'];?>
                            <br />

                            </div>
                        </div> -->

                    </li>


                    <li>
                        <a class="active-menu" href="index.php"><i class="fas fa-columns "></i>Dashboard</a>
                    </li>

					 <li>
                        <a href="home_company.php"><i class="fa fa-university "></i>Company</a>
                    </li>

					 <li>
                        <a href="home_employee.php"><i class="fa fa-users "></i>Employee</a>
                    </li>
                    <li>
                                 <a href="home_store.php"><i class="fa fa-box "></i>Store</a>
                             </li>
                    <li>
                                 <a href="home_salaryRegular.php"><i class="fa fa-money "></i>Salary</a>
                             </li>
					


					<li>
                        <a href="setting.php"><i class="fa fa-cogs "></i>Setting</a>
                    </li>

					 <li>
                        <a href="logout.php"><i class="fa fa-power-off "></i>Logout</a>
                    </li>


                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
