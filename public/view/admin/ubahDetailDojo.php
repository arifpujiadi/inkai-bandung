<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ubah Detail Dojo</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_adminCss.php'; ?>
        <link href="../../css/custom/admin/ubahDetailDojo.css" rel="stylesheet">
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
                                UBAH PROFIL PARAHYANGAN KARATE CLUB
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentPage">

                                <!-- Content Kiri -->
                                <!--==================================================-->
                                <div class="col-md-6 col-sm-6 col-xs-12 boxOut-content-left">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleContent font-Exo2SemiBold">
                                                Profil Dojo
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                Nama Dojo
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <!-- Field nama dojo -->
                                                                <input type="text" placeholder="" class="form-control field-text font-PoppinsLight" value="Parahyangan Karate Club">
                                                                <!-- /Field nama dojo -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                Alamat
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <!-- Field alamat dojo -->
                                                                <input type="text" placeholder="" class="form-control field-text font-PoppinsLight" value="Jl. Ciumbuleuit No.94, Hegarmanah, Cidadap, Kota Bandung, Jawa Barat 40141">
                                                                <!-- /Field alamat dojo -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">

                                                        <div class="col-md-6 col-sm-6 col-xs-12 box-jarak-left">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                    Pelatih
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-tambahDojo">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <!-- Field option nama pelatih -->
                                                                                <div class="col-md-10 col-sm-10 col-xs-11">
                                                                                    <input type="text" class="form-control field-text field-search edit-field-search font-PoppinsLight" placeholder="Cari nama pelatih" list="listDojo" value="Aldi Karya Muslim">
                                                                                    <datalist class="font-PoppinsLight" id="listDojo">
                                                                                        <option value="Aldi Karya Muslim">
                                                                                        <option value="Mochamad Arif Pujiadi">
                                                                                    </datalist>
                                                                                </div>
                                                                                <!-- /Field option nama pelatih -->

                                                                                <!-- Button hapus field nama pelatih -->
                                                                                <div class="col-md-2 col-sm-2 col-xs-1">
                                                                                    <a class="deletePelatih">
                                                                                        <img src="../../img/icon/delete.png">
                                                                                    </a>
                                                                                </div>
                                                                                <!-- /Button hapus field nama pelatih -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 tambah-dojo">
                                                                    <!-- Button tambah nama pelatih -->
                                                                    <a class="a-field font-PoppinsLight">
                                                                        <button type="button" class="btn button-lengkap center-block">
                                                                            <img src="../../img/icon/insert.png">
                                                                        </button>
                                                                        Tambah
                                                                    </a>
                                                                    <!-- /Button tambah nama pelatih -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12 box-jarak-right">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                    Kontak Dojo
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-tambahKontak">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <!-- Field option kontak dojo -->
                                                                                <div class="col-md-10 col-sm-10 col-xs-11">
                                                                                    <input type="text" class="form-control field-text field-search edit-field-search font-PoppinsLight" placeholder="Cari nama anggota" list="listDojo" value="Aldi Karya Muslim">
                                                                                    <datalist class="font-PoppinsLight" id="listDojo">
                                                                                        <option value="Aldi Karya Muslim">
                                                                                        <option value="Mochamad Arif Pujiadi">
                                                                                    </datalist>
                                                                                </div>
                                                                                <!-- /Field option kontak dojo -->

                                                                                <!-- Button hapus field kontak dojo -->
                                                                                <div class="col-md-2 col-sm-2 col-xs-1">
                                                                                    <a class="deleteKontak">
                                                                                        <img src="../../img/icon/delete.png">
                                                                                    </a>
                                                                                </div>
                                                                                <!-- /Button hapus field kontak dojo -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 tambah-dojo">
                                                                    <!-- Button tambah kontak dojo -->
                                                                    <a class="a-kontak font-PoppinsLight">
                                                                        <button type="button" class="btn button-lengkap center-block">
                                                                            <img src="../../img/icon/insert.png">
                                                                        </button>
                                                                        Tambah
                                                                    </a>
                                                                    <!-- /Button tambah kontak dojo -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                Jadwal Latihan
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive table-jadwal font-sourceSansPro">
                                                                    <table class="col-md-12 col-sm-12 col-xs-12 boxOut-tambahJadwal">
                                                                        <tr class="judulTable font-sourceSansProSemibold">
                                                                            <td class="col-md-6 col-sm-6 col-xs-5 title-table center">Hari</td>
                                                                            <td class="col-md-6 col-sm-6 col-xs-7 center" colspan="3">Jam</td>
                                                                            <td class="tableTransparent"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="no-padding-left">
                                                                                <!-- Dropdown option hari -->
                                                                                <select class="form-control dropdown-konfirmasiPembayaran font-PoppinsLight">
                                                                                    <option value="" hidden>Pilih hari</option>
                                                                                    <option value="">Senin</option>
                                                                                    <option value="" selected>Selasa</option>
                                                                                    <option value="">Rabu</option>
                                                                                    <option value="">Kamis</option>
                                                                                    <option value="">Jumat</option>
                                                                                    <option value="">Sabtu</option>
                                                                                    <option value="">Minggu</option>
                                                                                </select>
                                                                                <!-- /Dropdown option hari -->
                                                                            </td>
                                                                            <td class="no-border">
                                                                                <!-- Field jam mulai latihan -->
                                                                                <input type="text" placeholder="hh:mm" class="form-control field-time font-PoppinsLight" value="20:00">
                                                                                <!-- /Field jam mulai latihan -->
                                                                            </td>
                                                                            <td class="center no-border padding-sd">s/d</td>
                                                                            <td class="no-padding-right">
                                                                                <!-- Field jam selesai latihan -->
                                                                                <input type="text" placeholder="hh:mm" class="form-control field-time font-PoppinsLight" value="22:00">
                                                                                <!-- /Field jam selesai latihan -->
                                                                            </td>
                                                                            <td>
                                                                                <!-- Button hapus jadwal latihan dojo -->
                                                                                <a class="deleteJadwal">
                                                                                    <img src="../../img/icon/delete.png">
                                                                                </a>
                                                                                <!-- /Button hapus jadwal latihan dojo -->
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 tambah-jadwal">
                                                                <!-- Button tambah jadwal latihan dojo -->
                                                                <a class="a-jadwal font-PoppinsLight">
                                                                    <button type="button" class="btn button-lengkap center-block">
                                                                        <img src="../../img/icon/insert.png">
                                                                    </button>
                                                                    Tambah
                                                                </a>
                                                                <!-- /Button tambah jadwal latihan dojo -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Tabel jadwal latihan dojo -->

                                                <!-- Deskripsi dojo -->
                                                <!--==================================================-->
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                Deskripsi Dojo
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textArea">
                                                                <!-- textarea isi deskripsi dojo -->
                                                                <textarea class="form-control editTextArea font-PoppinsLight">
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit metus ac ligula dignissim euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer eget sapien hendrerit, pharetra enim rutrum, consequat diam. Nullam eget nunc at nisi commodo sagittis vel et quam. Pellentesque convallis in nisl id scelerisque. Fusce sed aliquet erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce vel eros rutrum, interdum mauris ac, eleifend nisi. Mauris vulputate condimentum nisi nec sodales. Vestibulum volutpat sit amet odio non ultrices. Integer ornare tempor metus in fringilla. Vestibulum ut velit quam. Proin sit amet dapibus felis, in pharetra sem. Aliquam in sagittis lacus, in scelerisque tellus. In facilisis vitae magna aliquet pretium. Vivamus sagittis pretium nunc, eget lacinia sapien ultricies non.

                                                                    Suspendisse placerat, justo eget ornare aliquet, erat libero lacinia lacus, non elementum turpis lacus sed mi. Nam sagittis felis at ipsum luctus, in maximus quam consectetur. Aliquam ex risus, ultricies tincidunt ipsum nec, porttitor pellentesque turpis. Aliquam scelerisque, elit at aliquam scelerisque, mauris orci pellentesque leo, non viverra felis tellus in dolor. Phasellus finibus nisl sit amet ex consectetur aliquet. Suspendisse potenti. Integer quis vehicula magna. Vestibulum sed justo tincidunt, tincidunt arcu congue, blandit mauris. Aliquam a tempor turpis, vel feugiat ante. Integer sed efficitur sem. Suspendisse rutrum purus at lectus auctor iaculis. Quisque at nibh risus. Donec semper justo nulla, id mollis odio tincidunt dignissim. Aliquam pulvinar tellus ac efficitur porttitor. Donec et nulla elit. Praesent ultrices justo id lorem commodo, eget lacinia nulla mattis.

                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit metus ac ligula dignissim euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer eget sapien hendrerit, pharetra enim rutrum, consequat diam. Nullam eget nunc at nisi commodo sagittis vel et quam. Pellentesque convallis in nisl id scelerisque. Fusce sed aliquet erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce vel eros rutrum, interdum mauris ac, eleifend nisi. Mauris vulputate condimentum nisi nec sodales. Vestibulum volutpat sit amet odio non ultrices. Integer ornare tempor metus in fringilla. Vestibulum ut velit quam. Proin sit amet dapibus felis, in pharetra sem. Aliquam in sagittis lacus, in scelerisque tellus. In facilisis vitae magna aliquet pretium. Vivamus sagittis pretium nunc, eget lacinia sapien ultricies non.
                                                                </textarea>
                                                                <!-- /textarea isi deskripsi dojo -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Deskripsi dojo -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Content Kiri -->


                                <!-- Content Kanan -->
                                <!--==================================================-->
                                <div class="col-md-6 col-sm-6 col-xs-12 boxOut-content-right">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleContent font-Exo2SemiBold">
                                                    Google Map
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                    Latitude
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <!-- Field gmap latitude -->
                                                                    <input type="text" placeholder="" class="form-control field-text font-PoppinsLight" value="-6.874603">
                                                                    <!-- /Field gmap latitude -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                    Longitude
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <!-- Field gmap longitude -->
                                                                    <input type="text" placeholder="" class="form-control field-text font-PoppinsLight" value="107.604685">
                                                                    <!-- /Field gmap longitude -->
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
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleContent-inside font-Exo2SemiBold">
                                                    Foto Profil Dojo
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
                                                                            <div class="input-logo input-img" style="background-image: url('../../img/icon/game-icon.png');"></div>
                                                                        </div>
                                                                        <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                                                            <!-- Field file foto dojo -->
                                                                            <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light" placeholder="" readonly value="Foto Profil Unpar.jpg">
                                                                            <div class="input-group-btn">
                                                                                <div class="boxOut-button">
                                                                                    <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                        Choose File<input type="file">
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /Field file foto dojo -->
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
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleContent-inside font-Exo2SemiBold">
                                                    Dokumen
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
                                                                            <div class="input-logo input-img img-dokumen"></div>
                                                                        </div>
                                                                        <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                                                            <!-- Field file dokumen dojo -->
                                                                            <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light" placeholder="" value="Pendaftaran Dojo.pdf" readonly>
                                                                            <div class="input-group-btn">
                                                                                <div class="boxOut-button">
                                                                                    <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                        Choose File<input type="file">
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /Field file dokumen dojo -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                                                <!-- Button hapus field dokumen dojo -->
                                                                <a class="deleteKontak">
                                                                    <img src="../../img/icon/delete.png">
                                                                </a>
                                                                <!-- /Button hapus field dokumen dojo -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 tambah-jadwal">
                                                    <!-- Button tambah file dokumen dojo -->
                                                    <a class="a-dokumen font-PoppinsLight">
                                                        <button type="button" class="btn button-lengkap center-block">
                                                            <img src="../../img/icon/insert.png">
                                                        </button>
                                                        Tambah
                                                    </a>
                                                    <!-- /Button tambah file dokumen dojo -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="box-buttonSave center-block">
                                                <!-- Button save -->
                                                <button type="button" class="btn button-send font-RobotoCondensed-Bold" data-toggle="modal" data-target="#sukses">SIMPAN</button>
                                                <!-- /Button save -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Content Kanan -->
                            </div>
                        </div>

                        <!-- Modal popup sukses -->
                        <!--==================================================-->
                        <?php include '_sukses.php'; ?>
                        <!-- /Modal popup sukses -->

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

                $(".button-send").click(function () {
                    setTimeout(function () {
                        $('#sukses').modal('hide');
                    }, 1500);
                });


                $(".a-field").on("click", function () {
                    $(".boxOut-tambahDojo").append(
                            '<div class="row">' +
                            '<div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">' +
                            '<div class="row">' +
                            '<div class="col-md-10 col-sm-10 col-xs-11">' +
                            '<input type="text" class="form-control field-text field-search edit-field-search font-PoppinsLight" placeholder="Cari nama anggota" list="listDojo">' +
                            '<datalist class="font-PoppinsLight" id="listDojo">' +
                            '<option value="Aldi Karya Muslim">' +
                            '<option value="Mochamad Arif Pujiadi">' +
                            '</datalist>' +
                            '</div>' +
                            '<div class="col-md-2 col-sm-2 col-xs-1">' +
                            '<a class="deleteKontak">' +
                            '<img src="../../img/icon/delete.png">' +
                            '</a>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>'
                            );
                    num2++;
                });

                $(".a-kontak").on("click", function () {
                    $(".boxOut-tambahKontak").append(
                            '<div class="row">' +
                            '<div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">' +
                            '<div class="row">' +
                            '<div class="col-md-10 col-sm-10 col-xs-11">' +
                            '<input type="text" class="form-control field-text field-search edit-field-search font-PoppinsLight" placeholder="Cari nama anggota" list="listDojo">' +
                            '<datalist class="font-PoppinsLight" id="listDojo">' +
                            '<option value="Aldi Karya Muslim">' +
                            '<option value="Mochamad Arif Pujiadi">' +
                            '</datalist>' +
                            '</div>' +
                            '<div class="col-md-2 col-sm-2 col-xs-1">' +
                            '<a class="deleteKontak">' +
                            '<img src="../../img/icon/delete.png">' +
                            '</a>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>'
                            );
                    numKontak++;
                });
                $(".a-jadwal").on("click", function () {
                    $(".boxOut-tambahJadwal").append(
                            '<tr>' +
                            '<td class="no-padding-left">' +
                            '<select class="form-control dropdown-konfirmasiPembayaran font-PoppinsLight">' +
                            '<option value="" hidden selected>Pilih hari</option>' +
                            '<option value="">Senin</option>' +
                            '<option value="">Selasa</option>' +
                            '<option value="">Rabu</option>' +
                            '<option value="">Kamis</option>' +
                            '<option value="">Jumat</option>' +
                            '<option value="">Sabtu</option>' +
                            '<option value="">Minggu</option>' +
                            '</select>' +
                            '</td>' +
                            '<td class="no-border"><input type="text" placeholder="hh:mm" class="form-control field-time font-PoppinsLight"></td>' +
                            '<td class="center no-border padding-sd">s/d</td>' +
                            '<td class="no-padding-right"><input type="text" placeholder="hh:mm" class="form-control field-time font-PoppinsLight"></td>' +
                            '<td>' +
                            '<a class="deleteJadwal">' +
                            '<img src="../../img/icon/delete.png">' +
                            '</a>' +
                            ' </td>' +
                            '</tr>'
                            );
                    numJadwal++;
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
    </body>
</html>
