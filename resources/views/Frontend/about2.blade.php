@extends('frontend.layouts.main')
@section('main-container')

<section class="page-title layer-overlay overlay-dark-3 section-typo-light bg-img-center" data-tm-bg-img="http://placehold.it/1894x826">
      <div class="container pt-200 pb-200">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">@lang('auth.about_page_banner 2')</h2>
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
<!-- Section: Divider -->
    <section>
      <div class="container">
        <div class="section-content mb-40">
          <div class="row">
            <div class="col-lg-12">
              <div class="project-tab-style1">
                <div class="tab-content p-0" id="myTabContent">
                  <div class="tab-pane fade show active" id="recycling" role="tabpanel" aria-labelledby="recycling-tab">
                    <div class="row">
                      <div class="col-lg-12 col-xl-6">
                        <div class="layer-bg-wrapper-current-style1">
                          <img class="mb-25 w-100" src="http://placehold.it/585x486" alt="Image">
                          <div class="font-size-18 text-white pb-25 pl-lg-20"><span></span></div>
                          <div class="img-bg-layer1 bg-img-cover" data-tm-bg-img="http://placehold.it/625x571"></div>
                        </div>
                      </div>
                      <div class="col-lg-12 col-xl-5">
                        <div class="tab-content-inner pt-70 pt-lg-40 pr-md-30 pr-xs-15 pl-50 pl-lg-20 pr-lg-20 pl-md-30 pl-xs-15">
                          <h3 class="font-size-40 font-weight-500 mt-0 mb-40">@lang('auth.How Drones Can Save Rainforests')</h3>
                          <p class="font-size-18 mb-40">@lang('auth.about 2 page content')</p>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
     <section>
      <div class="container pb-90">
        <div class="row pb-1">
          <div class="col-lg-6 col-xl-5">
            <div class="tm-sc-section-title section-title mb-0 mb-md-50">
              <div class="title-wrapper mb-0">
                <h6 class="subtitle line-shape-bottom text-theme-colored1">@lang('auth.We Love & Care')</h6>
                <h2 class="title mb-0 pr-100 pr-xs--0">@lang('auth.Entire World To Trust Us')</h2>
                <p class="paragraph mt-30 mb-0 pt-2">@lang('auth.We Love Content')</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-7">
            <div class="thumb">
              <img class="w-100" src="{{asset('Frontend/images/photos/map.png')}}" alt="Image">
            </div>
          </div>
        </div>
      </div>
      <div class="tm-floating-objects">
        <span class="floating-object-2 tm-animation-random d-none-1799" data-tm-bg-img="{{asset('Frontend/images/shape/causes-02.png')}}" data-tm-width="95" data-tm-height="90" data-tm-top="165" data-tm-bottom="auto" data-tm-left="auto" data-tm-right="140" data-tm-opacity="1"></span>
      </div>
    </section>
        </section>
     <section data-tm-bg-color="#f5f5f4">
      <div class="container pt-90 pb-110">
        <div class="section-content">
          <div class="row">
            <div class="col-lg-6 col-xl-5">
              <div class="tm-sc-section-title section-title mt-2 mb-0 mb-lg-20">
                <div class="title-wrapper mb-0">
                  <h6 class="subtitle line-shape-bottom text-theme-colored1">@lang('auth.About Ecoife Platform')</h6>
                  <h2 class="title mb-0">@lang('auth.About Ecoife Platform Content')</h2>
                </div>
              </div>
            </div>
            <div class="col-lg-6 offset-xl-1">
              <div class="about-content">
                <p class="font-size-18 mb-20">@lang('auth.About Ecoife Platform Right')</p>
                <div class="play-video-style1 pt-30">
                  <div class="video-box mr-30">
                    <img src="http://placehold.it/156x82" alt="Image">
                    <div class="video-button-inner">
                      <div class="play-button"><span class="play-icon"><i class="fa fa-play"></i></span></div>
                      <a class="hover-link" data-lightbox-gallery="youtube-video" href="https://www.youtube.com/watch?v=xcJtL7QggTI" title=""></a>
                    </div>
                  </div>
                  <div class="description">
                    <h3 class="text-theme-colored1 font-weight-400 mt-0 mb-1">345600+</h3>
                    <p class="mt-0 mb-0">@lang('auth.About Ecoife Platform Right Content')</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection