@extends('header')
@section('category')

<body>

 <!-- Half Page Image Background Carousel Header -->
     <header class="prov">
                <div class="sumat">
                
                <div class="carousel-caption">
                    <h2>Sumatera</h2>
                </div>
                </div>
    </header>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                    <div class="left-sidebar">
                        <h2>Filter</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <h2>Lokasi</h2>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Sumatera
                                        </a>
                                    </h4>
                                </div>
                                <div id="sportswear" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Danau Toba </a></li>
                                            <li><a href="#">Mesjid Aceh </a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Kalimantan
                                        </a>
                                    </h4>
                                </div>
                                <div id="mens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Sulawesi
                                        </a>
                                    </h4>
                                </div>
                                <div id="womens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Jawa</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Bali dan Nusa Tenggara</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Papua dan Maluku</a></h4>
                                </div>
                            </div>
                        <h2>Kategori</h2>
                            
                        </div><!--/category-products-->
                        

                    
                    </div>
                </div>
            <!--/category-products-->  
            <div class="col-md-9">
                <div id="lokasidestinasi"></div>
            </div>

        </div>   
    </div>
</section>

</body>
@endsection


@section('js')
 <script src="{{ asset('/template/js/lokasidestinasiapi.js') }}" ></script>
@endsection