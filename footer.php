<?php
	//ACF Values
	$facebook = get_field		('social_facebook', 'option');	
	$instagram = get_field		('social_instagram,', 'option');	
	$pinterest = get_field		('social_pinterest', 'option');	

	// Contact
	$email = get_field		('email', 'option');	
	$phone = get_field		('phone', 'option');	
?> 
	<footer class="site-footer">
		<div class="container">
			<div class="row">		
				<div class="site-footer-items">
					<div class="site-footer-brand">
						<a href="<?php echo get_site_url(); ?>" title="<?php echo $blog_title= get_bloginfo( 'name' ); ?>, <?php echo $blog_title= get_bloginfo( 'description' ); ?>" class="site-logo">
							<img src="<?php echo bloginfo('template_url'); ?>/assets/dist/img/logo-footer.png" alt="<?php echo $blog_title= get_bloginfo( 'name' ); ?>" width="200" height="116" class="img-fluid" />
						</a>					
						<ul class="social-media">
							<li class="item"><a href="<?php echo $instagram; ?>"><i class="fab fa-instagram-square"></i></a></li>	
							<li class="item"><a href="<?php echo $facebook; ?>"><i class="fab fa-facebook-square"></i></a></li>							
							<li class="item"><a href="<?php echo $pinterest; ?>"><i class="fab fa-pinterest-square"></i></a></li>
						</ul>
					</div>
					<div class="site-footer-shortcuts">
						<div class="shortcut">
							<span class="title">Shutters contact</span>
							<ul>
								<li><?php echo $phone; ?></li>
								<li><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
							</ul>
						</div>
						<div class="shortcut">
							<span class="title">Meer shutters</span>
							<ul>
								<li><a href="<?php echo get_site_url(); ?>/onze-shutters">Onze shutters</a></li>
								<li><a href="<?php echo get_site_url(); ?>/zwarte-shutters">Zwarte shutters</a></li>
							</ul>
						</div>
						<div class="shortcut">
							<span class="title">Shutters Support</span>
							<ul>
								<li><a href="<?php echo get_site_url(); ?>/shutters-prijzen-calculator">Eigen prijs berekeningen</a></li>
								<li><a href="<?php echo get_site_url(); ?>/zwarte-shutters">Stuur een WhatsApp</a></li>
							</ul>
						</div>
					</div>
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
