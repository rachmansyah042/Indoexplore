function history() {


    $.ajax({
        url:'http://yippytech.com:3000/home/trip/',
        headers: {
            'Content-Type':'application/json'
        },
        method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data;
            var destinasi='';
                destinasi+='<div class="col-xs-6 col-md-offset-3">'+
                                '<h3>Nama Destinasi</h3>'+
                            '</div>'+
                            '<div class="col-xs-6 col-md-offset-3">'+
                            '<h4>'++'</h4>'+
                            '</div>'+
                            '<div class="col-xs-6 col-md-offset-3">'+
                                '<h3>Status Pesanan</h3>'+
                            '</div>'+
                            '<div class="col-xs-6 col-md-offset-3">'+ 
                            '<h4 class="btn btn-danger">'++'</h4>'+
                            '</div>'
            $("#historybooking").html(destinasi);  
        }
    });
}

history();