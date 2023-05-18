<section class="banner overflow-hidden">
    <div class="slider top50">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                if (!empty($this->slider)) {
                    foreach ($this->slider as $key => $value) {
                ?>

                        <div class="swiper-slide">
                            <div class="slide-inner">
                                <div class="slide-image" style="background-image:url(<?= PUBLIC_URL; ?>images/slider/<?=$value["image"];?>)"></div>
                                <div class="swiper-content">
                                    <div class="entry-meta mb-2">
                                        <h5 class="entry-category mb-0 white">Singhe Travels</h5>
                                    </div>
                                    <h1 class="mb-2"><a href="detail-leftside.html/index.html" class="white"><?= $value["title"]; ?></a></h1>
                                    <p class="white mb-4"><?= $value["content"]; ?></p>
                                    <?php
                                    if ($key == 0) {
                                    ?>
                                        <a href="<?= URL; ?>attractions" class="nir-btn">Discover More</a>
                                    <?php
                                    } else if ($key == 1) {
                                    ?>
                                        <a href="<?= URL; ?>memories" class="nir-btn">View Memories</a>
                                    <?php
                                    } else {
                                    ?>
                                        <a href="<?= URL; ?>packages" class="nir-btn">View Packages</a>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="dot-overlay"></div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</section>


<div class="form-main">
    <div class="section-shape top-0" style="background-image: url(images/shape-pat.png);"></div>
    <div class="container">
        <div class="row align-items-center form-content rounded position-relative ms-5 me-5">
            <div class="col-lg-2 p-0">
                <h4 class="form-title form-title1 text-center p-4 py-5 white bg-theme mb-0 rounded-start d-lg-flex align-items-center"><i class="icon-location-pin fs-1 me-1"></i> Find Your Holidays</h4>
            </div>
            <div class="col-lg-10 px-4">
                <div class="form-content-in d-lg-flex align-items-center">
                    <div class="form-group me-2">
                        <div class="input-box">
                            <select class="niceSelect">
                                <option value="1">Destination</option>
                                <option value="2">Argentina</option>
                                <option value="3">Belgium</option>
                                <option value="4">Canada</option>
                                <option value="5">Denmark</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group me-2">
                        <div class="input-box">
                            <input type="date" name="date">
                        </div>
                    </div>
                    <div class="form-group me-2">
                        <div class="input-box">
                            <select class="niceSelect">
                                <option value="1">Travel Type</option>
                                <option value="2">City Tour</option>
                                <option value="3">Family Tour</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group me-2">
                        <div class="input-box">
                            <select class="niceSelect">
                                <option value="1">Tour Duration</option>
                                <option value="2">5 days</option>
                                <option value="3">7 Days</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-0 text-center">
                        <a href="#" class="nir-btn w-100"><i class="fa fa-search mr-2"></i> Search Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="about-us pb-6 pt-10" style="background-image:url(<?=PUBLIC_URL;?>images/shape4.png); background-position:center;">
    <div class="container">
        <div class="section-title mb-6 w-50 mx-auto text-center">
            <h4 class="mb-1 theme1">Singhe Travels</h4>
            <h2 class="mb-1">Find <span class="theme">Travel Perfection</span></h2>
        </div>

        <div class="why-us">
            <div class="why-us-box">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                            <div class="why-us-content">
                                <div class="why-us-icon mb-1">
                                    <i class="icon-flag theme"></i>
                                </div>
                                <h4><a href="about.html">Tell Us What You want To Do</a></h4>
                                <p class="mb-2">with 24*7 customer service you can discuss about what you need</p>
                                <!-- <p class="mb-0 theme">100+ Reviews</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                            <div class="why-us-content">
                                <div class="why-us-icon mb-1">
                                    <i class="icon-location-pin theme"></i>
                                </div>
                                <h4><a href="about.html">Find Any Travel Locations</a></h4>
                                <p class="mb-2">We are all ready covered every single traveling destinations</p>
                                <!-- <p class="mb-0 theme">100+ Reviews</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                            <div class="why-us-content">
                                <div class="why-us-icon mb-1">
                                    <i class="icon-directions theme"></i>
                                </div>
                                <h4><a href="about.html">Choose Your Tour Package</a></h4>
                                <p class="mb-2">We have many more packages with different pricing.</p>
                                <!-- <p class="mb-0 theme">100+ Reviews</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                            <div class="why-us-content">
                                <div class="why-us-icon mb-1">
                                    <i class="icon-compass theme"></i>
                                </div>
                                <h4><a href="about.html">Here 100% Trusted Tour Agency</a></h4>
                                <p class="mb-2">Have service of goverment registerd & licensed tour agent.</p>
                                <!-- <p class="mb-0 theme">100+ Reviews</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="white-overlay"></div>
</section>


<section class="trending pb-3 pt-0">
    <div class="container">
        <div class="section-title mb-6 w-50 mx-auto text-center">
            <h4 class="mb-1 theme1">Singhe Travels</h4>
            <h2 class="mb-1">Explore <span class="theme">Top Attractions</span></h2>
            <p>collect most popular attractions in Sri Lanka.</p>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="row">
                    <?php
                    if (!empty($this->topDestinations)) {
                        foreach ($this->topDestinations as $key => $value) {
                            if ($key <= 2) {
                    ?>
                                <?php
                                if ($key == 0) {
                                ?>
                                    <div class="col-lg-12 mb-4">

                                        <div class="trend-item1">
                                            <div class="trend-image position-relative rounded">
                                                <img src="<?php echo PUBLIC_URL; ?>images/trending/<?= $value["image"]; ?>" alt="image">
                                                <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                                    <div class="trend-content-title">
                                                        <h5 class="mb-0"><a href="<?= URL; ?>attractions/details/<?= $value["id"]; ?>" class="theme1"><?= $value["city"]; ?></a></h5>
                                                        <h3 class="mb-0 white"><a href="<?= URL; ?>attractions/details/<?= $value["id"]; ?>" style="color: white;"><?= $value["name"]; ?></a></h3>
                                                    </div>
                                                    <span class="white bg-theme p-1 px-2 rounded">$<?= $value["price"]; ?></span>
                                                </div>
                                                <div class="color-overlay"></div>
                                            </div>
                                        </div>

                                    </div>

                                <?php
                                } else if ($key == 1) {
                                ?>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-4">

                                        <div class="trend-item1">
                                            <div class="trend-image position-relative rounded">
                                                <img src="<?php echo PUBLIC_URL; ?>images/trending/<?= $value["image"]; ?>" alt="image">
                                                <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                                    <div class="trend-content-title">
                                                        <h5 class="mb-0"><a href="<?= URL; ?>attractions/details/<?= $value["id"]; ?>" class="theme1"><?= $value["city"]; ?></a></h5>
                                                        <h3 class="mb-0 white"><a href="<?= URL; ?>attractions/details/<?= $value["id"]; ?>" style="color: white;"><?= $value["name"]; ?></a></h3>
                                                    </div>
                                                    <span class="white bg-theme p-1 px-2 rounded">$<?= $value["price"]; ?></span>
                                                </div>
                                                <div class="color-overlay"></div>
                                            </div>
                                        </div>

                                    </div>

                                <?php
                                } else if ($key == 2) {
                                ?>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-4">

                                        <div class="trend-item1">
                                            <div class="trend-image position-relative rounded">
                                                <img src="<?php echo PUBLIC_URL; ?>images/trending/<?= $value["image"]; ?>" alt="image">
                                                <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                                    <div class="trend-content-title">
                                                        <h5 class="mb-0"><a href="<?= URL; ?>attractions/details/<?= $value["id"]; ?>" class="theme1"><?= $value["city"]; ?></a></h5>
                                                        <h3 class="mb-0 white"><a href="<?= URL; ?>attractions/details/<?= $value["id"]; ?>" style="color: white;"><?= $value["name"]; ?></a></h3>
                                                    </div>
                                                    <span class="white bg-theme p-1 px-2 rounded">$<?= $value["price"]; ?></span>
                                                </div>
                                                <div class="color-overlay"></div>
                                            </div>
                                        </div>

                                    </div>

                                <?php
                                }
                                ?>




                            <?php
                            } else {
                            ?>
                </div>
            </div>

            <div class="col-lg-5 mb-4">

                <div class="trend-item1">
                    <div class="trend-image position-relative rounded">
                        <img src="<?php echo PUBLIC_URL; ?>images/trending/<?= $value["image"]; ?>" alt="singhe travels" class="img-fluid" style="height:650px;">
                        <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                            <div class="trend-content-title">
                                <h5 class="mb-0"><a href="<?= URL; ?>attractions/details/<?= $value["id"]; ?>" class="theme1"><?= $value["city"]; ?></a></h5>
                                <h3 class="mb-0 white"><a href="<?= URL; ?>attractions/details/<?= $value["id"]; ?>" style="color: white;"><?= $value["name"]; ?></a></h3>
                            </div>
                            <span class="white bg-theme p-1 px-2 rounded">$<?= $value["price"]; ?></span>
                        </div>
                        <div class="color-overlay"></div>
                    </div>
                </div>

            </div>

<?php
                            }
                        }
                    }
?>


        </div>
    </div>
</section>


<section class="trending bg-grey pt-17 pb-6">
    <div class="section-shape top-0" style="background-image: url(images/shape8.png);"></div>
    <div class="container">
        <div class="row align-items-center justify-content-between mb-6 ">
            <div class="col-lg-7">
                <div class="section-title text-center text-lg-start">
                    <h4 class="mb-1 theme1">Top Pick</h4>
                    <h2 class="mb-1">Best <span class="theme">Tour Packages</span></h2>
                    <p>Get various packages from us under all categories at attractive prices</p>
                </div>
            </div>
            <div class="col-lg-5">
            </div>
        </div>
        <div class="trend-box">
            <div class="row item-slider">
                <?php
                if (!empty($this->allPackages)) {
                    foreach ($this->allPackages as $key => $value) {
                ?>

                        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                            <div class="trend-item rounded box-shadow bg-white">
                                <div class="trend-image position-relative">
                                    <img src="<?php echo PUBLIC_URL; ?>images/trending/trending2.jpg" alt="image" class="">
                                    <div class="color-overlay"></div>
                                </div>
                                <div class="trend-content p-4 pt-5 position-relative">
                                    <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                        <div class="entry-author">
                                            <i class="icon-calendar"></i>
                                            <span class="fw-bold"><?= $value["duration"]; ?></span>
                                        </div>
                                    </div>
                                    <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Croatia</h5>
                                    <h3 class="mb-1"><a href="tour-grid.html"><?= $value["name"]; ?></a></h3>
                                    <div class="rating-main d-flex align-items-center pb-2">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="ms-2">(12)</span>
                                    </div>
                                    <p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                                    <div class="entry-meta">
                                        <div class="entry-author d-flex align-items-center">
                                            <p class="mb-0"><span class="theme fw-bold fs-5"> $170.00</span> | Per person</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
        <div class="category-main-inner">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <h3 class="mb-0 white bg-theme p-3 py-5 text-center rounded my-4">Top Categories</h3>
                </div>
                <div class="col-lg-10">
                    <div class="row side-slider">
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p-2 py-4 text-center bg-white rounded overflow-hidden">
                                <div class="trending-topic-content">
                                    <img src="<?php echo PUBLIC_URL; ?>images/icons/004-camping-tent.png" class="mb-1 d-inline-block" alt="">
                                    <h4 class="mb-0"><a href="tour-grid.html">Camping</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p-2 py-4 text-center bg-white rounded overflow-hidden">
                                <div class="trending-topic-content text-center">
                                    <img src="<?php echo PUBLIC_URL; ?>images/icons/003-hiking.png" class="mb-1 d-inline-block" alt="">
                                    <h4 class="mb-0"><a href="tour-grid.html">Hiking</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p-2 py-4 text-center bg-white rounded overflow-hidden">
                                <div class="trending-topic-content">
                                    <img src="<?php echo PUBLIC_URL; ?>images/icons/005-sunbed.png" class="mb-1 d-inline-block" alt="">
                                    <h4 class="mb-0"><a href="tour-grid.html">Beach Tours</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p-2 py-4 text-center bg-white rounded overflow-hidden">
                                <div class="trending-topic-content">
                                    <img src="<?php echo PUBLIC_URL; ?>images/icons/006-surf.png" class="mb-1 d-inline-block" alt="">
                                    <h4 class="mb-0"><a href="tour-grid.html">Surfing</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p2 py-4 text-center bg-white rounded overflow-hidden">
                                <div class="trending-topic-content">
                                    <img src="<?php echo PUBLIC_URL; ?>images/icons/002-safari.png" class="mb-1 d-inline-block" alt="">
                                    <h4 class="mb-0"><a href="tour-grid.html">Safari</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p-2 py-4 text-center bg-white rounded overflow-hidden">
                                <div class="trending-topic-content">
                                    <img src="<?php echo PUBLIC_URL; ?>images/icons/008-cycling.png" class="mb-1 d-inline-block" alt="">
                                    <h4 class="mb-0"><a href="tour-grid.html">Cycling</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 my-4">
                            <div class="category-item box-shadow p2 py-4 text-center bg-white rounded overflow-hidden">
                                <img src="<?php echo PUBLIC_URL; ?>images/icons/007-hiking-1.png" class="mb-1 d-inline-block" alt="">
                                <div class="trending-topic-content">
                                    <h4 class="mb-0"><a href="tour-grid.html">Trekings</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="trending pb-9">
    <div class="container">
        <div class="section-title mb-6 w-75 mx-auto text-center">
            <h4 class="mb-1 theme1">Singhe Travels</h4>
            <h2 class="mb-1">Explore <span class="theme">Best Tour Packages</span></h2>
            <p>Get various packages from us under all categories at attractive prices.</p>
        </div>
        <div class="trend-box">
            <div class="row">
                <?php
                if (!empty($this->topPackages)) {
                    foreach ($this->topPackages as $key => $value) {
                ?>
                        <div class="col-lg-4 mb-4">
                            <div class="trend-item1 rounded box-shadow bg-white">
                                <div class="trend-image position-relative">
                                    <img src="<?php echo PUBLIC_URL; ?>images/packages/<?= $value["image"]; ?>" alt="Singhe Travels" class="">
                                    <div class="trend-content1 p-4">
                                        <h5 class="theme1 mb-1"><i class="flaticon-location-pin"></i> <?= $value["status"]; ?></h5>
                                        <h3 class="mb-1 white"><a href="<?= URL; ?>packages/details/<?= base64_encode($value["id"]); ?>" class="white"><?= $value["name"]; ?></a></h3>

                                        <div class="entry-meta d-flex align-items-center justify-content-between">
                                            <div class="entry-author d-flex align-items-center">
                                                <p class="mb-0 white"><span class="theme1 fw-bold fs-5"> $<?= $value["price"]; ?>.00</span> | Per person</p>
                                            </div>
                                            <div class="entry-author">
                                                <i class="icon-calendar white"></i>
                                                <span class="fw-bold white"> <?= $value["duration"]; ?> Days Tours</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>


                <div class="col-lg-12 text-center">
                    <a href="<?= URL; ?>packages" class="nir-btn">View All Deals</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="testimonial pt-10 pb-20" style="background-image: url(<?= PUBLIC_URL; ?>images/bg/8.jpg);">
    <div class="container">
        <div class="testimonial-in">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-title">
                        <h4 class="mb-1 theme1">Our Testimonails</h4>
                        <h2 class="mb-1 white">Good Reviews By <span class="theme">Clients</span></h2>
                        <p class="mb-0 white">Money is wortless when that compairing with our valueble customer feedbacks. Every good & bad comments improve our services.</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row about-slider">
                        <?php
                        if (!empty($this->feedbacks)) {
                            foreach ($this->feedbacks as $key => $value) {
                        ?>
                                <div class="col-sm-4 item">
                                    <div class="testimonial-item1">
                                        <div class="details d-flex">
                                            <i class="fa fa-quote-left fs-1 mb-0"></i>
                                            <div class="author-content ms-4">
                                                <p class="mb-4 white fs-5 fw-normal"><?= substr($value["feedback"], 0, 205); ?>....</p>
                                                <div class="author-info d-flex align-items-center">
                                                    <img src="<?php echo PUBLIC_URL; ?>images/testimonial/img1.jpg" alt="">
                                                    <div class="author-title ms-3">
                                                        <h5 class="m-0 theme1"><?= $value["name"]; ?></h5>
                                                        <span class="white"><?= $value["date"]; ?></span>
                                                    </div>
                                                </div>
                                            </div>
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
    <div class="dot-overlay"></div>
</section>


<section class="trending trend-packages pt-0 pb-0 z-index3">
    <div class="container">
        <div class="trend-box mt-minus">
            <div class="row review-slider1 mx-0">
                <?php
                if (!empty($this->discounts)) {
                    foreach ($this->discounts as $key => $value) {
                ?>
                        <div class="col-lg-6 px-2">
                            <div class="trend-full bg-white rounded box-shadow overflow-hidden">
                                <div class="row m-0">
                                    <div class="col-lg-5 col-md-4 ps-md-0">
                                        <div class="trend-item2">
                                            <a href="tour-list.html" style="background-image: url(<?=PUBLIC_URL;?>images/packages/<?= $value["image"]; ?>);"></a>
                                            <div class="ribbon ribbon-top-left"><span class="fw-bold"><?=$value["discount"];?>% OFF</span></div>
                                            <div class="color-overlay"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-8">
                                        <div class="trend-content py-3 position-relative">
                                            <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Hot Summer Deals</h5>
                                            <h3 class="mb-1" ><a href="<?=URL;?>packages/details/<?=base64_encode($value["id"]);?>"><?=$value["name"];?></a></h3>
                                             
                                            <p><?=substr($value["description"],0,50)?></p>
                                            <div class="trend-meta border-b pb-2 mb-2">
                                                <div class="entry-author theme">
                                                    <i class="icon-calendar"></i>
                                                    <span> <?=$value["duration"];?> Days Tours</span>
                                                </div>
                                            </div>
                                            <div class="entry-meta">
                                                <div class="entry-author d-flex align-items-center">
                                                    <p class="mb-0"><span class="theme fw-bold fs-5"> $<?=$value["price"];?>.00</span> | Per person</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
</section>


<section class="our-team pb-0">
    <div class="container">
        <div class="section-title mb-6 w-75 mx-auto text-center">
            <h4 class="mb-1 theme1">Singhe Travels</h4>
            <h2 class="mb-1">Meet Our <span class="theme">Excellent Team</span></h2>
            <p>most trusted & friendly service for you..</p>
        </div>
        <div class="team-main">
            <div class="row shop-slider">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list rounded">
                        <div class="team-image">
                            <img src="<?php echo PUBLIC_URL; ?>images/team/img1.jpg" alt="team">
                        </div>
                        <div class="team-content text-center p-3 bg-theme">
                            <h4 class="mb-0 white">Geeth Weerasinghe</h4>
                            <p class="mb-0 white">Owner</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list rounded">
                        <div class="team-image">
                            <img src="<?php echo PUBLIC_URL; ?>images/team/img2.jpg" alt="team">
                        </div>
                        <div class="team-content text-center p-3 bg-theme">
                            <h4 class="mb-0 white">Ranjan Weerasinghe</h4>
                            <p class="mb-0 white">Tour Guaid</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list rounded">
                        <div class="team-image">
                            <img src="<?php echo PUBLIC_URL; ?>images/team/img4.jpg" alt="team">
                        </div>
                        <div class="team-content text-center p-3 bg-theme">
                            <h4 class="mb-0 white">Nadun Randika</h4>
                            <p class="mb-0 white">Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list rounded">
                        <div class="team-image">
                            <img src="<?php echo PUBLIC_URL; ?>images/team/1.jpg" alt="team">
                        </div>
                        <div class="team-content text-center p-3 bg-theme">
                            <h4 class="mb-0 white">Deshan Bandara</h4>
                            <p class="mb-0 white">Technical Officer</p>
                        </div>
                    </div>
                </div>
                 
            </div>
        </div>
    </div>
</section>


<!-- <section class="trending recent-articles pb-6 pt-5">
    <div class="container">
        <div class="section-title mb-6 w-75 mx-auto text-center">
            <h4 class="mb-1 theme1">Our Blogs Offers</h4>
            <h2 class="mb-1">Recent <span class="theme">Articles & Posts</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>
        <div class="recent-articles-inner">
            <div class="row">
                <div class="col-lg-4">
                    <div class="trend-item box-shadow bg-white mb-4 rounded">
                        <div class="trend-image">
                            <img src="<?php echo PUBLIC_URL; ?>images/trending/trending10.jpg" alt="image">
                        </div>
                        <div class="trend-content-main p-4">
                            <div class="trend-content">
                                <h5 class="theme mb-1">Technology</h5>
                                <h4 class="mb-0"><a href="detail-1.html">How a developer duo at Deutsche Bank keep remote alive.</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="trend-item box-shadow bg-white mb-4 rounded">
                        <div class="trend-image">
                            <img src="<?php echo PUBLIC_URL; ?>images/trending/trending12.jpg" alt="image">
                        </div>
                        <div class="trend-content-main p-4">
                            <div class="trend-content">
                                <h5 class="theme mb-1">Inspiration</h5>
                                <h4 class="mb-0"><a href="detail-1.html">Inspire Runner with Autism Graces of Women's Running</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="trend-item box-shadow bg-white mb-4 rounded">
                        <div class="trend-image">
                            <img src="<?php echo PUBLIC_URL; ?>images/trending/trending13.jpg" alt="image">
                        </div>
                        <div class="trend-content-main p-4">
                            <div class="trend-content">
                                <h5 class="theme mb-1">Public</h5>
                                <h4 class="mb-0"><a href="detail-1.html">Services To Grow Your Business Sell Affiliate Products</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our-partner pt-0 pb-5">
    <div class="container">
        <div class="section-title mb-6 w-75 mx-auto text-center">
            <h4 class="mb-1 theme1">Our Partners</h4>
            <h2 class="mb-1">Our Awesome <span class="theme">partners</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>
        <div class="row align-items-center partner-in partner-slider">
            <div class="col-md-3 col-sm-6">
                <div class="partner-item p-4 py-2 rounded bg-lgrey">
                    <img src="<?php echo PUBLIC_URL; ?>images/cl-1.png" alt="">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="partner-item p-4 py-2 rounded bg-lgrey">
                    <img src="<?php echo PUBLIC_URL; ?>images/cl-5.png" alt="">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="partner-item p-4 py-2 rounded bg-lgrey">
                    <img src="<?php echo PUBLIC_URL; ?>images/cl-2.png" alt="">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="partner-item p-4 py-2 rounded bg-lgrey">
                    <img src="<?php echo PUBLIC_URL; ?>images/cl-3.png" alt="">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="partner-item p-4 py-2 rounded bg-lgrey">
                    <img src="<?php echo PUBLIC_URL; ?>images/cl-4.png" alt="">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="partner-item p-4 py-2 rounded bg-lgrey">
                    <img src="<?php echo PUBLIC_URL; ?>images/cl-5.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section> -->