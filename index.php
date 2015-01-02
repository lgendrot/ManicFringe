<?php

get_header();

?>

<div class="mid-bar">
	<h2>Recent Posts</h2>
</div>

	<div class="site-content">
		<div class="secondary-column">
			<?php dynamic_sidebar('sidebar1'); ?>
		</div>
		
		<div class="main-column">
				<?php if (have_posts()) :
					while(have_posts()) : the_post(); 
						$post_class = ('odd' == $post_class) ? 'even' : 'odd';
						?> <div class= "<?php echo $post_class ?>">
							<?php get_template_part('content'); ?>
						</div><?php
					endwhile;

					else :
						echo '<p>No content found</p>';

					endif;

				?>
			</div>
	</div>


		


<?php get_footer();

?>
