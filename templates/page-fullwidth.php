<?php
/*
Template Name: Page: fullwidth
*/
// Address
$street = get_field		('address', 'option');	
$zipcode = get_field	('zipcode', 'option');	
$city = get_field		('city', 'option');	

// Contact
$email = get_field		('email', 'option');	
$phone = get_field		('phone', 'option');	

// Bank details
$kvk = get_field		('kvk','option');
$bic = get_field		('bic','option');
$btw = get_field		('btw','option');
$iban = get_field		('iban','option');

get_header(); ?>    

<main class="site-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
               <?php while(have_posts()) : the_post(); ?>
					
                    <?php the_title('<h1>', '</h1>'); ?>

                    <?php the_content(); ?>
                    
                <?php endwhile; ?>                
            </div>                
        </div>   
    </div>  
</main>
    
    
<?php get_template_part('partials/contact','widget');?>
<?php get_footer();