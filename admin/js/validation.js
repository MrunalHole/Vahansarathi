$(document).ready(function () {
    $('.check_license').on("change", function (e) {
        var license = $('.check_license').val();

        $.ajax({
            type: "POST",
            url: "partials/_validation.php",
            data: {
                "check_license_btn": 1,
                "license": license,
            },

            success: function (response) {
                $('.license_error').text(response);
            }
        });
    });

    // check_vehicle
    $('.check_vehicle').on("change", function (e) {
        var vehicle = $('.check_vehicle').val();

        $.ajax({
            type: "POST",
            url: "partials/_validation.php",
            data: {
                "check_vehicle_btn": 1,
                "vehicle": vehicle,
            },

            success: function (response) {
                $('.vehicle_error').text(response);
            }
        });
    });

    // check tracker
    $('.check_tracker').on("change", function (e) {
        var tracker = $('.check_tracker').val();

        $.ajax({
            type: "POST",
            url: "partials/_validation.php",
            data: {
                "check_tracker_btn": 1,
                "tracker": tracker,
            },

            success: function (response) {
                $('.tracker_error').text(response);
            }
        });
    });



    // Email verification
    $('.email-btn').on("click", function (e) {
        var email = $('.verify-email').val();
        // document.getElementsById("email_msg").innerHTML = "Please wait! OTP is being send";
        $('.email_msg').text("Please wait! OTP is being send");
        $('.email2').val(email);

        $.ajax({
            type: "POST",
            url: "partials/_validation.php",
            data: {
                "send_otp_btn": 1,
                "email": email,
            },
            success: function (response) {
                //alert(response);
                let text1 = "Error";
                if (text1.localeCompare(response) == 0) {
                    alert("Error while sending email");
                }
                else {
                    $('.otp2').val(response);
                    $('.email_msg').text("OTP has been sent to your email successfully!");
                    $('.email_msg').css('color', 'green');
                    var x = document.getElementById("otp-div");
                    if (x.style.display === "none") {
                        x.style.display = "block";
                    }
                }
            }
        });

    });


    //otp verification
    $('.otp-btn').on("click", function (e) {
        $('.otp_msg').text("Verifying OTP....!");
        var a = $('.otp1').val();
        var b = $('.otp2').val();
        // alert(a);
        // alert(b);
        if (a.localeCompare(b) == 0) {
            $('.otp_msg').text("Verified");
            $('.otp_msg').css('color', 'green');

            var x = document.getElementById("official_details");
            if (x.style.display === "none") {
                x.style.display = "block";
            }
            var y = document.getElementById("submit");
            if (y.disabled) {
                y.disabled = false;
            }
            var otpinput = document.getElementById("otp1");
            var emailinput = document.getElementById("email");
            var emailbtn = document.getElementById("email-btn");
            var otpbtn = document.getElementById("otp-btn");
            if (emailinput.disabled == false) {
                emailinput.disabled = true;
            }
            if (otpinput.disabled == false) {
                otpinput.disabled = true;
            }
            if (emailbtn.disabled == false) {
                emailbtn.disabled = true;
            }
            if (otpbtn.disabled == false) {
                otpbtn.disabled = true;
            }


        }
        else {
            $('.otp_msg').text("Wrong OTP, Please check OTP again OR resubmit the email verification");
            $('.otp_msg').css('color', 'red');
        }


    });

});

