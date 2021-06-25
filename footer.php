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
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-lg-6">
						<div class="branding">
							<a href="<?php echo get_site_url(); ?>" title="<?php echo $blog_title= get_bloginfo( 'name' ); ?>, <?php echo $blog_title= get_bloginfo( 'description' ); ?>" class="site-logo">
								<img src="<?php echo bloginfo('template_url'); ?>/assets/dist/img/logo-branding.png" alt="<?php echo $blog_title= get_bloginfo( 'name' ); ?>" class="img-fluid"/>
							</a>
							<p>
								<?php echo $blog_title= get_bloginfo( 'name' ); ?> 
								bestaat al meer dan 15 jaar, onze shutters hangen door heel het land. Met onze 100% pasgarantie maken wij jouw smaak. Altijd de beste All-Inclusive-Deals. 
								Kwaliteit gegarandeerd, onze shutters zijn gebruiksvriendelijk, onderhoud is gemakkelijk.
							</p>
							<ul class="social-media">
								<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube-square"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
							</ul>
						</div>

					</div>
					<div class="col-sm-12 col-lg-6">
						<div class="row">
							<div class="container">
								<div class="shortcut-items">
									<ul class="shortcuts">
										<li>Voor meer informatie ga naar</li>
										<li><a href="<?php echo get_site_url();?>/over-ons">Lees onze missie</a></li>
										<li><a href="<?php echo get_site_url();?>">Wat zijn onze levertijden</a></li>
										<li><a href="<?php echo get_site_url();?>">Shutters advies op afspraak</a></li>
										<li><a href="<?php echo get_site_url();?>">Eigen shutters prijs berekenen</a></li>
									</ul>								
									<ul class="shortcuts">
										<li>of navigeer door onze site</li>
										<li><a href="<?php echo get_site_url();?>">Shuttersdiscount.nl</a></li>
										<li><a href="<?php echo get_site_url();?>/shutters-prijzen">Shutters prijzen</a></li>
										<li><a href="<?php echo get_site_url();?>/shutters-offerte">Shutters offerte</a></li>
										<li><a href="<?php echo get_site_url();?>/shutters-inspiratie">Shutters inspiratie</a></li>
									</ul>
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="container no-gutters">
								<div class="col-sm-12">
									<div class="impression">
										photo gallery
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
		<div class="copy">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<ul>
							<li>&copy; <?php echo date(' Y '); ?><?php bloginfo('name'); ?></li>
							<li><a href="<?php echo get_site_url();?>/voorwaarden">Voorwaarden</a></li>
							<li><a href="<?php echo get_site_url();?>/disclaimer">Disclaimer</a></li>
							<li><a href="<?php echo get_site_url();?>/cookiebeleid">Cookiebeleid</a></li>
							<li><a href="<?php echo get_site_url();?>/sitemap">Sitemap</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="whatsapp">
		<a href="https://api.whatsapp.com/send?phone=31636306455&amp;text=Hallo,%20ik%20heb%20een%20vraag:%20">
			<img src="<?php echo bloginfo('template_url'); ?>/assets/dist/img/Whatsapp_Logo.png" alt="<?php echo $blog_title= get_bloginfo( 'name' ); ?>" class="img-fluid"/>											
		</a>
	</div>
	
</div>
<?php wp_footer(); ?>

</body>
</html>
