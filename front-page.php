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

			<div class="col-sm-12 col-lg-5 px-4">				
				<?php while(have_posts()) : the_post(); ?>
					<div class="content">
					
						<?php the_title('<h1>', '</h1>'); ?>
						<?php the_content(); ?>		       
						
						<div class="buttons">
							<a href="<?php echo get_site_url(); ?>/shutters-prijzen" class="btn btn-primary">Shutter prijzen</a>
							<a href="<?php echo get_site_url(); ?>/shutters-offerte" class="btn btn-secondary">Offerte aanvragen</a>
						</div>						
					</div>
				<?php endwhile; ?>
			</div>

			<?php if ( has_post_thumbnail() ) { ?> 
				<div class="col-sm-12 col-lg-7 px-4">				
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
				
		<?php get_template_part( 'partials/deals', 'featured' ); ?>				
	</div>
<?php endif; ?>

<?php get_template_part( 'partials/shutters','reviews' ); ?>

<?php get_template_part( 'partials/shutters','highlighted' ); ?>

<?php get_template_part('partials/contact','widget');?>

<?php
get_footer();