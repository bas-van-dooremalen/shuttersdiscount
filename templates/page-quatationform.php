<?php
/*
Template Name: Page: quotationform
*/
get_header(); ?>    

<main class="site-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
               
                <h2>Offerteformulier</h2>
                <?php echo do_shortcode('[contact-form-7 id="294" title="Shutters offerte formulier"]');?>
         
            </div>                        
            <div class="col-sm-12 col-lg-6">
                <div class="sticky">
                    <div class="sidebar">
                        <?php while(have_posts()) : the_post(); ?>                    
                            
                            <?php the_title('<h1>', '</h1>'); ?>
                            
                            <?php the_content(); ?>
                            
                        <?php endwhile; ?>

                        <div class="buttons">
                            <a href="<?php echo get_home_url()?>/shutters-prijzen-calculator" class="btn btn-tertiary">Eigen prijs bereken <i class="bi bi-calculator"></i></a>       

                            <a href="<?php echo get_home_url()?>/contact" class="btn btn-tertiary btn-y">Afspraak inplannen <i class="bi bi-arrow-right"></i></a>                           
                        </div>

                    </div>

                    <?php get_template_part('partials/shutters','gallery');?>                    				
                </div> 
            </div>
        </div>   
    </div>  
</main>

<?php get_footer();