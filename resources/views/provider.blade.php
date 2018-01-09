@extends('headerProvider')
@section('providerHome')


 <!-- page content -->
       <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Destinasi Wisata  </h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Koleksi Trip <small> Destinasi wisata </small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="row">
                    <div id="lihattrip"></div>
                      <!-- <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="{{ asset('/gantella/indoexplore/images/media.jpg') }}" alt="image" />
                            <div class="mask">
                              <div class="tools tools-bottom">
                                <a href="{{ url('formEditTrip') }}"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>Babakan Lebak River Tube</p>
                          </div>
                        </div>
                      </div>

                       <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="{{ asset('/gantella/indoexplore/images/media.jpg') }}" alt="image" />
                            <div class="mask">
                              <div class="tools tools-bottom">
                                <a href="{{ url('formEditTrip') }}"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>Babakan Lebak River Tube</p>
                          </div>
                        </div>
                      </div>

                       <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="{{ asset('/gantella/indoexplore/images/media.jpg') }}" alt="image" />
                            <div class="mask">
                              <div class="tools tools-bottom">
                                <a href="{{ url('formEditTrip') }}"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>Babakan Lebak River Tube</p>
                          </div>
                        </div>
                      </div> -->

                      


                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection

@section('js')
<script type="text/javascript">
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
  function getDestinasi(){
    $.ajax({
          url:'http://yippytech.com:3000/destinasi',
          headers: {
              'Content-Type':'application/json',
              'Authorization': jwt
          },
          method: 'GET',
          success:function(response) {
              console.log(response); 
              if (response.status==200) {
                var data  = response.data;
                var destinasi='';
                data.forEach(function(obj){
                  destinasi+='<div class="col-md-55">'+
                    '<div class="thumbnail"> <a href="lihatTrip?id='+obj.id_trip+'">'+
                      '<div class="image view view-first">'+
                        '<img style="width: 100%; display: block;" src="'+obj.photo+'" alt="image" />'+
                        '<div class="mask">'+
                          '<div class="tools tools-bottom">'+
                            '<a href="formEditTrip?id='+obj.id_trip+'"><i class="fa fa-pencil"></i></a>'+
                            '<a onclick=deleteDestinasi('+obj.id_trip+')><i class="fa fa-times"></i></a>'+
                          '</div>'+
                        '</div>'+
                      '</div>'+
                      '<div class="caption">'+
                        '<p>'+obj.trip_name+'</p>'+
                      '</div>'+
                    '</div>'+
                  ' </a></div>'
                });
                $("#lihattrip").html(destinasi);
              } 
              else alert(response.message);
          }
      });
  }
getDestinasi();
function deleteDestinasi(id){
  $.ajax({
        url:'http://yippytech.com:3000/destinasi/delete/'+id,
        headers: {
            'Content-Type':'application/json',
            'Authorization': jwt
        },
        method: 'DELETE',
        success:function(response) {
            console.log(response); 
            if (response.status==200) {
              getDestinasi();
            } 
            else alert(response.message);
        }
    });

}
</script>
@endsection