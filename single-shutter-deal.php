<?php
    get_header();
?>
<div class="site-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-9">					
                hello
				<?php while(have_posts()) : the_post(); ?>

					<?php the_title('<h1>', '</h1>'); ?>
					<?php the_content(); ?>
					
				<?php endwhile; ?>
			</div>
			
		</div>
	</div>
</div>

<?php get_footer();