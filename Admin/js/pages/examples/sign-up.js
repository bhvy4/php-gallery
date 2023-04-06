$(function () {

    let value = $('input[name="password"]').val();
    // console.log(value);
    $.validator.addMethod("pwcheck", function (value) {
        return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) && /[a-z]/.test(value) && /\d/.test(value) && /[A-Z]/.test(value);
    });



    let userName = $('input[name="namesurname"]').val();
    // console.log(userName);
    $.validator.addMethod("userCheck", userName => {
        return /^[a-z ,.'-]+$/i.test(userName);
    })

    let phoneNo = $('input[name="phone[]"]').val();

    $.validator.addMethod('phoneCheck', phoneNo => {
        return /^(\+\d{1,3}[- ]?)?\d{10}$/.test(phoneNo);
    })

    $('#signupForm').validate({
        rules: {
            'terms': {
                required: true
            },
            'confirm': {
                equalTo: '[name="password"]'
            },
            'password': {
                pwcheck: true
            },
            'namesurname': {
                userCheck: true
            },
            'phone[]': {
                phoneCheck: true
            }
        },
        messages: {
            password: {
                pwcheck: "Need atleast one uppercase, lowercase, number and a special character"
            },
            namesurname: {
                userCheck: "Please enter valid Name"
            },
            'phone[]': {
                phoneCheck: "Enter Phone number in correct format"
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

    $('#signupForm').submit((e) => {
        e.preventDefault();
        // let $form = $(this); 
        // console.log('after form'); 
        // console.log('after form 3'); 
        let frm = $('#signupForm')[0];
        if (!$('#signupForm').valid()) return false;
        let data = new FormData(frm);

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
                frm.reset();
                $('#profileImg').css("display", "none");
            }
        })
    })

    $('#addPhone').click(()=> {
        const el = document.createElement('div');
        el.id = 'phoneDiv';
        // el.style = 'display:inline';
        // el.classList.add('form-line');
        
        const newPhn = document.createElement('input');
        newPhn.type = 'tel';
        newPhn.name = 'phone[]';
        newPhn.placeholder="Phone Number";
        newPhn.className += 'form-control';
        el.appendChild(newPhn);
        const closeBtn = document.createElement('button');
        closeBtn.className += "btn btn-default btn-circle waves-effect waves-circle waves-float";
        const closeIcon = document.createElement('i');
        closeIcon.className += "material-icons";
        let txt = document.createTextNode('remove');
        closeIcon.appendChild(txt);
        closeBtn.appendChild(closeIcon);
        el.appendChild(closeBtn);
        closeBtn.addEventListener('click',e=>{
            e.currentTarget.parentNode.remove(); 
        })
        // console.log(el);
        document.getElementById('phoneContainer').appendChild(el);
    })

    
});
