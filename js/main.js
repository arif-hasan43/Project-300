
$('.home-slider').owlCarousel({
	items:1,
    loop:true,
    margin:10,
    nav:true,
	dots:false,
	navText: ["<span class='glyphicon glyphicon-menu-left'></span>", "<span class='glyphicon glyphicon-menu-right'></span>"],

})

$('.team-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
	dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

$('.testeominal-slider').owlCarousel({
	items:1,
    loop:true,
    margin:10,
    nav:false,
	dots:true,
})



