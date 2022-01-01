@extends('frontend.layouts.main')
@section('main-container')

    <section class="page-title layer-overlay overlay-dark-3 section-typo-light bg-img-center" data-tm-bg-img="http://placehold.it/1894x826">
      <div class="container pt-200 pb-200">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title"><span class="text-theme-colored4">Membership</span></h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                  <span><a href="#" rel="home">Home</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span><a href="#">Membership</a></span>
                  
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- Divider: Contact -->
    <section class="divider">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
              <div class="icon-box-wrapper">
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0" style="color:#8e0a0a;">What Is KUIMB Membership?</h5>
                  <div class="content">
                    <a href="" class="text-theme-colored4">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
              <div class="icon-box-wrapper">
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0" style="color:#8e0a0a;">Benefits of being Member</h5>
                  <div class="content">
                    <a href="" class="text-theme-colored4">
                      It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes.
                    </a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>

        </div>
          <div class="col-lg-12">
            <h5 class="mt-0 mb-0" style="color:#8e0a0a;">Membership Form</h5>
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