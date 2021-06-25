<?php 
$images = get_field ('gallery','option');	
$size = 'gallery_img'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
    <div class="gallery-widget">
        <div class="slider">												
            <?php foreach( $images as $image_id ): ?>							
                <?php echo wp_get_attachment_image( $image_id, $size ); ?>
            <?php endforeach; ?>
        </div>
        <ul class="controls" id="controls">
            <li class="prev"><i class="bi bi-arrow-left"></i></li>
            <li class="next"><i class="bi bi-arrow-right"></i></li>
        </ul>
    </div>
<?php endif; ?>