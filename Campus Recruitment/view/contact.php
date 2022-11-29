<?php
include('header.php');
?>

<!-- Contact breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
  <div class="breadcrumb-bg breadcrumb-bg-about py-5">
    <div class="container py-lg-5 py-md-4">
      <h2 class="title pt-md-5 pt-4">Contact Us</h2>
      <p class="inner-page-para mt-2">We are an agency located in New York</p>
    </div>
    <div class="hero-overlay"></div>
  </div>
</section>
<!-- //Contact breadcrumb -->

<section class="w3l-contact-main py-5" id="contact">
  <div class="container pt-lg-5 pt-md-3">
    <section class="w3l-quote-6">
      <div class="quote-info py-5">
        <div class="container py-lg-5 py-md-4 py-2">
          <div class="quote-grids-info row align-items-center">
            <div class="quote-gd-left col-lg-6 pr-lg-5">
              <h6 class="title-small text-light mb-2">Innovative technology</h6>
              <h3 class="title-big text-white">We use latest technologies that are proven and practical</h3>
              <div class="mt-4">
                <div class="quote-sec-info">
                  <div class="appyl-sub-icon">
                    <span class="fa fa-map"></span>
                  </div>
                  <div class="appyl-sub-icon-info">
                    <h5>Our Location</h5>
                    <p>Corp Vision, 343 marketing, #21 cravel 1st lane street, NY - 62617.</p>
                  </div>
                </div>
                <div class="quote-sec-info">
                  <div class="appyl-sub-icon">
                    <span class="fa fa-phone"></span>
                  </div>
                  <div class="appyl-sub-icon-info">
                    <h5>Phone Numbers</h5>
                    <p><a href="tel:+142 5897555">+142 5897555</a>,
                      <a href="tel:+142 5897555">+142 5897566</a>
                    </p>
                  </div>
                </div>
                <div class="quote-sec-info">
                  <div class="appyl-sub-icon">
                    <span class="fa fa-envelope-o"></span>
                  </div>
                  <div class="appyl-sub-icon-info">
                    <h5>Email Addresses</h5>
                    <p><a href="mailto:mail@company1.com" class="mail"> mail@company1.com</a>,
                      <a href="mailto:mail@company2.com" class="mail"> mail@company2.com</a>
                    </p>
                  </div>

                </div>
              </div> 
            </div>
            <div class="quote-gd-right col-lg-6 mt-lg-0 mt-5">

              <div class="quote-form mx-auto">
                <form action="#" method="post">
                  <h3 class="title-service mb-2">Lets talk about your project</h3>
                  <p class="mb-4">We have made it easy for clients to reach us and get their solutions weaved</p>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Name*" required="">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email*" required="">
                  </div>
                  <div class="form-group mb-4">
                    <textarea class="form-control" placeholder="Message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-style btn-primary d-block submit">Get Started</button>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>


<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/theme-change.js"></script>

<!-- libhtbox -->
<script src="assets/js/lightbox-plus-jquery.min.js"></script>
<!-- libhtbox -->

<!-- banner slick slider -->
<script src="assets/js/slick.js"></script>
<script src="assets/js/script.js"></script>
<!-- //banner slick slider -->

<!-- magnific popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function() {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>
<!-- //magnific popup -->

<!-- script for tesimonials carousel slider -->
<script src="assets/js/owl.carousel.js"></script>

<script>
  $(document).ready(function() {
    $("#owl-demo1").owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        768: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false,
          loop: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function() {
    $('.navbar-toggler').click(function() {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function() {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function() {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function() {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<!-- Search -->
<script>
  $('.control').click(function() {
    $('body').addClass('search-active');
    $('.input-search').focus();
  });

  $('.icon-close').click(function() {
    $('body').removeClass('search-active');
  });
</script>
<!-- //Search -->

<script src="assets/js/bootstrap.min.js"></script>


<?php
include('footer.php');
?>
</body>

</html>