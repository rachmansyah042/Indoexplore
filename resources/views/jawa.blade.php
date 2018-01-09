@extends('header')
@section('category')

<body>

 <!-- Half Page Image Background Carousel Header -->
    <header class="prov">
                <div class="jawa">
                </div>
                <div class="carousel-caption">
                    <h2>Jawa</h2>
                </div>
    </header>

<section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
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
                            <!-- <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Interiors</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Clothing</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Bags</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Shoes</a></h4>
                                </div>
                            </div> -->
                        </div><!--/category-products-->
                        

                    
                    </div>
                </div>

                    <div class="col-sm-3 col-lg-3 col-md-3 ">
                        <div class="thumbnail">
                            <img class="prov" src="{{ asset('/template/img/jawa/baduy.jpg') }}" alt="">
                            <div class="caption">
                               <h4 class="pull-right">IDR 250K</h4>
                                <h4><a href="#">Suku Baduy Banten</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <div class="buttn"> <a href="#"> Lihat detail</a> </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img class="prov" src="{{ asset('/template/img/jawa/Cimarinjung.jpg') }}" alt="">
                            <div class="caption">
                               <h4 class="pull-right">IDR 250K</h4>
                                <h4><a href="#">Curug Cimarinjung</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <div class="buttn"> <a href="#"> Lihat detail</a> </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img class="prov" src="{{ asset('/template/img/jawa/borobudur.jpg') }}" alt="">
                            <div class="caption">
                               <h4 class="pull-right">IDR 350K</h4>
                                <h4><a href="#">Candi Borobudur</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <div class="buttn"> <a href="#"> Lihat detail</a> </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-3 col-md-3 col-md-push-3">
                        <div class="thumbnail">
                            <img class="prov" src="{{ asset('/template/img/jawa/bromo.jpg') }}" alt="">
                            <div class="caption">
                                <h4 class="pull-right">IDR 300K</h4>
                                <h4><a href="#">Gunung Bromo</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <div class="buttn"> <a href="{{'destinasi'}}"> Lihat detail</a> </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-3 col-md-3 col-md-push-3">
                        <div class="thumbnail">
                            <img class="prov" src="{{ asset('/template/img/jawa/kotatua.jpg') }}" alt="">
                            <div class="caption">
                                <h4 class="pull-right">IDR 300K</h4>
                                <h4><a href="#">Kota Tua</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <div class="buttn"> <a href="#"> Lihat detail</a> </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-3 col-md-3 col-md-push-3">
                        <div class="thumbnail">
                            <img class="prov" src="{{ asset('/template/img/jawa/merapi.jpg') }}" alt="">
                             <div class="caption">
                                <h4 class="pull-right">IDR 300K</h4>
                                <h4><a href="#">Gunung Merapi</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <div class="buttn"> <a href="#"> Lihat detail</a> </div>
                        </div>
                    </div>
                    
                </div>

            
                </div>
            </div>
        </div>
    </section>

</body>
@endsection