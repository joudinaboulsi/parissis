@extends('layouts.app')

@section('content')

<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('images/about/parallax.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">

	<div class="container clearfix">
		<h1>News</h1>
		<span>Take a look on our News</span>
		<ol class="breadcrumb">
			<li><a href="{{ route('home_path') }}">Home</a></li>
			<li class="active">News</li>
		</ol>
	</div>

</section><!-- #page-title end -->

<section id="content" style="margin-bottom: 0px;">

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- Posts
			============================================= -->
			<div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows" style="position: relative; height: 1097.84px;">

				@foreach($newsList as $n)
				<div class="entry clearfix" style="position: absolute; left: 0px; top: 0px;">
					<div class="entry-image">
						<a href="{{getenv('S3_URL')}}/news/{{$n->img}}" data-lightbox="image"><img class="image_fade" src="{{getenv('S3_URL')}}/news/{{$n->img}}" alt="Standard Post with Image" style="opacity: 1;"></a>
					</div>
					<div class="entry-title">
						<h2>{{$n->news_title}}</h2>
					</div>
					<ul class="entry-meta clearfix">
						<li><i class="icon-calendar3"></i><?php echo date("jS F, Y", strtotime($n->created_at)); ?></li>
					</ul>
					<div class="entry-content">
						<p><?php echo htmlspecialchars_decode($n->news_body);?></p>
					</div>
				</div>
				@endforeach

			</div><!-- #posts end -->


		</div>

	</div>

</section>

@endsection