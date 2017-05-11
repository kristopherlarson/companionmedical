;(function ($, document) {

    'use strict';

    // Setup Vars
    var el = document.getElementById('newsletter-signup'),
        $el = $(el);

    var postToMailChimp = function () {
        $.ajax({
            url: window.location.origin + "/wp-content/themes/companion/components/mailchimp/subscribe.php",
            type: "POST",
            data: {
                fname: $("#fname").val(),
                lname: $("#lname").val(),
                email: $("#email").val()
            }
        }).done(function (data) {
            $('#response').html(data);
        });
    };

    var submitNewsletter = function () {
        $('#signup').on("submit", function(e) {
            e.preventDefault();
        }).on('formvalid.zf.abide', function() {
            postToMailChimp();
        });
    };

    var bindEvents = function () {
        submitNewsletter();
    };

    // Initializer function
    var init = function () {
        if (el) {
            bindEvents();
            console.info('Initialize newsletter.');
        }
    };

    init();

})(jQuery, document);