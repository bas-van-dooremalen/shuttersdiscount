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
	<div class="site-upperbar">		
		<ul>
			<li>
				<a href="tel:0738500471">
					<span class="icon"><i class="fas fa-phone"></i></span>
					<span>073 - 85 00 471</span>
				</a>				
			</li>
			<li>
				<a href="mailto:info@shuttersdiscount.nl">
					<span class="icon"><i class="fas fa-envelope"></i></span>
					<span>info@shuttersdiscount.nl</span>
				</a>				
			</li>		
			<li>
				<a href="https://www.cbw-erkend.nl/bedrijven/shuttersdiscount-nl">
					<span class="icon"><i class="fas fa-check"></i></span>
					<span>CBW Erkend</span>
				</a>				
			</li>
			<li>
				<a href="<?php echo get_site_url();?>/shutters-prijzen">
					<span class="icon"><i class="fas fa-check"></i></span>
					<span>Prijsknallers</span>
				</a>				
			</li>
		</ul>
				
	</div>
	
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
	<div id="main">