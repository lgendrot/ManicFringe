<?php

get_header();

?>

	<div class="main-column">
		<?php if (have_posts()) :
			while(have_posts()) : the_post(); 

				get_template_part('content');
				
			endwhile;

			else :
				echo '<p>No content found</p>';

			endif;

		?>
	</div>

<!-- 	<div class="secondary-column">
			<?php dynamic_sidebar('sidebar1'); ?>
			<?php dynamic_sidebar('sidebar2'); ?>
	</div>
 -->


		


<?php get_footer();

?>
