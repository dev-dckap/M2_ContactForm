require(['jquery'], function ($) {

    $(document).ready(function () {

        $("#dckap_contactform").submit(function () {

            var valError = 0;
            $('.sr-error').hide();
            if (!$('#cf-name').val()) {
                $('.sr-error.input-name').html("Name is required and cannot be empty.")
                $('.sr-error.input-name').show();
                valError = 1;
            }else{
                var name = new RegExp('^([a-zA-Z ])+$');
                if (!name.test($('#cf-name').val())) {
                    $('.sr-error.input-name').html('This name is invalid.');
                    $('.sr-error.input-name').show();
                    valError = 1;
                }
            }
            if (!$('#cf-email').val()) {
                $('.sr-error.input-emailid').html("Email is required and cannot be empty.")
                $('.sr-error.input-emailid').show();
                valError = 1;
            } else {
                var email = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
                if (!email.test($('#cf-email').val())) {
                    $('.sr-error.input-emailid').html('This email is invalid.');
                    $('.sr-error.input-emailid').show();
                    valError = 1;
                }
            }
            if (!$('#cf-contact').val()) {
                $('.sr-error.input-contact').html("ContactNumber is required and cannot be empty.")
                $('.sr-error.input-contact').show();
                valError = 1;
            }
            if (!$('#cf-message').val()) {
                $('.sr-error.input-message').html("Comments is required and cannot be empty.")
                $('.sr-error.input-message').show();
                valError = 1;
            }
            if (valError) {
                return false;
            }

            $("div.success-alert").hide();
            $("form#dckap_contactform").hide();
            $("div.inner-wrap-img").show();

            $.ajax({

                type: "POST",
                url: $("#dc_contact_url").val(),
                data: $("#dckap_contactform").serialize(),
                success: function (data) {
                    if (data.msg == "success") {

                        $("div.inner-wrap-img").hide();
                        $("#cf-name").val('');
                        $("#cf-email").val('');
                        $("#cf-contact").val('');
                        $("#cf-message").val('');
                        $("div.success-alert").show();
                        $("form#dckap_contactform").show();

                    }
                    setTimeout(function() {
                        $("div.success-alert").hide();
                        $('.dc-contact-form').css("right", "-351px");
                    }, 4000);

                }

            });
            $("form#dckap_contactform").hide();

            return false;
        });
        $(".dc_img").click(function () {

            if ($('.dc-contact-form').css("right") == "-351px") {
                $('.dc-contact-form').css("right", "0px");
            }
            else {
                $('.dc-contact-form').css("right", "-351px");
            }

        });

    });
});
