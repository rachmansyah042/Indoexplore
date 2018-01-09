var params = window.location.pathname;
var id = params.split('/');
id = id[2];
var namatrip;
var id_travel;
function header() {

    $.ajax({
        url:'http://yippytech.com:3000/home/trip/'+id,
        headers: {
            'Content-Type':'application/json'
        },
        method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data;
            var destinasi='';
                destinasi+='<div class="item">'+
      '<img src="'+data.photo+'" class="half" alt="">'+
      '</div>'  
            $("#headerdestinasi").html(destinasi);  
        }
    });
}

    function namadestinasi() {


    $.ajax({
        url:'http://yippytech.com:3000/home/trip/'+id,
        headers: {
            'Content-Type':'application/json'
        },
        method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data;
            var destinasi='';
                destinasi+='<div class="col-lg-12">'+
                '<h1 class="page-header text-center">'+data.trip_name+'</h1>'+
                '</div>'  
            $("#namadestinasi").html(destinasi);  
            namatrip = data.trip_name;
            id_travel = data.id_travel;
        }
    });
}


function mediaslider() {


    $.ajax({
        url:'http://yippytech.com:3000/home/trip/'+id,
        headers: {
            'Content-Type':'application/json'
        },
        method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data;
            var destinasi='';
                destinasi+='<div class="col-sm-3 col-xs-6">'+
                '<a href="#x"><img src="'+data.photo+'" alt="Image" class="img-responsive"></a>'+
            '</div>'
            $("#mediaslider").html(destinasi);  
        }
    });
}

function detailaktifitas() {


    $.ajax({
        url:'http://yippytech.com:3000/home/trip/'+id,
        headers: {
            'Content-Type':'application/json'
        },
        method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data;
            var destinasi='';

            var hour = JSON.parse(data.hour_activity);
            var detail = JSON.parse(data.detail_activity);
            console.log(hour.length);
            destinasi+='<div class="table-responsive">';
            for(var i=1;i<=hour.length;i++){      
                destinasi+='<h4> Hari '+i+'</h4>'+
                  '<table class="table table-striped">'+
                    '<thead>'+
                        '<tr>'+
                            '<th>Jam</th>'+
                            '<th>Aktivitas</th>'+
                        '</tr>'+
                    '</thead>'+
                    '<tbody>';
                for(var j=0;j<hour[i-1].length;j++){
                    destinasi+='<tr>'+
                            '<td>'+hour[i-1][j]+'</td>'+
                            '<td>'+detail[i-1][j]+'</td>'+
                        '</tr>';
                }
                destinasi+='</tbody>'+
                        '</table>';
            } 
                destinasi+='</div>';

            $("#detailaktifitas").html(destinasi);  
        }
    });
}

function deskripsitrip() {


    $.ajax({
        url:'http://yippytech.com:3000/home/trip/'+id,
        headers: {
            'Content-Type':'application/json'
        },
        method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data;
            var destinasi='';
                destinasi+='<p>'+data.description+'</p>'
            $("#deskripsitrip").html(destinasi);  
        }
    });
}

function poinpenting() {


    $.ajax({
        url:'http://yippytech.com:3000/home/trip/'+id,
        headers: {
            'Content-Type':'application/json'
        },
        method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data;
            var destinasi='';
                destinasi+='<p> <strong>Tanggal Keberangkatan :</strong>'+convertDate(data.start_date.slice(0,10))+'</p>'+
                '<p> <strong>Tanggal Kepulangan :</strong> '+convertDate(data.finish_date.slice(0,10))+'</p>'+
                '<p> <strong>Lokasi :</strong>'+data.location+'</p>'+
                '<p> <strong>Kuota :</strong>'+data.quota+' orang</p>'+
                '<p> <strong>Harga perorang :</strong>Rp '+data.price+'</p>'
            $("#poinpenting").html(destinasi);  
        }
    });
}

function sudahtermasuk() {


    $.ajax({
        url:'http://yippytech.com:3000/home/trip/'+id,
        headers: {
            'Content-Type':'application/json'
        },
        method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data;
            var destinasi='';
                destinasi+='<p>'+data.include_needs.replace(/\n/g,"<br>")+'</p>'
            $("#sudahtermasuk").html(destinasi);  
        }
    });
}

function tidaktermasuk() {


    $.ajax({
        url:'http://yippytech.com:3000/home/trip/'+id,
        headers: {
            'Content-Type':'application/json'
        },
        method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data;
            var destinasi='';
             destinasi+='<p>'+data.exclude_needs+'</p>'
            $("#tidaktermasuk").html(destinasi);
        }
    });
}

function pemesanan() {


    $.ajax({
        url:'http://yippytech.com:3000/home/trip/'+id,
        headers: {
            'Content-Type':'application/json'
        },
        method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data;
            var destinasi='';
             destinasi+='<td class="text-right">'+data.price+'</td>'
             
            $("#hargapemesanan").html(destinasi);
            harga = $('#hargapemesanan').text();
harga = parseInt(harga);
$('.totalpayment').text(harga);
total_payment=harga;
        }

    });
}

function kalender () {
    var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("datepicker").setAttribute("min", today);
}

function convertDate(inputFormat) {
  function pad(s) { return (s < 10) ? '0' + s : s; }
  var d = new Date(inputFormat);
  return [pad(d.getDate()), pad(d.getMonth()+1), d.getFullYear()].join('/');
}



  function formpemesanan() {
    var token = localStorage.getItem('token');
    if (!token) {window.location.replace("/login");}
    var decode = parseJwt(token);
    var peserta = $('#peserta').val();
    var user_id = decode.user_id;
    var participant = peserta.split(',');

    var metodeBayar =$('input[name=metodebayar]:checked').val();
    
    $.ajax({
        url:'http://yippytech.com:3000/booking/register',
        headers: {
            'Content-Type':'application/json',
            'Authorization':'Bearer '+token
        },
        method: 'POST',
        dataType:'json',
        data: JSON.stringify({
            id_travel:id_travel, 
            id_trip:id, 
            number_of_participants:participant.length,
            name_participant:JSON.stringify(participant),
            age_participant:20,
            id_payment_method:metodeBayar
        }),
        success:function(response) {
            console.log(response); 
            if (response.status==200) {
                window.location.replace('/formpemesanan?id='+id+'&user_id='+user_id +'&namatrip='+namatrip +'&peserta='+peserta +'&metodeBayar='+ metodeBayar+'&total='+total_payment);
            } 
            else alert(response.message);
        }
    });
    
  }


function ulasan() {
    var token = localStorage.getItem('token');
    $.ajax({
        url:'http://yippytech.com:3000/home/review/'+id,
        headers: {
            'Content-Type':'application/json',
            'Authorization':'Bearer '+token
        },
        method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data;
            var ulasan='';
            data.forEach(function(obj){
             ulasan+='<tr>'+
                '<td><img src="http://via.placeholder.com/50x50?text=A" /></td>'+
                '<td>'+obj.content+'</td>'+
                '<td>15:20</td>'+
              '</tr>'
             });
            $("#ulasan").html(ulasan);
        }

    });

}

function parseJwt (token) {
    var base64Url = token.split('.')[1];
    var base64 = base64Url.replace('-', '+').replace('_', '/');
    return JSON.parse(window.atob(base64));
};

function kirimUlasan(){
    var token = localStorage.getItem('token');
    if (!token) {window.location.replace("/login");}
    var decode = parseJwt(token);
    var user_id = decode.user_id; console.log(user_id);
    $.ajax({
        url:'http://yippytech.com:3000/booking/review',
        headers: {
            'Content-Type':'application/json',
            'Authorization':'Bearer '+token
        },
        dataType:'json',
        data: JSON.stringify({
            content:$('#form_ulasan').val(),
            id_trip:id,
            user_id:user_id
        }),
        method: 'POST',
        success:function(response) {
            ulasan();
        }

    });
}

ulasan();
namadestinasi();
mediaslider();
detailaktifitas();
deskripsitrip();
poinpenting();
sudahtermasuk();
tidaktermasuk();
pemesanan();
header();
kalender();
tanggalpemesanan();