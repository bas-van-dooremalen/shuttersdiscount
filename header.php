<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="site">
	<header class="site-header" id="header">
	
		<div class="site-branding">
			<a href="<?php echo get_site_url(); ?>" title="<?php echo $blog_title= get_bloginfo( 'name' ); ?>, <?php echo $blog_title= get_bloginfo( 'description' ); ?>" class="site-logo">
				<img src="<?php echo bloginfo('template_url'); ?>/assets/dist/img/logo-shuttersdiscount.png" alt="<?php echo $blog_title= get_bloginfo( 'name' ); ?>" width="200" height="116" />
			</a>
		</div>
		
		<button class="hamburger hamburger--elastic" type="button" id="toggle">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>  
		
		<nav class="site-navigation" id="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-main', 'menu_id' => 'menu-main' ) ); ?>
		</nav>
		
	</header>