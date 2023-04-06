$(function () {
    $('#sign_in').validate({
        highlight: function (input) {
            // console.log(input);
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.input-group').append(error);
        }
    });
});

$('#sign_in').submit(e => {
    e.preventDefault();
    let form = $('#sign_in')[0];
    if (!$('#sign_in').validate()) return false;
    let data = new FormData(form);

    $.ajax({
        type: 'post',
        url: 'src/userSignIn.php',
        data: data,
        contentType: false,
        processData: false,
        success: data => {
            console.log(data);
            let msg = document.createElement('div');
            msg.className += "alert alert-success"
            msg.append(data);
            $('#alert-msg').append(msg).delay(2000).fadeOut();

            setTimeout( ()=>{
                window.location.href="index.php";
            },2000)
        }
    })
})