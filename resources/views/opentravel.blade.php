@extends('headerreg')
@section('opentravel')

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
								<a href="#" class="active" id="register-form-link">Open Travel</a>
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
                          <label class="col-md-4 control-label" for="namatravel">Nama Travel</label>  
                          <div class="col-md-4">
                          <input id="namatravel" name="namatravel" type="text" placeholder="Nama Travel" class="form-control" >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="slogan">Slogan</label>  
                          <div class="col-md-4">
                          <input id="slogan" name="slogan" type="text" placeholder="Slogan" class="form-control">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="deskripsi">Deskripsi</label>  
                          <div class="col-md-4">
                          <input id="deskripsi" name="deskripsi" type="text" placeholder="Deskripsi" class="form-control">
                          </div>
                        </div>

                        <!-- File Button --> 
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="ktp">Foto KTP</label>
                          <div class="col-md-4">
                            <input id="ktp" name="ktp" class="input-file" type="file">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="logo">Logo Travel</label>
                          <div class="col-md-4">
                            <input id="logo" name="logo" class="input-file" type="file">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="kontak">Nomor Telepon</label>  
                          <div class="col-md-4">
                          <input id="kontak" name="price" type="text" placeholder="Nomor Telepon" class="form-control input-md">
                          </div>
                        </div>

                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button type="submit" onclick="opentravel()" class="btn btn-success">Submit</button>
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
  var base64Image = "";

function readFile() {
  
  if (this.files && this.files[0]) {
    
    var FR= new FileReader();
    
    FR.addEventListener("load", function(e) {
      base64Image = e.target.result.split(',')[1];
    }); 
    
    FR.readAsDataURL( this.files[0] );
  }
}

document.getElementById("ktp").addEventListener("change", readFile);
document.getElementById("logo").addEventListener("change", readFile);

  
  var token = localStorage.getItem('token');
  if (!token) {window.location.replace("/login");}
  function parseJwt (token) {
            var base64Url = token.split('.')[1];
            var base64 = base64Url.replace('-', '+').replace('_', '/');
            return JSON.parse(window.atob(base64));
        };
  var decode = parseJwt(token);
  var jwt = 'Bearer ' + token;

function opentravel(){
 
    $.ajax({
          url:'http://yippytech.com:3000/provider/register',
          headers: {
              'Content-Type':'application/json',
              'Authorization': jwt
          },
          method: 'POST',
            dataType:'json',
            data: JSON.stringify({
              name_travel:$('#namatravel').val(), 
              slogan:$('#slogan').val(),
              deskripsi:$('#deskripsi').val(),
              contact_phone:$('#kontak').val(),
              id_user:$('#id_user').val(),
              ktp:$('#ktp').val(),
              photo:$('#logo').val(),
            }),
          success:function(response) {
            console.log(response);  
            if (response.status==200)  {
              window.location.replace("/login")
            }
            alert(response.message);
        },
        error: function (error) {
                  console.log(error);
              }
    });
}

</script>
@endsection