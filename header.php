<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-barba="wrapper"> 
<div class="site">

	<div class="site-upperbar">		
		<ul>
			<li>
				<a href="tel:0738500471">
					<span class="icon"><i class="bi bi-telephone"></i></span>
					<span>073 - 85 00 471</span>
				</a>				
			</li>
			<li>
				<a href="mailto:info@shuttersdiscount.nl">
					<span class="icon"><i class="bi bi-envelope"></i></span>
					<span>info@shuttersdiscount.nl</span>
				</a>				
			</li>
			<li>
				<a href="https://www.cbw-erkend.nl/bedrijven/shuttersdiscount-nl">
					<span class="icon"><i class="bi bi-check2-circle"></i></span>
					<span>CBW Erkend, zeker van je aankoop</span>
				</a>				
			</li>
			<li>
				<a href="<?php echo get_site_url();?>/shutters-prijzen">
					<span class="icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-euro" viewBox="0 0 16 16">
							<path d="M4 9.42h1.063C5.4 12.323 7.317 14 10.34 14c.622 0 1.167-.068 1.659-.185v-1.3c-.484.119-1.045.17-1.659.17-2.1 0-3.455-1.198-3.775-3.264h4.017v-.928H6.497v-.936c0-.11 0-.219.008-.329h4.078v-.927H6.618c.388-1.898 1.719-2.985 3.723-2.985.614 0 1.175.05 1.659.177V2.194A6.617 6.617 0 0 0 10.341 2c-2.928 0-4.82 1.569-5.244 4.3H4v.928h1.01v1.265H4v.928z"/>
						</svg>
					</span>
					<span>Euro's goedkoper</span>
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