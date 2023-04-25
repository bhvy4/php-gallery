$(document).ready(function () {
    let value = $('input[name="password"]').val();
    // console.log(value);
    $.validator.addMethod("pwcheck", function (value) {
        return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) && /[a-z]/.test(value) && /\d/.test(value) && /[A-Z]/.test(value);
    });



    let userName = $('input[name="username"]').val();
    // console.log(userName);
    $.validator.addMethod("userCheck", userName => {
        return /^[a-z ,.'-]+$/i.test(userName);
    })

    $('#loginForm').validate({
        rules: {
            
            'password': {
                pwcheck: true
            },
            'username': {
                userCheck: true
            }
        },
        messages: {
            password: {
                pwcheck: "Need atleast one uppercase, lowercase, number and a special character"
            },
            username: {
                userCheck: "Please enter valid Name"
            }
        }
    });

    $('#loginForm').submit((e) => {
        e.preventDefault();
        // let $form = $(this); 
        // console.log('after form'); 
        // console.log('after form 3'); 
        let frm = $('#loginForm')[0];
        if (!$('#loginForm').valid()) return false;
        let data = new FormData(frm);

        // for (var pair of data.entries()) {
        //     console.log(pair[0] + ', ' + pair[1]);
        // }
        // return;
        $.ajax({
            url: "src/userLogin.php",
            type: "post",
            data: data,
            contentType: false,
            processData: false,
            success: (data) => {
                let response = data;
                console.log(response);
                window.location.href = 'index.php';
                
            }
        })
    })
})