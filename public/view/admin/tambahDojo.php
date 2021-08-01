<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tambah Dojo</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_adminCss.php'; ?>
        <link href="../../css/custom/admin/tambahDojo.css" rel="stylesheet">
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
                                TAMBAH DOJO
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
                                                                <input type="text" placeholder="" class="form-control field-text font-PoppinsLight">
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
                                                                <input type="text" placeholder="" class="form-control field-text font-PoppinsLight">
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
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-search">
                                                                                    <!-- Field option nama pelatih -->
                                                                                    <input type="text" class="form-control field-text field-search edit-field-search font-PoppinsLight" placeholder="Cari nama pelatih" list="listDojo">
                                                                                    <datalist class="font-PoppinsLight" id="listDojo">
                                                                                        <option value="Aldi Karya Muslim">
                                                                                        <option value="Mochamad Arif Pujiadi">
                                                                                    </datalist>
                                                                                    <!-- /Field option nama pelatih -->
                                                                                </div>
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
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-search">
                                                                                    <!-- Field option kontak dojo -->
                                                                                    <input type="text" class="form-control field-text field-search edit-field-search font-PoppinsLight" placeholder="Cari nama anggota" list="listDojo">
                                                                                    <datalist class="font-PoppinsLight" id="listDojo">
                                                                                        <option value="Aldi Karya Muslim">
                                                                                        <option value="Mochamad Arif Pujiadi">
                                                                                    </datalist>
                                                                                    <!-- /Field option kontak dojo -->
                                                                                </div>
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


                                                <!-- Tabel jadwal latihan dojo -->
                                                <!--==================================================-->
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
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="no-padding-left">
                                                                                <!-- Dropdown option hari -->
                                                                                <select class="form-control dropdown-konfirmasiPembayaran font-PoppinsLight">
                                                                                    <option value="" hidden selected>Pilih hari</option>
                                                                                    <option value="">Senin</option>
                                                                                    <option value="">Selasa</option>
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
                                                                                <input type="text" placeholder="hh:mm" class="form-control field-time font-PoppinsLight">
                                                                                <!-- /Field jam mulai latihan -->
                                                                            </td>
                                                                            <td class="center no-border padding-sd">s/d</td>
                                                                            <td class="no-padding-right">
                                                                                <!-- Field jam selesai latihan -->
                                                                                <input type="text" placeholder="hh:mm" class="form-control field-time font-PoppinsLight">
                                                                                <!-- /Field jam selesai latihan -->
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
                                                                <textarea class="form-control editTextArea font-PoppinsLight"></textarea>
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
                                                                    <input type="text" placeholder="" class="form-control field-text font-PoppinsLight">
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
                                                                    <input type="text" placeholder="" class="form-control field-text font-PoppinsLight">
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
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="boxOut-nameFile">
                                                                    <div class="input-group">
                                                                        <div class="input-group-btn">
                                                                            <div class="input-logo input-img" style="background-image: url('../../img/icon/game-icon.png');"></div>
                                                                        </div>
                                                                        <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                                                            <!-- Field file foto dojo -->
                                                                            <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light" placeholder="" readonly>
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
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="boxOut-nameFile">
                                                                    <div class="input-group">
                                                                        <div class="input-group-btn">
                                                                            <div class="input-logo input-img img-dokumen"></div>
                                                                        </div>
                                                                        <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                                                            <!-- Field file dokumen dojo -->
                                                                            <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light" placeholder="" readonly>
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
                            '<div class="col-md-12 col-sm-12 col-xs-12 boxOut-search">' +
                            '<input type="text" class="form-control field-text field-search edit-field-search font-PoppinsLight" placeholder="Cari nama pelatih" list="listDojo">' +
                            '<datalist class="font-PoppinsLight" id="listDojo">' +
                            '<option value="Aldi Karya Muslim">' +
                            '<option value="Mochamad Arif Pujiadi">' +
                            '</datalist>' +
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
                            '<div class="col-md-12 col-sm-12 col-xs-12 boxOut-search">' +
                            '<input type="text" class="form-control field-text field-search edit-field-search font-PoppinsLight" placeholder="Cari nama pelatih" list="listDojo">' +
                            '<datalist class="font-PoppinsLight" id="listDojo">' +
                            '<option value="Aldi Karya Muslim">' +
                            '<option value="Mochamad Arif Pujiadi">' +
                            '</datalist>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>'
                            );
                    num2++;
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
                            '</tr>'
                            );
                    num2++;
                });
                $(".a-dokumen").on("click", function () {
                    $(".boxOut-dokumen").append(
                            '<div class="row">' +
                            '<div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">' +
                            '<div class="col-md-12 col-sm-12 col-xs-12">' +
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
                            '</div>' +
                            '</div>'
                            );
                    num2++;
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
