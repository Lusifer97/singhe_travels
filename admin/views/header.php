
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin Dashboards</title>
        <link href="<?php echo PUBLIC_URL; ?>css/modern.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="wrapper">

            <!-- Header Start  -->
            <nav id="sidebar" class="sidebar">
                <a class="sidebar-brand" href="index.php">
                    Setharana CMS
                </a>
                <div class="sidebar-content">
                    <div class="sidebar-user">
                        <img alt="Chris Wood" src="<?php echo PUBLIC_URL; ?>/img/avatars/avatar.jpg" class="rounded-circle img-responsive mt-2" width="128" height="128"> 

                        <small>Admin</small>
                    </div>

                    <ul class="sidebar-nav">
                        <li class="sidebar-header">
                            Main
                        </li>


                        <li class="sidebar-item ">
                            <a class="sidebar-link" href="index.php"> 
                                <i class="align-middle me-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboards</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a data-bs-target="#page" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                <i class="align-middle me-2 fas fa-fw fa-address-card"></i> <span class="align-middle">Attractions</span>
                            </a>
                            <ul id="page" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                                <li class="sidebar-item"><a class="sidebar-link" href="<?php echo URL; ?>attractions">Create</a></li>
                                <li class="sidebar-item"><a class="sidebar-link" href="#>Manage</a></li>

                            </ul>
                        </li>
                        



                        <li class="sidebar-item">
                            <a data-bs-target="#profile"  class="sidebar-link " href="./log-out.php">
                                <i class="align-middle me-2 fas fa-fw fa-backward"></i> <span class="align-middle">Sign Out</span>

                            </a>

                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Header End -->

            <div class="main">

                <nav class="navbar navbar-expand navbar-theme">
                    <a class="sidebar-toggle d-flex me-2" style="margin-top: 17px">
                        <i class="hamburger align-self-center"></i>
                    </a>
                </nav>