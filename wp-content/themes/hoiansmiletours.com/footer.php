<!-- WP-FOOTER -->
<footer class="main-footer-wrapper dark-black ">
    <div id="wrapper-footer">
        <div class="main-footer">
            <div class="footer_inner clearfix">
                <div class="footer_top_holder col-2">
                    <div class="container">
                        <div class="row footer-top-col-2 footer-4">
                            <div class="sidebar footer-sidebar col-md-6 col-sm-12">
                                <aside id="nav_menu-2" class="widget widget_nav_menu">
                                    <h4 class="widget-title"><span>Website</span></h4>
                                    <div class="menu-footer-menu-container">
                                        <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'primary-menu',
                                                'container' => 'false',
                                                'menu_id' => 'menu-footer-menu',
                                                'menu_class' => 'menu',
                                                'add_li_class'  => 'menu-item menu-item-type-post_type menu-item-object-page menu-item-183',
                                                'add_a_class'  => 'tinh',
                                            )
                                        );
                                        ?>
                                        <!-- <ul id="menu-footer-menu" class="menu">
                                                <?php //foreach ($menu as $value) { 
                                                ?>
                                                    <li id="menu-item-183"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-183">
                                                        <a href="/about-us/"><?= $value ?></a>
                                                    </li>
                                                <?php //} 
                                                ?>
                                            </ul> -->
                                    </div>
                                </aside>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-bar-wrapper ">
            <div class="bottom-bar-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 sidebar text-left">
                            <aside id="text-3" class="widget widget_text">
                                <div class="textwidget">
                                    <p>Copyright by hoiansmiletours.com</p>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>
</div>
<a class="back-to-top in" href="javascript:;">
    <i class="fa fa-angle-up mt-2"></i>
</a>
<script type="text/javascript">
    document.addEventListener(
        "wpcf7mailsent",
        function(event) {
            location = "/thanks/";
        },
        false
    );
</script>
<script type="text/javascript">
    var wpcf7 = {
        apiSettings: {
            root: "\/wp-json\/contact-form-7\/v1",
            namespace: "contact-form-7\/v1"
        },
        cached: "1"
    };
</script>
<script type="text/javascript">
    jQuery(document).ready(function(jQuery) {
        jQuery.datepicker.setDefaults({
            closeText: "Close",
            currentText: "Today",
            monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            nextText: "Next",
            prevText: "Previous",
            dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            dayNamesShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
            dateFormat: "MM d, yy",
            firstDay: 1,
            isRTL: false,
        });
    });
</script>
<script type="text/javascript">
    var viettitan_framework_constant = {
        product_compare: "Compare",
        product_wishList: "WishList"
    };
    var viettitan_framework_ajax_url = "\/wp-admin\/admin-ajax.php?activate-multi=true";
    var viettitan_framework_theme_url = "/";
    var viettitan_framework_site_url = "";
</script>
<script>
    jQuery("style#viettitan_custom_style").append("@media screen and (min-width: 992px) {}");
</script>
<script>
    jQuery("style#viettitan_custom_style").append("@media screen and (min-width: 992px) {}");
</script>
<div id="contact_popup_wrapper" class="dialog">
    <div class="dialog__overlay"></div>
    <div class="dialog__content">
        <div class="morph-shape">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 520 280" preserveAspectRatio="none">
                <rect x="3" y="3" fill="none" width="516" height="276"></rect>
            </svg>
        </div>
        <div class="dialog-inner">
            <h3>Complete contact form.</h3>
            <div role="form" class="wpcf7" id="wpcf7-f1109-o1" lang="en-US" dir="ltr">
                <div class="screen-reader-response"></div>
                <form action="/#wpcf7-f1109-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                    <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="1109" />
                        <input type="hidden" name="_wpcf7_version" value="5.1.3" />
                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1109-o1" />
                        <input type="hidden" name="_wpcf7_container_post" value="0" />
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
                                    <span class="wpcf7-form-control-wrap select-date"><input type="text" name="select-date" value="" size="40" class="wpcf7-form-control wpcf7-date" placeholder="---- Choose a date ----" /> </span>
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
                            <div class="form-submit col-md-12"><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit m-button m-button-primary m-button-3d" /><span class="ajax-loader"></span></div>
                        </div>
                    </div>
                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                </form>
            </div>
            <div>
                <button class="action" data-dialog-close="close" type="button"><i class="fa fa-close"></i></button>
            </div>
        </div>
    </div>
</div>
<!--<script data-optimized="1" src="--><?php //bloginfo('template_directory') 
                                        ?>
<!--/html/assets/js/8d130.js"></script>-->

</body>

</html>

<script>
    $(document).ready(function() {
        $.('body').show();
        alert(1);
        $('.menu-item').hover(function() {
            $(this).find('.sub-menu').show();
        }, function() {
            $(this).find('.sub-menu').hide();
        });
    });
</script>