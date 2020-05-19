<?php
if (!defined('ABSPATH')) {
	exit;
}

// GOOGLE

//$google_UA = ''; (Ex: UA-XXXXXXXX-X)
//$google_verif = '';

// THEME

//$theme_color = ''; (Ex: #000000)
//$favicon = true; (false if no favicon)

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php
    if( isset( $google_UA ) ){
  ?>    
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $google_UA; ?>"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', '<?php echo $google_UA; ?>');
	</script>
  <?php
    }
    if( isset( $google_verif ) ){
  ?>
    <!--  Google verification -->
	<meta name="google-site-verification" content="<?php echo $google_verif; ?>" />
  <?php
    }
    if( isset( $theme_color ) ){
  ?> 	
	<!-- Color bar -->
	<!-- Chrome, Firefox OS et Opera -->
	<meta name="theme-color" content="<?php echo $theme_color; ?>">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="<?php echo $theme_color; ?>">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $theme_color; ?>">
  <?php
    }
    if( isset( $theme_color ) && $favicon === true){
  ?> 	
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/safari-pinned-tab.svg" color="<?php echo $theme_color; ?>">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="<?php echo $theme_color; ?>">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/mstile-144x144.png">
	<meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/browserconfig.xml">
  <?php
    }
  ?> 

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo wp_title('', false); ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header role="banner">
  
  <nav role=navigation>
    <?php wp_nav_menu( array( 'theme_location' => 'header_nav_menu', 'container' => false ) ); ?>
  </nav>
  
</header>