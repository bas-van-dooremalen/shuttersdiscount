<?php
	get_header();
	//ACF Values theme options
	// Address
	$street = get_field		('address', 'option');	
	$zipcode = get_field	('zipcode', 'option');	
	$city = get_field		('city', 'option');	
	
	// Contact
	$email = get_field		('email', 'option');	
	$phone = get_field		('phone', 'option');	

	// Bank details
	$kvk = get_field		('kvk','option');
	$bic = get_field		('bic','option');
	$btw = get_field		('btw','option');
	$iban = get_field		('iban','option');	
?>

<main class="container">
	<div class="row">
		<div class="col-sm-12">
			
			<?php while(have_posts()) : the_post(); ?>
				<div class="site-intro">					
					<div class="content">						
						<?php the_title('<h1>', '</h1>'); ?>
						<?php the_content(); ?>		       
						
						<div class="buttons">
							<a href="<?php echo get_site_url(); ?>/shutters-prijzen" class="btn btn-primary">Shutter prijzen</a>
							<a href="<?php echo get_site_url(); ?>/shutters-offerte" class="btn btn-secondary">Offerte aanvragen</a>
						</div>
					</div>				

					<?php if ( has_post_thumbnail() ) { ?> 
						<div class="visual">							
							
							<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured_img' ); ?>
							
							<?php if ( ! empty( $large_image_url[0] ) ) { ?>
								<?php echo get_the_post_thumbnail( $post->ID, 'featured_img' ); ?>
							<?php } ?>

						</div>
					<?php } ?>
				</div>
			<?php endwhile; ?>	
		</div>
	</div>
</main>	

<div class="site-selling-points">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="wrapper">
					<ul>
						<li>
							<span class="icon"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></span>
							Shuttersdiscount.nl <span>Your Window To Design</span>
						</li>
						<li><span class="icon"><i class="bi bi-check2-circle"></i></span> 100%<br/> Pasgarantie gegarandeerd</li>						
						<li><span class="icon"><i class="bi bi-check2-circle"></i></span> Ruime keuze uit verschillende kleuren</li>
						<li><span class="icon"><i class="bi bi-check2-circle"></i></span> Hoge kwaliteit shutters op maat gemaakt</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<?php if( have_rows('content') ) : ?>
	<div class="site-deals highlighted">
		<div class="container">
			<div class="row">
				<?php while ( have_rows('content') ) : the_row(); ?>
					<?php if( get_row_layout() == 'extra_content' ): ?>
						
						<div class="col-sm-12 col-lg-8 mx-auto txt-center">
							<?php $text = get_sub_field('highlighted_content');?>
							<?php echo $text; ?>
						</div>

					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		</div>
				
		<?php $featured_posts = get_field('featured_shutters');
		if( $featured_posts ): ?>

				<div class="container">
					<div class="row">
						<?php foreach( $featured_posts as $post ): 
							$price = get_field('price');
														
							$image = get_field('featured_img');
							$url = $image['url'];
							$title = $image['title'];
							$alt = $image['alt'];
							$size = 'deals';
							$thumb = $image['sizes'][ $size ];
							$width = $image['sizes'][ $size . '-width' ];
							$height = $image['sizes'][ $size . '-height' ]; 

							setup_postdata($post); ?>
							
							<article class="col-sm-12 col-md-6 col-lg-4">
								<a href="<?php the_permalink(); ?>" class="deal">
									<div class="body">										
										<div class="item">
											<div class="wrap">
												<h3><?php the_title(); ?></h3>
												<span class="price">vanaf € <?php echo $price; ?>,- / m<sup>2</sup></span>
											</div>
											<span class="info"><i class="bi bi-info"></i></span>
										</div>
										<img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" class="img-fluid" width="640" height="480" />										
									</div>
								</a>
								
								<a href="#" class="btn btn-secondary mx-auto">Offerte aanvragen</a>																							

							</article>

						<?php endforeach; ?>
					</div>
				</div>
		
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>
<?php endif; ?>

<div class="site-customers">	
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-8 mx-auto txt-center">
				<h4>Onze klanten over Shutterdiscount.nl</h4>
				<p>Wij delen graag de ervaringen van onze huidige klanten</p>								
			</div>			
		</div>
		<div class="row">
			<div class="col-sm-12 col-lg-4">
				<div class="review">
					
					<div class="review-picture">
						<div class="review-user">							
							<span>Merel De Klerk</span>
							<span><i class="bi bi-star-fill"></i></span>
						</div>
						<img src="https://scontent-ams4-1.xx.fbcdn.net/v/t1.6435-0/s600x600/165508100_1152950275143654_2064542276708932024_n.jpg?_nc_cat=107&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=KiFSaKeeDLMAX_vcPIX&_nc_ht=scontent-ams4-1.xx&tp=7&oh=72144c4c9f343e5cef5d136ef582e1f1&oe=60DF98EA" alt="">
					</div>
					
					<div class="review-post">
						Toppers zijn het bij ShuttersDiscount!
						Super vriendelijke mensen. Doen wat zij beloven.
						Top kwaliteit voor een redelijke prijs. Perfecte levering en montage!
						Bedankt Roger, Wendy en Arno
					</div>
				</div>			
			</div>

			<div class="col-sm-12 col-lg-4">
				<div class="review">
					<div class="review-picture">
						<div class="review-user">
							<span>Hélène van der Zandt</span>
							<span><i class="bi bi-star-fill"></i></span>
						</div>
						<img src="https://scontent-amt2-1.xx.fbcdn.net/v/t1.6435-0/s600x600/123504756_3177318072378812_4406309716480626386_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=Bow4SDiapo0AX8k1iWU&_nc_ht=scontent-amt2-1.xx&tp=7&oh=d6c6e695690a48e42286d873bf25f8d2&oe=60DFFE16" alt="">
					</div>
					
					<div class="review-post">
						Top service, goed advies vooraf en goede kwaliteit en montage!
						Zeer blij met mijn shutters!
					</div>
				</div>
			</div>
			
			<div class="col-sm-12 col-lg-4">
				<div class="review">
					<div class="review-banner">
						Meer reviews en inspiratie <br/> vind je op onze <br/>Social media kanalen.
						<ul class="social"> 
							<li class="social-item">
								<a href="https://www.facebook.com/ShuttersDiscount/" class="social social-fb">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li class="social-item">										
								<a href="https://www.instagram.com/shuttersdiscount/" class="social social-insta">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
							<li class="social-item">										
								<a href="https://www.instagram.com/shuttersdiscount/" class="social social-yt">
									<i class="fab fa-youtube"></i>
								</a>
							</li>
							<li class="social-item">										
								<a href="https://www.instagram.com/shuttersdiscount/" class="social social-yt">
									<i class="fab fa-pinterest-p"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="review-social">
						Shutters inspiratie op doen of andere <br/> ervaringen lezen?						
						Volg Shuttersdiscount.nl op Facebook, Instagram, Youtube of Pinterest.
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="site-highlighted">
	<div class="container">
		
		<div class="row">
			<div class="col-sm-12 col-lg-8 mx-auto txt-center">
				<h5>Blackwalnut maatwerk shutters.</h5>
				<p>Shutters, in welke kleur dan ook zijn een geweldige manier om je privacy te bewaren terwijl je door het kantelen van de shutters lamellen je toch daglicht naar binnen kunt laten komen. Het spelen met licht en schaduw geeft een fantastisch effect aan je interieur.</p>
			</div>
			<?php  $images = get_field('highlighted_shutters');
			if( $images ): ?>
			<div class="col-sm-12">
				<ul class="row">
					<?php foreach( $images as $image ): ?>
						<li class="col-sm-4">
							<a href="<?php echo esc_url($image['url']); ?>">
								<img src="<?php echo esc_url($image['sizes']['highlighted']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
							</a>
							<p><?php echo esc_html($image['caption']); ?></p>
						</li>
					<?php endforeach; ?>
				</ul>				
				<a href="<?php echo get_site_url();?>/zwarte-shutters" class="btn btn-primary mx-auto">Meer ontdekken over zwarte shutters?</a>
			</div>		
			<?php endif; ?>	
		</div>
	</div>
</div>

<?php get_template_part('partials/contact','widget');?>

<?php
get_footer();