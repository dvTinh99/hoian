<?php

define('THEME_URL', get_stylesheet_directory());
// var_dump(get_theme_file_path('/inc/features/Custom_Nav_Walker.php'));
// die();
include(get_theme_file_path('/inc/features/Custom_Nav_Walker.php'));
// define('CORE', THEME_URL.'/core' );

// require_once(CORE.'/init.php');

if (!isset($content_width)) {
    $content_width = 620;
}

if (!function_exists('theme_setup')) {
    function theme_setup()
    {
        add_image_size('hoiansmiletours-fullscreen', 1092, 614, true);
        add_image_size('hoiansmiletours-thumb', 555, 370, true);

        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('tinhdoan', $language_folder);

        add_theme_support('automatic-feed-links');

        add_theme_support('post-thumbnails');

        add_theme_support('post-formats', array(
            'image',
            'video',
            'gallery',
            'quote',
            'link'
        ));

        add_theme_support('title-tags');

        $default_background = array('default-color' => '#FFFFFF');
        add_theme_support('custom-background', $default_background);

        //  menu items
        register_nav_menu('primary-menu', __('Primary Menu', 'tinhdoan'));

        //sidebar
        $sidebar = array(
            'name' => __('Main Sidebar', 'tinhdoan'),
            'id' => 'main-sidebar',
            'description' => __('Default sidebar', 'tinhdoan'),
            'class' => 'main-sidebar',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>'
        );
        register_sidebar($sidebar);
    }

    add_action('init', 'theme_setup');
}
//add_theme_support('post-thumbnails');
// function add_menuclass($ulclass) {
//     return preg_replace('/<a /', '<a class="x-menu-a-text !text-black !hover:text-gray-700"', $ulclass);
// }
// add_filter('wp_nav_menu','add_menuclass');

function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// function add_additional_class_on_a($classes, $item, $args) {
//     if(isset($args->add_a_class)) {
//         $classes[] = $args->add_a_class;
//     }
//     return $classes;
// }
// add_filter('nav_menu_css_class', 'add_additional_class_on_a', 1, 3);

if (!function_exists('tinhdoan_header')) {
    function tinhdoan_header()
    {
        ?>
        <div class="site-name">
            <?php
            if (is_home()) {
                printf('<h1><a href="%1$s" title"%2$s">%3$s</h1>',
                    get_bloginfo('url'),
                    get_bloginfo('description'),
                    get_bloginfo('sitename')
                );
            } else {
                printf('<p><a href="%1$s" title"%2$s">%3$s</p>',
                    get_bloginfo('url'),
                    get_bloginfo('description'),
                    get_bloginfo('sitename')
                );
            }
            ?>
        </div>
        <?php
    }
}

if (!function_exists('tinhdoan_menu')) {
    function tinhdoan_menu($menu)
    {
        $menu = array(
            'theme_location' => $menu,
            'container' => 'nav',
            'container_class' => $menu,
        );
        wp_nav_menu($menu);
    }
}

//paginations
if (!function_exists('tinhdoan_pagination')) {
    function tinhdoan_pagination()
    {
        if ($GLOBALS['wp_query']->max_num_pages < 2) {
            return '';
        } ?>
        <nav class="pagination" role="navigation">
            <?php if (get_next_posts_link()) : ?>
                <div class="prev"><?php next_posts_link(__('Older Posts', 'tinhdoan')); ?></div>
            <?php endif; ?>

            <?php if (get_previous_posts_link()) : ?>
                <div class="next"><?php previous_posts_link(__('Newest Posts', 'tinhdoan')); ?></div>
            <?php endif ?>
        </nav>
        <?php
    }
}

if (!function_exists('tinhdoan_thumbnail')) {
    function tinhdoan_thumbnail($size)
    {
        if (!is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image')) : ?>
            <figure class="post-thumbnail"><?php the_post_thumbnail($size); ?></figure>
        <?php endif; ?>
    <?php }
}

if (!function_exists('tinhdoan_entry_header')) {
    function tinhdoan_entry_header()
    { ?>

        <?php if (is_single()) : ?>
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h1>
    <?php else: ?>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php endif; ?>

    <?php }
}

if (!function_exists('tinhdoan_entry_meta')) {
    function tinhdoan_entry_meta()
    {
        ?>
        <?php if (!is_page()) : ?>
        <div class="entry-meta">
            <span class="author vcard"><?php _e('Written by', 'tinhdoan'); ?><?php the_author_posts_link(); ?></span>
            <span class="posted-on"><?php _e('Posted on', 'tinhdoan'); ?><?php the_time('F j, Y'); ?></span>
            <span class="category"><?php _e('in', 'tinhdoan'); ?><?php the_category(', '); ?></span>
            <span class="comments-link"><?php comments_popup_link(__('No Comments', 'tinhdoan'), __('1 Comment', 'tinhdoan'), __('% Comments', 'tinhdoan')); ?></span>
        </div>
    <?php endif; ?>
    <?php }
}

if (!function_exists('tinhdoan_entry_content')) {
    function tinhdoan_entry_content()
    {
        if (!is_single()) {
            the_excerpt();
        } else {
            the_content();
            //  phan trang trong single
            $link_pages = array(
                'befor' => __('<p>Page: ', 'tinhdoan'),
                'after' => '</p>',
                'nextpagelink' => __('Next page', 'tinhdoan'),
                'previous_posts_link' => __('Previous page', 'tinhdoan'),
            );
            wp_link_pages($link_pages);
        }
    }
}

/*
 @ H??m hi???n th??? tag c???a post
@ tinhdoan_entry_tag()
**/
if (!function_exists('tinhdoan_entry_tag')) {
    function tinhdoan_entry_tag()
    {
        if (has_tag()) :
            echo '<div class="entry-tag">';
            printf(__('Tagged in %1$s', 'tinhdoan'), get_the_tag_list("", ','));
            echo '</div>';
        endif;
    }
}

/*
@ Ch??n CSS v?? Javascript v??o theme
@ s??? d???ng hook wp_enqueue_scripts() ????? hi???n th??? n?? ra ngo??i front-end
**/
function tinhdoan_styles()
{
    wp_register_style('header-style', get_template_directory_uri() . '/assets/css/header-style.css');
    wp_enqueue_style('header-style');
    wp_register_style('2583b', get_template_directory_uri() . '/assets/css/2583b.css');
    wp_enqueue_style('2583b');
    wp_register_style('sty', get_template_directory_uri() . '/assets/css/stylecss.css');
    wp_enqueue_style('sty');
    wp_register_style('59615', get_template_directory_uri() . '/assets/css/59615.css');
    wp_enqueue_style('59615');
    wp_register_style('output-style', get_template_directory_uri() . '/assets/css/output.css');
    wp_enqueue_style('output-style');
    /*
     * H??m get_stylesheet_uri() s??? tr??? v??? gi?? tr??? d???n ?????n file style.css c???a theme
     * N???u s??? d???ng child theme, th?? file style.css n??y v???n load ra t??? theme m???
     */
//    wp_register_style('main-style', get_template_directory_uri() . '/style.css', 'all');
//    wp_enqueue_style('main-style');
//    wp_register_style('reset-style', get_template_directory_uri() . '/reset.css', 'all');
//    wp_enqueue_style('reset-style');
//    wp_register_style('59615', get_template_directory_uri() . '/assets/css/59615.css');
//    wp_enqueue_style('59615');
//    wp_register_style('bundle-style', get_template_directory_uri() . '/assets/dist/bundle-concat.min.css');
//    wp_enqueue_style('bundle-style');
//    wp_register_style('59615', get_template_directory_uri() . '/assets/css/59615.css');
//    wp_enqueue_style('59615');
//    wp_register_script( 'jquery', get_template_directory_uri() . '/html/assets/js/jquery.js' );
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, null);
    wp_enqueue_script('jquery');
    wp_enqueue_script('0b81e', get_template_directory_uri() . '/html/assets/js/0b81e.js', array('jquery'));
    wp_enqueue_script('8d130', get_template_directory_uri() . '/html/assets/js/8d130.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'tinhdoan_styles');

function tao_custom_post_type()
{
    /*
     * Bi???n $label ????? ch???a c??c text li??n quan ?????n t??n hi???n th??? c???a Post Type trong Admin
     */
    $label = array(
        'name' => 'Private Tours', //T??n post type d???ng s??? nhi???u
        'singular_name' => 'Private Tours' //T??n post type d???ng s??? ??t
    );
    /*
     * Bi???n $args l?? nh???ng tham s??? quan tr???ng trong Post Type
     */
    $args = array(
        'labels' => $label, //G???i c??c label trong bi???n $label ??? tr??n
        'description' => 'Post type Private Tour', //M?? t??? c???a post type
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            //   'comments',
            //   'trackbacks',
            //   'revisions',
            //   'custom-fields'
        ), //C??c t??nh n??ng ???????c h??? tr??? trong post type
        //   'taxonomies' => array( 'category', 'post_tag' ), //C??c taxonomy ???????c ph??p s??? d???ng ????? ph??n lo???i n???i dung
        'hierarchical' => false, //Cho ph??p ph??n c???p, n???u l?? false th?? post type n??y gi???ng nh?? Post, true th?? gi???ng nh?? Page
        'public' => true, //K??ch ho???t post type
        'show_ui' => true, //Hi???n th??? khung qu???n tr??? nh?? Post/Page
        'show_in_menu' => true, //Hi???n th??? tr??n Admin Menu (tay tr??i)
        'show_in_nav_menus' => true, //Hi???n th??? trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hi???n th??? tr??n thanh Admin bar m??u ??en.
        'menu_position' => 5, //Th??? t??? v??? tr?? hi???n th??? trong menu (tay tr??i)
        'menu_icon' => "", //???????ng d???n t???i icon s??? hi???n th???
        'can_export' => true, //C?? th??? export n???i dung b???ng Tools -> Export
        'has_archive' => true, //Cho ph??p l??u tr??? (month, date, year)
        'exclude_from_search' => false, //Lo???i b??? kh???i k???t qu??? t??m ki???m
        'publicly_queryable' => true, //Hi???n th??? c??c tham s??? trong query, ph???i ?????t true
        'capability_type' => 'post' //
    );
    register_post_type('private_tours', $args); //T???o post type v???i slug t??n l?? sanpham v?? c??c tham s??? trong bi???n $args ??? tr??n
}


/* K??ch ho???t h??m t???o custom post type */
add_action('init', 'tao_custom_post_type');

function tao_customer_post_type()
{
    /*
     * Bi???n $label ????? ch???a c??c text li??n quan ?????n t??n hi???n th??? c???a Post Type trong Admin
     */
    $label = array(
        'name' => 'Customer Tours', //T??n post type d???ng s??? nhi???u
        'singular_name' => 'Customer Tours' //T??n post type d???ng s??? ??t
    );
    /*
     * Bi???n $args l?? nh???ng tham s??? quan tr???ng trong Post Type
     */
    $args = array(
        'labels' => $label, //G???i c??c label trong bi???n $label ??? tr??n
        'description' => 'Post type by customer', //M?? t??? c???a post type
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            //   'comments',
            //   'trackbacks',
            //   'revisions',
            //   'custom-fields'
        ), //C??c t??nh n??ng ???????c h??? tr??? trong post type
        //   'taxonomies' => array( 'category', 'post_tag' ), //C??c taxonomy ???????c ph??p s??? d???ng ????? ph??n lo???i n???i dung
        'hierarchical' => false, //Cho ph??p ph??n c???p, n???u l?? false th?? post type n??y gi???ng nh?? Post, true th?? gi???ng nh?? Page
        'public' => true, //K??ch ho???t post type
        'show_ui' => true, //Hi???n th??? khung qu???n tr??? nh?? Post/Page
        'show_in_menu' => true, //Hi???n th??? tr??n Admin Menu (tay tr??i)
        'show_in_nav_menus' => true, //Hi???n th??? trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hi???n th??? tr??n thanh Admin bar m??u ??en.
        'menu_position' => 5, //Th??? t??? v??? tr?? hi???n th??? trong menu (tay tr??i)
        'menu_icon' => "", //???????ng d???n t???i icon s??? hi???n th???
        'can_export' => true, //C?? th??? export n???i dung b???ng Tools -> Export
        'has_archive' => true, //Cho ph??p l??u tr??? (month, date, year)
        'exclude_from_search' => false, //Lo???i b??? kh???i k???t qu??? t??m ki???m
        'publicly_queryable' => true, //Hi???n th??? c??c tham s??? trong query, ph???i ?????t true
        'capability_type' => 'post' //
    );
    register_post_type('customer_post', $args); //T???o post type v???i slug t??n l?? sanpham v?? c??c tham s??? trong bi???n $args ??? tr??n
}


/* K??ch ho???t h??m t???o custom post type */
add_action('init', 'tao_customer_post_type');

function tao_blog_post_type()
{
    /*
     * Bi???n $label ????? ch???a c??c text li??n quan ?????n t??n hi???n th??? c???a Post Type trong Admin
     */
    $label = array(
        'name' => 'Blog', //T??n post type d???ng s??? nhi???u
        'singular_name' => 'blog' //T??n post type d???ng s??? ??t
    );
    /*
     * Bi???n $args l?? nh???ng tham s??? quan tr???ng trong Post Type
     */
    $args = array(
        'labels' => $label, //G???i c??c label trong bi???n $label ??? tr??n
        'description' => 'blog', //M?? t??? c???a post type
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            //   'comments',
            //   'trackbacks',
            //   'revisions',
            //   'custom-fields'
        ), //C??c t??nh n??ng ???????c h??? tr??? trong post type
        //   'taxonomies' => array( 'category', 'post_tag' ), //C??c taxonomy ???????c ph??p s??? d???ng ????? ph??n lo???i n???i dung
        'hierarchical' => false, //Cho ph??p ph??n c???p, n???u l?? false th?? post type n??y gi???ng nh?? Post, true th?? gi???ng nh?? Page
        'public' => true, //K??ch ho???t post type
        'show_ui' => true, //Hi???n th??? khung qu???n tr??? nh?? Post/Page
        'show_in_menu' => true, //Hi???n th??? tr??n Admin Menu (tay tr??i)
        'show_in_nav_menus' => true, //Hi???n th??? trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hi???n th??? tr??n thanh Admin bar m??u ??en.
        'menu_position' => 5, //Th??? t??? v??? tr?? hi???n th??? trong menu (tay tr??i)
        'menu_icon' => "", //???????ng d???n t???i icon s??? hi???n th???
        'can_export' => true, //C?? th??? export n???i dung b???ng Tools -> Export
        'has_archive' => true, //Cho ph??p l??u tr??? (month, date, year)
        'exclude_from_search' => false, //Lo???i b??? kh???i k???t qu??? t??m ki???m
        'publicly_queryable' => true, //Hi???n th??? c??c tham s??? trong query, ph???i ?????t true
        'capability_type' => 'post' //
    );
    register_post_type('blog', $args); //T???o post type v???i slug t??n l?? sanpham v?? c??c tham s??? trong bi???n $args ??? tr??n
}


/* K??ch ho???t h??m t???o custom post type */
add_action('init', 'tao_blog_post_type');

function tao_tourist_centre_news()
{
    /*
     * Bi???n $label ????? ch???a c??c text li??n quan ?????n t??n hi???n th??? c???a Post Type trong Admin
     */
    $label = array(
        'name' => 'Tourist centre news', //T??n post type d???ng s??? nhi???u
        'singular_name' => 'tourist_centre_new' //T??n post type d???ng s??? ??t
    );
    /*
     * Bi???n $args l?? nh???ng tham s??? quan tr???ng trong Post Type
     */
    $args = array(
        'labels' => $label, //G???i c??c label trong bi???n $label ??? tr??n
        'description' => 'tourist_centre_new', //M?? t??? c???a post type
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            //   'comments',
            //   'trackbacks',
            //   'revisions',
            //   'custom-fields'
        ), //C??c t??nh n??ng ???????c h??? tr??? trong post type
        //   'taxonomies' => array( 'category', 'post_tag' ), //C??c taxonomy ???????c ph??p s??? d???ng ????? ph??n lo???i n???i dung
        'hierarchical' => false, //Cho ph??p ph??n c???p, n???u l?? false th?? post type n??y gi???ng nh?? Post, true th?? gi???ng nh?? Page
        'public' => true, //K??ch ho???t post type
        'show_ui' => true, //Hi???n th??? khung qu???n tr??? nh?? Post/Page
        'show_in_menu' => true, //Hi???n th??? tr??n Admin Menu (tay tr??i)
        'show_in_nav_menus' => true, //Hi???n th??? trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hi???n th??? tr??n thanh Admin bar m??u ??en.
        'menu_position' => 5, //Th??? t??? v??? tr?? hi???n th??? trong menu (tay tr??i)
        'menu_icon' => "", //???????ng d???n t???i icon s??? hi???n th???
        'can_export' => true, //C?? th??? export n???i dung b???ng Tools -> Export
        'has_archive' => true, //Cho ph??p l??u tr??? (month, date, year)
        'exclude_from_search' => false, //Lo???i b??? kh???i k???t qu??? t??m ki???m
        'publicly_queryable' => true, //Hi???n th??? c??c tham s??? trong query, ph???i ?????t true
        'capability_type' => 'post' //
    );
    register_post_type('tourist_centre_new', $args); //T???o post type v???i slug t??n l?? sanpham v?? c??c tham s??? trong bi???n $args ??? tr??n
}


/* K??ch ho???t h??m t???o custom post type */
add_action('init', 'tao_tourist_centre_news');

function tao_tourist_review_post_type()
{
    /*
     * Bi???n $label ????? ch???a c??c text li??n quan ?????n t??n hi???n th??? c???a Post Type trong Admin
     */
    $label = array(
        'name' => 'Tourist Review', //T??n post type d???ng s??? nhi???u
        'singular_name' => 'tourist_review' //T??n post type d???ng s??? ??t
    );
    /*
     * Bi???n $args l?? nh???ng tham s??? quan tr???ng trong Post Type
     */
    $args = array(
        'labels' => $label, //G???i c??c label trong bi???n $label ??? tr??n
        'description' => 'tourist_review', //M?? t??? c???a post type
        'supports' => array(
//            'title',
//            'editor',
//            'excerpt',
        //    'author',
//            'thumbnail',
            //   'comments',
            //   'trackbacks',
            //   'revisions',
            //   'custom-fields'
        ), //C??c t??nh n??ng ???????c h??? tr??? trong post type
        //   'taxonomies' => array( 'category', 'post_tag' ), //C??c taxonomy ???????c ph??p s??? d???ng ????? ph??n lo???i n???i dung
        'hierarchical' => false, //Cho ph??p ph??n c???p, n???u l?? false th?? post type n??y gi???ng nh?? Post, true th?? gi???ng nh?? Page
        'public' => true, //K??ch ho???t post type
        'show_ui' => true, //Hi???n th??? khung qu???n tr??? nh?? Post/Page
        'show_in_menu' => true, //Hi???n th??? tr??n Admin Menu (tay tr??i)
        'show_in_nav_menus' => true, //Hi???n th??? trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hi???n th??? tr??n thanh Admin bar m??u ??en.
        'menu_position' => 5, //Th??? t??? v??? tr?? hi???n th??? trong menu (tay tr??i)
        'menu_icon' => "", //???????ng d???n t???i icon s??? hi???n th???
        'can_export' => true, //C?? th??? export n???i dung b???ng Tools -> Export
        'has_archive' => true, //Cho ph??p l??u tr??? (month, date, year)
        'exclude_from_search' => false, //Lo???i b??? kh???i k???t qu??? t??m ki???m
        'publicly_queryable' => true, //Hi???n th??? c??c tham s??? trong query, ph???i ?????t true
//        'capability_type' => 'post' //
    );
    register_post_type('tourist_review', $args); //T???o post type v???i slug t??n l?? sanpham v?? c??c tham s??? trong bi???n $args ??? tr??n
}


/* K??ch ho???t h??m t???o custom post type */
add_action('init', 'tao_tourist_review_post_type');

//function remove_post_type_title() {
//    remove_post_type_support( 'tourist_review', 'title' );
//    remove_post_type_support( 'tourist_review', 'editor' );
//}
//add_action( 'init', 'remove_post_type_title' );

add_filter('pre_get_posts', 'lay_custom_post_type');
function lay_custom_post_type($query)
{
    if (is_home() && $query->is_main_query())
        $query->set('post_type', array('post', 'sanpham'));
    return $query;
}

add_action( 'phpmailer_init', function( $phpmailer ) {
    if ( !is_object( $phpmailer ) )
    $phpmailer = (object) $phpmailer;
    $phpmailer->Mailer     = 'smtp';
    $phpmailer->Host       = 'smtp.gmail.com';
    $phpmailer->SMTPAuth   = 1;
    $phpmailer->Port       = 587;
    $phpmailer->Username   = 'tien.luckyfor@gmail.com'; //??i???n t??i kho???n gmail c???a b???n
    $phpmailer->Password   = 'ovtzzhewvffblvyn'; //??i???n m???t kh???u ???ng d???ng m?? b???n ???? t???o ??? tr??n
    $phpmailer->SMTPSecure = 'TLS';
    $phpmailer->From       = 'tien.luckyfor@gmail.com'; //??i???n t??i kho???n gmail c???a b???n
    $phpmailer->FromName   = 'hoiansmiletours.com';
});

/*
@see: https://florianbrinkmann.com/en/organizing-files-functions-wordpress-theme-4190/
*/
if (WP_DEBUG) {
    require_once('inc/debug.php');
}
require_once('inc/utils.php');
require_once('inc/filters.php');
require_once('inc/actions.php');
require_once('inc/shortcodes.php');
