<section class="breadcrumb-main pb-20 pt-14" style="background-image: url(<?= PUBLIC_URL; ?>images/bg/bg1.jpg);">
    <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(<?= PUBLIC_URL; ?>images/shape8.png);"></div>
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 class="mb-3">Memories</h1>
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Albums</li>
                        <li class="breadcrumb-item active" aria-current="page">Images</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>


<div class="gallery pt-6 pb-0">
    <div class="container">
        <div class="section-title mb-6 text-center w-75 mx-auto">
            <?php
            if (!empty($this->albums_details)) {
                foreach ($this->albums_details as $key => $value) {
            ?>
                    <h4 class="mb-1 theme1"><?= $value["title"]; ?></h4>
            <?php
                }
            }
            ?>


        </div>
        <div class="row">
            <?php
            if (!empty($this->photos)) {
                foreach ($this->photos as $key => $value) {
            ?>
                    <div class="<?php 
                    if($key<2){
                        echo "col-lg-6 col-md-6";
                    }else if($key<5){
                        echo "col-lg-4 col-md-4"; 
                    }else{
                        echo "col-lg-3 col-md-3"; 
                    }
                    ?> col-sm-12 col-xs-12">
                        <div class="gallery-item mb-4 rounded overflow-hidden">
                            <div class="gallery-image">
                                <img src="<?= PUBLIC_URL; ?>images/trending/<?=$value["image"];?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">Singhe Travels - Sri Lanka</h5>
                                <ul>
                                    <li><a href="<?= PUBLIC_URL; ?>images/trending/<?=$value["image"];?>" data-lightbox="gallery" data-title="Singhe Travels - Sri Lanka"><i class="fa fa-eye"></i></a></li>
                                     
                                </ul>
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
    <div class="section-shape  top-inherit bottom-0" style="background-image: url(<?= PUBLIC_URL; ?>images/shape6.png);"></div>
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