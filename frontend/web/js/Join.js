(function(namespace, $) {
    "use strict";

    var Join = function () {
        var o = this; // Create reference to this instance
        $(document).ready(function () {
            o.initialize();
        }); // Initialize app when document is ready

    };
    var p = Join.prototype;

    // =========================================================================
    // INIT
    // =========================================================================

    p.initialize = function () {
        // Init events
        this._enableEvents();
    };

    p.initializeInPjax = function() {
        this._enableEventsPjax();
    };

    // =========================================================================
    // EVENTS
    // =========================================================================
    p._enableEvents = function () {

        $(".row-join").click(function(e) {
            e.preventDefault();
            $('.row-join').removeClass('active');
            $(this).addClass('active');

            var baseUrl = Web.App.baseUrl();
            var url = $(this).data('target');

            $.ajax({
                type: 'GET',
                url: url,
                data: {id: '1'},
                dataType: 'json',
                success: function (data) {

                    $('.join-description-content').html('');
                    var html = data.response.jobs_content;
                    var link = data.response.jobs_link;
                    $(html).hide().appendTo('.join-description-content').fadeIn(1000);
                    $('.btn-join').attr('href',link);
                }
            });
            return false;
        });
    };

    p._enableEventsPjax = function () {

        $(".owl-carousel").owlCarousel({

            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
         
        });

        $('.datepicker').daterangepicker({
          singleDatePicker: true,
          autoUpdateInput: false,
          locale: {
              "format": "DD/MM/YYYY",
              "separator": " - ",
              "applyLabel": "Apply",
              "cancelLabel": "Cancel",
              "fromLabel": "From",
              "toLabel": "To",
              "customRangeLabel": "Custom",
              "weekLabel": "W",
              "firstDay": 1
          },
          maxDate: new Date(),
          drops: "up",
          showDropdowns: true,
        },function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
        $('.datepicker').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('DD/MM/YYYY'));
        });
        $('.datepicker').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    };

    // =========================================================================
    // DEFINE NAMESPACE
    // =========================================================================
    namespace.Join = new Join;
}(this.Web, jQuery)); // pass in (namespace, jQuery):