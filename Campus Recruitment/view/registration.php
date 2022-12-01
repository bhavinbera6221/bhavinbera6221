<!-- Contact breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">
            <h2 class="title pt-md-5 pt-4">Registration</h2>
            <p class="inner-page-para mt-2"></p>
        </div>
        <div class="hero-overlay"></div>
    </div>
</section>
<br>

<section>
    <style>
        input[type="radio"],
        input[type="checkbox"] {
            -webkit-appearance: auto !important;
            outline: auto !important;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">

                <div class="card">
                    <div class="card-header text-center">
                        Registration
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="row mt-3">
                                <div class="col">
                                    <label for="fullname">Name</label>
                                    <input type="text" placeholder="Enter Full Name" class="form-control" name="fullname" id="fullname">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="text" placeholder="Enter User Name" class="form-control" name="username" id="username">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="text" placeholder="Enter Email Address" class="form-control" name="email" id="email">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="number" placeholder="Enter Contact Number" class="form-control" name="mobile" id="mobile">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="radio" name="gender" value="Male" id="male"> <label for="male"> Male</label>
                                    <input type="radio" name="gender" value="Female" id="female"> <label for="female"> Female</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="checkbox" name="hobby[]" value="cricket" id="cricket"> <label for="cricket"> Cricket</label>
                                    <input type="checkbox" name="hobby[]" value="reading" id="reading"> <label for="reading"> Reading</label>
                                    <input type="checkbox" name="hobby[]" value="swiming" id="swiming"> <label for="swiming"> Swiming</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <select name="city" id="city" class="form-control">
                                        <option value="1" disabled selected>--------- select your City ---------</option>
                                        <option value="ahmedabad">ahmedabad</option>
                                        <option value="jamnagar">jamnagar</option>
                                        <option value="Surat">Surat</option>
                                        <option value="Junagadh">Junagadh</option>
                                        <option value="Rajkot">Rajkot</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col">
                                    <input type="file" name="prof_pic" id="prof_pic">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="password" placeholder="Enter your password" class="form-control" name="password" id="password">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col text-center">
                                    <input type="submit" class="btn btn-primary" name="regisration" id="regisration" value="register">

                                    <input type="reset" class="btn btn-success">
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

</body>

</html>