<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coderjibon
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>> 
<head>
	<meta charset="<?php bloginfo('charset');  ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body class="the-heart-default-body the-heart-overly" <?php body_class(); ?>>
	<!-- The Heart Body Start -->
	<!-- Preloder -->
	<div id="prelaoder"></div>
	<!-- The Heart main Menu -->
	<header class="the-heart-menu-and-logo-section" id="the-heart-menu">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<div class="the-heart-logo">
						<a href="<?php echo home_url(); ?>">
							<?php $img = cs_get_option('logo');?>
						<?php if ($img): ?>
							<img src="<?php echo wp_get_attachment_image_url($img); ?>" alt="The Heart Logo">
						<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="The Heart Logo">
						<?php endif ?>
						
						</a>
					</div>
				</div>
				<div class="menu-toggle">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 col-sm-10 col-xs-12">
					<nav class="the-heart-main-meun">
						<?php if (is_front_page()): ?>
							<?php 
							wp_nav_menu([
								'theme_location'	=> 'main-menu',
								'container'			=> ' ',
								'container_class'	=> ' ',
								'container_id'		=> ' ',
								'depth'				=> 1,
								'fallback_cb'		=> 'menu_empty'

							]);
						?>
						<?php else: ?>
							<?php 
							wp_nav_menu([
								'theme_location'	=> 'blog-menu',
								'container'			=> ' ',
								'container_class'	=> ' ',
								'container_id'		=> ' ',
								'depth'				=> 1,
								'fallback_cb'		=> 'menu_empty'

							]);
						?>
						<?php endif ?>
					</nav> <!-- .the-heart-main-meun END -->
				</div>
			</div>
		</div>
	</header> <!-- .the-heart-menu-and-logo-section END -->


