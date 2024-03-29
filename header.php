<!DOCTYPE html>
<html lang="en">
<head>
<meta name="theme-color" content="<?php print get_theme_mod("theme_color");?>">
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="<?php print get_stylesheet_directory_uri(); ?>/node_modules/animejs/lib/anime.min.js"></script>
<script src="<?php print get_stylesheet_directory_uri(); ?>/node_modules/rellax/rellax.js"></script>
<?php wp_head();?>
</head>
<body <?php body_class();?> >
<header class="site-header">
	<div id="site-header__main" class="site-header__main">
		<div class="site-header__info">
			<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
			if( has_custom_logo()){
				print("<a href='"); print get_option('home'); print("'>");	print('<img class="site-logo" src="');	print esc_url($logo[0]);	print('" alt="Site Logo"></a>');
				print("<h1 id='site-title' class='site-title'>"); print("<a href='"); print get_option('home'); print("'>");	 bloginfo('name');	print("</a></h1>");
		//		print("<h2>");	bloginfo('description');	print("</h2></div>");		
			}else{
				print("<h1 id='site-title' class='site-title'>"); print("<a href='"); print get_option('home'); print("'>");	bloginfo('name');	print("</a></h1>");
		//		print("<h2>");	bloginfo('description');	print("</h2></div>");
			}?>
		</div>
	<!--	<img class="site-img" src="" alt="">-->
		<button class="bar-menu">
			<div class="bar-labels">
				<h2 class="bar-menu__label menu-btn">Menu</h2>
				<h2 class="bar-menu__label close-btn">Close</h2>
			</div>
			<div class="bar bar-1"></div>
			<div class="bar bar-2"></div>
			<div class="bar bar-3"></div>
		</button>
		<?php
		if(has_nav_menu('site-menu')){
			wp_nav_menu(array(
				'theme_location' => 'site-menu',
	//			'container' => 'nav',
				'fallback_cb' => false,
	//			'container_class' => 'site-menu',
				'menu_class' => 'site-menu',
				'depth' => '2'
			));
		}
		?>
	</div>


<!-- <div class="main"> -->