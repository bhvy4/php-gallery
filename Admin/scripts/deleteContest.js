$(
    $('.delete-contest').click((e)=>{
        let row = $(e.currentTarget).parent().parent();
        let id = row.attr('id');
        console.log(id); 
        $.ajax({
            type:'post',
            url:'src/deleteContest.php',
            data :{
                id
            },
            success:(response)=>{
                console.log(response);
                row.remove();
            }
        })
    })
)