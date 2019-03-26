window.onscroll = function() {scrollfunction()};

function scrollfunction() {
	var main = document.getElementById("site-header__main");
	var title = document.getElementById("site-title");
    if(document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
	main.classList.add("nav-short");
	title.classList.add("responsive");
	anime({
		targets: '.nav-short',
		top: '-7.5rem',
		background: '#fff',
		paddingBottom: '5px',
		duration: 250,
		easing: 'linear'
	});
    } else {
	if(!document.querySelector('#wpadminbar')){
		anime({
			targets: '.nav-short',
			top: '0',
			background: 'rgba(255,255,255,0.3)',
			duration: 250,
			easing: 'easeOutSine',
			complete: function () {
				main.classList.remove("nav-short");
				title.classList.remove("responsive");
			}
		});
	} else {
		anime({
			targets: '.nav-short',
			top: '2rem',
			background: 'rgba(255,255,255,0.3)',
			easing: 'easeOutSine',
			duration: 250,
			complete: function () {
				main.classList.remove("nav-short");
				title.classList.remove("responsive");
			}
		});
	}
    }
}



const menu = document.querySelector(".bar-menu");
// menu.addEventListener("click", function(){
// 	if(menu.classList.contains('is-active')){
// 		anime({
// 			targets: '.bar-1',
// 			translateY: '-6.8rem',
// 			rotate: '0',
// 			duration: 600,
// 			complete: function() {
// 				menu.classList.remove('is-active');
// 			}
// 		});
// 		anime({
// 			targets: '.bar-2',
// 			opacity: [0,1],
// 			duration: 600,
// 			complete: function() {
// 				menu.classList.remove('is-active');
// 			}
// 		});
// 		anime({
// 			targets: '.bar-3',
// 			translateY: '-6.8rem',
// 			rotate: '0',
// 			duration: 600,
// 			complete: function() {
// 				menu.classList.remove('is-active');
// 			}
// 		});
// 		anime({
// 			targets: '.close-btn',
// 			translateX: [0,50],
// 			translateY: ['-3.7rem','-3.7rem'],
// 			opacity: [1,0],
// 			duration: 500,
// 			easing: 'easeOutSine',
// 			complete: function() {
// 				menu.classList.remove('is-active');
// 			}
// 		});
// 		anime({
// 			targets: '.menu-btn',
// 			translateX: [-50,0],
// 			translateY: ['-1rem','-1rem'],
// 			opacity: [0,1],
// 			duration: 500,
// 			delay: 100,
// 			easing: 'easeOutSine',
// 			complete: function() {
// 				menu.classList.remove('is-active');
// 			}
// 		});
// 		anime({
// 			targets: '.menu-main-container',
// 			height: [findHeight(document.querySelector('.menu-main-container').querySelector('.site-menu')),'0'],
// 			duration: 500,
// 			easing: 'easeOutSine',
// 			complete: function() {
// 				document.querySelector('.menu-main-container').classList.remove('mobile-menu');
// 				document.querySelector('.menu-main-container').style.height = null;
// 			}
// 		});

// 	} else {
// 		menu.classList.add('is-active');
// 		anime({
// 			targets: '.bar-1',
// 			translateY: ['-6.8rem','-5.75rem'],
// 			rotate: '45deg',
// 			duration: 600
// 		});
// 		anime({
// 			targets: '.bar-2',
// 			opacity: 0,
// 			duration: 600
// 		});
// 		anime({
// 			targets: '.bar-3',
// 			translateY: ['-6.8rem','-7.5rem'],
// 			rotate: '-45deg',
// 			duration: 600
// 		});
// 		anime({
// 			targets: '.close-btn',
// 			translateX: [-50,0],
// 			translateY: ['-3.7rem','-3.7rem'],
// 			opacity: [0,1],
// 			delay: 100,
// 			easing: 'easeOutSine',
// 			duration: 500
// 		});
// 		anime({
// 			targets: '.menu-btn',
// 			translateX: [0,50],
// 			translateY: ['-1rem','-1rem'],
// 			opacity: [1,0],
// 			easing: 'easeOutSine',
// 			duration: 500
// 		});
// 		document.querySelector('.menu-main-container').classList.add('mobile-menu');
// 		anime({
// 			targets: '.menu-main-container',
// 			height: [0,findHeight(document.querySelector('.menu-main-container').querySelector('.site-menu'))],
// 			easing: 'easeOutSine',
// 			duration: 1000
// 		});
// 	}
// })
//finds the height of what an object should be based on its children

function findHeight(item){
  var items = item.querySelectorAll('*');
  // return (30 * items);
  var h = 0;
  for(var i = 0; i < items.length; i++){
     h = h + items[i].offsetHeight;
  }
  return h;
}

//Front Page Slide Show
 
var slideIndex = 0,
    nextSlide = 1;
function slideshow() {
        var i,
        slides = document.querySelectorAll('.slide-show__img');
        
        for(i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
        }                                                                                                                                                                                      
        slideIndex++;
        nextSlide = slideIndex + 1;
        
        if(slideIndex > slides.length) {
                slideIndex = 1;
        }                                                                                                                                                                                      
        if(nextSlide > slides.length) {
                nextSlide = 1;
        }                                                                                                                                                                                      
        if(slideIndex == 1) {
                nextSlide = 2;
        }                                                                                                                                                                                      
		console.log(slides[slideIndex]);
        slides[slideIndex-1].style.display = 'block';
        slides[nextSlide-1].style.display = 'block';
        
        anime({
                targets: slides[slideIndex-1],
                easing: 'easeOutSine',
                translateX: [0,'-100%'],
                duration: 800
        });
        anime({
                targets: slides[nextSlide-1],
                easing: 'easeOutSine',
                translateX: ['100%',0],
                duration: 800
        });
        
        setTimeout(slideshow,4000);
} 

//if the wp admin bar is there move the navigation down to fit
if(document.querySelector('.wpadminbar')) {
	document.querySelector('.');
}


//Drop Down navigation animation

var button = document.querySelectorAll('.menu-item-has-children');
for(var i = 0; i < button.length; i++){
	button[i].addEventListener('mouseenter', function() {
		var target = button[i].querySelectorAll('.sub-menu li');
		anime({
			targets: target,
			translatex: [100,0],
			duration: 1000
		});
	});
}