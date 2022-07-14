<?php
/*
 Template Name: contact-us
 */
?>
<?php get_header(); ?>
<!-- WP-BODY -->
<div id="wrapper-content" class="clearfix">
    <?php
        get_template_part('template-parts/parallax-image', 'parallax-image');
    ?>
    <main class="site-content-page">
        <div class="container clearfix">
        <?= get_the_content() ?>    
        </div>
    </main>
</div>
<?php get_footer() ?>
