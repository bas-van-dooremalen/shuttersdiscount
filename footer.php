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
		<div class="primary">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-3">
						<div class="footer-intro">
							<a href="<?php echo get_site_url(); ?>" title="<?php echo $blog_title= get_bloginfo( 'name' ); ?>, <?php echo $blog_title= get_bloginfo( 'description' ); ?>" class="site-logo">
								<img src="<?php echo bloginfo('template_url'); ?>/assets/dist/img/logo-shuttersdiscount.png" alt="<?php echo $blog_title= get_bloginfo( 'name' ); ?>" width="200" height="116" />
							</a>
							
							<?php get_template_part('partials/shutters','socials'); ?>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-9">
						<div class="row">
							<div class="col-sm-12 col-md-3">
								<span class="title">Navigatie</span>
								<?php wp_nav_menu( array( 'theme_location' => 'menu-main', 'menu_id' => 'menu-main' ) ); ?>
							</div>
							<div class="col-sm-12 col-md-4">
								<span class="title">Hulpmiddelen</span>
								<ul>
									<li class="item"><a href="<?php echo get_site_url();?>/shutters-prijzencalculator">Eigen shutter prijs berekenen</a></li>
									<li class="item"><a href="<?php echo get_site_url();?>/shutters-levertijden">Wat zijn de levertijden</a></li>
									<li class="item"><a href="<?php echo get_site_url();?>/shutters-garantie">Waaruit bestaat de garantie</a></li>
									<li class="item"><a href="https://api.whatsapp.com/send?phone=31636306455&amp;text=Hallo,%20ik%20heb%20een%20vraag:%20">Een vraag stellen</a></li>
								</ul>
							</div>
							<div class="col-sm-12 col-md-5">
								<span class="title">Openingstijden</span>
								<ul class="company-hours">
									<li class="item"><span>Maandag</span> <span>12:00 - 18:00</span></li>
									<li class="item"><span>Dinsdag</span> <span>09:30 - 18:00</span></li>
									<li class="item"><span>Woensdag</span> <span>09:30 - 18:00</span></li>
									<li class="item"><span>Donderdag</span> <span>09:30 - 18:00</span></li>
									<li class="item"><span>Vrijdag</span> <span>09:30 - 18:00</span></li>
									<li class="item"><span>Zaterdag</span> <span>Gesloten</span></li>
									<li class="item"><span>Zondag</span> <span>Gesloten</span></li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="secondary">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="avg">
							© <?php echo date(' Y '); ?><?php bloginfo('name'); ?>,</strong> <span><?php bloginfo('description'); ?></span>

							<ul>
								<li><a href="<?php echo get_site_url()?>/producten">Producten</a></li>
								<li><a href="<?php echo get_site_url()?>/voorwaarden">Voorwaarden</a></li>
								<li><a href="<?php echo get_site_url()?>/disclaimer">Disclaimer</a></li>
								<li><a href="<?php echo get_site_url()?>/cookiebeleid">Cookiebeleid</a></li>
								<li><a href="<?php echo get_site_url()?>/sitemap">Sitemap</a></li>
								<li>
									<a class="button button-primary" href="<?php echo get_site_url()?>/shutters-inmeet-afspraak">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
											<path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
											<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
										</svg>
										Inmeet afspraak inplannen 
									</a>
								</li>
							</ul>

						</div>
					</div>
				</div>
			</div>
			
		</div>
	</footer>

	<div class="whatsapp">
		<a href="https://api.whatsapp.com/send?phone=31636306455&amp;text=Hallo,%20ik%20heb%20een%20vraag:%20">
			<img src="<?php echo bloginfo('template_url'); ?>/assets/dist/img/whatsapp.png" alt="<?php echo $blog_title= get_bloginfo( 'name' ); ?>" class="img-fluid"/>											
		</a>
	</div>
	
</div>
<?php wp_footer(); ?>

</body>
</html>
