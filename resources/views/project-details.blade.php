@extends('layouts.app')

@section('content')


<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark" style="height:100px; padding: 250px 0; background-image: url('{{getenv('S3_URL')}}/projects/{{$getProjectInfo[0]->main_image}}'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">

	<div class="container clearfix">
		<h1>Project Details</h1>
		<span>Know more about this Project</span>
		<ol class="breadcrumb">
			<li><a href="{{ route('home_path') }}">Home</a></li>
			<li class="active">Project details</li>
		</ol>
	</div>

</section><!-- #page-title end -->

<div class="content-wrap">

	<div class="container clearfix">

		<!-- Portfolio Single Image
		============================================= -->
		<div class="col-md-8 col-xs-12 portfolio-single-image bottommargin-sm">
			<div class="portfolio-single-image masonry-thumbs col-2" data-lightbox="gallery" style="position: relative;">
				@foreach($getGallery as $g)
				<a href="{{getenv('S3_URL')}}/projects/{{$g->image}}" data-lightbox="gallery-item" style="position: absolute; left: 0px; top: 0px;"><img class="image_fade" src="{{getenv('S3_URL')}}/projects/{{$g->image}}" alt="Gallery Thumb 1" style="opacity: 1;"></a>
				 @endforeach
			
			</div>
		</div><!-- .portfolio-single-image end -->

		<!-- Portfolio Single Content
		============================================= -->
		<div class="col-md-4 portfolio-single-content nobottommargin">

			<!-- Portfolio Single - Description
			============================================= -->
			<div class="fancy-title title-bottom-border">
				<h2>{{$getProjectInfo[0]->title}}</h2>
			</div>
			<p>{{$getProjectInfo[0]->description}}</p>
			<!-- Portfolio Single - Description End -->
			<p><b>Type :</b> @foreach($getProjectTypes as $type) {{$type->type}}. @endforeach @if($getProjectInfo[0]->sub_type != null) | {{$getProjectInfo[0]->sub_type}} @endif</p>

			<div class="line"></div>

			<!-- Portfolio Single - Meta
			============================================= -->
			<ul class="portfolio-meta bottommargin">

				<li><span><i class="icon-building"></i>Client:</span> {{$getProjectInfo[0]->client}}</li>
				<li><span><i class="icon-user"></i>Architect:</span> {{$getProjectInfo[0]->architect}}</li>
				<li><span><i class="icon-user2"></i>Main Contractor:</span> {{$getProjectInfo[0]->contractor}}</li>
				<li><span><i class="icon-lightbulb"></i>Consultant:</span> {{$getProjectInfo[0]->consultant}}</li>
				<li><span><i class="icon-location"></i>Location:</span>{{$getProjectInfo[0]->location}}</li>
				<li><span><i class="icon-calendar3"></i>Execution Dates:</span> {{$getProjectInfo[0]->execution_date}}</li>

			</ul>
			<!-- Portfolio Single - Meta End -->

		</div><!-- .portfolio-single-content end -->

		<div class="clear"></div>

	</div>

	</div>

@endsection