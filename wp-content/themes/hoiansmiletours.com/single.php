<?php get_header(); ?>
<?php
$thumbnailUrl = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail');
?>

    <!-- WP-BODY -->
    <div id="wrapper-content" class="clearfix">
        <section id="page-title" class="single-blog-title-wrap page-title-size-md single-blog-title-margin">
            <div class="page-title-wrap-bg" style="background-image: url('<?=$thumbnailUrl?>');"></div>
            <div class="container">
                <div class="single-blog-title-inner text-center"><h1 class="p-font"><?php the_title(); ?></h1></div>
            </div>
        </section>
        <main class="single-post-wrap">
            <div class="container clearfix">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="single-post-inner">
                            <?php
                            the_content();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>


<?php get_footer() ?>