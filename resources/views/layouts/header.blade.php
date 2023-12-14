<?php $url = Request::path(); ?>

<!-- Header
============================================= -->
<header id="header" class="transparent-header semi-transparent full-header dark" data-sticky-class="not-dark">

	<div id="header-wrap">

		<div class="container clearfix">

			<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

			<!-- Logo
			============================================= -->
			<div id="logo">
				<a href="/" class="standard-logo" data-dark-logo="{{asset('settings/'.app('contact')->logo)}}"><img src="{{asset('settings/'.app('contact')->logo)}}" alt="Canvas Logo"></a>
				<a href="/" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
			</div><!-- #logo end -->

			<div class="header-misc">
                <div id="top-search" class="header-misc-icon">
                    <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>

					<form class="top-search-form" action="{{route('search_path')}}" method="post">
						@csrf
						<input type="text" name="query" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
					</form>
                </div>
			</div>

			<!-- Primary Navigation
			============================================= -->
			<nav id="primary-menu" class="dark">

				<ul>
					<li class="{{ ($url == '/') ? 'current' : '' }}"><a href="{{ route('home_path') }}">Home</a></li>
					<li class="{{ ($url == 'about') ? 'current' : '' }}"><a href="{{ route('company_path') }}">About Us</a></li>
					<li class="{{ ($url == 'team') ? 'current' : '' }}"><a href="{{ route('team_path') }}">Team</a></li>
					<li class="{{ ($url == 'services') ? 'current' : '' }}"><a href="{{ route('services_path') }}">Services</a></li>
					<li class="{{ ($url == 'projects') ? 'current' : '' }}"><a href="{{ route('projects_path') }}">Projects</a></li>
					<li class="{{ ($url == 'partners') ? 'current' : '' }}"><a href="{{ route('partners_path') }}">Partners</a></li>
					<li class="{{ ($url == 'contact') ? 'current' : '' }}"><a href="{{ route('contact_path') }}">Contact</a></li>
					<li><a href="{{asset('settings/'.app('contact')->pdf)}}" class="button button-rounded" target="_blank">Brochure</a></li>
					<li class="visible-xs visible-sm"><br></li>
				</ul>

			</nav><!-- #primary-menu end -->

			<form class="top-search-form hidden" action="{{route('search_path')}}" method="post">
				@csrf
				<input type="text" name="query" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
			</form>

		</div>

	</div>

</header><!-- #header end -->