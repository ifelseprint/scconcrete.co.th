(function ($) {
	"use strict";

	var App = function () {
		var o = this; // Create reference to this instance
		$(document).ready(function () {
			o.initialize();
		}); // Initialize app when document is ready

	};
	var p = App.prototype;

	// =========================================================================
	// INIT
	// =========================================================================

	p.initialize = function () {
		// Init events
		this._eventModalView();
		this._enableEvents();
	};

	p.initializeInPjax = function() {

        this._enableEvents();
	};

	// =========================================================================
	// EVENTS
	// =========================================================================

	p._enableEvents = function () {
		
		$("#pjax-grid").on("pjax:start", function() {
	      $('#loadingOverlay').show();
	    });
	    $("#pjax-grid").on("pjax:end", function() {
	      $('#loadingOverlay').hide();
	    });
	};

	// =========================================================================
	// EVENT GOBAL MODAL
	// =========================================================================
    p._eventModalView = function () {
        $(".btn-modal-view").click(function() {
            $('#loadingOverlay').show();
            $('#modal-view')
                .find('#modal-content-view')
                .load($(this).attr('value'),function () {
                	
                    $('#modal-view').modal('show');
                    $('#loadingOverlay').hide();
            });
        });
    };
    p.baseUrl = function(){
    	var getUrl = window.location;
        var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
    	return baseUrl;
    }
	// =========================================================================
	// DEFINE NAMESPACE
	// =========================================================================

	window.Web = window.Web || {};
	window.Web.App = new App;
}(jQuery)); // pass in (jQuery):
