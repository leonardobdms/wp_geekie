<?php
require_once __DIR__ . '/vendor/autoload.php';
use meet_metaslider_SuperbThemesCustomizer\CustomizerController;

/**
 * Meet Metaslider functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Meet Metaslider
 */


if (! function_exists('meet_metaslider_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */

    function meet_metaslider_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Meet Metaslider, use a find and replace
         * to change 'meet-metaslider' to the name of your theme in all the template files.
         */
        load_theme_textdomain('meet-metaslider', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(300);

        add_image_size('meet-metaslider-grid', 350, 230, true);
        add_image_size('meet-metaslider-slider', 850);
        add_image_size('meet-metaslider-small', 300, 180, true);


        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1'	=> esc_html__('Primary', 'meet-metaslider'),
        ));

        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('meet_metaslider_custom_background_args', array(
            'default-color' => '##fbfbff',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'flex-width'  => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'meet_metaslider_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function meet_metaslider_content_width()
{
    $GLOBALS['content_width'] = apply_filters('meet_metaslider_content_width', 640);
}
add_action('after_setup_theme', 'meet_metaslider_content_width', 0);


function meet_metaslider_woocommerce_support()
{
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'meet_metaslider_woocommerce_support');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function meet_metaslider_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'meet-metaslider'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'meet-metaslider'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="sidebar-headline-wrapper"><div class="sidebarlines-wrapper"><div class="widget-title-lines"></div></div><h4 class="widget-title">',
        'after_title'   => '</h4></div>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('WooCommerce Sidebar', 'meet-metaslider'),
        'id'            => 'sidebar-wc',
        'description'   => esc_html__('Add widgets here.', 'meet-metaslider'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="sidebar-headline-wrapper"><div class="sidebarlines-wrapper"><div class="widget-title-lines"></div></div><h4 class="widget-title">',
        'after_title'   => '</h4></div>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget (1)', 'meet-metaslider'),
        'id'            => 'footerwidget-1',
        'description'   => esc_html__('Add widgets here.', 'meet-metaslider'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="swidget"><h3 class="widget-title">',
        'after_title'   => '</h3></div>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget (2)', 'meet-metaslider'),
        'id'            => 'footerwidget-2',
        'description'   => esc_html__('Add widgets here.', 'meet-metaslider'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="swidget"><h3 class="widget-title">',
        'after_title'   => '</h3></div>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget (3)', 'meet-metaslider'),
        'id'            => 'footerwidget-3',
        'description'   => esc_html__('Add widgets here.', 'meet-metaslider'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="swidget"><h3 class="widget-title">',
        'after_title'   => '</h3></div>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Header Widget (1)', 'meet-metaslider'),
        'id'            => 'headerwidget-1',
        'description'   => esc_html__('Add widgets here.', 'meet-metaslider'),
        'before_widget' => '<section id="%1$s" class="header-widget widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="swidget"><div class="sidebar-title-border"><h3 class="widget-title">',
        'after_title'   => '</h3></div></div>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Header Widget (2)', 'meet-metaslider'),
        'id'            => 'headerwidget-2',
        'description'   => esc_html__('Add widgets here.', 'meet-metaslider'),
        'before_widget' => '<section id="%1$s" class="header-widget widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="swidget"><div class="sidebar-title-border"><h3 class="widget-title">',
        'after_title'   => '</h3></div></div>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Header Widget (3)', 'meet-metaslider'),
        'id'            => 'headerwidget-3',
        'description'   => esc_html__('Add widgets here.', 'meet-metaslider'),
        'before_widget' => '<section id="%1$s" class="header-widget widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="swidget"><div class="sidebar-title-border"><h3 class="widget-title">',
        'after_title'   => '</h3></div></div>',
    ));
}




add_action('widgets_init', 'meet_metaslider_widgets_init');


/**
 * Enqueue scripts and styles.
 */
function meet_metaslider_scripts()
{
    wp_enqueue_style('meet-metaslider-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('meet-metaslider-style', get_stylesheet_uri());
    wp_enqueue_script('meet-metaslider-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20170823', true);
    wp_enqueue_script('meet-metaslider-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20170823', true);
    wp_enqueue_script('meet-metaslider-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '20160720', true);
    wp_enqueue_script('meet-metaslider-accessibility', get_template_directory_uri() . '/js/accessibility.js', array('jquery'), '20160720', true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'meet_metaslider_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
new CustomizerController();


/**
 * Google fonts
 */

function meet_metaslider_google_fonts()
{
    wp_enqueue_style('meet-metaslider-google-fonts', '//fonts.googleapis.com/css?family=Poppins:400,500,600, 400i, 5009, 600i', false);
}

add_action('wp_enqueue_scripts', 'meet_metaslider_google_fonts');


/**
 * Dots after excerpt
 */

function meet_metaslider_new_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'meet_metaslider_new_excerpt_more');



/**
 * Blog Pagination
 */
if (!function_exists('meet_metaslider_numeric_posts_nav')) {
    function meet_metaslider_numeric_posts_nav()
    {
        $prev_arrow = is_rtl() ? 'Previous' : 'Next';
        $next_arrow = is_rtl() ? 'Next' : 'Previous';
        
        global $wp_query;
        $total = $wp_query->max_num_pages;
        $big = 999999999; // need an unlikely integer
        if ($total > 1) {
            if (!$current_page = get_query_var('paged')) {
                $current_page = 1;
            }
            if (get_option('permalink_structure')) {
                $format = 'page/%#%/';
            } else {
                $format = '&paged=%#%';
            }
            echo wp_kses_post(paginate_links(array(
                'base'			=> str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format'		=> $format,
                'current'		=> max(1, get_query_var('paged')),
                'total' 		=> $total,
                'mid_size'		=> 3,
                'type' 			=> 'list',
                'prev_text'		=> 'Previous',
                'next_text'		=> 'Next',
            )));
        }
    }
}


/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function meet_metaslider_skip_link_focus_fix()
{
    // The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
    ?>
    <script>
      /(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
  </script>
  <?php
}
add_action('wp_print_footer_scripts', 'meet_metaslider_skip_link_focus_fix');



require_once get_template_directory() . '/lib/class-tgm-plugin-activation.php';

/**
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Free Seo Optimized Responsive Theme for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/lib/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'meet_metaslider_register_required_plugins');

function meet_metaslider_register_required_plugins()
{
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        array(
            'name'      => 'MetaSlider',
            'slug'      => 'ml-slider',
            'required'           => false,
        ),
        array(
            'name'      => 'Superb Helper',
            'slug'      => 'superb-helper',
            'required'           => false,
        ),
        array(
            'name'      => 'Elementor',
            'slug'      => 'elementor',
            'required'           => false,
        ),
    );

    $config = array(
        'id'           => 'meet-metaslider',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
    );


    tgmpa($plugins, $config);
}

/**
 * Checkbox sanitization callback example.
 *
 * Sanitization callback for 'checkbox' type controls. This callback sanitizes `$checked`
 * as a boolean value, either TRUE or FALSE.
 *
 * @param bool $checked Whether the checkbox is checked.
 * @return bool Whether the checkbox is checked.
 */
function meet_metaslider_sanitize_checkbox($checked)
{
    // Boolean check.
    return ((isset($checked) && true == $checked) ? true : false);
}







/**
 * Deactivate Elementor Wizard
 */
function meet_metaslider_remove_elementor_onboarding() {
    update_option( 'elementor_onboarded', true );
}
add_action( 'after_switch_theme', 'meet_metaslider_remove_elementor_onboarding' );



require_once(trailingslashit(get_template_directory()) . 'inc/info_content/loader.php');



add_action('admin_init', 'meet_metaslider_spbThemesNotification', 8);

function meet_metaslider_spbThemesNotification(){
  $notifications = include('inc/admin_notification/Autoload.php');
  $notifications->Add("meet_metaslider_notification", "Unlock All Features with Meet MetaSlider Premium – Limited Time Offer", "

    Take advantage of the up to <span style='font-weight:bold;'>40% discount</span> and unlock all features with Meet MetaSlider Premium. 
    The discount is only available for a limited time.

    <div>
    <a style='margin-bottom:15px;' class='button button-large button-secondary' target='_blank' href='https://superbthemes.com/meet-metaslider/'>Read More</a> <a style='margin-bottom:15px;' class='button button-large button-primary' target='_blank' href='https://superbthemes.com/meet-metaslider/'>Upgrade Now</a>
    </div>

    ", "info");



  $options_notification_start = array("delay"=> "-1 seconds", "wpautop" => false);
  $notifications->Add("meet_metaslider_notification_start", "Let's get you started with Meet MetaSlider!", '
    <span class="st-notification-wrapper">
    <span class="st-notification-column-wrapper">
    <span class="st-notification-column">
    <img src="'. esc_url( get_template_directory_uri() . '/inc/admin_notification/src/preview.png' ).'" width="150" height="177" />
    </span>

    <span class="st-notification-column">
    <h2>Why Meet MetaSlider</h2>
    <ul class="st-notification-column-list">
    <li>Easy to Use & Customize</li>
    <li>Search Engine Optimized</li>
    <li>Lightweight and Fast</li>
    <li>Top-notch Customer Support</li>
    </ul>
    <a href="https://superbthemes.com/demo/meet-metaslider/" target="_blank" class="button">View Meet MetaSlider Demo <span aria-hidden="true" class="dashicons dashicons-external"></span></a> 

    </span>
    <span class="st-notification-column">
    <h2>Customize Meet MetaSlider</h2>
    <ul>
    <li><a href="'. esc_url( admin_url( 'customize.php' ) ) .'" class="button button-primary">Customize The Design</a></li>
    <li><a href="'. esc_url( admin_url( 'widgets.php' ) ) .'" class="button button-primary">Add/Edit Widgets</a></li>
    <li><a href="https://superbthemes.com/customer-support/" target="_blank" class="button">Contact Support <span aria-hidden="true" class="dashicons dashicons-external"></span></a> </li>
    </ul>
    </span>
    </span>
    <span class="st-notification-footer">
    Meet MetaSlider is created by SuperbThemes. We have 100.000+ users and are rated <strong>Excellent</strong> on Trustpilot <img src="'. esc_url( get_template_directory_uri() . '/inc/admin_notification/src/stars.svg' ).'" width="87" height="16" />
    </span>
    </span>

    <style>.st-notification-column-wrapper{width:100%;display:-webkit-box;display:-ms-flexbox;display:flex;border-top:1px solid #eee;padding-top:20px;margin-top:3px}.st-notification-column-wrapper h2{margin:0}.st-notification-footer img{margin-bottom:-3px;margin-left:10px}.st-notification-column-wrapper .button{min-width:180px;text-align:center;margin-top:10px}.st-notification-column{margin-right:10px;padding:0 10px;max-width:250px;width:100%}.st-notification-column img{border:1px solid #eee}.st-notification-footer{display:inline-block;width:100%;padding:15px 0;border-top:1px solid #eee;margin-top:10px}.st-notification-column:first-of-type{padding-left:0;max-width:160px}.st-notification-column-list li{list-style-type:circle;margin-left:15px;font-size:14px}@media only screen and (max-width:1000px){.st-notification-column{max-width:33%}}@media only screen and (max-width:800px){.st-notification-column{max-width:50%}.st-notification-column:first-of-type{display:none}}@media only screen and (max-width:600px){.st-notification-column-wrapper{display:block}.st-notification-column{width:100%;max-width:100%;display:inline-block;padding:0;margin:0}span.st-notification-column:last-of-type{margin-top:30px}}</style>

    ', "info", $options_notification_start);
  $notifications->Boot();
}