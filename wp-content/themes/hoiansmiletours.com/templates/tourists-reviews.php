<?php
/*
 Template Name: tourists-reviews
 */
?>
<?php
 if(isset($_POST['submit'])){
    $customer_post = array(
        'post_title'   => $_POST['your-name']. ' - ' . $_POST['your-email'],
        'post_status'  => 'private',
        'post_type'    => 'tourist_review',
        'meta_input' => [
            'text_a1kkjaljxdn' => $_POST['your-name'],
            'textarea_xl6lwdgjxm' => $_POST['your-message'],
            'image_advanced_ogrtgc6urol' => '102'
        ],
    );
    $rs  = wp_insert_post($customer_post);
 }
?>
<?php get_header(); ?>

<!-- WP-BODY -->
<div id="wrapper-content" class="clearfix">
    <section id="page-title" class="single-blog-title-wrap page-title-size-md single-blog-title-margin">
        <div class="page-title-wrap-bg" style="background-image: url('<?= $thumbnailUrl ?>');"></div>
        <div class="container">
            <div class="single-blog-title-inner text-center">
                <h1 class="p-font"><?php the_title(); ?></h1>
            </div>
        </div>
    </section>

    <main class="single-post-wrap">

        <div class="container clearfix">
            
            <div class="row clearfix">
            
            
                <div class="col-md-12">
                    <div class="single-post-inner">

                        <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/typography'),
    ],
  }
  ```
-->

                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <!-- We've used 3xl here, but feel free to try other max-widths based on your needs -->
                            <div class="max-w-3xl mx-auto">

                                <div class="bg-white">
                                    <div>
                                        <h2 class="sr-only">Customer Reviews</h2>
                                        <div class="-my-10">
                                            <?php
                                            $args = array(
                                                'post_type' => 'tourist_review',
                                                'post_status' => 'publish',
                                            );
                                            $query = new WP_Query($args);
                                            if ($query->have_posts()) :
                                                while ($query->have_posts()) : $query->the_post();
                                                    $user = rwmb_get_value('text_a1kkjaljxdn');
                                                    $review = rwmb_get_value('textarea_xl6lwdgjxm');
                                                    $images = rwmb_get_value('image_advanced_ogrtgc6urol');
                                                    $image = @Arr_first($images)['url'];
                                                    $date = get_the_date('Y-m-d');
                                            ?>
                                                    <div class="flex  text-gray-500 space-x-4">
                                                        <div class="flex-none py-10">
                                                            <img src="<?= $image?>" alt="" class="w-10 h-10 bg-gray-100 rounded-full">
                                                        </div>
                                                        <div class="flex-1 py-10">
                                                            <h3 class="font-medium text-gray-900"><?= $user ?></h3>
                                                            <p>
                                                                <time datetime="2021-07-16"><?= $date ?></time>
                                                            </p>

                                                            <div class="mt-4 prose prose-sm max-w-none text-gray-500">
                                                                <p><?= $review ?></p>
                                                            </div>
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
                                <!-- Content goes here -->
                            </div>
                        </div>
                    </div>
                </div>

                <form action="" method="post" enctype="multipart/form-data">
                <div style="display: none;">
                    <input type="hidden" name="_wpcf7" value="1109" />
                    <input type="hidden" name="_wpcf7_version" value="5.1.3" />
                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1109-p3310-o1" />
                    <input type="hidden" name="_wpcf7_container_post" value="3310" />
                </div>

                <div class="form-contact-wrap large-form px-4">
                    <div class="row">
                        <div class="col col-md-12">
                            <span class="wpcf7-form-control-wrap your-name">
                                <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name (required)" />
                            </span>
                            <p></p>
                            <p>
                                <span class="wpcf7-form-control-wrap your-email">
                                    <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email(required)" />
                                </span>
                            </p>
                            <p>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea>
                                </span>
                            </p>
                        </div>
                        <div class="form-submit col-md-12">
                            <input type="submit" name="submit" value="Send" class="wpcf7-form-control wpcf7-submit m-button m-button-primary m-button-3d" /><span class="ajax-loader"></span>
                        </div>
                    </div>
                </div>
                <div class="wpcf7-response-output wpcf7-display-none"></div>
            </form>
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>