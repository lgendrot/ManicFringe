

<div id="footer-container">
	<footer class="site-footer clearfix">
		<nav class="site-nav">

				<?php 
					$args = array(
						'theme_location' => 'footer'
					);
				?>

			<?php wp_nav_menu( $args ); ?>
		</nav>

		<footer class= "site-copyright">
			<p><?php bloginfo('name'); ?> -&copy; <?php echo date('Y');?></p>
		</footer>
	</footer>
</div>

</div><!--/container-->
<?php wp_footer(); ?>

</body>
</html>