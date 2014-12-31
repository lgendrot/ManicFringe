<?php

get_header();

?>

<div class="mid-bar">
	<h2>
		<a href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true">&larr; Back</a>
	</h2>
</div>


<div class="single-post-column">
	<?php
	if (have_posts()) :
		while(have_posts()) : the_post(); ?>
			<article class="post">
				<div class="banner-img">
					<?php the_post_thumbnail('banner-image');?>
				</div>
				<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
					<p class="post-info"> 
						
						<?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
						<?php echo get_the_author_meta('first_name'); ?></a> | Posted in 
					
						<?php
							$categories = get_the_category();
							$separator = ", ";
							$output = '';

							if ($categories) {
								foreach ($categories as $category) {
									$output .= '<a href="' . get_category_link($category -> term_id) . '">' . $category->cat_name . '</a>'. $separator;
								}
								echo trim($output, $separator);
							}
						?>

					</p> 
				

					<div class="single-post-content">
						<?php the_content(); ?>
					</div>
			</article>
			
		<?php endwhile;?>
		<div class="comment-separator mid-bar">Comments</div>
		<div class="single-post-comments">
				<?php comments_template(); ?>
		</div>

		
		<?php else :
			echo '<p>No content found</p>';

		endif;?>

	</div>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54a0f43a0b3ba61c" async="async"></script>

	
	

<?php get_footer();

?>

<!-- Go to www.addthis.com/dashboard to customize your tools -->

