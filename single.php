<?php

if (!defined('ABSPATH')) {
	exit;
}

get_header();
?>

<!-- Begin content -->
<main role="main">
  
  <h1><?php echo  the_title(); ?></h1>

  <section>
    the_content();
  </section>

</main>
<!-- End content -->

<?php
get_footer();