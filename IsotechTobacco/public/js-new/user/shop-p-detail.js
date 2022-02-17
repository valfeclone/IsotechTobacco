(function ($) {
    'use strict';
    /*Product Details*/
    var productDetails = function () {
        $('.product-image-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: false,
            asNavFor: '.slider-nav-thumbnails',
        });

        $('.slider-nav-thumbnails').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.product-image-slider',
            dots: false,
            focusOnSelect: true,
            prevArrow: '<button type="button" class="slick-prev"><i class="fi-rs-angle-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fi-rs-angle-right"></i></button>'
        });

        // Remove active class from all thumbnail slides
        $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');

        // Set active class to first thumbnail slides
        $('.slider-nav-thumbnails .slick-slide').eq(0).addClass('slick-active');

        // On before slide change match active thumbnail to current slide
        $('.product-image-slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
            var mySlideNumber = nextSlide;
            $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
            $('.slider-nav-thumbnails .slick-slide').eq(mySlideNumber).addClass('slick-active');
        });

        $('.product-image-slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
            var img = $(slick.$slides[nextSlide]).find("img");
            $('.zoomWindowContainer,.zoomContainer').remove();
            $(img).elevateZoom({
                zoomType: "inner",
                cursor: "crosshair",
                zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 750
            });
        });
        //Elevate Zoom
        if ( $(".product-image-slider").length ) {
            $('.product-image-slider .slick-active img').elevateZoom({
                zoomType: "inner",
                cursor: "crosshair",
                zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 750
            });
        }
        //Filter color/Size
        $('.list-filter').each(function () {
            $(this).find('a').on('click', function (event) {
                event.preventDefault();
                $(this).parent().siblings().removeClass('active');
                $(this).parent().toggleClass('active');
                $(this).parents('.attr-detail').find('.current-size').text($(this).text());
                $(this).parents('.attr-detail').find('.current-color').text($(this).attr('data-color'));
            });
        });

        $('.qty-up-p-detail').on('click', function (event) {
            event.preventDefault();
            var $upBtn = $(this);
            var newQty = $('#output-'+$upBtn.data('index')).html(function(i, qtyval) {
                var getQtyVal = $('#qtyId-'+$upBtn.data('index'));
                qtyval = qtyval * 1 + 1;
                getQtyVal.val(qtyval);
                console.log(qtyval);
                return qtyval;
            });

            // $('#total-'+$upBtn.data('index')).html(function(i, subtotal) {
            //     var price = parseInt($('#price-'+$upBtn.data('index')).html());
            //     subtotal = parseInt(newQty.html()) * price;
            //     return subtotal;
            // });
            // $('#cart-total-'+$upBtn.data('index')).html(function(i, totalPrice) {
            //     var price = parseInt($('#price-'+$upBtn.data('index')).html());
            //     totalPrice = parseInt(totalPrice) + price;
            //     // console.log(totalPrice);
            //     return totalPrice;
            // });
        });

        $('.qty-down-p-detail').on('click', function (event) {
            event.preventDefault();
            var $downBtn = $(this);
            var newQty = $('#output-'+$downBtn.data('index')).html(function(i, qtyval) {
                var getQtyVal = $('#qtyId-'+$downBtn.data('index'));
                if (qtyval > 1) {
                    qtyval = qtyval * 1 - 1;
                } else {
                    qtyval = 1;
                }
                getQtyVal.val(qtyval);
                return qtyval;
            });
            // $('#total-'+$downBtn.data('index')).html(function(i, subtotal) {
            //     var price = parseInt($('#price-'+$downBtn.data('index')).html());
            //     subtotal = parseInt(newQty.html()) * price;
            //     return subtotal;
            // });
            // $('#cart-total-'+$downBtn.data('index')).html(function(i, totalPrice) {
            //     let counter = parseInt(newQty.html());
            //     if (counter > 1) {
            //         var price = parseInt($('#price-'+$downBtn.data('index')).html());
            //         totalPrice = parseInt(totalPrice) - price;
            //         return totalPrice;
            //     } else {
            //         return totalPrice;
            //     }                
            //     // return totalPrice;
            // });
        });
        //Qty Up-Down
        // $('.detail-qty').each(function () {
        //     var qtyval = parseInt($(this).find('.qty-val').text(), 10);
        //     $('.qty-up').on('click', function (event) {
        //         event.preventDefault();
        //         qtyval = qtyval + 1;
        //         $(this).prev().text(qtyval);
        //     });
        //     $('.qty-down').on('click', function (event) {
        //         event.preventDefault();
        //         qtyval = qtyval - 1;
        //         if (qtyval > 1) {
        //             $(this).next().text(qtyval);
        //         } else {
        //             qtyval = 1;
        //             $(this).next().text(qtyval);
        //         }
        //     });
        // });

        $('.dropdown-menu .cart_list').on('click', function (event) {
            event.stopPropagation();
        });
    };
    /* WOW active */
    new WOW().init();

    //Load functions
    $(document).ready(function () {
        productDetails();
    });

})(jQuery);