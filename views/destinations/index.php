<div class="traveltour-page-title-wrap  traveltour-style-custom traveltour-left-align">
    <div class="traveltour-header-transparent-substitute"></div>
    <div class="traveltour-page-title-overlay"></div>
    <div class="traveltour-page-title-container traveltour-container" style="padding-bottom:2%;">
        <div class="traveltour-page-title-content traveltour-item-pdlr">
            <h1 class="traveltour-page-title">Destinations</h1>
        </div>
        <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " style="max-width: 900px ;">
                    <div class="gdlr-core-pbf-element">
                        <div class="tourmaster-tour-search-item clearfix tourmaster-style-column tourmaster-column-count-4 tourmaster-item-pdlr tourmaster-input-style-no-border" style="padding-bottom: 0px;">
                            <div class="tourmaster-tour-search-wrap ">
                                <form class="tourmaster-form-field  tourmaster-medium" onsubmit="filterForm(event,this)">
                                    <div class="tourmaster-tour-search-field tourmaster-tour-search-field-tax" style="padding-right: 2px;margin-bottom: 2px;">
                                        <div class="tourmaster-combobox-wrap">
                                            <select name="categories_id" onchange="selectCity(this)">
                                                <option value="">Expectation</option>
                                                <?php
                                                if (!empty($this->getCategory)) {
                                                    foreach ($this->getCategory as $key => $value) {
                                                ?>
                                                        <option value="<?php echo $value["id"]; ?>"><?php echo $value["name"]; ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="tourmaster-tour-search-field tourmaster-tour-search-field-tax" style="padding-right: 2px;margin-bottom: 2px;">
                                        <div class="tourmaster-combobox-wrap">
                                            <select name="city" id="city">
                                                <option value="">City</option>
                                                <div></div>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="tourmaster-tour-search-field tourmaster-tour-search-field-duration" style="padding-right: 2px;margin-bottom: 2px;">
                                        <div class="tourmaster-combobox-wrap">
                                            <select name="price" id="price">
                                                <option value="">Price Range</option>

                                            </select>
                                        </div>
                                    </div>
                                    <input class="tourmaster-tour-search-submit" type="submit" value="Search" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="traveltour-page-wrapper" id="traveltour-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-sidebar-wrapper ">
            <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-right" id="div_098e_0">
                    <div class="gdlr-core-pbf-background-wrap" id="div_098e_1"></div>
                    <div class="gdlr-core-pbf-sidebar-content-inner">
                        <div class="gdlr-core-pbf-element">
                            <div class="tourmaster-tour-item clearfix  tourmaster-tour-item-style-full">
                                <div class="tourmaster-tour-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows" id="load">
                                    <?php
                                    if (!empty($this->data)) {
                                        foreach ($this->data as $key => $value) {
                                    ?>
                                    <div class="tourmaster-item-list tourmaster-tour-full tourmaster-item-pdlr clearfix tourmaster-tour-frame">
                                                <div style="box-shadow: 5px 10px 8px 10px #888888;">
                                                    <div class="tourmaster-tour-thumbnail tourmaster-media-image">
                                                        <a href="<?php echo URL; ?>destinations/details/<?php echo $value["id"]; ?>"><img src="<?php echo PUBLIC_URL; ?>images/destination/<?php echo $value["image"]; ?>" alt="" width="1280" height="580" /></a>
                                                    </div>
                                                    <div class="tourmaster-tour-content-wrap clearfix gdlr-core-skin-e-background">
                                                        <div class="tourmaster-content-left">
                                                            <h3 class="tourmaster-tour-title gdlr-core-skin-title"><a href="<?php echo URL; ?>destinations/details/<?php echo $value["id"]; ?>"><?php echo $value["name"]; ?></a></h3>
                                                            <div class="tourmaster-tour-info-wrap clearfix">
                                                                <div class="tourmaster-tour-info tourmaster-tour-info-duration-text "><i class="icon_clock_alt"></i><?php echo $value["duration"]; ?> Days</div>
                                                                <div class="tourmaster-tour-info tourmaster-tour-info-availability "><i class="fa fa-calendar"></i>Availability : Jan 16’ - Dec 16’</div>
                                                                <div class="tourmaster-tour-info tourmaster-tour-info-departure-location "><i class="flaticon-takeoff-the-plane"></i><?php echo $value["city"]; ?></div>
                                                            </div>
                                                            <div class="tourmaster-tour-content"><?php echo $value["short_description"]; ?></div>
                                                        </div>
                                                        <div class="tourmaster-content-right tourmaster-center-tour-content">
                                                            <div class="tourmaster-tour-price-wrap "><span class="tourmaster-tour-price"><span class="tourmaster-head">From</span><span class="tourmaster-tail">$100</span></span>
                                                            </div>
                                                            <div class="tourmaster-tour-rating tourmaster-tour-rating-empty">0</div><a class="tourmaster-tour-view-more" href="<?php echo URL; ?>destinations/details/<?php echo $value["id"]; ?>">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>


                                </div>
                                <div class="gdlr-core-pagination  gdlr-core-style-plain gdlr-core-left-align tourmaster-item-pdlr">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-sidebar-left gdlr-core-column-extend-left  traveltour-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" id="div_098e_6">
                    <div class="gdlr-core-sidebar-item">
                        <div id="tourmaster-tour-widget-5" class="widget widget_tourmaster-tour-widget traveltour-widget">
                            <h3 class="traveltour-widget-title"><span class="traveltour-widget-head-text">Latest Tours</span></h3><span class="clear"></span>
                            <div class="tourmaster-recent-tour-widget tourmaster-tour-item">
                                <?php
                                if (!empty($this->popularpackages)) {
                                    foreach ($this->popularpackages as $key => $value) {
                                ?>
                                        <div class="tourmaster-item-list tourmaster-tour-widget tourmaster-item-pdlr">
                                            <div class="tourmaster-tour-widget-inner clearfix">
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image">
                                                    <a href="<?php echo URL ?>tours/details/<?php echo base64_encode($value["id"]); ?>"><img src="<?php echo PUBLIC_URL; ?>upload/shutterstock_120562819-150x150.jpg" alt="" width="150" height="150" /></a>
                                                </div>
                                                <div class="tourmaster-tour-content-wrap">
                                                    <h3 class="tourmaster-tour-title gdlr-core-skin-title"><a href="<?php echo URL ?>tours/details/<?php echo base64_encode($value["id"]); ?>"><?php echo $value["name"]; ?></a></h3>
                                                    <div class="tourmaster-tour-content-info clearfix ">
                                                        <div class="tourmaster-tour-price-wrap "><span class="tourmaster-tour-price"><span class="tourmaster-head">From</span><span class="tourmaster-tail">$ <?php echo $value["price"]; ?></span></span>
                                                        </div>
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
                        <div id="text-10" class="widget widget_text traveltour-widget">
                            <div class="textwidget">
                                <div class="gdlr-core-widget-box-shortcode " id="div_098e_11">
                                    <h3 class="gdlr-core-widget-box-shortcode-title" id="h3_098e_0">Get a Question?</h3>
                                    <div class="gdlr-core-widget-box-shortcode-content">
                                        <p>Do not hesitage to give us a call. We are an expert team and we are happy to talk to you.</p>
                                        <p><i class="fa fa-phone" id="i_098e_4"></i> <span id="span_098e_0">+94 91 229 8444</span></p>
                                        <p><span id="span_098e_1">info@sighetravels.com</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="nav_menu-3" class="widget widget_nav_menu traveltour-widget">
                            <h3 class="traveltour-widget-title"><span class="traveltour-widget-head-text">Tour Category</span></h3><span class="clear"></span>
                            <div class="menu-tour-category-container">
                                <ul id="menu-tour-category" class="menu">
                                    <?php
                                    if (!empty($this->getCategory)) {
                                        foreach ($this->getCategory as $key => $value) {
                                    ?>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4913"><?php echo $value["name"]; ?></li>
                                    <?php
                                        }
                                    }
                                    ?>

                                </ul>
                            </div>
                        </div>
                        <div id="gdlr-core-recent-post-widget-4" class="widget widget_gdlr-core-recent-post-widget traveltour-widget">
                            <h3 class="traveltour-widget-title"><span class="traveltour-widget-head-text">Recent Articles</span></h3><span class="clear"></span>
                            <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">
                                <?php
                                if (!empty($this->articals)) {
                                    foreach ($this->articals as $key => $value) {
                                ?>
                                        <div class="gdlr-core-recent-post-widget clearfix">
                                            <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src="<?php echo PUBLIC_URL; ?>images/blog/<?php echo $value["image"]; ?>" alt="" width="150" height="150" /></div>
                                            <div class="gdlr-core-recent-post-widget-content">
                                                <div class="gdlr-core-recent-post-widget-title"><a href="<?php echo URL; ?>blog/details/<?php echo base64_encode($value["id"]); ?>"><?php echo $value["title"]; ?></a></div>
                                                <div class="gdlr-core-recent-post-widget-info"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class="gdlr-core-head"><i class="icon_clock_alt"></i></span><a href="#"><?php echo $value["date"]; ?></a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head"><i class="icon_documents_alt"></i></span><a href="https://max-themes.net/demos/traveltour/author/superuser/index.html" title="Posts by <?php echo $value["author"]; ?>" rel="author"><?php echo $value["author"]; ?></a></span>
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