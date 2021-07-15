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
            <div class="deals owl-carousel">
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
                    <div class="item <?php if( $favorite_deal ) : ?>item-favorite<?php endif; ?>" onclick="location.href='<?php the_permalink(); ?>';">
                        
                        <div class="image">                            
                            
                            <?php if( $favorite_deal ) : ?> 
                                <span class="favorite-deal"> Favoriet <i class="fas fa-heart"></i> </span>
                            <?php endif; ?>   
                            
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>                       
                            
                            <span class="price">Vanaf <strong>€ <?php echo $price; ?>,-</strong> per vierkante meter</span>
                            
                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" width="640" height="480" />	                            
                        </div>               
                        <a href="<?php echo get_site_url(); ?>/shutters-offerte" class="button button-primary">Offerte aanvragen</a>
                    
                    </div>

                <?php endforeach; ?>                
                <?php wp_reset_postdata(); ?>
                
            </div>
        </div>
    </div>
</div>

<div class="container container-deals" style="display:none;">
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

        <div class="row<?php if( $favorite_deal ) : ?> row-favorite<?php endif; ?>">
            <div class="col-sm-12 col-md-6 col-lg-6 px-4">
                <div class="image">
                    <a href="<?php the_permalink(); ?>">
                        <?php if( $favorite_deal ) : ?> <span class="favorite-deal"> Favoriet <i class="fas fa-heart"></i> </span><?php endif; ?>                         
                        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" class="img-fluid" width="640" height="480" />	
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 px-4">
                <div class="content">
                    
                    <span class="price">Vanaf € <?php echo $price; ?>,- / per m<sup>2.</sup></span>
                    
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>                    
                    
                    <p><?php echo $short_description; ?></p>
                    
                    <div class="buttons">
                        <a href="#" class="button button-tertiary"> 
                            <i class="far fa-calendar-alt"></i>
                            <span>Inmeet afspraak inplannen</span>
                        </a>

                        <a href="#" class="button button-secondary">
                            <i class="far fa-file-alt"></i>
                            <span>Offerte aanvragen</span>
                        </a>
                    </div>
                   
                </div>
            </div>
        </div>
        
    <?php endforeach; ?>
</div>
<?php wp_reset_postdata(); ?>

<?php endif; ?>