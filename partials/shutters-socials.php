<?php 
    /**
    * Shuttersdiscount Social Media 
    */
    
    // ACF Options
    $facebook   = get_field('social_facebook', 'option');
    $instagram  = get_field('social_instagram', 'option');
    $youtube    = get_field('social_youtube', 'option');
    $pinterest  = get_field('social_pinterest', 'option');
?>

<ul class="social"> 
    <li class="social-item">
        <a href="<?php echo $facebook; ?>" class="social-fb">
            <i class="fab fa-facebook-f"></i>
        </a>
    </li>
    <li class="social-item">										
        <a href="<?php echo $instagram; ?>" class="social-insta">
            <i class="fab fa-instagram"></i>
        </a>
    </li>
    <li class="social-item">										
        <a href="<?php echo $youtube; ?>" class="social-yt">
            <i class="fab fa-youtube"></i>
        </a>
    </li>
    <li class="social-item">										
        <a href="<?php echo $pinterest; ?>" class="social-yt">
            <i class="fab fa-pinterest-p"></i>
        </a>
    </li>
</ul>