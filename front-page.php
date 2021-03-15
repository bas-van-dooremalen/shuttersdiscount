<?php
	get_header();
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
<div class="site-front-page">
	<main class="container">
		<div class="row">
			<div class="col-sm-12">
				
	        	<?php while(have_posts()) : the_post(); ?>

					<div class="site-intro">					
						
						<div class="intro-content">						
							<?php the_title('<h1>', '</h1>'); ?>
							<?php the_content(); ?>		       
						</div>				

						<?php if ( has_post_thumbnail() ) { ?> 
							<div class="intro-visual">							
								
								<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
								
								<?php if ( ! empty( $large_image_url[0] ) ) { ?>
									<?php echo get_the_post_thumbnail( $post->ID, 'featured-image' ); ?>
								<?php } ?>

							</div>
						<?php } ?>

						<div class="site-intro-buttons">
							<a href="<?php echo get_site_url(); ?>/shutters-prijzen" class="btn btn-primary">Shutter prijzen</a>
							<a href="<?php echo get_site_url(); ?>/shutters-offerte" class="btn btn-secondary">Offerte aanvragen</a>
						</div>
					</div>

				<?php endwhile; ?>
		
			</div>
		</div>
	</main>	
</div>    

<div class="site-products">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-products">

				<h2>Onze unieke <span>shutter deals</span></h2>
				<p>
					Opzoek naar sfeer en elegantie voor in je huis? Dan zijn onze maatwerk shutters de ideale raamdecoratie voor jou. <br/>
					Onze shutters zijn op maat gemaakt, verfraaien elk raam en interieur. <br/>Kies jou shutter deal dan maken wij jou smaak.
				</p>
					
				<a href="<?php echo get_site_url()?>/shutters-prijzen" class="btn btn-center btn-secondary">Alle shutters prijzen</a>

				<div class="row products">					
					<?php if( have_rows('shutters') ): ?> 
						<?php while ( have_rows('shutters') ) : the_row(); ?>
						
						<?php // Vars 
							$image 			= get_sub_field('image'); 
							$title 			= get_sub_field('name');
							$description 	= get_sub_field('description');
							$price 			= get_sub_field('price');
							$quotation		= get_sub_field('quotation_page');
						?>

						<article class="col-sm-12 col-md-6 col-lg-4">						
							
								<header class="product-header">
									<a href="<?php echo $quotation; ?>">
										<?php echo wp_get_attachment_image( $image['ID'], 'shutters-image' ); ?>
									</a>
									<div class="product-title">
										<span><?php echo $title; ?></span>
										<span>Vanaf <?php echo $price; ?> per m&sup2;</span>
									</div>
								</header>							

								<footer class="product-footer">
									<div class="product-description">
										<?php echo $description; ?> 
									</div>
									<div class="product-buttons">
										<a href="<?php echo $quotation; ?>" class="btn btn-tertiary">Offerte aanvragen</a>
									</div>
								</footer>
							
						</article>

						<?php endwhile; ?>
					<?php endif; ?>
				

				</div>	

			</div>
		</div>
	</div>
</div>

<div class="site-content-usp">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 content">
				<h2>Wat <span>ShuttersDiscount.nl</span> bijzonder maakt</h2>
				<p>Wij hebben aandacht voor detail, voor de mensen die geïnteresseerd zijn in onze maatwerk shutters, en voor ons werk.
				Onze ambitie is om maatwerk shutters te leveren met kwaliteit. 
				Met meer dan 15 jaar ervaring in maatwerk shutters, zowel inmeten als montage, durven wij met 100% een gegarandeerde pasgarantie te bieden.
				</p>
				<a href="<?php echo get_site_url()?>/over-ons" class="btn btn-primary">Onze missie</a>
			</div>
			<div class="col-sm-12 col-md-6">
				<span class="usp-title">Snel naar:</span>
				<ul>
					<li><a href="<?php echo get_site_url()?>/shutters-prijzen">Alle shutters prijzen <i class="fas fa-angle-right"></i></a></li>
					<li><a href="<?php echo get_site_url()?>/shutters-prijzen-calculator">Je eigen shutter prijs berekenen <i class="fas fa-angle-right"></i></a></li>
					<li><a href="https://api.whatsapp.com/send?phone=31636306455&amp;text=Hallo,%20ik%20heb%20een%20vraag%20over:%20">Ik wil graag advies via WhatsApp <i class="fas fa-angle-right"></i></a></li>
					<li><a href="<?php echo get_site_url()?>/contact">Vrijblijvend contact opnemen <i class="fas fa-angle-right"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="site-highlight">
	<div class="container">
		<div class="row no-gutters">						
			<div class="col-sm-12 col-md-6 highlighted-images">
				<?php   
					$images = get_field('featured_images');
					if( $images ): ?>					
					<?php foreach( $images as $image ): ?>
						<div class="images">		
							<a href="<?php echo esc_url($image['url']); ?>" data-fancybox>
								<i class="fas fa-search-plus"></i>
								<img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" loading="lazy" />								
							</a>								
						</div>								
					<?php endforeach; ?>					
				<?php endif; ?>
			</div>		

			<div class="col-sm-12 col-md-6 highlighted-content">
				<h3>Onze must have, <br/><span>Blackwalnut Shutters</span></h3>
				
				<p>Shutters, in welke kleur dan ook zijn een geweldige manier om je privacy te bewaren terwijl je door het kantelen van de shutters lamellen je 
				toch daglicht naar binnen kunt laten komen.<br/><br/>Het spelen met licht en schaduw geeft een fantastisch effect aan je interieur. 
				Lees hier meer over onze <br/><a href="<?php echo get_site_url()?>/blackwalnut-shutters" title="Blackwalnut zwarte Shutters">Blackwalnut zwarte Shutters</a>.</p>
			</div>		
			
		</div>
	</div>
</div>

<div class="site-contact">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-sm-12 col-md-6">
				<div class="contact-details">
					<ul class="contact-address">
						<li>Contactgegevens</li>
						<li><?php echo $street; ?></li>
						<li><?php echo $zipcode; ?>, <?php echo $city; ?></li>						
					</ul>
					<ul class="contact-options">
						<li><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
						<li><?php echo $phone; ?></li>
					</ul>
					<ul class="contact-address">
						<li>Bankgegevens</li>
						<li>KVK: <?php echo $kvk; ?></li>
						<li>BIC: <?php echo $bic; ?></li>						
						<li>BTW: <?php echo $btw; ?></li>
						<li>IBAN: <?php echo $iban; ?></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="contact-form">
					<h2>Contactformulier</h2>
					<p>Naast de reguliere verkoop zijn wij er ook voor bedrijven zoals hotels, 
					vakantieparken, restaurants of kantoren. Wij verzorgen het gehele shutter traject, 
					van het advies en professioneel inmeten tot de volledige montage en garantie. 					
					
					<?php echo do_shortcode('[contact-form-7 id="137" title="Contactformulier"]');?>	
				</div>				
			</div>
			
			
		</div>
	</div>
</div>
<?php
get_footer();