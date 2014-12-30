<?php

get_header();

?>

<div class="mid-bar">
	<h2>
		<?php  
			if (is_category()): {
				single_cat_title();
			}
			elseif ( is_author() ): {
				the_post();
				echo "By: " . get_the_author_meta('first_name');
				rewind_posts();
			}
			elseif (is_day()): {
				echo "Archive | " . get_the_date();
			}
			elseif (is_month()): {
				echo "Archive | " . get_the_date('F Y');
			}
			elseif (is_year()): {
				echo "Archive | " . get_the_date( 'Y');
			}
			endif
		?>
	</h2>
</div>

<div class="content-container">
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
</div>


		


<?php get_footer();

?>
