<!DOCTYPE html>
<html>
    <head>
        <title>Detail Berita</title>
        <!-- css -->
        <!--==================================================-->
        <?php include '_css.php'; ?>
        <link rel="stylesheet" type="text/css" href="../css/download/elastislide.css" />
        <link rel="stylesheet" href="../css/custom/beritaDetail.css">
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
        <section id="content">
            <div class="row carousel-background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 container-margin">

                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleContent">
                                    Pengumuman hasil pertandingan UPI Cup 11 November 2016 
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-waktu">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        Tanggal upload : 27 Agustus 2016, Jam Upload : 04:00:58
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-kategori">
                                        <div class="kategori-3">
                                            Laporan
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fotoNews">
                                    <div class="box-fotoNews center-block">
                                        <img class="center-block" src="../img/news/news-1.jpg">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textNews">
                                    <p>
                                        2016 JKA Autumn camp was successfully held on Thursday 13th – Sunday 16th. We had Japanese and foreign participants of more than 300 people including Karatekas from otehr schools.
                                    </p>
                                    <p>
                                        The JKA-HQ Instructors taught all participants kindly and patiently, and participants also watched their movement with great consentration.
                                    </p>
                                    <p>
                                        Furthermore, for the purpose of showing hospitality and making stronger friendship in JKA family, there was a ceremony for special representatives of each country on the 13 th October. Then, on 15th October, another ceremony for everyone who wished to participate was held.
                                    </p>
                                    <p>
                                        The japan Karate Association sends the message that training is serious, but after training is a time for fun and enjoyment.
                                    </p>
                                    <p>
                                        We look forward to seeing you all again at the JKA Spring Camp in April.
                                    </p>
                                    <p>
                                        The JKA-HQ Instructors taught all participants kindly and patiently, and participants also watched their movement with great consentration.
                                    </p>
                                    <p>
                                        Furthermore, for the purpose of showing hospitality and making stronger friendship in JKA family, there was a ceremony for special representatives of each country on the 13 th October. Then, on 15th October, another ceremony for everyone who wished to participate was held.
                                    </p>
                                    <p>
                                        The japan Karate Association sends the message that training is serious, but after training is a time for fun and enjoyment.
                                    </p>
                                    <p>
                                        We look forward to seeing you all again at the JKA Spring Camp in April.
                                    </p>
                                    <p>
                                        The JKA-HQ Instructors taught all participants kindly and patiently, and participants also watched their movement with great consentration.
                                    </p>
                                    <p>
                                        Furthermore, for the purpose of showing hospitality and making stronger friendship in JKA family, there was a ceremony for special representatives of each country on the 13 th October. Then, on 15th October, another ceremony for everyone who wished to participate was held.
                                    </p>
                                    <p>
                                        The japan Karate Association sends the message that training is serious, but after training is a time for fun and enjoyment.
                                    </p>
                                    <p>
                                        We look forward to seeing you all again at the JKA Spring Camp in April.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleModalBottom font-sourceSansProSemibold">
                                    <a href="https://www.google.com/" target="_blank">
                                        Link : Pendaftaran Online
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleModalBottom font-sourceSansProSemibold">
                                    <a href="../img/file/Formulir Pendaftaran.pdf">
                                        Formulir Pendaftaran Gashuku.pdf
                                    </a>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button type="button" class="btn button-kembali center-block" onclick='window.location.assign("berita.php")'>Kembali</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- /page content -->


        <!-- footer -->
        <!--==================================================-->
        <footer>
            <?php include '_footer.php'; ?>
        </footer>
        <!-- /footer -->


    </body>
    <!-- js -->
    <!--==================================================-->
    <?php include '_js.php'; ?>
    <script type="text/javascript" src="../js/download/jquery.tmpl.min.js"></script>
    <script type="text/javascript" src="../js/download/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../js/download/jquery.elastislide.js"></script>
    <script type="text/javascript" src="../js/download/gallery.js"></script>
    <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
        <div class="rg-image-wrapper">
        {{if itemsCount > 1}}
        <div class="rg-image-nav">
        <a href="#" class="rg-image-nav-prev">Previous Image</a>
        <a href="#" class="rg-image-nav-next">Next Image</a>
        </div>
        {{/if}}
        <div class="rg-image"></div>
        <div class="rg-loading"></div>
        <div class="rg-caption-wrapper">
        <div class="rg-caption" style="display:none;">
        <p></p>
        </div>
        </div>
        </div>
    </script>
</html>