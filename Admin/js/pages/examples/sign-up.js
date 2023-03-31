$(function () {

    let value = $('input[name=password]').val();
    // console.log(value);
    $.validator.addMethod("pwcheck", function (value) {
        return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) && /[a-z]/.test(value) && /\d/.test(value) && /[A-Z]/.test(value);
    });

    $('#sign_up').validate({
        rules: {
            'terms': {
                required: true
            },
            'confirm': {
                equalTo: '[name="password"]'
            },
            'password': {
                pwcheck: true
            }
        },
        messages: {
            password: {
                pwcheck: "Need atleast one uppercase, lowercase, number and a special character"
            }
        },
        highlight: function (input) {
            // console.log(input);
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.input-group').append(error);
            $(element).parents('.form-group').append(error);
        }
    });

});

$('#signupForm').submit((e) => {
    e.preventDefault();
    // let $form = $(this); 
    // console.log('after form'); 
    // if (!$form.valid()) return false;
    // console.log('after form 3'); 
    // let form = ;
    let data = new FormData($('#signupForm')[0]);

    for (var pair of data.entries()) {
        console.log(pair[0] + ', ' + pair[1]);
    }
    $.ajax({
        url: "src/userSignUp.php",
        type: "post",
        data: data,
        contentType: false,
        processData: false,
        success: (data) => {
            let response = data;
            console.log(response);
            $('#alert').append(response).delay(2000).fadeOut();;
        }
    })
})