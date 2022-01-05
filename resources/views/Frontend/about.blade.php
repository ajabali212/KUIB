@extends('frontend.layouts.main')
@section('main-container')



    <section class="page-title layer-overlay overlay-dark-3 section-typo-light bg-img-center pt-200 " data-tm-bg-img="{{asset('Frontend/images/aboutus.jpg')}}" style="background-repeat: no-repeat; background-color: #fff;">
      <div class="container pt-200 pb-200">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title"> <span class="text-theme-colored4"> &nbsp;&nbsp;&nbsp; </span></h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                  <span> <a href="#" rel="home"> &nbsp; </a></span>
                  
                  <span> <a href="#"> &nbsp; </a> </span>
                  
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- Section About KUIB -->
    <section class="divider">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
              <div class="icon-box-wrapper">
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0 " style="color:#8e0a0a;">About KUIMB</h5>
                  <div class="content">
                    <a href="" class="text-theme-colored4">
                     The Koperasi Usahawan India Malaysia Berhad (KUIMB) is an organisation established by like-minded individuals with the objective of uplifting the socio-economic status of the Malaysian Entrepreneur  community. Cooperatives are registered under the Ministry of Domestic Trade, Cooperatives and Consumerism.
                    </a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>

          <!-- Section: Divider -->
    <section>
      <div class="container">
        <div class="tm-sc-section-title section-title text-center mb-40">
          <div class="row justify-content-md-center">
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-6 col-xxl-5">
              <div class="title-wrapper mb-1">
                <h6 class="subtitle line-shape-bottom line-shape-center text-theme-colored4">KUIMB</h6>
                <h2 class="title mb-0">Our Mission is to Save the World</h2>
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
                    <a class="nav-link" id="eco-system-tab" data-bs-toggle="tab" href="#eco-system" role="tab" aria-controls="eco-system" aria-selected="false"><img src="{{asset('Frontend/images/icons/tab5.png')}}" alt="Image"> <br>Overview</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="recycling-tab" data-bs-toggle="tab" href="#recycling" role="tab" aria-controls="recycling" aria-selected="true"><img src="{{asset('Frontend/images/icons/tab5.png')}}" alt="Image"> <br>Company Info</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="waterrefine-tab" data-bs-toggle="tab" href="#waterrefine" role="tab" aria-controls="waterrefine" aria-selected="false"><img src="{{asset('Frontend/images/icons/tab5.png')}}" alt="Image"> <br>Board of Director</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="saveanimals-tab" data-bs-toggle="tab" href="#saveanimals" role="tab" aria-controls="saveanimals" aria-selected="false"><img src="{{asset('Frontend/images/icons/tab5.png')}}" alt="Image"> <br>Gallery</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="solarenergy-tab" data-bs-toggle="tab" href="#solarenergy" role="tab" aria-controls="solarenergy" aria-selected="false"><img src="{{asset('Frontend/images/icons/tab5.png')}}" alt="Image"> <br>Membership</a>
                  </li>
                </ul>
                <div class="tab-content p-0" id="myTabContent">
                  <div class="tab-pane fade" id="eco-system" role="tabpanel" aria-labelledby="eco-system-tab">
                    <div class="row">
                      <div class="col-lg-12 col-xl-6">
                        <div class="layer-bg-wrapper-current-style1">
                          <img class="mb-25 w-100" src="http://placehold.it/585x486" alt="Image">
                          <div class="font-size-18 text-white pb-25 pl-lg-20">For any inquiries call the hotline: <span>123 123 0000</span></div>
                          <div class="img-bg-layer1 bg-img-cover" data-tm-bg-img="http://placehold.it/625x571"></div>
                        </div>
                      </div>
                      <div class="col-lg-12 col-xl-5">
                        <div class="tab-content-inner pt-70 pt-lg-40 pr-md-30 pr-xs-15 pl-50 pl-lg-20 pr-lg-20 pl-md-30 pl-xs-15">
                          <h3 class="font-size-40 font-weight-500 mt-0 mb-40">Overview</h3>
                          <p class="font-size-18 mb-40" style="text-align: justify;">The Koperasi Usahawan India Malaysia Berhad (KUIMB) also known as Malaysian Indian Entrepreneurs Cooperative (MIEC) is an organisation established by like-minded individuals with the objective of uplifting the socio-economic status of the Malaysian Indian community. Cooperatives are registered under the Ministry of Domestic Trade, Cooperatives and Consumerism.</p>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade show active" id="recycling" role="tabpanel" aria-labelledby="recycling-tab">
                    <div class="row">
                      <div class="col-lg-12 col-xl-6">
                        <div class="layer-bg-wrapper-current-style1">
                          <img class="mb-25 w-100" src="http://placehold.it/585x486" alt="Image">
                          <div class="font-size-18 text-white pb-25 pl-lg-20"> <span></span></div>
                          <div class="img-bg-layer1 bg-img-cover" data-tm-bg-img="http://placehold.it/625x571"></div>
                        </div>
                      </div>
                      <div class="col-lg-12 col-xl-5">
                        <div class="tab-content-inner pt-70 pt-lg-40 pr-md-30 pr-xs-15 pl-50 pl-lg-20 pr-lg-20 pl-md-30 pl-xs-15">
                          <h3 class="font-size-40 font-weight-500 mt-0 mb-40">Company Info</h3>
                          <p class="font-size-18 mb-40"></p>
                          <ul class="unordered-list-current-style1 mb-50">
                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> 
                            Incorporated Name
                            </li>

                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> 
                            Incorporated Date
                            </li>

                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> 
                              Administration Address (Head Office)
                            </li>

                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> Registered No
                            </li>

                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> Bankers
                            </li>

                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> Legal Advisors
                            </li>

                            <li><img class="mr-20" src="{{asset('Frontend/images/icons/1.png')}}" alt="Image"> Auditors
                            </li>

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
                          <h3 class="font-size-40 font-weight-500 mt-0 mb-40">Board Of Director</h3>
                          <p class="font-size-18 mb-40" style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                          
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
                          <h3 class="font-size-40 font-weight-500 mt-0 mb-40">Gallery</h3>
                          <p class="font-size-18 mb-40">There are many variations of passages of available but the majority have suffered alteration in some form, by injected humou.</p>
                          
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
                          <h3 class="font-size-40 font-weight-500 mt-0 mb-40">Membership</h3>
                          <p class="font-size-18 mb-40">There are many variations of passages of available but the majority have suffered alteration in some form, by injected humou.</p>
                          
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
      <div class="tm-floating-objects">
        <span class="floating-object-1 tm-animation-spin d-none-1799" data-tm-bg-img="http://placehold.it/161x166" data-tm-width="161" data-tm-height="166" data-tm-top="auto" data-tm-bottom="185" data-tm-left="auto" data-tm-right="215" data-tm-opacity="1"></span>        
        <span class="floating-object-1 tm-animation-floating z-index--1 d-none d-xl-block" data-tm-bg-img="images/shape/about-01.png" data-tm-width="76" data-tm-height="123" data-tm-top="140" data-tm-bottom="auto" data-tm-left="220" data-tm-right="auto" data-tm-opacity="1"></span>
        <span class="floating-object-2 tm-animation-random d-none-1799" data-tm-bg-img="images/shape/causes-02.png" data-tm-width="95" data-tm-height="90" data-tm-top="450" data-tm-bottom="auto" data-tm-left="auto" data-tm-right="110" data-tm-opacity="1"></span>
      </div>
    </section>

          <!-- <div class="col-lg-6">
            <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
              <div class="icon-box-wrapper">
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0 " style="color:#8e0a0a;">Mission</h5>
                  <div class="content">
                    <a href="" class="text-theme-colored4">
                      It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes.
                    </a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-lg-6">
            <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
              <div class="icon-box-wrapper">
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0 " style="color:#8e0a0a;">Goals</h5>
                  <div class="content">
                    <a href="" class="text-theme-colored4">
                      It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes.
                    </a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
    </section>
    <!-- Section About KUIB end -->

     <!-- Section: Mission Start -->
    <section>
      <div class="container pt-0">
        <div class="tm-sc-section-title section-title text-center mb-40">
          <div class="row justify-content-md-center">
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-6 col-xxl-5">
              <div class="title-wrapper mb-1">
               
                <h2 class="title mb-0 text-theme-colored4">Our Mission</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-lg-12">
              <div class="project-tab-style1">
                <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="eco-system-tab" data-bs-toggle="tab" href="#eco-system" role="tab" aria-controls="eco-system" aria-selected="false"><img src="images/icons/tab1.png" alt="Image"> <br>Eco System</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="recycling-tab" data-bs-toggle="tab" href="#recycling" role="tab" aria-controls="recycling" aria-selected="true"><img src="images/icons/tab2.png" alt="Image"> <br>Recycling</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="waterrefine-tab" data-bs-toggle="tab" href="#waterrefine" role="tab" aria-controls="waterrefine" aria-selected="false"><img src="images/icons/tab3.png" alt="Image"> <br>Water Refine</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="saveanimals-tab" data-bs-toggle="tab" href="#saveanimals" role="tab" aria-controls="saveanimals" aria-selected="false"><img src="images/icons/tab4.png" alt="Image"> <br>Save Animals</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="solarenergy-tab" data-bs-toggle="tab" href="#solarenergy" role="tab" aria-controls="solarenergy" aria-selected="false"><img src="images/icons/tab5.png" alt="Image"> <br>Solar Energy</a>
                  </li>
                </ul> -->
                <div class="tab-content p-0" id="myTabContent">
                  <div class="tab-pane fade" id="eco-system" role="tabpanel" aria-labelledby="eco-system-tab">
                    
                  </div>
                  <div class="tab-pane fade show active" id="recycling" role="tabpanel" aria-labelledby="recycling-tab">
                    <div class="row">
                      <div class="col-lg-12 col-xl-6">
                        <div class="layer-bg-wrapper-current-style1">
                          <img class="mb-25 w-100" src="{{asset('Frontend/images/objectives.jpg')}}" alt="Image">
                          
                        </div>
                      </div>
                      <div class="col-lg-12 col-xl-5">
                        <div class="tab-content-inner pt-70 pt-lg-40 pr-md-30 pr-xs-15 pl-50 pl-lg-20 pr-lg-20 pl-md-30 pl-xs-15">
                          <h3 class="font-size-40 font-weight-500 mt-0 mb-40"> KUIMB OBJECTIVES</h3>
                          
                          <ul class="unordered-list-current-style1 mb-50">
                            <li>
                              <img class="mr-20" src="{{asset('Frontend/images/KUIMB_Objectives/1.png')}}" alt="Image"> 
                              <span class="progress-content bg-theme-colored4 pl-10"  data-tm-border-radius="10">
                                To create a network of Engineering Professionals & Entrepreneurs
                              </span>
                            </li>
                            <li>
                              <img class="mr-20" src="{{asset('Frontend/images/KUIMB_Objectives/2.png')}}" alt="Image"> 
                              <span class="progress-content bg-theme-colored4 pl-10"  data-tm-border-radius="10">
                                To source sufficient captial to venture into bussiness 
                              </span>
                            </li>
                            <li>
                              <img class="mr-20" src="{{asset('Frontend/images/KUIMB_Objectives/3.png')}}" alt="Image"> 
                              <span class="progress-content bg-theme-colored4 pl-10"  data-tm-border-radius="10">
                                To have a portfolio of strategic investments for medium to long term
                              </span>
                            </li>
                            <li>
                              <img class="mr-20" src="{{asset('Frontend/images/KUIMB_Objectives/4.png')}}" alt="Image"> 
                              <span class="progress-content bg-theme-colored4 pl-10"  data-tm-border-radius="10">
                                To assist members in loan applications and business counseling
                              </span>
                            </li>
                            <li>
                              <img class="mr-20" src="{{asset('Frontend/images/KUIMB_Objectives/5.png')}}" alt="Image"> 
                              <span class="progress-content bg-theme-colored4 pl-10 "  data-tm-border-radius="10">
                                To create business opportunities for members
                              </span>
                            </li>
                          </ul>
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
    <!-- Section: Mission End -->

 <!-- Section: Goals Start -->
    <section data-tm-bg-color="#f5f5f4" class="mb-120" >
      <div class="container-fluid pt-0  pb-0">
        <div class="tm-sc-section-title section-title text-center mb-40">
          <div class="row justify-content-md-center">
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-6 col-xxl-5">
              <div class="title-wrapper mb-1">
               
                <h2 class="title mb-80 text-theme-colored4">KUIMB Goals</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content pb-50">
          <div class="row">
            <div class="col-lg-4">
              <div class="tm-sc-project-items project-items-current-theme-style1 text-center pb-md-150">
                <div class="project-item">                    
                  <div class="thumb">
                    <img class="border-rounded" src="{{asset('Frontend/images/KUIMB_goals.png')}}" alt="Image">
                  </div>
                  <div class="content">
                    <h5 class="title"><a href="#">Short Term Goals</a></h5>
                    <ul >
                      <li> To invest in property </li>
                      <li> Invest in Government bond etc </li>
                      <li> Fixed income yeilding investments </li>
                      <li> Low Risk Investments </li>
                    </ul>
                    <!-- <a class="btn-link" href="page-campaign-details.html">
                      <i class="fas fa-chevron-up"></i>
                      <img class="shape-circle" src="frontend/images/shape/project-01.png" alt="Image">
                    </a> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="tm-sc-project-items project-items-current-theme-style1 text-center pb-md-150">
                <div class="project-item">                    
                  <div class="thumb">
                    <img class="border-rounded" src="{{asset('Frontend/images/KUIMB_goals.png')}}" alt="Image">
                  </div>
                  <div class="content">
                    <h5 class="title"><a href="">Medium Term Goals</a></h5>
                    <ul >
                      <li> To invest in property </li>
                      <li> Study business proposals by members & aquite stake </li>
                      <li> Provide members with funding opportunites </li>
                      <li> Medium risk investments </li>
                    </ul>
                    <!-- <a class="btn-link" href="page-campaign-details.html">
                      <i class="fas fa-chevron-up"></i>
                      <img class="shape-circle" src="frontend/images/shape/project-01.png" alt="Image">
                    </a> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="tm-sc-project-items project-items-current-theme-style1 text-center">
                <div class="project-item">                    
                  <div class="thumb">
                    <img class="border-rounded" src="{{asset('Frontend/images/KUIMB_goals.png')}}" alt="Image">
                  </div>
                  <div class="content">
                    <h5 class="title"><a href="#">Long Term Goals</a></h5>
                    <ul >
                      <li> To hold a portfolio in fixed income yeilding investment & properties </li>
                      <li> To participate in business ventures with members </li>
                    </ul>
                    <!-- <a class="btn-link" href="page-campaign-details.html">
                      <i class="fas fa-chevron-up"></i>
                      <img class="shape-circle" src="frontend/images/shape/project-01.png" alt="Image">
                    </a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- Section Goals End -->

    <!-- Section: Divider -->
    <section class="pb-200" data-tm-bg-color="#f5f5f4">
      <div class="section-content">
        <div class="container pb-0">
          <div class="row">
            <div class="col-lg-5 col-xl-6 pr-130 pr-lg-30 pr-md-10 pl-md-10 mb-md-50 text-center text-lg-start">
              <img src="{{asset('Frontend/images/strategic-plan.jpg')}}" alt="Image">
             <!--  <h2 class="text-white font-weight-400 mt-0 mb-40 mb-md-30 pb-1">Let’s Together Protect and Enhance Environment for our Future Generation</h2> -->
              
            </div>
            <div class="col-lg-7 col-xl-6">
              <div class="donate-form-current-style1 bg-white position-relative z-index-1">
                <div class="bg-theme-colored3 p-20 text-uppercase letter-spacing-1 font-weight-500 text-theme-colored2  text-center">KUIMB Plan</div>
                <div class="pt-50 pr-80 pr-xs-15 pb-10 pl-80 pl-xs-15">
                  <p class="font-size-18 text-center"></p>
                  
                    <div class="mb-3  mb-20">
                      <label><strong>Property Investments</strong></label>
                      
                    </div>
                    <div class="mb-20">
                      <label><strong>IPO Subscriptions</strong></label>
                      <br>
                    </div>
                    <div class="mb-20">
                      <label><strong>Training & Develpment</strong></label>
                      <br>
                    </div>

                    <div class="mb-20">
                      <label><strong>Venture Capital</strong></label>
                      <br>
                    </div>

                    <div class="mb-20">
                      <label><strong>AR-Rahnu</strong></label>
                      <br>
                    </div>
                    <div class="mb-20">
                      <label><strong>Securing Land From State Goverments</strong></label>
                      <br>
                    </div>
                    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection