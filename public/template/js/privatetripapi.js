function outputprivatetrip() {

    $.ajax({
        url:'http://yippytech.com:3000/home',
        headers: {
            'Content-Type':'application/json'
        },
        method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data;
            var destinasi='';
            data.forEach(function(obj){
                if (obj.id_type_trip==2) { 
                destinasi+='<div class="col-sm-4 col-lg-4 col-md-4">'+
                    '<div class="thumbnail">'+
                        '<img src="'+obj.photo+'" alt="">'+
                        '<div class="caption">'+
                           '<h4 class="price">Private Trip</h4>'+
                           '<h4 class="priceright">'+obj.price+'</h4>'+
                            '<h4><a href="#">'+obj.trip_name+'</a>'+
                            '</h4>'+
                        '</div>'+
                       '<div class="buttn"> <a href="/destinasi/'+obj.id_trip+'"> Lihat detail</a> </div>'+
                    '</div>'+
                '</div>'
                }
            });
            $("#outputprivat").html(destinasi);
        }
    });
}



outputprivatetrip();
