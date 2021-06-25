<?php
/*
Template Name: Page: contact
*/
get_header(); ?>    

<main class="site-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
               <?php while(have_posts()) : the_post(); ?>                    
                
                    <?php the_title('<h1>', '</h1>'); ?>                    
                    <?php the_content(); ?>
                
                <?php endwhile; ?>
            </div>                        
            <div class="col-sm-12 col-lg-6">
                <div class="sticky">
                    <?php get_template_part('partials/shutters','gallery');?>                    				
                    <div class="buttons">
                        <a href="<?php echo get_home_url()?>/shutters-prijzen-calculator" class="btn btn-tertiary">Eigen prijs bereken <i class="bi bi-calculator"></i></a>                               
                    </div>                    
                </div> 
            </div>
        </div>   
    </div>  
</main>

<?php get_footer();