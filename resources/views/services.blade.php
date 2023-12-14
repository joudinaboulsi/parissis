@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
<form method="POST" action="" >
	<input type="hidden" name="_token">
</form>

@section('content')

<!-- Page Title
============================================= -->
@foreach($service_page as $s)
<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('{{asset('service/'.$s->image_header)}}'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">

	<div class="container clearfix">
		<h1>{{$s->title_header}}</h1>
		<span>{{$s->subtitle_header}}</span>
		<ol class="breadcrumb">
			<li><a href="{{ route('home_path') }}">Home</a></li>
			<li class="active">Services</li>
		</ol>
	</div>

</section><!-- #page-title end -->
@endforeach
<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap">
		@foreach($service_page as $s1)
		<div class="container clearfix">

			<div class="col-md-6 topmargin-sm bottommargin">
				<img data-animate="fadeInLeftBig" src="{{asset('service/'.$s->image1)}}" alt="{{$s->alt1}}" class="fadeInLeftBig animated" style="padding-top:100px;">
			</div>

			<div class="col-md-6 topmargin-sm bottommargin-lg">

				<div class="heading-block topmargin">
					<h3>{{$s->title_section1}}</h3>
				</div>

				<div>{!!$s->text_section1 !!}</div>

			</div>

		</div>
	
		<div class="section dark parallax noborder" style="height: 500px; padding: 145px 0;">
			<div class="container clearfix">
				<div class="slider-caption slider-caption-center" style="position: relative;">
					<div data-animate="fadeInUp" class="fadeInUp animated">
					   <h2 style="font-size:1em;">{{$s->title_section2}}</h2>
			             <div>{!!$s->text_section2 !!}</div>
					   <a href="{{$s->link_url}}" class="button button-border button-rounded button-white button-light button-large noleftmargin nobottommargin" style="margin-top: 20px;">{{$s->link}}</a>
					</div>
				</div>
			</div>
			<div class="video-wrap">
				<video poster="{{asset('service/'.$s->bg)}}" preload="none" preload="auto" loop autoplay muted>
				 	<source src="{{asset('service/'.$s->video)}}" type="video/mp4">
				</video>
				<div class="video-overlay" style="background-color: rgba(0, 0, 0, 0.3);"></div>
			</div>
		</div>
     @endforeach
  		<div class="container clearfix center">
			@foreach($service_page as $t)
			<div class="heading-block topmargin">
				<h2>{{$t->title_section3}}</h2>
			</div>
			@endforeach
			@foreach($services as $service)

			<div class="col-md-4 text-center service_icon">
				<a href="#" data-toggle="modal" data-target=".modal1" onclick="loadRelatedProjects(1)">
					<img src="{{asset('service/'.$service->image1)}}" alt="{{$service->alt1}}" height="100">
					<h3>{{$service->title1}}</h3>
					<div>{!!$service->p1 !!}</div>
				</a>
			</div>

			<div class="col-md-4 text-center service_icon">
				<a href="#" data-toggle="modal" data-target=".modal2" onclick="loadRelatedProjects(2)">
					<img src="{{asset('service/'.$service->image2)}}" alt="{{$service->alt2}}" height="100">
					<h3>{{$service->title2}}</h3>
					<div>{!!$service->p2 !!}</div>
				</a>
			</div>

			<div class="col-md-4 text-center service_icon" onclick="loadRelatedProjects(3)">
				<a href="#" data-toggle="modal" data-target=".modal3">
					<img src="{{asset('service/'.$service->image3)}}" alt="{{$service->alt3}}" height="100">
					<h3>{{$service->title3}}</h3>
					<div>{!!$service->p3 !!}</div>
				</a>
			</div>

		</div>

		<div class="container clearfix center">

			<div class="col-md-6 nobottommargin text-center service_icon" onclick="loadRelatedProjects(4)">
				<a href="#" data-toggle="modal" data-target=".modal4">
					<img src="{{asset('service/'.$service->image4)}}" alt="{{$service->alt4}}" height="100">
					<h3>{{$service->title4}}</h3>
					<div>{!!$service->p4 !!}</div>
				</a>
			</div>

			<div class="col-md-6 nobottommargin text-center service_icon" onclick="loadRelatedProjects(5)">
				<a href="#" data-toggle="modal" data-target=".modal5">
					<img src="{{asset('service/'.$service->image5)}}" alt="{{$service->alt5}}" height="100">
					<h3>{{$service->title5}}</h3>
					<div>{!!$service->p5 !!}</div>
				</a>
			</div>

		</div>



		
		<div class="modal fade modal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-body">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">{{$service->title1}}</h4>
						</div>
						<div class="modal-body">
							<div>{!!$service->text1!!}</div>
							<div class="row">
								<div class="col-md-12">
									<h4>Related Projects:</h4>
									<div class="col-md-12 related_project">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="modal fade modal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-body">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">{{$service->title2}}</h4>
						</div>
						<div class="modal-body">
							<div>{!!$service->text2!!}</div>
							<div class="row">
								<div class="col-md-12">
									<h4>Related Projects:</h4>
									<div class="related_project col-md-12">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="modal fade modal3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-body">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">{{$service->title3}}</h4>
						</div>
						<div class="modal-body">
							<div>{!!$service->text3!!}</div>
							<div class="row">
								<div class="col-md-12">
									<h4>Related Projects:</h4>
									<div class="related_project col-md-12">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade modal4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-body">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">{{$service->title4}}</h4>
						</div>
						<div class="modal-body">
							<div>{!!$service->text4!!}</div>
							<div class="row">
								<div class="col-md-12">
									<h4>Related Projects:</h4>
									<div class="related_project col-md-12">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade modal5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-body">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">{{$service->title5}}</h4>
						</div>
						<div class="modal-body">
							<div>{!!$service->text5!!}</div>
							<div class="row">
								<div class="col-md-12">
									<h4>Related Projects:</h4>
									<div class="related_project col-md-12">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endforeach
	</div>	 

</section>
	


<script type="text/javascript">
	
// ajax call to edit project
function loadRelatedProjects(id){
$('.related_project').empty();
var project_details_route = '{{ route("project_details_path", ":project_id") }}';
var s3_url = <?=json_encode(getenv('S3_URL')) ?>;

   $.ajax({
         url: "/get-related-projects-from-type-id",
         method: "POST",
         data: {
                 'id' : id
               },      
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },                      
         dataType: "json",
         success: function (data) { console.log(data);
            // change the data of the pop up modal

                // filling the array in jquery 
                $.each( data, function( index, value ) {console.log(data[index]);
                	$('.related_project').append("<div class='col-md-4'><a href='"+ project_details_route.replace(':project_id', data[index].id) +"'><div class='portfolio-image'><img src="+s3_url+"/projects/"+data[index].main_image+"></div><div class='portfolio-desc'><h3>"+data[index].title+"</h3></div></a></div>");     
                });
 
             },
         error: function(jqXHR, textStatus, errorThrown) {

             console.log('Status:'+jqXHR.status);
             console.log('Text status:'+textStatus);
             console.log('Error Thrown:'+errorThrown);

         }
     });
}

</script>

@endsection