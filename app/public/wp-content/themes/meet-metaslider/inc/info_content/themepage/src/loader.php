<?php
defined("ABSPATH") || exit();


add_action('admin_menu', 'meet_metaslider_themepage');
function meet_metaslider_themepage()
{
    add_menu_page(__('Theme Settings', 'meet-metaslider'), __('Theme Settings', 'meet-metaslider'), 'manage_options', 'meet_metaslider_themepage', 'meet_metaslider_themepage_content', get_template_directory_uri() . '/inc/info_content/themepage/src/wp-icon-superb.svg', 61);
}

function meet_metaslider_themepage_content()
{
    require_once(trailingslashit(get_template_directory()) . 'inc/info_content/themepage/src/themepage.php');
}

function meet_metaslider_comparepage_css($hook)
{
    if ('toplevel_page_meet_metaslider_themepage' != $hook) {
        return;
    }
    wp_enqueue_style('meet-metaslider-custom-style', get_template_directory_uri() . '/inc/info_content/themepage/src/compare.css');
}
add_action('admin_enqueue_scripts', 'meet_metaslider_comparepage_css');

// Theme page end
