<?php
/*
 Template Name: blog
 */
?>
<?php get_header(); ?>
<!-- WP-BODY -->
<div id="wrapper-content" class="clearfix">
    <?php
        get_template_part('template-parts/parallax-image', 'parallax-image');
    ?>
    <main class="site-content-page has-sidebar">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="sidebar left-sidebar col-md-3 hidden-sm hidden-xs sidebar-small">
                    <aside id="viettitan-posts-3" class="widget widget-posts">
                        <h4 class="widget-title"><span>Featured Tours</span></h4>
                        <?php
                        $args = array(
                            'post_type' => 'blog',
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'hoiansmiletours-thumb');
                                ?>
                        <div class="widget_posts_item clearfix">
                            <div class="widget-posts-thumbnail">
                                <div class="entry-thumbnail">
                                    <a href="#" title="<?php the_title() ?>" class="entry-thumbnail-overlay">
                                        <img width="76" height="58" class="img-responsive" src="<?php echo $featured_img_url?>" alt="VIETNAM – TIPPING CULTURE ?" />
                                    </a>
                                    <a data-rel="prettyPhoto" href="<?php the_permalink(); ?>" class="prettyPhoto"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="widget-posts-content-wrap">
                                <a class="widget-posts-title p-font" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title() ?>"><?php echo get_the_title() ?></a>
                                <div class="widget-posts-date s-font s-color">
                                <?php echo get_the_date()?>
                                </div>
                            </div>
                        </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>

                    </aside>
                </div>
                <div class="site-content-page-inner col-md-9">
                    <div class="page-content">
                        <div id="post-116" class="post-116 page type-page status-publish has-post-thumbnail hentry">
                            <div class="entry-content clearfix">
                                <div class="fullwidth">
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="shortcode-blog-wrap">
                                                        <div class="blog-wrap medium-image">
                                                            <div class="blog-inner clearfix blog-style-medium-image no-sidebar">

                                                                <?php
                                                                    $args = array(
                                                                        'post_type' => 'blog',
                                                                    );
                                                                    $query = new WP_Query($args);
                                                                    if ($query->have_posts()) :
                                                                        while ($query->have_posts()) : $query->the_post();
                                                                            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'hoiansmiletours-thumb');
                                                                            ?>
                                                                <article id="post-1014" class="clearfix post-1014 post type-post status-publish format-gallery has-post-thumbnail hentry category-tips post_format-post-format-gallery">
                                                                    <div class="entry-thumbnail-wrap">
                                                                        <div class="entry-thumbnail">
                                                                            <a href="<?php the_permalink(); ?>" title="<?php the_title() ?>" class="entry-thumbnail-overlay">
                                                                                <img
                                                                                        width="570"
                                                                                        height="321"
                                                                                        class="img-responsive"
                                                                                        src="<?php echo $featured_img_url?>"
                                                                                        alt="How To Plan A Great Trip to Vietnam"
                                                                                />
                                                                            </a>
                                                                            <a data-rel="prettyPhoto" href="<?php the_permalink(); ?>" class="prettyPhoto"><i class="fa fa-expand"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="entry-content-wrap">
                                                                        <h3 class="entry-post-title p-font">
                                                                            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title() ?>">
                                                                                <?php echo get_the_title() ?>
                                                                            </a>
                                                                        </h3>
                                                                        <div class="entry-excerpt">
                                                                            <p>
                                                                                <?php the_excerpt()?> […]
                                                                            </p>
                                                                        </div>
                                                                        <div class="entry-content-footer social-share-hover">
                                                                            <a
                                                                                    class="m-button m-button-3d m-button-primary m-button-xs"
                                                                                    href="<?php the_permalink(); ?>"
                                                                                    rel="bookmark"
                                                                                    title="<?php the_title() ?>"
                                                                            >
                                                                                Read More
                                                                            </a>
                                                                            <div class="social-share-wrap">
                                                                                <a class="m-button m-button-3d m-button-gray m-button-xs" href="javascript:;" rel="bookmark" title="<?php the_title() ?>">
                                                                                    Share <i class="micon icon-share"></i>
                                                                                </a>
                                                                                <ul class="social-profile s-rounded s-secondary s-md">
                                                                                    <li>
                                                                                        <a
                                                                                                onclick="window.open('https://www.facebook.com/sharer.php?s=100&amp;p[url]=https%3A%2F%2Fhoiansmiletours.com%2Fhow-to-plan-a-great-trip-to-vietnam%2F','sharer', 'toolbar=0,status=0,width=620,height=280');"
                                                                                                href="javascript:;"
                                                                                        >
                                                                                            <i class="fa fa-facebook"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                                onclick="popUp=window.open('http://twitter.com/home?status=How+To+Plan+A+Great+Trip+to+Vietnam https%3A%2F%2Fhoiansmiletours.com%2Fhow-to-plan-a-great-trip-to-vietnam%2F','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                                                                                                href="javascript:;"
                                                                                        >
                                                                                            <i class="fa fa-twitter"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                                href="javascript:;"
                                                                                                onclick="popUp=window.open('https://plus.google.com/share?url=https%3A%2F%2Fhoiansmiletours.com%2Fhow-to-plan-a-great-trip-to-vietnam%2F','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                                                                                        >
                                                                                            <i class="fa fa-google-plus"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                                onclick="popUp=window.open('http://linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fhoiansmiletours.com%2Fhow-to-plan-a-great-trip-to-vietnam%2F&amp;title=How+To+Plan+A+Great+Trip+to+Vietnam','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                                                                                                href="javascript:;"
                                                                                        >
                                                                                            <i class="fa fa-linkedin"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                                onclick="popUp=window.open('http://www.tumblr.com/share/link?url=https%3A%2F%2Fhoiansmiletours.com%2Fhow-to-plan-a-great-trip-to-vietnam%2F&amp;name=How+To+Plan+A+Great+Trip+to+Vietnam&amp;description=Step+1%3A+How+many+days+do+you+have+in+Vietnam+%3F+Check+your+plan+and+schedule+to+see+how+many+days+you+intend+staying+in+Vietnam.+This+is+very+important+before+you+make+a+detailed+plan.+Some+backpackers+spend+a+month+in+Vietnam%2C+so+their+plans+may+be+very+different+compared+to+yours+with+a+%5B%26hellip%3B%5D','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                                                                                                href="javascript:;"
                                                                                        >
                                                                                            <i class="fa fa-tumblr"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a
                                                                                                onclick="popUp=window.open('http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fhoiansmiletours.com%2Fhow-to-plan-a-great-trip-to-vietnam%2F&amp;description=How+To+Plan+A+Great+Trip+to+Vietnam&amp;media=https://hoiansmiletours.com/wp-content/uploads/2018/07/1.jpg','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                                                                                                href="javascript:;"
                                                                                        >
                                                                                            <i class="fa fa-pinterest"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </article>
                                                                <?php
                                                                        endwhile;
                                                                        wp_reset_postdata();
                                                                    endif;
                                                                    ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>
<?php get_footer() ?>
