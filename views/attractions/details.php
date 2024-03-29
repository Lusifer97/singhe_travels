<section class="breadcrumb-main pb-20 pt-14" style="background-image: url(<?php echo PUBLIC_URL; ?>images/bg/bg1.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(<?php echo PUBLIC_URL; ?>images/shape8.png);"></div>
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 class="mb-3">Attraction Details</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Attraction Details</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>


<section class="trending pt-6 pb-0 bg-lgrey">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-content">
                    <?php
                    if (!empty($this->data)) {
                        foreach ($this->data as $key => $value) {
                    ?>

                            <div class="single-full-title border-b mb-2 pb-2">
                                <div class="single-title">
                                    <h2 class="mb-1"><?= $value["name"]; ?></h2>
                                    <div class="rating-main d-lg-flex align-items-center text-lg-start text-center">
                                        <p class="mb-0 me-2"><i class="icon-location-pin"></i> <?= $value["city"]; ?>, Sri Lanka</p>

                                        <span>(<?php
                                                if (!empty($this->count)) {
                                                    foreach ($this->count as $key => $value) {
                                                        echo $value["COUNT(id)"];
                                                    }
                                                }
                                                ?> Reviews)</span>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <div class="description-images mb-4 overflow-hidden">
                        <div class="thumbnail-images position-relative">
                            <div class="slider-store rounded overflow-hidden">
                                <?php
                                if (!empty($this->photos)) {
                                    foreach ($this->photos as $key => $value) {
                                ?>
                                        <div>
                                            <img src="<?php echo PUBLIC_URL; ?>images/trending/<?= $value["image"]; ?>" alt="1">
                                        </div>
                                <?php
                                    }
                                }
                                ?>


                            </div>
                            <div class="slider-thumbs">
                                <?php
                                if (!empty($this->photos)) {
                                    foreach ($this->photos as $key => $value) {
                                ?>
                                        <div>
                                            <img src="<?php echo PUBLIC_URL; ?>images/trending/<?= $value["image"]; ?>" alt="1">
                                        </div>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (!empty($this->data)) {
                        foreach ($this->data as $key => $value) {
                    ?>
                            <div class="description mb-2">
                                <h4>Description</h4>
                                <p><?= $value["short_description"]; ?></p>
                            </div>
                            <div class="tour-includes mb-4">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><i class="fa fa-clock-o pink mr-1" aria-hidden="true"></i> <?= $value["duration"]; ?> Days</td>
                                            <td><i class="fa fa-group pink mr-1" aria-hidden="true"></i> Max People : <?= $value["max_people"]; ?></td>
                                            <td><i class="fa fa-calendar pink mr-1" aria-hidden="true"></i> Jan 18 - Dec 21</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-user pink mr-1" aria-hidden="true"></i> Min Age : 10+</td>
                                            <td><i class="fa fa-map-signs pink mr-1" aria-hidden="true"></i> Pickup : Airport(Default)</td>
                                            <td><i class="fa fa-file-alt pink mr-1" aria-hidden="true"></i> Langauge - English/German </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                    <?php }
                    } ?>
                    <div class="description mb-2">
                        <div class="row">

                            <div class="col-lg-6 col-md-6 mb-2">
                                <div class="desc-box bg-grey p-4 rounded">
                                    <h5 class="mb-2">Included Facilities</h5>
                                    <ul>
                                        <?php
                                        if (!empty($this->facilities)) {
                                            foreach ($this->facilities as $key => $value) {
                                        ?>

                                                <li class="d-block pb-1"><i class="<?= $value["icon"]; ?> pink mr-1"></i> <?= $value["name"]; ?></li>
                                        <?php }
                                        } ?>
                                    </ul>
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
                        <?php
                            }
                        }
                        ?>


                    </div>
                    <div class="single-map mb-4">
                        <h4>Map</h4>
                        <?php
                        if (!empty($this->data)) {
                            foreach ($this->data as $key => $value) {
                        ?>
                                <div class="map rounded overflow-hidden">
                                    <div style="width: 100%">
                                        <iframe class=" rounded overflow-hidden" height="400" src="<?= $value["map"]; ?>"></iframe>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                    </div>


                    <div class="single-comments single-box mb-4">
                        <h5 class="border-b pb-2 mb-2">Showing 2 - <?php
                                                                    if (!empty($this->count)) {
                                                                        foreach ($this->count as $key => $value) {
                                                                            echo $value["COUNT(id)"];
                                                                        }
                                                                    }
                                                                    ?> guest comments</h5>
                        <?php
                        if (!empty($this->getFeedback)) {
                            foreach ($this->getFeedback as $key => $value) {
                        ?>
                                <div class="comment-box">
                                    <div class="comment-image">
                                        <img src="<?php echo PUBLIC_URL; ?>images/reviewer/1.jpg" alt="image">
                                    </div>
                                    <div class="comment-content rounded">
                                        <h5 class="mb-1"><?= $value["name"]; ?></h5>
                                        <p class="comment-date"><?= $value["date"]; ?></p>
                                        <div class="comment-rate">

                                            <span class="comment-title"><?= $value["email"]; ?></span>
                                        </div>
                                        <p class="comment"><?= $value["feedback"]; ?></p>

                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>


                    </div>

                    <div class="single-add-review">
                        <h4>Write a Review</h4>
                        <form onsubmit="addcommenttofeedback(event,this)">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <?php
                                        if (!empty($this->data)) {
                                            foreach ($this->data as $value) {
                                        ?>
                                                <input type="hidden" name="d_id" value="<?= $value["id"]; ?>">
                                        <?php
                                            }
                                        }
                                        ?>
                                        <input type="text" placeholder="Name" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <input type="email" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                        <textarea name="feedback" placeholder="Comment">Comment</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-btn">

                                        <input type="submit" value="Submit Review" class="nir-btn">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
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
                            <h3>Related Explorations</h3>
                            <div class="sidebar-destination">
                                <div class="row about-slider">
                                    <?php
                                    if (!empty($this->popularDestinations)) {
                                        foreach ($this->popularDestinations as $key => $value) {
                                    ?>
                                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                                <div class="trend-item1">
                                                    <div class="trend-image position-relative rounded">
                                                        <img src="<?php echo PUBLIC_URL; ?>images/destination/destination17.jpg" alt="image">
                                                        <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                                            <div class="trend-content-title">
                                                                <h5 class="mb-0"><a href="grid-leftfilter.html/index.html" class="theme1"><?= $value["city"]; ?></a></h5>
                                                                <h4 class="mb-0 white"><?= $value["name"]; ?></h4>
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
                                <a href="https://www.youtube.com/embed/q0mbKsKG-ng?autoplay=1">
                                    <i class="fa fa-play bg-blue"></i>
                                </a>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="white-overlay"></div>
    <div class="white-overlay"></div>
    <div class="section-shape  top-inherit bottom-0" style="background-image: url(<?= PUBLIC_URL; ?>images/shape6.png);margin-bottom: -1%;"></div>
</section>