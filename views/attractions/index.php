<section class="breadcrumb-main pb-20 pt-14" style="background-image: url(<?= PUBLIC_URL; ?>images/bg/bg1.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(<?= PUBLIC_URL; ?>images/shape8.png);"></div>
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 class="mb-3">Attractions</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Attractions</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>


<section class="trending pt-6 pb-0 bg-lgrey">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-8">
                <div class="list-results d-flex align-items-center justify-content-between">
                    <div class="list-results-sort">
                        <p class="m-0">Showing <span id="all">1-5</span> of <?php
                                                        if (!empty($this->count)) {
                                                            foreach ($this->count as $key => $value) {
                                                                echo $value["COUNT(id)"];
                                                            }
                                                        }
                                                        ?> results</p>
                    </div>

                </div>
                <div class="destination-list">
                    <div id="loadattraction">
                    <?php
                    if (!empty($this->selectFive)) {
                        foreach ($this->selectFive as $key => $value) {
                    ?>
                            <div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
                                <div class="row">
                                    <div class="col-lg-4 col-md-3">
                                        <div class="trend-item2 rounded">
                                            <a href="tour-single.html" style="background-image: url(<?= PUBLIC_URL; ?>images/destination/destination17.jpg);"></a>
                                            <div class="color-overlay"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6">
                                        <div class="trend-content position-relative text-md-start text-center">
                                            <small><?=$value["duration"];?> Days</small>
                                            <h3 class="mb-1"><a href="tour-single.html"><?=$value["name"];?></a></h3>
                                            <h6 class="theme mb-0"><i class="icon-location-pin"></i> <?=$value["city"];?></h6>
                                            <p class="mt-4 mb-0"><?=$value["distance"];?> Km<br><a href="#"><span class="theme"> Free cancellation</span></a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="trend-content text-md-end text-center">
                                             <br><br>
                                            <div class="trend-price my-2">
                                                <span class="mb-0">From</span>
                                                <h3 class="mb-0">$<?=$value["price"];?></h3>
                                                <small>Per Adult</small>
                                            </div>
                                            <a href="<?= URL; ?>attractions/details/<?=$value["id"];?>" class="nir-btn">View Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    </div>

                    <div class="text-center" >
                        
                    <button id="ls" onclick="loadless()" class="nir-btn"><i class="fa fa-long-arrow-alt-left"></i> Load Less </button>
                        <button id="lm" onclick="loadmore()" class="nir-btn">Load More <i class="fa fa-long-arrow-alt-right"></i></button>
                    
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pe-lg-4">
                <div class="sidebar-sticky">
                    <div class="list-sidebar">
                        <div class="sidebar-item mb-4">
                            <h3 class="">Find your expectation</h3>
                            <ul class="sidebar-category1">
                                <form onsubmit="filterForm(event,this)">
                                    <select onchange="selectCity(this)" style="margin-bottom:1%;" name="categories_id">
                                        <?php
                                        if (!empty($this->getCategory)) {
                                            foreach ($this->getCategory as $key => $value) {
                                        ?>
                                                <option value="<?= $value["id"] ?>"> <?= $value["name"] ?> </option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    <select id="city" style="margin-bottom:1%;" name="city">
                                        <option>City</option>
                                    </select>
                                    <select id="price" style="margin-bottom:1%;" name="price">
                                        <option>Price</option>
                                    </select>

                                    <input type="submit" value="Search" class="nir-btn" style="margin-top:2%;">
                                </form>
                            </ul>
                        </div>


                        <div class="sidebar-item">
                            <h3>Related Destinations</h3>
                            <div class="sidebar-destination">
                                <div class="row about-slider">
                                    <?php
                                    if (!empty($this->popularDestinations)) {
                                        foreach ($this->popularDestinations as $key => $value) {
                                    ?>
                                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                                <div class="trend-item1">
                                                    <div class="trend-image position-relative rounded">
                                                        <img src="<?= PUBLIC_URL; ?>images/destination/destination17.jpg" alt="image">
                                                        <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                                            <div class="trend-content-title">
                                                                <h5 class="mb-0"><a href="tour-single.html" class="theme1"><?= $value["city"]; ?></a></h5>
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