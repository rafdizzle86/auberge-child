<?php
/**
 * Created by PhpStorm.
 * User: ryagudin
 * Date: 3/24/15
 * Time: 6:04 PM
 */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

/**
 * Appends
 * @param $nav_output
 * @return string
 */
function append_html_post_nav( $nav_output ){


    $html = '<div style="margin-left: 10px; float: left; font-size: 15px;">Recreational & Medicinal | 920 W 104th Ave, Northglenn CO | <a href="tel:303-379-9526">303.379.9526</a></div>';

    return $nav_output . $html;

}

add_filter('wmhook_wm_navigation_output', 'append_html_post_nav', 10, 1 );