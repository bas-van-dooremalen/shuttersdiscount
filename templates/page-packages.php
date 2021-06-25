<?php
/*
Template Name: Page: packages
*/

get_header(); ?>    

<div class="site-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-9 content">
                <?php while(have_posts()) : the_post(); ?>                    
                    
                    <?php the_title('<h1>', '</h1>'); ?>
                    <?php the_content(); ?>

                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>

<?php if( have_rows('content', 'option') ): ?>
        <div class="site-products products">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <?php while( have_rows('content', 'option') ): the_row(); ?>            
                            <div class="content">
                                <?php the_sub_field('text'); ?>
                            </div>
                        <?php endwhile; ?>

                        <div class="row">
                            <?php while( have_rows('packages', 'option') ): the_row(); ?>            

                                <?php 
                                    //VARS
                                    $layout               = get_sub_field('layout');
                                    $banner_title         = get_sub_field('title');
                                    $banner_text          = get_sub_field('content');                                    
                                    
                                    $banner_btn_title     = get_sub_field('btn_title');
                                    $banner_btn_link      = get_sub_field('btn_link');
                                    
                                    $title 			= get_sub_field('name');
                                    $price 			= get_sub_field('price');
                                    $image 			= get_sub_field('image');
                                    $size 			= 'package_img'; // (thumbnail, medium, large, full or custom size)
                                    $description 	= get_sub_field('description');
                                    $quotation_page = get_sub_field('quotation_page');
                                ?>

                                <?php if ($layout['value'] === 'banner') { ?> 
                                    
                                    <article class="col-sm-12 col-md-6 col-lg-4 product-layout-<?php echo esc_attr($layout['value']); ?>">	
                                        <header class="product-header">
                                            <div class="product-banner-content">                                                
                                                <h2><?php echo $banner_title; ?></h2>
                                                <?php echo $banner_text; ?>
                                            </div>                                        
                                        </header>							
                                        <footer class="product-footer">                                            
                                            <div class="product-sign">
                                                <a href="<?php echo $banner_btn_link; ?>"><?php echo $banner_btn_title; ?></a>
                                            </div>
                                        </footer>
                                    </article>
                                
                                <?php } else { ?>
                                    
                                    <article class="col-sm-12 col-md-6 col-lg-4 product-layout-<?php echo esc_attr($layout['value']); ?><?php if ( get_sub_field( 'most_wanted' ) ): ?> product-hot<?php endif; ?>">	
                                        <header class="product-header">
                                            <?php if ( get_sub_field( 'most_wanted' ) ): ?>
                                                <div class="label">
                                                    <span>beste keuze</span>
                                                    <span><?php echo $blog_title = get_bloginfo( 'name' ); ?></span>                                                    
                                                </div>
                                            <?php endif; ?>
                                            <a href="<?php echo esc_url( $quotation_page ); ?>">
                                                <?php if( $image ) {
                                                    echo wp_get_attachment_image( $image, $size );
                                                } ?>
                                            </a>
                                            
                                            <div class="product-title">                                                
                                                <h2><?php echo $title; ?></h2>
                                                <span>Vanaf <?php echo $price; ?> per m&sup2;</span>                                            
                                            </div>                                        
                                        </header>							

                                        <footer class="product-footer">
                                            <?php if( $description ) : ?>
                                                <div class="product-description">
                                                    <?php echo $description; ?> 
                                                </div>
                                            <?php endif; ?>

                                            <div class="product-buttons">
                                                <a href="<?php echo esc_url( $quotation_page ); ?>" class="btn btn-tertiary">Offerte aanvragen</a>
                                            </div>
                                        </footer>
                                    </article>

                                <?php } ?>                                
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    <?php endif; ?>
    
<?php get_template_part('partials/contact','widget');?>
<?php get_footer();