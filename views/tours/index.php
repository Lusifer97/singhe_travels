<div class="traveltour-page-title-wrap  traveltour-style-custom traveltour-left-align">
    <div class="traveltour-header-transparent-substitute"></div>
    <div class="traveltour-page-title-overlay"></div>
    <div class="traveltour-page-title-container traveltour-container">
        <div class="traveltour-page-title-content traveltour-item-pdlr">
            <h1 class="traveltour-page-title">Tour Package Collection</h1>
        </div>
    </div>
</div>
<div class="traveltour-page-wrapper" id="traveltour-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper ">
            <div class="gdlr-core-pbf-background-wrap" id="div_6441_0"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="tourmaster-tour-item clearfix  tourmaster-tour-item-style-grid tourmaster-tour-item-column-2">
                            <div class="tourmaster-tour-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                            <?php
                                if (!empty($this->data)) {
                                    foreach ($this->data as $key => $value) {
                                ?>
                                <div class="gdlr-core-item-list  tourmaster-item-pdlr tourmaster-column-20">
                                    <div class="tourmaster-tour-grid tourmaster-tour-frame tourmaster-price-right-title">
                                        <div class="tourmaster-tour-thumbnail tourmaster-media-image">
                                            <a href="https://max-themes.net/demos/traveltour/switzerland-7-days-in-zurich-zermatt/index.html"><img src="<?php echo PUBLIC_URL; ?>images/tours/1.jpg" alt="" width="700" height="430" /></a>
                                            <div class="tourmaster-thumbnail-ribbon gdlr-core-outer-frame-element" id="div_6441_1">
                                                <div class="tourmaster-thumbnail-ribbon-cornor" id="div_6441_2"></div><?php echo $value["status"]; ?>
                                            </div>
                                        </div>
                                        <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background">
                                            <h3 class="tourmaster-tour-title gdlr-core-skin-title" id="h3_6441_2"><a href="<?php echo URL; ?>tours/details/<?php echo base64_encode($value["id"]); ?>"><?php echo $value["name"]; ?></a></h3>
                                            <div class="tourmaster-tour-price-wrap tourmaster-discount"><span class="tourmaster-tour-price"><span class="tourmaster-head">From</span><span class="tourmaster-tail"><?php if($value["discount"]!=null){echo $value["discount"]."%";} ?></span></span><span class="tourmaster-tour-discount-price"><?php 
                                            if($value["discount"]!=null){
                                                $price =  $value["price"]-($value["price"]*($value["discount"]/100));
                                            echo "$ ".$price;
                                            }else{
                                                echo "$ ". $value["price"];
                                            }
                                            ?></span></div>
                                            <div class="tourmaster-tour-info-wrap clearfix">
                                                <div class="tourmaster-tour-info tourmaster-tour-info-duration-text "><i class="icon_clock_alt"></i><?php echo $value["duration"]; ?></div>
                                                <div class="tourmaster-tour-info tourmaster-tour-info-availability "><i class="fa fa-calendar"></i>Availability : Jan 16’ - Dec 16’</div>
                                            </div>
                                             
                                        </div>
                                    </div>
                                </div>
                            <?php }} ?>
                            </div>
                            <!-- <div class="gdlr-core-pagination  gdlr-core-style-circle gdlr-core-center-align tourmaster-item-pdlr"><span aria-current='page' class='page-numbers current'>1</span> <a class='page-numbers' href='page/2/index.html'>2</a> <a class='page-numbers' href='page/3/index.html'>3</a>
                                <a class="next page-numbers" href="page/2/index.html"></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>