<?php
/*
Template Name: Page: quotationform
*/
get_header(); ?>    

<main class="site-page">
    <div class="container">
        <div class="row">                      
            
            <div class="col-sm-12 col-lg-6">
                <h1>Offerteformulier</h1>
                <?php echo do_shortcode('[contact-form-7 id="495" title="Shutters offerte formulier"]'); ?>
            </div>
            <div class="col-sm-12 col-lg-6">
                sidebar    
            </div>
        </div>   
    </div>  
</main>

<?php get_footer();