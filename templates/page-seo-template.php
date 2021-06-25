<?php
/*
Template Name: Page: SEO template
*/

//ACF Values
$content            = get_field('content');
$content_continued  = get_field('content_continued');

$image = get_field('featured_image');
$size = 'large'; // (thumbnail, medium, large, full or custom size)
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
                <?php get_template_part('partials/shutters','galleryseo');?>                      
            </div>
        </div>   
    </div>  
</main>

<div class="site-widget">
    <div class="container">
        <div class="row">     
            <?php if( $image ) { ?> 
            <div class="col-sm-12 col-lg-6">
                <div class="image">
                    <?php echo wp_get_attachment_image( $image, $size ); ?>                   
                </div>
            </div>
            <?php } ?>   

            <div class="col-sm-12<?php if( $image ) { ?> col-lg-6 <?php } else { ?> col-lg-8<?php } ?>">
                <div class="content">
                    <?php echo $content; ?>  
                </div>                  
            </div>        
        </div>
    </div>
</div>

<div class="site-contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-10 center">
                <?php echo $content_continued; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-10 center">
            <?php echo do_shortcode('[contact-form-7 id="334" title="Bel mij terug"]'); ?> 
            </div>            
        </div>
    </div>
</div>

<?php get_footer();