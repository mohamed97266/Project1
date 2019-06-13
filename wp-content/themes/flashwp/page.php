<?php
/**
* The template for displaying all pages.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-page
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class='flashwp-main-wrapper clearfix' id='flashwp-main-wrapper' itemscope='itemscope' itemtype='http://schema.org/Blog' role='main'>
<div class='theiaStickySidebar'>
<div class="flashwp-main-wrapper-inside clearfix">

<?php flashwp_before_main_content(); ?>

<?php flashwp_slider_area(); ?>

<?php flashwp_top_widgets(); ?>

<div class='flashwp-posts-wrapper' id='flashwp-posts-wrapper'>

<?php while (have_posts()) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php
    // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || get_comments_number() ) :
            comments_template();
    endif;
    ?>

<?php endwhile; ?>
<div class="clear"></div>

</div><!--/#flashwp-posts-wrapper -->

<?php flashwp_bottom_widgets(); ?>

<?php flashwp_after_main_content(); ?>

</div>
</div>
</div><!-- /#flashwp-main-wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>