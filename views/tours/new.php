<div class="traveltour-page-title-wrap  traveltour-style-medium traveltour-center-align">
    <div class="traveltour-header-transparent-substitute"></div>
    <div class="traveltour-page-title-overlay"></div>
    <div class="traveltour-page-title-container traveltour-container">
        <div class="traveltour-page-title-content traveltour-item-pdlr">
            <h1 class="traveltour-page-title">Tour Packages</h1>
            <div class="traveltour-page-caption">Find best tour packages with us</div>
        </div>
    </div>
</div>
<div class="traveltour-page-wrapper" id="traveltour-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-section">
            <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-portfolio-item gdlr-core-item-pdb clearfix  gdlr-core-portfolio-item-style-grid" id="div_6c1a_0">


                        <div class="filter clearfix gdlr-core-filterer-wrap gdlr-core-js  gdlr-core-item-pdlr gdlr-core-style-text gdlr-core-center-align">
                            <ul>
                                <li><a href="#" class="active" data-filter="*">All</a></li>
                                <?php
                                if (!empty($this->getStatus)) {
                                    foreach ($this->getStatus as $key => $value) {
                                ?>
                                <li><a href="#" data-filter=".<?php echo $value["status"]; ?>"><?php echo $value["status"]; ?></a></li>
                                 
                                <?php }}?>
                            </ul>
                        </div>


                        <div class="gdlr-core-portfolio-item-holder gdlr-core-js-2 filter-container clearfix" data-layout="fitrows">
                        <?php
                                if (!empty($this->data)) {
                                    foreach ($this->data as $key => $value) {
                                ?>
                            <div class="gdlr-core-item-list <?php echo $value["status"]; ?> gdlr-core-item-pdlr gdlr-core-column-20">
                                <div class="gdlr-core-portfolio-grid  gdlr-core-left-align gdlr-core-style-normal">
                                    <div class="tourmaster-tour-grid tourmaster-tour-frame tourmaster-price-right-title" style="box-shadow: 5px 10px 8px 10px #888888;">
                                        <div class="tourmaster-tour-thumbnail tourmaster-media-image">
                                            <a href="https://max-themes.net/demos/traveltour/switzerland-7-days-in-zurich-zermatt/index.html"><img src="<?php echo PUBLIC_URL; ?>images/tours/1.jpg" alt="" width="700" height="430" /></a>
                                            <div class="tourmaster-thumbnail-ribbon gdlr-core-outer-frame-element" id="div_6441_1">
                                                <div class="tourmaster-thumbnail-ribbon-cornor" id="div_6441_2"></div><?php echo $value["status"]; ?>
                                            </div>
                                        </div>
                                        <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background">
                                            <h3 class="tourmaster-tour-title gdlr-core-skin-title" id="h3_6441_2"><a href="<?php echo URL; ?>tours/details/<?php echo base64_encode($value["id"]); ?>"><?php echo $value["name"]; ?></a></h3>
                                            <div class="tourmaster-tour-price-wrap tourmaster-discount"><span class="tourmaster-tour-price"><span class="tourmaster-head">From</span><span class="tourmaster-tail"><?php if ($value["discount"] != null) {
                                                                                                                                                                                                                        echo $value["discount"] . "%";
                                                                                                                                                                                                                    } ?></span></span><span class="tourmaster-tour-discount-price"><?php
                                                                                                                                                                                                                                                                                                                                                    if ($value["discount"] != null) {
                                                                                                                                                                                                                                                                                                                                                        $price =  $value["price"] - ($value["price"] * ($value["discount"] / 100));
                                                                                                                                                                                                                                                                                                                                                        echo "$ " . $price;
                                                                                                                                                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                                                                                                                                                        echo "$ " . $value["price"];
                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                    ?></span></div>
                                            <div class="tourmaster-tour-info-wrap clearfix">
                                                <div class="tourmaster-tour-info tourmaster-tour-info-duration-text "><i class="icon_clock_alt"></i><?php echo $value["duration"]; ?></div>
                                                <div class="tourmaster-tour-info tourmaster-tour-info-availability "><i class="fa fa-calendar"></i>Availability : Jan 16’ - Dec 16’</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                             <?php }}?>                                                                                                                                                               

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>