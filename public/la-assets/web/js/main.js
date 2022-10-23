(function ($) {
    
    "use strict";

    $(document).ready(function ($) {
        $(".product-images").owlCarousel({
            items: 5,
            loop: true,
            dots: false,
            autoplay: true,
            nav: true,
            navText: ['<i class="zmdi zmdi-long-arrow-left"></i>', '<i class="zmdi zmdi-long-arrow-right"></i>'],
            margin: 30,
            dotsData: false,
//            responsive:{
//                    0:{
//                        items:1,
//                        nav:false,
//                         loop:true
//                    },
//                    450:{
//                        items:1,
//                        nav:false,
//                         loop:true
//                    },
//                    600:{
//                        items:2,
//                        nav:false,
//                         loop:true
//                    },
//                    1000:{
//                        items:3,
//                        nav:true,
//                        loop:true
//                    }
//                }
            
            
        });
        $(".client-carousel").owlCarousel({
            items: 1,
            loop: true,
            dots: false,
            autoplay: true,
            nav: false,
            navText: ['<i class="zmdi zmdi-long-arrow-left"></i>', '<i class="zmdi zmdi-long-arrow-right"></i>'],
            dotsData: false,
//            responsive:{
//                    0:{
//                        items:1,
//                        nav:false,
//                         loop:true
//                    },
//                    450:{
//                        items:1,
//                        nav:false,
//                         loop:true
//                    },
//                    600:{
//                        items:2,
//                        nav:false,
//                         loop:true
//                    },
//                    1000:{
//                        items:3,
//                        nav:true,
//                        loop:true
//                    }
//                }
            
            
        });
        $(".client-say-carousel").owlCarousel({
            items: 1,
            loop: true,
            dots: false,
            autoplay: true,
            nav: false,
            navText: ['<i class="zmdi zmdi-long-arrow-left"></i>', '<i class="zmdi zmdi-long-arrow-right"></i>'],
            dotsData: false,
//            responsive:{
//                    0:{
//                        items:1,
//                        nav:false,
//                         loop:true
//                    },
//                    450:{
//                        items:1,
//                        nav:false,
//                         loop:true
//                    },
//                    600:{
//                        items:2,
//                        nav:false,
//                         loop:true
//                    },
//                    1000:{
//                        items:3,
//                        nav:true,
//                        loop:true
//                    }
//                }
            
            
        });



    });





    // site preloader -- also uncomment the div in the header and the css style for #preloader
    $(window).load(function () {


    });


})(jQuery);