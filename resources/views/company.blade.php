@extends('layouts.app')

@section('content')

<!-- Page Title
============================================= -->
@foreach($company as $c)
<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('{{asset('company/'.$c->image_header)}}'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">

	<div class="container clearfix">
		<h1>{{$c->title_header}}</h1>
		<span>{{$c->subtitle_header}}</span>
		<ol class="breadcrumb">
			<li><a href="{{ route('home_path') }}">Home</a></li>
			<li class="active">Company</li>
		</ol>
	</div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap nobottompadding">

		<div class="container clearfix">

			<div class="col-md-6 col-xs-12 topmargin-sm bottommargin">
				<img data-animate="fadeInLeftBig" src="{{asset('company/'.$c->image_s1)}}" alt="{{$c->alt1}}" class="fadeInLeftBig animated" style="padding-top: 80px">
			</div>

			<div class="col-md-6 col-xs-12 topmargin-sm bottommargin-lg">

				<div class="heading-block topmargin">
					<h2>{{$c->title_s1}}</h2>
				</div>

				<div>{!!$c->text_s1 !!}</div>
				
				<div class="row" style="margin-bottom: 10px">
					<a href="{{$c->link_url}}" class="col button button-border button-rounded button-large noleftmargin topmargin-sm">{{$c->link_s1}}</a>
	            </div>

				<div class="row">
	            	<img src="{{asset('company/'.$c->img1_s1)}}" class="col alignleft img-circle img-thumbnail" alt="{{$c->alt1}}" style="max-width: 84px;" />
					<a href="#" data-toggle="modal" data-target="#en1" class="col button button-rounded button-large noleftmargin topmargin-sm">{{$c->btn}}</a>
					<a href="#" data-toggle="modal" data-target="#en2" class="col button button-rounded button-large noleftmargin topmargin-sm">{{$c->btn2}}</a>
	            </div>

			</div>

		</div>


		<div class="row clearfix common-height">	

			<div class="col-md-12 center col-padding" style="background-color: rgb(245, 245, 245);">
				<div>

					<div class="heading-block">
						<h2>{{$c->title_s2}}</h2>
						<span style="max-width:900px">
							{!!$c->text_s2 !!}
						</span>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="text-center">
								<img src="{{asset('company/'.$c->icon1)}}" alt="{{$c->alt1_s3}}" height="100">
								<h5 class="text-uppercase">{{$c->t1_s3}}</h5>
								<div>{!!$c->p1 !!}</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="text-center">
								<img src="{{asset('company/'.$c->icon2)}}" alt="{{$c->alt2_s3}}" height="100">
								<h5 class="text-uppercase">{{$c->t2_s3}}</h5>
								<div>{!!$c->p2!!}</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="text-center">
								<img src="{{asset('company/'.$c->icon3)}}" alt="{{$c->alt3_s3}}" height="100">
								<h5 class="text-uppercase">{{$c->t3_s3}}</h5>
								<div>{!!$c->p3!!}</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="text-center">
								<img src="{{asset('company/'.$c->icon4)}}" alt="{{$c->alt4_s3}}" height="100">
								<h5 class="text-uppercase">{{$c->t4_s3}}</h5>
								<div>{!!$c->p4!!}</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="text-center">
								<img src="{{asset('company/'.$c->icon5)}}" alt="{{$c->alt5_s3}}" height="100">
								<h5 class="text-uppercase">{{$c->t5_s3}}</h5>
								<div>{!!$c->p5!!}</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="text-center">
								<img src="{{asset('company/'.$c->icon6)}}" alt="{{$c->alt6_s3}}" height="100">
								<h5 class="text-uppercase">{{$c->t6_s3}}</h5>
								<div>{!!$c->p6!!}</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- <div class="col-md-6 center col-padding" style="background: url(images/services/main-bg2.jpg) center center / cover no-repeat;">
				<div>&nbsp;</div>
			</div>
 -->
		</div>

		<div class="section parallax dark notopmargin nobottomborder" style="background: url('{{asset('company/'.$c->image_s3)}}'); background-position: center; background-size: cover; background-repeat:no-repeat" data-stellar-background-ratio="0.3">

			<div class="container clearfix">

				<div class="heading-block center">
					<h2>{{$c->title_s3}}</h2>
					<span>{!!$c->text_s3 !!}</span>
					
				</div>

			</div>

		</div>
     @endforeach
	<div class="container clearfix">
		@foreach($section as $s)

		<div id="section-specs" class="heading-block title-center page-section">
			<h2>{{$s->title}}</h2>
			<span>{{$s->subtitle}}</span>
		</div>

	<div class="topmargin">

		<div class="row topmargin-sm clearfix">

		<div class="col-sm-4 bottommargin center service_icon">
		<a href="#" data-toggle="modal" data-target=".modal1"><img src="{{'company/'.$s->img1}}" alt="{{$s->alt1}}" width="80" style="margin-bottom: 15px">
		<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
			<h4>{{$s->sub1}}</h4>
			<div>{!!\Illuminate\Support\Str::limit($s->p1,160,'..')!!}</div>

		</div>
			</a>
		</div>

		<div class="col-sm-4 bottommargin center service_icon">
		<a href="#" data-toggle="modal" data-target=".modal2"><img src="{{'company/'.$s->img2}}" alt="{{$s->alt2}}" width="80" style="margin-bottom: 15px">
		<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
			<h4>{{$s->sub2}}</h4>
			<div>{!!\Illuminate\Support\Str::limit($s->p2,160,'..')!!}</div>

		</div>
			</a>
		</div>

		<div class="col-sm-4 bottommargin center service_icon">
		<a href="#" data-toggle="modal" data-target=".modal3"><img src="{{'company/'.$s->img3}}" alt="{{$s->alt3}}" width="80" style="margin-bottom: 15px">
		<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
			<h4>{{$s->sub3}}</h4>
			<div>{!!\Illuminate\Support\Str::limit($s->p3,160,'..')!!}</div>
		</div>
		</a>
		</div>

		</div>

	</div>

		<div id="side-navigation" class="ui-tabs ui-widget ui-widget-content ui-corner-all">

			<div class="col-md-4">

				<ul class="sidenav ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
					<li class="ui-tabs-active ui-state-default ui-corner-top ui-state-active" role="tab" tabindex="0" aria-controls="snav-content1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#snav-content1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1"><i class="icon-cog"></i> {{$s->title_tab1}}<i class="icon-chevron-right"></i></a></li>
					<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="snav-content2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="#snav-content2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2"><i class="icon-cog"></i>{{$s->title_tab2}}<i class="icon-chevron-right"></i></a></li>
					<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="snav-content3" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false"><a href="#snav-content3" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3"><i class="icon-cog"></i>{{$s->title_tab3}}<i class="icon-chevron-right"></i></a></li>
					<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="snav-content4" aria-labelledby="ui-id-4" aria-selected="false" aria-expanded="false"><a href="#snav-content4" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-4"><i class="icon-cog"></i>{{$s->title_tab4}}<i class="icon-chevron-right"></i></a></li>
					<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="snav-content5" aria-labelledby="ui-id-5" aria-selected="false" aria-expanded="false"><a href="#snav-content5" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-5"><i class="icon-cog"></i>{{$s->title_tab5}}<i class="icon-chevron-right"></i></a></li>
				</ul>

			</div>

			<div class="col-md-8 bottommargin-lg">

				<div id="snav-content1" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="false">
					<img class="alignleft img-responsive" src="{{asset('company/'.$s->image_tab1)}}" alt="{{$s->alt1_tab1}}">
					<h3>{{$s->subtitle_tab1}}</h3>
					{!!$s->text_tab1 !!}
				</div>

				<div id="snav-content2" aria-labelledby="ui-id-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display: none;">
					<img class="alignleft img-responsive" src="{{asset('company/'.$s->image_tab2)}}" alt="{{$s->alt1_tab2}}">
					<h3>{{$s->subtitle_tab2}}</h3>
					<div>{!!$s->text_tab2 !!}</div>
				</div>

				<div id="snav-content3" aria-labelledby="ui-id-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display: none;">
					<img class="alignleft img-responsive" src="{{asset('company/'.$s->image_tab3)}}" alt="{{$s->alt1_tab3}}">
					<h3>{{$s->subtitle_tab3}}</h3>
					<div>{!!$s->text_tab3 !!}</div>

				</div>

				<div id="snav-content4" aria-labelledby="ui-id-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display: none;">
					<img class="alignleft img-responsive" src="{{asset('company/'.$s->image_tab4)}}" alt="{{$s->alt1_tab4}}">
					<h3>{{$s->subtitle_tab4}}</h3>
					<div>{!!$s->text_tab4 !!}</div>
				</div>

				<div id="snav-content5" aria-labelledby="ui-id-5" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-hidden="true" style="display: none;">
					<img class="alignleft img-responsive" src="{{asset('company/'.$s->image_tab5)}}" alt="{{$s->alt1_tab5}}">
					<h3>{{$s->subtitle_tab5}}</h3>
					<div>{!!$s->text_tab5!!}</div>
				</div>

			</div>

		</div>
	@endforeach
	</div>
	@foreach($company as $c1)
	   	<div class="section notopmargin nobottommargin">

	   		<div class="container clearfix center">

				<div class="heading-block">
					<h2>{{$c1->title_s5}}</h2>
					<span style="max-width:900px">{!!$c1->text_s5 !!}</span>
				</div>

		        <div class="row topmargin-sm clearfix">

					<div class="masonry-thumbs col-3" data-big="2" data-lightbox="gallery" style="margin-right: -1px; position: relative; height: 855.75px;">
						<a href="{{asset('company/'.$c1->img_s5)}}" data-lightbox="gallery-item">
							<img class="image_fade" src="{{asset('company/'.$c1->img_s5)}}" alt="{{$c1->alt_s5}}">
						</a>
						<a href="{{asset('company/'.$c1->img2_s5)}}" data-lightbox="gallery-item">
							<img class="image_fade" src="{{asset('company/'.$c1->img2_s5)}}" alt="{{$c1->alt2_s5}}">
						</a>
						<a href="{{asset('company/'.$c1->img3_s5)}}" data-lightbox="gallery-item">
							<img class="image_fade" src="{{asset('company/'.$c1->img3_s5)}}" alt="{{$c1->alt3_s5}}">
						</a>
						<a href="{{asset('company/'.$c1->img4_s5)}}" data-lightbox="gallery-item">
							<img class="image_fade" src="{{asset('company/'.$c1->img4_s5)}}" alt="{{$c1->alt4_s5}}">
						</a>

						<a href="{{asset('company/'.$c1->img5_s5)}}" data-lightbox="gallery-item">
							<img class="image_fade" src="{{asset('company/'.$c1->img5_s5)}}" alt="{{$c1->alt5_s5}}">
						</a>

						<a href="{{asset('company/'.$c1->img6_s5)}}" data-lightbox="gallery-item">
							<img class="image_fade" src="{{asset('company/'.$c1->img6_s5)}}" alt="{{$c1->alt6_s5}}">
						</a>
					</div>

				</div>

			</div>

		</div>
   @endforeach
	</div>

</section><!-- #content end -->



<!-- MODALS -->

<div class="modal fade" id="en1" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-body">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<img class="image_fade" src="{{asset('company/'.$c->img2_s1)}}" alt="{{$c->alt3}}">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="en2" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-body">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<img class="image_fade" src="{{asset('company/'.$c->img4_s1)}}" alt="{{$c->alt4}}">
					<img class="image_fade" src="{{asset('company/'.$c->img5_s1)}}" alt="{{$c->alt5}}">
				</div>
			</div>
		</div>
	</div>
</div>
@foreach($section as $s1)
<div class="modal fade modal1" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-body">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">{{$s1->sub1}}</h4>
				</div>
				<div class="modal-body">
					{!!$s1->p1 !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade modal2" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-body">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">{{$s1->sub2}}</h4>
				</div>
				<div class="modal-body">
					{!!$s1->p2!!}
				
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade modal3" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-body">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">{{$s->sub3}}</h4>
				</div>
				<div class="modal-body">
					{!!$s1->p3!!}
				 
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach
@endsection