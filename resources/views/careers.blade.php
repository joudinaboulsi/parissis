@extends('layouts.app')

@section('content')

<!-- Page Title
============================================= -->
@foreach ($careers as $career)
<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('{{asset('career/'.$career->image_header)}}'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">

	<div class="container clearfix">
		<h1>{{$career->title_header}}</h1>
		<span>{{$career->subtitle_header}}</span>
		<ol class="breadcrumb">
			<li><a href="{{ route('home_path') }}">Home</a></li>
			<li class="active">Careers</li>
		</ol>
	</div>

</section><!-- #page-title end -->
@endforeach
<section id="content" style="margin-bottom: 0px;">

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- Postcontent
			============================================= -->
			<div class="col-xs-12 nobottommargin" style="width: 100%">
				@foreach ($careers as $c)

				<h3>{{$c->title_main}}</h3>
               @endforeach
				<div class="contact-widget">

					<div class="contact-form-result"></div>

					{!! Form::open(array('route' => 'careers_path', 'class' => 'careerform nobottommargin', 'id' => 'careerform', 'files' => true)) !!}

						<div class="form-process"></div>

						<div class="col-md-4">
							<label for="careerform_name">Name <small>*</small></label>
							<input type="text" id="careerform_name" name="careerform_name" value="" class="sm-form-control required show-error-msg" aria-required="true">
						</div>

						<div class="col-md-4">
							<label for="careerform_email">Email <small>*</small></label>
							<input type="email" id="careerform_email" name="careerform_email" value="" class="sm-form-control required show-error-msg" aria-required="true">
						</div>

						<div class="col-md-4">
							<label for="careerform_phone">Phone</label>
							<input type="text" id="careerform_phone" name="careerform_phone" value="" class="sm-form-control show-error-msg">
						</div>

						<div class="clear"></div>

						<div class="col-md-12">
							<label for="careerform_message">Message <small>*</small></label>
							<textarea id="careerform_message" name="careerform_message" class="sm-form-control required show-error-msg" rows="6" cols="30" aria-required="true"></textarea>
						</div>

						<div class="col-md-12">
							<label for="careerform_cv">Upload your CV <small>*</small></label>
                            <input type="file" id="careerform_cv" name="careerform_cv" class="sm-form-control required show-error-msg" aria-required="true">
                            <i class="fa fa-file input" aria-hidden="true"></i>
                        </div>

						<div class="col-md-12">
							<br>
							<button class="button button-3d nomargin" type="submit" id="careerform_submit" name="careerform_submit" value="submit">Apply</button>
						</div>

					{!! Form::close() !!}
				</div>

			</div><!-- .postcontent end -->

		</div>

	</div>

</section>


<script src="js/jquery.validate.min.js"></script>

<script type="text/javascript">

    $("#careerform").validate({
        ignore: ".ignore",
        rules: {
            careerform_name: {
                required: true,
                minlength: 3
            },
            careerform_email: {
                required: true,
                email: true
            },
            careerform_phone: {
                minlength: 6,
            },
            careerform_cv: {
                required: true,
            },
            careerform_message: {
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