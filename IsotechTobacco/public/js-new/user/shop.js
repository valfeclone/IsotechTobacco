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
        // Qty Up-Down
        // $('.detail-qty').each(function () {
        //     // var qtyval = parseInt($(this).find('.qty-val').text(), 10);
            
        //     $('.qty-up').on('click', function (event) {
        //         event.preventDefault();
        //         // qtyval = qtyval + 1;
        //         var $upBtn = $(this);
        //         $('#output-'+$upBtn.data('index')).html(function(i, qtyval) {
        //             // console.log(qtyval);
        //             qtyval = qtyval * 1 + 1;
        //             console.log(qtyval);
        //             return qtyval;
        //         });
        //         // $(this).prev().text(qtyval);
        //     });
        //     $('.qty-down').on('click', function (event) {
        //         event.preventDefault();
        //         // qtyval = qtyval - 1;
        //         qtyval--;
        //         if (qtyval > 1) {
        //             $(this).next().text(qtyval);
        //         } else {
        //             qtyval = 1;
        //             $(this).next().text(qtyval);
        //         }
        //     });
        // });

        $('.qty-up').on('click', function (event) {
            event.preventDefault();
            // qtyval = qtyval + 1;
            var $upBtn = $(this);
            var usr_id = $('#usr_id').val();
            var product_id = $upBtn.data('index');
            // var csrfToken = $upBtn.data('token');
            // console.log(csrfToken);
            // console.log(usr_id);
            var cart_id = $upBtn.data('index');
            var newQty = $('#output-'+$upBtn.data('index')).html(function(i, qtyval) {
                var getQtyVal = $('#qtyId-'+$upBtn.data('index'));
                qtyval = qtyval * 1 + 1;
                getQtyVal.val(qtyval);
                // console.log(qtyval);
                return qtyval;
            });

            var updateQty = parseInt(newQty.html());
            // $('#qtyId-'+$upBtn.data('index')).html(function(i, qtyvalForm) {
            //     // console.log(qtyvalForm);
            //     var getqtyVal = qtyvalForm.val();
            //     console.log(getqtyVal);
            //     qtyvalForm.val = qtyvalForm * 1 + 1;
            //     console.log(qtyvalForm);
            //     return qtyvalForm;
            // });
            $('#total-'+$upBtn.data('index')).html(function(i, subtotal) {
                var price = parseInt($('#price-'+$upBtn.data('index')).html());
                subtotal = parseInt(newQty.html()) * price;
                return subtotal;
            });
            $('#cart-total-'+$upBtn.data('index')).html(function(i, totalPrice) {
                var price = parseInt($('#price-'+$upBtn.data('index')).html());
                totalPrice = parseInt(totalPrice) + price;
                // console.log(totalPrice);
                return totalPrice;
            });
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });
            event.preventDefault();
            // var data = {
            //     _token: csrfToken,
            //     product_id: product_id,
            //     jumlahPesan: updateQty
            // }
            // $.ajax({
            //     type: "POST",
            //     // url: "{{ route('updateCart') }}",
            //     url: '/update-cart',
            //     // url: 'http://127.0.0.1:8000/update-cart',
            //     dataType: "json",
            //     // processData: false,
            //     contentType: "application/json; charset=utf-8",
            //     // data: data,
            //     data : {
            //         "_token" : csrfToken,
            //         "product_id": product_id,
            //         "jumlahPesan": updateQty
            //     },
            //     // data: function(data){
            //     //     console.log(data);
            //     // },
            //     success: function(data){
            //         console.log(data);
            //     },
            //     error: function(data, textStatus, errorThrown){
            //         console.log(data.responseText);
            //         console.log(textStatus);
            //         console.log(errorThrown);
            //     }
            // });

            // $('#cart-total').html(function(i, carttotal) {

            // })
            // $(this).prev().text(qtyval);
        });

        $('.qty-down').on('click', function (event) {
            event.preventDefault();
            // qtyval = qtyval - 1;
            var usr_id = $('#usr_id').val();
            // console.log(usr_id);
            // var cart_id = $upBtn.data('index');
            var $downBtn = $(this);
            var newQty = $('#output-'+$downBtn.data('index')).html(function(i, qtyval) {
                var getQtyVal = $('#qtyId-'+$downBtn.data('index'));
                // console.log(getQtyVal.val());
                if (qtyval > 1) {
                    qtyval = qtyval * 1 - 1;
                } else {
                    qtyval = 1;
                }
                getQtyVal.val(qtyval);
                return qtyval;
            });
            $('#total-'+$downBtn.data('index')).html(function(i, subtotal) {
                var price = parseInt($('#price-'+$downBtn.data('index')).html());
                subtotal = parseInt(newQty.html()) * price;
                return subtotal;
            });
            $('#cart-total-'+$downBtn.data('index')).html(function(i, totalPrice) {
                let counter = parseInt(newQty.html());
                if (counter > 1) {
                    var price = parseInt($('#price-'+$downBtn.data('index')).html());
                    totalPrice = parseInt(totalPrice) - price;
                    return totalPrice;
                } else {
                    return totalPrice;
                }
                
                // console.log(totalPrice);
                return totalPrice;
            });
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name=crsf-token]').attr('content')
            //     }
            // });
            // $.ajax({
            //     type: "PUT",
            //     url: "/",
            //     dataType: "json",
            //     data : {
            //         usr_id: usr_id,
            //         qty: newQty
            //     },
            //     success: function(data){
            //         console.log(data);
            //     }
            // })
        });

        // $('.qty-up').on('click', function() {
        //     console.log("hehe");
        //     var qtyval = parseInt($(this).find('.qty-val').data('click'));
        //     qtyval++;
        //     $(this).find('.qty-val').data('click', qtyval);
        // })

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