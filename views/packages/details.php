            <div class="banner trending overflow-hidden">
                <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(<?= PUBLIC_URL; ?>images/shape8.png);"></div>
                <div class="banner-slide">
                    <d<div class="row shop-slider">
                        <div class="col-lg-4 p-0">
                            <div class="trend-item1 box-shadow bg-white text-center">
                                <div class="trend-image position-relative">
                                    <img src="<?= PUBLIC_URL; ?>images/new-deal/deal1.jpg" alt="image" class="">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="trend-item1 box-shadow bg-white text-center">
                                <div class="trend-image position-relative">
                                    <img src="<?= PUBLIC_URL; ?>images/new-deal/deal2.jpg" alt="image" class="">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="trend-item1 box-shadow bg-white text-center">
                                <div class="trend-image position-relative">
                                    <img src="<?= PUBLIC_URL; ?>images/new-deal/deal3.jpg" alt="image" class="">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="trend-item1 box-shadow bg-white text-center">
                                <div class="trend-image position-relative">
                                    <img src="<?= PUBLIC_URL; ?>images/new-deal/deal4.jpg" alt="image" class="">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="trend-item1 box-shadow bg-white text-center">
                                <div class="trend-image position-relative">
                                    <img src="<?= PUBLIC_URL; ?>images/new-deal/deal5.jpg" alt="image" class="">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="banner-breadcrum position-absolute top-50 mx-auto w-50 start-50 text-center translate-middle">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-0 white"><?= $this->title ?></h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $this->title ?></li>
                        </ul>
                    </nav>
                </div>
            </div>
            </div>


            <section class="trending pt-6 pb-0 bg-lgrey">
                <div class="container">

                    <div class="row">
                        <?php
                        if (!empty($this->data)) {
                            foreach ($this->data as $key => $value) {
                        ?>
                                <div class="col-lg-8">
                                    <div class="single-content">
                                        <div class="single-full-title border-b mb-2 pb-2">
                                            <div class="single-title">
                                                <h2 class="mb-1"><?= $value["name"]; ?></h2>
                                                <div class="rating-main d-lg-flex align-items-center text-lg-start text-center">
                                                    <p class="mb-0 me-2"><i class="fa fa-trophy" aria-hidden="true"></i> <?= $value["status"]; ?></p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="description-images mb-4 overflow-hidden">
                                            <div class="thumbnail-images position-relative">
                                                <div class="slider-store rounded overflow-hidden">
                                                    <?php
                                                    if (!empty($this->photos)) {
                                                        foreach ($this->photos as $value) {
                                                    ?>
                                                            <div>
                                                                <img src="<?= PUBLIC_URL; ?>images/trending/<?= $value["image"]; ?>" alt="1">
                                                            </div>
                                                    <?php
                                                        }
                                                    }
                                                    ?>


                                                </div>
                                                <div class="slider-thumbs">
                                                    <?php
                                                    if (!empty($this->photos)) {
                                                        foreach ($this->photos as $value) {
                                                    ?>
                                                            <div>
                                                                <img src="<?= PUBLIC_URL; ?>images/trending/<?= $value["image"]; ?>" alt="1">
                                                            </div>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        if (!empty($this->data)) {
                                            foreach ($this->data as $key => $value) {
                                        ?>
                                                <div class="description mb-2">
                                                    <h4>Description</h4>
                                                    <p><?= $value["description"]; ?></p>
                                                </div>
                                                <div class="tour-includes mb-4">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td><i class="fa fa-clock-o pink mr-1" aria-hidden="true"></i> <?= $value["duration"]; ?></td>
                                                                <td><i class="fa fa-group pink mr-1" aria-hidden="true"></i> Max People : <?= $value["max_people"]; ?></td>
                                                                <td><i class="fa fa-calendar pink mr-1" aria-hidden="true"></i> Jan 18 - Dec 21</td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="fa fa-user pink mr-1" aria-hidden="true"></i> Min Age : 10+</td>
                                                                <td><i class="fa fa-map-signs pink mr-1" aria-hidden="true"></i> Pickup : Airport(default)</td>
                                                                <td><i class="fa fa-file-alt pink mr-1" aria-hidden="true"></i> Langauge - English, German</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="description mb-2">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 mb-2">
                                                            <div class="desc-box bg-grey p-4 rounded">
                                                                <h5 class="mb-2">Milestones</h5>
                                                                <ul>
                                                                    <?php
                                                                    if (!empty($this->destinations)) {
                                                                        foreach ($this->destinations as $key => $value) {
                                                                    ?>
                                                                            <li><i class="fa fa-map-signs" aria-hidden="true"></i> <?= $value["name"]; ?></li><br>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 mb-2">
                                                            <div class="desc-box bg-grey p-4 rounded">
                                                                <h5 class="mb-2">included Facilities</h5>
                                                                <p>
                                                                <ul>
                                                                    <?php
                                                                    if (!empty($this->facilities)) {
                                                                        foreach ($this->facilities as $key => $value) {
                                                                    ?>
                                                                            <li><i class="<?= $value["icon"]; ?>" aria-hidden="true"></i> <?= $value["name"]; ?></li><br>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="accrodion-grp faq-accrodion mb-4" data-grp-name="faq-accrodion">
                                                    <?php
                                                    if (!empty($this->plan)) {
                                                        foreach ($this->plan as $key => $value) {
                                                    ?>

                                                            <div class="accrodion <?php
                                                                                    if ($key == 0) {
                                                                                        echo "active";
                                                                                    }
                                                                                    ?>">
                                                                <div class="accrodion-title rounded">
                                                                    <h5 class="mb-0"><span>Day <?= $value["day"]; ?></span> - <?= $value["title"]; ?></h5>
                                                                </div>
                                                                <div class="accrodion-content" style="display: block;">
                                                                    <div class="inner">
                                                                        <p><?= $value["plan"]; ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    <?php }
                                                    } ?>
                                                </div>
                                                <div class="single-map mb-4">
                                                    <h4>Map</h4>
                                                    <div class="map rounded overflow-hidden">
                                                        <div style="width: 100%">
                                                            <?php
                                                            if (!empty($this->data)) {
                                                                foreach ($this->data as $key => $value) {
                                                            ?>
                                                                    <iframe class=" rounded overflow-hidden" height="400" src="<?= $value["map"]; ?>"></iframe>
                                                            <?php
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </div>
                                        <?php }
                                        } ?>

                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                        <div class="col-lg-4 ps-lg-4">
                            <div class="sidebar-sticky">
                                <div class="list-sidebar">
                                    <div class="sidebar-item">
                                        <form class="form-content rounded overflow-hidden bg-title">
                                            <h4 class="white text-center border-b pb-2">MAKE A BOOKING</h4>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <span class="white pb-1">Your choosen date is</span>
                                                        <h4 class="choosen-date white mb-0 border-0"><i class="fa fa-calendar"></i> 10 - 15 March, 2020 <small class="d-flex justify-content-between fw-normal w-100 my-2">(5 days) <a href="#" class="white text-decoration-underline">Change</a></small></h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-2">
                                                        <label class="white">No. Of People</label>
                                                        <div class="input-box">
                                                            <i class="flaticon-add-user"></i>
                                                            <select class="niceSelect">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group bg-white p-3 rounded mb-2">
                                                        <ul>
                                                            <li class="d-block pb-1">$150.00 x 2 guests<span class="float-end fw-bold">$300.00</span></li>
                                                            <li class="d-block pb-1">Booking fee + tax<span class="float-end  fw-bold">$10.00</span></li>
                                                            <li class="d-block  pb-1">Book now &amp; Save<span class="float-end   fw-bold">-$15</span></li>
                                                            <li class="d-block pb-1">Other fees<span class="float-end  fw-bold">Free</span></li>
                                                            <li class="d-block border-t">
                                                                <div class="pt-1">
                                                                    <span class="fw-bold">Total</span><span class="float-end  fw-bold">$350.00</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-0">
                                                        <a href="#" class="nir-btn w-100">Instant Book</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="sidebar-item">
                                        <h3>Related Packages</h3>
                                        <div class="sidebar-destination">
                                            <div class="row about-slider">
                                                <?php
                                                if (!empty($this->simillarPackages)) {
                                                    foreach ($this->simillarPackages as $key => $value) {
                                                ?>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                                            <div class="trend-item1">
                                                                <div class="trend-image position-relative rounded">
                                                                    <img src="<?= PUBLIC_URL; ?>images/destination/destination17.jpg" alt="image">
                                                                    <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                                                        <div class="trend-content-title">
                                                                            <h5 class="mb-0"><a href="grid-leftfilter.html/index.html" class="theme1"><?=$value["status"];?></a></h5>
                                                                            <h4 class="mb-0 white"><?=$value["name"];?></h4>
                                                                        </div>
                                                                        <span class="white bg-theme p-1 px-2 rounded">$ <?=$value["price"];?></span>
                                                                    </div>
                                                                    <div class="color-overlay"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php
                                                    }
                                                }
                                                ?>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>


            <section class="discount-action pt-0" style="background-image:url(<?= PUBLIC_URL; ?>images/section-bg1.png); background-position:center;">
                <div class="container">
                    <div class="call-banner rounded pt-10 pb-14">
                        <div class="call-banner-inner w-75 mx-auto text-center px-5">
                            <div class="trend-content-main">
                                <div class="trend-content mb-5 pb-2 px-5">
                                    <h5 class="mb-1 theme">Love Where Your're Going</h5>
                                    <h2><a href="detail-fullwidth.html/index.html">Explore Your Life, <span class="theme1"> Travel Where You Want!</span></a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="video-button text-center position-relative">
                                    <div class="call-button text-center">
                                        <button type="button" class="play-btn js-video-button" data-video-id="152879427" data-channel="vimeo">
                                            <i class="fa fa-play bg-blue"></i>
                                        </button>
                                    </div>
                                    <div class="video-figure"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="white-overlay"></div>
                <div class="white-overlay"></div>
                <div class="section-shape  top-inherit bottom-0" style="background-image: url(images/shape6.png);"></div>
            </section>


            <section class="our-partner pb-6 pt-6">
                <div class="container">
                    <div class="section-title mb-6 w-75 mx-auto text-center">
                        <h4 class="mb-1 theme1">Our Partners</h4>
                        <h2 class="mb-1">Our Awesome <span class="theme">partners</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                    <div class="row align-items-center partner-in partner-slider">
                        <div class="col-md-3 col-sm-6">
                            <div class="partner-item p-4 py-2 rounded bg-lgrey">
                                <img src="<?= PUBLIC_URL; ?>images/cl-1.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="partner-item p-4 py-2 rounded bg-lgrey">
                                <img src="<?= PUBLIC_URL; ?>images/cl-5.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="partner-item p-4 py-2 rounded bg-lgrey">
                                <img src="<?= PUBLIC_URL; ?>images/cl-2.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="partner-item p-4 py-2 rounded bg-lgrey">
                                <img src="<?= PUBLIC_URL; ?>images/cl-3.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="partner-item p-4 py-2 rounded bg-lgrey">
                                <img src="<?= PUBLIC_URL; ?>images/cl-4.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="partner-item p-4 py-2 rounded bg-lgrey">
                                <img src="<?= PUBLIC_URL; ?>images/cl-5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>