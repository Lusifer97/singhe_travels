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



<section class="blog">
    <div class="container">
        <div class="listing-inner">
            <div class="row">
                <?php
                if (!empty($this->data)) {
                    foreach ($this->data as $key => $value) {
                ?>
                        <div class="col-lg-4 col-md-6">
                            <a href="<?= URL ?>accommodations/details">

                                <div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
                                    <div class="trend-image">
                                        <img src="<?= PUBLIC_URL; ?>images/rooms/<?=$value["image"];?>" alt="image">
                                    </div>
                                    <div class="trend-content-main p-4 pb-2">

                                        <div class="trend-content">
                                            <h5 class="theme mb-1"><?= $value["name"]; ?></h5>
                                            <p class="mb-3">
                                                <?= substr($value["description"], 0, 60); ?>...
                                            </p>
                                            <div class="entry-meta d-flex align-items-center justify-content-between">

                                                <div class="entry-button d-flex align-items-center mb-2">
                                                    <a href="<?= URL ?>accommodations/details" class="nir-btn">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php
                    }
                } 
                ?>




            </div>

        </div>
    </div>
</section>

\