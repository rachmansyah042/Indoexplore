@extends('headerProvider')
@section('lihatBookProvider')


<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Lihat Booking</h3>
              </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> List Booking</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

               
                    <!-- start project list -->
                    <!-- <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%"></th>
                          <th style="width: 60%">Nama Trip</th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th style="width: 40%">Keterangan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td>
                            <a>Pesamakini Backend UI</a>
                            <br />
                            <small>Created 01.01.2015</small>
                          </td>
                        <td></td>
                          <td >
                          </td>
                          <td>
                           
                          </td>
                          <td>
                             <a href="#" class="btn btn-primary btn-xs"><i ></i> Sukses </a>
                            <a href="#" class="btn btn-info btn-xs"><i ></i> Menunggu </a>
                            <a href="#" class="btn btn-danger btn-xs"><i ></i> Gagal </a>
                          </td>
                        </tr>
                        <tr>
                      
                      </tbody>
                    </table> -->
                      <div id="booking"></div>
                    <!-- end project list -->

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
  var url = new URL(window.location.href);
  var id = url.searchParams.get("id");
    function getBooking() {
      var token = localStorage.getItem('token');
      $.ajax({
        url:'http://yippytech.com:3000/destinasi/booking/'+id,
        headers: {
            'Content-Type':'application/json',
            'Authorization':'Bearer '+token
        },
        method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data;
            var ulasan='<table class="table table-striped projects"><thead><tr><th style="width: 1%"></th><th style="width: 60%">Nama Trip</th><th>Status</th><th></th><th></th><th style="width: 40%">Keterangan</th></tr></thead><tbody>';
            data.forEach(function(obj){
             ulasan+='<tr><td></td><td><a>'+obj.trip_name+'</a><br /><small>'+obj.booking_code+'</small></td><td >'+obj.name_status_trip+'<td></td></td><td></td><td>';
             if (obj.id_status_trip==1) {
                             ulasan+='<a onclick="konfirmasi('+obj.id_booking+')" class="btn btn-success btn-xs"><i ></i> Konfirmasi </a>';
              }
              else if (obj.id_status_trip==2) {
                             ulasan+='<a onclick="finish('+obj.id_booking+')" class="btn btn-primary btn-xs"><i ></i> Selesaikan trip </a>';
              }
                          ulasan+='</td></tr><tr>';
             });
            ulasan+='</tbody></table>';
            $("#booking").html(ulasan);
        }

    });
    }
    getBooking();
    function konfirmasi(id_booking) {
      var token = localStorage.getItem('token');

      $.ajax({
        url:'http://yippytech.com:3000/destinasi/accept/'+id_booking,
        headers: {
            'Content-Type':'application/json',
            'Authorization':'Bearer '+token
        },
        dataType:'json',
        data: null,
        method: 'POST',
        success:function(response) {
          console.log(response);
          if (response.status==200) {
            getBooking();  
          }
          
        }
    });
    }
    function finish(id_booking) {
      var token = localStorage.getItem('token');

      $.ajax({
        url:'http://yippytech.com:3000/destinasi/finish/'+id_booking,
        headers: {
            'Content-Type':'application/json',
            'Authorization':'Bearer '+token
        },
        dataType:'json',
        data: null,
        method: 'POST',
        success:function(response) {
          console.log(response);
          if (response.status==200) {
            getBooking();  
          }
          
        }
    });
    }
  </script>
@endsection