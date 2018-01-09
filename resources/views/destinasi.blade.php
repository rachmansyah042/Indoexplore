@extends('headerupdate')
@section('destination')

<body>
<!-- Half Page Image Background Carousel Header -->
    <header>
    <div id="headerdestinasi"></div>
    </header>
    <!-- Page Content -->
<div class="container">
  <div class="row">
    <div id="namadestinasi"></div>
  </div>
</div>

<div class="container">
  <div class="col-lg-8 col-md-8 col-sm-8">
     <div class="well">
        <h4>Deskripsi</h4>
        <div id="deskripsitrip"></div>
        
        <br>

        <h3 class="text-center">Poin penting </h3><hr> <br>
          <div id="poinpenting"></div>
  
          <br>
          <div id="detailaktifitas"></div>
               
        <h4>Sudah termasuk</h4>
          <div id="sudahtermasuk"></div>
  
          <h4>Tidak termasuk</h4>
          <div id="tidaktermasuk"></div>

          <h3 class="text-center">Ulasan</h3> <hr>
          <div class="jumbotron">
          <div id="reviewoutput"></div>
            <table class="table">
            
              <div id="ulasan"></div>

            </table>
          </div>
          
     </div>
   </div>

   <div class="col-lg-4 col-md-4 col-sm-4"> 
      <div class="columns">
        <div class="price">
          <div class="header">- Pemesanan -</div>
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
                                          <input type="text" class="form-control text-center" value="1">
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
                          <td class="total"> <h3> Rp <span class="totalpayment" id="bayar"> </span> </h3></td>
                  </tr>
                  </tbody>
              </table>
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                            <div class="form-group">
                                <label class="control-label">Nama peserta</label>
                                <input type="textarea" class="form-control" placeholder="ex : Ayu, Agus, Ari" id="peserta"> 
                            </div>
                      </div>
                  </div>
              </div>
              <div class="col-xs-12 col-md-12 col-lg-12">
                          <div class="form-group">
                          <label class="col-md-12 control-label" for="jenistrip">Jenis Pembayaran</label>
                            <div class="col-md-12">
                            <label class="radio-inline"><input type="radio" name="metodebayar" value="1">Transfer Bank</label>
                            <label class="radio-inline"><input type="radio" name="metodebayar" value="2">Kartu Kredit </label>
                            <small class="error-message"></small>
                            </div>
                          </div>
                            </div>
              <div class="row">
             <a onclick="formpemesanan()"><button value="pesan" class="button" style="margin-left: 25%;">Pesan </button></a>
             </div>
        </div>
      </div>          
    </div>
</div>

    <!-- /.container -->
<script src="{{ asset('/template/vendor/jquery/jquery.min.js') }}" ></script>
<script src="{{ asset ('/template/js/price.js') }}"></script>

   </body>

@endsection


@section('js')
 <script src="{{ asset('/template/js/destinasiapi.js') }}" ></script>

@endsection
