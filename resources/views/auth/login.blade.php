<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="" name="description">
		<meta content="" name="author">
		<meta name="keywords" content="">

		<!-- Title -->
		<title>Mohamed Amine AKACHA - Full Stack Developer </title>

		<!--Favicon -->
		<link rel="icon" href="assets/images/brand/favicon.ico" type="image/x-icon"/>

		<!--Bootstrap css -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Style css -->
		<link href="assets/css/style.css" rel="stylesheet" />
		<link href="assets/css/dark.css" rel="stylesheet" />
		<link href="assets/css/skin-modes.css" rel="stylesheet" />

		<!-- Animate css -->
		<link href="assets/css/animated.css" rel="stylesheet" />

		<!---Icons css-->
		<link href="assets/css/icons.css" rel="stylesheet" />

	    <!-- Color Skin css -->
		<link id="theme" href="assets/colors/color1.css" rel="stylesheet" type="text/css"/>

	</head>

	<body class="register-2">
		<div class="page">
			<div class="page-content">
				<div class="container">
					<div class="row">
						<div class="col mx-auto">
							<div class="row justify-content-center">
								<div class="col-md-4">
									
									<div class="card">
										<div class="card-body">
											<div class="text-center mb-3">
												<h1 class="mb-2">Log In</h1>
												<a href="javascript:void(0);" class="">Welcome Back !</a>
											</div>
											<form class="mt-5" method="POST" action="{{ route('login') }}">
                                                @csrf
												<div class="input-group mb-4">
														<div class="input-group-text">
															<i class="fe fe-user"></i>
														</div>
													<input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
												</div>
												<div class="input-group mb-4">
													<div class="input-group" id="Password-toggle1">
														<a href="" class="input-group-text">
														  <i class="fe fe-eye" aria-hidden="true"></i>
														</a>
														<input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="current-password">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
													</div>
												</div>
												<div class="form-group">
													<label class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
														<span class="custom-control-label" for="remember">Remember me</span>
													</label>
												</div>
												<div class="form-group text-center mb-3">
													<button class="btn btn-primary btn-lg w-100 br-7">Log In</button>
												</div>
											</form>
										</div>
									</div>
                                    
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Jquery js-->
		<script src="assets/js/jquery.min.js"></script>

		<!-- Bootstrap5 js-->
		<script src="assets/plugins/bootstrap/popper.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--Othercharts js-->
		<script src="assets/plugins/othercharts/jquery.sparkline.min.js"></script>

		<!-- Circle-progress js-->
		<script src="assets/js/circle-progress.min.js"></script>

		<!-- Jquery-rating js-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

		<!-- Show Password -->
		<script src="assets/js/bootstrap-show-password.min.js"></script>

		<!-- Custom js-->
		<script src="assets/js/custom.js"></script>

	</body>
</html>
