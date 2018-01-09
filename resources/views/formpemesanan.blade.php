@extends('headerreg')
@section('formpemesanan')

<<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Indoexplore! </title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/template/css/creative.css') }}" rel="stylesheet">

    <link href="{{ asset('/template/cssReg/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/template/cssReg/css-extends.css') }}" rel="stylesheet">
    <link href="{{ asset('/template/cssReg/register.css') }}" rel="stylesheet">

</head>

<body>

<div class="container">
    	<div class="row">

		<div class="row">
			<div class="text-center">
			<a href="{{ url('homeupdate') }}"> <h1 class="headingexp"> Indoexplore </h1> </a>
		    </div>	
		</div>
		<br> <br> <br>
		   <div class="row">
			<div class="col-md-12">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6 col-md-offset-3">
								<a href="#" class="active" id="register-form-link">Pemesanan</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
					
					<div class="form-horizontal form-label-left" method="post" role="form">
                      <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="namatravel">Nama Trip</label>  
                          <div class="col-md-4">
                          <h5 id="namatrip"></h5>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="slogan">Harga yang harus dibayar</label>  
                          <div class="col-md-4">
                          <h5 id=harga></h5>
                        </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="deskripsi">Nama Peserta</label>
                          <div class="col-md-4">
                          <h5 id=peserta></h5>
                          </div>
                        </div>

                        <!-- File Button --> 
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="ktp">Metode Pembayaran</label>
                          <div class="col-md-4">
                            <h5 id="bayar"></h5>
                          </div>
                        </div>

                        <div class="col-md-4 col-md-offset-4">
                           <h4>Kirim ke No Rekening Bank Mandiri 101.00.98300.997</h4>
                        </div>

                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" onclick="historybooking()" class="btn btn-success" > Bayar </button>
                        </div>
                      </div>

                        </fieldset>
                      </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script src="{{ asset('/template/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    

    <!-- Theme JavaScript -->
    <script src="{{ asset ('/template/js/creative.min.js') }}"></script>



</body>


</html>

@endsection

@section('js')
<script type="text/javascript">

   var url = new URL(window.location.href);
  var id = url.searchParams.get("id");
  var user_id = url.searchParams.get("user_id");
  var namatrip = url.searchParams.get("namatrip");
  var peserta = url.searchParams.get("peserta");
  var user_id = url.searchParams.get("user_id");
  var metodeBayar = url.searchParams.get("metodeBayar");
  var total = url.searchParams.get("total");

if (metodeBayar==1) {
  $("#bayar").text("Transfer Bank");
} else if (metodeBayar==2) {
  $("#bayar").text("Kartu Kredit");
}

$("#namatrip").text(namatrip);
$("#harga").text(total);
$("#peserta").text(peserta);

function historybooking () {
  window.location.replace('/history?id='+id+'&namatrip='+namatrip);
}

</script>
@endsection