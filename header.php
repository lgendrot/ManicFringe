<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		
		<meta name="viewport" content="width=device-width">
		
		<title>
			<?php 
				wp_title('|', true, 'right');
				bloginfo('name'); 
			?>
		</title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css"/>
		<?php wp_head(); ?>

	</head>
	


<body <?php body_class(); ?>>

	<div class="container">
	
		<div class="head-search">

		<?php get_search_form()?>

		</div>

		
		<!-- site-header -->
		<header class="site-header">
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></h1></a>
			<br><h5><?php bloginfo('description'); ?></h5>
			
		</header>
		


		
		
		<nav class="site-nav" id="heading-nav">
			
			<?php 
				$args = array(
					'theme_location' => 'primary'
				);
			?>
			
			<?php wp_nav_menu( $args ); ?>

		</nav>
		
		<!-- /site-header -->
