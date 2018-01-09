
@extends('headerlog')
@section('login')
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
		    		<h1 class="fontbaru"> Masuk sekarang di Indoexplore</h1>
		    		<p> Belum punya akun indoexplore ? Daftar <a href="{{ url('register') }}">disini</a> </p> <!-- posisi kiri, pindah kemenu register -->
		    	</div>

			<div class="col-md-6">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
						
							<div class="col-xs-6 col-md-offset-3">
								<a href="#" class="active" id="register-form-link">Masuk</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
					
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="" required="">
										<small class="error-message"></small>
									</div>
									
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required="">
										<small class="error-message"></small>
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-register" onclick="login()" value="Masuk">
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
 <script src="{{ asset('/template/js/loginapi.js') }}" ></script>
@endsection