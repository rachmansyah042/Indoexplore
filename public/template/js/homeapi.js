    function destinasikunjungi() {

    $.ajax({
        url:'http://yippytech.com:3000/search',
        headers: {
            'Content-Type':'application/json'
        },
        method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data;
            var destinasi='';
            
                data.forEach(function(obj){
                    if (obj.id_type_trip==1) {
                destinasi+='<div class="col-sm-4 col-lg-4 col-md-4">'+
                    '<div class="thumbnail">'+
                        '<img src="'+obj.photo+'" alt="">'+
                        '<h4 class="price">Open Trip</h4>'+
                        '<div class="caption">'+
                           '<h4 class="priceright">'+obj.price+'</h4>'+
                            '<h4><a href="/destinasi/'+obj.id_trip+'">'+obj.trip_name+'</a>'+
                            '</h4>'+
                        '</div>'+
                       '<div class="buttn"> <a href="/destinasi/'+obj.id_trip+'"> Lihat detail</a> </div>'+
                    '</div>'+
                '</div>'
            }
            
        });
                $("#outputDestinasi").html(destinasi);
      }
    });
}


function outputprivatetrip() {

    $.ajax({
        url:'http://yippytech.com:3000/search',
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

 function cari() {
        var text = $('#cari').val();
        window.location.replace('/kategori?cari='+text);

    
}



outputprivatetrip();
destinasikunjungi();


