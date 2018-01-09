
@extends('headerreg')
@section('register')

<body>

<div class="container">
    	<div class="row">

		<div class="row">
			<div class="text-center">
			<a href="{{ url('home') }}"> <h1 class="headingexp"> Indoexplore </h1> </a>
		    </div>	
		</div>
		<br> <br> <br>
		    	<div class="row">
		    	<div class="col-md-6 text-center fluid-center">
		    		<h1 class="fontbaru"> Daftar sekarang di Indoexplore</h1>
		    		<p> Sudah punya akun indoexplore ? Masuk <a href="{{ url('login') }}">disini</a> </p> <!-- posisi kiri, pindah kemenu register -->
		    	</div>

			<div class="col-md-6">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
						
							<div class="col-xs-6 col-md-offset-3">
								<a href="#" class="active" id="register-form-link">Daftar</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
					
									
									<div class="form-group">
										<input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Nama" value="" required="">
										<small class="error-message"></small>
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Alamat Email" value="" required="">
										<small class="error-message"></small>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required="">
										<small class="error-message"></small>
									</div>
									<div class="form-group">
										<input type="text" name="contact_phone" id="contact_phone" tabindex="2" pattern="[0]{1}[0-9]{9}[0-9]{1,}" class="form-control" placeholder="Nomor Telepon" required="">
										<small class="error-message"></small>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Daftar" onclick="register()">
											</div>
										</div>
									</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

@endsection
@section('js')
 <script src="{{ asset('/template/js/registerapi.js') }}" ></script>
@endsection