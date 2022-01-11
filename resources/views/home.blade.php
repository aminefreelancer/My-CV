@extends('layouts.app')

@section('content')

    <div class="page-scroll">
      <div id="page_container" class="page-container bg-move-effect" data-animation="transition-flip-in-right">

        <!-- Header -->
        @include('layouts.header')
        <!-- /Header -->

        <div id="main" class="site-main">
          <div id="main-content" class="single-page-content">
            <div id="primary" class="content-area">    
              <div id="content" class="page-content site-content single-post" role="main">
                <!-- Home Page Top Part -->
                <div class="row">
                  <div class=" col-xs-12 col-sm-12">
                    <div class="home-content">
                      <div class="row flex-v-align">
                        
                        <div class="col-sm-12 col-md-5 col-lg-5">
                          <div class="home-photo">
                            <div class="hp-inner" style="background-image: url(img/main_photo.jpg);">
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-12 col-md-7 col-lg-7">
                          <div class="home-text hp-left">
                            <div class="owl-carousel text-rotation">                                    
                              <div class="item">
                                <h4>{{$user->title}}</h4>
                              </div>

                              <div class="item">
                                <h4>{{$user->secondary_title}}</h4>
                              </div>
                            </div>
                              
                            <h1>{{$user->name}}</h1>
                            <p>
								{{$user->summary}}
							</p>
                                 
                            <div class="home-buttons">
                              <a href="{{asset('CV.pdf')}}" target="_blank" class="btn btn-primary">Download CV</a>
                              <a href="{{route('contact')}}" target="_self" class="btn btn-secondary">Hire Me</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Home Page Top Part -->

                <div class="row">
  
					<div class=" col-xs-12 col-sm-8 ">
						<div class="block-title">
							<h2>Work experience</h2>
						</div>

						<div id="timeline_2" class="timeline clearfix">
							@foreach ($user->experiences as $experience)
								@if(!$experience->type)
								<div class="timeline-item clearfix">
									<h5 class="item-period ">{{$experience->from}} / {{$experience->to}}</h5>
									<span class="item-company">{{$experience->establishement}} - {{$experience->location}}</span>
									<h4 class="item-title">{{$experience->title}}</h4>
									<p>
										{!! $experience->description !!}
									</p>
								</div>
								@endif
							@endforeach
						</div>


						<div class="block-title">
							<h2>Education</h2>
						</div>

						<div id="timeline_1" class="timeline clearfix">
							@foreach ($user->experiences as $experience)
								@if($experience->type)
								<div class="timeline-item clearfix">
									<h5 class="item-period ">{{$experience->from}} / {{$experience->to}}</h5>
									<span class="item-company">{{$experience->establishement}} - {{$experience->location}}</span>
									<h4 class="item-title">{{$experience->title}}</h4>
									<p>
										{!! $experience->description !!}
									</p>
								</div>
								@endif
							@endforeach
							
						</div>
					</div>

					<div class="p-40 col-xs-12 col-sm-4 bg-light ">
						@foreach ($categories as $category)
							<h4>{{$category->name}}</h4>
							<div class="skills-info skills-first-style">
								@foreach ($category->skills as $skill)	
								<div class="clearfix">
									<p>{{$skill->name}}</p>
								</div>
								@endforeach
							</div>
						@endforeach
					</div>
                </div>

                <div class="p-40"></div>
              </div>

              </div>
            </div>
          </div>
        </div>

        @include('layouts.footer')
        
      </div>
    </div>

@endsection

