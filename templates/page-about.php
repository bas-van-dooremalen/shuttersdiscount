<?php
    /*
    Template Name: Page: about
    */
    get_header();
    $gallery = get_field('gallery','option');
	$size = 'gallery_img'; // (thumbnail, medium, large, full or custom size)
?>

<div class="site-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 <?php if( $gallery ): ?> col-lg-6<?php else : ?>col-lg-8<?php endif; ?>">					
				<?php while(have_posts()) : the_post(); ?>

					<?php the_title('<h1>', '</h1>'); ?>
					<?php the_content(); ?>
					
				<?php endwhile; ?>                
			</div>

			<?php if( $gallery ): ?>		
			<div class="col-sm-12 col-lg-6">        
                <?php get_template_part('partials/shutters','gallery');?>                    				
			</div>	
			<?php endif; ?>	
		</div>
	</div>
</div>

<div class="site-page-extra">
    <div class="container">
		<div class="row">                            
            <div class="col-sm-12">                                
                
                <ul class="nav nav-tabs sd-tabs" id="tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="kwaliteit-tab" data-toggle="tab" href="#kwaliteit" role="tab" aria-controls="kwaliteit" aria-selected="true">Kwaliteit</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="missie-tab" data-toggle="tab" href="#missie" role="tab" aria-controls="missie" aria-selected="false">Onze missie</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="voorstellen-tab" data-toggle="tab" href="#voorstellen" role="tab" aria-controls="voorstellen" aria-selected="false">Voorstellen</a>
                    </li>
                </ul>
                
                <div class="tab-content">
                    <div class="tab-pane active" id="kwaliteit" role="tabpanel" aria-labelledby="kwaliteit-tab">
                        <h2>Kwaliteit</h2>
                        <p>Onze shutters zijn duurzaam en van uitstekende kwaliteit; wij gebruiken alleen de beste houtsoorten en materialen. 
                        De Shutters die wij leveren zijn stijlvol en passen in ieder interieur, zowel klassiek als modern, en zijn in meerdere kleuren beschikbaar. 
                        Door onze aantrekkelijke <a href="<?php echo get_site_url(); ?>/shutters-prijzen" title="Shutters prijzen">Shutters All inclusive deals</a> hebben we dit betaalbaar gemaakt voor iedereen!</p>
                    </div>
                    <div class="tab-pane" id="missie" role="tabpanel" aria-labelledby="missie-tab">
                        <h2>Onze missie</h2>
                        <p>Is om op een persoonlijke en informele wijze onze maatwerk shutters zowel nationaal als internationaal te verkopen. Wij verkopen onze shutters Zowel direct aan de consument als via bedrijven, Hotels, casino`s, recreatieparken etc. iedere situatie vraagt om een specifieke maatwerk aanpak. Wij verzorgen en ontzorgen voor onze klanten het gehele shutters traject van A t/m Z.  D.w.z. van de eerste kennismaking,het advies, het nauwkeurig inmeten, de verzorging van technische cad-tekeningen tot de vakkundige montage.</p>
                    </div>
                    <div class="tab-pane" id="voorstellen" role="tabpanel" aria-labelledby="voorstellen-tab">
                        <h2>Voorstellen</h2>
                        <p>Roger Salfischberger heeft het bedrijf opgericht in 2008, daarvoor vele jaren actief voor nationale en internationale bedrijven in de lifestyle/textiel branche. Met zijn goed gevoel voor kleur en vormgeving en zijn interesse in interieur styling, heeft hij samen met een klein team van professionals “destijds” de maatwerk shutters op de Nederlandse markt geïntroduceerd met als doel shutters betaalbaar en bereikbaar te maken voor iedereen. Door de interne korte communicatielijnen, transparante bedrijfsvoering en goed advies op locatie zijn wij de nr. 1 Maatwerk Shutters Specialist in de Benelux.</p>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-widget">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="content">
                    <h3>Shutter advies?</h3>
                    <p>Wil je shutters op maat voor in je woonkamer, <br/>kantoor of andere ruimte? 
                    Neem contact op met een van <br/>onze experts en krijg deskundig
                    en persoonlijk advies<br/> over de diverse mogelijkheden
                    van onze shutters.</p>                
                    <ul>
                        <li>Hoge kwaliteit shutters op maat</li>
                        <li>Gegarandeerde 100% pasgarantie</li>
                        <li>Shutters advies op maat</li>                    
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="widget">
                    <div class="widget-style">
                        <?php echo do_shortcode('[contact-form-7 id="334" title="Bel mij terug"]'); ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();