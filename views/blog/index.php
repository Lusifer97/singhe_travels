<div class="traveltour-page-title-wrap  traveltour-style-large traveltour-center-align">
    <div class="traveltour-header-transparent-substitute"></div>
    <div class="traveltour-page-title-overlay"></div>
    <div class="traveltour-page-title-container traveltour-container">
        <div class="traveltour-page-title-content traveltour-item-pdlr">
            <h1 class="traveltour-page-title">Articals</h1>
        </div>
    </div>
</div>
<div class="traveltour-page-wrapper" id="traveltour-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " id="div_1f92_0">
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-image-no-space gdlr-core-item-pdlr" id="div_1f92_1">
                            <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                <?php
                                if (!empty($this->data)) {
                                    foreach ($this->data as $key => $value) {
                                ?>
                                        <div class="gdlr-core-item-list  gdlr-core-column-30 ">
                                            <div class="gdlr-core-blog-modern  gdlr-core-with-image gdlr-core-hover-overlay-content gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                <div class="gdlr-core-blog-modern-inner">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image"><img src="<?php echo PUBLIC_URL; ?>images/blog/<?php echo $value["image"]; ?>" alt="" width="1280" height="580" /></div>
                                                    <div class="gdlr-core-blog-modern-content  gdlr-core-center-align" id="div_1f92_2">
                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_1f92_0"><a href="<?php echo URL; ?>blog/details/<?php echo base64_encode($value["id"]); ?>"><?php echo $value["title"]; ?></a></h3>
                                                        <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class="gdlr-core-head"><i class="icon_clock_alt"></i></span><a href="https://max-themes.net/demos/traveltour/2016/06/06/index.html"><?php echo $value["date"]; ?></a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head"><i class="icon_documents_alt"></i></span><a href="https://max-themes.net/demos/traveltour/author/superuser/index.html" title="Posts by <?php echo $value["author"]; ?>" rel="author"><?php echo $value["author"]; ?></a></span>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>