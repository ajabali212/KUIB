@extends('frontend.layouts.main')
@section('main-container')

<section class="page-title layer-overlay overlay-dark-3 section-typo-light bg-img-center" data-tm-bg-img="http://placehold.it/1894x826">
      <div class="container pt-200 pb-200">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">@lang('auth.Services 2')</h2>
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

    
     <section class="bg-no-repeat bg-img-cover" data-tm-bg-img="{{asset('Frontend/images/bg-images/1894x381.png')}}">
      <div class="container">
        <div class="section-content pt-90">
          <div class="row pt-1">
            <div class="col-sm-12 col-lg-10 col-xl-7 m-auto text-center">
              <h2 class="font-size-60 text-white mb-40 pb-1">You Must Be the Change You Wish to See in the World More.</h2>
              <a href="page-campaign-details.html" class="btn btn-outline-theme-colored2 btn-outline btn-round btn-current-style1 text-uppercase"> Discover more </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: News & Updates-->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 col-lg-6">
              <div class="blog-current-theme-style1 mb-sm-30">
                <article class="post">
                  <div class="entry-header">
                    <div class="post-thumb">
                      <div class="post-thumb-inner">
                        <div class="thumb">
                          <img class="w-100" src="{{asset('Frontend/images/bg-images/h1.jpg')}}" alt="Image">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="entry-content">
                    <div class="blog-meta mb-15">
                      <span class="admin-type mr-10">
                        <i class="fas fa-user"></i> by Admin
                      </span>
                      <span class="date-type">
                        <i class="far fa-clock"></i> 20 Feb, 2021
                      </span>
                    </div>
                    <h4 class="entry-title mt-0 mb-0"><a href="news-details.html" rel="bookmark">@lang('auth.Eco System Responsible for Green Energy')</a></h4>
                    <div class="clearfix"></div>
                  </div>
                  <a class="btn-more" href="news-details.html"><i class="fas fa-chevron-up"></i></a>
                </article>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">
              <div class="blog-current-theme-style1">
                <article class="post">
                  <div class="entry-header">
                    <div class="post-thumb">
                      <div class="post-thumb-inner">
                        <div class="thumb">
                          <img class="w-100" src="{{asset('Frontend/images/bg-images/h2.jpg')}}" alt="Image">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="entry-content">
                    <div class="blog-meta mb-15">
                      <span class="admin-type mr-10">
                        <i class="fas fa-user"></i> by Admin
                      </span>
                      <span class="date-type">
                        <i class="far fa-clock"></i> 20 Feb, 2022
                      </span>
                    </div>
                    <h4 class="entry-title mt-0 mb-0"><a href="news-details.html" rel="bookmark">@lang('auth.Eco System Responsible for Global Warnings')</a></h4>
                    <div class="clearfix"></div>
                  </div>
                  <a class="btn-more" href="news-details.html"><i class="fas fa-chevron-up"></i></a>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Divider -->

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