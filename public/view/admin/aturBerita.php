<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Atur Berita</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_adminCss.php'; ?>
        <link href="../../css/download/green.css" rel="stylesheet">
        <link href="../../css/custom/admin/aturBerita.css" rel="stylesheet">
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
                                Atur Berita
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentPage">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">

                                                <!-- Tabel list berita -->
                                                <!--==================================================-->
                                                <div class="table-responsive edit-tableBerita">
                                                    <table id="datatable" class="table table-striped table-bordered jambo_table bulk_action" style="width: 100%;">
                                                        <thead>
                                                            <tr class="headings">
                                                                <th>
                                                                    <input type="checkbox" id="check-all" class="flat">
                                                                </th>
                                                                <th class="column-title column-title-1">Tanggal</th>
                                                                <th class="column-title">Judul Berita</th>
                                                                <th class="column-title column-title-3 no-link last center"><span class="nobr">Aksi</span></th>
                                                                <th class="bulk-actions" colspan="3">
                                                                    <!-- Button hapus berita-->
                                                                    <a class="antoo" style="">
                                                                        <span class="action-cnt"></span>
                                                                        <button type="button" class="btn button-hapus font-PoppinsLight a-delete" data-toggle="modal" data-target="#hapus"><img src="../../img/icon/bank-delete-white.png">Hapus</button>
                                                                    </a>
                                                                    <!-- /Button hapus berita-->
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>


                                                            <?php for ($i = 0; $i < 50; $i++) { ?>
                                                                <!-- Baris 1 -->
                                                                <tr class="even pointer">
                                                                    <td class="a-center ">
                                                                        <input type="checkbox" class="flat" name="table_records">
                                                                    </td>
                                                                    <td>
                                                                        <div class="column-1">
                                                                            23 September 2017
                                                                        </div>
                                                                    </td>
                                                                    <td class="">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-judul">
                                                                            Pengumuman hasil pertandingan UPI Cup 11 November 2016
                                                                        </div>
                                                                    </td>
                                                                    <td class="last">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-aksi font-PoppinsLight center">
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <!-- Button lihat berita-->
                                                                                <a href="#" data-toggle="modal" data-target="#lihat">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <img src="../../img/icon/lihat.png">
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        Lihat
                                                                                    </div>
                                                                                </a>
                                                                                <!-- /Button lihat berita-->
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <!-- Button ubah berita-->
                                                                                <a href="#" data-toggle="modal" data-target="#ubah">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <img src="../../img/icon/bank-edit.png">
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        Ubah
                                                                                    </div>
                                                                                </a>
                                                                                <!-- /Button ubah berita-->
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <!-- /Baris 1 -->

                                                                <!-- Baris 2 -->
                                                                <tr class="odd pointer">
                                                                    <td class="a-center ">
                                                                        <input type="checkbox" class="flat" name="table_records">
                                                                    </td>
                                                                    <td class="column-1">23 September 2017</td>
                                                                    <td class="column-2">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-judul">
                                                                            Diberitahukan kepada semua pelatih ranting untuk melaporkan data peserta Gashuku dan Ujian Kenaikan Tingkat Kyu INKAI Bandung Semester 1 Tahun 2016. 
                                                                        </div>
                                                                    </td>
                                                                    <td class="column-3 last">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-aksi font-PoppinsLight center">
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <!-- Button lihat berita-->
                                                                                <a href="#" data-toggle="modal" data-target="#lihat">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <img src="../../img/icon/lihat.png">
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        Lihat
                                                                                    </div>
                                                                                </a>
                                                                                <!-- /Button lihat berita-->
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                <!-- Button ubah berita-->
                                                                                <a href="#" data-toggle="modal" data-target="#ubah">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <img src="../../img/icon/bank-edit.png">
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        Ubah
                                                                                    </div>
                                                                                </a>
                                                                                <!-- /Button ubah berita-->
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <!-- /Baris 2 -->
                                                            <?php } ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /Tabel list berita -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Modal Lihat Berita -->
                        <!--==================================================-->
                        <div class="row">
                            <div id="lihat" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modalHeader-padding">
                                            <div class="modal-header editModalLogin-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                        </div>
                                        <div class="modal-body modal-lihatBerita">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">

                                                    <!-- Text judul berita -->
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 font-PoppinsSemiBold box-modalJudulBerita">
                                                            Pengumuman hasil pertandingan UPI Cup 11 November 2016
                                                        </div>
                                                    </div>
                                                    <!-- /Text judul berita -->

                                                    <!-- Text waktu upload -->
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 font-PoppinsLight box-modalWaktuBerita">
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
                                                    <!-- /Text waktu upload -->

                                                    <!-- Gambar berita -->
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-imgBerita" style="background-image: url('../../img/news/news-1.jpg');"></div>
                                                    </div>
                                                    <!-- /Gambar berita -->

                                                    <!-- Text isi berita -->
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 font-PoppinsLight box-modalIsiBerita">
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
                                                        </div>
                                                    </div>
                                                    <!-- /Text isi berita -->

                                                    <!-- Text link -->
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-modalFileBerita font-Exo2SemiBold">
                                                            <a href="http://www.google.com" target="_blank">
                                                                Link : Pendaftaran Online
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- /Text link -->

                                                    <!-- Text file -->
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-modalFileBerita font-Exo2SemiBold">
                                                            <a href="../../img/file/Formulir Pendaftaran.pdf">
                                                                Formulir Pendaftaran Gashuku.pdf
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- /Text file -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Modal Lihat Berita -->


                        <!-- Modal Ubah Berita -->
                        <!--==================================================-->
                        <div class="row">
                            <div id="ubah" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modalHeader-padding">
                                            <div class="modal-header editModalLogin-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                        </div>
                                        <div class="modal-body modal-lihatBerita">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                    Judul
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <!-- Field judul berita -->
                                                                    <input type="text" placeholder="" class="form-control field-text font-PoppinsLight" value="Pengumuman hasil pertandingan UPI Cup 11 November 2016 ">
                                                                    <!-- /Field judul berita -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                    Kategori Berita
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <!-- Dropdown option tingkatan sabuk -->
                                                                    <select class="form-control dropdown-konfirmasiPembayaran font-PoppinsLight">
                                                                        <option value="" hidden>Pilih kategori</option>
                                                                        <option value="">General</option>
                                                                        <option value="">Pengumuman</option>
                                                                        <option value="" selected>Laporan</option>
                                                                    </select>
                                                                    <!-- /Dropdown option tingkatan sabuk -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                    Gambar
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="row">
                                                                        <div class="col-md-11 col-sm-11 col-xs-11 input-form3 lampir-file boxOut-lampir-file">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="boxOut-nameFile">
                                                                                    <div class="input-group">
                                                                                        <div class="input-group-btn">
                                                                                            <div class="input-logo input-img" style="background-image: url('../../img/icon/game-icon.png');">

                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                                                                            <!-- Field gambar berita -->
                                                                                            <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light" placeholder="" readonly value="Gambar Berita.jpg" readonly>
                                                                                            <div class="input-group-btn">
                                                                                                <div class="boxOut-button">
                                                                                                    <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                                        Choose File<input type="file">
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- /Field gambar berita -->
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
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                    Isi Berita
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textArea">
                                                                    <!-- textarea isi berita -->
                                                                    <textarea class="form-control editTextArea font-PoppinsLight">
                                                                        2016 JKA Autumn camp was successfully held on Thursday 13th – Sunday 16th. We had Japanese and foreign participants of more than 300 people including Karatekas from otehr schools.

                                                                        The JKA-HQ Instructors taught all participants kindly and patiently, and participants also watched their movement with great consentration.

                                                                        Furthermore, for the purpose of showing hospitality and making stronger friendship in JKA family, there was a ceremony for special representatives of each country on the 13 th October. Then, on 15th October, another ceremony for everyone who wished to participate was held.

                                                                        The japan Karate Association sends the message that training is serious, but after training is a time for fun and enjoyment.

                                                                        We look forward to seeing you all again at the JKA Spring Camp in April.
                                                                    </textarea>
                                                                    <!-- /textarea isi berita -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                    Bagikan Link
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <!-- Field judul link -->
                                                                    <input type="text" placeholder="Masukan judul link" class="form-control field-text font-PoppinsLight" value="Link : Pendaftaran Online ">
                                                                    <!-- /Field judul link -->
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-link">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="boxOut-nameFile">
                                                                                    <div class="input-group">
                                                                                        <div class="input-group-btn">
                                                                                            <div class="input-logo input-img img-link">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                                                                            <!-- Field link -->
                                                                                            <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light" placeholder="" value="http://localhost/Karate-INKAI/public/view/admin/tambahBerita.php">
                                                                                            <!-- /Field link -->
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
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                    File Dokumen
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-dokumen">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                            <div class="col-md-11 col-sm-11 col-xs-11">
                                                                                <div class="boxOut-nameFile">
                                                                                    <div class="input-group">
                                                                                        <div class="input-group-btn">
                                                                                            <div class="input-logo input-img img-dokumen">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                                                                            <!-- Field dokumen -->
                                                                                            <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light" placeholder="" value="Pendaftaran Dojo.pdf" readonly>
                                                                                            <div class="input-group-btn">
                                                                                                <div class="boxOut-button">
                                                                                                    <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                                        Choose File<input type="file">
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- /Field dokumen -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                                                <!-- Button hapus field dokumen -->
                                                                                <a class="deleteKontak">
                                                                                    <img src="../../img/icon/delete.png">
                                                                                </a>
                                                                                <!-- /Button hapus field dokumen -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 tambah-jadwal">
                                                                    <!-- button tambah dokumen -->
                                                                    <a class="a-dokumen font-PoppinsLight">
                                                                        <button type="button" class="btn button-lengkap center-block">
                                                                            <img src="../../img/icon/insert.png">
                                                                        </button>
                                                                        Tambah
                                                                    </a>
                                                                    <!-- /button tambah dokumen -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="box-buttonSave center-block">
                                                                <!-- button save -->
                                                                <button type="button" class="btn button-send font-RobotoCondensed-Bold" data-dismiss="modal" data-toggle="modal" data-target="#sukses">SIMPAN</button>
                                                                <!-- /button save -->
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
                        <!-- /Modal Ubah Berita -->


                        <!-- Modal Sukses -->
                        <!--==================================================-->
                        <?php include '_sukses.php'; ?>
                        <!-- /Modal Sukses -->


                        <!-- Modal Peringatan -->
                        <!--==================================================-->
                        <div class="row">
                            <div id="hapus" class="modal modal-login fade" role="dialog">
                                <div class="modal-dialog modal-md modal-margin">
                                    <div class="modal-content editModal-content">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 modal-title center font-Exo2SemiBold">
                                                Perhatian!
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 modal-textContent center font-PoppinsLight">
                                                Apakah anda yakin akan menghapus 4 berita?
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
                        <!-- /Modal Peringatan -->

                    </div>
                </section>
                <!-- /page content -->

                <!-- footer content -->
                <footer></footer>
                <!-- /footer content -->

            </div>
        </div>

        <?php include '_adminJs.php'; ?>
        <script src="../../js/download/jquery.dataTables.js"></script>
        <script src="../../js/download/icheck.js"></script>

        <script>
            $(document).ready(function () {

                init_DataTables();

                $(".button-ya").click(function () {
                    setTimeout(function () {
                        $('#sukses').modal('hide');
                    }, 1500);
                });

                $(".button-send").click(function () {
                    setTimeout(function () {
                        $('#sukses').modal('hide');
                    }, 1500);
                });

                $(".a-dokumen").on("click", function () {
                    $(".boxOut-dokumen").append(
                            '<div class="row">' +
                            '<div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">' +
                            '<div class="col-md-11 col-sm-11 col-xs-11">' +
                            '<div class="boxOut-nameFile">' +
                            '<div class="input-group">' +
                            '<div class="input-group-btn">' +
                            '<div class="input-logo input-img img-dokumen">' +
                            '</div>' +
                            '</div>' +
                            '<div class="input-group col-md-12 col-sm-12 col-xs-12">' +
                            '<input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light" placeholder="" readonly>' +
                            '<div class="input-group-btn">' +
                            '<div class="boxOut-button">' +
                            '<span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">' +
                            'Choose File<input type="file">' +
                            '</span>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="col-md-1 col-sm-1 col-xs-1">' +
                            '<a class="deleteKontak">' +
                            '<img src="../../img/icon/delete.png">' +
                            '</a>' +
                            '</div>' +
                            '</div>' +
                            '</div>'
                            );
                    numDokumen++;
                });

                $(document).on('change', '.btn-file :file', function () {
                    var input = $(this),
                            numFiles = input.get(0).files ? input.get(0).files.length : 1,
                            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                    input.trigger('fileselect', [numFiles, label]);
                });

                $(document).ready(function () {
                    $('.btn-file :file').on('fileselect', function (event, numFiles, label) {

                        var input = $(this).parents('.lampir-file').find(':text'),
                                log = numFiles > 1 ? numFiles + ' files selected' : label;
                        if (input.length) {
                            input.val(log);
                        } else {
                            if (log)
                                alert(log);
                        }

                    });
                });

            });
        </script>
        <script>
            $(document).ready(function () {

                init_DataTables();

            });
        </script>
    </body>
</html>
