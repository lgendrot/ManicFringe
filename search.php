<?php

get_header();

?>
<div class="mid-bar">
	<h2>Results for: <?php the_search_query(); ?></h2>
</div>

<div class="site-content">
	<div class="secondary-column">
		<?php dynamic_sidebar('sidebar1'); ?>
	</div>

	<div class ="main-column">
		<div class="all-posts">
			<?php if (have_posts()) :?>
			
				<?php
				while(have_posts()) : the_post(); ?>

					<?php get_template_part('content') ?>
					
				<?php endwhile;
				else :
					echo '<p>No content found</p>';
				endif;
			?>

		</div>
	</div>
</div>







<?php

get_footer();

?>