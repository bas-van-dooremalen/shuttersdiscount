<?php
	get_header();
	
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
					</div>

				<?php endwhile; ?>
		
			</div>
		</div>
	</main>
</div>    
<?php
get_footer();