@extends('frontend.layouts.main')
@section('main-container')

<section id="sectionID_if_Needed" class="divider">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
       <iframe id="iframe" frameborder="0" scrolling="no" src="https://www.google.com/maps/d/embed?mid=1kGw0-BgVSlVWNFfnV3jYA4wjbmxP6U8f&hl=en" height="450" width="100%"></iframe>
      </div>
    </div>
  </div>
</section>
<!--     <section class="page-title layer-overlay overlay-dark-3 section-typo-light bg-img-center" data-tm-bg-img="http://placehold.it/1894x826">
      <div class="container pt-200 pb-200">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title"><span class="text-theme-colored4">Contact Us</span></h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                  <span><a href="#" rel="home">Home</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span><a href="#">Contact Us</a></span>
                  
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section> -->

<!-- Divider: Contact -->
    <section class="divider">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored4 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
              <div class="icon-box-wrapper">
                <div class="icon-wrapper">
                  <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-044-call-1"></i> </a>
                </div>
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0">Phone</h5>
                  <div class="content">
                    <a href="#" style="color:#8e0a0a;">
                      03- 7968 8686
                    </a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored4 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
              <div class="icon-box-wrapper">
                <div class="icon-wrapper">
                  <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-043-email-1"></i> </a>
                </div>
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0">Email</h5>
                  <div class="content">
                    <a href="#" style="color:#8e0a0a;">
                      secretary@kuimb.com
                    </a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored4 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
              <div class="icon-box-wrapper">
                <div class="icon-wrapper">
                  <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-025-world"></i> </a>
                </div>
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0">Address</h5>
                  <div class="content" style="color:#8e0a0a;">Suite 705, Level 7, PJ Tower, AMCORP Trade Centre,<br />  18 Persiaran Barat, 46200 Petaling Jaya, Selangor.</div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            
          </div>
          <div class="col-lg-8">
            <h2 class="mt-0 mb-0" style="color:#8e0a0a;">Interested in discussing</h2>
            <p class="font-size-20"><!-- Active & Ready to use Contact Form! --></p>
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="text-theme-colored4">Name <small>*</small></label>
                    <input name="form_name" class="form-control" type="text">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="text-theme-colored4">Email<small>*</small></label>
                    <input name="form_email" class="form-control required email" type="email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="text-theme-colored4">Subject <small>*</small></label>
                    <input name="form_subject" class="form-control required" type="text">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label class="text-theme-colored4">Phone</label>
                    <input name="form_phone" class="form-control" type="text">
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <label class="text-theme-colored4">Message</label>
                <textarea name="form_message" class="form-control required" rows="8"></textarea>
              </div>
              <div class="mb-3">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-theme-colored4 text-white text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="btn btn-secondary text-white text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" >Reset</button>
              </div>
            </form>

            <!-- Contact Form Validation-->
            <script>
              (function($) {
                $("#contact_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              })(jQuery);
            </script>
          </div>
        </div>
      </div>
    </section>
@endsection