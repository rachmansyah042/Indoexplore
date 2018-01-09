function review() {

    $.ajax({
        url:'http://yippytech.com:3000/booking/review',
        headers: {
            'Content-Type':'application/json'
        },
        method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data;
            var destinasi='';
                destinasi+='<table class="table">'+
              '<tr>'+
                '<td><img src="http://via.placeholder.com/50x50?text=A" /></td>'+
                '<td>Guide wisatanya seru, jadi ingin berkunjung lagi kesini</td>'+
                '<td>15:20</td>'+
              '</tr>'+

              '<tr>'+
                '<td><img src="http://via.placeholder.com/50x50?text=B" /></td>'+
                '<td>Pas kesana agak sedikit ngaret, tapi overall aku puas</td>'+
                '<td>15:20</td>'+
              '</tr>'+

            '</table>'
            $("#reviewoutput").html(destinasi);  
        }
    });
}

review();