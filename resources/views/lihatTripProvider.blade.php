@extends('headerProvider')
@section('editTripProvider')

   <!-- Page Content -->
<div class="right_col" role="main">
	<div class="container">
  <div class="row">
    <div id="namadestinasi"></div>
  </div>
</div>

<div class="container">
  <div class="col-lg-12 col-md-12 col-sm-12">
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

            
          </div>
          
     </div>
   </div>

</div>
 </div>
    <!-- /.container -->

 

@endsection

@section('js')
<script src="{{ asset('/template/js/lihattripprovider.js') }}" ></script>

@endsection