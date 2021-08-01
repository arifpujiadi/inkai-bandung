<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <!-- css -->
        <!--==================================================-->
        <?php include '_css.php'; ?>
        <link rel="stylesheet" href="../css/custom/home.css">
    </head>
    <body class="body-offcanvas body-color">

        <!-- header -->
        <!--==================================================-->
        <header>
            <?php include '_header.php'; ?>
        </header>
        <!-- /header -->

        <!-- page content -->
        <!--==================================================-->
        <div class="parallax">
            <div id="myCarousel" class="carousel carousel-fade slide" data-ride="carousel">
                <div class="carousel-inner edit-carousel" role="listbox">
                    <div id="parallax" class="parallax-item item active">
                        <div id="Container">
                            <video autoplay loop muted poster="polina.jpg" id="vid">
                                <source src="../img/video/coba3.mp4" type="video/mp4">
                            </video>
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-homeContent">
                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-karateLogo center">
                                    <img src="../img/icon/karate-paralax-logo.png">
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 center">
                                        <button type="button" class="button-tentang center-block font-black" onclick='window.location.assign("tentang.php")'>Tentang INKAI Bandung</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 scrollDownSlider-edit">
                <div id="blink" class="scrollDownSlider center-block"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleContent font-hero-Regular center">
                Pendaftaran Online Gashuku & Ujian Kenaikan Tingkat
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="border-member center-block"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 box-buttonLogin" style="margin-bottom: 50px;">
                <!-- button login  -->
                <button type="button" class="btn button-modalLogin center-block" onclick='window.location.assign("daftar.php")'>Daftar</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 red">
                saa
            </div>
        </div>

        <!-- /page content -->

    </body>

    <!-- js -->
    <!--==================================================-->
    <?php include '_js.php'; ?>
    <script>
        (function () {

            $('#myCarousel').carousel({
                //interval: 2000,
                pause: "false"
            });


            var parallax = document.querySelectorAll(".parallax-item"),
                    speed = 0.5;

            window.onscroll = function () {
                [].slice.call(parallax).forEach(function (el, i) {

                    var windowYOffset = window.pageYOffset,
                            elBackgrounPos = "0 " + (windowYOffset * speed) + "px";

                    el.style.backgroundPosition = elBackgrounPos;

                });
            };


            $('.slider1').bxSlider({
                minSlides: 1,
                maxSlides: 1,
                slideWidth: 220,
                moveSlides: 1,
                slideMargin: 10,
                infiniteLoop: false,
                hideControlOnEnd: true

            });


            $(window).scroll(function () {
                if ($(this).scrollTop() > 450)
                {
                    $('.scrollPageDown').fadeIn();
                }
                else
                {
                    $('.scrollPageDown').fadeOut();
                }
            });

            $('#nav-menu2').affix({
                offset: {
                    top: $('#parallax').height()
                }
            });

            $('#sidebar').affix({
                offset: {
                    top: 1000
                }
            });


        })();
    </script>
</html>