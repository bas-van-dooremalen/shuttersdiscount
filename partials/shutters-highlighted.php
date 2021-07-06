<?php 
    /**
    * Higlighted shutters (Blackwalnut shutters)
    */
?>
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
