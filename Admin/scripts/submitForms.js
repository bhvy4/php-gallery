$(document).ready(() => {

    $('#contest-form').validate();
    $('#category-form').validate();

    $('#contest-form').submit(e => {
        e.preventDefault();
        // console.log('test');return false;
        if (!$(this).validate()) return false;
        let data = new FormData($('#contest-form')[0]);

        // for (var pair of data.entries()) {
        //     console.log(pair[0]+ ', ' + pair[1]); 
        // } return;
        $.ajax({
            type: 'post',
            url: 'src/addContest.php',
            data: data,
            contentType: false,
            processData: false,
            success: response => {
                console.log('inside sucess'+response);
                $('#alert-message').html(response).delay(2000).fadeOut();
                $('#contest-form')[0].reset();
            }
        })
    })

    $('#category-form').submit(e=>{
        e.preventDefault();
        if (!$(this).validate()) return false;
        let data = new FormData($('#category-form')[0]);

        $.ajax({
            type: 'post',
            url: 'src/addCategory.php',
            data: data,
            contentType: false,
            processData: false,
            success: response => {
                $('#alert-message').html(response).delay(2000).fadeOut();
                $('#category-form')[0].reset();
            }
        })
    })
})  