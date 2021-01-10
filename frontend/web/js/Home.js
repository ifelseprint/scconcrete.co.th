(function(namespace, $) {
    "use strict";

    var Home = function () {
        var o = this; // Create reference to this instance
        $(document).ready(function () {
            o.initialize();
        }); // Initialize app when document is ready

    };
    var p = Home.prototype;

    // =========================================================================
    // INIT
    // =========================================================================

    p.initialize = function () {
        // Init events
        this._enableEvents();
    };

    p.initializeInPjax = function() {
    };

    // =========================================================================
    // EVENTS
    // =========================================================================

    p._enableEvents = function () {
        $(".row-product").click(function(e) {
            e.preventDefault();
            $('.row-product').removeClass('active');
            $(this).addClass('active');

            var baseUrl = Web.App.baseUrl();
            var url = $(this).data('target');
            $.getJSON( url, { id: 1}).done(function( json ) {
                $('.product-item-name').html(json.response.product_name);
                // $('.product-item-image').attr('src',baseUrl+'/uploads/'+json.response.product_image_path+'/'+json.response.product_image);
                $('.product-item-detail').html(json.response.product_detail);
            });
            return false;
        });
    };

    // =========================================================================
    // DEFINE NAMESPACE
    // =========================================================================
    namespace.Home = new Home;
}(this.Web, jQuery)); // pass in (namespace, jQuery):