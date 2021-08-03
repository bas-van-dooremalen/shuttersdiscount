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

<main class="site-intro">
	<div class="container">
		<div class="row">

			<div class="col-sm-12 col-md-12 col-lg-5">				
				<?php while(have_posts()) : the_post(); ?>
					<div class="content">
					
						<?php the_title('<h1>', '</h1>'); ?>
						<?php the_content(); ?>		       
						
						<div class="buttons">
							<a href="<?php echo get_site_url(); ?>/shutters-prijzen" class="button button-primary">Bekijk prijzen</a>
							<a href="<?php echo get_site_url(); ?>/shutters-offerte" class="button button-secondary">Prijsopgave</a>
						</div>						
					</div>
				<?php endwhile; ?>
			</div>

			<?php if ( has_post_thumbnail() ) { ?> 
				<div class="col-sm-12 col-md-12 col-lg-7">				
					<div class="image">													
						<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured_img' ); ?>
						
						<?php if ( ! empty( $large_image_url[0] ) ) { ?>
							<?php echo get_the_post_thumbnail( $post->ID, 'featured_img' ); ?>
						<?php } ?>
					</div>				
				</div>
			<?php } ?>

		</div>
	</div>
</main>	

<?php get_template_part( 'partials/shutters','sellingpoints' ); ?>	

<?php if( have_rows('content') ) : ?>
	<div class="site-deals">
		<div class="container">
			<div class="row">
				<?php while ( have_rows('content') ) : the_row(); ?>
					<?php if( get_row_layout() == 'extra_content' ): ?>
						
						<div class="col-sm-12 col-lg-8 mx-auto txt-center">
							<?php $text = get_sub_field('highlighted_content');?>
							
							<div class="content">
								<?php echo $text; ?>
							</div>
							
							<a class="button button-primary mx-auto formButton" id="toggleForm">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
									<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
								</svg>
								Terug gebeld worden? 
							</a>
						</div>

					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		</div>
				
		<?php get_template_part( 'partials/shutters', 'deals' ); ?>				
	</div>
<?php endif; ?>

<?php get_template_part( 'partials/shutters','highlighted' ); ?>

<?php get_template_part( 'partials/shutters','reviews' ); ?>

<?php get_template_part( 'partials/shutters','callmeback' ); ?>

<?php
get_footer();