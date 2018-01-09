
@extends('headerlog')
@section('login')
<body>

<div class="container">

<div class="row">
	<div class="text-center">
	<a href="{{ url('homeupdate') }}"> <h1 class="headingexp"> Indoexplore </h1> </a>
    </div>	
</div>
<br> <br> <br>
    	<div class="row">

			<div class="col-md-6 col-md-offset-3 ">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6 col-md-offset-3">
								<a href="#" class="active" id="login-form-link">UBAH PROFILE</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="#" method="post" role="form" style="display: block;">

									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>

									<div class="form-group">
										<input type="text" name="emailbaru" id="emailbaru" tabindex="1" class="form-control" placeholder="Email Baru" value="">
									</div>

									<div class="form-group">
										<input type="text" name="emaillama" id="emaillama" tabindex="1" class="form-control" placeholder="Email Lama" value="">
									</div>

									<div class="form-group">
										<input type="text" name="katasandi" id="katasandi" tabindex="1" class="form-control" placeholder="Kata Sandi" value="">
									</div>
							
								
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Ubah">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

@endsection