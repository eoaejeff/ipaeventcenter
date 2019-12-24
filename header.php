<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		
		<meta charset="utf-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<meta class="foundation-mq">
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Oswald:400,700&display=swap" rel="stylesheet">

		<?php wp_head(); ?>

	</head>
			
	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">
				
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>
				
				<header class="header" role="banner">			
					 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
					 
				</header> 
				
				<div class="site-main">