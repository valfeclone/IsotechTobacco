(function ($) {
    'use strict';
    /*Product Details*/
    var shopingCart = function () {
        //Qty Up-Down
        $('.qty-up').on('click', function (event) {
            event.preventDefault();
            // qtyval = qtyval + 1;
            var $upBtn = $(this);
            $('#output-'+$upBtn.data('index')).html(function(i, qtyval) {
                // console.log(qtyval);
                qtyval = qtyval * 1 + 1;
                console.log(qtyval);
                return qtyval;
            });
            // $(this).prev().text(qtyval);
        });

        $('.qty-down').on('click', function (event) {
            event.preventDefault();
            // qtyval = qtyval - 1;
            var $upBtn = $(this);
            $('#output-'+$upBtn.data('index')).html(function(i, qtyval) {
                if (qtyval > 1) {
                    qtyval = qtyval * 1 - 1;
                } else {
                    qtyval = 1;
                }
                return qtyval;
            });
            qtyval--;
            if (qtyval > 1) {
                $(this).next().text(qtyval);
            } else {
                qtyval = 1;
                $(this).next().text(qtyval);
            }
        });

    };
    /* WOW active */
    new WOW().init();

    //Load functions
    $(document).ready(function () {
        shopingCart();
    });

})(jQuery);