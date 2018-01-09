<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Indoexplore! </title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/template/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('/template/css/creative.css') }}" rel="stylesheet">
    <link href="{{ asset('/template/css/foot.css') }}" rel="stylesheet">
    <link href=" {{ asset('/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('/template/cssReg/css-extends.css') }}" rel="stylesheet">
    
    
   


</head>



<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="{{ url('home') }}">Indoexplore</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">                    
                    <li>
                        <a class="page-scroll" href="{{ url('privatetrip') }}">Private Trip</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="{{ url('opentrip') }}">Open Trip</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url('login') }}">Masuk</a>
                    </li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    @yield('content')
    @yield('destination')
    @yield('category')

    <!--footer start from here-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 footerleft ">
        <div class="logofooter"> About Us</div>
        <p>Indoexplore adalah website yang menyediakan berbagai macam destinasi wisata liburan yang ada di indonesia</p>
        <p><i class="fa fa-map-pin"></i> Computer Science, Bogor Agricultural University</p>
        <p><i class="fa fa-phone"></i> Phone  : +91 9999 999999</p>
        <p><i class="fa fa-envelope"></i> E-mail : indoexplore@cs.ipb.ac.id</p>
        
      </div>
      <div class="col-md-2 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">Connect with</h6>
        <ul class="footer-ul">
          <li><a href="#"> Google+</a></li>
          <li><a href="#"> Instagram</a></li>
          <li><a href="#"> Twitter</a></li>
        </ul>
      </div>

      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">Kerja Sama</h6>
        <div class="post">
          <p>Pesona Indonesia</p>
          <p>My Trip My Adventure</p>
          <p>Indonesia Bagus</p>
          
        </div>
      </div>

      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">Contact Us</h6>
        <div class="post">
          <p>Haraldi Ikhsan A G64130102</p>
          <p>Kresno Satrio Kuncoro Zito G64130014</p>
          <p>Imam Rachmansyah G64130042</p>
          <p>Irfan Kurnia Dinata G64130089</p>
        </div>
      </div>
    </div>
    </div>
  </div>
</footer>


     <script src="{{ asset('/template/vendor/jquery/jquery.min.js') }}" ></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/template/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src=" {{ asset('/template/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('/template/vendor/scrollreveal/scrollreveal.min.js') }}"></script>
    <script src=" {{ asset('/template/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Theme JavaScript -->
    <script src="{{ asset ('/template/js/creative.min.js') }}"></script>
    
        @yield('js')
</html>