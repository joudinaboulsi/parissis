@extends('layouts.app')

@section('content')

<!-- Page Title
============================================= -->
@foreach ($contact as $c)
	

<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('{{asset('assets/contact/'.$c->image_header)}}'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">

	<div class="container clearfix">
		<h1>{{$c->title_header}}</h1>
		<span>{{$c->subtitle_header}}</span>
		<ol class="breadcrumb">
			<li><a href="{{ route('home_path') }}">Home</a></li>
			<li class="active">Contact</li>
		</ol>
	</div>

</section><!-- #page-title end -->

@endforeach
<section id="content" style="margin-bottom: 0px;">

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- Postcontent
			============================================= -->
			<div class="col-md-9 col-xs-12 bottommargin-sm">

				<div id="google-map5" style="height: 400px; margin-bottom: 20px;" class="gmap"></div>
				@foreach ($contact as $c1)

				<h3>{{$c1->title_main}}</h3>
				@endforeach

				<div class="contact-widget">

					<div class="contact-form-result"></div>

					{!! Form::open(array('route' => 'contact_path', 'class' => 'contactform nobottommargin', 'id' => 'contactform', 'files' => true)) !!}

						<div class="form-process"></div>

						<div class="col-md-4">
							<label for="contactform_name">Name <small>*</small></label>
							<input type="text" id="contactform_name" name="contactform_name" value="" class="sm-form-control required show-error-msg" aria-required="true">
						</div>

						<div class="col-md-4">
							<label for="contactform_email">Email <small>*</small></label>
							<input type="email" id="contactform_email" name="contactform_email" value="" class="sm-form-control required show-error-msg" aria-required="true">
						</div>

						<div class="col-md-4">
							<label for="contactform_phone">Phone</label>
							<input type="text" id="contactform_phone" name="contactform_phone" value="" class="sm-form-control show-error-msg">
						</div>

						<div class="clear"></div>

						<div class="col-md-8">
							<label for="contactform_subject">Subject <small>*</small></label>
							<input type="text" id="contactform_subject" name="contactform_subject" value="" class="sm-form-control required show-error-msg" aria-required="true">
						</div>

						<div class="col-md-4">
							<label for="contactform_service">Services</label>
							<select id="contactform_service" name="contactform_service" class="sm-form-control show-error-msg">
								<option value="">-- Select One --</option>
								<option value="General Steel Structures">General Steel Structures</option>
								<option value="Architectural Structures">Architectural Structures</option>
								<option value="Industrial Infrastructure">Industrial Infrastructure</option>
								<option value="Structural Composite Concrete Elements">Structural Composite Concrete Elements</option>
								<option value="High-End Decorative Metal Works">High-End Decorative Metal Works</option>
								<option value="Others">Others</option>
							</select>
						</div>

						<div class="clear"></div>

						<div class="col-md-12">
							<label for="contactform_message">Message <small>*</small></label>
							<textarea id="contactform_message" name="contactform_message" class="sm-form-control required show-error-msg" rows="6" cols="30" aria-required="true"></textarea>
						</div>

						<div class="col-md-12">
							<label for="document">Upload a Document </label>
                            <input type="file" id="document" name="document" class="sm-form-control show-error-msg">
                            <i class="fa fa-file input" aria-hidden="true"></i>
                        </div>

						<div class="col-md-12">
							<br>
							<button class="button button-3d nomargin" type="submit" id="contactform_submit" name="contactform_submit" value="submit">Send Message</button>
						</div>

					{!! Form::close() !!}
				</div>

			</div><!-- .postcontent end -->

			<!-- Sidebar
			============================================= -->
			<div class="col-md-3 col-xs-12 nobottommargin">

				<h4>Offices & Workshop</h4>
				<address>
					{{ app('contact')->address }}<br>
				</address>
				<abbr title="Phone Number"><strong>Phone:</strong></abbr> {{ app('contact')->phone}} <br>
				<abbr title="Fax"><strong>Fax:</strong></abbr> {{ app('contact')->fax}}  <br>
				<abbr title="Email Address"><strong>Email:</strong></abbr> {{ app('contact')->email}} 

				<br><br>

				<h4>{{ app('contact')->location2 }}</h4>

				<address>
					{{ app('contact')->address2 }}
				</address>
				<abbr title="Phone Number"><strong>Phone:</strong></abbr> {{ app('contact')->phone2 }}<br>
				<abbr title="Email Address"><strong>Email:</strong></abbr> {{ app('contact')->email2}} 

				<br><br>

				<h4>{{ app('contact')->location3 }}</h4>

				<address>
					{{ app('contact')->address3 }}
				</address>
				<abbr title="Phone Number"><strong>Phone:</strong></abbr>{{ app('contact')->phone3 }} <br>
				<abbr title="Email Address"><strong>Email:</strong></abbr> {{ app('contact')->email3}} 

				<br><br>

				<h4>{{ app('contact')->location4 }}</h4>

				<address>
					{{ app('contact')->address4}}
				</address>
				<abbr title="Phone Number"><strong>Phone:</strong></abbr> {{ app('contact')->phone4 }}<br>
				<abbr title="Fax"><strong>Fax:</strong></abbr> {{ app('contact')->fax3 }}<br>
				<abbr title="Email Address"><strong>Email:</strong></abbr> {{ app('contact')->email4}} 

				<br><br>
				@foreach ($contact as $c2)

				<h4>{{$c2->title_team}}</h4>
				<a href="{{$c2->link_url}}" class="button button-3d nomargin">{{$c->link}}</a>
              @endforeach
				<div class="widget noborder notoppadding">

					<a href="{{ app('contact')->facebook}}" target="_blank" class="social-icon si-small si-borderless si-facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="{{ app('contact')->instagram}}" target="_blank" class="social-icon si-small si-borderless si-instagram">
						<i class="icon-instagram"></i>
						<i class="icon-instagram"></i>
					</a>

					<a href="{{ app('contact')->linkedin}}" target="_blank" class="social-icon si-small si-borderless si-linkedin">
						<i class="icon-linkedin"></i>
						<i class="icon-linkedin"></i>
					</a>

				</div>

			</div><!-- .sidebar end -->

		</div>

	</div>

</section>

<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyBBWmuzra9J1f1PyeLLxEdjUy5gHzHQNyc"></script>
<script type="text/javascript" src="js/jquery.gmap.js"></script>
<script src="js/jquery.validate.min.js"></script>

<script type="text/javascript">

	$('#google-map5').gMap({
		address: 'Lebanon',
		maptype: 'ROADMAP',
		zoom: 9,
		markers: [
			{
				address: "Parissis Steel Engineering & Contracting, Lebanon",
				html: "Headquarters"
			},
			{
				address: "PARISSIS STEEL ENGINEERING FACTORY, Lebanon",
				html: "Production Workshop"
			}
		],
		doubleclickzoom: false,
		controls: {
			panControl: true,
			zoomControl: true,
			mapTypeControl: false,
			scaleControl: false,
			streetViewControl: false,
			overviewMapControl: false
		}
	});

    $("#contactform").validate({
        ignore: ".ignore",
        rules: {
            contactform_name: {
                required: true,
                minlength: 3
            },
            contactform_email: {
                required: true,
                email: true
            },
            contactform_phone: {
                minlength: 6,
            },
            contactform_subject: {
                required: true,
            },
            contactform_message: {
                minlength: 3
            },
            hiddenRecaptcha: {
                required: function () {
                    if (grecaptcha.getResponse() == '') {
                        return true;
                    } else {
                        return false;
                    }
                }
            }
        },
        messages: {
                 hiddenRecaptcha: "Please verify that you are a Human."
               }
    });

</script>

@endsection
