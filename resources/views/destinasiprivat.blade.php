@extends('header')
@section('destination')

<body>
<!-- Half Page Image Background Carousel Header -->
    <header class="half-carousel slide prov">
<!-- Set the first background image using inline CSS below. -->
     <div class="bromo"> </div>
    </header>
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
    <div class="row">
        <div id="namadestinasi"></div>
            <div class="container">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <h3 class="text-center"> Gallery</h3> <hr>
                    <div class="well">
                            <div class="container">
                            <div class="col-md-12">
                                <div class="well-none">
                                    <div id="myCarousel" class="carousel slide">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="row">
                                                    <div id="mediaslider"></div>
                                                    <div class="col-sm-3 col-xs-6">
                                                        <a href="#x"><img src="{{ asset('/template/img/bromo1.jpg') }}" alt="Image" class="img-responsive"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
              <div class="media-body"> <br>
                <h3 class="media-heading ruler-bottom text-center">Highlights</h3> <hr>
                <h4>Deskripsi</h4>
                <div id="deskripsitrip"></div>
        <h4>Poin penting </h4> <br>
                <div id="poinpenting"></div>
        
                <br>
                <div id="detailaktifitas"></div>
                
        <h4>Sudah termasuk</h4>
                <div id="sudahtermasuk"></div>
        
                <h4>Tidak termasuk</h4>
                <div id="tidaktermasuk"></div>
                
              </div>
            </div>

            <form class="form-horizontal" role="form">
          <div class="col-md-12">
            <table class="table table-hover" id="worked">
              <thead>
                <tr>
                  <th>Hari</th>
                  <th>1</th>
                  <th>
                  <button type="button" class="btn btn-blue add-day">+</button></th>
                  </th>
                </tr>
                <tr>
                  <th>Waktu</th>
                  <th>Nama Kegiatan</th>
                  <th>
                  <button type="button" class="btn btn-blue add-row">+</button></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                  <input class="form-control" type="text"></td>
                  <td>
                  <input class="form-control" type="text"></td>
                  <td>
                  <button type="button" class="btn btn-danger delete-row">-</button>  
                  </td>
                </tr>
                <tr>
                  <td>
                  <input class="form-control" type="text"></td>
                  <td>
                  <input class="form-control" type="text"></td>
                  <td>
                  <button type="button" class="btn btn-danger delete-row">-</button>
                  </td>
                </tr>       
              </tbody>
            </table>
          </div>
        </form>
                                
                </div>
                   <div class="col-lg-4 col-md-4 col-sm-4"> 
            <div class="columns">
              <div class="price">
                <div class="header">- Pemesanan -</div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <span class=" glyphicon glyphicon-calendar"></span> <label class="control-label">Pilih Tanggal</label>
                                <input type="date" class="form-control" id="datepicker"> 
                            </div>
                        </div>
                    </div>
                    
                    <table class="table summary">
                        <tbody>
                            <tr>
                                <td>Dewasa</td>
                                <td>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12 col-lg-12">
                                            <div class="input-group number-spinner">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                </span>
                                                <input type="text" class="form-control text-center" value="0">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Harga</td>

                                <td class="text-right"><div id="hargapemesanan"></div></td>
                            </tr>
                            <tr>
                                <td class="IDR"> <h3> Total </h3></td>
                                <td class="total"> <h3> Rp <span class="totalpayment"> </span> </h3></td>
                        </tr>
                        </tbody>
                    </table>
                   <a href="#"><div class="button">  Pesan  </div></a>
              </div>
            </div> 
        </div>
                        
                    </div> 
                    <!-- Ini buat tabs dikiri  -->

     
                    </div>
                </div>
            </div>

       
                   

        </div>
        </div>
    </div>
    <!-- /.container -->
<script src="{{ asset('/template/vendor/jquery/jquery.min.js') }}" ></script>
<script src="{{ asset ('/template/js/hari.js') }}"></script>
<script src="{{ asset ('/template/js/increment.js') }}"></script>
<script src="{{ asset ('/template/js/price.js') }}"></script>

   </body>

@endsection


@section('js')
 <script src="{{ asset('/template/js/destinasiapi.js') }}" ></script>
@endsection

