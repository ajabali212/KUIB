@extends('frontend.layouts.main')
@section('main-container')

<!-- Banner Section Start-->
<section class="page-title layer-overlay overlay-dark-3 section-typo-light bg-img-center" data-tm-bg-img="http://placehold.it/1894x826">
      <div class="container pt-200 pb-200">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">@lang('auth.Services')</h2>
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
<!-- Banner Section End -->

 <!-- Section: Divider -->
    <section>
      <div class="container">
        <div class="tm-sc-section-title section-title text-center mb-40 pt-80">
          <div class="row justify-content-md-center">
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-6 col-xxl-5">
              <div class="title-wrapper mb-1">
                <h6 class="subtitle line-shape-bottom line-shape-center text-theme-colored1">@lang('auth.Check Our Services')</h6>
                <h2 class="title mb-0">@lang('auth.Our Mission Is To Save The World')</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-lg-12">
              <div class="project-tab-style1">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="eco-system-tab" data-bs-toggle="tab" href="#eco-system" role="tab" aria-controls="eco-system" aria-selected="false"><img src="{{asset('Frontend/images/icons/tab1.png')}}" alt="Image"> <br>@lang('auth.Eco_System')</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="recycling-tab" data-bs-toggle="tab" href="#recycling" role="tab" aria-controls="recycling" aria-selected="true"><img src="{{asset('Frontend/images/icons/tab2.png')}}" alt="Image"> <br>@lang('auth.Recycling')</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="waterrefine-tab" data-bs-toggle="tab" href="#waterrefine" role="tab" aria-controls="waterrefine" aria-selected="false"><img src="{{asset('Frontend/images/icons/tab3.png')}}" alt="Image"> <br>@lang('auth.water_refine')</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="saveanimals-tab" data-bs-toggle="tab" href="#saveanimals" role="tab" aria-controls="saveanimals" aria-selected="false"><img src="{{asset('Frontend/images/icons/tab4.png')}}" alt="Image"> <br>@lang('auth.Save Animals')</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="solarenergy-tab" data-bs-toggle="tab" href="#solarenergy" role="tab" aria-controls="solarenergy" aria-selected="false"><img src="{{asset('Frontend/images/icons/tab5.png')}}" alt="Image"> <br>@lang('auth.Solar Energy')</a>
                  </li>
                </ul>
                <!-- <div class="tab-content p-0" id="myTabContent">
                  <div class="tab-pane fade" id="eco-system" role="tabpanel" aria-labelledby="eco-system-tab">
                    <div class="row">
                      <div class="col-lg-12 col-xl-6">
                        <div class="layer-bg-wrapper-current-style1">
                          <img class="mb-25 w-100" src="http://placehold.it/585x486" alt="Image">
                          <div class="font-size-18 text-white pb-25 pl-lg-20">For any inquiries call the hotline: <span>666 888 0000</span></div>
                          <div class="img-bg-layer1 bg-img-cover" data-tm-bg-img="http://placehold.it/625x571"></div>
                        </div>
                      </div>
                      <div class="col-lg-12 col-xl-5">
                        <div class="tab-content-inner pt-70 pt-lg-40 pr-md-30 pr-xs-15 pl-50 pl-lg-20 pr-lg-20 pl-md-30 pl-xs-15">
                          <h3 class="font-size-40 font-weight-500 mt-0 mb-40">How Drones Can Save Rainforests</h3>
                          <p class="font-size-18 mb-40">There are many variations of passages of available but the majority have suffered alteration in some form, by injected humou.</p>
                          <ul class="unordered-list-current-style1 mb-50">
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> Lorem Ipsum is not simply random text</li>
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> If you are going to use a passage</li>
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> Making this the first true generator on the Internet</li>
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> Various versions have evolved over the years</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade show active" id="recycling" role="tabpanel" aria-labelledby="recycling-tab">
                    <div class="row">
                      <div class="col-lg-12 col-xl-6">
                        <div class="layer-bg-wrapper-current-style1">
                          <img class="mb-25 w-100" src="http://placehold.it/585x486" alt="Image">
                          <div class="font-size-18 text-white pb-25 pl-lg-20">For any inquiries call the hotline: <span>666 888 0000</span></div>
                          <div class="img-bg-layer1 bg-img-cover" data-tm-bg-img="http://placehold.it/625x571"></div>
                        </div>
                      </div>
                      <div class="col-lg-12 col-xl-5">
                        <div class="tab-content-inner pt-70 pt-lg-40 pr-md-30 pr-xs-15 pl-50 pl-lg-20 pr-lg-20 pl-md-30 pl-xs-15">
                          <h3 class="font-size-40 font-weight-500 mt-0 mb-40">How Drones Can Save Rainforests</h3>
                          <p class="font-size-18 mb-40">There are many variations of passages of available but the majority have suffered alteration in some form, by injected humou.</p>
                          <ul class="unordered-list-current-style1 mb-50">
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> Lorem Ipsum is not simply random text</li>
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> If you are going to use a passage</li>
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> Making this the first true generator on the Internet</li>
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> Various versions have evolved over the years</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="waterrefine" role="tabpanel" aria-labelledby="waterrefine-tab">
                    <div class="row">
                      <div class="col-lg-12 col-xl-6">
                        <div class="layer-bg-wrapper-current-style1">
                          <img class="mb-25 w-100" src="http://placehold.it/585x486" alt="Image">
                          <div class="font-size-18 text-white pb-25 pl-lg-20">For any inquiries call the hotline: <span>666 888 0000</span></div>
                          <div class="img-bg-layer1 bg-img-cover" data-tm-bg-img="http://placehold.it/625x571"></div>
                        </div>
                      </div>
                      <div class="col-lg-12 col-xl-5">
                        <div class="tab-content-inner pt-70 pt-lg-40 pr-md-30 pr-xs-15 pl-50 pl-lg-20 pr-lg-20 pl-md-30 pl-xs-15">
                          <h3 class="font-size-40 font-weight-500 mt-0 mb-40">How Drones Can Save Rainforests</h3>
                          <p class="font-size-18 mb-40">There are many variations of passages of available but the majority have suffered alteration in some form, by injected humou.</p>
                          <ul class="unordered-list-current-style1 mb-50">
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> Lorem Ipsum is not simply random text</li>
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> If you are going to use a passage</li>
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> Making this the first true generator on the Internet</li>
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> Various versions have evolved over the years</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="saveanimals" role="tabpanel" aria-labelledby="saveanimals-tab">
                    <div class="row">
                      <div class="col-lg-12 col-xl-6">
                        <div class="layer-bg-wrapper-current-style1">
                          <img class="mb-25 w-100" src="http://placehold.it/585x486" alt="Image">
                          <div class="font-size-18 text-white pb-25 pl-lg-20">For any inquiries call the hotline: <span>666 888 0000</span></div>
                          <div class="img-bg-layer1 bg-img-cover" data-tm-bg-img="http://placehold.it/625x571"></div>
                        </div>
                      </div>
                      <div class="col-lg-12 col-xl-5">
                        <div class="tab-content-inner pt-70 pt-lg-40 pr-md-30 pr-xs-15 pl-50 pl-lg-20 pr-lg-20 pl-md-30 pl-xs-15">
                          <h3 class="font-size-40 font-weight-500 mt-0 mb-40">How Drones Can Save Rainforests</h3>
                          <p class="font-size-18 mb-40">There are many variations of passages of available but the majority have suffered alteration in some form, by injected humou.</p>
                          <ul class="unordered-list-current-style1 mb-50">
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> Lorem Ipsum is not simply random text</li>
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> If you are going to use a passage</li>
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> Making this the first true generator on the Internet</li>
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> Various versions have evolved over the years</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="solarenergy" role="tabpanel" aria-labelledby="solarenergy-tab">
                    <div class="row">
                      <div class="col-lg-12 col-xl-6">
                        <div class="layer-bg-wrapper-current-style1">
                          <img class="mb-25 w-100" src="http://placehold.it/585x486" alt="Image">
                          <div class="font-size-18 text-white pb-25 pl-lg-20">For any inquiries call the hotline: <span>666 888 0000</span></div>
                          <div class="img-bg-layer1 bg-img-cover" data-tm-bg-img="http://placehold.it/625x571"></div>
                        </div>
                      </div>
                      <div class="col-lg-12 col-xl-5">
                        <div class="tab-content-inner pt-70 pt-lg-40 pr-md-30 pr-xs-15 pl-50 pl-lg-20 pr-lg-20 pl-md-30 pl-xs-15">
                          <h3 class="font-size-40 font-weight-500 mt-0 mb-40">How Drones Can Save Rainforests</h3>
                          <p class="font-size-18 mb-40">There are many variations of passages of available but the majority have suffered alteration in some form, by injected humou.</p>
                          <ul class="unordered-list-current-style1 mb-50">
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> Lorem Ipsum is not simply random text</li>
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> If you are going to use a passage</li>
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> Making this the first true generator on the Internet</li>
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> Various versions have evolved over the years</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tm-floating-objects">
        <span class="floating-object-1 tm-animation-spin d-none-1799" data-tm-bg-img="http://placehold.it/161x166" data-tm-width="161" data-tm-height="166" data-tm-top="auto" data-tm-bottom="185" data-tm-left="auto" data-tm-right="215" data-tm-opacity="1"></span>        
        <span class="floating-object-1 tm-animation-floating z-index--1 d-none d-xl-block" data-tm-bg-img="images/shape/about-01.png" data-tm-width="76" data-tm-height="123" data-tm-top="140" data-tm-bottom="auto" data-tm-left="220" data-tm-right="auto" data-tm-opacity="1"></span>
        <span class="floating-object-2 tm-animation-random d-none-1799" data-tm-bg-img="images/shape/causes-02.png" data-tm-width="95" data-tm-height="90" data-tm-top="450" data-tm-bottom="auto" data-tm-left="auto" data-tm-right="110" data-tm-opacity="1"></span>
      </div>
    </section>

@endsection