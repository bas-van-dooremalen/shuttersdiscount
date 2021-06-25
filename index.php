<?php 
	get_header();
?>
<div class="site-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-9">					
				<?php while(have_posts()) : the_post(); ?>

					<?php the_title('<h1>', '</h1>'); ?>
					<?php the_content(); ?>
					
				<?php endwhile; ?>
			</div>
			
		</div>
	</div>
</div>

<div class="site-widget">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-6">						
				<?php get_template_part('partials/shutters','gallery');?>
			</div>
			<div class="col-sm-12 col-lg-6">	
				<div class="widget">
					<div class="widget-style">
						<h2>Shutters advies</h2>
						<p>
						Wij helpen graag met het ontwerpen en vormgeven van de gekozen maatwerk shutters. Daarbij is er ruim keuze uit verschillende kleuren, lamel breedtes, type zijstijlen, en in scharnieren mogelijk.
						Wilt u ook geholpen worden om de beste shutter deal te kiezen?									
						</p>
						<?php echo do_shortcode('[contact-form-7 id="334" title="Bel mij terug"]'); ?>	
					</div>
				</div>		
			</div>
		</div>
	</div>
</div>
<?php get_footer();
