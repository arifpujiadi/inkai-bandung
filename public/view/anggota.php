<!DOCTYPE html>
<html>
    <head>
        <title>Anggota</title>
        <!-- css -->
        <!--==================================================-->
        <?php include '_css.php'; ?>
        <link rel="stylesheet" href="../css/custom/anggota.css">
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
                                    ANGGOTA INKAI BANDUNG 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="border-member center-block"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-memberText font-Humnst777CnBT informasiContent center">
                                    Berisi informasi anggota INKAI (Institut Karate-Do Indonesia) Bandung, penyimpanan dan pencarian informasi anggota ini dibuat untuk mempermudah pendataan sehingga seluruh anggota dapat lebih saling mengetahui dan mengenal satu sama lain.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 container-margin">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-sort">

                                            <!-- filter button -->
                                            <!--==================================================-->
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <button class="btn btn-default btn-filter all-btnSearch" type="submit"><img src="../img/icon/filter-black.png">FILTER</button>
                                                </div>
                                            </div>
                                            <!-- /filter button -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-Scroll">
                                            <!-- filter popup -->
                                            <!--==================================================-->
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-popupFilter">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-popupFilter">

                                                            <!-- kategori 1 -->
                                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-search">
                                                                                <input type="text" class="form-control field-text field-search edit-field-search font-PoppinsLight" placeholder="Cari nama anggota" list="listDojo">
                                                                                <datalist class="font-PoppinsLight" id="listDojo">
                                                                                    <option value="Aldi Karya Muslim">
                                                                                    <option value="Mochamad Arif Pujiadi">
                                                                                </datalist>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- kategori 2 -->
                                                            <div class="col-md-4 col-sm-4 col-xs-12">  
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                        <select class="form-control dropdown-konfirmasiPembayaran dropdown-edit font-PoppinsLight">
                                                                            <option value="" hidden selected>Tingkatan sabuk</option>
                                                                            <option value="">Kyu 10</option>
                                                                            <option value="">Kyu 8</option>
                                                                            <option value="">Kyu 6</option>
                                                                            <option value="">Kyu 4</option>
                                                                            <option value="">Kyu 3</option>
                                                                            <option value="">Kyu 1</option>
                                                                            <option value="">Dan 1</option>
                                                                            <option value="">Dan 2</option>
                                                                            <option value="">Dan 3</option>
                                                                            <option value="">Dan 4</option>
                                                                            <option value="">Dan 5</option>
                                                                            <option value="">Dan 6</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- kategori 3 -->
                                                            <div class="col-md-4 col-sm-4 col-xs-12">    
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                        <select class="form-control dropdown-konfirmasiPembayaran dropdown-edit font-PoppinsLight">
                                                                            <option value="" hidden selected>Berdasarkan dojo</option>
                                                                            <option value="">Parahyangan Karate Club</option>
                                                                            <option value="">PGII 1</option>
                                                                            <option value="">Dojo 3</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- button cari -->
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="box-buttonSave center-block">
                                                                <button type="button" class="btn button-send font-RobotoCondensed">Cari</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /button cari -->

                                                </div>
                                            </div>
                                            <!-- /filter popup -->


                                            <!-- list anggota -->
                                            <!--==================================================-->
                                            <div class="row">
                                                <div id="page-1" class="col-md-12 col-sm-12 col-xs-12 berita">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-rowMember">

                                                            <?php for ($i = 0; $i < 10; $i++) { ?>
                                                                <div class="col-md-4 col-sm-4 col-xs-12 boxOut-listAnggota">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-listAnggota">
                                                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                                                            <div class="box-foto3x4" style="background-image: url('../img/profil/3x4.jpg')"></div>
                                                                        </div>
                                                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-namaAnggota font-Cambria-Bold">
                                                                                        Mochamad Arif Pujiadi
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 keterangan font-Cambria-Bold center">
                                                                                        Dan 1
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="box-buttonSave center-block">
                                                                                            <button type="button" class="btn button-save font-RobotoCondensed" data-toggle="modal" data-target="#profil">Lihat Profil</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4 col-sm-4 col-xs-12 boxOut-listAnggota">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-listAnggota">
                                                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                                                            <div class="box-foto3x4" style="background-image: url('../img/profil/profil-1-1.jpg')"></div>
                                                                        </div>
                                                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 font-PoppinsLight">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-namaAnggota font-Cambria-Bold">
                                                                                        Aldi Karya Muslim
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 keterangan font-Cambria-Bold center">
                                                                                        Dan 3
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="box-buttonSave center-block">
                                                                                            <button type="button" class="btn button-save font-RobotoCondensed" data-toggle="modal" data-target="#profil">Lihat Profil</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4 col-sm-4 col-xs-12 boxOut-listAnggota">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-listAnggota">
                                                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                                                            <div class="box-foto3x4" style="background-image: url('../img/profil/profil-1-2.jpg')"></div>
                                                                        </div>
                                                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 font-PoppinsLight">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-namaAnggota font-Cambria-Bold">
                                                                                        Lorem Ipsum Dolor
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 keterangan font-Cambria-Bold center">
                                                                                        Dan 1
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="box-buttonSave center-block">
                                                                                            <button type="button" class="btn button-save font-RobotoCondensed" data-toggle="modal" data-target="#profil">Lihat Profil</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php } ?>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="page-2" class="col-md-12 col-sm-12 col-xs-12 berita">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-rowMember">

                                                            <?php for ($i = 0; $i < 5; $i++) { ?>
                                                                <div class="col-md-4 col-sm-4 col-xs-12 boxOut-listAnggota">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-listAnggota">
                                                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                                                            <div class="box-foto3x4" style="background-image: url('../img/profil/3x4.jpg')"></div>
                                                                        </div>
                                                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-namaAnggota font-Cambria-Bold">
                                                                                        Mochamad Arif Pujiadi
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 keterangan font-Cambria-Bold center">
                                                                                        Dan 1
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="box-buttonSave center-block">
                                                                                            <button type="button" class="btn button-save font-RobotoCondensed" data-toggle="modal" data-target="#profil">Lihat Profil</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4 col-sm-4 col-xs-12 boxOut-listAnggota">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-listAnggota">
                                                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                                                            <div class="box-foto3x4" style="background-image: url('../img/profil/profil-1-1.jpg')"></div>
                                                                        </div>
                                                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 font-PoppinsLight">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-namaAnggota font-Cambria-Bold">
                                                                                        Aldi Karya Muslim
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 keterangan font-Cambria-Bold center">
                                                                                        Dan 3
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="box-buttonSave center-block">
                                                                                            <button type="button" class="btn button-save font-RobotoCondensed" data-toggle="modal" data-target="#profil">Lihat Profil</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4 col-sm-4 col-xs-12 boxOut-listAnggota">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-listAnggota">
                                                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                                                            <div class="box-foto3x4" style="background-image: url('../img/profil/profil-1-2.jpg')"></div>
                                                                        </div>
                                                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 font-PoppinsLight">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-namaAnggota font-Cambria-Bold">
                                                                                        Lorem Ipsum Dolor
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 keterangan font-Cambria-Bold center">
                                                                                        Dan 1
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="box-buttonSave center-block">
                                                                                            <button type="button" class="btn button-save font-RobotoCondensed" data-toggle="modal" data-target="#profil">Lihat Profil</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php } ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /list anggota -->


                                            <!-- pagination -->
                                            <!--==================================================-->
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div id="replace"></div>
                                                            <div id="page" class="center"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /pagination -->


                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- /page content -->


        <!-- modal - anggota -->
        <!--==================================================-->
        <div class="row">
            <div id="profil" class="modal fade" role="dialog">
                <div class="modal-dialog modal-md modal-margin">
                    <div class="modal-content editModal-content">
                        <div class="modalHeader-padding">
                            <div class="modal-header editModal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <!-- nama anggota -->
                                <font class="font-Hero titleModal">Aldi Karya Muslim</font>
                            </div>
                        </div>
                        <div class="modal-body editModal-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-modalTop">
                                    <div class="col-md-4 col-sm-4 col-xs-12 foto-popupProfil center">
                                        <!-- foto anggota -->
                                        <img src="../img/profil/profil-1-1.jpg">
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12 boxOut-dataPopupProfil">

                                        <!-- biodata -->
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleModalBottom font-sourceSansProSemibold">
                                                    Biodata
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-biodata">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 table-responsive table-biodata">
                                                        <table class="col-md-12 col-sm-12 col-xs-12">
                                                            <tr>
                                                                <td class="td-1">Sabuk</td>
                                                                <td class="td-2">:</td>
                                                                <td>Hitam, Dan 3</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tanggal Lahir</td>
                                                                <td>:</td>
                                                                <td>25 November</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tempat Lahir</td>
                                                                <td>:</td>
                                                                <td>Bandung</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /biodata -->


                                        <!-- pelatih dojo -->
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-popupModalBottom">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleModalBottom font-sourceSansProSemibold">
                                                    Pelatih
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-informasiModalBottom">
                                                    <div class="row">
                                                        <div class="point-text">
                                                            <a href="dojoDetail.php">Dojo PGII 1</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-informasiModalBottom">
                                                    <div class="row">
                                                        <div class="point-text">
                                                            <a href="dojoDetail.php">Dojo Soreang</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /pelatih dojo -->


                                        <!-- prestasi kejuaraan -->
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleModalBottom font-sourceSansProSemibold">
                                                    Prestasi Kejuaraan
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-biodata">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 table-responsive table-biodata">
                                                        <table class="col-md-12 col-sm-12 col-xs-12">
                                                            <tr>
                                                                <td>Juara 3, Dasril Muchtar Cup 2017</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Juara 1, Walikota Cup 2017</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /prestasi kejuaraan -->


                                        <!-- prestasi lainnya -->
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleModalBottom font-sourceSansProSemibold">
                                                    Prestasi Lainnya
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-biodata">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 table-responsive table-biodata">
                                                        <table class="col-md-12 col-sm-12 col-xs-12">
                                                            <tr>
                                                                <td>Seksi kepelatihan, Pengurus cabang INKAI Bandung Periode 2016 - 2019</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Divisi dokumentasi, Gashuku dan Ujian Kenaikan Tingkat Semester 1 Tahun 2016 </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Peserta terbaik, Gashuku dan Ujian Kenaikan Tingkat Semester 2 Tahun 2008 </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /prestasi lainnya -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /modal - anggota -->


        <!-- footer -->
        <!--==================================================-->
        <footer>
            <?php include '_footer.php'; ?>
        </footer>
        <!-- /footer-->

    </body>
    <!-- js -->
    <!--==================================================-->
    <?php include '_js.php'; ?>
    <script src="../js/download/jquery.bootpag.js"></script>
    <script>
        $(document).ready(function () {

            $('.btn-filter').on("click", function () {
                $(this).parents('.container-margin').find('.boxOut-popupFilter').slideToggle(200);
            });

        });
    </script>
    <script>
        $(document).ready(function () {

            $("#replace").html(jQuery($("#page-" + 1).html()));
            $('#page').bootpag({
                total: 5
            }).on("page", function (event, num) {
                $("#replace").html(jQuery($("#page-" + num).html()));
                $(this).bootpag({total: 5, maxVisible: 5});
            });

        });
    </script>
</html>