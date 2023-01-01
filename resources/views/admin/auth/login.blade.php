<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Ngen It | Log In</title>

	<!-- Global stylesheets -->
	<link href="{{asset('backend')}}/assets/fonts/inter/inter.css" rel="stylesheet" type="text/css">
	<link href="{{asset('backend')}}/assets/icons/phosphor/styles.min.css" rel="stylesheet" type="text/css">
	<link href="{{asset('backend')}}/assets/css/ltr/all.min.css" id="stylesheet" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{asset('backend')}}/assets/demo/demo_configurator.js"></script>
	<script src="{{asset('backend')}}/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('backend')}}/assets/js/app.js"></script>
	<script src="{{asset('backend')}}/assets/demo/pages/form_validation_styles.js"></script>
	<!-- /theme JS files -->

</head>

<body>



	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Content area -->
				<div class="content d-flex justify-content-center align-items-center">

					<!-- Login card -->
					<form class="login-form needs-validation" method="POST" action="{{ route('login') }}" novalidate>
						@csrf
                        <div class="card mb-0">
							<div class="card-body">
								<div class="text-center mb-3">
									{{-- <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
										<img src="{{asset('backend')}}/assets/images/logo_icon.svg" class="h-48px" alt="">
									</div> --}}
									<h5 class="mb-0">Login to your account</h5>

								</div>

								<div class="mb-3">
									<label class="form-label">Email</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="text" name="email" class="form-control" placeholder="john@doe.com" required>
										<div class="invalid-feedback">Enter your Email</div>
										<div class="form-control-feedback-icon">
											<i class="ph-user-circle text-muted"></i>
										</div>
									</div>
								</div>

								<div class="mb-3">
									<label class="form-label">Password</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="password" name="password" class="form-control" placeholder="•••••••••••" required>
										<div class="invalid-feedback">Enter your Password</div>
										<div class="form-control-feedback-icon">
											<i class="ph-lock text-muted"></i>
										</div>
									</div>
									<div class="invalid-feedback">Enter your password</div>
								</div>

								<div class="d-flex align-items-center mb-3">
									<label class="form-check">
										<input type="checkbox" name="remember" class="form-check-input" checked>
										<span class="form-check-label">Remember</span>
									</label>

									<a href="login_password_recover.html" class="ms-auto">Forgot password?</a>
								</div>

								<div class="mb-3">
									<button type="submit" class="btn btn-primary w-100">Sign in</button>
								</div>

								<div class="text-center text-muted content-divider mb-3">
									<span class="px-2">or sign in with</span>
								</div>

								<div class="text-center mb-3">
									<button type="button" class="btn btn-outline-primary btn-icon rounded-pill border-width-2"><i class="ph-facebook-logo"></i></button>
									<button type="button" class="btn btn-outline-pink btn-icon rounded-pill border-width-2 ms-2"><i class="ph-dribbble-logo"></i></button>
									<button type="button" class="btn btn-outline-secondary btn-icon rounded-pill border-width-2 ms-2"><i class="ph-github-logo"></i></button>
									<button type="button" class="btn btn-outline-info btn-icon rounded-pill border-width-2 ms-2"><i class="ph-twitter-logo"></i></button>
								</div>

								<div class="text-center text-muted content-divider mb-3">
									<span class="px-2">Don't have an account?</span>
								</div>

								<div class="mb-3">
									<a href="#" class="btn btn-light w-100">Sign up</a>
								</div>

								<span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
							</div>
						</div>
					</form>
					<!-- /login card -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>