


<section class="breadcrumb-main pb-20 pt-14" style="background-image: url(<?= PUBLIC_URL; ?>images/bg/bg1.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(images/shape8.png);"></div>
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 class="mb-3">Tour Grid</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tour Grid Leftside</li>
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
                        <p class="m-0">Showing 1-5 of 80 results</p>
                    </div>
                    <div class="click-menu d-flex align-items-center justify-content-between">
                        <div class="change-list me-2"><a href="tour-list.html"><i class="fa fa-bars rounded"></i></a></div>
                        <div class="change-grid f-active me-2"><a href="tour-grid.html"><i class="fa fa-th rounded"></i></a></div>
                        <div class="sortby d-flex align-items-center justify-content-between ml-2">
                            <select class="niceSelect">
                                <option value="1">Sort By</option>
                                <option value="3">Price: low to high</option>
                                <option value="4">Price: high to low</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <?php
                    if(!empty($this->data)){
                    foreach ($this->data as $key=>$data){
                      
                        ?>
                    
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="trend-item rounded box-shadow">
                            <a href="<?= URL?>packages/details" >
                            <div class="trend-image position-relative">
                                <img src="<?= PUBLIC_URL; ?>images/trending/trending2.jpg" alt="image" class="">
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">
                                <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                    <div class="entry-author">
                                        <i class="icon-calendar"></i>
                                        <span class="fw-bold"> <?=$data['duration']?> Days Tours</span>
                                    </div>
                                </div>
                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Croatia</h5>
                                <h3 class="mb-1"><a href="<?= URL?>packages/details">Piazza Castello</a></h3>
                               
                                <p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> $170.00</span> | Per person</p>
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
                        <div class="pagination-main text-center">
                            <ul class="pagination">
                                <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ps-lg-4">
                <div class="sidebar-sticky">
                    <div class="list-sidebar">
                        <div class="sidebar-item mb-4">
                            <h3 class="">Categories Type</h3>
                            <ul class="sidebar-category1">
                                <li><input type="checkbox" checked> Tours <span class="float-end">92</span></li>
                                <li><input type="checkbox"> Attractions <span class="float-end">22</span></li>
                                <li><input type="checkbox"> Day Trips <span class="float-end">35</span></li>
                                <li><input type="checkbox"> Outdoor Activities <span class="float-end">41</span></li>
                                <li><input type="checkbox"> Concert & Show <span class="float-end">11</span></li>
                                <li><input type="checkbox"> Indoor <span class="float-end">61</span></li>
                                <li><input type="checkbox"> Sight Seeing <span class="float-end">18</span></li>
                                <li><input type="checkbox"> Travels <span class="float-end">88</span></li>
                            </ul>
                        </div>
                        <div class="sidebar-item mb-4">
                            <h3 class="">Duration Type</h3>
                            <ul class="sidebar-category1">
                                <li><input type="checkbox" checked> up to 1 hour <span class="float-end">92</span></li>
                                <li><input type="checkbox"> 1 to 2 hour <span class="float-end">22</span></li>
                                <li><input type="checkbox"> 2 to 4 hour <span class="float-end">35</span></li>
                                <li><input type="checkbox"> 4 to 8 hour <span class="float-end">41</span></li>
                                <li><input type="checkbox"> 8 to 1 Day <span class="float-end">11</span></li>
                                <li><input type="checkbox"> 1 Day to 2 Days <span class="float-end">61</span></li>
                            </ul>
                        </div>
                      
                        <div class="sidebar-item">
                            <h3>Related Destinations</h3>
                            <div class="sidebar-destination">
                                <div class="row about-slider">
                                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                        <div class="trend-item1">
                                            <div class="trend-image position-relative rounded">
                                                <img src="<?= PUBLIC_URL; ?>images/destination/destination17.jpg" alt="image">
                                                <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                                    <div class="trend-content-title">
                                                        <h5 class="mb-0"><a href="tour-single.html" class="theme1">Italy</a></h5>
                                                        <h4 class="mb-0 white">Caspian Valley</h4>
                                                    </div>
                                                    <span class="white bg-theme p-1 px-2 rounded">18 Tours</span>
                                                </div>
                                                <div class="color-overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                        <div class="trend-item1">
                                            <div class="trend-image position-relative rounded">
                                                <img src="<?= PUBLIC_URL; ?>images/destination/destination14.jpg" alt="image">
                                                <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                                    <div class="trend-content-title">
                                                        <h5 class="mb-0"><a href="tour-single.html" class="theme1">Tokyo</a></h5>
                                                        <h4 class="mb-0 white">Japan</h4>
                                                    </div>
                                                    <span class="white bg-theme p-1 px-2 rounded">21 Tours</span>
                                                </div>
                                                <div class="color-overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="discount-action pt-0" style="background-image:url(<?=PUBLIC_URL?>images/section-bg1.png); background-position:center;">
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


