<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tambah Berita</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_adminCss.php'; ?>
        <link href="../../css/custom/admin/tambahBerita.css" rel="stylesheet">
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
                                Tambah Berita
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentPage">
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
                                                <input type="text" placeholder="" class="form-control field-text font-PoppinsLight">
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
                                                    <option value="" hidden selected>Pilih kategori</option>
                                                    <option value="">General</option>
                                                    <option value="">Pengumuman</option>
                                                    <option value="">Laporan</option>
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
                                                    <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="boxOut-nameFile">
                                                                <div class="input-group">
                                                                    <div class="input-group-btn">
                                                                        <div class="input-logo input-img" style="background-image: url('../../img/icon/game-icon.png');"></div>
                                                                    </div>
                                                                    <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                                                        <!-- Field gambar berita -->
                                                                        <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light" placeholder="" readonly>
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
                                                <textarea class="form-control editTextArea font-PoppinsLight"></textarea>
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
                                                <input type="text" placeholder="Masukan judul link" class="form-control field-text font-PoppinsLight">
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
                                                                        <div class="input-logo input-img img-link"></div>
                                                                    </div>
                                                                    <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                                                        <!-- Field link -->
                                                                        <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light" placeholder="Masukan link" >
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
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="boxOut-nameFile">
                                                                <div class="input-group">
                                                                    <div class="input-group-btn">
                                                                        <div class="input-logo input-img img-dokumen"></div>
                                                                    </div>
                                                                    <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                                                        <!-- Field dokumen -->
                                                                        <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light" placeholder="" readonly>
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
                                            <button type="button" class="btn button-send font-RobotoCondensed-Bold" data-toggle="modal" data-target="#sukses">SIMPAN</button>
                                            <!-- /button save -->
                                        </div>
                                    </div>
                                </div>
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
        <script src="../../js/download/bootstrap-wysiwyg.min.js"></script>
        <script src="../../js/download/jquery.hotkeys.js"></script>
        <script>
            $(document).ready(function () {

                $(".button-send").click(function () {
                    setTimeout(function () {
                        $('#sukses').modal('hide');
                    }, 1500);
                });

            });
        </script>
        <script>
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


        </script>
    </body>
</html>
