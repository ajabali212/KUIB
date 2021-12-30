@extends('frontend.layouts.main')
@section('main-container')


<section class="page-title layer-overlay overlay-dark-3 section-typo-light bg-img-center" data-tm-bg-img="http://placehold.it/1894x826">
      <div class="container pt-200 pb-200">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">@lang('auth.Services 4')</h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                  <span><a href="#" rel="home">Home</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span><a href="#">Pages</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span class="active">Page Title</span>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section data-tm-bg-color="#f5f5f4">
      <div class="container pt-0 pt-lg-200 pb-0">
        <div class="section-content">
          <div class="row">
            <div class="col-lg-4">
              <div class="tm-sc-project-items project-items-current-theme-style1 text-center pb-md-150">
                <div class="project-item">                    
                  <div class="thumb">
                    <img class="border-rounded" src="http://placehold.it/195x195" alt="Image">
                  </div>
                  <div class="content">
                    <h5 class="title"><a href="page-campaign-details.html">@lang('auth.water_refine')</a></h5>
                    <p>@lang('auth.water_refine_content')</p>
                    <a class="btn-link" href="page-campaign-details.html">
                      <i class="fas fa-chevron-up"></i>
                      <img class="shape-circle" src="{{asset('Frontend/images/shape/project-01.png')}}" alt="Image">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="tm-sc-project-items project-items-current-theme-style1 text-center pb-md-150">
                <div class="project-item">                    
                  <div class="thumb">
                    <img class="border-rounded" src="http://placehold.it/195x195" alt="Image">
                  </div>
                  <div class="content">
                    <h5 class="title"><a href="page-campaign-details.html">@lang('auth.Eco_System')</a></h5>
                    <p>@lang('auth.eco_system_content')</p>
                    <a class="btn-link" href="page-campaign-details.html">
                      <i class="fas fa-chevron-up"></i>
                      <img class="shape-circle" src="{{asset('Frontend/images/shape/project-01.png')}}" alt="Image">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="tm-sc-project-items project-items-current-theme-style1 text-center">
                <div class="project-item">                    
                  <div class="thumb">
                    <img class="border-rounded" src="http://placehold.it/195x195" alt="Image">
                  </div>
                  <div class="content">
                    <h5 class="title"><a href="page-campaign-details.html">@lang('auth.Recycling')</a></h5>
                    <p>@lang('auth.recycling_content')</p>
                    <a class="btn-link" href="page-campaign-details.html">
                      <i class="fas fa-chevron-up"></i>
                      <img class="shape-circle" src="{{asset('Frontend/images/shape/project-01.png')}}" alt="Image">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

 <!-- Section: Testimonials -->
    <section data-tm-bg-color="#f5f5f4">
      <div class="container-fluid pr-60 pb-130 pl-60 pr-lg-15 pl-lg-15 pb-lg-120">
        <div class="section-content">
          <div class="tm-sc-testimonials testimonial-current-theme-style1">
            <div class="tm-owl-carousel-3col" data-stagePadding="70" data-tablet="2" data-loop="true">
              <div class="tm-testimonial testimonials">
                <div class="testimonial-inner">
                  <div class="testimonial-text-holder">
                    <div class="author-text">@lang('auth.Services 2 Content')</div>
                    <div class="icon">
                      <img class="icon-img" src="{{asset('Frontend/images/icons/testi01.png')}}" alt="Image">
                    </div>
                  </div>
                  <div class="testimonial-author-details">
                    <div class="testimonial-image-holder">
                      <div class="author-thumb"> <img width="57" height="57" src="{{asset('Frontend/images/3.png')}}" class="" alt="Image"></div>
                    </div>
                    <div class="testimonial-author-info-holder">
                      <h5 class="name">Jessica Brown</h5>
                      <!-- <span class="job-position">Customer</span> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="tm-testimonial testimonials">
                <div class="testimonial-inner">
                  <div class="testimonial-text-holder">
                    <div class="author-text">@lang('auth.Services 2 Content')</div>
                    <div class="icon">
                      <img class="icon-img" src="{{asset('Frontend/images/icons/testi01.png')}}" alt="Image">
                    </div>
                  </div>
                  <div class="testimonial-author-details">
                    <div class="testimonial-image-holder">
                      <div class="author-thumb"> <img width="57" height="57" src="{{asset('Frontend/images/3.png')}}" class="" alt="Image"></div>
                    </div>
                    <div class="testimonial-author-info-holder">
                      <h5 class="name">Mike Hardson</h5>
                      <!-- <span class="job-position">Customer</span> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="tm-testimonial testimonials">
                <div class="testimonial-inner">
                  <div class="testimonial-text-holder">
                    <div class="author-text">@lang('auth.Services 2 Content')</div>
                    <div class="icon">
                      <img class="icon-img" src="{{asset('Frontend/images/icons/testi01.png')}}" alt="Image">
                    </div>
                  </div>
                  <div class="testimonial-author-details">
                    <div class="testimonial-image-holder">
                      <div class="author-thumb"> <img width="57" height="57" src="{{asset('Frontend/images/3.png')}}" class="" alt="Image"></div>
                    </div>
                    <div class="testimonial-author-info-holder">
                      <h5 class="name">Saral Albert</h5>
                     <!--  <span class="job-position">Customer</span> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="tm-testimonial testimonials">
                <div class="testimonial-inner">
                  <div class="testimonial-text-holder">
                    <div class="author-text">@lang('auth.Services 2 Content')</div>
                    <div class="icon">
                      <img class="icon-img" src="{{asset('Frontend/images/icons/testi01.png')}}" alt="Image">
                    </div>
                  </div>
                  <div class="testimonial-author-details">
                    <div class="testimonial-image-holder">
                      <div class="author-thumb"> <img width="57" height="57" src="{{asset('Frontend/images/3.png')}}" class="" alt="Image"></div>
                    </div>
                    <div class="testimonial-author-info-holder">
                      <h5 class="name">John Smith</h5>
                      <!-- <span class="job-position">Customer</span> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="tm-testimonial testimonials">
                <div class="testimonial-inner">
                  <div class="testimonial-text-holder">
                    <div class="author-text">@lang('auth.Services 2 Content')</div>
                    <div class="icon">
                      <img class="icon-img" src="{{asset('Frontend/images/icons/testi01.png')}}" alt="Image">
                    </div>
                  </div>
                  <div class="testimonial-author-details">
                    <div class="testimonial-image-holder">
                      <div class="author-thumb"> <img width="57" height="57" src="{{asset('Frontend/images/3.png')}}" class="" alt="Image"></div>
                    </div>
                    <div class="testimonial-author-info-holder">
                      <h5 class="name">David Cooper</h5>
                     <!--  <span class="job-position">Customer</span> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tm-floating-objects">
        <span class="tm-animation-floating z-index--1" data-tm-bg-img="images/shape/6.png" data-tm-width="19" data-tm-height="18" data-tm-top="0" data-tm-bottom="auto" data-tm-left="140" data-tm-right="auto" data-tm-opacity="1"></span>
        <span class="tm-animation-scaling z-index-1" data-tm-bg-img="images/shape/8.png" data-tm-width="50" data-tm-height="48" data-tm-top="90" data-tm-bottom="auto" data-tm-left="auto" data-tm-right="175" data-tm-opacity="1"></span>
      </div>
    </section>
    <!-- End Divider -->
@endsection