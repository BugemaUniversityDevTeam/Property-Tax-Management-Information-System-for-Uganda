<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

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
  <body>
    <!-- Main navbar -->
    	<div class="navbar navbar-inverse">
    		<div class="navbar-header">
    			<a class="navbar-brand" href="index.html"><img src="../../../../global_assets/images/logo_light.png" alt=""></a>

    			<ul class="nav navbar-nav visible-xs-block">
    				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
    				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
    			</ul>
    		</div>

    		<div class="navbar-collapse collapse" id="navbar-mobile">
    			<ul class="nav navbar-nav">
    				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

    				<li class="dropdown">
    					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    						<i class="icon-git-compare"></i>
    						<span class="visible-xs-inline-block position-right">Git updates</span>
    						<span class="badge bg-warning-400">9</span>
    					</a>

    					<div class="dropdown-menu dropdown-content">
    						<div class="dropdown-content-heading">
    							Git updates
    							<ul class="icons-list">
    								<li><a href="#"><i class="icon-sync"></i></a></li>
    							</ul>
    						</div>

    						<ul class="media-list dropdown-content-body width-350">
    							<li class="media">
    								<div class="media-left">
    									<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
    								</div>

    								<div class="media-body">
    									Drop the IE <a href="#">specific hacks</a> for temporal inputs
    									<div class="media-annotation">4 minutes ago</div>
    								</div>
    							</li>

    							<li class="media">
    								<div class="media-left">
    									<a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
    								</div>

    								<div class="media-body">
    									Add full font overrides for popovers and tooltips
    									<div class="media-annotation">36 minutes ago</div>
    								</div>
    							</li>

    							<li class="media">
    								<div class="media-left">
    									<a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
    								</div>

    								<div class="media-body">
    									<a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch
    									<div class="media-annotation">2 hours ago</div>
    								</div>
    							</li>

    							<li class="media">
    								<div class="media-left">
    									<a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
    								</div>

    								<div class="media-body">
    									<a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches
    									<div class="media-annotation">Dec 18, 18:36</div>
    								</div>
    							</li>

    							<li class="media">
    								<div class="media-left">
    									<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
    								</div>

    								<div class="media-body">
    									Have Carousel ignore keyboard events
    									<div class="media-annotation">Dec 12, 05:46</div>
    								</div>
    							</li>
    						</ul>

    						<div class="dropdown-content-footer">
    							<a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
    						</div>
    					</div>
    				</li>
    			</ul>

    			<p class="navbar-text"><span class="label bg-success">Online</span></p>

    			<ul class="nav navbar-nav navbar-right">
    				<li class="dropdown language-switch">
    					<a class="dropdown-toggle" data-toggle="dropdown">
    						<img src="../../../../global_assets/images/flags/gb.png" class="position-left" alt="">
    						English
    						<span class="caret"></span>
    					</a>

    					<ul class="dropdown-menu">
    						<li><a class="deutsch"><img src="../../../../global_assets/images/flags/de.png" alt=""> Deutsch</a></li>
    						<li><a class="ukrainian"><img src="../../../../global_assets/images/flags/ua.png" alt=""> Українська</a></li>
    						<li><a class="english"><img src="../../../../global_assets/images/flags/gb.png" alt=""> English</a></li>
    						<li><a class="espana"><img src="../../../../global_assets/images/flags/es.png" alt=""> España</a></li>
    						<li><a class="russian"><img src="../../../../global_assets/images/flags/ru.png" alt=""> Русский</a></li>
    					</ul>
    				</li>

    				<li class="dropdown">
    					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    						<i class="icon-bubbles4"></i>
    						<span class="visible-xs-inline-block position-right">Messages</span>
    						<span class="badge bg-warning-400">2</span>
    					</a>

    					<div class="dropdown-menu dropdown-content width-350">
    						<div class="dropdown-content-heading">
    							Messages
    							<ul class="icons-list">
    								<li><a href="#"><i class="icon-compose"></i></a></li>
    							</ul>
    						</div>

    						<ul class="media-list dropdown-content-body">
    							<li class="media">
    								<div class="media-left">
    									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-circle img-sm" alt="">
    									<span class="badge bg-danger-400 media-badge">5</span>
    								</div>

    								<div class="media-body">
    									<a href="#" class="media-heading">
    										<span class="text-semibold">James Alexander</span>
    										<span class="media-annotation pull-right">04:58</span>
    									</a>

    									<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
    								</div>
    							</li>

    							<li class="media">
    								<div class="media-left">
    									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-circle img-sm" alt="">
    									<span class="badge bg-danger-400 media-badge">4</span>
    								</div>

    								<div class="media-body">
    									<a href="#" class="media-heading">
    										<span class="text-semibold">Margo Baker</span>
    										<span class="media-annotation pull-right">12:16</span>
    									</a>

    									<span class="text-muted">That was something he was unable to do because...</span>
    								</div>
    							</li>

    							<li class="media">
    								<div class="media-left"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-circle img-sm" alt=""></div>
    								<div class="media-body">
    									<a href="#" class="media-heading">
    										<span class="text-semibold">Jeremy Victorino</span>
    										<span class="media-annotation pull-right">22:48</span>
    									</a>

    									<span class="text-muted">But that would be extremely strained and suspicious...</span>
    								</div>
    							</li>

    							<li class="media">
    								<div class="media-left"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-circle img-sm" alt=""></div>
    								<div class="media-body">
    									<a href="#" class="media-heading">
    										<span class="text-semibold">Beatrix Diaz</span>
    										<span class="media-annotation pull-right">Tue</span>
    									</a>

    									<span class="text-muted">What a strenuous career it is that I've chosen...</span>
    								</div>
    							</li>

    							<li class="media">
    								<div class="media-left"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-circle img-sm" alt=""></div>
    								<div class="media-body">
    									<a href="#" class="media-heading">
    										<span class="text-semibold">Richard Vango</span>
    										<span class="media-annotation pull-right">Mon</span>
    									</a>

    									<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
    								</div>
    							</li>
    						</ul>

    						<div class="dropdown-content-footer">
    							<a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
    						</div>
    					</div>
    				</li>

    				<li class="dropdown dropdown-user">
    					<a class="dropdown-toggle" data-toggle="dropdown">
    						<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
    						<span>Victoria</span>
    						<i class="caret"></i>
    					</a>

    					<ul class="dropdown-menu dropdown-menu-right">
    						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
    						<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
    						<li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
    						<li class="divider"></li>
    						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
    						<li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
    					</ul>
    				</li>
    			</ul>
    		</div>
    	</div>
    	<!-- /main navbar -->

  </body>
</html>
