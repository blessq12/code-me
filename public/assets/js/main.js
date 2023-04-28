document.addEventListener("DOMContentLoaded",function(){
	let scroll = document.body.scrollTop
	console.log(scroll)
	// loader
	let loader = document.querySelector("#ftco-loader")
	loader.classList.remove('show')
	// navbar
	let nav = document.querySelector('#nav')
	let menuToggler = document.querySelector('.mobile-toggler')

	menuToggler.addEventListener("click",function(){
		nav.classList.toggle('collapse')
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