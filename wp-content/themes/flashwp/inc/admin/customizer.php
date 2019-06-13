<?php
/**
* FlashWP Theme Customizer.
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! class_exists( 'WP_Customize_Control' ) ) {return NULL;}

require_once( trailingslashit( get_template_directory() ) . 'inc/admin/classes/class-customize-static-text-control.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/classes/class-customize-button-control.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/classes/class-customize-category-control.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/classes/class-customize-recommended-plugins.php' );

require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/getting-started.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/header-options.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/slider.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/post-options.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/social-profiles.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/footer-options.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/other-options.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/recommended-plugins.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/upgrade-to-pro.php' );
require_once( trailingslashit( get_template_directory() ) . 'inc/admin/options/sanitize-callbacks.php' );

function flashwp_register_theme_customizer( $wp_customize ) {

    if(method_exists('WP_Customize_Manager', 'add_panel')):
    $wp_customize->add_panel('flashwp_main_options_panel', array( 'title' => esc_html__('Theme Options', 'flashwp'), 'priority' => 10, ));
    endif;
    
    $wp_customize->get_section( 'title_tagline' )->panel = 'flashwp_main_options_panel';
    $wp_customize->get_section( 'title_tagline' )->priority = 20;
    $wp_customize->get_section( 'colors' )->panel = 'flashwp_main_options_panel';
    $wp_customize->get_section( 'colors' )->priority = 40;
      
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

    flashwp_getting_started($wp_customize);
    flashwp_header_options($wp_customize);
    flashwp_slider_options($wp_customize);
    flashwp_post_options($wp_customize);
    flashwp_social_profiles($wp_customize);
    flashwp_footer_options($wp_customize);
    flashwp_other_options($wp_customize);
    flashwp_recomm_plugin_options($wp_customize);
    flashwp_upgrade_to_pro($wp_customize);

}

add_action( 'customize_register', 'flashwp_register_theme_customizer' );

function flashwp_customizer_js_scripts() {
    wp_enqueue_script('flashwp-theme-customizer-js', get_template_directory_uri() . '/inc/admin/js/customizer.js', array( 'jquery', 'customize-preview' ), NULL, true);
}
add_action( 'customize_preview_init', 'flashwp_customizer_js_scripts' );