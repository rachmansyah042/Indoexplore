@extends('headerprivate')
@section('content')


<body >

    <!-- Half Page Image Background Carousel Header -->
    <header>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="{{ asset('/template/img/baru/bidadari.jpg') }}" class="half" alt="">
        </div>

        <div class="item">
          <img src="{{ asset('/template/img/baru/hejo.png') }}" class="half" alt="">
        </div>

        <div class="item">
          <img src="{{ asset('/template/img/baru/pancar.jpg') }}" class="half" alt="">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

</header>
        <div class="container">
            <div class="row">
            <div>
                <h2 class="section-heading text-center kategori" id="howitwork">Indoexplore </h2>
                <hr>
            </div>
                <div class="col-sm-4 text-center">
                    <div class="single-service">
                        <img class="ikon" src="{{ asset('/icon/binoculars.png') }}" alt="">
                        <h2 class="warna">Temukan</h2>
                        <h4 class="huruf">Temukan destinasi wisata yang kalian inginkan dengan mudah</h4>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <img class="ikon" src="{{ asset('/icon/tap.png') }}" alt="">
                        <h2 class="warna">Pilih</h2>
                        <h4 class="huruf">Pilih destinasi wisata kalian dengan mudah</h4>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <img class="ikon" src="{{ asset('/icon/money.png') }}" alt="">
                        <h2 class="warna">Pesan</h2>
                        <h4 class="huruf">Pesan destinasi wisata sesuai pilihan kalian</h4>
                    </div>
                </div>
            </div> <br>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div id="imaginary_container"> 
                            <div class="input-group stylish-input-group">
                                <input type="text" class="form-control" id="cari" placeholder="Cari" >
                                <span class="input-group-addon">
                                    <button  type="submit" onclick="cari()">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>  
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div>  
                <br>
                <h2 class="section-heading text-center" > Private Trip </h2>
                <hr>
            </div>
            <div class="row">
                <div id="outputprivat"> </div>                                  
            </div>
        </div>
    </div>
</div>
    <!-- /.container -->

</body>

</html>


@endsection

@section('js')
 <script src="{{ asset('/template/js/privatetripapi.js') }}" ></script>
 <script src="{{ asset('/template/js/homeapi.js') }}" ></script>
@endsection

