<footer id="footer" class="footer">
    <div class="footer-widget-area bg-img-cover bg-no-repeat bg-img-center" data-tm-bg-img="">
      <div class="container pt-120 pb-60">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="widget contact-info pr-30 pr-lg--0">
              <div class="widget-logo">
                <a href="index-mp-layout1.html"><img class="logo-default logo-1x" src="{{asset('Frontend/images/logo-wide-white.png')}}" alt="Logo"></a>
              </div>
              <p class="description">Lorem ipsum dolor sit amet consect etur adi pisicing elit sed.</p>
              <div class="footer-contact-info">
                <a class="text-white text-hover-theme-colored1 d-block font-weight-400 mb-1" href="#/"><i class="text-theme-colored1 mr-10 fas fa-phone-alt"></i> 666 888 0000</a>
                <a class="text-white text-hover-theme-colored1 d-block font-weight-400 mb-1" href="#/"><i class="text-theme-colored1 mr-10 fas fa-envelope"></i> needhelp@ecoife.com</a>
                <a class="text-white text-hover-theme-colored1 d-block font-weight-400 mb-0" href="#/"><i class="text-theme-colored1 mr-10 fas fa-map-marker-alt"></i> 20 Broklyn Street, USA</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="widget pl-30 pl-lg-10 pl-sm--0">
              <h4 class="widget-title mb-30 pb-1">News</h4>
              <div class="latest-posts pt-2">
                <article class="post clearfix pb-0 mb-50">
                  <a class="post-thumb" href="#"><img src="http://placehold.it/71x71" alt="Image"></a>
                  <div class="post-right">
                    <span class="post-date">
                      <span class="entry-date text-theme-colored2">Jan 22, 2021</span>
                    </span>
                    <p class="post-title font-weight-500 mt-0"><a href="news-details.html">A Clean Water Gives More Good Taste</a></p>
                  </div>
                </article>
                <article class="post clearfix pb-0 mb-0">
                  <a class="post-thumb" href="#"><img src="http://placehold.it/71x71" alt="Image"></a>
                  <div class="post-right">
                    <span class="post-date">
                      <span class="entry-date text-theme-colored2">Jan 22, 2021</span>
                    </span>
                    <p class="post-title font-weight-500 mt-0"><a href="news-details.html">A Clean Water Gives More Good Taste</a></p>
                  </div>
                </article>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-2 col-xl-3">
            <div class="widget widget_nav_menu pl-100 pl-lg-10 pl-sm--0">
              <h4 class="widget-title" data-tm-margin-bottom="31">Explore</h4>
              <div class="menu-footer-page-list">
                <ul id="footer-page-list" class="menu">
                  <li><a href="page-campaign.html">Our Projects</a></li>
                  <li><a href="page-about.html">About us</a></li>
                  <li><a href="page-campaign.html">New Campaign</a></li>
                  <li><a href="news-details.html">Upcoming Events</a></li>
                  <li><a href="page-team.html">Volunteers</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="widget widget-newsletter pl-30 pl-lg--0">
              <h4 class="widget-title">Newletter</h4>
              <p class="description mb-0">Sign up now to get daily latest news & updates from us</p>
              <!-- Mailchimp Subscription Form-->
              <form id="mailchimp-subscription-form1" class="newsletter-form mb-lg-40 pl-md-0">
                <label for="mce-EMAIL"></label>
                <div class="input-group">
                  <input type="email" id="mce-EMAIL" class="form-control" placeholder="Email address"  name="EMAIL" value="">
                    <div class="input-group-append tm-sc-button">
                    <button type="submit" class="newsletter-btn btn btn-light btn-sm font-weight-500 text-theme-colored3 text-uppercase bg-hover-theme-colored1">Go</button>
                  </div>
                </div>
              </form>

              <!-- Mailchimp Subscription Form Validation-->
              <script>
                (function($) {
                  $('#mailchimp-subscription-form1').ajaxChimp({
                      callback: mailChimpCallBack,
                      url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                  });

                  function mailChimpCallBack(resp) {
                      // Hide any previous response text
                      var $mailchimpform = $('#mailchimp-subscription-form1'),
                          $response = '';
                      $mailchimpform.children(".alert").remove();
                      if (resp.result === 'success') {
                          $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                      } else if (resp.result === 'error') {
                          $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                      }
                      $mailchimpform.prepend($response);
                }
                })(jQuery);
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom"  style="background: #5A79A5; color:white">
      <div class="container">
        <div class="row footer-bottom-style1">
          <div class="col-sm-7 col-md-6  col-lg-5 col-xl-4">
            <div class="footer-paragraph text-center text-sm-start">
              © Copyright 2021 by webxpertiz.com
            </div>
          </div>
          <div class="col-sm-5 col-md-6 col-lg-7 col-xl-8">
            <ul class="styled-icons text-center text-sm-end">
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{asset('Frontend/js/custom.js')}}"></script>
</body>
</html>