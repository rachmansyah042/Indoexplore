@extends('header')
@section('category')

<body>

 <!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="half-carousel slide">
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <img src="{{ asset('/template/img/portfolio/fullsize/Cimarinjung.jpg') }}" style="width:100%;"> </img>
                <div class="carousel-caption">
                    <h2>Cimarinjung</h2>
                </div>
            </div>
        </div>

    </header>

<section>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					
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
											<li><a href="#">Nike </a></li>
											<li><a href="#">Under Armour </a></li>
											<li><a href="#">Adidas </a></li>
											<li><a href="#">Puma</a></li>
											<li><a href="#">ASICS </a></li>
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
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
											<li><a href="#">Armani</a></li>
											<li><a href="#">Prada</a></li>
											<li><a href="#">Dolce and Gabbana</a></li>
											<li><a href="#">Chanel</a></li>
											<li><a href="#">Gucci</a></li>
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
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
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
					
						<div class="brands_products">
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div>
						

					
					
				</div>


                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="{{ asset('/template/img/portfolio/thumbnails/Cimarinjung.jpg') }}" alt="">
                            <div class="caption">
                                <h4 class="pull-right">IDR 300K</h4>
                                <h4><a href="#">Curug Cimarinjung</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <a class="btn btn-default" href="#"> Lihat detail</a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="{{ asset('/template/img/portfolio/thumbnails/Cimarinjung.jpg') }}" alt="">
                            <div class="caption">
                               <h4 class="pull-right">IDR 300K</h4>
                                <h4><a href="#">Curug Cimarinjung</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <a class="btn btn-default" href="#"> Lihat detail</a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="{{ asset('/template/img/portfolio/thumbnails/Cimarinjung.jpg') }}" alt="">
                            <div class="caption">
                                <h4 class="pull-right">IDR 300K</h4>
                                <h4><a href="#">Curug Cimarinjung</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <a class="btn btn-default" href="#"> Lihat detail</a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="{{ asset('/template/img/portfolio/thumbnails/Cimarinjung.jpg') }}" alt="">
                            <div class="caption">
                                <h4 class="pull-right">IDR 300K</h4>
                                <h4><a href="#">Curug Cimarinjung</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <a class="btn btn-default" href="#"> Lihat detail</a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="{{ asset('/template/img/portfolio/thumbnails/Cimarinjung.jpg') }}" alt="">
                            <div class="caption">
                                <h4 class="pull-right">IDR 300K</h4>
                                <h4><a href="#">Curug Cimarinjung</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <a class="btn btn-default" href="#"> Lihat detail</a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <img src="{{ asset('/template/img/portfolio/thumbnails/Cimarinjung.jpg') }}" alt="">
                            <div class="caption">
                                <h4 class="pull-right">IDR 300K</h4>
                                <h4><a href="#">Curug Cimarinjung</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                            <a class="btn btn-default" href="#"> Lihat detail</a>
                        </div>
                    </div>
                    
                </div>

			
				</div>
			</div>
		</div>
	</section>

</body>
@endsection