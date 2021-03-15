<?php
	//ACF Values
	$facebook = get_field		('social_facebook', 'option');	
	$instagram = get_field		('social_instagram,', 'option');	
	$pinterest = get_field		('social_pinterest', 'option');	
?> 
	<footer class="site-footer">
		<div class="container">
			<div class="row">		
				<div class="column">
					<a href="<?php echo get_site_url(); ?>" title="<?php echo $blog_title= get_bloginfo( 'name' ); ?>, <?php echo $blog_title= get_bloginfo( 'description' ); ?>" class="site-logo">
						<img src="<?php echo bloginfo('template_url'); ?>/assets/dist/img/logo-footer.png" alt="<?php echo $blog_title= get_bloginfo( 'name' ); ?>" width="200" height="116" class="img-fluid" />
					</a>					
					<ul class="social-media">
						<li class="item"><a href="<?php echo $instagram; ?>"><i class="fab fa-instagram-square"></i></a></li>	
						<li class="item"><a href="<?php echo $facebook; ?>"><i class="fab fa-facebook-square"></i></a></li>							
						<li class="item"><a href="<?php echo $pinterest; ?>"><i class="fab fa-pinterest-square"></i></a></li>
					</ul>
				</div>
				<div class="nav">
					<span class="h1 title">Navigatie</span>									
					<nav class="site-navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'menu-main', 'menu_id' => 'menu-main' ) ); ?>
					</nav>
				</div>							
			</div>
			
		</div>
	</footer>
	<div class="site-secondary-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="site-copy">
						<div class="copy"> &copy; <?php echo date(' Y '); ?><?php bloginfo('name'); ?>, <span><?php bloginfo('description'); ?>.</div>						
					
						<nav class="site-footer-navigation" id="footer-navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'menu-footer', 'menu_id' => 'menu-footer' ) ); ?>
						</nav>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
