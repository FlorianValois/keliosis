<?php

if (!defined('ABSPATH')) {
	exit;
}

get_header();
?>

<!-- Begin content -->
<main role="main">
  
  <article>
    
  <?php while ( have_posts() ) : the_post(); ?>

    <h1><?php echo the_title(); ?></h1>

    <section>
      <?php echo the_content(); ?>
    </section>

  <?php endwhile; // end of the loop. ?>
    
  </article>
  
  <?php get_sidebar(); ?>

</main>
<!-- End content -->

<?php
get_footer();