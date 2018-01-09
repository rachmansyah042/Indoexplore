@extends('header')
@section('category')

<body>

 <!-- Half Page Image Background Carousel Header -->
 <section>
     <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div id="imaginary_container"> 
                            <div class="input-group stylish-input-group">
                                <input type="text" class="form-control" id="cari" placeholder="Cari" >
                                <span class="input-group-addon">
                                    <button onclick="cari()" type="submit">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>  
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 </section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                    
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
<!--  <script src="{{ asset('/template/js/lokasidestinasiapi.js') }}" >
    
 </script> -->

 <script type="text/javascript">

  var url = new URL(window.location.href);
  var text = url.searchParams.get("cari");
  $.ajax({
        url:'http://yippytech.com:3000/home/search/'+text,
        headers: {
            'Content-Type':'application/json'
        },
        method: 'GET',
        success:function(response) {
            console.log(response);
            var data  = response.data;
            var destinasi='';
            data.forEach(function(obj){ 
                destinasi+='<div class="col-sm-4 col-lg-4 col-md-4">'+
                    '<div class="thumbnail">'+
                        '<img src="'+obj.photo+'" alt="">'+
                        '<div class="caption">'+
                           '<h4 class="priceright">'+obj.price+'</h4>'+
                            '<h4><a href="#">'+obj.trip_name+'</a>'+
                            '</h4>'+
                        '</div>'+
                       '<div class="buttn"> <a href="/destinasi/'+obj.id_trip+'"> Lihat detail</a> </div>'+
                    '</div>'+
                '</div>'
            });
            $("#lokasidestinasi").html(destinasi);
        }
    });

     function cari() {
        var text = $('#cari').val();
        window.location.replace('/kategori?cari='+text);

    
}

var url = new URL(window.location.href);
  var id = url.searchParams.get("id");

function kategoritrip() {


}


 </script>
@endsection