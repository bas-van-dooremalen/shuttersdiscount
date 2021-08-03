<?php 
    /**
    * Facebook reviews hard-coded 
    */
?>

<div class="site-reviews">	
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-8 mx-auto txt-center">
				<h4>Shutters beoordelingen.</h4>
				<p>Waarom klanten kopen bij Shuttersdiscount.nl, meer beoordelingen vind je op <a href="https://www.facebook.com/ShuttersDiscount/">Facebook</a> of <a href="https://www.instagram.com/shuttersdiscount/">Instagram</a>.</p>
				<ul>
					<li>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
							<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
						</svg>
					</li>
					<li>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
							<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
						</svg>
					</li>
					<li>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
							<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
						</svg>
					</li>
					<li>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
							<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
						</svg>
					</li>
					<li>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
							<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
						</svg>
					</li>
				</ul>
				
				<div class="reviews">
					
					<?php 
						// CPT settings
						$loop = new WP_Query( array(
							'post_type' => 'shutter-review',
							'posts_per_page' => 1,
							'orderby' => 'rand'
						));
					?>

					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php 
							// ACF Vars
							$review_name = get_field('name');
							$review_content = get_field('review');
							
							$image              = get_field('image');
							$url                = $image['url'];
							$title              = $image['title'];
							$alt                = $image['alt'];
							$size               = 'thumbnail';
							$thumb              = $image['sizes'][ $size ];
							$width              = $image['sizes'][ $size . '-width' ];
							$height             = $image['sizes'][ $size . '-height' ]; 
						?>
						<div class="item">
							<?php if( get_field('image') ): ?>
								<div class="image">
									<img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" width="150" height="150" />	    								
								</div>
							<?php endif; ?>
							<div class="review <?php if( ! get_field('image') ): ?>with-out-img<?php endif; ?>">
								<?php echo $review_content; ?>		
								<span class="name"><?php echo $review_name; ?></span>
							</div>
						</div>

					<?php endwhile; wp_reset_query(); ?>

				</div>
			</div>			
		</div>
		
		
	</div>
</div>