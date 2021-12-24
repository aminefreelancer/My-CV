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
                                <h4>Full-Stack Developer</h4>
                              </div>

                              <div class="item">
                                <h4>Software Engineer</h4>
                              </div>
                            </div>
                              
                            <h1>Mohamed Amine AKACHA</h1>
                            <p>Fusce tempor magna mi, non egestas velit ultricies nec. Aenean convallis, risus non condimentum gravida, odio mauris ullamcorper felis, ut venenatis purus ex eu mi. Quisque imperdiet lacinia urna, a placerat sapien pretium eu.</p>
                                 
                            <div class="home-buttons">
                              <a href="#" target="_blank" class="btn btn-primary">Download CV</a>
                              <a href="#" target="_self" class="btn btn-secondary">Hire Me</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Home Page Top Part -->

                <!-- Services -->
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="p-50"></div>

                    <div class="block-title">
                      <h2>What I Do</h2>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-6">
                    <div class="info-list-w-icon">
                      <div class="info-block-w-icon">
                        <div class="ci-icon">
                          <i class="linecons linecons-pen"></i>
                        </div>
      
                        <div class="ci-text">
                          <h4>Copywrite</h4>
                          <p>Mauris neque libero, aliquet vel mollis nec, euismod sed tellus. Mauris convallis dictum elit id volutpat. Vivamus blandit, dolor vitae lacinia maximus, risus velit vehicula odio, a tincidunt turpis turpis tempus ex.</p>
                        </div>
                      </div>
    
                      <div class="info-block-w-icon">
                        <div class="ci-icon">
                          <i class="linecons linecons-display"></i>
                        </div>
     
                        <div class="ci-text">
                          <h4>Web Design</h4>
                          <p>Mauris neque libero, aliquet vel mollis nec, euismod sed tellus. Mauris convallis dictum elit id volutpat. Vivamus blandit, dolor vitae lacinia maximus, risus velit vehicula odio, a tincidunt turpis turpis tempus ex.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-6">
                    <div class="info-list-w-icon">

                      <div class="info-block-w-icon">
                        <div class="ci-icon">
                          <i class="linecons linecons-shop"></i>
                        </div>

                        <div class="ci-text">
                          <h4>Ecommerce</h4>
                          <p>Mauris neque libero, aliquet vel mollis nec, euismod sed tellus. Mauris convallis dictum elit id volutpat. Vivamus blandit, dolor vitae lacinia maximus, risus velit vehicula odio, a tincidunt turpis turpis tempus ex.</p>
                        </div>
                      </div>

                      <div class="info-block-w-icon">
                        <div class="ci-icon">
                          <i class="linecons linecons-megaphone"></i>
                        </div>

                        <div class="ci-text">
                          <h4>Marketing</h4>
                          <p>Mauris neque libero, aliquet vel mollis nec, euismod sed tellus. Mauris convallis dictum elit id volutpat. Vivamus blandit, dolor vitae lacinia maximus, risus velit vehicula odio, a tincidunt turpis turpis tempus ex.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Services -->

                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="p-20"></div>

                    <!-- Testimonials -->
                    <div class="block-title">
                      <h2>Testimonials</h2>
                    </div>

                    <div id="testimonials_1" class="testimonials owl-carousel" data-mobile-items="1" data-tablet-items="2" data-items="2">
                      <!-- Testimonial 1 -->
                      <div class="testimonial-item">
                        <!-- Testimonial Content -->
                        <div class="testimonial-content">
                          <!-- Picture -->
                          <div class="testimonial-picture">
                            <img src="img/testimonials/testimonial-1.jpg" alt="Billy Adams"/>
                          </div>              
                          <!-- /Picture -->

                          <!-- Testimonial Text -->
                          <div class="testimonial-text">
                             <p>Donec eu est vel metus consequat volutpat. Nunc aliquet euismod mauris, a feugiat urna ullamcorper non.</p>
                          </div>
                          <!-- /Testimonial Text -->

                          <!-- Testimonial author information -->
                          <div class="testimonial-author-info">
                            <h5 class="testimonial-author">Billy Adams</h5>
                            <p class="testimonial-firm">Rolling Thunder</p>
                          </div>
                          <!-- /Testimonial author information -->

                          <div class="testimonial-icon">
                            <i class="fa fa-quote-left"></i>
                          </div>

                           <div class="testimonial-icon-big">
                            <i class="fa fa-quote-right"></i>
                          </div>
                        </div>
                        <!-- /Testimonial Content -->
                      </div>
                      <!-- End of Testimonial 1 -->

                      <!-- Testimonial 2 -->
                      <div class="testimonial-item">
                        <!-- Testimonial Content -->
                        <div class="testimonial-content">
                          <!-- Picture -->
                          <div class="testimonial-picture">
                            <img src="img/testimonials/testimonial-2.jpg" alt="Gary Johnson"/>
                          </div>              
                          <!-- /Picture -->

                          <!-- Testimonial Text -->
                          <div class="testimonial-text">
                             <p>Nam tempor commodo mi id sodales. Aenean sit amet nibh nec sapien consequat porta a sit amet diam.</p>
                          </div>
                          <!-- /Testimonial Text -->

                          <!-- Testimonial author information -->
                          <div class="testimonial-author-info">
                            <h5 class="testimonial-author">Gary Johnson</h5>
                            <p class="testimonial-firm">Locost Accessories</p>
                          </div>
                          <!-- /Testimonial author information -->

                          <div class="testimonial-icon">
                            <i class="fa fa-quote-left"></i>
                          </div>

                           <div class="testimonial-icon-big">
                            <i class="fa fa-quote-right"></i>
                          </div>
                        </div>
                        <!-- /Testimonial Content -->
                      </div>
                      <!-- End of Testimonial 2 -->

                      <!-- End of Testimonial 3 -->
                      <div class="testimonial-item">

                        <!-- Testimonial Content -->
                        <div class="testimonial-content">
                          <!-- Picture -->
                          <div class="testimonial-picture">
                            <img src="img/testimonials/testimonial-3.jpg" alt="Daniel Pringle"/>
                          </div>              
                          <!-- /Picture -->

                          <!-- Testimonial Text -->
                          <div class="testimonial-text">
                            <p>Etiam pretium ipsum quis justo dictum accumsan. Phasellus egestas odio a velit scelerisque.</p>
                          </div>
                          <!-- /Testimonial Text -->

                          <!-- Testimonial author information -->
                          <div class="testimonial-author-info">
                            <h5 class="testimonial-author">Daniel Pringle</h5>
                            <p class="testimonial-firm">Sagebrush</p>
                          </div>
                          <!-- /Testimonial author information -->

                          <div class="testimonial-icon">
                            <i class="fa fa-quote-left"></i>
                          </div>

                          <div class="testimonial-icon-big">
                            <i class="fa fa-quote-right"></i>
                          </div>
                        </div>
                        <!-- /Testimonial Content -->

                      </div>
                      <!-- End of Testimonial 3 -->
                    </div>
                    <!-- /Testimonials -->

                    <div class="p-40"></div>

                    <!-- Clients Slider -->
                    <div class="block-title">
                      <h2>Clients</h2>
                    </div>

                    <div id="clients_1" class="clients owl-carousel" data-mobile-items="1" data-tablet-items="3" data-items="6">
                      <div class="client-block">
                        <a href="#" target="_blank" title="Golden Grid">
                          <img src="img/clients/client-1.png" alt="Golden Grid">
                        </a>
                      </div>

                      <div class="client-block">
                        <a href="#" target="_blank" title="Sweety">
                          <img src="img/clients/client-2.png" alt="Sweety">
                        </a>
                      </div>

                      <div class="client-block">
                        <a href="#" target="_blank" title="Magic Furnitures">
                          <img src="img/clients/client-3.png" alt="Magic Furnitures">
                        </a>
                      </div>

                      <div class="client-block">
                        <a href="#" target="_blank" title="LifeGuard">
                          <img src="img/clients/client-4.png" alt="LifeGuard">
                        </a>
                      </div>

                      <div class="client-block">
                        <a href="#" target="_blank" title="LESS">
                          <img src="img/clients/client-5.png" alt="LESS">
                        </a>
                      </div>

                      <div class="client-block">
                        <a href="#" target="_blank" title="Design Lovers">
                          <img src="img/clients/client-6.png" alt="Design Lovers">
                        </a>
                      </div>

                      <div class="client-block">
                        <a href="#" target="_blank" title="WordPress">
                          <img src="img/clients/client-7.png" alt="WordPress">
                        </a>
                      </div>
                    </div>
                    <!-- /Clients Slider -->

                    <div class="p-40"></div>

                  </div>
                </div>

                <!-- Fun Facts -->
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="block-title">
                      <h2>Fun Facts</h2>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-3">
                    <div class="lm-info-block gray-default">
                      <i class="linecons linecons-heart"></i>
                      <h4>Happy Clients</h4>
                      <span class="lm-info-block-value">578</span>
                      <span class="lm-info-block-text"></span>
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-3">
                    <div class="lm-info-block gray-default">
                      <i class="linecons linecons-clock"></i>
                      <h4>Working Hours</h4>
                      <span class="lm-info-block-value">4,780</span>
                      <span class="lm-info-block-text"></span>
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-3 ">
                    <div class="lm-info-block gray-default">
                      <i class="linecons linecons-star"></i>
                      <h4>Awards Won</h4>
                      <span class="lm-info-block-value">15</span>
                      <span class="lm-info-block-text"></span>
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-3 ">
                    <div class="lm-info-block gray-default">
                      <i class="linecons linecons-cup"></i>
                      <h4>Coffee Consumed</h4>
                      <span class="lm-info-block-value">1,286</span>
                      <span class="lm-info-block-text"></span>
                    </div>
                  </div>
                </div>
                <!-- /Fun Facts -->

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

