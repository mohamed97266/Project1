<?php
/**
* The template for displaying the footer
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

</div>

</div><!--/#flashwp-content-wrapper -->
</div><!--/#flashwp-wrapper -->


<?php if ( !(flashwp_get_option('hide_footer_widgets')) ) { ?>
<?php if ( is_active_sidebar( 'flashwp-footer-1' ) || is_active_sidebar( 'flashwp-footer-2' ) || is_active_sidebar( 'flashwp-footer-3' ) || is_active_sidebar( 'flashwp-footer-4' ) || is_active_sidebar( 'flashwp-top-footer' ) || is_active_sidebar( 'flashwp-bottom-footer' ) ) : ?>
<div class='clearfix' id='flashwp-footer-blocks' itemscope='itemscope' itemtype='http://schema.org/WPFooter' role='contentinfo'>
<div class='flashwp-container clearfix'>
<div class="flashwp-outer-wrapper">

<?php if ( is_active_sidebar( 'flashwp-top-footer' ) ) : ?>
<div class='clearfix'>
<div class='flashwp-top-footer-block'>
<?php dynamic_sidebar( 'flashwp-top-footer' ); ?>
</div>
</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'flashwp-footer-1' ) || is_active_sidebar( 'flashwp-footer-2' ) || is_active_sidebar( 'flashwp-footer-3' ) || is_active_sidebar( 'flashwp-footer-4' ) ) : ?>
<div class='flashwp-footer-block-cols clearfix'>

<div class="flashwp-footer-block-col <?php echo esc_attr( flashwp_footer_grid_cols() ); ?>" id="flashwp-footer-block-1">
<?php dynamic_sidebar( 'flashwp-footer-1' ); ?>
</div>

<div class="flashwp-footer-block-col <?php echo esc_attr( flashwp_footer_grid_cols() ); ?>" id="flashwp-footer-block-2">
<?php dynamic_sidebar( 'flashwp-footer-2' ); ?>
</div>

<div class="flashwp-footer-block-col <?php echo esc_attr( flashwp_footer_grid_cols() ); ?>" id="flashwp-footer-block-3">
<?php dynamic_sidebar( 'flashwp-footer-3' ); ?>
</div>

<div class="flashwp-footer-block-col <?php echo esc_attr( flashwp_footer_grid_cols() ); ?>" id="flashwp-footer-block-4">
<?php dynamic_sidebar( 'flashwp-footer-4' ); ?>
</div>

</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'flashwp-bottom-footer' ) ) : ?>
<div class='clearfix'>
<div class='flashwp-bottom-footer-block'>
<?php dynamic_sidebar( 'flashwp-bottom-footer' ); ?>
</div>
</div>
<?php endif; ?>

</div>
</div>
</div><!--/#flashwp-footer-blocks-->
<?php endif; ?>
<?php } ?>


<div class='clearfix' id='flashwp-footer'>
<div class='flashwp-foot-wrap flashwp-container'>
<div class="flashwp-outer-wrapper">

<?php if ( flashwp_get_option('footer_text') ) : ?>
  <p class='flashwp-copyright'><?php echo esc_html(flashwp_get_option('footer_text')); ?></p>
<?php else : ?>
  <p class='flashwp-copyright'><?php /* translators: %s: Year and site name. */ printf( esc_html__( 'Copyright &copy; %s', 'flashwp' ), esc_html(date_i18n(__('Y','flashwp'))) . ' ' . esc_html(get_bloginfo( 'name' ))  ); ?></p>
<?php endif; ?>
<p class='flashwp-credit'><a href="<?php echo esc_url( 'https://themesdna.com/' ); ?>"><?php /* translators: %s: Theme author. */ printf( esc_html__( 'Design by %s', 'flashwp' ), 'ThemesDNA.com' ); ?></a></p>

</div>
</div>
</div><!--/#flashwp-footer -->

<?php wp_footer(); ?>
</body>
</html>