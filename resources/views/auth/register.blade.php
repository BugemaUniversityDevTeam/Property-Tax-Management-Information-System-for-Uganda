@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Property Tax Registration System for Uganda</title>

  <!-- Global stylesheets -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  <link href="{{ asset ('assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset ('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset ('assets/css/core.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset ('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset ('assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
  <!-- /global stylesheets -->

  <!-- Core JS files -->
  <script src="{{ asset ('assets/js/plugins/loaders/pace.min.js') }}"></script>
  <script src="{{ asset ('assets/js/core/libraries/jquery.min.js') }}"></script>
  <script src="{{ asset ('assets/js/core/libraries/bootstrap.min.js') }}"></script>
  <script src="{{ asset ('assets/js/plugins/loaders/blockui.min.js') }}"></script>
  <!-- /core JS files -->

  <!-- Theme JS files -->
  <script src="{{ asset ('assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
  <script src="{{ asset ('assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
  <script src="{{ asset ('assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
  <script src="{{ asset ('assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
  <script src="{{ asset ('assets/js/plugins/ui/moment/moment.min.js') }}"></script>
  <script src="{{ asset ('assets/js/plugins/pickers/daterangepicker.js') }}"></script>

  <script src="{{ asset ('assets/js/app.js') }}"></script>
  <script src="{{ asset ('assets/js/demo_pages/dashboard.js') }}s"></script>
  <!-- /theme JS files -->
</head>

<body class="login-container">



	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Registration form -->
					<form method="POST" action="{{ route('register') }}">
            @csrf
						<div class="row">
							<div class="col-lg-6 col-lg-offset-3">
								<div class="panel registration-form">
									<div class="panel-body">
										<div class="text-center">
											<div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
											<h5 class="content-group-lg">Create account <small class="display-block">All fields are required</small></h5>
										</div>

										<div class="form-group has-feedback">

											<input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Choose username" required autofocus>
											<div class="form-control-feedback">
												<i class="icon-user-plus text-muted"></i>
											</div>
										</div>

                      										<div class="row">
                      											<div class="col-md-12">
                      												<div class="form-group has-feedback">

                      													<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter Your email" required>
                      													<div class="form-control-feedback">
                      														<i class="icon-mention text-muted"></i>
                      													</div>
                      												</div>
                      											</div>


                      										</div>


										<div class="row">
											<div class="col-md-6">
												<div class="form-group has-feedback">
													<input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" placeholder="First Name" required autofocus>
													<div class="form-control-feedback">
														<i class="icon-user-check text-muted"></i>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group has-feedback">
													<input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" placeholder="Last Name" required autofocus>
													<div class="form-control-feedback">
														<i class="icon-user-check text-muted"></i>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group has-feedback">
                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Create password" required>
													<div class="form-control-feedback">
														<i class="icon-user-lock text-muted"></i>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group has-feedback">

													<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repeat password" required>
													<div class="form-control-feedback">
														<i class="icon-user-lock text-muted"></i>
													</div>
												</div>
											</div>
										</div>


										<div class="form-group">




											<div class="checkbox">
												<label>
													<input type="checkbox" class="styled">
													Accept <a href="#">terms of service</a>
												</label>
											</div>
										</div>

										<div class="text-right">
											<a href="{{ route('login') }}" type="submit" class="btn btn-link"><i class="icon-arrow-left13 position-left"></i> Back to login form</a>
											<button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-10"><b><i class="icon-plus3"></i></b> Create account</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
					<!-- /registration form -->


					<!-- Footer -->
					<div class="footer text-muted text-center">
						&copy; 2018. <a href="#">Property Tax Management System</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Bugema #DevTeam</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>

@endsection
