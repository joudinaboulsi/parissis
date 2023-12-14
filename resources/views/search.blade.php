@extends('layouts.app')

@section('content')

<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('images/about/parallaxpro.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">

	<div class="container clearfix">
		<h1>Search</h1>
		<span>Results for: {{$query}}</span>
		<ol class="breadcrumb">
			<li><a href="{{ route('home_path') }}">Home</a></li>
			<li class="active">Search</li>
		</ol>
	</div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content" style="margin-bottom: 0px;">

	<div class="content-wrap">

		<div class="container clearfix">
			
			@if($projectsList)

			<!-- Portfolio Items
			============================================= -->
			<div id="portfolio" class="portfolio grid-container portfolio-3 clearfix">

				@foreach($projectsList as $p)

				<article class="portfolio-item">
					<div class="portfolio-image">
						<a href="{{ route('project_details_path', $p->id) }}">
							<img src="{{getenv('S3_URL')}}/projects/{{$p->main_image}}" alt="{{$p->title}}">
						</a>
						<a href="{{ route('project_details_path', $p->id) }}">
							<div class="portfolio-overlay">
							</div>
						</a>
					</div>
					<div class="portfolio-desc projects-desc">
						<h3><a href="{{ route('project_details_path', $p->id) }}">{{$p->title}}</a></h3>
						<span>{{$p->type}} @if($p->sub_type != null) | {{$p->sub_type}} @endif</span>

					</div>
				</article>
				@endforeach
				

			</div><!-- #portfolio end -->

			@else

			<p>No results found.</p>

			@endif

		</div>

	</div>

</section>

@endsection