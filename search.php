<?php

get_header();

?>

<?php

?><div class="all-posts">
	<?php if (have_posts()) :?>
	
		<h2>Search results for: "<?php the_search_query()?>"</h2>
	
		<?php
		while(have_posts()) : the_post(); ?>

			<?php get_template_part('content') ?>
			
			
		<?php endwhile;

		else :
			echo '<p>No content found</p>';

		endif;

?></div><?php
	

get_footer();

?>