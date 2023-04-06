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
        let author = row.find('td:nth-child(5)').text();
        let prize = row.find('td:nth-child(6)').text();

        let winner = row.find('td:nth-child(7)').text();
        let details = row.find('td:nth-child(8)').text();

        console.log(id, name, deadline, details);

        $.ajax({
            type: 'post',
            url: 'src/editContest.php',
            data: {
                id,
                name,
                deadline,
                author,
                prize,
                winner,
                details
            },
            success: response => {
                console.log(response);
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
            }
        })
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