@extends('layouts.app')

@section('content')

<!-- Page Title
============================================= -->
@foreach($partner_page as $p)
<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('{{asset('partner/'.$p->image_header)}}'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">

	<div class="container clearfix">
		<h1>{{$p->title_header}}</h1>
		<span>{{$p->subtitle_header}}</span>
		<ol class="breadcrumb">
			<li><a href="{{ route('home_path') }}">Home</a></li>
			<li class="active">Partners</li>
		</ol>
	</div>

</section><!-- #page-title end -->
@endforeach
<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap">
        @foreach($partner_page as $p1)
		<div class="container clearfix">

			<div class="col-md-4 topmargin-xs bottommargin-xs">
				<img data-animate="fadeInLeftBig" src="{{asset('partner/'.$p1->image)}}" alt="{{$p1->alt}}" class="fadeInLeftBig animated">
			</div>

			<div class="col-md-8 topmargin-xs bottommargin-xs">

				<div class="heading-block topmargin">
					<h3>{{$p1->title_s1}}</h3>
				</div>

			</div>{!!$p1->text_s1 !!}</div>

			</div>

		</div>
     @endforeach

	 @foreach($partner_page as $p2)

		<div class="section parallax dark nobottommargin nobottomborder" style="background: url('{{asset('partner/'.$p2->bg)}}'); background-position: center; background-size: cover; background-repeat:no-repeat" data-stellar-background-ratio="0.3">

			<div class="container clearfix">

				<div class="heading-block center">
					<h2>{{$p2->title_s2}}</h2>
					<span>{!!$p2->text_s2 !!}</span>
				</div>

			</div>

		</div>
		@endforeach
		
		<br><br>


		<div class="container clearfix center bottommargin">
			@foreach($partner_page as $t)			
				<div class="heading-block">
						<h2>{{$t->title_s3}}</h2>
				</div>
			@endforeach
			@foreach($partner_page as $page)
			<div class="col-md-4 bottommargin-sm">
				<a href="{{$page->link1_s3}}" target="_blank" class="feature-box media-box">
					<div class="fbox-media">
						<img src="{{asset('partner/'.$page->image1)}}" alt="{{$page->alt1}}">
					</div>
					<div class="fbox-desc">
						<h3>{{$page->small_title1_s3}}<span class="subtitle">{{$page->small_subtitle1_s3}}</span></h3>
						<div>{!!$page->p1_s3 !!}</div>
					</div>
				</a>
			</div>
			
			<div class="col-md-4 bottommargin-sm">
				<a href="{{$page->link2_s3}}" target="_blank" class="feature-box media-box">
					<div class="fbox-media">
						<img src="{{asset('partner/'.$page->image2)}}" alt="{{$page->alt2}}">
					</div>
					<div class="fbox-desc">
						<h3>{{$page->small_title2_s3}}<span class="subtitle">{{$page->small_subtitle2_s3}}</span></h3>
						<div>{!!$page->p2_s3 !!}</div>
					</div>
				</a>
			</div>

			<div class="col-md-4 bottommargin-sm">
				<a href="{{$page->link3_s3}}" target="_blank" class="feature-box media-box">
					<div class="fbox-media">
						<img src="{{asset('partner/'.$page->image3)}}" alt="{{$page->alt3}}">
					</div>
					<div class="fbox-desc">
						<h3>{{$page->small_title3_s3}}<span class="subtitle">{{$page->small_subtitle3_s3}}</span></h3>
						<div>{!!$page->p3_s3 !!}</div>
					</div>
				</a>
			</div>
			@endforeach	
		</div><br>


		<div class="container clearfix center ">

				@foreach($partner_page as $t1)			
					<div class="heading-block">
						<h2>{{$t1->title_s4}}</h2>
					</div>
			    @endforeach

		@foreach($partner_page as $p3)
			<div class="col-md-4 bottommargin-sm">
				<a href="{{$p3->link4_s4}}" target="_blank" class="feature-box media-box">
					<div class="fbox-media">
						<img src="{{asset('partner/'.$p3->image4)}}" alt="{{$p3->alt4}}">
					</div>
					<div class="fbox-desc">
						<h3>{{$p3->small_title4_s4}}<span class="subtitle">{{$p3->small_subtitle4_s4}}</span></h3>
						<div>{!!$p3->p4_s4 !!}</div>
					</div>
				</a>
			</div>

			<div class="col-md-4 bottommargin-sm">
				<a href="{{$p3->link5_s4}}" target="_blank" class="feature-box media-box">
					<div class="fbox-media">
						<img src="{{asset('partner/'.$p3->image5)}}" alt="{{$p3->alt5}}">

					</div>
					<div class="fbox-desc">
						<h3>{{$p3->small_title5_s4}}<span class="subtitle">{{$p3->small_subtitle5_s4}}</span></h3>
						<div>{!!$p3->p5_s4 !!}</div>
					</div>
				</a>
			</div>

			<div class="col-md-4 bottommargin-sm">
				<a href="{{$p3->link6_s4}}" target="_blank" class="feature-box media-box">
					<div class="fbox-media">
						<img src="{{asset('partner/'.$p3->image6)}}" alt="{{$p3->alt6}}">

					</div>
					<div class="fbox-desc">
						<h3>{{$p3->small_title6_s4}}<span class="subtitle">{{$p3->small_subtitle6_s4}}</span></h3>
						<div>{!!$p3->p6_s4 !!}</div>
					</div>
				</a>
			</div>
      @endforeach
		</div>

	</div>

</section>

@endsection