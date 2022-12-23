<!-- Contact breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
  <div class="breadcrumb-bg breadcrumb-bg-about py-5">
    <div class="container py-lg-5 py-md-4">
      <h2 class="title pt-md-5 pt-4">Sign In</h2>
      <!-- <p class="inner-page-para mt-2">Sign In your Account</p> -->
    </div>
    <div class="hero-overlay"></div>
  </div>
</section>
<br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
    
                <div class="card">
                    <div class="card-header text-center">
                        Login
                    </div>
                    
                    <form method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <input type="text" placeholder="Enter User Name or Email" class="form-control" name="username" id="username">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="password" placeholder="Enters Password" class="form-control" name="password" id="password">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col text-center">
                                    <input type="submit" class="btn btn-primary" name="login" id="login" value="Login">
    
                                    <input type="reset" class="btn btn-danger" name="reset" id="reset" value="cancel">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col text-center">
                                    <a href="registration">click here for crate account</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<br>

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