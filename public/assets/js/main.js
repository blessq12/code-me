document.addEventListener("DOMContentLoaded",function(){

	let navbar = document.querySelector('.navbar')
	let toggler = document.querySelector('.toggler')
	let mobileMenu = document.querySelector('#nav')
	let menuToggler = document.querySelector('.mobile-toggler')

	// loader
	let loader = document.querySelector("#ftco-loader")
	loader.classList.remove('show')

	//scroll group events
	window.addEventListener('scroll',function(e){
		let scroll = window.pageYOffset
		if (scroll >= 50){
			navbar.classList.add('awake')
			navbar.classList.add('scrolled')
			menuToggler.classList.add('toggler-awake')
		} else {
			navbar.classList.remove('awake')
			navbar.classList.remove('scrolled')
			menuToggler.classList.remove('toggler-awake')
		}
	})

	// navbar
	menuToggler.addEventListener("click",function(){
		mobileMenu.classList.toggle('collapse')
	})
})

$(document).ready(function(){
	$('.technologies').owlCarousel({
		loop:true,
    	margin:10,
    	nav:true,
		dots:false,
		autoplay:true,
    	responsive:{
			0:{
				items:2
			},
			600:{
				items:3
			},
			1000:{
				items:4
			}
		}
	})
})