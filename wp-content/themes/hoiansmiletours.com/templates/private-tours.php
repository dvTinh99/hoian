<?php
/*
 Template Name: private-tours
 */
?>
<?php get_header(); ?>
    <!-- WP-BODY -->
    <div id="wrapper-content" class="clearfix">
        <?php
        get_template_part('template-parts/parallax-image', 'parallax-image' );
        ?>
        <main class="site-content-page">
            <div class="container clearfix">
                <div class="wpb_wrapper">
                    <div class="heading color-dark text-center">
                        <h2>
                            <span>PRIVATE TOURS</span>
                        </h2>
                    </div>
                    <div class="m-post style1">
                        <div class="row column-equal-height">
                            <?php
                            $args = array(
                                'post_type' => 'private_tours',
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();
                                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'hoiansmiletours-thumb');
                                    ?>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="post-item">
                                            <div class="thumbnail-wrapper">
                                                <img src="<?= $featured_img_url ?>"
                                                     alt=""/>
                                            </div>
                                            <div class="post-content">
                                                <h3 class="post-title !text-black">
                                                    <?php the_title() ?>
                                                </h3>
                                                <div class="post-description">
                                                    <p></p>
                                                    <p class="pb-6"><?php the_excerpt() ?></p>
                                                </div>
                                            </div>
                                            <a class="post-link"
                                               href="<?php the_permalink(); ?>"
                                               rel="bookmark"
                                               title="<?php the_title() ?>"
                                            ></a>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
<?php get_footer() ?>