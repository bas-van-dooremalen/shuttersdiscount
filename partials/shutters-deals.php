<?php 
    /**
    * Featured deals appears on front-page
    */
    $featured_posts = get_field('featured_shutters');
    if( $featured_posts ): 
?>
<div class="container-fluid">
    <div class="row g-0">
        <div class="col-sm-12">
            <div class="swiper-container deals deals-slider">                
                <div class="swiper-wrapper">
                    <?php foreach( $featured_posts as $post ): 
                        $price              = get_field('price');
                        $favorite_deal      = get_field('most_wanted');
                        $short_description  = get_field('small_description');
                            
                        //product image
                        $image              = get_field('featured_img');
                        $url                = $image['url'];
                        $title              = $image['title'];
                        $alt                = $image['alt'];
                        $size               = 'deals';
                        $thumb              = $image['sizes'][ $size ];
                        $width              = $image['sizes'][ $size . '-width' ];
                        $height             = $image['sizes'][ $size . '-height' ]; 

                    setup_postdata($post); ?>
                        <div class="item <?php if( $favorite_deal ) : ?>item-favorite<?php endif; ?> swiper-slide">
                          
                                <div class="image">                                                                
                                    <?php if( $favorite_deal ) : ?> 
                                        <span class="favorite-deal"> Favoriet <i class="fas fa-heart"></i> </span>
                                    <?php endif; ?>   
                                    
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>                       
                                    
                                    <span class="price">Vanaf <strong>€ <?php echo $price; ?>,-</strong> per vierkante meter</span>
                                    <a href="<?php the_permalink();?>">
                                        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" width="640" height="480" />	    
                                    </a>                        
                                </div>   
                                       
                            <a href="<?php echo get_site_url(); ?>/shutters-offerte" class="button button-primary">Offerte aanvragen</a>
                        
                        </div>

                    <?php endforeach; ?>  
                </div>         
                
                <div class="swiper-pagination"></div> 
                <?php wp_reset_postdata(); ?>                
            </div>
        </div>
    </div>
</div>


<?php endif; ?>