document.addEventListener("DOMContentLoaded",function(){
	//loader
	let loader = document.querySelector("#ftco-loader")
	loader.classList.remove('show')
	//carousel
	
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