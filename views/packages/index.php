<section class="breadcrumb-main pb-20 pt-14" style="background-image: url(<?= PUBLIC_URL; ?>images/bg/bg1.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);"></div>
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 class="mb-3">Tour Packages</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tour Packages</li>
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
                <div class="list-results d-flex align-items-center justify-content-between">
                    <div class="list-results-sort">
                        <p class="m-0">Showing <span id="pall">1-6</span> of <?php
                                                                                if (!empty($this->count)) {
                                                                                    echo $this->count[0]["COUNT(id)"];
                                                                                }
                                                                                ?> results</p>
                    </div>

                </div>
                <div class="row" id="loadpackages">
                    
                        <?php
                        if (!empty($this->data)) {
                            foreach ($this->data as $key => $value) {

                        ?>

                                <div class="col-lg-6 col-md-6 mb-4">
                                    <div class="trend-item rounded box-shadow">
                                        <a href="<?= URL ?>packages/details/<?= base64_encode($value['id']); ?>">
                                            <div class="trend-image position-relative">
                                                <img src="<?= PUBLIC_URL; ?>images/trending/trending2.jpg" alt="image" class="">
                                                <div class="color-overlay"></div>
                                            </div>
                                            <div class="trend-content p-4 pt-5 position-relative">
                                                <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                                    <div class="entry-author">
                                                        <i class="icon-calendar"></i>
                                                        <span class="fw-bold"> <?= $value['duration']; ?> Days Tours</span>
                                                    </div>
                                                </div>
                                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> <?= $value['status']; ?></h5>
                                                <h3 class="mb-1"><a href="<?= URL ?>packages/details/<?= base64_encode($value['id']); ?>"><?= $value['name']; ?></a></h3>

                                                <p class=" border-b pb-2 mb-2"><?php echo substr($value["description"], 0, 60) . ".."; ?></p>
                                                <div class="entry-meta">
                                                    <div class="entry-author d-flex align-items-center">
                                                        <p class="mb-0"><span class="theme fw-bold fs-5"> $<?= $value['price']; ?>.00</span> | Per person</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    

                    <div class="col-lg-12">
                        <div class="text-center">

                            <button id="ls" onclick="loadl()" class="nir-btn"><i class="fa fa-long-arrow-alt-left"></i> Load Less </button>
                            <button id="lm" onclick="loadm()" class="nir-btn">Load More <i class="fa fa-long-arrow-alt-right"></i></button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ps-lg-4">
                <div class="sidebar-sticky">
                    <div class="list-sidebar">
                        <div class="sidebar-item mb-4">
                            <h3 class="">Find your expectation</h3>
                            <form onsubmit="packageFilterForm(event,this)">
                                <select style="margin-bottom:1%;" name="categories_id">
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
                                <select id="type" style="margin-bottom:1%;" name="status">
                                    <option>Type</option>
                                    <option value="Platinum">Platinum</option>
                                    <option value="Gold">Gold</option>
                                    <option value="Silver">Silver</option>
                                </select>


                                <input type="submit" value="Search" class="nir-btn" style="margin-top:2%;">
                            </form>
                        </div>


                        <div class="sidebar-item">
                            <h3>Popular Destinations</h3>
                            <div class="sidebar-destination">
                                <div class="row about-slider">
                                    <?php
                                    if (!empty($this->popularPackages)) {
                                        foreach ($this->popularPackages as $key => $value) {
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


<section class="discount-action pt-0" style="background-image:url(<?= PUBLIC_URL ?>images/section-bg1.png); background-position:center;">
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
    <div class="section-shape  top-inherit bottom-0" style="background-image: url(<?= PUBLIC_URL ?>images/shape6.png);margin-bottom: -1%;"></div>
</section>