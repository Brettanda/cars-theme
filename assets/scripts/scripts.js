window.onscroll = function() {scrollfunction()};

function scrollfunction() {
    if(document.body.scrollTop > 80 || document.documentElement.scrollTop > 80){
        console.log("kjsalkdjh");
    } else {
        console.log("below");
    }
}


window.onscroll = function() {scrollfunction()};

function scrollfunction() {
	var main = document.getElementById("site-header__main");
	var title = document.getElementById("site-title");
    if(document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
	main.classList.add("nav-short");
	title.classList.add("responsive");
	anime({
		targets: '.nav-short',
		top: '-7.5em',
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