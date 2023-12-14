@extends('layouts.app')

@section('content')

<!-- Page Title
============================================= -->
@foreach($team_page as $section)
<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('{{asset('team/'.$section->image_header)}}'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">

	<div class="container clearfix">
		<h1>{{$section->title_header}}</h1>
		<span>{{$section->subtitle_header}}</span>
		<ol class="breadcrumb">
			<li><a href="{{ route('home_path') }}">Home</a></li>
			<li class="active">Team</li>
		</ol>
	</div>

</section><!-- #page-title end -->
@endforeach
<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap">
		@foreach($team_page as $section1)
		<div class="container clearfix center">

			<div class="heading-block topmargin">
				<h2>{{$section1->title_section1}}</h2>
			</div>

			<div class="row">

				<div class="col-md-3 col-sm-6 bottommargin">

					<div class="team">
						<div class="team-image">
							<img src="{{asset('team/'.$section1->profile)}}" alt="{{$section1->alt}}">
						</div>
						<div class="team-desc">
							<div class="team-title"><h4>{{$section1->name}}</h4><span>{{$section1->position}}</span></div>
							<div>{!!$section1->specialty!!}</div>
						</div>
					</div>

				</div>

				<div class="col-md-3 col-sm-6 bottommargin">

					<div class="team">
						<div class="team-image">
							<img src="{{asset('team/'.$section1->profile2)}}" alt="{{$section1->alt2}}">
						</div>
						<div class="team-desc">
							<div class="team-title"><h4>{{$section1->name2}}</h4><span>{{$section1->position2}}</span></div>
							<div>{!!$section1->specialty2!!}</div>
						</div>
					</div>

				</div>

				<div class="col-md-3 col-sm-6 bottommargin">

					<div class="team">
						<div class="team-image">
							<img src="{{asset('team/'.$section1->profile3)}}" alt="{{$section1->alt3}}">
						</div>
						<div class="team-desc">
							<div class="team-title"><h4>{{$section1->name3}}</h4><span>{{$section1->position3}}</span></div>
							<div>{!!$section1->specialty3!!}</div>
						</div>
					</div>

				</div>

				<div class="col-md-3 col-sm-6 bottommargin">

					<div class="team">
						<div class="team-image">
							<img src="images/team/4.jpg" alt="Melina Lampsos">
						</div>
						<div class="team-desc">
							<div class="team-title"><h4>Melina Lampsos</h4><span>Business Development Manager</span></div>
							
							<div>{!!$section1->specialty4!!}</div>
						</div>
					</div>

				</div>

			</div>

		</div>
       @endforeach
	  @foreach($our_value as $value)
		<div class="row clearfix common-height">

		    <div class="section nobottommargin">

		      	<div class="container clear-bottommargin clearfix center">

			        <div class="row topmargin-sm clearfix">

						<div class="heading-block">
							<h3>{{$value->title_section2}}</h3>
						</div>

						<div class="row">
							<div class="col_one_fifth">
								<div class="text-center">
									<img src="{{asset('team/'.$value->img_v)}}" alt="{{$value->alt}}" height="100">
									<h3 class="text-uppercase">{{$value->value}}</h3>
								</div>
							</div>
							<div class="col_one_fifth">
								<div class="text-center">
									<img src="{{asset('team/'.$value->img_v2)}}" alt="{{$value->alt2}}" height="100">
									<h3 class="text-uppercase">{{$value->value2}}</h3>
								</div>
							</div>
							<div class="col_one_fifth">
								<div class="text-center">
									<img src="{{asset('team/'.$value->img_v3)}}" alt="{{$value->alt3}}" height="100">
									<h3 class="text-uppercase">{{$value->value3}}</h3>
								</div>
							</div>
							<div class="col_one_fifth">
								<div class="text-center">
									<img src="{{asset('team/'.$value->img_v4)}}" alt="{{$value->alt4}}" height="100">
									<h3 class="text-uppercase">{{$value->value4}}</h3>
								</div>
							</div>
							<div class="col_one_fifth col_last">
								<div class="text-center">
									<img src="{{asset('team/'.$value->img_v5)}}" alt="{{$value->alt5}}" height="100">
									<h3 class="text-uppercase">{{$value->value5}}</h3>
								</div>
							</div>
						</div>

					</div>

				</div>

			</div>

		</div>

		<div class="section dark parallax nobottommargin notopmargin" style="padding: 80px 0px; background-image: url('{{asset('team/'.$value->bg)}}'); background-position: 50% -7.25248px;" data-stellar-background-ratio="0.3">

			<div class="container clearfix">

				<div class="col_one_fourth nobottommargin center bounceIn animated" data-animate="bounceIn">
					<img src="{{asset('team/'.$value->data_img)}}" height="80" alt="{{$value->data_alt}}">
					<div class="counter counter-lined"><span data-from="1" data-to="3" data-refresh-interval="50" data-speed="2000">{{$value->data_to}}</span></div>
					<h5>{{$value->data}}</h5>
				</div>

				<div class="col_one_fourth nobottommargin center bounceIn animated" data-animate="bounceIn" data-delay="200">
					<img src="{{asset('team/'.$value->data_img2)}}" height="80"  alt="{{$value->data_alt2}}">
					<div class="counter counter-lined"><span data-from="1" data-to="8" data-refresh-interval="100" data-speed="2500">{{$value->data_to2}}</span></div>
					<h5>{{$value->data2}}</h5>
				</div>

				<div class="col_one_fourth  nobottommargin center bounceIn animated" data-animate="bounceIn" data-delay="400">
					<img src="{{asset('team/'.$value->data_img3)}}" height="80" alt="{{$value->data_alt3}}">
					<div class="counter counter-lined"><span data-from="1" data-to="5" data-refresh-interval="25" data-speed="3500">{{$value->data_to3}}</span></div>
					<h5>{{$value->data3}}</h5>
				</div>

				<div class="col_one_fourth col_last nobottommargin center bounceIn animated" data-animate="bounceIn">
					<img src="{{asset('team/'.$value->data_img4)}}" height="80" alt="{{$value->data_alt4}}">
					<div class="counter counter-lined"><span data-from="5" data-to="25" data-refresh-interval="50" data-speed="2000">{{$value->data_to4}}</span>+</div>
					<h5>{{$value->data4}}</h5>
				</div>

			</div>

			<div class="container clearfix">

				<div class="col_one_third nobottommargin center bounceIn animated" data-animate="bounceIn">
					<img src="{{asset('team/'.$value->data_img5)}}" height="80" alt="{{$value->data_alt5}}">
					<div class="counter counter-lined"><span data-from="1" data-to="2" data-refresh-interval="50" data-speed="2000">{{$value->data_to5}}</span></div>
					<h5>{{$value->data5}}</h5>
				</div>

				<div class="col_one_third nobottommargin center bounceIn animated" data-animate="bounceIn" data-delay="200">
					<img src="{{asset('team/'.$value->data_img6)}}" height="80" alt="{{$value->data_alt6}}">
					<div class="counter counter-lined"><span data-from="1" data-to="8" data-refresh-interval="100" data-speed="2500">{{$value->data_to6}}</span></div>
					<h5>{{$value->data6}}</h5>
				</div>

				<div class="col_one_third col_last nobottommargin center bounceIn animated" data-animate="bounceIn" data-delay="400">
					<img src="{{asset('team/'.$value->data_img7)}}" height="80" alt="{{$value->data_alt8}}">
					<div class="counter counter-lined"><span data-from="15" data-to="50" data-refresh-interval="25" data-speed="3500">{{$value->data_alt7}}</span>+</div>
					<h5>{{$value->data7}}</h5>
				</div>


				

			</div>

		</div>
	@endforeach

@foreach($team_page as $team)
		<div class="container clearfix center">

			<div class="heading-block topmargin">
				<h2>{{$team->title_section3}}</h2>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<img src="{{asset('team/'.$team->organigram)}}" class="img-responsive" alt="Organization">
				</div>
			</div>
		</div>
@endforeach
	</div>	

</section>

@endsection
