<div class="gdlr-core-pbf-wrapper " style="padding: 120px 20px 50px 20px;">
    <div class="gdlr-core-pbf-background-wrap" style="background-color: #f7f7f7 ;"></div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
            <?php
            if (!empty($this->albums_details)) {
                foreach ($this->albums_details as $key => $value) {
            ?>
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px ;">
                            <div class="gdlr-core-title-item-title-wrap">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="text-transform: none ;"><?php echo $value["title"]; ?>
                                    <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                </h3>
                            </div>
                            <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption"><?php echo $value["date"]; ?></span>
                        </div>
                    </div>
            <?php }
            } ?>
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-thumbnail gdlr-core-item-pdlr ">
                    <div class="gdlr-core-gallery-with-thumbnail-wrap gdlr-core-inside-slider">
                        <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type="slider" data-effect="default" data-nav="none" data-thumbnail="1">
                            <ul class="slides">
                                <?php
                                if (!empty($this->photos)) {
                                    foreach ($this->photos as $key => $value) {
                                ?>
                                        <li>
                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                <a class="gdlr-core-ilightbox gdlr-core-js " href="<?php echo PUBLIC_URL; ?>images/photos/<?php echo $value["image"]; ?>" data-caption="Photography" data-ilightbox-group="gdlr-core-img-group-5">
                                                    <img src="<?php echo PUBLIC_URL; ?>images/photos/<?php echo $value["image"]; ?>" alt="" width="1500" height="750" />
                                                    <span class="gdlr-core-image-overlay  gdlr-core-gallery-image-overlay gdlr-core-center-align">
                                                        <span class="gdlr-core-image-overlay-content">
                                                            <!-- <span class="gdlr-core-image-overlay-title gdlr-core-title-font">Canyon</span>
                                                            <span class="gdlr-core-image-overlay-caption gdlr-core-info-font">Photography</span> -->
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
                        <div class="gdlr-core-sly-slider gdlr-core-js-2">
                            <ul class="slides">
                                <?php
                                if (!empty($this->photos)) {
                                    foreach ($this->photos as $key => $value) {
                                ?>
                                        <li class="gdlr-core-gallery-list gdlr-core-item-mglr">
                                            <div class="gdlr-core-media-image">
                                                <img src="<?php echo PUBLIC_URL; ?>images/photos/<?php echo $value["image"]; ?>" alt="" width="300" height="199" />
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