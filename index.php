<?php 
	get_header();
?>
<div class="site-page">
	<div class="container">
		<div class="row">
			
			<?php if ( has_post_thumbnail() ) { ?> 
				<div class="col-sm-12 col-md-12 col-lg-6">	
					<div class="image">													
						<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured_img' ); ?>
						
						<?php if ( ! empty( $large_image_url[0] ) ) { ?>
							<?php echo get_the_post_thumbnail( $post->ID, 'featured_img' ); ?>
						<?php } ?>
					</div>
				</div>
			<?php } ?>

			<div class="col-sm-12 col-md-12 col-lg-6">					
				<?php while(have_posts()) : the_post(); ?>

					<?php the_title('<h1>', '</h1>'); ?>
					<?php the_content(); ?>
					
				<?php endwhile; ?>
			</div>
			
		</div>
	</div>
</div>

<?php get_template_part( 'partials/shutters','shortcuts' ); ?>	

<?php get_footer();
