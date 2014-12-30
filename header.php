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
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>

	</head>
	


<body <?php body_class(); ?>>

	<div class="container">

<div id="header-container">
	<header class="site-header">
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		<h2> <?php bloginfo('description') ?></h2>
	</header>

			<!-- site-header -->
	<div class="topbar">
		<nav class="site-nav" id="heading-nav">
				<?php 
					$args = array(
						'theme_location' => 'primary',
					);
				?>
				<?php wp_nav_menu( $args ); ?>
		</nav>
	</div>
</div>
		
		
		<!-- /site-header -->
