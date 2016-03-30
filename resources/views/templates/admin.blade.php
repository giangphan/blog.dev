<!DOCTYPE html5>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('public/frontend/bootstrap/css/bootstrap.css')}}" media="screen,projection" />

	<link rel="stylesheet" href="{{ asset('public/frontend/css/main.css')}}" media="screen,projection" />
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/bs/dt-1.10.11,af-2.1.1,b-1.1.2,b-print-1.1.2,r-2.0.2,sc-1.4.1,se-1.1.2/datatables.min.css"/>
	@yield('head')
	<title>@yield('title')</title>
	<!--Let browser know website is optimized for mobile-->
</head>

<body class="site-menubar-unfold">
	<nav class="site-navbar navbar navbar-default navbar-fixed-top">
		<div class="navbar-header">
			<button data-toggle="menubar" href="#" role="button" class="navbar-toggle icon toggle-icon toggle-close navbar-toggle-left">
				<span class="sr-only">Toggle menubar</span>
				<span class="toggle-icon-bar"></span>
			</button>
			<div class="navbar-brand navbar-brand-center">
				<img class="navbar-brand-logo hidden-xs" src="../assets/images/logo-blue.png" title="Remark">
				<img class="navbar-brand-logo hidden-sm hidden-md hidden-lg" src="../assets/images/logo.png" title="Remark">
			</div>
		</div>
		<div class="navbar-container container-fluid">
			<div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
				<ul class="nav navbar-toolbar">
					<li class="" id="toggleMenubar">
						<a data-toggle="menubar" href="#" role="button" class="">
							<i class="icon toggle-icon toggle-arrow-left unfolded">
								<span class="sr-only">Toggle menubar</span>
								<span class="toggle-icon-bar"></span>
							</i>
						</a>
					</li>
					<li class="" id="toggleFullscreen">
						<a data-toggle="fullscreen" href="#" role="button" class="">
							<i class="fa fa-desktop">
							</i>
							<span class="sr-only">Toggle Fullscreen</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="site-menubar">
		<div class="menubar-body">
			<ul class="site-menu">
				<li class="site-menu-item">
					<a href="{{ URL::route('dashboard') }}">
						<i class="site-menu-icon glyphicon glyphicon-th-list"></i>
						<span class="site-menu-title">Danh sách</span>
					</a>
				</li>
				<li class="site-menu-item">
					<a href="{{ URL::route('order.getAdd') }}">
						<i class="site-menu-icon glyphicon glyphicon-plus"></i>
						<span class="site-menu-title">Tạo đơn hàng</span>
					</a>
				</li>
				<li class="site-menu-item">
					<a href="{{ URL::route('giaotrongngay') }}">
						<i class="site-menu-icon glyphicon glyphicon-send"></i>
						<span class="site-menu-title">Giao trong ngày{{ $testVariable }} </span>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="page">
		@yield('page_heading')
		@yield('page_content')
	</div>
	<script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>
	<script src="{{asset('public/frontend/bootstrap/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/t/bs/dt-1.10.11,af-2.1.1,b-1.1.2,b-print-1.1.2,r-2.0.2,sc-1.4.1,se-1.1.2/datatables.min.js"></script>
	<script src="{{asset('public/frontend/js/script.js')}}"></script>
	@yield('script')
</body>
</html>