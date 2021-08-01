<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_adminCss.php'; ?>
        <link href="../../css/download/fullcalendar.css" rel="stylesheet">
        <link href="../../css/download/owl.carousel.css" rel="stylesheet">
        <link href="../../css/custom/admin/dashboard.css" rel="stylesheet">
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
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!-- Top Tiles -->
                                <!--==================================================-->
                                <div class="row tile_count tile_count-edit">
                                    <div class="col-md-3 col-sm-6 col-xs-6 tile_stats_count">
                                        <span class="count_top"><i class="fa fa-university"></i> Total Dojo</span>
                                        <div class="count">17</div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 tile_stats_count">
                                        <span class="count_top"><i class="fa fa-users"></i> Total Anggota</span>
                                        <div class="count">2500</div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 tile_stats_count">
                                        <span class="count_top"><i class="fa fa-male"></i> Anggota Pria</span>
                                        <div class="count">1500</div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 tile_stats_count">
                                        <span class="count_top"><i class="fa fa-female"></i> Anggota Wanita</span>
                                        <div class="count">1000</div>
                                    </div>
                                </div>
                                <!-- /Top Tiles -->
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!-- Donut Chart -->
                                <!--==================================================-->
                                <div class="col-md-6 col-sm-12 col-xs-12 boxOut-leftContent">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Jumlah Anggota <small>Berdasarkan dojo</small></h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <div id="echart_donut" class="graph-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Donut Chart -->

                                <!-- Bar Chart -->
                                <!--==================================================-->
                                <div class="col-md-6 col-sm-12 col-xs-12 boxOut-rightContent">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Jumlah Anggota <small>Berdasarkan tingkatan sabuk</small></h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <div id="graph_bar" class="graph-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Bar Chart -->
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!-- Line Chart -->
                                <!--==================================================-->
                                <div class="col-md-6 col-sm-12 col-xs-12 boxOut-leftContent">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Prestasi Medali <small>Pertahun</small></h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content2">
                                            <div id="graph_area" class="graph-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Line Chart -->

                                <!-- Social Media -->
                                <!--==================================================-->
                                <div class="col-md-6 col-sm-12 col-xs-12 boxOut-rightContent">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Social Media<small>Email, Password, Link </small></h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content2">
                                            <div class="socialMedia-height">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-owlCarousel">
                                                        <div id="owl-demo" class="owl-carousel owl-theme">
                                                            <div class="item">
                                                                <div class="boxOut-kategoriSquare center-block">
                                                                    <a data-toggle="modal" data-target="#socialModal">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-kategoriSquare">
                                                                            <div class="boxOut-ketegoriImg center-block">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-imgSocial">
                                                                                        <img class="center-block" src="../../img/icon/facebook.png">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textSocial font-PoppinsSemiBold center">
                                                                                        Facebook
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="boxOut-kategoriSquare center-block">
                                                                    <a data-toggle="modal" data-target="#socialModal">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-kategoriSquare">
                                                                            <div class="boxOut-ketegoriImg center-block">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-imgSocial">
                                                                                        <img class="center-block" src="../../img/icon/instagram.png">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textSocial font-PoppinsSemiBold center">
                                                                                        Instagram
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="boxOut-kategoriSquare center-block">
                                                                    <a data-toggle="modal" data-target="#socialModal">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-kategoriSquare">
                                                                            <div class="boxOut-ketegoriImg center-block">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-imgSocial">
                                                                                        <img class="center-block" src="../../img/icon/youtube.png">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textSocial font-PoppinsSemiBold center">
                                                                                        Youtube
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Social Media -->
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!-- To Do List-->
                                <!--==================================================-->
                                <div class="col-md-6 col-sm-12 col-xs-12 boxOut-leftContent">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Catatan<small>To do list</small></h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <div id="myDIV" class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="input-group">
                                                    <input type="text" id="myInput" placeholder="Masukan judul" class="form-control">
                                                    <div class="input-group-btn">
                                                        <span onclick="newElement()" class="addBtn">
                                                            Tambah
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="boxOut-listToDo">
                                                <ul id="myUL">
                                                    <li class="list-toDo">Selesaikan Laporan Pertanggung Jawaban (LPJ)</li>
                                                    <li class="list-toDo checked">Periksa seluruh Bab di dalam LPJ</li>
                                                    <li class="list-toDo">Seleksi foto-foto reuni di rumah S.Arthur</li>
                                                    <li class="list-toDo">Buat video dokumentasi reuni</li>
                                                    <li class="list-toDo">Sebarkan hasil dokumentasi melalui group WA (Whatsapp)</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /To Do List-->

                                <!-- File Dokumen -->
                                <!--==================================================-->
                                <div class="col-md-6 col-sm-12 col-xs-12 boxOut-rightContent">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>File Dokumen <small>Kesekretariatan</small></h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <div class="row" role="tabpanel" data-example-id="togglable-tabs">
                                                <!-- Tab -->
                                                <ul id="myTab" class="nav nav-tabs bar_tabs font-Exo2SemiBold" role="tablist">
                                                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Database</a>
                                                    </li>
                                                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">SK</a>
                                                    </li>
                                                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">LPJ</a>
                                                    </li>
                                                    <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Lain-lain</a>
                                                    </li>
                                                </ul>
                                                <!-- /Tab -->

                                                <!-- Content Tab -->
                                                <div id="myTabContent" class="tab-content">
                                                    <!-- Tab 1 -->
                                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="boxOut-nameFile">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-btn">
                                                                                        <div class="input-logo input-img img-dokumen">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                                                                        <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light" placeholder="" readonly>
                                                                                        <div class="input-group-btn">
                                                                                            <div class="boxOut-button">
                                                                                                <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                                    Choose File<input type="file">
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listFile">
                                                                <?php for ($i = 0; $i < 8; $i++) { ?>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="input-group col-md-12 col-sm-12 boxOut-fileDashboard col-xs-12 font-PoppinsLight">
                                                                            <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                                                                            <a href="../../img/file/Formulir Pendaftaran.pdf">
                                                                                Database Gashuku & UKT Semester 1 Tahun 2017.xlsx
                                                                            </a>
                                                                            <div class="input-group-btn">
                                                                                <button type="button" class="btn button-close " data-toggle="modal" data-target="#fileHapus">
                                                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Tab 1 -->

                                                    <!-- Tab 2 -->
                                                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="boxOut-nameFile">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-btn">
                                                                                        <div class="input-logo input-img img-dokumen">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                                                                        <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light" placeholder="" readonly>
                                                                                        <div class="input-group-btn">
                                                                                            <div class="boxOut-button">
                                                                                                <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                                    Choose File<input type="file">
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listFile">
                                                                <?php for ($i = 0; $i < 2; $i++) { ?>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="input-group col-md-12 col-sm-12 boxOut-fileDashboard col-xs-12 font-PoppinsLight">
                                                                            <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                                                                            <a href="../../img/file/Formulir Pendaftaran.pdf">
                                                                                SK Panitia Gashuku & UKT Semester 1 Tahun 2017.pdf
                                                                            </a>
                                                                            <div class="input-group-btn">
                                                                                <button type="button" class="btn button-close " data-toggle="modal" data-target="#fileHapus">
                                                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Tab 2 -->

                                                    <!-- Tab 3 -->
                                                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="boxOut-nameFile">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-btn">
                                                                                        <div class="input-logo input-img img-dokumen">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                                                                        <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light" placeholder="" readonly>
                                                                                        <div class="input-group-btn">
                                                                                            <div class="boxOut-button">
                                                                                                <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                                    Choose File<input type="file">
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listFile">
                                                                <?php for ($i = 0; $i < 1; $i++) { ?>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="input-group col-md-12 col-sm-12 boxOut-fileDashboard col-xs-12 font-PoppinsLight">
                                                                            <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                                                                            <a href="../../img/file/Formulir Pendaftaran.pdf">
                                                                                LPJ Gashuku & UKT Semester 1 Tahun 2017.pdf
                                                                            </a>
                                                                            <div class="input-group-btn">
                                                                                <button type="button" class="btn button-close " data-toggle="modal" data-target="#fileHapus">
                                                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Tab 3 -->

                                                    <!-- Tab 4 -->
                                                    <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="boxOut-nameFile">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-btn">
                                                                                        <div class="input-logo input-img img-dokumen">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                                                                        <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light" placeholder="" readonly>
                                                                                        <div class="input-group-btn">
                                                                                            <div class="boxOut-button">
                                                                                                <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                                    Choose File<input type="file">
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listFile">
                                                                <?php for ($i = 0; $i < 1; $i++) { ?>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="input-group col-md-12 col-sm-12 boxOut-fileDashboard col-xs-12 font-PoppinsLight">
                                                                            <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                                                                            <a href="../../img/file/Formulir Pendaftaran.pdf">
                                                                                Juklak UKT INKAI Bandung.pdf
                                                                            </a>
                                                                            <div class="input-group-btn">
                                                                                <button type="button" class="btn button-close " data-toggle="modal" data-target="#fileHapus">
                                                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="input-group col-md-12 col-sm-12 boxOut-fileDashboard col-xs-12 font-PoppinsLight">
                                                                            <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                                                                            <a href="../../img/file/Formulir Pendaftaran.pdf">
                                                                                Formulir Pendaftaran Ujian.pdf
                                                                            </a>
                                                                            <div class="input-group-btn">
                                                                                <button type="button" class="btn button-close " data-toggle="modal" data-target="#fileHapus">
                                                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Tab 4 -->
                                                </div>
                                                <!-- /Content Tab -->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="box-buttonSave center-block">
                                                        <button type="button" class="btn button-save font-RobotoCondensed" data-toggle="modal" data-target="#sukses">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /File Dokumen -->
                            </div>
                        </div>

                        <!-- Data Dojo di Bandung -->
                        <!--==================================================-->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-dashboardContent">
                                <div class="row">
                                    <div class="x_title">
                                        <h2>Data Dojo</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                        <table class="col-md-12 col-sm-12 col-xs-12 boxOut-tambahJadwal edit-tableDojo font-PoppinsLight boxOut-lainnya">
                                            <!-- Baris Judul -->
                                            <tr class="judulTable font-PoppinsSemiBold center">
                                                <td class="td-dojo-1">No</td>
                                                <td class="td-dojo-2">Dojo</td>
                                                <td class="td-dojo-4">Alamat</td>
                                                <td class="td-dojo-3">Pelatih</td>
                                                <td class="td-dojo-5">Kontak Pelatih</td>
                                            </tr>
                                            <!-- /Baris Judul -->

                                            <!-- Baris Isi Tabel -->
                                            <?php for ($i = 0; $i < 10; $i++) { ?>
                                                <tr>
                                                    <td class="">
                                                        <div class="td-dojo-1">
                                                            1
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class="td-dojo-2">
                                                            Parahyangan Karate Club
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class="td-dojo-4">
                                                            Jl.Ciumbuleuit No.94, Hegarmanah, Cidadap
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class="td-dojo-3">
                                                            Sensei Bernard
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class="td-dojo-5">
                                                            0818618940
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            <!-- /Baris Isi Tabel -->
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Data Dojo di Bandung -->

                        <!-- Data Senior di Bandung -->
                        <!--==================================================-->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-dashboardContent">
                                <div class="row">
                                    <div class="x_title">
                                        <h2>Data Senior</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                        <table class="col-md-12 col-sm-12 col-xs-12 boxOut-tambahJadwal edit-tableSenior font-PoppinsLight boxOut-lainnya">
                                            <!-- Baris Judul -->
                                            <tr class="judulTable-senior font-PoppinsSemiBold center">
                                                <td class="td-senior-1">No</td>
                                                <td class="td-senior-2">Nama</td>
                                                <td class="td-senior-3">Alamat</td>
                                                <td class="td-senior-4">Email</td>
                                                <td class="td-senior-5">Kontak</td>
                                            </tr>
                                            <!-- /Baris Judul -->

                                            <!-- Baris Isi Tabel -->
                                            <?php for ($i = 0; $i < 10; $i++) { ?>
                                                <tr>
                                                    <td class="">
                                                        <div class="td-senior-1">
                                                            1
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class="td-senior-2">
                                                            Kolonel CHK Asep Darmawan, S.H., M.Si., M.H.
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class="td-senior-3">
                                                            Perumahan Cigadung Hill, Jl. Cigadung Raya Timur
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class="td-senior-4">
                                                            arifpujiadi@gmail.com
                                                        </div>
                                                    </td>

                                                    <td class="">
                                                        <div class="td-senior-5">
                                                            0818618940
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            <!-- /Baris Isi Tabel -->
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Data Senior di Bandung -->

                        <!-- Kalender Kegiatan -->
                        <!--==================================================-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Kalender Kegiatan <small>Jadwal INKAI, event, kejuaraan dan lain-lain</small></h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div id='calendar'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Kalender Kegiatan -->

                    </div>
                </section>
                <!-- /page content -->





                <!-- Kumpulan Modal Popup -->

                <!-- Modal - Peringatan -->
                <!--==================================================-->
                <div class="row">
                    <div id="fileHapus" class="modal modal-login fade" role="dialog">
                        <div class="modal-dialog modal-md modal-margin">
                            <div class="modal-content editModal-content">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 modal-title-popup center font-Exo2SemiBold">
                                        Perhatian!
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 modal-textContent center font-PoppinsLight">
                                        Apakah anda yakin akan menghapus file?
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="modal-centerButton center-block">
                                            <button type="button" class="btn button-batal font-RobotoCondensed-Bold" data-dismiss="modal">Batal</button>
                                            <button type="button" class="btn button-ya font-RobotoCondensed-Bold" data-dismiss="modal" data-toggle="modal" data-target="#sukses">Ya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal - Peringatan -->
                
                <!-- Modal - Social Media -->
                <!--==================================================-->
                <div id="socialModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Facebook</h4>
                            </div>
                            <div class="modal-body">
                                <div id="testmodal" class="testmodal">
                                    <form id="antoform" class="form-horizontal calender social-modal" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Email : </label>
                                            <div class="col-sm-9">
                                                INKAI_Bandung@gmail.com
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Password : </label>
                                            <div class="col-sm-9">
                                                Loremipsumdolor
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Link : </label>
                                            <div class="col-sm-9">
                                                <a href="https://www.facebook.com/groups/InkaiBandung/" target="_blank">
                                                https://www.facebook.com/groups/InkaiBandung/
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer font-RobotoCondensed-Bold">
                                <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Keluar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal - Social Media -->

                <!-- Calendar Modal - Isi Kegiatan -->
                <!--==================================================-->
                <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Catatan Kalender Baru</h4>
                            </div>
                            <div class="modal-body">
                                <div id="testmodal" class="testmodal">
                                    <form id="antoform" class="form-horizontal calender" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Judul</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="title" name="title">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Deskripsi</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control modal-textArea" id="descr" name="descr"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer font-RobotoCondensed-Bold">
                                <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-primary antosubmit">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Calendar Modal - Isi Kegiatan -->


                <!-- Calendar Modal - Ubah Kegiatan -->
                <!--==================================================-->
                <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel2">Ubah Catatan Kalender</h4>
                            </div>
                            <div class="modal-body">
                                <div id="testmodal2" class="testmodal">
                                    <form id="antoform2" class="form-horizontal calender" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Judul</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="title2" name="title2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Deskripsi</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control modal-textArea" id="descr2" name="descr"></textarea>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer font-RobotoCondensed-Bold">
                                <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-primary antosubmit2">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Calendar Modal - Ubah Kegiatan -->

                <!-- Modal Sukses -->
                <!--==================================================-->
                <?php include '_sukses.php'; ?>

                <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
                <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>

                <!-- footer content -->
                <footer></footer>
                <!-- /footer content -->

            </div>
        </div>

        <?php include '_adminJs.php'; ?>
        <!-- Script Download -->
        <!--==================================================-->
        <script src="../../js/download/raphael.js"></script>
        <script src="../../js/download/morris.js"></script>
        <script src="../../js/download/echarts.js"></script>
        <script src="../../js/download/moment.js"></script>
        <script src="../../js/download/fullcalendar.js"></script>
        <script src="../../js/download/owl.carousel.js"></script>

        <!-- Script Custom -->
        <!--==================================================-->
        <script src="../../js/custom/donutChart.js"></script>
        <script src="../../js/custom/barChart.js"></script>
        <script src="../../js/custom/toDoList.js"></script>
        <script src="../../js/custom/fileDokumen.js"></script>
        <script src="../../js/custom/calendar.js"></script>
        <script src="../../js/custom/socialCarousel.js"></script>
    </body>
</html>