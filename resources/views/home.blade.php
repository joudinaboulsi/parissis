@extends('layouts.app')

@section('content')

<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix" data-loop="true" data-autoplay="true">
	<div class="slider-parallax-inner">

		<div class="swiper-container swiper-parent">
			<div class="swiper-wrapper">
        @foreach($sliders as $slider)
          <div class="swiper-slide dark" style="background-image: url('{{asset('home/'.$slider->image)}}'); background-position: center top;">
            <div class="container clearfix hidden-xs">
              <div class="slider-caption slider-caption-center">
                <h2 data-caption-animate="fadeInUp">{{$slider->title}}</h2>
                <p data-caption-animate="fadeInUp" data-caption-delay="200">{!!$slider->text!!}</p>
              </div>
            </div>
          </div>
        @endforeach

			</div>
			<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
			<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
		</div>

		<a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

	</div>
</section>

<!-- Content
============================================= -->
<section id="content">

  <div class="content-wrap nobottompadding">

    <div class="container clearfix">
      <div class="row clearfix">
        @foreach($home_page as $section1)
          <div class="col-lg-5">
          <div class="heading-block topmargin">
            <h1>{{$section1->title_s1}}</h1>
          </div>
          <div class="lead">{!!$section1->text_s1 !!}</div>
          </div>

          <div class="col-lg-7">

          <div style="position: relative; margin-bottom: -60px;" class="ohidden" data-height-lg="426" data-height-md="567" data-height-sm="470" data-height-xs="287" data-height-xxs="183">
            <img src="{{asset('home/'.$section1->image)}}" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="{{$section1->alt}}">
          </div>

          </div>
       @endforeach
      </div>
    </div>
   
    <div class="section nobottommargin">
      @foreach($home_page as $h)
      <div class="container clear-bottommargin clearfix">

        <div class="row topmargin-sm clearfix">

         <div class="col-md-4 bottommargin center">
          <img src="{{asset('home/'.$h->img1)}}" alt="{{$h->alt1}}" width="80" style="margin-bottom: 15px">
          <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
           <h4>{{$h->t1}}</h4>
          </div>
        {!!$h->p1!!}
         </div>

         <div class="col-md-4 bottommargin center">
          <img src="{{asset('home/'.$h->img2)}}" alt="{{$h->alt2}}" width="80" style="margin-bottom: 15px">
          <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
            <h4>{{$h->t2}}</h4>
          </div>
          {!!$h->p2!!}
         </div>

         <div class="col-md-4 bottommargin center">
          <img src="{{asset('home/'.$h->img2)}}" alt="{{$h->alt3}}" width="80" style="margin-bottom: 15px">
          <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
            <h4>{{$h->t3}}</h4>
          </div>
          {!!$h->p3!!}

         </div>

        </div>

      </div>
      @endforeach
    </div>
    @foreach($home_page as $homepage)
    <div class="section parallax dark nobottommargin nobottomborder notopmargin parallax-bg" style="background: url('{{asset('home/'.$homepage->image_s2)}}'); background-position: center center; background-size: cover; background-repeat:no-repeat" data-stellar-background-ratio="0.3">

      <div class="container clearfix">
        <div class="heading-block center">
          <h2>{{$homepage->title_s2}}</h2>
          <span style="max-width:900px">{!!$homepage->text_s2!!}</span>
          <br>
          <h3>{{$homepage->subtitle_s2}}</h3>
        </div>
          <div class="row">
            <div class="about-count col-md-12 col-sm-12 center">
              <div class="fun-content">
                <!-- fun_text  -->
                <div class="fun_text col-md-4"> 
                    <span class="counter"><b>{{$homepage->counter1}}</b></span><h1 style="display:inline-block;">+</h1>
                    <h3><b>{{$homepage->subtitle_counter1}}</b></h3>
                </div>
                <!-- fun_text  -->
                <div class="fun_text col-md-4">
                    <span class="counter"><b>{{$homepage->counter2}}</b></span><h1 style="display:inline-block;">+</h1>
                    <h3><b>{{$homepage->subtitle_counter2}}</b></h3>
                </div>
                <!-- fun_text  -->
                <div class="fun_text col-md-4">
                    <span class="counter"><b>{{$homepage->counter3}}</b></span><h1 style="display:inline-block;">+</h1>
                    <h3><b>{{$homepage->subtitle_counter3}}</b></h3>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
      @endforeach

    <div class="row clearfix align-items-stretch">
      @foreach($home_page as $links)
      <div class="col-lg-6 center col-padding" style="background: #eee">
        <div class="center">
          <iframe width="560" height="315" src="{{$links->link1}}" allowfullscreen></iframe>
        </div>
      </div>

      <div class="col-lg-6 center col-padding" style="background-color: #F5F5F5;">
        <div class="center">
          <iframe width="560" height="315" src="{{$links->link2}}" allowfullscreen></iframe>
        </div>
      </div>
      @endforeach

    </div>

    <div class="topmargin nobottommargin nobottomborder">
     <div class="container clearfix">
      @foreach($home_page as $project)
      <div class="heading-block center">
       <h3>{{$project->title_project}}</h3>
      </div>
      @endforeach
    </div>

    <div id="portfolio" class="portfolio grid-container  clearfix" style="padding:">

     @foreach($getProjectList as $p)
     <article class="portfolio-item">
      <div class="portfolio-image">
        <a href="{{ route('project_details_path', $p->id) }}">
          <img src="{{getenv('S3_URL')}}/projects/{{$p->main_image}}" alt="{{$p->title}}">
        </a>
        <div class="portfolio-overlay">
          <div class="portfolio-desc">
            <h3><a href="{{ route('project_details_path', $p->id) }}">{{$p->title}}</a></h3>
            <span>{{$p->type}} @if($p->sub_type != null) | {{$p->sub_type}} @endif</span>
          </div>
        </div>
      </div>
     </article>
     @endforeach

    </div>

    <div class="container clearfix">

      <div class="clear"></div>
      @foreach($home_page as $title_client)
        <div id="section-specs" class="heading-block title-center page-section topmargin">
          <h2>{{$title_client->title_client}}</h2>
        </div>
      @endforeach

      <ul class="clients-grid grid-6 bottommargin clearfix">
      @foreach($clients as $client)

        <li><img src="{{asset('client/'.$client->image)}}" alt="{{$client->alt}}"></li>
      @endforeach
       
      </ul>

    </div>

  	<div class="section notopmargin notopborder nobottommargin">
      <div class="container clearfix">
       @foreach($home_page as $title_news)
          <div class="heading-block center">
            <h3>{{$title_news->title_news}}</h3>
          </div>
        @endforeach

        <!-- Posts
        ============================================= -->
        <div id="posts" class="post-grid grid-container grid-3 clearfix" data-layout="fitRows" style="position: relative; height: 1097.84px;">

          @foreach($newsList as $n)
        	<div class="entry clearfix" style="position: absolute; left: 0px; top: 0px;">
        		<div class="entry-image">
        			<a href="{{getenv('S3_URL')}}/news/{{$n->img}}" data-lightbox="image">
                <img class="image_fade" src="{{getenv('S3_URL')}}/news/{{$n->img}}" alt="{{ $n->news_title }}" style="opacity: 1;">
              </a>
        		</div>
        		<div class="entry-title">
        			<h2>{{$n->news_title}}</h2>
        		</div>
        		<ul class="entry-meta clearfix">
        			<li><i class="icon-calendar3"></i><?php echo date("jS F, Y", strtotime($n->date)); ?></li>
        		</ul>
        		<div class="entry-content">
        			<p><?php echo htmlspecialchars_decode($n->news_body);?></p>
        		</div>
        	</div>
          @endforeach

        </div><!-- #posts end -->

      </div>
    </div>

  </div>

</section><!-- #content end -->


  <!-- COUNTER SCRIPT
  ============================================= -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script src="/js/jquery.counterup.min.js"></script>
  <!------------------------------
   Counter js active
  ------------------------------ -->
    <script> 

    $(document).ready(function($) {

      var count = $('.counter');
      count.counterUp({
      delay: 40,
      time: 3000
      });

    });
  </script>

@endsection