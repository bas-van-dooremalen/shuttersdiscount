<?php
/*
Template Name: Page: calculator
*/
$gallery = get_field('gallery','option');
$size = 'gallery_img'; // (thumbnail, medium, large, full or custom size)
get_header(); ?>    

<main class="site-page">
    
    <?php if( $gallery ): ?>	
        <div class="container">
            <div class="row">
                <div class="col-sm-12">        
                    <?php get_template_part('partials/shutters','gallery');?>                    				
                </div>	
            </div>
        </div>	    
    <?php endif; ?>

    <div class="totalprice" id="calculator-result" style="display:none;">
        <h3>Resultaat berekening</h3>
    
        <div class="table-responsive">
            <table style="width:100%;" id="result-table" class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Breedte</th>
                    <th>Hoogte</th>
                    <th>Oppervlakte</th>
                    <th>Aantal</th>
                    <th>Prijs in &euro; per raam</th>
                    <th>Totaalprijs in &euro;</th>
                </tr>
            </table>
        </div>
    
        <div id="widthError" class="alert alert-danger">
            Uw invoer bevat een breedte welke breder is dan 2400mm. <br/>
            U dient rekening te houden met de aanschaf van een aluminium boven railsysteem a <strong>€149,- per m./1</strong>.
        </div>
    </div>	

    <div class="container">
        <div class="row">
            

            <div class="col-sm-12 col-lg-7">
                <div class="message">
                    <i class="bi bi-exclamation-circle-fill"></i> Sorry, de shutters prijzen calculcator is alleen geoptimaliseerd voor grotere schermen.
                    Indien u toch graag een prijs wilt berekenen kunt u hier over ook in contact komen met onze 
                    shutter adviseur via <a href="https://api.whatsapp.com/send?phone=31636306455&amp;text=Hallo,%20ik%20heb%20een%20vraag:%2">WhatsApp</a> of laat een bericht achter op ons  <a href="<?php echo get_home_url()?>/contact">contactformulier</a>.
                </div>
                <div class="calculator">
                       
                    <h2>Bereken shutters prijs</h2>
                    Om optimaal gebruik te kunnen maken van onze calculator raden wij aan om deze op een groot scherm te gebruiken i.p.v. een mobiel. Je hebt dan een groter overzicht.
                    <br/><br/>
                    <h3>Meest gekozen shutter deals:</h3>
                    
                    <div class="packages">
                        <label>
                            <input type="radio" name="_pakket" value="premium">
                            <div class="package">
                                <span>Premium shutters</span>
                                <span>vanaf € 279,- per m²</span>
                            </div>                         
                        </label>

                        <label>
                            <input type="radio" name="_pakket" value="riviera">
                            <div class="package">
                                <span>Riviera shutters</span>
                                <span>vanaf € 289,- per m²</span>
                            </div>                         
                        </label>
                        
                        <label>
                            <input type="radio" name="_pakket" value="plus">
                            <div class="package">
                                <span>Instap plus shutters</span>
                                <span>vanaf € 259,- per m²</span>
                            </div>                         
                        </label>

                       
                    </div>
                    
                    <hr>

                    <div class="measure">
                        <div class="m-head">
                            <h4>Ramen toevoegen</h4>
                            <div id="error" class="incomplete-error alert alert-danger">
                                Graag één raam volledig in voeren. <i class="fa fa-exclamation-triangle"></i>
                            </div>
                        </div>
                        
                        <p>
                            <strong>Let op:</strong> Miminale breedte invoer is 250mm. en mimimale hoogte invoer is 300mm.
                            <br/>Graag de maatvoeringen in millimeters doorvoeren.
                        </p>
                                                
                        <table id="calculator-table" class="table table-striped">
                            <tr class="tablerow">
                                <td>
                                    <label>Breedte (millimeters) <i class="bi bi-distribute-vertical"></i><label>
                                    <input class="form-control widthmm" type="number">
                                </td>
                                <td>
                                    <label>Hoogte (millimeters) <i class="bi bi-distribute-horizontal"></i><label>
                                    <input class="form-control heightmm" type="number">
                                </td>
                                <td>
                                    <label>Aantal:<label>
                                    <input class="form-control windownum" type="number">
                                </td>
                            </tr>
                        </table>    
                        
                        <div class="options">
                            <button id="calc-bereken">Bereken shutters prijs <i class="bi bi-calculator"></i></button>
                            <button id="addWindows" type="button">Voeg raam toe</button>
                        </div>
                                                
                    </div>

                </div>
            </div>                        
            <div class="col-sm-12 col-lg-5">
                <div class="sidebar">
                    <?php while(have_posts()) : the_post(); ?>                    
                        
                        <?php the_title('<h1>', '</h1>'); ?>
                        
                        <?php the_content(); ?>
                        
                    <?php endwhile; ?>
                    <div class="buttons">                        
                        <a href="<?php echo get_home_url()?>/contact" class="btn btn-tertiary btn-y">Afspraak inplannen <i class="bi bi-arrow-right"></i></a>       
                    </div>
                </div>
            </div>
        </div>   
    </div>  
</main>

<?php get_footer();