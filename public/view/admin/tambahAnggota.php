<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tambah Anggota</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_adminCss.php'; ?>
        <link href="../../css/custom/admin/tambahAnggota.css" rel="stylesheet">
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
                                TAMBAH ANGGOTA
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentPage">
                                <div class="row row-tabPadding">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-paddingTab">
                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-borderTab">
                                                <div class="tab-content boxTab">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="row">
                                                                <div class="x_title">
                                                                    <h2>Biodata</h2>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="col-md-6 col-sm-6 col-xs-12 box-left boxOut-fotoAnggota">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-contentLeft-top">
                                                                                <div class="boxOut-profilePhoto center-block">
                                                                                    <!-- Foto Anggota -->
                                                                                    <img src="../../img/icon/profilPicture.png">
                                                                                    <!-- /Foto Anggota -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="boxOut-changePicture center-block input-form3 lampir-file">
                                                                                    <!-- Button insert foto -->
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light" placeholder="No File Choose" readonly>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <span class="btn btn-file button-changePicture font-RobotoCondensed-Bold">
                                                                                            Ganti Foto<input type="file">
                                                                                        </span>
                                                                                    </div>
                                                                                    <!-- /Button insert foto -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-right">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                                        Jenis Anggota
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <!-- radio button jenis anggota -->
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                                                            <div class="radio box-radio font-PoppinsLight">
                                                                                                <label><input type="radio" name="optJenisAnggota">Kyu</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                                                            <div class="radio box-radio font-PoppinsLight">
                                                                                                <label><input type="radio" name="optJenisAnggota">MSH-Junior</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                                                            <div class="radio box-radio font-PoppinsLight">
                                                                                                <label><input type="radio" name="optJenisAnggota">MSH</label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- /radio button jenis anggota -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                                        Nomer MSH
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <!-- Field nomor MSH -->
                                                                                        <input type="text" placeholder="" class="form-control field-text font-PoppinsLight">
                                                                                        <!-- /Field nomor MSH -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                                        Dojo / Ranting
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-search">
                                                                                        <!-- Field option dojo -->
                                                                                        <input type="text" class="form-control field-text field-search font-PoppinsLight" placeholder="" list="listDojo">
                                                                                        <datalist class="font-PoppinsLight" id="listDojo">
                                                                                            <option value="Parahyangan Karate Club">
                                                                                            <option value="PGII">
                                                                                        </datalist>
                                                                                        <!-- /Field option dojo -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                                        Tingkatan Sabuk
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <!-- Dropdown option tingkatan sabuk -->
                                                                                        <select class="form-control dropdown-konfirmasiPembayaran font-PoppinsLight">
                                                                                            <option value="" hidden selected></option>
                                                                                            <option value="">Dan 8</option>
                                                                                            <option value="">Dan 7</option>
                                                                                            <option value="">Dan 6</option>
                                                                                            <option value="">Dan 5</option>
                                                                                            <option value="">Dan 4</option>
                                                                                            <option value="">Dan 3</option>
                                                                                            <option value="">Dan 2</option>
                                                                                            <option value="">Dan 1</option>
                                                                                            <option value="">Kyu 1</option>
                                                                                            <option value="">Kyu 2</option>
                                                                                            <option value="">Kyu 3</option>
                                                                                            <option value="">Kyu 4</option>
                                                                                            <option value="">Kyu 5</option>
                                                                                            <option value="">Kyu 6</option>
                                                                                            <option value="">Kyu 7</option>
                                                                                            <option value="">Kyu 8</option>
                                                                                            <option value="">Kyu 9</option>
                                                                                            <option value="">Kyu 10</option>
                                                                                        </select>
                                                                                        <!-- /Dropdown option tingkatan sabuk -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-bottom">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                                    Nama Lengkap
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <!-- Field nama lengkap -->
                                                                                    <input type="text" placeholder="" class="form-control field-text font-PoppinsLight">
                                                                                    <!-- /Field nama lengkap -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="col-md-6 col-sm-6 col-xs-12 box-left">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                                                Nama Panggilan
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                <!-- Field nama panggilan -->
                                                                                                <input type="text" placeholder="" class="form-control field-text font-PoppinsLight">
                                                                                                <!-- /Field nama panggilan -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-12 box-right">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                                                Jenis Kelamin
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                <!-- Radio button jenis kelamin -->
                                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                                    <div class="radio box-radio font-PoppinsLight">
                                                                                                        <label><input type="radio" name="optJenisKelaminDan">Perempuan</label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                                    <div class="radio box-radio font-PoppinsLight">
                                                                                                        <label><input type="radio" name="optJenisKelaminDan">Laki-laki</label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- /Radio button jenis kelamin -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="col-md-6 col-sm-6 col-xs-12 box-left">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                                                Tempat Lahir
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                <!-- Field tempat lahir -->
                                                                                                <input type="text" placeholder="" class="form-control field-text font-PoppinsLight">
                                                                                                <!-- /Field tempat lahir -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-12 box-right">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                                                Tanggal Lahir
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                <!-- Field tanggal lahir -->
                                                                                                <input type="text" placeholder="DD / MM / YYYY" class="form-control field-text font-PoppinsLight center" data-inputmask="'mask': '99/99/9999'">
                                                                                                <!-- /Field tanggal lahir -->
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
                                                                                    Telepon Rumah / HP
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <!-- Field nomor kontak -->
                                                                                    <input type="text" placeholder="" class="form-control field-text font-PoppinsLight" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46">
                                                                                    <!-- /Field nomor kontak -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                                    Alamat Rumah
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <!-- Field alamat rumah -->
                                                                                    <input type="text" placeholder="" class="form-control field-text font-PoppinsLight">
                                                                                    <!-- /Field alamat rumah -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                                    Email
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <!-- Field email -->
                                                                                    <input type="text" placeholder="" class="form-control field-text font-PoppinsLight">
                                                                                    <!-- /Field email -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="col-md-4 col-sm-4 col-xs-12 boxOut-timeLeft-2">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                                            Tinggi Badan
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <!-- Field tinggi badan -->
                                                                                            <input type="text" placeholder="Centimeter" class="form-control field-text font-PoppinsLight" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" maxlength="3">
                                                                                            <!-- /Field tinggi badan -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4 col-sm-4 col-xs-12 boxOut-timeMiddle-2">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                                            Golongan Darah
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <!-- Dropdown option golongan darah -->
                                                                                            <select class="form-control dropdown-konfirmasiPembayaran font-PoppinsLight">
                                                                                                <option value="" hidden selected></option>
                                                                                                <option value="">A</option>
                                                                                                <option value="">B</option>
                                                                                                <option value="">AB</option>
                                                                                                <option value="">O</option>
                                                                                            </select>
                                                                                            <!-- /Dropdown option golongan darah -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4 col-sm-4 col-xs-12 boxOut-timeRight-2">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                                            Berat Badan (+/-)
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <!-- Field berat badan -->
                                                                                            <input type="text" placeholder="Kilogram" class="form-control field-text font-PoppinsLight" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" maxlength="3">
                                                                                            <!-- /Field berat badan -->
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
                                                                                    Agama
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <!-- Field agama -->
                                                                                    <input type="text" placeholder="" class="form-control field-text font-PoppinsLight">
                                                                                    <!-- /Field agama -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                                    Nama Orangtua
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <!-- Field nama orangtua -->
                                                                                    <input type="text" placeholder="" class="form-control field-text font-PoppinsLight">
                                                                                    <!-- /Field nama orangtua -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                                    Telepon / HP Orangtua / Wali
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <!-- Field nomor kontak ortu -->
                                                                                    <input type="text" placeholder="" class="form-control field-text font-PoppinsLight" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46">
                                                                                    <!-- /Field nomor kontak ortu -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                                    Nama Pelatih
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-search">
                                                                                    <!-- Field option nama pelatih -->
                                                                                    <input type="text" class="form-control field-text field-search font-PoppinsLight" placeholder="" list="listPelatih">
                                                                                    <datalist class="font-PoppinsLight" id="listPelatih">
                                                                                        <option value="Pelatih 1">
                                                                                        <option value="Pelatih 2">
                                                                                    </datalist>
                                                                                    <!-- /Field option nama pelatih -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                                                    Telepon Rumah / HP Pelatih
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <!-- Field kontak pelatih -->
                                                                                    <input type="text" placeholder="" class="form-control field-text font-PoppinsLight" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46">
                                                                                    <!-- /Field kontak pelatih -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="x_title x_title_edit">
                                                                            <h2>Tingkatan Sabuk</h2>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Tabel tingkatan sabuk Kyu -->
                                                                    <!--==================================================-->
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                                                    <table class="col-md-12 col-sm-12 col-xs-12 boxOut-tambahJadwal edit-tableDan font-PoppinsLight">
                                                                                        <tr class="judulTable font-PoppinsSemiBold center">
                                                                                            <td class="td-1">Tingkatan KYU</td>
                                                                                            <td class="td-2"></td>
                                                                                            <td class="td-3">Tempat Pelaksanaan Ujian</td>
                                                                                            <td class="td-4">Tanggal</td>
                                                                                            <td class="td-7">Ijazah</td>
                                                                                            <td class="td-8"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="">
                                                                                                <div class="td-1">
                                                                                                    KYU 10
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-2">
                                                                                                    :
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-3">
                                                                                                    <input type="text" placeholder="Masukan nama & alamat tempat pelaksanaan ujian" class="form-control field-text font-PoppinsLight">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-4">
                                                                                                    <input type="text" placeholder="DD / MM / YYYY" class="form-control field-text font-PoppinsLight center" data-inputmask="'mask': '99/99/9999'">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-7">
                                                                                                    <div class="checkbox td-checkbox">
                                                                                                        <label><input type="checkbox" class="" value="" disabled=""></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-8">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                                                        <div class="boxOut-button center-block">
                                                                                                            <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                                                Choose File<input type="file">
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="">
                                                                                                <div class="td-1">
                                                                                                    KYU 8
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-2">
                                                                                                    :
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-3">
                                                                                                    <input type="text" placeholder="Masukan nama & alamat tempat pelaksanaan ujian" class="form-control field-text font-PoppinsLight">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-4">
                                                                                                    <input type="text" placeholder="DD / MM / YYYY" class="form-control field-text font-PoppinsLight center" data-inputmask="'mask': '99/99/9999'">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-7">
                                                                                                    <div class="checkbox td-checkbox">
                                                                                                        <label><input type="checkbox" class="" value="" disabled=""></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-8">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                                                        <div class="boxOut-button center-block">
                                                                                                            <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                                                Choose File<input type="file">
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="">
                                                                                                <div class="td-1">
                                                                                                    KYU 6
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-2">
                                                                                                    :
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-3">
                                                                                                    <input type="text" placeholder="Masukan nama & alamat tempat pelaksanaan ujian" class="form-control field-text font-PoppinsLight">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-4">
                                                                                                    <input type="text" placeholder="DD / MM / YYYY" class="form-control field-text font-PoppinsLight center" data-inputmask="'mask': '99/99/9999'">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-7">
                                                                                                    <div class="checkbox td-checkbox">
                                                                                                        <label><input type="checkbox" class="" value="" disabled=""></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-8">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                                                        <div class="boxOut-button center-block">
                                                                                                            <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                                                Choose File<input type="file">
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="">
                                                                                                <div class="td-1">
                                                                                                    KYU 4
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-2">
                                                                                                    :
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-3">
                                                                                                    <input type="text" placeholder="Masukan nama & alamat tempat pelaksanaan ujian" class="form-control field-text font-PoppinsLight">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-4">
                                                                                                    <input type="text" placeholder="DD / MM / YYYY" class="form-control field-text font-PoppinsLight center" data-inputmask="'mask': '99/99/9999'">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-7">
                                                                                                    <div class="checkbox td-checkbox">
                                                                                                        <label><input type="checkbox" class="" value="" disabled=""></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-8">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                                                        <div class="boxOut-button center-block">
                                                                                                            <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                                                Choose File<input type="file">
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="">
                                                                                                <div class="td-1">
                                                                                                    KYU 3
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-2">
                                                                                                    :
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-3">
                                                                                                    <input type="text" placeholder="Masukan nama & alamat tempat pelaksanaan ujian" class="form-control field-text font-PoppinsLight">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-4">
                                                                                                    <input type="text" placeholder="DD / MM / YYYY" class="form-control field-text font-PoppinsLight center" data-inputmask="'mask': '99/99/9999'">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-7">
                                                                                                    <div class="checkbox td-checkbox">
                                                                                                        <label><input type="checkbox" class="" value="" disabled=""></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-8">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                                                        <div class="boxOut-button center-block">
                                                                                                            <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                                                Choose File<input type="file">
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="">
                                                                                                <div class="td-1">
                                                                                                    KYU 1
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-2">
                                                                                                    :
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-3">
                                                                                                    <input type="text" placeholder="Masukan nama & alamat tempat pelaksanaan ujian" class="form-control field-text font-PoppinsLight">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-4">
                                                                                                    <input type="text" placeholder="DD / MM / YYYY" class="form-control field-text font-PoppinsLight center" data-inputmask="'mask': '99/99/9999'">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-7">
                                                                                                    <div class="checkbox td-checkbox">
                                                                                                        <label><input type="checkbox" class="" value="" disabled=""></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-8">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                                                        <div class="boxOut-button center-block">
                                                                                                            <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                                                Choose File<input type="file">
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /Tabel tingkatan sabuk Kyu -->


                                                                    <!-- Tabel tingkatan sabuk Dan -->
                                                                    <!--==================================================-->
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                                                    <table class="col-md-12 col-sm-12 col-xs-12 boxOut-tambahJadwal edit-tableDan font-PoppinsLight">
                                                                                        <tr class="judulTable font-PoppinsSemiBold center">
                                                                                            <td class="td-1">Tingkatan DAN</td>
                                                                                            <td class="td-2"></td>
                                                                                            <td class="td-3">Tempat Pelaksanaan Ujian</td>
                                                                                            <td class="td-4">Tanggal</td>
                                                                                            <td class="td-7">Ijazah</td>
                                                                                            <td class="td-8"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="">
                                                                                                <div class="td-1">
                                                                                                    DAN 1
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-2">
                                                                                                    :
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-3">
                                                                                                    <input type="text" placeholder="Masukan nama & alamat tempat pelaksanaan ujian" class="form-control field-text font-PoppinsLight">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-4">
                                                                                                    <input type="text" placeholder="DD / MM / YYYY" class="form-control field-text font-PoppinsLight center" data-inputmask="'mask': '99/99/9999'">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-7">
                                                                                                    <div class="checkbox td-checkbox">
                                                                                                        <label><input type="checkbox" class="" value="" disabled=""></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-8">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                                                        <div class="boxOut-button center-block">
                                                                                                            <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                                                Choose File<input type="file">
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="">
                                                                                                <div class="td-1">
                                                                                                    DAN 2
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-2">
                                                                                                    :
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-3">
                                                                                                    <input type="text" placeholder="Masukan nama & alamat tempat pelaksanaan ujian" class="form-control field-text font-PoppinsLight">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-4">
                                                                                                    <input type="text" placeholder="DD / MM / YYYY" class="form-control field-text font-PoppinsLight center" data-inputmask="'mask': '99/99/9999'">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-7">
                                                                                                    <div class="checkbox td-checkbox">
                                                                                                        <label><input type="checkbox" class="" value="" disabled=""></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-8">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                                                        <div class="boxOut-button center-block">
                                                                                                            <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                                                Choose File<input type="file">
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="">
                                                                                                <div class="td-1">
                                                                                                    DAN 3
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-2">
                                                                                                    :
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-3">
                                                                                                    <input type="text" placeholder="Masukan nama & alamat tempat pelaksanaan ujian" class="form-control field-text font-PoppinsLight">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-4">
                                                                                                    <input type="text" placeholder="DD / MM / YYYY" class="form-control field-text font-PoppinsLight center" data-inputmask="'mask': '99/99/9999'">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-7">
                                                                                                    <div class="checkbox td-checkbox">
                                                                                                        <label><input type="checkbox" class="" value="" disabled=""></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-8">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                                                        <div class="boxOut-button center-block">
                                                                                                            <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                                                Choose File<input type="file">
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="">
                                                                                                <div class="td-1">
                                                                                                    DAN 4
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-2">
                                                                                                    :
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-3">
                                                                                                    <input type="text" placeholder="Masukan nama & alamat tempat pelaksanaan ujian" class="form-control field-text font-PoppinsLight">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-4">
                                                                                                    <input type="text" placeholder="DD / MM / YYYY" class="form-control field-text font-PoppinsLight center" data-inputmask="'mask': '99/99/9999'">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-7">
                                                                                                    <div class="checkbox td-checkbox">
                                                                                                        <label><input type="checkbox" class="" value="" disabled=""></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-8">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                                                        <div class="boxOut-button center-block">
                                                                                                            <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                                                Choose File<input type="file">
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="">
                                                                                                <div class="td-1">
                                                                                                    DAN 5
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-2">
                                                                                                    :
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-3">
                                                                                                    <input type="text" placeholder="Masukan nama & alamat tempat pelaksanaan ujian" class="form-control field-text font-PoppinsLight">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-4">
                                                                                                    <input type="text" placeholder="DD / MM / YYYY" class="form-control field-text font-PoppinsLight center" data-inputmask="'mask': '99/99/9999'">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-7">
                                                                                                    <div class="checkbox td-checkbox">
                                                                                                        <label><input type="checkbox" class="" value="" disabled=""></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-8">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                                                        <div class="boxOut-button center-block">
                                                                                                            <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                                                Choose File<input type="file">
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="">
                                                                                                <div class="td-1">
                                                                                                    DAN 6
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-2">
                                                                                                    :
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-3">
                                                                                                    <input type="text" placeholder="Masukan nama & alamat tempat pelaksanaan ujian" class="form-control field-text font-PoppinsLight">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-4">
                                                                                                    <input type="text" placeholder="DD / MM / YYYY" class="form-control field-text font-PoppinsLight center" data-inputmask="'mask': '99/99/9999'">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-7">
                                                                                                    <div class="checkbox td-checkbox">
                                                                                                        <label><input type="checkbox" class="" value="" disabled=""></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-8">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                                                        <div class="boxOut-button center-block">
                                                                                                            <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                                                Choose File<input type="file">
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /Tabel tingkatan sabuk Dan -->


                                                                    <!-- Tabel prestasi kejuaraan -->
                                                                    <!--==================================================-->
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="row">
                                                                                <div class="x_title x_title_edit">
                                                                                    <h2>Prestasi Kejuaraan</h2>
                                                                                    <div class="clearfix"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                                                    <table class="col-md-12 col-sm-12 col-xs-12 boxOut-tambahJadwal edit-tableDan font-PoppinsLight boxOut-kejuaraan">
                                                                                        <tr class="judulTable font-PoppinsSemiBold center">
                                                                                            <td class="td-3">Nama Kejuaraan</td>
                                                                                            <td class="td-1">Juara</td>
                                                                                            <td class="td-4">Tanggal</td>
                                                                                            <td class="td-7">Sertifikat</td>
                                                                                            <td class="td-8"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="">
                                                                                                <div class="td-3">
                                                                                                    <input type="text" placeholder="Masukan Nama Kejuaraan" class="form-control field-text font-PoppinsLight">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-1">
                                                                                                    <input type="text" placeholder="Juara Ke" class="form-control field-text font-PoppinsLight center" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" maxlength="2">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-4">
                                                                                                    <input type="text" placeholder="DD / MM / YYYY" class="form-control field-text font-PoppinsLight center" data-inputmask="'mask': '99/99/9999'">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-7">
                                                                                                    <div class="checkbox td-checkbox">
                                                                                                        <label><input type="checkbox" class="" value="" disabled=""></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-8">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                                                        <div class="boxOut-button center-block">
                                                                                                            <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                                                Choose File<input type="file">
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 tambah-prestasi">
                                                                                    <a class="a-kejuaraan font-PoppinsLight">
                                                                                        <button type="button" class="btn button-lengkap center-block">
                                                                                            <img src="../../img/icon/insert.png">
                                                                                        </button>
                                                                                        Tambah
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /Tabel prestasi kejuaraan -->


                                                                    <!-- Tabel prestasi lainnya -->
                                                                    <!--==================================================-->
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="row">
                                                                                <div class="x_title x_title_edit">
                                                                                    <h2>Prestasi Lainnya</h2>
                                                                                    <div class="clearfix"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                                                    <table class="col-md-12 col-sm-12 col-xs-12 boxOut-tambahJadwal edit-tableDan font-PoppinsLight boxOut-lainnya">
                                                                                        <tr class="judulTable font-PoppinsSemiBold center">
                                                                                            <td class="td-3">Nama Prestasi</td>
                                                                                            <td class="td-4">Tanggal</td>
                                                                                            <td class="td-7">Data</td>
                                                                                            <td class="td-8"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="">
                                                                                                <div class="td-3">
                                                                                                    <input type="text" placeholder="Masukan Nama Prestasi" class="form-control field-text font-PoppinsLight">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-4">
                                                                                                    <input type="text" placeholder="DD / MM / YYYY" class="form-control field-text font-PoppinsLight center" data-inputmask="'mask': '99/99/9999'">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-7">
                                                                                                    <div class="checkbox td-checkbox">
                                                                                                        <label><input type="checkbox" class="" value="" disabled=""></label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="">
                                                                                                <div class="td-8">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                                                        <div class="boxOut-button center-block">
                                                                                                            <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                                                Choose File<input type="file">
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 tambah-prestasi">
                                                                                    <a class="a-lainnya font-PoppinsLight">
                                                                                        <button type="button" class="btn button-lengkap center-block">
                                                                                            <img src="../../img/icon/insert.png">
                                                                                        </button>
                                                                                        Tambah
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /Tabel prestasi lainnya -->


                                                                    <!-- Button save -->
                                                                    <!--==================================================-->
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="box-buttonSave center-block">
                                                                                <button type="button" class="btn button-send font-RobotoCondensed-Bold" data-toggle="modal" data-target="#sukses">SIMPAN</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /Button save -->
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
        <script src="../../js/download/jquery.inputmask.bundle.js"></script>

        <!-- Script custom -->
        <!--==================================================-->
        <script src="../../js/custom/fieldMask.js"></script>
        <script>
                                                                                                        $(document).ready(function () {

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

                                                                                                            $(".a-kejuaraan").on("click", function () {
                                                                                                                $(".boxOut-kejuaraan").append(
                                                                                                                        '<tr>' +
                                                                                                                        '<td class="">' +
                                                                                                                        '<div class="td-3">' +
                                                                                                                        '<input type="text" placeholder="Masukan Nama Kejuaraan" class="form-control field-text font-PoppinsLight">' +
                                                                                                                        '</div>' +
                                                                                                                        '</td>' +
                                                                                                                        '<td class="">' +
                                                                                                                        '<div class="td-1">' +
                                                                                                                        '<input type="text" placeholder="Juara Ke" class="form-control field-text font-PoppinsLight center" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" maxlength="2">' +
                                                                                                                        '</div>' +
                                                                                                                        '</td>' +
                                                                                                                        '<td class="">' +
                                                                                                                        '<div class="td-4">' +
                                                                                                                        '<input type="text" placeholder="DD / MM / YYYY" class="form-control field-text font-PoppinsLight center" data-inputmask="'mask': '99 / 99 / 9999'">' +
                                                                                                                        '</div>' +
                                                                                                                        '</td>' +
                                                                                                                        '<td class="">' +
                                                                                                                        '<div class="td-7">' +
                                                                                                                        '<div class="checkbox td-checkbox">' +
                                                                                                                        '<label><input type="checkbox" class="" value="" disabled=""></label>' +
                                                                                                                        '</div>' +
                                                                                                                        '</div>' +
                                                                                                                        '</td>' +
                                                                                                                        '<td class="">' +
                                                                                                                        '<div class="td-8">' +
                                                                                                                        '<div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">' +
                                                                                                                        '<div class="boxOut-button center-block">' +
                                                                                                                        '<span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">' +
                                                                                                                        'Choose File<input type="file">' +
                                                                                                                        '</span>' +
                                                                                                                        '</div>' +
                                                                                                                        '</div>' +
                                                                                                                        '</div>' +
                                                                                                                        '</td>' +
                                                                                                                        '</tr>'


                                                                                                                );
                                                                                                                        num2++;
                                                                                                            });

                                                                                                            $(".a-lainnya").on("click", function () {
                                                                                                                $(".boxOut-lainnya").append(
                                                                                                                        '<tr>' +
                                                                                                                        '<td class="">' +
                                                                                                                        '<div class="td-3">' +
                                                                                                                        '<input type="text" placeholder="Masukan Nama Prestasi" class="form-control field-text font-PoppinsLight">' +
                                                                                                                        '</div>' +
                                                                                                                        '</td>' +
                                                                                                                        '<td class="">' +
                                                                                                                        '<div class="td-4">' +
                                                                                                                        '<input type="text" placeholder="DD / MM / YYYY" class="form-control field-text font-PoppinsLight center" data-inputmask="'mask': '99 / 99 / 9999'">' +
                                                                                                                        '</div>' +
                                                                                                                        '</td>' +
                                                                                                                        '<td class="">' +
                                                                                                                        '<div class="td-7">' +
                                                                                                                        '<div class="checkbox td-checkbox">' +
                                                                                                                        '<label><input type="checkbox" class="" value="" disabled=""></label>' +
                                                                                                                        '</div>' +
                                                                                                                        '</div>' +
                                                                                                                        '</td>' +
                                                                                                                        '<td class="">' +
                                                                                                                        '<div class="td-8">' +
                                                                                                                        '<div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">' +
                                                                                                                        '<div class="boxOut-button center-block">' +
                                                                                                                        '<span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">' +
                                                                                                                        'Choose File<input type="file">' +
                                                                                                                        '</span>' +
                                                                                                                        '</div>' +
                                                                                                                        '</div>' +
                                                                                                                        '</div>' +
                                                                                                                        '</td>' +
                                                                                                                        '</tr>'


                                                                                                                );
                                                                                                                        num2++;
                                                                                                            });

                                                                                                        });
        </script>
    </body>
</html>