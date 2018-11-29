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

<body class="login-container login-cover">
  <!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
        
			</ul>
      <h4>Welcome to the Official Property Tax Registration Portal</h4>
		</div>


	</div>
	<!-- /main navbar -->

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content pb-20">

					<!-- Form with validation -->
					<form method="POST" action="{{ route('login') }}" class="form-validate">
            @csrf
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
								<h5 class="content-group">Login to your account <small class="display-block">Your credentials</small></h5>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email Address" name="email" value="{{ old('email') }}" required="required">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required="required">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group login-options">
								<div class="row">
									<div class="col-sm-6">
										<label class="checkbox-inline">
											<input type="checkbox" class="styled" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} checked="checked">
											Remember
										</label>
									</div>

									<div class="col-sm-6 text-right">
										<a href="{{ route('password.request') }}">Forgot password?</a>
									</div>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn bg-blue btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
							</div>

							<div class="content-divider text-muted form-group"><span>or sign in with</span></div>
							<ul class="list-inline form-group list-inline-condensed text-center">
								<li><a href="#" class="btn border-indigo text-indigo btn-flat btn-icon btn-rounded"><i class="icon-facebook"></i></a></li>
								<li><a href="#" class="btn border-pink-300 text-pink-300 btn-flat btn-icon btn-rounded"><i class="icon-dribbble3"></i></a></li>
								<li><a href="#" class="btn border-slate-600 text-slate-600 btn-flat btn-icon btn-rounded"><i class="icon-github"></i></a></li>
								<li><a href="#" class="btn border-info text-info btn-flat btn-icon btn-rounded"><i class="icon-twitter"></i></a></li>
							</ul>

							<div class="content-divider text-muted form-group"><span>Don't have an account?</span></div>

							<a href="{{ route('register') }}" class="btn bg-green btn-block">Sign up</a>

							<span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
						</div>
					</form>
					<!-- /form with validation -->

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
