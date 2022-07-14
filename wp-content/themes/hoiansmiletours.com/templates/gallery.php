<?php
/*
 Template Name: gallery
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
            <!--        --><? //= get_the_content() ?><!--    -->
            <div class="container clearfix">
                <div class="row clearfix">
                    <div class="site-content-page-inner col-md-12">
                        <div class="page-content">
                            <div id="post-14" class="post-14 page type-page status-publish hentry">
                                <div class="entry-content clearfix">
                                    <div class="fullwidth">
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="viettitan-gallery col-4 style1">
                                                            <?php
                                                            if (preg_match_all('/http[^"]+/mis', get_the_content(), $output_array)) {
                                                                $matchs = Arr_first($output_array);
                                                                foreach ($matchs as $image) {
                                                                    ?>
                                                                    <div class="viettitan-gallary-thumb" >
                                                                        <div class="gallery-inner-thumb">
                                                                            <img alt="Gallery"
                                                                                 src="<?= $image ?>"/>
                                                                            <div class="gallery-hover">
                                                                                <a data-rel="prettyPhoto[feature]"
                                                                                   href="<?= $image ?>"><i
                                                                                            class="fa fa-search"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } ?>
                                                            <!--<div class="viettitan-gallary-thumb">
                                                                <div class="gallery-inner-thumb">
                                                                    <img alt="" src="https://hoiansmiletours.com/wp-content/uploads/2016/10/30-390x260.jpg" />
                                                                    <div class="gallery-hover">
                                                                        <a data-rel="prettyPhoto[feature]" href="https://hoiansmiletours.com/wp-content/uploads/2016/10/30.jpg"><i class="fa fa-search"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="viettitan-gallary-thumb">
                                                                <div class="gallery-inner-thumb">
                                                                    <img alt="" src="https://hoiansmiletours.com/wp-content/uploads/2016/10/33-390x260.jpg" />
                                                                    <div class="gallery-hover">
                                                                        <a data-rel="prettyPhoto[feature]" href="https://hoiansmiletours.com/wp-content/uploads/2016/10/33.jpg"><i class="fa fa-search"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="viettitan-gallary-thumb">
                                                                <div class="gallery-inner-thumb">
                                                                    <img alt="" src="https://hoiansmiletours.com/wp-content/uploads/2016/10/29-390x260.jpg" />
                                                                    <div class="gallery-hover">
                                                                        <a data-rel="prettyPhoto[feature]" href="https://hoiansmiletours.com/wp-content/uploads/2016/10/29.jpg"><i class="fa fa-search"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="viettitan-gallary-thumb">
                                                                <div class="gallery-inner-thumb">
                                                                    <img alt="" src="https://hoiansmiletours.com/wp-content/uploads/2017/07/20170823_083824-390x260.jpg" />
                                                                    <div class="gallery-hover">
                                                                        <a data-rel="prettyPhoto[feature]" href="https://hoiansmiletours.com/wp-content/uploads/2017/07/20170823_083824.jpg"><i class="fa fa-search"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="viettitan-gallary-thumb">
                                                                <div class="gallery-inner-thumb">
                                                                    <img alt="" src="https://hoiansmiletours.com/wp-content/uploads/2018/04/unnamed-3-390x260.jpg" />
                                                                    <div class="gallery-hover">
                                                                        <a data-rel="prettyPhoto[feature]" href="https://hoiansmiletours.com/wp-content/uploads/2018/04/unnamed-3.jpg"><i class="fa fa-search"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="viettitan-gallary-thumb">
                                                                <div class="gallery-inner-thumb">
                                                                    <img alt="" src="https://hoiansmiletours.com/wp-content/uploads/2018/04/unnamed-390x260.jpg" />
                                                                    <div class="gallery-hover">
                                                                        <a data-rel="prettyPhoto[feature]" href="https://hoiansmiletours.com/wp-content/uploads/2018/04/unnamed.jpg"><i class="fa fa-search"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="viettitan-gallary-thumb">
                                                                <div class="gallery-inner-thumb">
                                                                    <img alt="" src="https://hoiansmiletours.com/wp-content/uploads/2016/10/22-390x260.jpg" />
                                                                    <div class="gallery-hover">
                                                                        <a data-rel="prettyPhoto[feature]" href="https://hoiansmiletours.com/wp-content/uploads/2016/10/22.jpg"><i class="fa fa-search"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="viettitan-gallary-thumb">
                                                                <div class="gallery-inner-thumb">
                                                                    <img alt="" src="" />
                                                                    <div class="gallery-hover">
                                                                        <a data-rel="prettyPhoto[feature]" href=""><i class="fa fa-search"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                     <div class="container">
                                         <div class="vc_row wpb_row vc_row-fluid">
                                             <div class="wpb_column vc_column_container vc_col-sm-6">
                                                 <div class="vc_column-inner">
                                                     <div class="wpb_wrapper">
                                                         <div
                                                                 data-plugin-options='{"autoplay": true,"loop":true,"center":false,"autoplayHoverPause":true,"autoplayTimeout":5000, "items":1,"responsive":{},"dots":false, "nav":false}'
                                                                 class="image-slider owl-carousel style2 owl-theme owl-loaded"
                                                         >
                                                             <div class="owl-stage-outer">
                                                                 <div class="owl-stage" style="transform: translate3d(-5130px, 0px, 0px); transition: all 0.25s ease 0s; width: 9690px;">
                                                                     <div class="owl-item cloned" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2017/12/IMG20170404162127-576x1024.jpg" rel="prettyPhoto[rel-14-1122254671]">
                                                                             <img width="1754" height="3120" src="https://hoiansmiletours.com/wp-content/uploads/2017/12/IMG20170404162127.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item cloned" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2017/12/IMG_3755-576x1024.jpg" rel="prettyPhoto[rel-14-1122254671]">
                                                                             <img width="1700" height="3024" src="https://hoiansmiletours.com/wp-content/uploads/2017/12/IMG_3755.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2019/08/IMG_4160-1024x576.jpg" rel="prettyPhoto[rel-14-1122254671]">
                                                                             <img width="1092" height="614" src="https://hoiansmiletours.com/wp-content/uploads/2019/08/IMG_4160.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2019/10/IMG_7142-1024x576.jpg" rel="prettyPhoto[rel-14-1122254671]">
                                                                             <img width="1092" height="614" src="https://hoiansmiletours.com/wp-content/uploads/2019/10/IMG_7142.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2019/10/20180620_113703.jpg" rel="prettyPhoto[rel-14-1122254671]">
                                                                             <img width="811" height="608" src="https://hoiansmiletours.com/wp-content/uploads/2019/10/20180620_113703.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2019/07/IMG_7102-1024x576.jpg" rel="prettyPhoto[rel-14-1122254671]">
                                                                             <img width="1092" height="614" src="https://hoiansmiletours.com/wp-content/uploads/2019/07/IMG_7102.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2018/12/0005430_the-hai-van-pass-1024x683.jpeg" rel="prettyPhoto[rel-14-1122254671]">
                                                                             <img width="1200" height="800" src="https://hoiansmiletours.com/wp-content/uploads/2018/12/0005430_the-hai-van-pass.jpeg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2019/08/IMG_5184-1024x576.jpg" rel="prettyPhoto[rel-14-1122254671]">
                                                                             <img width="3024" height="1701" src="https://hoiansmiletours.com/wp-content/uploads/2019/08/IMG_5184.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2018/07/IMG_7563-1024x683.jpg" rel="prettyPhoto[rel-14-1122254671]">
                                                                             <img width="3541" height="2361" src="https://hoiansmiletours.com/wp-content/uploads/2018/07/IMG_7563.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item active" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2018/07/IMG_7719-1024x581.jpg" rel="prettyPhoto[rel-14-1122254671]">
                                                                             <img width="2968" height="1684" src="https://hoiansmiletours.com/wp-content/uploads/2018/07/IMG_7719.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2018/07/IMG_7592-1024x672.jpg" rel="prettyPhoto[rel-14-1122254671]">
                                                                             <img width="3003" height="1971" src="https://hoiansmiletours.com/wp-content/uploads/2018/07/IMG_7592.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2016/10/IMG_5498-576x1024.jpg" rel="prettyPhoto[rel-14-1122254671]">
                                                                             <img width="2267" height="4032" src="https://hoiansmiletours.com/wp-content/uploads/2016/10/IMG_5498.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2016/10/IMG_5530-576x1024.jpg" rel="prettyPhoto[rel-14-1122254671]">
                                                                             <img width="2232" height="3969" src="https://hoiansmiletours.com/wp-content/uploads/2016/10/IMG_5530.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2017/12/IMG20170404162127-576x1024.jpg" rel="prettyPhoto[rel-14-1122254671]">
                                                                             <img width="1754" height="3120" src="https://hoiansmiletours.com/wp-content/uploads/2017/12/IMG20170404162127.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2017/12/IMG_3755-576x1024.jpg" rel="prettyPhoto[rel-14-1122254671]">
                                                                             <img width="1700" height="3024" src="https://hoiansmiletours.com/wp-content/uploads/2017/12/IMG_3755.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item cloned" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2019/08/IMG_4160-1024x576.jpg" rel="prettyPhoto[rel-14-1122254671]">
                                                                             <img width="1092" height="614" src="https://hoiansmiletours.com/wp-content/uploads/2019/08/IMG_4160.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item cloned" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2019/10/IMG_7142-1024x576.jpg" rel="prettyPhoto[rel-14-1122254671]">
                                                                             <img width="1092" height="614" src="https://hoiansmiletours.com/wp-content/uploads/2019/10/IMG_7142.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="owl-controls">
                                                                 <div class="owl-nav">
                                                                     <div class="owl-prev" style="display: none;"><i class="fa fa-angle-left"></i></div>
                                                                     <div class="owl-next" style="display: none;"><i class="fa fa-angle-right"></i></div>
                                                                 </div>
                                                                 <div class="owl-dots" style="display: none;"></div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="wpb_column vc_column_container vc_col-sm-6">
                                                 <div class="vc_column-inner">
                                                     <div class="wpb_wrapper">
                                                         <div
                                                                 data-plugin-options='{"autoplay": true,"loop":true,"center":false,"autoplayHoverPause":true,"autoplayTimeout":5000, "items":1,"responsive":{},"dots":false, "nav":false}'
                                                                 class="image-slider owl-carousel style2 owl-theme owl-loaded"
                                                         >
                                                             <div class="owl-stage-outer">
                                                                 <div class="owl-stage" style="transform: translate3d(-5130px, 0px, 0px); transition: all 0.25s ease 0s; width: 7410px;">
                                                                     <div class="owl-item cloned" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2019/08/IMG_3993-1024x576.jpg" rel="prettyPhoto[rel-14-1210227995]">
                                                                             <img width="1092" height="614" src="https://hoiansmiletours.com/wp-content/uploads/2019/08/IMG_3993.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item cloned" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2019/08/IMG_3985-1024x576.jpg" rel="prettyPhoto[rel-14-1210227995]">
                                                                             <img width="1092" height="614" src="https://hoiansmiletours.com/wp-content/uploads/2019/08/IMG_3985.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2019/10/IMG_7142-1024x576.jpg" rel="prettyPhoto[rel-14-1210227995]">
                                                                             <img width="1092" height="614" src="https://hoiansmiletours.com/wp-content/uploads/2019/10/IMG_7142.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2019/10/IMG_7623-1024x683.jpg" rel="prettyPhoto[rel-14-1210227995]">
                                                                             <img width="3648" height="2432" src="https://hoiansmiletours.com/wp-content/uploads/2019/10/IMG_7623.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2019/10/IMG20181017100945-1024x576.jpg" rel="prettyPhoto[rel-14-1210227995]">
                                                                             <img width="1081" height="608" src="https://hoiansmiletours.com/wp-content/uploads/2019/10/IMG20181017100945.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2019/10/IMG_5179-1024x576.jpg" rel="prettyPhoto[rel-14-1210227995]">
                                                                             <img width="1081" height="608" src="https://hoiansmiletours.com/wp-content/uploads/2019/10/IMG_5179.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2019/10/IMG_7110.jpg" rel="prettyPhoto[rel-14-1210227995]">
                                                                             <img width="832" height="624" src="https://hoiansmiletours.com/wp-content/uploads/2019/10/IMG_7110.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2019/10/IMG_7551-1024x683.jpg" rel="prettyPhoto[rel-14-1210227995]">
                                                                             <img width="3648" height="2432" src="https://hoiansmiletours.com/wp-content/uploads/2019/10/IMG_7551.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2019/08/IMG_3971.jpg" rel="prettyPhoto[rel-14-1210227995]">
                                                                             <img width="819" height="614" src="https://hoiansmiletours.com/wp-content/uploads/2019/08/IMG_3971.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item active" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2019/08/IMG_3993-1024x576.jpg" rel="prettyPhoto[rel-14-1210227995]">
                                                                             <img width="1092" height="614" src="https://hoiansmiletours.com/wp-content/uploads/2019/08/IMG_3993.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2019/08/IMG_3985-1024x576.jpg" rel="prettyPhoto[rel-14-1210227995]">
                                                                             <img width="1092" height="614" src="https://hoiansmiletours.com/wp-content/uploads/2019/08/IMG_3985.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item cloned" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2019/10/IMG_7142-1024x576.jpg" rel="prettyPhoto[rel-14-1210227995]">
                                                                             <img width="1092" height="614" src="https://hoiansmiletours.com/wp-content/uploads/2019/10/IMG_7142.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                     <div class="owl-item cloned" style="width: 570px; margin-right: 0px;">
                                                                         <a class="prettyphoto" href="https://hoiansmiletours.com/wp-content/uploads/2019/10/IMG_7623-1024x683.jpg" rel="prettyPhoto[rel-14-1210227995]">
                                                                             <img width="3648" height="2432" src="https://hoiansmiletours.com/wp-content/uploads/2019/10/IMG_7623.jpg" class="attachment-full" alt="" />
                                                                         </a>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="owl-controls">
                                                                 <div class="owl-nav">
                                                                     <div class="owl-prev" style="display: none;"><i class="fa fa-angle-left"></i></div>
                                                                     <div class="owl-next" style="display: none;"><i class="fa fa-angle-right"></i></div>
                                                                 </div>
                                                                 <div class="owl-dots" style="display: none;"></div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                    -->
                                    <div class="fullwidth">
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_empty_space" style="height: 32px;"><span
                                                                    class="vc_empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fullwidth">
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper"></div>
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
