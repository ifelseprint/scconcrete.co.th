(function(namespace, $) {
    "use strict";

    var Login = function() {
        // Create reference to this instance
        var o = this;
        // Initialize app when document is ready
        $(document).ready(function() {
            o.initialize();
        });

    };
    var p = Login.prototype;

    // =========================================================================
    // INIT
    // =========================================================================

    p.initialize = function () {
 
 
    };
    p.initializeInPjax = function() {
        this._eventLogin();
    };
    // =========================================================================
    // EVENTS
    // =========================================================================



    // =========================================================================
    // EVENT GOBAL MODAL
    // =========================================================================
    p._eventLogin = function(){

        $('.select2').select2({
            width: '100%'
        });

        $("input,select").change(function() {
            if ($(this).attr('required') == 'required') {
                var form = $('#formLogin');
                form.validate({
                    errorElement: 'div',
                    errorPlacement: function (error, element) {
                        error.addClass('invalid-feedback');
                        if(element.attr('type')=='checkbox'){
                            element.parent().next().append(error);
                        }else{
                            element.next().append(error);
                        }
                    },
                    highlight: function (element, errorClass, validClass) {
                        $(element).addClass('is-invalid');
                    },
                    unhighlight: function (element, errorClass, validClass) {
                        $(element).removeClass('is-invalid');
                    }
                });

                if(form.valid()){ }
            }
        });

        $('.submit-login').click(function (e){

            var form = $('#formLogin');
            form.validate({
                errorElement: 'div',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    if(element.attr('type')=='checkbox'){
                        element.parent().next().append(error);
                    }else{
                        element.next().append(error);
                    }
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
            
            if(form.valid()) {
                $('.submit-login').attr('disabled','disabled').find("i").removeClass('fas fa-lock').addClass('fa fa-spin fa-spinner');
                $('#loadingOverlay').show();
                $.ajax({
                    url    : form.attr('action'),
                    type   : form.attr('method'),
                    data   : form.serialize(),
                    success: function (response) 
                    {
                        var dataJson = $.parseJSON(response);

                        $('#msg-error').html(dataJson.result);
                        $('.submit-login').removeAttr('disabled').find("i").removeClass('fa fa-spin fa-spinner').addClass('fas fa-lock');
                        $('#loadingOverlay').hide();
                    },
                    error  : function () 
                    {
                        console.log('internal server error');
                    }
                });
            }
        });

    };
    // =========================================================================
    // Public function
    // =========================================================================

    // =========================================================================
    namespace.Login = new Login;
}(this.appWebsite, jQuery)); // pass in (namespace, jQuery):