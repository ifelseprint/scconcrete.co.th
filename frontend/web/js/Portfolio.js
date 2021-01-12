(function(namespace, $) {
    "use strict";

    var Portfolio = function () {
        var o = this; // Create reference to this instance
        $(document).ready(function () {
            o.initialize();
        }); // Initialize app when document is ready

    };
    var p = Portfolio.prototype;

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
        $(".row-portfolio").click(function(e) {
            e.preventDefault();
            $('.row-portfolio').removeClass('active');
            $(this).addClass('active');

            var baseUrl = Web.App.baseUrl();
            var url = $(this).data('target');

            $.ajax({
                type: 'GET',
                url: url,
                data: {id: '1'},
                dataType: 'json',
                success: function (data) {

                    $('.portfolio-block .container .row').html('');
                    $.each(data.response, function (k, v) {

                        var html = '<div class="col-md-4">';
                        html += '<div class="portfolio-box">';
                        html += '<div class="portfolio-image">';
                        html += '<img src="../../uploads/'+v.portfolio_detail_image_path+'/'+v.portfolio_detail_image+'" width="100%">';
                        html += '</div>';
                        html += '<div class="portfolio-title">';
                        html += v.portfolio_detail_content;
                        html += '</div>';
                        html += '</div>';
                        html += '</div>';

                        $(html).hide().appendTo('.portfolio-block .container .row').fadeIn(1000);

                    });
                }
            });
            return false;
        });
    };

    // =========================================================================
    // DEFINE NAMESPACE
    // =========================================================================
    namespace.Portfolio = new Portfolio;
}(this.Web, jQuery)); // pass in (namespace, jQuery):