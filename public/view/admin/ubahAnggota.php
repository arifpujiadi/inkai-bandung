<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ubah Anggota</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_adminCss.php'; ?>
        <link href="../../css/custom/admin/ubahAnggota.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">

                <!-- side menu -->
                <sideMenu>
                    <?php include '_sideMenu.php'; ?>
                </sideMenu>
                <!-- /side menu -->

                <!-- top navigation -->
                <header>
                    <?php include '_adminHeader.php'; ?>
                </header>
                <!-- /top navigation -->

                <!-- page content -->
                <section id="content">
                    <div class="right_col" role="main">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titlePage font-Exo2SemiBold">
                                UBAH PROFIL ANGGOTA
                            </div>
                        </div>

                        <!-- Filter button -->
                        <!--==================================================-->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <button class="btn btn-default btn-filter all-btnSearch" type="submit"><img src="../../img/icon/filter.png">FILTER</button>
                            </div>
                        </div>
                        <!-- /Filter button -->

                        <!-- Filter Popup -->
                        <!--==================================================-->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-popupFilter">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 box-popupFilter">

                                        <!-- Kategori 1 -->
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

                                        <!-- Kategori 2 -->
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

                                        <!-- Kategori 3 -->
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

                                <!-- Button cari -->
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="box-buttonSave center-block">
                                            <button type="button" class="btn button-send font-RobotoCondensed-Bold">Cari</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Filter Popup -->


                        <!-- List Content -->
                        <!--==================================================-->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentPage">

                                <!-- List 1 -->
                                <!--==================================================-->
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 paddingTingkatan">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-title">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <div class="title-belt font-Exo2SemiBold">
                                                                DAN 1
                                                            </div>
                                                        </div>
                                                        <div class="title-line sabuk-hitam"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 box-content-padding">
                                                <div class="col-md-12 col-sm-12 col-xs-12 box-listAnggota">

                                                    <?php for ($i = 0; $i < 10; $i++) { ?>
                                                        <div class="boxOut-listAnggota">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 hover-listAnggota">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="foto-anggota" style="background-image: url('../../img/profil/3x4.jpg');"></div>
                                                                    <div class="keterangan-anggota">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 nama-anggota center font-PoppinsLight">
                                                                                Mochamad Arif Pujiadi
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 tingkatan-anggota center font-Exo2SemiBold">
                                                                                DAN 1
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 dojo-anggota center font-PoppinsLight">
                                                                                Parahyangan Karate Club
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a class="a-ubah hover-hitam font-Exo2SemiBold" href="ubahDetailAnggota.php">
                                                                    UBAH PROFIL
                                                                </a>
                                                            </div>
                                                        </div>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /List 1 -->

                                <!-- List 2 -->
                                <!--==================================================-->
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 paddingTingkatan">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-title">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <div class="title-belt font-Exo2SemiBold">
                                                                KYU 3
                                                            </div>
                                                        </div>
                                                        <div class="title-line sabuk-coklat"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 box-content-padding">
                                                <div class="col-md-12 col-sm-12 col-xs-12 box-listAnggota">

                                                    <?php for ($i = 0; $i < 10; $i++) { ?>
                                                        <div class="boxOut-listAnggota">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 hover-listAnggota">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="foto-anggota" style="background-image: url('../../img/profil/3x4.jpg');"></div>
                                                                    <div class="keterangan-anggota">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 nama-anggota center font-PoppinsLight">
                                                                                Mochamad Arif Pujiadi
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 tingkatan-anggota center font-Exo2SemiBold">
                                                                                KYU 3
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 dojo-anggota center font-PoppinsLight">
                                                                                Parahyangan Karate Club
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a class="a-ubah hover-coklat font-Exo2SemiBold" href="ubahDetailAnggota.php">
                                                                    UBAH PROFIL
                                                                </a>
                                                            </div>
                                                        </div>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /List 2 -->

                                <!-- List 3 -->
                                <!--==================================================-->
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 paddingTingkatan">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-title">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <div class="title-belt font-Exo2SemiBold">
                                                                KYU 4
                                                            </div>
                                                        </div>
                                                        <div class="title-line sabuk-biru"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 box-content-padding">
                                                <div class="col-md-12 col-sm-12 col-xs-12 box-listAnggota">

                                                    <?php for ($i = 0; $i < 10; $i++) { ?>
                                                        <div class="boxOut-listAnggota">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 hover-listAnggota">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="foto-anggota" style="background-image: url('../../img/profil/3x4.jpg');"></div>
                                                                    <div class="keterangan-anggota">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 nama-anggota center font-PoppinsLight">
                                                                                Mochamad Arif Pujiadi
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 tingkatan-anggota center font-Exo2SemiBold">
                                                                                KYU 4
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 dojo-anggota center font-PoppinsLight">
                                                                                Parahyangan Karate Club
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a class="a-ubah hover-biru font-Exo2SemiBold" href="ubahDetailAnggota.php">
                                                                    UBAH PROFIL
                                                                </a>
                                                            </div>
                                                        </div>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /List 3 -->

                                <!-- List 4 -->
                                <!--==================================================-->
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 paddingTingkatan">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-title">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <div class="title-belt font-Exo2SemiBold">
                                                                KYU 6
                                                            </div>
                                                        </div>
                                                        <div class="title-line sabuk-hijau"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 box-content-padding">
                                                <div class="col-md-12 col-sm-12 col-xs-12 box-listAnggota">

                                                    <?php for ($i = 0; $i < 10; $i++) { ?>
                                                        <div class="boxOut-listAnggota">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 hover-listAnggota">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="foto-anggota" style="background-image: url('../../img/profil/3x4.jpg');"></div>
                                                                    <div class="keterangan-anggota">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 nama-anggota center font-PoppinsLight">
                                                                                Mochamad Arif Pujiadi
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 tingkatan-anggota center font-Exo2SemiBold">
                                                                                KYU 6
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 dojo-anggota center font-PoppinsLight">
                                                                                Parahyangan Karate Club
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a class="a-ubah hover-hijau font-Exo2SemiBold" href="ubahDetailAnggota.php">
                                                                    UBAH PROFIL
                                                                </a>
                                                            </div>
                                                        </div>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /List 4 -->

                                <!-- List 5 -->
                                <!--==================================================-->
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 paddingTingkatan">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-title">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <div class="title-belt font-Exo2SemiBold">
                                                                KYU 8
                                                            </div>
                                                        </div>
                                                        <div class="title-line sabuk-kuning"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 box-content-padding">
                                                <div class="col-md-12 col-sm-12 col-xs-12 box-listAnggota">

                                                    <?php for ($i = 0; $i < 10; $i++) { ?>
                                                        <div class="boxOut-listAnggota">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 hover-listAnggota">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="foto-anggota" style="background-image: url('../../img/profil/3x4.jpg');"></div>
                                                                    <div class="keterangan-anggota">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 nama-anggota center font-PoppinsLight">
                                                                                Mochamad Arif Pujiadi
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 tingkatan-anggota center font-Exo2SemiBold">
                                                                                KYU 8
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 dojo-anggota center font-PoppinsLight">
                                                                                Parahyangan Karate Club
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a class="a-ubah hover-kuning font-Exo2SemiBold" href="ubahDetailAnggota.php">
                                                                    UBAH PROFIL
                                                                </a>
                                                            </div>
                                                        </div>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /List 5 -->

                                <!-- List 6 -->
                                <!--==================================================-->
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 paddingTingkatan">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-title">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <div class="title-belt font-Exo2SemiBold">
                                                                KYU 10
                                                            </div>
                                                        </div>
                                                        <div class="title-line sabuk-putih"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 box-content-padding">
                                                <div class="col-md-12 col-sm-12 col-xs-12 box-listAnggota">

                                                    <?php for ($i = 0; $i < 10; $i++) { ?>
                                                        <div class="boxOut-listAnggota">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 hover-listAnggota">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="foto-anggota" style="background-image: url('../../img/profil/3x4.jpg');"></div>
                                                                    <div class="keterangan-anggota">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 nama-anggota center font-PoppinsLight">
                                                                                Mochamad Arif Pujiadi
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 tingkatan-anggota center font-Exo2SemiBold">
                                                                                KYU 10
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 dojo-anggota center font-PoppinsLight">
                                                                                Parahyangan Karate Club
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a class="a-ubah hover-putih font-Exo2SemiBold" href="ubahDetailAnggota.php">
                                                                    UBAH PROFIL
                                                                </a>
                                                            </div>
                                                        </div>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /List 6 -->
                            </div>
                        </div>
                        <!-- /List Content -->

                    </div>
                </section>
                <!-- /page content -->

                <!-- footer content -->
                <footer></footer>
                <!-- /footer content -->

            </div>
        </div>

        <?php include '_adminJs.php'; ?>
        <script>
            $(document).ready(function () {

                $('.btn-filter').on("click", function () {
                    $(this).parents('.right_col').find('.boxOut-popupFilter').slideToggle(200);
                });

            });
        </script>
    </body>
</html>
