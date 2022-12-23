<!-- Contact breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">
            <h2 class="title pt-md-5 pt-4">Apply job</h2>
            <p class="inner-page-para mt-2"></p>
        </div>
        <div class="hero-overlay"></div>
    </div>
</section>
<br>

<div class="bg-dash-dark-2 py-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h5 mb-0 text-center">Apply for begining your career</h2>
            </div>

        </div>
        <table class="table table-strip table-bordered mt-3">
            <thead class="bg-dark text-light">
                <tr>
                    <th>Sr No.</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Job Roll</th>
                    <th>E-mail</th>
                    <th class="col col-lg-1">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = "1";
                foreach ($allrequirement['Data'] as $key => $value) {
                ?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $value->company; ?></td>
                        <td><?php echo $value->address; ?></td>
                        <td><?php echo $value->contact; ?></td>
                        <td><?php echo $value->job_roll; ?></td>
                        <td><?php echo $value->email; ?></td>
                        <td>
                            <!-- <a href="apply"><i class=" btn btn-sm btn-info">Apply</i></a> -->
                            <button type="submit" name="submit" id="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Apply
                            </button>
                        </td>
                    <?php
                    $count++;
                }
                    ?>
            </tbody>
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">fill up your detaile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="mb-2">
                                    <label class="form-label" for="fullname">Full Name</label>
                                    <input class="form-control" name="fullname" id="fullname" type="text" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label" for="email">E-mail</label>
                                    <input class="form-control" name="email" id="email" type="text" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label" for="contact">Contact No.</label>
                                    <input class="form-control" name="contact" id="contact" type="number" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label" for="gyear">Year of Graduation in which field</label>
                                    <input class="form-control" name="gyear" id="gyear" type="text" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label" for="address">Address</label>
                                    <input class="form-control" name="address" id="address" type="text" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label" for="city">City</label>
                                    <input class="form-control" name="city" id="city" type="text" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="submit" id="name" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>
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