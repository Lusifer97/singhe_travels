<div class="traveltour-page-wrapper" id="traveltour-page-wrapper">
    <div class="tourmaster-page-wrapper tourmaster-tour-style-1 tourmaster-with-sidebar" id="tourmaster-page-wrapper">

        <div class="tourmaster-single-header" style="background-image: url(<?php echo PUBLIC_URL; ?>images/6.jpg);">
            <div class="tourmaster-single-header-background-overlay"></div>
            <div class="tourmaster-single-header-top-overlay"></div>
            <div class="tourmaster-single-header-overlay"></div>
            <div class="tourmaster-single-header-container tourmaster-container">
                <div class="tourmaster-single-header-container-inner">
                    <div class="tourmaster-single-header-title-wrap tourmaster-item-pdlr">
                        <?php
                        if (!empty($this->data)) {
                            foreach ($this->data as $key => $value) {
                        ?>
                                <h1 class="tourmaster-single-header-title"><?php echo $value["name"]; ?></h1>
                        <?php
                            }
                        }
                        ?>


                    </div>
                    <div class="tourmaster-header-price tourmaster-item-mglr">
                        <div class="tourmaster-header-price-ribbon"><?php
                                                                    if ($value["discount"] != null) {
                                                                        echo $value["discount"] . "% Off";
                                                                    } else {
                                                                        echo "Singhe Travels";
                                                                    }
                                                                    ?></div>
                        <div class="tourmaster-header-price-wrap">
                            <div class="tourmaster-header-price-overlay"></div>
                            <div class="tourmaster-tour-price-wrap tourmaster-discount">
                                <span class="tourmaster-tour-price">
                                    <span class="tourmaster-head">From</span>
                                    <span class="tourmaster-tail"></span>
                                </span>
                                <span class="tourmaster-tour-discount-price">$
                                        <?php
                                        if ($value["discount"] != null) {
                                            $price = $value["price"] - ($value["price"] * ($value["discount"] / 100));
                                                echo $price;
                                        } else {
                                                echo $value["price"];
                                                }
                                                ?>
                                </span>
                                <span class="fa fa-info-circle tourmaster-tour-price-info" data-rel="tipsy" title="The initial price based on 1 adult with the lowest price in low season"></span>
                            </div>
                            <button style="padding: 10px;background: #fff;z-index: 999;position: relative;margin-top: 6%;border-radius: 33px;" id="co" onclick="checkout()">Check Out</button>
                            <button style="padding: 10px;background: #fff;z-index: 999;position: relative;margin-top: 6%;border-radius: 33px;display:none;" id="pd">Proceed</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tourmaster-template-wrapper">
            <div class="tourmaster-tour-booking-bar-container tourmaster-container">
                <div class="tourmaster-tour-booking-bar-container-inner">
                    <div class="tourmaster-tour-booking-bar-anchor tourmaster-item-mglr"></div>
                    <div class="tourmaster-tour-booking-bar-wrap tourmaster-item-mglr" id="tourmaster-tour-booking-bar-wrap">


                    </div>
                </div>
            </div>

            <div class="gdlr-core-page-builder-body">
                <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full">
                            <div class="gdlr-core-pbf-element">
                                <div class="tourmaster-content-navigation-item-wrap clearfix" style="padding-bottom: 0px;">
                                    <div class="tourmaster-content-navigation-item-outer" id="tourmaster-content-navigation-item-outer">
                                        <div class="tourmaster-content-navigation-item-container tourmaster-container">
                                            <div class="tourmaster-content-navigation-item tourmaster-item-pdlr" style="margin-top: 5%;">
                                                <a class="tourmaster-content-navigation-tab tourmaster-active" href="#detail">Detail</a>
                                                <a class="tourmaster-content-navigation-tab " href="#itinerary">Itinerary</a>
                                                <a class="tourmaster-content-navigation-tab " href="#map">Map</a>
                                                <a class="tourmaster-content-navigation-tab " href="#photos">Photos</a>
                                                <a class="tourmaster-content-navigation-tab " href="#tourmaster-single-review">Reviews</a>
                                                <div class="tourmaster-content-navigation-slider"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 70px 0px 30px 0px;" data-skin="Blue Icon" id="detail">
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 35px ;">
                                    <div class="gdlr-core-title-item-title-wrap">
                                        <h6 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 24px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;"><span class="gdlr-core-title-item-left-icon" style="font-size: 18px ;"><i class="fa fa-file-text-o"></i></span>Tour Details<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h6>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if (!empty($this->data)) {
                                foreach ($this->data as $key => $value) {
                            ?>


                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                            <div class="gdlr-core-text-box-item-content">
                                                <p><?php echo $value["description"]; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-divider-item-normal gdlr-core-center-align" style="margin-bottom: 19px ;">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px ;">
                                                        <div class="gdlr-core-title-item-title-wrap">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 15px ;font-weight: 500 ;letter-spacing: 0px ;text-transform: none ;">Pickup Location <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                        <div class="gdlr-core-text-box-item-content">
                                                            <p>Bandaranayake International Air port</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-divider-item-normal gdlr-core-center-align" style="margin-bottom: 19px ;">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px ;">
                                                        <div class="gdlr-core-title-item-title-wrap">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 15px ;font-weight: 500 ;letter-spacing: 0px ;text-transform: none ;">Distination Location<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                        <div class="gdlr-core-text-box-item-content">
                                                            <p><?php echo $value["city"]; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-divider-item-normal gdlr-core-center-align" style="margin-bottom: 19px ;">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px ;">
                                                        <div class="gdlr-core-title-item-title-wrap">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 15px ;font-weight: 500 ;letter-spacing: 0px ;text-transform: none ;">Distance From Pickup Point<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                        <div class="gdlr-core-text-box-item-content">
                                                            <p><?php echo $value["distance"]; ?> KM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-divider-item-normal gdlr-core-center-align" style="margin-bottom: 19px ;">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px ;">
                                                        <div class="gdlr-core-title-item-title-wrap">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 15px ;font-weight: 500 ;letter-spacing: 0px ;text-transform: none ;">Travaling Duration<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                        <div class="gdlr-core-text-box-item-content">
                                                            <p><?php echo $value["duration"]; ?> Days</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-divider-item-normal gdlr-core-center-align" style="margin-bottom: 19px ;">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px ;">
                                                        <div class="gdlr-core-title-item-title-wrap">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 15px ;font-weight: 500 ;letter-spacing: 0px ;text-transform: none ;">Included Facilities<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix " style="padding-bottom: 10px ;">
                                                        <ul>
                                                            <?php
                                                            if (!empty($this->facilities)) {
                                                                foreach ($this->facilities as $key => $value) {
                                                            ?>

                                                                    <li class=" gdlr-core-skin-divider"><span class="gdlr-core-icon-list-icon-wrap"><i class="gdlr-core-icon-list-icon fa fa-check" style="color: #4692e7 ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content"><?php echo $value["name"]; ?></span></div>
                                                                    </li>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            <?php
                                }
                            }
                            ?>





                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-divider-item-normal gdlr-core-center-align" style="margin-bottom: 15px ;">
                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 20px 0px 30px 0px;" data-skin="Blue Icon" id="itinerary">
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 35px ;">
                                    <div class="gdlr-core-title-item-title-wrap">
                                        <h6 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 24px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;"><span class="gdlr-core-title-item-left-icon" style="font-size: 18px ;"><i class="fa fa-bus"></i></span>Itinerary<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-toggle-box-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-toggle-box-style-background-title gdlr-core-left-align" style="padding-bottom: 25px ;">
                                    <?php
                                    if (!empty($this->plan)) {
                                        foreach ($this->plan as $key => $value) {
                                    ?>
                                            <div class="gdlr-core-toggle-box-item-tab clearfix  gdlr-core-<?php
                                                                                                            if ($key == 0) {
                                                                                                                echo "active";
                                                                                                            }
                                                                                                            ?>">
                                                <div class="gdlr-core-toggle-box-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                                <div class="gdlr-core-toggle-box-item-content-wrapper">
                                                    <h4 class="gdlr-core-toggle-box-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content"><span class="gdlr-core-head">Day <?php echo $value["day"]; ?></span> </h4>
                                                    <div class="gdlr-core-toggle-box-item-content">
                                                        <p><?php echo $value["plan"]; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>


                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-divider-item-normal gdlr-core-center-align" style="margin-bottom: 25px ;">
                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-bottom-width: 2px ;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 30px 0px;" data-skin="Blue Icon" id="map">
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 35px ;">
                                    <div class="gdlr-core-title-item-title-wrap">
                                        <h6 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 24px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;"><span class="gdlr-core-title-item-left-icon" style="font-size: 18px ;"><i class="fa fa-map-o"></i></span>Map<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 55px ;">
                                    <div class="gdlr-core-text-box-item-content">
                                        <div class="">
                                            <?php
                                            if (!empty($this->data)) {
                                                foreach ($this->data as $key => $value) {
                                            ?>
                                                    <iframe src="<?php echo $value["map"]; ?>" width="100%" height="480"></iframe>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-divider-item-normal gdlr-core-center-align" style="margin-bottom: 25px ;">
                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-bottom-width: 2px ;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 30px 0px;" data-skin="Blue Icon" id="photos">
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 35px ;">
                                    <div class="gdlr-core-title-item-title-wrap">
                                        <h6 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 24px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;"><span class="gdlr-core-title-item-left-icon" style="font-size: 18px ;"><i class="icon_images"></i></span>Photos<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-slider gdlr-core-item-pdlr ">
                                    <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type="slider" data-effect="default" data-nav="bullet">
                                        <ul class="slides">
                                            <?php
                                            if (!empty($this->photos)) {
                                                foreach ($this->photos as $key => $value) {
                                            ?>
                                                    <li>
                                                    
                                                        <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                            <a class="gdlr-core-ilightbox gdlr-core-js " href="<?php echo PUBLIC_URL; ?>images/destination/<?php echo $value["image"]; ?>" data-ilightbox-group="gdlr-core-img-group-1"><img src="<?php echo PUBLIC_URL; ?>images/destination/<?php echo $value["image"]; ?>" alt="" width="1200" height="350" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"></i></span></a>
                                                        </div>
                                                    </li>
                                            <?php
                                                }
                                            }
                                            ?>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tourmaster-single-related-tour tourmaster-tour-item tourmaster-style-grid">
                <div class="tourmaster-single-related-tour-container tourmaster-container">
                    <h3 class="tourmaster-single-related-tour-title tourmaster-item-pdlr">Related Tours</h3>
                    <div class="tourmaster-tour-item-holder clearfix ">
                        <?php
                        if (!empty($this->simillar_destination)) {
                            foreach ($this->simillar_destination as $key => $value) {
                        ?>
                                <div class="gdlr-core-item-list  tourmaster-column-30 tourmaster-item-pdlr">
                                    <div class="tourmaster-tour-grid  tourmaster-price-right-title">
                                        <div class="tourmaster-tour-thumbnail tourmaster-media-image">
                                            <a href="https://max-themes.net/demos/traveltour/switzerland-7-days-in-zurich-zermatt/index.html"><img src="<?php echo PUBLIC_URL; ?>upload/shutterstock_178807262-1024x683.jpg" alt="" width="1024" height="683" /></a>
                                            <div class="tourmaster-thumbnail-ribbon gdlr-core-outer-frame-element" style="color: #ffffff;background-color: #1dee2a;">
                                                <div class="tourmaster-thumbnail-ribbon-cornor" style="border-right-color: rgba(232, 94, 52, 0.5);"></div><?php
                                                                                                                                                            if ($value["discount"] != null) {
                                                                                                                                                                echo $value["discount"] . " % Off";
                                                                                                                                                            } else {
                                                                                                                                                                echo "Singhe Travels";
                                                                                                                                                            }
                                                                                                                                                            ?>
                                            </div>
                                        </div>
                                        <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background">
                                            <h3 class="tourmaster-tour-title gdlr-core-skin-title"><a href="https://max-themes.net/demos/traveltour/switzerland-7-days-in-zurich-zermatt/index.html"><?php echo $value["name"]; ?></a></h3>
                                            <div class="tourmaster-tour-price-wrap tourmaster-discount"><span class="tourmaster-tour-price"><span class="tourmaster-head">From</span><span class="tourmaster-tail"><?php
                                                                                                                                                                                                                    if ($value["discount"] != null) {
                                                                                                                                                                                                                        echo '$ ' . $value["price"];
                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                        echo "<br>";
                                                                                                                                                                                                                    }
                                                                                                                                                                                                                    ?></span></span><span class="tourmaster-tour-discount-price"><?php
                                                                                                            if ($value["discount"] != null) {
                                                                                                                $price = $value["price"] - ($value["price"] * ($value["discount"] / 100));
                                                                                                                echo "$" . $price;
                                                                                                            } else {
                                                                                                                echo "$" . $value["price"];
                                                                                                            }
                                                                                                            ?></span></div>
                                            <div class="tourmaster-tour-rating">

                                                <span class="tourmaster-tour-rating-text">Location: <?php echo $value["city"]; ?></span>
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
            <div class="tourmaster-single-review-container tourmaster-container">
                <div class="tourmaster-single-review-item tourmaster-item-pdlr">
                    <div class="tourmaster-single-review" id="tourmaster-single-review">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-toggle-box-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-toggle-box-style-box-icon">
                                <div class="gdlr-core-toggle-box-item-tab clearfix  gdlr-core">
                                    <div class="gdlr-core-toggle-box-item-icon gdlr-core-js gdlr-core-skin-icon  gdlr-core-skin-e-background gdlr-core-skin-border"></div>
                                    <div class="gdlr-core-toggle-box-item-content-wrapper">
                                        <h4 class="gdlr-core-toggle-box-item-title gdlr-core-js ">Leave a Comment</h4>
                                        <div class="gdlr-core-toggle-box-item-content">
                                            <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                                <div role="form" class="wpcf7" id="wpcf7-f1319-p1964-o1" lang="en-US" dir="ltr" style="background: #797371;
                                                                    padding-left: 5%;
                                                                    padding-right: 5%;
                                                                    padding-bottom:2%;">
                                                    <div class="screen-reader-response"></div>
                                                    <form class="quform" onsubmit="addcommenttofeedback(event,this)">

                                                        <div class="quform-elements">
                                                            <div class="quform-element">
                                                                <p>
                                                                    <br>
                                                                    <span class="wpcf7-form-control-wrap your-name">
                                                                        <?php
                                                                        if (!empty($this->data)) {
                                                                            foreach ($this->data as $key => $value) {
                                                                        ?>
                                                                                <input type="hidden" name="d_id" value="<?php echo $value["id"]; ?>" />
                                                                        <?php
                                                                            }
                                                                        }
                                                                        ?>
                                                                        <input id="name" type="text" name="name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name ">
                                                                    </span>
                                                                </p>
                                                            </div>
                                                            <div class="quform-element">
                                                                <p>
                                                                    <br>
                                                                    <span class="wpcf7-form-control-wrap your-email">
                                                                        <input id="email" type="text" name="email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email ">
                                                                    </span>
                                                                </p>
                                                            </div>
                                                            <div class="quform-element">
                                                                <p>
                                                                    <br>
                                                                    <span class="wpcf7-form-control-wrap your-message">
                                                                        <textarea id="message" name="feedback" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your Message"></textarea>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                            <p>
                                                                <!-- Begin Submit button -->
                                                            <div class="quform-submit">
                                                                <div class="quform-submit-inner">
                                                                    <button type="submit" class="submit-button"><span>Submit Now</span></button>
                                                                </div>
                                                                <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                            </div>
                                                            </p>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php
                        if (!empty($this->getFeedback)) {
                            foreach ($this->getFeedback as $key => $value) {
                        ?>
                                <div class="tourmaster-single-review-content" id="tourmaster-single-review-content" data-tour-id="4643" data-ajax-url="https://max-themes.net/demos/wp-admin/admin-ajax.html">
                                    <div class="tourmaster-single-review-content-item clearfix">
                                        <div class="tourmaster-single-review-user clearfix">
                                            <div class="tourmaster-single-review-avatar tourmaster-media-image"><img alt='' src='<?php echo PUBLIC_URL; ?>images/user.jpg'  class='avatar avatar-85 photo' height='85' width='85' /></div>
                                            <h4 class="tourmaster-single-review-user-name"><?php echo $value["name"]; ?></h4>
                                            <div class="tourmaster-single-review-user-type"><?php echo $value["date"]; ?></div>
                                        </div>
                                        <div class="tourmaster-single-review-detail">
                                            <div class="tourmaster-single-review-detail-description">
                                                <p><?php echo $value["feedback"]; ?></p>
                                            </div>
                                            
                                            <div class="tourmaster-single-review-detail-date"><?php echo $value["email"]; ?></div>
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
    <!-- <div class="tourmaster-urgency-message" id="tourmaster-urgency-message" data-expire="86400"><i class="tourmaster-urgency-message-icon fa fa-users"></i>
        <div class="tourmaster-urgency-message-text">5 travellers are considering this tour right now!</div>
    </div> -->
</div>