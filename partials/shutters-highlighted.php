<?php 
    /**
    * Higlighted shutters (Blackwalnut shutters)
    */
?>
<div class="site-highlighted">
	<div class="container">		
		<div class="row">
			<div class="col-sm-12 col-lg-10 mx-auto txt-center">
				<h5>Blackwalnut maatwerk shutters.</h5>
				<p>Shutters, in welke kleur dan ook zijn een geweldige manier om je privacy te bewaren<br/> 
					terwijl je door het kantelen van de shutters lamellen je toch daglicht naar binnen kunt 
					laten komen. Het spelen met licht en schaduw geeft een fantastisch effect aan je interieur.
				</p>
				
				<?php $images = get_field('highlighted_shutters');
				if( $images ): ?>					
					<div class="highlights">
						<ul>
							<?php foreach( $images as $image ): ?>
								<li>
									<img src="<?php echo esc_url($image['sizes']['highlighted']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
								</li>
							<?php endforeach; ?>					
						</ul>							
					</div>

					<a href="<?php echo get_site_url();?>/zwarte-shutters" class="button button-primary mx-auto">Ontdek meer</a>													
				<?php endif; ?>	

			</div>
		</div>
	</div>
</div>
