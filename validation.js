
$(document).ready(function () {
    $("#name").blur(function () {
        var name = $('#name').val();
        var nameReg = /^[A-Za-z]+$/;
        if (name == "") {
            $('#uname').removeClass('hidden');
            $('#uname').text('Please give your name')
        } else if (!nameReg.test(name))

        {
            $('#uname').removeClass('hidden');
            $('#uname').text("Invalid Name...");
        } else
        {
            $('#uname').addClass('hidden');
        }
    });
    $("#password").blur(function () {
        var password = $('#password').val();

        if (password == '')

        {
            $('#pwd').removeClass('hidden');
            $('#pwd').text("Give your password...");
        } else
        {
            $('#pwd').addClass('hidden');
        }
    });

    $("#email").blur(function () {

        var mail = $('#email').val();



        var emailReg = /^[A-Za-z0-9._]*\@[A-Za-z]+\.[A-Za-z]{2,5}$/;
        if (mail == "") {
            $('#mail').removeClass('hidden');
            $('#mail').text("Give your email id");
            return false;
        } else if (!emailReg.test(mail))

        {
            $('#mail').removeClass('hidden');
            $('#mail').text("Invalid Mail ID");
            return false;
        } else
        {
            $('#mail').addClass('hidden');
        }
    });

    $("#mobile").blur(function () {
        var mobile = $('#mobile').val();



        var mobileVal = /^\d{10}$/;
        if (mobile == "") {
            $('#mob').removeClass('hidden');

            $('#mob').text("Give your Mobile Number");
            return false;
        } else if (!mobileVal.test($('#mobile').val()))

        {
            $('#mob').removeClass('hidden');

            $('#mob').text("Invalid Mobile Number");
            return false;
        } else
        {
            $('#mob').addClass('hidden');
        }
    });
    $("#dob").blur(function () {
        var dat = $('#dob').val();
        if (dat == '')

        {
            $('#dobi').removeClass('hidden');

            $('#dobi').text("select your dob");
            return false;
        } else
        {
            $('#dobi').addClass('hidden');
        }
    });

    $("#address").blur(function () {
        var address = $('#address').val();
        if (address == "")
        {
            $('#add').removeClass('hidden');
            $('#add').text("Please Give Your Address");
            return false;
        } else
        {
            $('#add').addClass('hidden');
        }

    });


    $('form').submit(function () {
        var gender = $('input[type="radio"]:checked');
        if (gender.length == "")
        {
            $('#gen').removeClass('hidden');
            $('#gen').text("Please Select Your Gender");
            return false;
        } else
        {
            $('#gen').addClass('hidden');
        }


    });
});
