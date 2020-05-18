<?php
if (!defined('ABSPATH')) {
	exit;
}
?>

<!-- Content here -->

<?php dynamic_sidebar( 'keliosis-widget-footer-col-1' ); ?>
<?php dynamic_sidebar( 'keliosis-widget-footer-col-2' ); ?>
<?php dynamic_sidebar( 'keliosis-widget-footer-col-3' ); ?>
<?php dynamic_sidebar( 'keliosis-widget-footer-col-4' ); ?>

<?php wp_nav_menu( array( 'theme_location' => 'footer_nav_menu', 'container' => 'nav' ) ); ?>

<?php wp_footer(); ?>

</body>
</html>