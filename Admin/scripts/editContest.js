$(() => {


    //make the td with read-only attribute not be editable on click
   $('td[read-only]').on('click dblclick',e=>{
    e.preventDefault();
    e.stopPropagation(); 
    
   })
    

    $('#mainTable td').change((event) => {
        let row = $(event.target).parent();
        

        var id = row.attr('id');
        let name = row.find('td:nth-child(2)').text();
        let deadline = row.find('td:nth-child(3)').text();
        let category = row.find('td:nth-child(5)').text();
        let author = row.find('td:nth-child(6)').text();
        let prize = row.find('td:nth-child(7)').text();
        let winner = row.find('td:nth-child(8)').text();
        let details = row.find('td:nth-child(9)').text();
        let formType = 'update1';

        console.log(id, name, deadline, details);

        $.ajax({
            type: 'post',
            url: 'src/editContest.php',
            data: {
                id,
                name,
                deadline,
                category,
                author,
                prize,
                winner,
                details,
                formType
            },
            success: response => {
                console.log('this is response'+response);
            }
        })
    })

    $('#contest-update-form').submit(e=>{
        e.preventDefault();
        // console.log('submitted');
        let formdata = new FormData($('#contest-update-form')[0]);

        $.ajax({
            type:'post',
            url: 'src/editContest.php',
            data: formdata,
            contentType: false,
            processData: false,
            success: (response)=>{
                console.log(response);
                $('#alert-message').html(response).delay(2000).fadeOut();
                
            }
        })
    })
    $('#category-update-form').submit(e=>{
        e.preventDefault();
        // console.log('submitted');
        let formdata = new FormData($('#category-update-form')[0]);

        $.ajax({
            type:'post',
            url: 'src/editCategory.php',
            data: formdata,
            contentType: false,
            processData: false,
            success: (response)=>{
                console.log(response);
                $('#alert-message').html(response).delay(2000).fadeOut();
                
            }
        })
    })

    $('#file_input').change(e=>{
        // console.log('input  file change');
        
        $('#image_tag')[0].src=URL.createObjectURL(e.target.files[0]); 
    })
    // $('#maintable').SetEditable({
    //     columnsEd: "0,1,2,3,4,5,6",
    //     onEdit: function(columnsEd) {

    //         var id = columnsEd[0].childNodes[1].innerHTML;
    //         var name = columnsEd[0].childNodes[3].innerHTML;
    //         var deadline = columnsEd[0].childNodes[5].innerHTML;
    //         var author = columnsEd[0].childNodes[7].innerHTML;
    //         var winner = columnsEd[0].childNodes[9].innerHTML;
    //         var details = columnsEd[0].childNodes[11].innerHTML;

    //         console.log(id,name,deadline,details);
    //     }


    // })
})