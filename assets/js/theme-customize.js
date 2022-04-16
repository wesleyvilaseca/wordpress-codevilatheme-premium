/**
 * Created by test on 17/03/2022.
 */
(function($){
    wp.customize('ju_header_show_search', function(val){
        val.bind(function (new_val){
            if(new_val) {
                $("#top-search").show()
            }else {
                $("#top-search").hide()
            }
        })
    });

    wp.customize('ju_header_show_cart', function(val){
        val.bind(function (new_val){
            if(new_val) {
                $("#top-cart").show()
            }else {
                $("#top-cart").hide()
            }
        })
    });
})(jQuery);