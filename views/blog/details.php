<div class="traveltour-page-wrapper" id="traveltour-page-wrapper">
    <?php
    if (!empty($this->data)) {
        foreach ($this->data as $key => $value) {
    ?>

            <div class="traveltour-blog-title-wrap  traveltour-style-custom traveltour-feature-image" style="background-image: url(<?php echo PUBLIC_URL; ?>/images/blog/<?php echo $value["image"]; ?>) ;">
                <div class="traveltour-header-transparent-substitute"></div>
                <div class="traveltour-blog-title-top-overlay"></div>
                <div class="traveltour-blog-title-overlay"></div>
                <div class="traveltour-blog-title-bottom-overlay"></div>
                <div class="traveltour-blog-title-container traveltour-container">
                    <div class="traveltour-blog-title-content traveltour-item-pdlr" style="padding-top: 400px ;padding-bottom: 80px ;">
                        <header class="traveltour-single-article-head clearfix">
                             <div class="traveltour-single-article-head-right">
                                <div class="traveltour-blog-info-wrapper">
                                    <div class="traveltour-blog-info traveltour-blog-info-font traveltour-blog-info-author"><span class="traveltour-head"><i class="icon_documents_alt"></i></span><a href="#" title="Posts by <?php echo $value["author"]; ?>" rel="author"><?php echo $value["author"]; ?></a></div>
                                     
                                    <div class="traveltour-blog-info traveltour-blog-info-font traveltour-blog-info-tag"><span class="traveltour-head"><i class="icon_tags_alt"></i></span><a href="#" rel="tag"><?php echo $value["type"]; ?></a></div>
                                     
                                </div>
                                <h1 class="traveltour-single-article-title"><?php echo $value["title"]; ?></h1>
                            </div>
                        </header>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
    <div class="traveltour-content-container traveltour-container">
        <div class=" traveltour-sidebar-wrap clearfix traveltour-line-height-0 traveltour-sidebar-style-right">
            <div class=" traveltour-sidebar-center traveltour-column-40 traveltour-line-height">
                <div class="traveltour-content-wrap traveltour-item-pdlr clearfix">
                    <div class="traveltour-content-area">
                        <article id="post-1268" class="post-1268 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-post-format category-uncategorized tag-news" style="width: 1200px;">
                            <div class="traveltour-single-article">
                                <div class="traveltour-single-article-content">
                                     <p><?php echo $value["description"]; ?></p>
                            </div>
                            </div>
                        </article>
                    </div>
                     

                     
                </div>
            </div>
             
        </div>
    </div>
</div>