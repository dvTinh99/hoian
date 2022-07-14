<?php
 if(isset($_POST['submit'])){
     $message = 'Customer  name : '. $_POST['your-name']. ' <br> ' . 
     'Customer  email : '.$_POST['your-email'] . ' <br> ' .
     'Date : '.$_POST['select-date']. ' <br> ' . 
     'Time : '.$_POST['select-time']. ' <br> ' . 
     'Tour : '.$_POST['title']. ' <br> ' . 
     'Adults : '.$_POST['select-Adults']. ' <br> ' .
     'teenager : '.$_POST['select-teenager']. ' <br> ' .
     'child : '.$_POST['select-child']. ' <br> ' .
     'Kids : '.$_POST['select-kids']. ' <br> ' .
     'Customer  tel : '.$_POST['your-tel']. ' <br> ' .
     'Customer  nationlity : '.$_POST['your-nati']. ' <br> ' .
     'Customer  hotel : '.$_POST['your-hotel']. ' <br> ' .
     'Customer  message : '.$_POST['your-message'] ;
    $customer_post = array(
        'post_title'   => $_POST['your-name']. ' - ' . $_POST['your-email'],
        'post_content' => $message,
        'post_status'  => 'private',
        'post_type'    => 'customer_post'
    );
    $to = $_POST['your-email'];
    $subject = "Book a successful tour";
    $header  =  "From:havantrungbdu@exmaple.com \r\n";
    $header .=  "Cc:havantrungbdu@exmaple.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    $message_mail = '<h2>You have successfully booked a tour at hoiansmiletours.com</h2>';
    $message_mail .= '<h3>Your information</h3>  <br>';
    $message_mail .= $message;

    $to_admin = wp_mail($to,$subject,$message_mail,$header);
    $to_custome = wp_mail('havantrungbdu@gmail.com',$subject,$message_mail,$header);

    $rs  = wp_insert_post($customer_post);
 }
?>

<?php get_header(); ?>
<?php
$sliderImages = rwmb_get_value('image_advanced_tysyby1pae', ['size' => 'hoiansmiletours-fullscreen']);
$galleryImages = rwmb_get_value('image_advanced_tysyby1pae', ['size' => 'medium_large']);
$thumbnailUrl = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail');
?>

<section id="page-title" class="single-blog-title-wrap page-title-size-md single-blog-title-margin page-title-breadcrumbs-float" style="background-color: rgba(0, 0, 0, 0.5);">
    <div class="page-title-wrap-bg z-0" style="background-image: url('<?= $thumbnailUrl ?>');"></div>
    <div class="absolute inset-0 z-10 bg-black bg-opacity-50"></div>
    <div class="container absolute z-20">
        <div class="single-blog-title-inner text-center">
            <h1 class="p-font"><?= get_the_title() ?></h1>
            <p class="s-font">Private tour</p>
        </div>
        <div class="breadcrumbs-wrap float text-left">
            <div class="breadcrumbs-inner text-left">
                <label class="p-font">You are here:</label>
                <ul class="breadcrumbs">
                    <li><a href="<?= home_url() ?>" class="home">Home</a></li>
                    <li><a href="<?= home_url('private_tours') ?>" title="Private tours">Private tours</a></li>
                    <li><span><?= get_the_title() ?></span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<main class="single-post-wrap">
    <div class="container clearfix">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="single-post-inner">
                    <article id="post-3310" class="clearfix post-3310 post type-post status-publish format-gallery has-post-thumbnail hentry category-hoi-an category-tours tag-day-tour-hoi-an tag-food-tour-hoi-an tag-hoi-an tag-private-tour tag-private-tour-hoi-an post_format-post-format-gallery">
                        <div class="entry-thumbnail-wrap">
                            <div class='owl-carousel' data-plugin-options='{"items" : 1, "dots" : false, "nav" : true, "animateOut" : "fadeOut", "animateIn" : "fadeIn", "autoplay" : true}'>
                                <?php
                                foreach ($sliderImages as $image) {
                                ?>
                                    <div class="entry-thumbnail">
                                        <a href="<?= $image['url'] ?>" title="<?= get_the_title() ?>" class="entry-thumbnail-overlay">
                                            <img width="1170" height="658" class="img-responsive" src="<?= $image['url'] ?>" alt="<?= get_the_title() ?>" />
                                        </a>
                                        <a data-rel="prettyPhoto[blog_3310]" href="<?= $image['full_url'] ?>" class="prettyPhoto"><i class="fa fa-expand"></i></a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="entry-content-wrap">
                            <div class="entry-content clearfix">
                                <div class="fullwidth">
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="fullwidth">
                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <?php
                                                                        the_content();
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_text_column wpb_content_element">
                                                                            <div class="wpb_wrapper">
                                                                                <h4><span style="color: #ff0000;">GALLERY</span>
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                        <?php
                                                                        foreach ($galleryImages as $image) { ?>
                                                                            <div class="wpb_text_column wpb_content_element">
                                                                                <div class="wpb_wrapper">
                                                                                    <p>
                                                                                        <img class="aligncenter wp-image-5370" src="<?= $image['url'] ?>" alt="" width="3000" height="2225" srcset="
                                                                                                <?= $image['url'] ?> 300w,
                                                                                                <?= $image['url'] ?> 662w
                                                                                            " sizes="(max-width: 3000px) 100vw, 3000px" />
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="tour-contact" class="fullwidth">
                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1572259027125">
                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey">
                                                                            <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span>
                                                                            <span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                                                                        </div>
                                                                    </div>
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

                                                        <div class="form-contact-wrap large-form">
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
                                                                        <span class="wpcf7-form-control-wrap select-date">
                                                                            <input type="text" name="select-date" value="" size="40" class="wpcf7-form-control wpcf7-date hasDatepicker" placeholder="---- Choose a date ----" id="dp1650187513627" />
                                                                        </span>
                                                                    </p>
                                                                    <p>
                                                                        <span class="wpcf7-form-control-wrap select-time">
                                                                            <select name="select-time" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
                                                                                <option value="---- Choose a time ----">---- Choose a time ----</option>
                                                                                <option value="Morning tour">Morning tour</option>
                                                                                <option value="Afternoon tour">Afternoon tour</option>
                                                                                <option value="Evening tour">Evening tour</option>
                                                                                <option value="Full day tour">Full day tour</option>
                                                                            </select>
                                                                        </span>
                                                                    </p>
                                                                    <p>
                                                                        <span class="wpcf7-form-control-wrap select-Adults">
                                                                            <input type="text" name="select-Adults" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Adults" />
                                                                        </span>
                                                                    </p>
                                                                    <p>
                                                                        <span class="wpcf7-form-control-wrap select-teenager">
                                                                            <input type="text" name="select-teenager" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Teenager (13-15 years old)" />
                                                                        </span>
                                                                    </p>
                                                                    <p>
                                                                        <span class="wpcf7-form-control-wrap select-child">
                                                                            <input type="text" name="select-child" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Child (7-12 years old)" />
                                                                            <input type="hidden" id="title" name="title" value="<?= get_the_title()?>" />
                                                                        </span>
                                                                    </p>
                                                                    <p>
                                                                        <span class="wpcf7-form-control-wrap select-kids">
                                                                            <input type="text" name="select-kids" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Kid (age 6 and younger)" />
                                                                        </span>
                                                                    </p>
                                                                    <p>
                                                                        <span class="wpcf7-form-control-wrap your-tel">
                                                                            <input type="text" name="your-tel" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Your Telephone" />
                                                                        </span>
                                                                    </p>
                                                                    <p>
                                                                        <span class="wpcf7-form-control-wrap your-nati">
                                                                            <input type="text" name="your-nati" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Your Nationality" />
                                                                        </span>
                                                                    </p>
                                                                    <p>
                                                                        <span class="wpcf7-form-control-wrap your-hotel">
                                                                            <input type="text" name="your-hotel" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Hotel or cruise ship you stay at" />
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-meta-tag-wrap social-share-hover">
                                <div class="entry-meta-tag tagcloud">
                                    <label>Tags :</label><a href="https://hoiansmiletours.com/tag/day-tour-hoi-an/" rel="tag">day tour hoi an</a><a href="https://hoiansmiletours.com/tag/food-tour-hoi-an/" rel="tag">food tour
                                        hoi an</a>
                                    <a href="https://hoiansmiletours.com/tag/hoi-an/" rel="tag">hoi an</a><a href="https://hoiansmiletours.com/tag/private-tour/" rel="tag">private
                                        tour</a>
                                    <a href="https://hoiansmiletours.com/tag/private-tour-hoi-an/" rel="tag">private
                                        tour hoi an</a>
                                </div>
                                <div class="social-share-wrap">
                                    <a class="m-button m-button-3d m-button-gray m-button-xs" href="javascript:;" rel="bookmark" title="Hoi An Ancient Town And Street Food – Private Tour">Share
                                        <i class="micon icon-share"></i></a>
                                    <ul class="social-profile s-rounded s-secondary s-md">
                                        <li>
                                            <a onclick="window.open('https://www.facebook.com/sharer.php?s=100&amp;p[url]=https%3A%2F%2Fhoiansmiletours.com%2Fhoi-an-ancient-town-street-food-tour%2F','sharer', 'toolbar=0,status=0,width=620,height=280');" href="javascript:;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a onclick="popUp=window.open('http://twitter.com/home?status=Hoi+An+Ancient+Town+And+Street+Food+%26%238211%3B+Private+Tour https%3A%2F%2Fhoiansmiletours.com%2Fhoi-an-ancient-town-street-food-tour%2F','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" onclick="popUp=window.open('https://plus.google.com/share?url=https%3A%2F%2Fhoiansmiletours.com%2Fhoi-an-ancient-town-street-food-tour%2F','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a onclick="popUp=window.open('http://linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fhoiansmiletours.com%2Fhoi-an-ancient-town-street-food-tour%2F&amp;title=Hoi+An+Ancient+Town+And+Street+Food+%26%238211%3B+Private+Tour','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a onclick="popUp=window.open('http://www.tumblr.com/share/link?url=https%3A%2F%2Fhoiansmiletours.com%2Fhoi-an-ancient-town-street-food-tour%2F&amp;name=Hoi+An+Ancient+Town+And+Street+Food+%26%238211%3B+Private+Tour&amp;description=Spend+a+morning+or+afternoon+with+local+guide+to+learn+about+fascinating+history+of+the+ancient+town.+Get+to+know+more+about+Vietnam+culture+while+tasting+amazing+local+food.+Nice+surprises+awaiting+too+%21','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">
                                                <i class="fa fa-tumblr"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a onclick="popUp=window.open('http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fhoiansmiletours.com%2Fhoi-an-ancient-town-street-food-tour%2F&amp;description=Hoi+An+Ancient+Town+And+Street+Food+%26%238211%3B+Private+Tour&amp;media=https://hoiansmiletours.com/wp-content/uploads/2016/10/Hoi-An-Ancient-Town-Walking-Tour-2.jpg','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="entry-comments" id="comments">
                        <h3 class="comments-title p-font">
                            <span> No Comments </span>
                        </h3>
                        <div class="entry-comments-form clearfix">
                            <div id="respond" class="comment-respond">
                                <h3 id="reply-title" class="comment-reply-title">
                                    Post a Comment <small><a rel="nofollow" id="cancel-comment-reply-link" href="/hoi-an-ancient-town-street-food-tour/#respond" style="display: none;">Cancel reply</a></small>
                                </h3>
                                <form action="https://hoiansmiletours.com/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
                                    <p class="comment-notes">Your email address will not be published.</p>
                                    <div class="form-group col-md-12"><textarea rows="6" id="comment" name="comment" placeholder="Message*" aria-required="true"></textarea></div>
                                    <div class="form-group col-md-6"><input id="author" name="author" type="text" value="" placeholder="Name" aria-required="true" /></div>
                                    <div class="form-group col-md-6"><input id="email" name="email" type="email" value="" placeholder="Email" aria-required="true" /></div>
                                    <p class="comment-form-cookies-consent">
                                        <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" />
                                        <label for="wp-comment-cookies-consent">Save my name, email, and website in this
                                            browser for the next time I comment.</label>
                                    </p>
                                    <p class="form-submit">
                                        <input name="submit" type="submit" id="btnComment" class="m-button m-button-xs m-button-primary m-button-3d" value="Send Message" />
                                        <input type="hidden" name="comment_post_ID" value="3310" id="comment_post_ID" />
                                        <input type="hidden" name="comment_parent" id="comment_parent" value="0" />
                                    </p>
                                    <p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="966a4816fe" />
                                    </p>
                                    <p style="display: none;"></p>
                                    <input type="hidden" id="ak_js" name="ak_js" value="1650187513632" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer() ?>