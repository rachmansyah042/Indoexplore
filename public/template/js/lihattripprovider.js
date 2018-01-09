var url = new URL(window.location.href);
 var id = url.searchParams.get("id");
console.log(id);

var token = localStorage.getItem('token');
  if (!token) {window.location.replace("/login");}
  function parseJwt (token) {
            var base64Url = token.split('.')[1];
            var base64 = base64Url.replace('-', '+').replace('_', '/');
            return JSON.parse(window.atob(base64));
        };
  var decode = parseJwt(token);
  if (decode.role!=2) {window.location.replace("/login");}
  var jwt = 'Bearer ' + token;


  function getnamadestinasi(){
    $.ajax({
          url:'http://yippytech.com:3000/destinasi/get/'+id,
          headers: {
              'Content-Type':'application/json',
              'Authorization': jwt
          },
          method: 'GET',
          success:function(response) {
            console.log(response);
            var data  = response.data[0];
                        var destinasi='';
                            destinasi+='<div class="col-lg-12">'+
                '<h1 class="page-header text-center">'+data.trip_name+'</h1>'+
                '</div>'
                  
                        $("#namadestinasi").html(destinasi);  
        }
    });
}

function getdetailaktifitas() {

    $.ajax({
          url:'http://yippytech.com:3000/destinasi/get/'+id,
          headers: {
              'Content-Type':'application/json',
              'Authorization': jwt
          },
          method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data[0];
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

function getdeskripsitrip() {

$.ajax({
          url:'http://yippytech.com:3000/destinasi/get/'+id,
          headers: {
              'Content-Type':'application/json',
              'Authorization': jwt
          },
          method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data[0];
            var destinasi='';
                destinasi+='<p>'+data.description+'</p>'
            $("#deskripsitrip").html(destinasi);  
        }
    });
}

function getpoinpenting() {

    $.ajax({
          url:'http://yippytech.com:3000/destinasi/get/'+id,
          headers: {
              'Content-Type':'application/json',
              'Authorization': jwt
          },
          method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data[0];
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

function convertDate(inputFormat) {
  function pad(s) { return (s < 10) ? '0' + s : s; }
  var d = new Date(inputFormat);
  return [pad(d.getDate()), pad(d.getMonth()+1), d.getFullYear()].join('/');
}

function getsudahtermasuk() {

$.ajax({
          url:'http://yippytech.com:3000/destinasi/get/'+id,
          headers: {
              'Content-Type':'application/json',
              'Authorization': jwt
          },
          method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data[0];
            var destinasi='';
                destinasi+='<p>'+data.include_needs.replace(/\n/g,"<br>")+'</p>'
            $("#sudahtermasuk").html(destinasi);  
        }
    });
}

function gettidaktermasuk() {

$.ajax({
          url:'http://yippytech.com:3000/destinasi/get/'+id,
          headers: {
              'Content-Type':'application/json',
              'Authorization': jwt
          },
          method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data[0];
            var destinasi='';
             destinasi+='<p>'+data.exclude_needs+'</p>'
            $("#tidaktermasuk").html(destinasi);
        }
    });
}



getnamadestinasi();
getdetailaktifitas();
getdeskripsitrip();
getpoinpenting();
getsudahtermasuk();
gettidaktermasuk();