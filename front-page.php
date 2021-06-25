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
					
				<div class="testimonials">
					<div class="owl-carousel owl-theme">
						<div class="testimonial">
							<span class="fullname">Jesper van Bladel</span>
							<span class="rating"><i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i></span>
							<p class="review">Vakkundig en gespecialiseerd bedrijf. Ik geniet nu al een aantal maanden van mijn nieuwe shutters. Bedankt voor het mooie werk!</p>
						</div>
						<div class="testimonial">
							<span class="fullname">Jos Smit</span>
							<span class="rating"><i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i></span>
							<p class="review">Fijne medewerking en perfecte shutters bij mij thuis geïnstalleerd. Na het kiezen van Shutters Discount voor onze shutters is het proces zeer snel verlopen. We werden goed begeleid door de vakmensen daar en werden telkens op de hoogte gehouden van het verloop. Toppers, bedankt!</p>
						</div>
					</div>
				</div>
					
			</div>
		</div>
	</div>
</div>

<?php get_template_part('partials/contact','widget');?>

<?php
get_footer();