@extends('headerProvider')
@section('tambahTripProvider')


 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tambahkan Trip</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Trip </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">                 

                     <!--  <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a> -->
                      </p>
                     <!--  <span class="section">Personal Info</span> -->


                      <div id="trip-form" class="form-horizontal form-label-left" method="post" role="form">
                        <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="trip_name">Nama</label>  
                          <div class="col-md-4">
                          <input id="name" name="name" type="text" placeholder="nama" class="form-control" >
                          <small class="error-message"></small>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="quota">Kuota</label>  
                          <div class="col-md-4">
                          <input id="quota" name="quota" type="text" placeholder="kuota" class="form-control">
                          <small class="error-message"></small>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="price">Harga</label>  
                          <div class="col-md-4">
                          <input id="price" name="price" type="text" placeholder="harga" class="form-control input-md">
                          <small class="error-message"></small>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="location">Lokasi</label>  
                          <div class="col-md-4">
                          <input id="location" name="location" type="text" placeholder="Lokasi" class="form-control input-md">
                          <small class="error-message"></small>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="days">Hari</label>  
                          <div class="col-md-4">
                          <input id="days" name="days" type="text" placeholder="hari" class="form-control input-md">
                          <small class="error-message"></small>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="nights">Malam</label>  
                          <div class="col-md-4">
                          <input id="nights" name="nights" type="text" placeholder="malam" class="form-control input-md">
                          <small class="error-message"></small>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="start_date">Tanggal Keberangkatan</label>  
                          <div class="col-md-4">
                          <input id="start_date" name="start_date" type="date" class="form-control input-md">
                          <small class="error-message"></small>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="finish_date">Tanggal Kepulangan</label>  
                          <div class="col-md-4">
                          <input id="finish_date" name="finish_date" type="date" class="form-control input-md">
                          <small class="error-message"></small>
                          </div>
                        </div>
                      
                        <!-- File Button --> 
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="photo">Foto</label>
                          <div class="col-md-4">
                            <input id="photo" name="photo" class="input-file" type="file">
                            <small class="error-message"></small>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="jenistrip">Jenis Trip</label>
                          <div class="col-md-4">
                            <label class="radio-inline"><input type="radio" name="jenistrip" value="1">Open Trip</label>
                            <label class="radio-inline"><input type="radio" name="jenistrip" value="2">Private Trip </label>
                            <small class="error-message"></small>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="jenistrip">Nama Kategori</label>
                          <div class="col-md-4">
                            <label class="radio-inline"><input type="radio" name="optradio" value="1">Olahraga</label>
                            <label class="radio-inline"><input type="radio" name="optradio" value="2">Petualangan </label>
                            <label class="radio-inline"><input type="radio" name="optradio" value="3">Aktifitas</label>
                            <small class="error-message"></small>
                          </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="description">Deskripsi</label>
                          <div class="col-md-4">                     
                            <textarea class="form-control" id="description" name="description"></textarea>
                            <small class="error-message"></small>
                          </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="include_needs">Include</label>
                          <div class="col-md-4">                     
                            <textarea class="form-control" id="include_needs" name="include_needs"></textarea>
                            <small class="error-message"></small>
                          </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="exclude_needs">exclude</label>
                          <div class="col-md-4">                     
                            <textarea class="form-control" id="exclude_needs" name="exclude_needs"></textarea>
                            <small class="error-message"></small>
                          </div>
                        </div>

                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="submit" type="submit" onclick="tambahtrip()" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                        </fieldset>
                      </div>



                      <div class="ln_solid"></div>
                     
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    <!-- validate -->
   

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

document.getElementById("photo").addEventListener("change", readFile);

  
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


  function tambahtrip(){
 
    $.ajax({
          url:'http://yippytech.com:3000/destinasi/add',
          headers: {
              'Content-Type':'application/json',
              'Authorization': jwt
          },
          method: 'POST',
            dataType:'json',
            data: JSON.stringify({
              trip_name:$('#name').val(), 
              quota:$('#quota').val(),
              price:$('#price').val(),
              location:$('#location').val(),
              days:$('#days').val(),
              nights:$('#nights').val(),
              start_date:$('#start_date').val(),
              finish_date:$('#finish_date').val(),
              foto_destinasi:base64Image,
              id_category_trip:$('input[name=jenistrip]:checked').val(),
              id_type_trip:$('input[name=jenistrip]:checked').val(),
              description:$('#description').val(),
              include_needs:$('#include_needs').val(),
              exclude_needs:$('#exclude_needs').val() 
            }),
          success:function(response) {
            console.log(response);  
            if (response.status==200)  {
              window.location.replace("/provider")
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