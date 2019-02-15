jQuery(document).ready(function($) {

    var rtl;
    
    if( blossom_fashion_data.rtl == '1' ){
        rtl = true;
    }else{
        rtl = false;
    }
    
    // banner slider
    $('#banner-slider').owlCarousel({
        loop       : false,
        margin     : 0,
        nav        : true,
        items      : 1,
        dots       : false,
        autoplay   : false,
        navText    : '',
        rtl        : rtl,
        lazyLoad   : true,
        animateOut : blossom_fashion_data.animation,
    });

    // Shop Section slider
    $('.shop-slider').owlCarousel({
        nav        : false,
        dots       : true,
        rtl        : rtl,
        lazyLoad   : true,
        responsive : {
            0:{
                items: 1,
                margin: 15
            },
            768:{
                items: 3,
                margin: 15
            },
            1200:{
                items: 4,
                margin: 15
            },
            1440:{
                margin: 40,
                items: 4
            }
        }
    });

    // Bottom shop slider
    $('.bottom-shop-slider').owlCarousel({
        dots       : false,
        nav        : true,
        rtl        : rtl,
        lazyLoad   : true,
        responsive : {
            0: {
                items: 1,
                margin: 0
            },
            768:{
                items: 3,
                margin: 20
            },
            1025: {
                items: 4,
                margin: 22
            },
            1200:{
                items: 5,
                margin: 22
            }
        }
    });

    // instagram slider
    $('.instagram-section .popup-gallery').addClass('owl-carousel');
    $('.instagram-section .popup-gallery').owlCarousel({
        nav          : true,
        dots         : false,
        stagePadding : 180,
        loop         : true,
        rtl          : rtl,
        lazyLoad     : true,
        responsive   : {
            0:{
                items: 1,
                margin: 20,
                stagePadding: 60
            },
            768:{
                items: 2,
                margin: 20,
                stagePadding: 100
            },
            1025:{
                items: 4,
                margin: 20,
                stagePadding: 100
            },
            1300:{
                items: 6,
                margin: 20,
                stagePadding: 180
            }

        }
    });   

    var winWidth = $(window).width();
    if (winWidth < 1025) {
        $('#site-navigation').prepend('<div class="btn-close-menu"><span></span></div>');
        $('#site-navigation ul li.menu-item-has-children').append('<span><i class="fa fa-angle-down"></i></span>');
        $('#site-navigation ul li span').click(function() {
            $(this).prev().slideToggle();
            $(this).toggleClass('active');
        });

        $('#toggle-button').click(function() {
            $('.main-navigation').toggleClass('open');
            $('body').toggleClass('menu-open');
        });

        $('.btn-close-menu').click(function() {
            $('body').removeClass('menu-open');
            $('.main-navigation').removeClass('open');
        });

        $('.overlay').click(function() {
            $('body').removeClass('menu-open');
            $('.main-navigation').removeClass('open');
        });

        $('#toggle-button').click(function(event) {
            event.stopPropagation();
        });

        $('#site-navigation').click(function(event) {
            event.stopPropagation();
        });
    }
    
     //Header Search form show/hide
     $('.site-header .nav-holder .form-holder').prepend('<div class="btn-close-form"><span></span></div>');

     $('.site-header .form-section').click(function(event) {
        event.stopPropagation();
    });
     $("#btn-search").click(function() {
        $(".site-header .form-holder").show("fast");
        $('body').addClass('search-active');
    });

     $('.btn-close-form').click(function(){
        $('.site-header .nav-holder .form-holder').hide("fast");
        $('body').removeClass('search-active');
    });
     
     //Ajax for Add to Cart
     $('.btn-simple').click(function() {    	
       $(this).addClass('adding-cart');
       var product_id = $(this).attr('id');

       $.ajax ({
          url     : blossom_fashion_data.ajax_url,  
          type    : 'POST',
          data    : 'action=blossom_fashion_add_cart_single&product_id=' + product_id,    
          success : function(results){
             $('#'+product_id).replaceWith(results);
         }
     }).done(function(){
       var cart = $('#cart-'+product_id).val();
       $('.cart .number').html(cart);    	   
   });
 });

     //js for next/prev btn in single
     var headerHeight = $('.site-header').height();
     "use strict";
 
     var top = !1,
         bottom = !0;
     $(".site-header").waypoint(function(direction) {
         "down" == direction ? (bottom = !1, top || $(".single .post-navigation .nav-holder").show()) : (bottom = !0, $(".single .post-navigation .nav-holder").hide());
     }, {
         offset: -headerHeight
     }), $(".site-footer, .instagram-section, .bottom-shop-section").waypoint(function(direction) {
         "down" == direction ? (top = !0, $(".single .post-navigation .nav-holder").hide()) : (top = !1, bottom || $(".single .post-navigation .nav-holder").show());
     }, {
         offset: "100%"
     });
     
 });