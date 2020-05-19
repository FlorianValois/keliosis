<?php
if (!defined('ABSPATH')) {
	exit;
}
?>

<footer role="contentinfo">
  
  <?php dynamic_sidebar( 'keliosis-widget-footer-col-1' ); ?>
  <?php dynamic_sidebar( 'keliosis-widget-footer-col-2' ); ?>
  <?php dynamic_sidebar( 'keliosis-widget-footer-col-3' ); ?>
  <?php dynamic_sidebar( 'keliosis-widget-footer-col-4' ); ?>

  <nav role="navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'footer_nav_menu', 'container' => false ) ); ?>
  </nav>

</footer>

<?php wp_footer(); ?>

</body>
</html>