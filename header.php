<!DOCTYPE html>
<html lang="en">
<head>
<meta name="theme-color" content="<?php print get_theme_mod("theme_color");?>">
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="//instant.page/1.2.1" type="module" integrity="sha384-/IkE5iZAM/RxPto8B0nvKlMzIyCWtYocF01PbGGp1qElJuxv9J4whdWBRtzZltWn"></script>
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


<script>

window.onscroll = function() {scrollfunction()};

function scrollfunction() {
	var main = document.getElementById("site-header__main");
	var title = document.getElementById("site-title");
    if(document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
	main.classList.add("nav-short");
	title.classList.add("responsive");
	anime({
		targets: '.nav-short',
		top: '-4.5em',
		background: '#fff',
		paddingBottom: '5px',
		duration: 250,
		easing: 'linear'
	});
    } else {
	anime({
		targets: '.nav-short',
		top: '0',
		background: 'rgba(255,255,255,0.3)',
		duration: 250,
		easing: 'linear',
		complete: function () {
			main.classList.remove("nav-short");
			title.classList.remove("responsive");
		}
	});
	}
}



const menu = document.querySelector(".bar-menu");
menu.addEventListener("click", function(){
	if(menu.classList.contains('is-active')){
		anime({
			targets: '.bar-1',
			translateY: '-96',
			rotate: '0',
			duration: 600,
			complete: function() {
				menu.classList.remove('is-active');
			}
		});
		anime({
			targets: '.bar-2',
			opacity: [0,1],
			duration: 600,
			complete: function() {
				menu.classList.remove('is-active');
			}
		});
		anime({
			targets: '.bar-3',
			translateY: '-96',
			rotate: '0',
			duration: 600,
			complete: function() {
				menu.classList.remove('is-active');
			}
		});
		anime({
			targets: '.close-btn',
			translateX: [0,50],
			translateY: [-44,-44],
			opacity: [1,0],
			duration: 500,
			easing: 'easeOutSine',
			complete: function() {
				menu.classList.remove('is-active');
			}
		});
		anime({
			targets: '.menu-btn',
			translateX: [-50,0],
			opacity: [0,1],
			duration: 500,
			delay: 100,
			easing: 'easeOutSine',
			complete: function() {
				menu.classList.remove('is-active');
			}
		});

	} else {
		menu.classList.add('is-active');
		anime({
			targets: '.bar-1',
			translateY: '14px',
			rotate: '45deg',
			duration: 600
		});
		anime({
			targets: '.bar-2',
			opacity: 0,
			duration: 600
		});
		anime({
			targets: '.bar-3',
			translateY: '-14px',
			rotate: '-45deg',
			duration: 600
		});
		anime({
			targets: '.close-btn',
			translateX: [-50,0],
			translateY: [-44,-44],
			opacity: [0,1],
			delay: 100,
			easing: 'easeOutSine',
			duration: 500
		});
		anime({
			targets: '.menu-btn',
			translateX: [0,50],
			opacity: [1,0],
			easing: 'easeOutSine',
			duration: 500
		});
	}
})
</script>
<div class="main">