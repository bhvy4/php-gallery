$(function(){
    $('#addContest').click(e=>{
        $.ajax({
            type:'get',
            url: "inc/add-contest-page.php",
            success: function(data){
                // console.log(data);
                $('section.content').html(data);
            }
        })
    })

    $('#viewContest').click(e=>{
        $.ajax({
            type:'get',
            url: "inc/view-contest-page.php",
            success: function(data){
                // console.log(data);
                $('section.content').html(data);
            }
        })
    })

    $('.edit-contest').click((e)=>{
        let row = $(e.currentTarget).parent().parent();
        let id = row.attr('id');
        console.log(id); 
        $.ajax({
            type:'post',
            url:'inc/update-contest-page.php',
            data :{
                id
            },
            success:(response)=>{
                $('section.content').html(response);
                console.log('edit button of table is clicked');
                // console.log(response);
            }
        })
    })

    $('#addCategory').click(e=>{
        $.ajax({
            type:'get',
            url: "inc/add-category-page.php",
            success: function(data){
                // console.log(data);
                $('section.content').html(data);
            }
        })
    })

    $('#viewCategory').click(e=>{
        $.ajax({
            type:'get',
            url: "inc/view-category-page.php",
            success: function(data){
                // console.log(data);
                $('section.content').html(data);
            }
        })
    })

    $('.edit-category').click((e)=>{
        let row = $(e.currentTarget).parent().parent();
        let id = row.attr('id');
        console.log(id); 
        $.ajax({
            type:'post',
            url:'inc/update-category-page.php',
            data :{
                id
            },
            success:(response)=>{
                $('section.content').html(response);
                console.log('edit button of table is clicked');
                // console.log(response);
            }
        })
    })
})
