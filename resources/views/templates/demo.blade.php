<!DOCTYPE html5>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('public/frontend/bootstrap/css/bootstrap.css')}}" media="screen,projection" />
	<link rel="stylesheet" href="{{ asset('public/frontend/bootstrap/css/bootstrap-extend.min.css')}}" media="screen,projection" />
	<link rel="stylesheet" href="{{ asset('public/frontend/css/main.css')}}" media="screen,projection" />
	<link rel="stylesheet" href="{{ asset('public/frontend/css/site.css')}}" media="screen,projection" />
	@yield('head')
	<title>@yield('title')</title>
	<!--Let browser know website is optimized for mobile-->
</head>

<body>
	<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse bg-indigo-600"
	role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
		data-toggle="menubar">
		<span class="sr-only">Toggle navigation</span>
		<span class="hamburger-bar"></span>
	</button>
	<button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
	data-toggle="collapse">
	<i class="icon wb-more-horizontal" aria-hidden="true"></i>
</button>
<div class="navbar-brand navbar-brand-center">
	<img class="navbar-brand-logo hidden-xs" src="{{ asset('public/frontend/images/logo-blue.png')}}" title="Remark">
	<img class="navbar-brand-logo hidden-sm hidden-md hidden-lg" src="{{ asset('public/frontend/images/logo.png')}}"
	title="Remark">
	<span class="navbar-brand-text"> Remark</span>
</div>
<button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
data-toggle="collapse">
<span class="sr-only">Toggle Search</span>
<i class="icon wb-search" aria-hidden="true"></i>
</button>
</div>

<div class="navbar-container container-fluid">
	<!-- Navbar Collapse -->
	<div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
		<!-- Navbar Toolbar -->
		<ul class="nav navbar-toolbar">
			<li class="hidden-float" id="toggleMenubar">
				<a data-toggle="menubar" href="#" role="button">
					<i class="icon hamburger hamburger-arrow-left">
						<span class="sr-only">Toggle menubar</span>
						<span class="hamburger-bar"></span>
					</i>
				</a>
			</li>
			<li class="hidden-xs" id="toggleFullscreen">
				<a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
					<span class="sr-only">Toggle fullscreen</span>
				</a>
			</li>
			<li class="hidden-float">
				<a class="icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
				role="button">
				<span class="sr-only">Toggle Search</span>
			</a>
		</li>
	</ul>
</li>
</ul>
<!-- End Navbar Toolbar -->

<!-- Navbar Toolbar Right -->
<ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up"
		aria-expanded="false" role="button">
		<span class="flag-icon flag-icon-us"></span>
	</a>
</li>
<li class="dropdown">
	<a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
	data-animation="scale-up" role="button">
	<span class="avatar avatar-online">
		<img src="../global/portraits/5.jpg" alt="...">
		<i></i>
	</span>
</a>
<ul class="dropdown-menu" role="menu">
	<li role="presentation">
		<a href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
	</li>
	<li role="presentation">
		<a href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
	</li>
	<li role="presentation">
		<a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
	</li>
	<li class="divider" role="presentation"></li>
	<li role="presentation">
		<a href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
	</li>
</ul>
</li>
<li class="dropdown">
	<a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
	data-animation="scale-up" role="button">
	<i class="icon wb-bell" aria-hidden="true"></i>
	<span class="badge badge-danger up">5</span>
</a>
<ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
	<li class="dropdown-menu-header" role="presentation">
		<h5>NOTIFICATIONS</h5>
		<span class="label label-round label-danger">New 5</span>
	</li>

	<li class="list-group" role="presentation">
		<div data-role="container">
			<div data-role="content">
				<a class="list-group-item" href="javascript:void(0)" role="menuitem">
					<div class="media">
						<div class="media-left padding-right-10">
							<i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading">A new order has been placed</h6>
							<time class="media-meta" datetime="2015-06-12T20:50:48+08:00">5 hours ago</time>
						</div>
					</div>
				</a>
				<a class="list-group-item" href="javascript:void(0)" role="menuitem">
					<div class="media">
						<div class="media-left padding-right-10">
							<i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading">Completed the task</h6>
							<time class="media-meta" datetime="2015-06-11T18:29:20+08:00">2 days ago</time>
						</div>
					</div>
				</a>
				<a class="list-group-item" href="javascript:void(0)" role="menuitem">
					<div class="media">
						<div class="media-left padding-right-10">
							<i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading">Settings updated</h6>
							<time class="media-meta" datetime="2015-06-11T14:05:00+08:00">2 days ago</time>
						</div>
					</div>
				</a>
				<a class="list-group-item" href="javascript:void(0)" role="menuitem">
					<div class="media">
						<div class="media-left padding-right-10">
							<i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading">Event started</h6>
							<time class="media-meta" datetime="2015-06-10T13:50:18+08:00">3 days ago</time>
						</div>
					</div>
				</a>
				<a class="list-group-item" href="javascript:void(0)" role="menuitem">
					<div class="media">
						<div class="media-left padding-right-10">
							<i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading">Message received</h6>
							<time class="media-meta" datetime="2015-06-10T12:34:48+08:00">3 days ago</time>
						</div>
					</div>
				</a>
			</div>
		</div>
	</li>
	<li class="dropdown-menu-footer" role="presentation">
		<a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
			<i class="icon wb-settings" aria-hidden="true"></i>
		</a>
		<a href="javascript:void(0)" role="menuitem">
			All notifications
		</a>
	</li>
</ul>
</li>
</ul>
<!-- End Navbar Toolbar Right -->
</div>
<!-- End Navbar Collapse -->

<!-- Site Navbar Seach -->
<div class="collapse navbar-search-overlap" id="site-navbar-search">
	<form role="search">
		<div class="form-group">
			<div class="input-search">
				<i class="input-search-icon wb-search" aria-hidden="true"></i>
				<input type="text" class="form-control" name="site-search" placeholder="Search...">
				<button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
				data-toggle="collapse" aria-label="Close"></button>
			</div>
		</div>
	</form>
</div>
<!-- End Site Navbar Seach -->
</div>
</nav>
<div class="site-menubar site-menubar-light">
	<div class="site-menubar-body">
		<ul class="site-menu">
			<li class="site-menu-item has-sub">
				<a href="javascript:void(0)">
					<i class="fa fa-anchor" aria-hidden="true"></i>
					<span class="site-menu-title">Dashboard</span>
					<div class="site-menu-badge">
						<span class="badge badge-success">2</span>
					</div>
				</a>
				<ul class="site-menu-sub">
					<li class="site-menu-item active">
						<a class="animsition-link" href="index.html">
							<span class="site-menu-title">Dashboard v1</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a class="animsition-link" href="dashboard/v2.html">
							<span class="site-menu-title">Dashboard v2</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="site-menu-item has-sub">
				<a href="javascript:void(0)">
					<i class="site-menu-icon wb-layout" aria-hidden="true"></i>
					<span class="site-menu-title">Layouts</span>
				</a>
				<ul class="site-menu-sub">
					<li class="site-menu-item">
						<a class="animsition-link" href="layouts/menu-collapsed.html">
							<span class="site-menu-title">Menu Collapsed</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a class="animsition-link" href="layouts/grids.html">
							<span class="site-menu-title">Grid Scaffolding</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a class="animsition-link" href="layouts/layout-grid.html">
							<span class="site-menu-title">Layout Grid</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="site-menu-item has-sub">
				<a href="javascript:void(0)">
					<i class="site-menu-icon wb-file" aria-hidden="true"></i>
					<span class="site-menu-title">Pages</span>
				</a>
				<ul class="site-menu-sub">
					<li class="site-menu-item has-sub">
						<a href="javascript:void(0)">
							<span class="site-menu-title">Errors</span>
							<span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
							<li class="site-menu-item">
								<a class="animsition-link" href="pages/error-400.html">
									<span class="site-menu-title">400</span>
								</a>
							</li>
							<li class="site-menu-item">
								<a class="animsition-link" href="pages/error-403.html">
									<span class="site-menu-title">403</span>
								</a>
							</li>
						</ul>
					</li>
					
					<li class="site-menu-item">
						<a class="animsition-link" href="pages/code-editor.html">
							<span class="site-menu-title">Code Editor</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a class="animsition-link" href="pages/profile.html">
							<span class="site-menu-title">Profile</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="site-menu-item has-sub">
				<a href="javascript:void(0)">
					<i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
					<span class="site-menu-title">Basic UI</span>
				</a>
				<ul class="site-menu-sub">
					<li class="site-menu-item has-sub">
						<a href="javascript:void(0)">
							<span class="site-menu-title">Panel</span>
							<span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
							<li class="site-menu-item">
								<a class="animsition-link" href="uikit/panel-structure.html">
									<span class="site-menu-title">Panel Structure</span>
								</a>
							</li>
							<li class="site-menu-item">
								<a class="animsition-link" href="uikit/panel-actions.html">
									<span class="site-menu-title">Panel Actions</span>
								</a>
							</li>
							<li class="site-menu-item">
								<a class="animsition-link" href="uikit/panel-portlets.html">
									<span class="site-menu-title">Panel Portlets</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="site-menu-item">
						<a class="animsition-link" href="uikit/utilities.html">
							<span class="site-menu-title">Utilties</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="site-menu-item has-sub">
				<a href="javascript:void(0)">
					<i class="site-menu-icon wb-hammer" aria-hidden="true"></i>
					<span class="site-menu-title">Advanced UI</span>
				</a>
				<ul class="site-menu-sub">
					<li class="site-menu-item hidden-xs site-tour-trigger">
						<a href="javascript:void(0)">
							<span class="site-menu-title">Tour</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a class="animsition-link" href="advanced/animation.html">
							<span class="site-menu-title">Animation</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a class="animsition-link" href="advanced/bootbox-sweetalert.html">
							<span class="site-menu-title">Bootbox &amp; Sweetalert</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="site-menu-item has-sub">
				<a href="javascript:void(0)">
					<i class="site-menu-icon wb-plugin" aria-hidden="true"></i>
					<span class="site-menu-title">Structure</span>
				</a>
				<ul class="site-menu-sub">
					<li class="site-menu-item">
						<a class="animsition-link" href="structure/alerts.html">
							<span class="site-menu-title">Alerts</span>
						</a>
					</li>
					
					<li class="site-menu-item">
						<a class="animsition-link" href="structure/pagination.html">
							<span class="site-menu-title">Pagination</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a class="animsition-link" href="structure/breadcrumbs.html">
							<span class="site-menu-title">Breadcrumbs</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="site-menu-item has-sub">
				<a href="javascript:void(0)">
					<i class="site-menu-icon wb-extension" aria-hidden="true"></i>
					<span class="site-menu-title">Widgets</span>
				</a>
				<ul class="site-menu-sub">
					<li class="site-menu-item">
						<a class="animsition-link" href="widgets/statistics.html">
							<span class="site-menu-title">Statistics Widgets</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a class="animsition-link" href="widgets/data.html">
							<span class="site-menu-title">Data Widgets</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="site-menu-item has-sub">
				<a href="javascript:void(0)">
					<i class="site-menu-icon wb-library" aria-hidden="true"></i>
					<span class="site-menu-title">Forms</span>
				</a>
				<ul class="site-menu-sub">
					<li class="site-menu-item">
						<a class="animsition-link" href="forms/general.html">
							<span class="site-menu-title">General Elements</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a class="animsition-link" href="forms/material.html">
							<span class="site-menu-title">Material Elements</span>
						</a>
					</li>
					<li class="site-menu-item has-sub">
						<a href="javascript:void(0)">
							<span class="site-menu-title">Editors</span>
							<span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
							<li class="site-menu-item">
								<a class="animsition-link" href="forms/editor-summernote.html">
									<span class="site-menu-title">Summernote</span>
								</a>
							</li>
							<li class="site-menu-item">
								<a class="animsition-link" href="forms/editor-markdown.html">
									<span class="site-menu-title">Markdown</span>
								</a>
							</li>
							<li class="site-menu-item">
								<a class="animsition-link" href="forms/editor-ace.html">
									<span class="site-menu-title">Ace Editor</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="site-menu-item">
						<a class="animsition-link" href="forms/image-cropping.html">
							<span class="site-menu-title">Image Cropping</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a class="animsition-link" href="forms/file-uploads.html">
							<span class="site-menu-title">File Uploads</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</div>
@yield('page_heading')
<div id="page_content">
	@yield('page_content')
</div>
<footer>
</footer>
<script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('public/frontend/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('public/frontend/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('public/frontend/vendor/asscroll/jquery-asScroll.min.js')}}"></script>
<script src="{{asset('public/frontend/vendor/mousewheel/jquery.mousewheel.min.js')}}"></script>
<script src="{{asset('public/frontend/vendor/asscrollable/jquery.asScrollable.all.min.js')}}"></script>
<script src="{{asset('public/frontend/vendor/ashoverscroll/jquery-asHoverScroll.min.js')}}"></script>

<script src="{{asset('public/frontend/js/core.min.js')}}"></script>
<script src="{{asset('public/frontend/js/site.min.js')}}"></script>
<script src="{{ assets('public/frontend/js/sections/menu.min.js')}}"></script>
<script src="{{ assets('public/frontend/js/sections/menubar.min.js')}}"></script>
<script src="{{ asset('public/frontend/js/components/asscrollable.min.js')}} "></script>
<script src="{{ asset('public/frontend/js/components/animsition.min.js')}} "></script>
<script src="{{ assets('public/frontend/js/v1.min.js')}} "></script>




<script src="{{asset('public/frontend/js/script.js')}}"></script>
@yield('script')
</body>
</html>