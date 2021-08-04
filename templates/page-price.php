<?php
    /*
    Template Name: Page: Shutters prijzen
    */
    get_header();
?>

<div class="site-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-8">

				<?php while(have_posts()) : the_post(); ?>
					<ul>
						<?php the_title('<h1>', '</h1>'); ?>
					</ul>
					<?php the_content(); ?>

				<?php endwhile; ?>

			</div>
		</div>
	</div>
</div>


<div class="site-packages">
	<div class="container">
		<div class="row">
            <?php 
                // CPT settings
                $loop = new WP_Query( array(
                    'post_type' => 'shutter-deal',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                    'orderby' => 'menu_order'
                ));
            ?>

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php 
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
                ?>
                <div class="col-sm-12 col-md-6 col-lg-6 px-4">

                    <div class="item <?php if( $favorite_deal ) : ?>item-favorite<?php endif; ?>">
                            
                        <div class="package">                                                                
                            <a href="<?php the_permalink();?>">
                                <?php if( $favorite_deal ) : ?> 
                                    <span class="favorite-deal"> Favoriet <i class="fas fa-heart"></i> </span>
                                <?php endif; ?>   
                                
                                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" width="640" height="480" />	    
                            </a>

                            <div class="box">

                                <span class="title h2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                                
                                <span class="price">Vanaf <strong>€ <?php echo $price; ?>,-</strong> per m<sub>2</sub> </span>
                            </div>
                            
                            <a href="<?php echo get_site_url(); ?>/shutters-offerte" class="button button-primary">Offerte aanvragen</a>                       
                        </div>   
                    
                    </div>

                </div>
            <?php endwhile; wp_reset_query(); ?>
		</div>
	</div>
</div>

<?php get_footer();