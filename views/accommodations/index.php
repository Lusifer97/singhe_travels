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





<section class="trending pb-0 pt-6">
    <div class="container">
        <div class="section-title mb-6 w-50 mx-auto text-center">
            <h2 class="mb-1">Singhe <span class="theme">Travels</span></h2>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p> -->
        </div>
        <div class="row align-items-center">

            <?php 
            if(!empty($this->data)){
                foreach($this->data as $key=>$value){
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4" style="cursor: pointer">
                <a href="<?= URL ?>types">
                    <div class="trend-item1 acc-typ">

                        <div class="trend-image ">
                            <img src="<?= PUBLIC_URL; ?>images/hotels/1.jpg" alt="image">
                            <div class="trend-content d-flex align-items-left justify-content-between position-absolute bottom-0 p-4 w-100 z-index" style="margin-left: -55%;">
                                <a href="<?= URL ?>accommodations/types/<?=base64_encode($value["id"]);?>">

                                    <div class="trend-content-title">
                                        <h5 class="mb-0"><a href="<?= URL ?>accommodations/types/<?=base64_encode($value["id"]);?>" class="theme1"><?=$value["location"];?></a></h5>
                                        <h3 class="mb-0 white"><?=$value["name"];?></h3>
                                    </div>
                                </a>
                                <!-- <span class="white bg-theme p-1 px-2 rounded">18 Tours</span> -->
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
</section>





<!-- <section class="our-partner pb-6 pt-6">
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
</section> -->