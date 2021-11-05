$(document).ready(function(){

    // Bestseller Owl Carousel
    $(".owl-carousel").owlCarousel({
        loop: false,
        margin: 5,
        nav: true,
        dots: true,
        autoPlay: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            },
            1440:{
                items:5
            }
        }
    });

    // isotope filter
    var $grid = $(".grid").isotope({
        itemSelector:'.grid-item',
        layoutMode:'fitRows'
    });

    // filter items on button click
    $(".button-group").on("click","button", function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter:filterValue});
    })

})

