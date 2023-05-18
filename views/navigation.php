<header class="main_header_area">
    <div class="header-content py-1 bg-theme">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="links">
                <ul>
                    <li><a href="#" class="white"><i class="icon-calendar white"></i> <?= date("Y/m/d"); ?></a></li>
                    <li><a href="#" class="white"><i class="icon-location-pin white"></i> Hikkaduwa, Sri Lanka.</a></li>
                    <li><a href="#" class="white"><i class="icon-clock white"></i> Open</a></li>
                </ul>
            </div>
            <div class="links float-right">
                <ul>
                    <li><a href="https://www.facebook.com/Singhetravels1" class="white"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/SingheTravels" class="white"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="white"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/singhetravels" class="white"><i class="fab fa-linkedin " aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="header_menu" id="header_menu">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-1 pt-1">

                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo URL; ?>">
                            <img src="<?php echo PUBLIC_URL; ?>images/black-logo.png" alt="image" style="height:50px;">
                        </a>
                    </div>

                    <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav" id="responsive-menu">
                            <li><a href="<?= URL; ?>">Home</a></li>
                            <li><a href="<?= URL; ?>attractions">Attractions</a></li>
                            <li><a href="<?= URL; ?>packages">Tours</a></li>
                            <li><a href="<?= URL; ?>memories">Memories</a></li>
                            <li><a href="<?= URL; ?>accommodations">Accomadation</a></li>
                            <li><a href="<?= URL; ?>aboutus">About Us</a></li>
                            <li><a href="<?= URL; ?>contactus">Contact Us</a></li>






                            <!-- <li class="search-main"><a href="#search1" class="mt_search"><i class="fa fa-search"></i></a></li> -->
                        </ul>
                    </div>
                    <div class="register-login d-flex align-items-center">
                        <a href="#" class="lrbutton" data-bs-toggle="modal" data-bs-target="#exampleModal" class="me-3">
                            <i class="icon-user lrbutton"></i> Login/Register
                        </a>

                        <a href="#" class="ubutton" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="me-3">
                            <i class="icon-user ubutton"></i> <?= Session::get("user"); ?>
                        </a>

                    </div>
                    <div id="slicknav-mobile"></div>
                </div>
            </div>
        </nav>
    </div>

</header>