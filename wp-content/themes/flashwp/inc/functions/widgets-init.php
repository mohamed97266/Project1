<?php
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function flashwp_widgets_init() {

register_sidebar(array(
    'id' => 'flashwp-header-banner',
    'name' => esc_html__( 'Header Banner', 'flashwp' ),
    'description' => esc_html__( 'This sidebar is located on the header of the web page.', 'flashwp' ),
    'before_widget' => '<div id="%1$s" class="flashwp-header-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="flashwp-widget-title">',
    'after_title' => '</h2>'));

register_sidebar(array(
    'id' => 'flashwp-sidebar-one',
    'name' => esc_html__( 'Sidebar 1', 'flashwp' ),
    'description' => esc_html__( 'This sidebar is normally located on the left-hand side of web page.', 'flashwp' ),
    'before_widget' => '<div id="%1$s" class="flashwp-side-widget widget flashwp-box %2$s"><div class="flashwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="flashwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'flashwp-front-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Front Page Only)', 'flashwp' ),
    'description' => esc_html__( 'This full-width widget area is located at the top of homepage.', 'flashwp' ),
    'before_widget' => '<div id="%1$s" class="flashwp-main-widget widget flashwp-box %2$s"><div class="flashwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="flashwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'flashwp-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Every Page)', 'flashwp' ),
    'description' => esc_html__( 'This full-width widget area is located at the top of every page.', 'flashwp' ),
    'before_widget' => '<div id="%1$s" class="flashwp-main-widget widget flashwp-box %2$s"><div class="flashwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="flashwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'flashwp-front-top-widgets',
    'name' => esc_html__( 'Top Widgets (Front Page Only)', 'flashwp' ),
    'description' => esc_html__( 'This widget area is located at the top of homepage.', 'flashwp' ),
    'before_widget' => '<div id="%1$s" class="flashwp-main-widget widget flashwp-box %2$s"><div class="flashwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="flashwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'flashwp-top-widgets',
    'name' => esc_html__( 'Top Widgets (Every Page)', 'flashwp' ),
    'description' => esc_html__( 'This widget area is located at the top of every page.', 'flashwp' ),
    'before_widget' => '<div id="%1$s" class="flashwp-main-widget widget flashwp-box %2$s"><div class="flashwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="flashwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'flashwp-front-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Front Page Only)', 'flashwp' ),
    'description' => esc_html__( 'This widget area is located at the bottom of homepage.', 'flashwp' ),
    'before_widget' => '<div id="%1$s" class="flashwp-main-widget widget flashwp-box %2$s"><div class="flashwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="flashwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'flashwp-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Every Page)', 'flashwp' ),
    'description' => esc_html__( 'This widget area is located at the bottom of every page.', 'flashwp' ),
    'before_widget' => '<div id="%1$s" class="flashwp-main-widget widget flashwp-box %2$s"><div class="flashwp-box-inside">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="flashwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'flashwp-top-footer',
    'name' => esc_html__( 'Footer Top', 'flashwp' ),
    'description' => esc_html__( 'This sidebar is located on the top of the footer.', 'flashwp' ),
    'before_widget' => '<div id="%1$s" class="flashwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="flashwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'flashwp-footer-1',
    'name' => esc_html__( 'Footer 1', 'flashwp' ),
    'description' => esc_html__( 'This sidebar is located on the left bottom of web page.', 'flashwp' ),
    'before_widget' => '<div id="%1$s" class="flashwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="flashwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'flashwp-footer-2',
    'name' => esc_html__( 'Footer 2', 'flashwp' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'flashwp' ),
    'before_widget' => '<div id="%1$s" class="flashwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="flashwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'flashwp-footer-3',
    'name' => esc_html__( 'Footer 3', 'flashwp' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'flashwp' ),
    'before_widget' => '<div id="%1$s" class="flashwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="flashwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'flashwp-footer-4',
    'name' => esc_html__( 'Footer 4', 'flashwp' ),
    'description' => esc_html__( 'This sidebar is located on the right bottom of web page.', 'flashwp' ),
    'before_widget' => '<div id="%1$s" class="flashwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="flashwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'flashwp-bottom-footer',
    'name' => esc_html__( 'Footer Bottom', 'flashwp' ),
    'description' => esc_html__( 'This sidebar is located on the bottom of the footer.', 'flashwp' ),
    'before_widget' => '<div id="%1$s" class="flashwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="flashwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

}
add_action( 'widgets_init', 'flashwp_widgets_init' );


function flashwp_top_wide_widgets() { ?>

<?php if ( is_active_sidebar( 'flashwp-front-fullwidth-widgets' ) || is_active_sidebar( 'flashwp-fullwidth-widgets' ) ) : ?>
<div class="flashwp-top-wrapper-outer clearfix">
<div class="flashwp-featured-posts-area flashwp-top-wrapper clearfix">
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'flashwp-front-fullwidth-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'flashwp-fullwidth-widgets' ); ?>
</div>
</div>
<?php endif; ?>

<?php }


function flashwp_top_widgets() { ?>

<?php if ( is_active_sidebar( 'flashwp-front-top-widgets' ) || is_active_sidebar( 'flashwp-top-widgets' ) ) : ?>
<div class="flashwp-featured-posts-area flashwp-featured-posts-area-top clearfix">
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'flashwp-front-top-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'flashwp-top-widgets' ); ?>
</div>
<?php endif; ?>

<?php }


function flashwp_bottom_widgets() { ?>

<?php if ( is_active_sidebar( 'flashwp-front-bottom-widgets' ) || is_active_sidebar( 'flashwp-bottom-widgets' ) ) : ?>
<div class='flashwp-featured-posts-area flashwp-featured-posts-area-bottom clearfix'>
<?php if ( is_front_page() && is_home() && !is_paged() ) { ?>
<?php dynamic_sidebar( 'flashwp-front-bottom-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'flashwp-bottom-widgets' ); ?>
</div>
<?php endif; ?>

<?php }