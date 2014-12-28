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
		
		<!-- site-header -->
		<div class="topbar">
			<header class="site-header">
				<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></h1></a>
			</header>

			<nav class="site-nav" id="heading-nav">
					<?php 
						$args = array(
							'theme_location' => 'primary'
						);
					?>
					<?php wp_nav_menu( $args ); ?>
			</nav>
		</div>
		
	

		
		<!-- /site-header -->
