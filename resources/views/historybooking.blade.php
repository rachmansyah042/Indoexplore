@extends('headerreg')
@section('history')
<body>

<div class="container">

<div class="row">
	<div class="text-center">
	<a href="{{ url('homeupdate') }}"> <h1 class="headingexp"> Indoexplore </h1> </a>
    </div>	
</div>
<br> <br> <br>
<div class="col-md-offset-2 col-md-9">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="table-container">
			<table class="table table-filter">
				

				
				<div id="history"></div>
				<!-- 	<tr>
						<td >
							<h4> x</h4>
						</td>
						<td class="col-md-4">
							<h4> x</h4>
						</td>
						<td class="col-md-4">
							<h4> x </h4>
						</td>
						<td class="col-md-4">
							 <div class="center"><button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary">Kirim Ulasan</button></div>
						</td>
					</tr> -->
				
				

			</table>			
		</div>

<!-- line modal -->
		<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
					<h3 class="modal-title" id="lineModalLabel">Ulasan</h3>
				</div>
				<div class="modal-body">
					
		            <!-- content goes here -->
		              <div class="form-group">
		                <label for="exampleInputEmail1">Ulasan Trip</label>
		                <input class="form-control" id="form_ulasan" placeholder="Kirim Ulasan">
		              </div>
		              <button type="submit" onclick ="kirimUlasan()" class="btn btn-success">Kirim</button>
		             

				</div>
			</div>
		  </div>
		</div>
 
</body>

@endsection

@section ('js')
<script type="text/javascript">
function parseJwt (token) {
    var base64Url = token.split('.')[1];
    var base64 = base64Url.replace('-', '+').replace('_', '/');
    return JSON.parse(window.atob(base64));
};



function history() {
    var token = localStorage.getItem('token');
    if (!token) {window.location.replace("/login");}
    var decode = parseJwt(token);
    var user_id = decode.user_id; console.log(user_id);

    $.ajax({
        url:'http://yippytech.com:3000/user/booking',
        headers: {
            'Content-Type':'application/json',
            'Authorization':'Bearer '+token
        },
        method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data;
            var ulasan='<thead>'+
					'<tr>'+
						'<th >'+
							'<h4> Kode</h4>'+
						'</th>'+
						'<th class="col-md-4">'+
							'<h4> Nama Destinasi</h4>'+
						'</th>'+
						'<th class="col-md-4">'+
							'<h4> Status Pemesanan </h4>'+
						'</th>'+
						'<th class="col-md-4">'+
							'<h4> Ulasan </h4>'+
						'</th>'+
					'</tr>'+
				
				'</thead>'+
				'<tbody>';
            data.forEach(function(obj){
             ulasan+='<tr>'+
						'<td >'+
							'<h4>'+obj.booking_code+'</h4>'+
						'</td>'+
						'<td class="col-md-4">'+
							'<h5>'+obj.trip_name+'</h5>'+
						'</td>'+
						'<td class="col-md-4">'+
							'<h4>'+obj.name_status_trip+'</h4>'+
						'</td>'+
						'<td class="col-md-4">';
						if (obj.id_status_trip==3) {
							ulasan+='<div class="center"><button onclick="setData('+obj.id_booking+','+obj.id_trip+')" data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary">Kirim Ulasan</button></div>';
						}
						else if (obj.id_status_trip==6) {
							ulasan+='<div class="center"><button onclick="KonfirmasiPembayaran('+obj.id_booking+','+obj.id_trip+')" class="btn btn-success">Konfirmasi pembayaran</button></div>';
						}

						ulasan+='</td>'+
					'</tr>';
             });
            ulasan+='</tbody>';
            $("#history").html(ulasan);
        }

    });

}
var idbooking;
var idtrip
function setData(id_booking, id_trip) {
	idbooking = id_booking;
	idtrip = id_trip;
}

function KonfirmasiPembayaran(id_booking,id_trip) {
	var token = localStorage.getItem('token');
    if (!token) {window.location.replace("/login");}
    var decode = parseJwt(token);
    var user_id = decode.user_id; console.log(user_id);

    $.ajax({
        url:'http://yippytech.com:3000/booking',
        headers: {
            'Content-Type':'application/json',
            'Authorization':'Bearer '+token
        },
        dataType:'json',
        data: JSON.stringify({
            id_trip:id_trip,
            id_booking:id_booking
        }),
        method: 'POST',
        success:function(response) {
        	console.log(response);
        	if (response.status==200) {
        		history();	
        	}
        	
        }
    });
}

function kirimUlasan(){
	console.log(idtrip,idbooking);
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
            id_trip:idtrip,
            id_booking:idbooking,
            rate:5
        }),
        method: 'POST',
        success:function(response) {
        	console.log(response);
        	if (response.status==200) {
        		$('#squarespaceModal').modal('hide');
        		history();
        	}
        }
    });
}


history();

</script>

@endsection