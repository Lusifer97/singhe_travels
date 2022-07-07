<div class="gdlr-core-pbf-wrapper " style="padding: 120px 20px 70px 20px;" data-skin="Dark">
    <div class="gdlr-core-pbf-background-wrap">
        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php echo PUBLIC_URL; ?>upload/section-bg-4.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed="0.8"></div>
    </div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px ;">
                    <div class="gdlr-core-title-item-title-wrap">
                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="text-transform: none ;color: #fff;">Unforgettable Memories<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                    </div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption"></span>
                </div>
            </div>
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-slider gdlr-core-item-pdlr ">
                    <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type="slider" data-effect="default" data-nav="navigation">
                        <ul class="slides">
                            <?php
                            if (!empty($this->albums)) {
                                foreach ($this->albums as $key => $value) {
                            ?>

                                    <li>
                                        <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                            <a class="gdlr-core-ilightbox gdlr-core-js " href="<?php echo URL; ?>memories/photos/<?php echo base64_encode($value["id"]); ?>" data-caption="Snow mountain" data-ilightbox-group="gdlr-core-img-group-4">
                                                <img src="<?php echo PUBLIC_URL; ?>images/albums/<?php echo $value["image"]; ?>" alt="" width="1550" height="700" />
                                                <span class="gdlr-core-image-overlay  gdlr-core-gallery-image-overlay gdlr-core-left-align">
                                                    <span class="gdlr-core-image-overlay-content">
                                                        <span class="gdlr-core-image-overlay-title gdlr-core-title-font"><?php echo $value["title"]; ?></span>
                                                        <span class="gdlr-core-image-overlay-caption gdlr-core-info-font"><?php echo $value["date"]; ?></span>
                                                    </span>
                                                </span>
                                            </a>
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