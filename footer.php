	<footer class="site-footer">
		<div class="container">
			<div class="row">
				
					<div class="column">
						<a href="<?php echo get_site_url(); ?>" title="<?php echo $blog_title= get_bloginfo( 'name' ); ?>, <?php echo $blog_title= get_bloginfo( 'description' ); ?>" class="site-logo">
							<img src="<?php echo bloginfo('template_url'); ?>/assets/dist/img/logo-footer.png" alt="<?php echo $blog_title= get_bloginfo( 'name' ); ?>" width="200" height="116" class="img-fluid" />
						</a>					
					</div>
					<div class="nav">
						<span class="h1 title">Navigatie</span>									
						<nav class="site-navigation" id="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'menu-main', 'menu_id' => 'menu-main' ) ); ?>
						</nav>
					</div>
				
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
