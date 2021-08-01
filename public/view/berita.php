<!DOCTYPE html>
<html>
    <head>
        <title>Berita</title>
        <!-- css -->
        <!--==================================================-->
        <?php include '_css.php'; ?>
        <link rel="stylesheet" href="../css/custom/berita.css">
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
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-backgroundContent">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="border-member center-block"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-memberIsi font-hero-Regular">
                                    BERITA
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="border-member center-block"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-memberText font-Humnst777CnBT informasiContent center">
                                    Berisi informasi seputar kegiatan INKAI (Institut Karate-Do Indonesia) Bandung, sehingga pengguna website dapat mengetahui informasi kegiatan terkini seperti kejuaraan, laporan kegiatan, pengumuman penting seputar pelatihan, dll. 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="container">
                            <div class="col-md-12 col-sm-12 col-xs-12 container-margin">

                                <div class="row" role="tabpanel" data-example-id="togglable-tabs">
                                    <!-- Tab -->
                                    <ul id="myTab" class="nav nav-tabs bar_tabs font-Exo2SemiBold" role="tablist">
                                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Semua Berita</a>
                                        </li>
                                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Pengumuman</a>
                                        </li>
                                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Laporan</a>
                                        </li>
                                        <!-- Pengembangan -->
                                        <!--                                        
                                        <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Dokumentasi</a>
                                        </li>
                                        -->
                                    </ul>
                                    <!-- /Tab -->

                                    <!-- Content Tab -->
                                    <div id="myTabContent" class="tab-content">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 table-responsive edit-boxTable">
                                                <table class="col-md-12 col-sm-12 col-xs-12 edit-tableJudul font-PoppinsLight">
                                                    <!-- Baris Judul -->
                                                    <tr class="judulTable font-PoppinsSemiBold center">
                                                        <td class="td-berita-1">Tanggal</td>
                                                        <td class="td-berita-2">Kategori</td>
                                                        <td class="td-berita-3">Judul Berita</td>
                                                    </tr>
                                                    <!-- /Baris Judul -->
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Tab 1 -->
                                        <!--==================================================-->
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                            <div class="row">
                                                <!-- Tab 1, page 1 -->
                                                <!--==================================================-->
                                                <div id="page1-1" class="col-md-12 col-sm-12 col-xs-12 berita">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                            <table class="col-md-12 col-sm-12 col-xs-12 table-berita-edit font-sourceSansPro">

                                                                <!-- Baris Isi berita -->
                                                                <?php for ($i = 0; $i < 3; $i++) { ?>

                                                                    <!-- berita kategori 1 -->
                                                                    <tr>
                                                                        <td class="td-tanggal">
                                                                            <div class="td-berita-1 td-berita-tanggal">
                                                                                28 September 2017
                                                                            </div>
                                                                        </td>
                                                                        <td class="td-kategori">
                                                                            <div class="td-berita-2">
                                                                                <div class="kategori-1">
                                                                                    General
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="td-judul">
                                                                            <div class="td-berita-3 td-judul-berita">
                                                                                <a href="beritaDetail.php">
                                                                                    Diberitahukan kepada semua pelatih ranting untuk melaporkan data peserta Gashuku dan Ujian Kenaikan Tingkat Kyu INKAI Bandung Semester 1 Tahun 2016.
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <!-- berita kategori 2 -->
                                                                    <tr>
                                                                        <td class="td-tanggal">
                                                                            <div class="td-berita-1 td-berita-tanggal">
                                                                                28 September 2017
                                                                            </div>
                                                                        </td>
                                                                        <td class="td-kategori">
                                                                            <div class="td-berita-2">
                                                                                <div class="kategori-2">
                                                                                    Pengumuman
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="td-judul">
                                                                            <div class="td-berita-3 td-judul-berita">
                                                                                <a href="beritaDetail.php">
                                                                                    Diberitahukan kepada semua pelatih ranting untuk melaporkan data peserta Gashuku dan Ujian Kenaikan Tingkat Kyu INKAI Bandung Semester 1 Tahun 2016. 
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <!-- berita kategori 3 -->
                                                                    <tr>
                                                                        <td class="td-tanggal">
                                                                            <div class="td-berita-1 td-berita-tanggal">
                                                                                28 September 2017
                                                                            </div>
                                                                        </td>
                                                                        <td class="td-kategori">
                                                                            <div class="td-berita-2">
                                                                                <div class="kategori-3">
                                                                                    Laporan
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="td-judul">
                                                                            <div class="td-berita-3 td-judul-berita">
                                                                                <a href="beritaDetail.php">
                                                                                    Diberitahukan kepada semua pelatih ranting untuk melaporkan data peserta Gashuku dan Ujian Kenaikan Tingkat Kyu INKAI Bandung Semester 1 Tahun 2016.
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <!-- berita kategori 4 -->
<!--                                                                    <tr>
                                                                        <td class="td-tanggal">
                                                                            <div class="td-berita-1 td-berita-tanggal">
                                                                                28 September 2017
                                                                            </div>
                                                                        </td>
                                                                        <td class="td-kategori">
                                                                            <div class="td-berita-2">
                                                                                <div class="kategori-4">
                                                                                    Dokumentasi
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="td-judul">
                                                                            <div class="td-berita-3 td-judul-berita">
                                                                                <a href="beritaDetail.php">
                                                                                    Diberitahukan kepada semua pelatih ranting untuk melaporkan data peserta Gashuku dan Ujian Kenaikan Tingkat Kyu INKAI Bandung Semester 1 Tahun 2016.
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>-->

                                                                <?php } ?>
                                                                <!-- /Baris Isi berita -->
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Tab 1, page 1 -->


                                                <!-- Tab 1, page 2 -->
                                                <div id="page1-2" class="col-md-12 col-sm-12 col-xs-12 berita">

                                                </div>
                                                <!-- /Tab 1, page 2 -->
                                            </div>


                                            <!-- pagination -->
                                            <!--==================================================-->
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div id="replace1"></div>
                                                            <div id="page1" class="center"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /pagination -->
                                        </div>
                                        <!-- /Tab 1 -->


                                        <!-- Tab 2 -->
                                        <!--==================================================-->
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                            <div class="row">
                                                <!-- Tab 2, page 1 -->
                                                <!--==================================================-->
                                                <div id="page2-1" class="col-md-12 col-sm-12 col-xs-12 berita">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                            <table class="col-md-12 col-sm-12 col-xs-12 table-berita-edit font-sourceSansPro">

                                                                <!-- Baris Isi berita -->
                                                                <?php for ($i = 0; $i < 10; $i++) { ?>

                                                                    <!--berita kategori 2 -->
                                                                    <tr>
                                                                        <td class="td-tanggal">
                                                                            <div class="td-berita-1 td-berita-tanggal">
                                                                                28 September 2017
                                                                            </div>
                                                                        </td>
                                                                        <td class="td-kategori">
                                                                            <div class="td-berita-2">
                                                                                <div class="kategori-2">
                                                                                    Pengumuman
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="td-judul">
                                                                            <div class="td-berita-3 td-judul-berita">
                                                                                <a href="beritaDetail.php">
                                                                                    Diberitahukan kepada semua pelatih ranting untuk melaporkan data peserta Gashuku dan Ujian Kenaikan Tingkat Kyu INKAI Bandung Semester 1 Tahun 2016. 
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>


                                                                <?php } ?>
                                                                <!-- /Baris Isi berita -->
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Tab 2, page 1 -->


                                                <!-- Tab 2, page 2 -->
                                                <div id="page2-2" class="col-md-12 col-sm-12 col-xs-12 berita">

                                                </div>
                                                <!-- /Tab 2, page 2 -->
                                            </div>


                                            <!-- pagination -->
                                            <!--==================================================-->
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div id="replace2"></div>
                                                            <div id="page2" class="center"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /pagination -->
                                        </div>
                                        <!-- /Tab 2 -->


                                        <!-- Tab 3 -->
                                        <!--==================================================-->
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                            <div class="row">
                                                <!-- Tab 3, page 1 -->
                                                <!--==================================================-->
                                                <div id="page3-1" class="col-md-12 col-sm-12 col-xs-12 berita">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                            <table class="col-md-12 col-sm-12 col-xs-12 table-berita-edit font-sourceSansPro">

                                                                <!-- Baris Isi berita -->
                                                                <?php for ($i = 0; $i < 10; $i++) { ?>

                                                                    <!--berita kategori 3 -->
                                                                    <tr>
                                                                        <td class="td-tanggal">
                                                                            <div class="td-berita-1 td-berita-tanggal">
                                                                                28 September 2017
                                                                            </div>
                                                                        </td>
                                                                        <td class="td-kategori">
                                                                            <div class="td-berita-2">
                                                                                <div class="kategori-3">
                                                                                    Laporan
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="td-judul">
                                                                            <div class="td-berita-3 td-judul-berita">
                                                                                <a href="beritaDetail.php">
                                                                                    Diberitahukan kepada semua pelatih ranting untuk melaporkan data peserta Gashuku dan Ujian Kenaikan Tingkat Kyu INKAI Bandung Semester 1 Tahun 2016.
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                <?php } ?>
                                                                <!-- /Baris Isi berita -->
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Tab 3, page 1 -->


                                                <!-- Tab 3, page 2 -->
                                                <div id="page3-2" class="col-md-12 col-sm-12 col-xs-12 berita">

                                                </div>
                                                <!-- /Tab 3, page 2 -->
                                            </div>


                                            <!-- pagination -->
                                            <!--==================================================-->
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div id="replace3"></div>
                                                            <div id="page3" class="center"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /pagination -->
                                        </div>
                                        <!-- /Tab 3 -->




                                        <!-- Tab 4 -->
                                        <!--==================================================-->
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                                            <div class="row">
                                                <!-- Tab 4, page 1 -->
                                                <!--==================================================-->
                                                <div id="page4-1" class="col-md-12 col-sm-12 col-xs-12 berita">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                            <table class="col-md-12 col-sm-12 col-xs-12 table-berita-edit font-sourceSansPro">

                                                                <!-- Baris Isi berita -->
                                                                <?php for ($i = 0; $i < 10; $i++) { ?>

                                                                    <!--berita kategori 4 -->
                                                                    <tr>
                                                                        <td class="td-tanggal">
                                                                            <div class="td-berita-1 td-berita-tanggal">
                                                                                28 September 2017
                                                                            </div>
                                                                        </td>
                                                                        <td class="td-kategori">
                                                                            <div class="td-berita-2">
                                                                                <div class="kategori-4">
                                                                                    Dokumentasi
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="td-judul">
                                                                            <div class="td-berita-3 td-judul-berita">
                                                                                <a href="beritaDetail.php">
                                                                                    Diberitahukan kepada semua pelatih ranting untuk melaporkan data peserta Gashuku dan Ujian Kenaikan Tingkat Kyu INKAI Bandung Semester 1 Tahun 2016.
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                <?php } ?>
                                                                <!-- /Baris Isi berita -->
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Tab 4, page 1 -->


                                                <!-- Tab 4, page 2 -->
                                                <div id="page4-2" class="col-md-12 col-sm-12 col-xs-12 berita">

                                                </div>
                                                <!-- /Tab 4, page 2 -->
                                            </div>


                                            <!-- pagination -->
                                            <!--==================================================-->
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div id="replace4"></div>
                                                            <div id="page4" class="center"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /pagination -->
                                        </div>
                                        <!-- /Tab 4 -->

                                    </div>
                                    <!-- /Content Tab -->
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
    <!--js-->
    <!--==================================================-->
    <?php include '_js.php'; ?>
    <script src="../js/download/jquery.bootpag.js"></script>
    <script>
        $(document).ready(function () {


            $("#replace1").html(jQuery($("#page1-" + 1).html()));
            $('#page1').bootpag({
                total: 5
            }).on("page", function (event, num) {
                $("#replace1").html(jQuery($("#page1-" + num).html()));
                $(this).bootpag({total: 5, maxVisible: 5});
            });



            $("#replace2").html(jQuery($("#page2-" + 1).html()));
            $('#page2').bootpag({
                total: 5
            }).on("page", function (event, num) {
                $("#replace2").html(jQuery($("#page2-" + num).html()));
                $(this).bootpag({total: 5, maxVisible: 5});
            });




            $("#replace3").html(jQuery($("#page3-" + 1).html()));
            $('#page3').bootpag({
                total: 5
            }).on("page", function (event, num) {
                $("#replace3").html(jQuery($("#page3-" + num).html()));
                $(this).bootpag({total: 5, maxVisible: 5});
            });

            $("#replace4").html(jQuery($("#page4-" + 1).html()));
            $('#page4').bootpag({
                total: 5
            }).on("page", function (event, num) {
                $("#replace4").html(jQuery($("#page4-" + num).html()));
                $(this).bootpag({total: 5, maxVisible: 5});
            });


        });
    </script>
</html>