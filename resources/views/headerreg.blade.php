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
    <link href="{{ asset('/template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/template/css/creative.css') }}" rel="stylesheet">

    <link href="{{ asset('/template/cssReg/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/template/cssReg/css-extends.css') }}" rel="stylesheet">
    <link href="{{ asset('/template/cssReg/register.css') }}" rel="stylesheet">

</head>

<body>
    
    @yield('register')
    @yield('opentravel')
    @yield('formpemesanan')
    @yield('history')


     <script src="{{ asset('/template/vendor/jquery/jquery.min.js') }}" ></script>
     


    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/template/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    

    <!-- Theme JavaScript -->
    <script src="{{ asset ('/template/js/creative.min.js') }}"></script>


     @yield('js')
    

</body>
</html>

