<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_adminCss.php'; ?>
        <link href="../../css/custom/admin/admin.css" rel="stylesheet">
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
                                Admin
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentPage">

                                <!-- Content sebelah kiri -->
                                <!--==================================================-->
                                <div class="col-md-6 col-sm-6 col-xs-12 boxOut-content-left">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleContent font-Exo2SemiBold">
                                            Tambah Admin
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                            Cari Anggota
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-12 col-xs-12">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-search">
                                                                <input type="text" class="form-control field-text field-search font-PoppinsLight" placeholder="" list="namaAnggota">
                                                                <datalist id="namaAnggota">
                                                                    <option value="Mochamad Arif Pujiadi">
                                                                    <option value="Aldi Karya Muslim">
                                                                </datalist>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                            Jabatan
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-12 col-xs-12">
                                                            <select class="form-control dropdown-konfirmasiPembayaran font-PoppinsLight">
                                                                <option value="" hidden selected></option>
                                                                <option value="">Pengurus INKAI Bandung</option>
                                                                <option value="">Pelatih Dojo</option>
                                                            </select>
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
                                                        <div class="col-md-8 col-sm-12 col-xs-12">
                                                            <input type="text" placeholder="" class="form-control field-text font-PoppinsLight" id="email">
                                                        </div>
                                                        <div class="col-md-4 col-sm-12 col-xs-12 notif font-PoppinsLight">
                                                            <p id="avail-notif"></p>
                                                            <p id="onclick-notif"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                            Password
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-12 col-xs-12">
                                                            <input type="password" placeholder="" class="form-control field-text font-PoppinsLight" id="password">
                                                        </div>
                                                        <div class="col-md-4 col-sm-12 col-xs-12 notif font-PoppinsLight">
                                                            <p id="password-notif"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                            Ketik Ulang Password
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-12 col-xs-12">
                                                            <input type="password" placeholder="" class="form-control field-text font-PoppinsLight" id="confirmPassword">
                                                        </div>
                                                        <div class="col-md-4 col-sm-12 col-xs-12 notif font-PoppinsLight">
                                                            <p id="confirm-notif"></p>
                                                            <p id="alert-notif"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="box-buttonSave center-block">
                                                        <button type="button" class="btn button-send font-RobotoCondensed-Bold" data-toggle="modal" data-target="#sukses">SIMPAN</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- /Content sebelah kiri -->


                                <!-- Content sebelah kanan -->
                                <!--==================================================-->
                                <div class="col-md-6 col-sm-6 col-xs-12 boxOut-content-right">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleContent font-Exo2SemiBold">
                                            Atur Admin
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">

                                            <!-- Edit - Admin 1 -->
                                            <!--==================================================-->
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 box-bankList">
                                                    <!-- Keterangan admin -->
                                                    <div class="col-md-12 col-sm-12 col-xs-12 bankList">
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-photo center">
                                                                            <div class="photo-admin center-block" style="background-image: url('../../img/profil/3x4.jpg');"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-8 col-xs-12">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-admin font-PoppinsSemiBold">
                                                                                    Nama
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 nama-admin font-PoppinsLight">
                                                                                    Mochamad Arif Pujiadi
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-admin title-jabatan font-PoppinsSemiBold">
                                                                                    Jabatan
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 nama-admin font-PoppinsLight">
                                                                                    Pengurus
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-3 col-xs-12 box-action">
                                                            <div class="col-md-6 col-sm-6 col-xs-6 box-a">
                                                                <a href="#" class="a-rincian">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-actionImg">
                                                                        <img src="../../img/icon/bank-edit.png">
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textAction font-RobotoCondensed-Light">
                                                                        Edit
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-6 box-a">
                                                                <a href="#" class="a-delete" data-toggle="modal" data-target="#hapus">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-actionImg-delete">
                                                                        <img src="../../img/icon/bank-delete.png">
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textAction font-RobotoCondensed-Light">
                                                                        Delete
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Keterangan admin -->
                                                    
                                                    <!-- Toggledown -->
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-rincianList">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="col-md-6 col-sm-6 col-xs-12 box-list">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField boxOut-titleAdmin font-PoppinsSemiBold">
                                                                                    Jabatan
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <select class="form-control dropdown-konfirmasiPembayaran dropdown-jabatan font-PoppinsLight">
                                                                                        <option value="" hidden></option>
                                                                                        <option value="" selected>Pengurus</option>
                                                                                        <option value="">Pelatih</option>
                                                                                        <option value="">Pengurus & Pelatih</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField boxOut-titleAdmin font-PoppinsSemiBold">
                                                                                    Email
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <input type="text" placeholder="" class="form-control field-text font-PoppinsLight" value="arifpujiadi@gmail.com">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-xs-12 box-list">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField boxOut-titleAdmin font-PoppinsSemiBold">
                                                                                    Password
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <input type="password" placeholder="" class="form-control field-text font-PoppinsLight" value="apapunitu123">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField boxOut-titleAdmin font-PoppinsSemiBold">
                                                                                    Ketik Ulang Password
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <input type="password" placeholder="" class="form-control field-text font-PoppinsLight" value="apapunitu123">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="box-buttonSave box-buttonSaveAdmin center-block">
                                                                    <button type="button" class="btn button-send font-RobotoCondensed-Bold" data-toggle="modal" data-target="#sukses">SIMPAN</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Toggledown -->
                                                </div>
                                            </div>
                                            <!-- /Edit - Admin 1 -->

                                            
                                            <!-- Edit - Admin 2 -->
                                            <!--==================================================-->
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 box-bankList">
                                                    <!-- Keterangan admin -->
                                                    <div class="col-md-12 col-sm-12 col-xs-12 bankList">
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-photo center">
                                                                            <div class="photo-admin center-block" style="background-image: url('../../img/profil/profil-1-1.jpg');"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-8 col-xs-12">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-admin font-PoppinsSemiBold">
                                                                                    Nama
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 nama-admin font-PoppinsLight">
                                                                                    Aldi Karya Muslim
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-admin title-jabatan font-PoppinsSemiBold">
                                                                                    Jabatan
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 nama-admin font-PoppinsLight">
                                                                                    Pengurus & Pelatih
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-3 col-xs-12 box-action">
                                                            <div class="col-md-6 col-sm-6 col-xs-6 box-a">
                                                                <a href="#" class="a-rincian">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-actionImg">
                                                                        <img src="../../img/icon/bank-edit.png">
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textAction font-RobotoCondensed-Light">
                                                                        Edit
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-6 box-a">
                                                                <a href="#" class="a-delete" data-toggle="modal" data-target="#hapus">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-actionImg-delete">
                                                                        <img src="../../img/icon/bank-delete.png">
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textAction font-RobotoCondensed-Light">
                                                                        Delete
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Keterangan admin -->
                                                    
                                                    <!-- Toggledown -->
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-rincianList">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="col-md-6 col-sm-6 col-xs-12 box-list">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField boxOut-titleAdmin font-PoppinsSemiBold">
                                                                                    Jabatan
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <select class="form-control dropdown-konfirmasiPembayaran dropdown-jabatan font-PoppinsLight">
                                                                                        <option value="" hidden></option>
                                                                                        <option value="">Pengurus</option>
                                                                                        <option value="">Pelatih</option>
                                                                                        <option value="" selected>Pengurus & Pelatih</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField boxOut-titleAdmin font-PoppinsSemiBold">
                                                                                    Email
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <input type="text" placeholder="" class="form-control field-text font-PoppinsLight" value="arifpujiadi@gmail.com">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-xs-12 box-list">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField boxOut-titleAdmin font-PoppinsSemiBold">
                                                                                    Password
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <input type="password" placeholder="" class="form-control field-text font-PoppinsLight" value="apapunitu123">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField boxOut-titleAdmin font-PoppinsSemiBold">
                                                                                    Ketik Ulang Password
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <input type="password" placeholder="" class="form-control field-text font-PoppinsLight" value="apapunitu123">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="box-buttonSave box-buttonSaveAdmin center-block">
                                                                    <button type="button" class="btn button-send font-RobotoCondensed-Bold" data-toggle="modal" data-target="#sukses">SIMPAN</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Toggledown -->
                                                </div>
                                            </div>
                                            <!-- /Edit - Admin 2 -->

                                            
                                            <!-- Edit - Admin 3 -->
                                            <!--==================================================-->
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 box-bankList">
                                                    <!-- Keterangan admin -->
                                                    <div class="col-md-12 col-sm-12 col-xs-12 bankList">
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-photo center">
                                                                            <div class="photo-admin center-block" style="background-image: url('../../img/profil/profil-1-4.jpg');"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-8 col-xs-12">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-admin font-PoppinsSemiBold">
                                                                                    Nama
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 nama-admin font-PoppinsLight">
                                                                                    Lorem Ipsum
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-admin title-jabatan font-PoppinsSemiBold">
                                                                                    Jabatan
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 nama-admin font-PoppinsLight">
                                                                                    Pelatih
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-3 col-xs-12 box-action">
                                                            <div class="col-md-6 col-sm-6 col-xs-6 box-a">
                                                                <a href="#" class="a-rincian">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-actionImg">
                                                                        <img src="../../img/icon/bank-edit.png">
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textAction font-RobotoCondensed-Light">
                                                                        Edit
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-6 box-a">
                                                                <a href="#" class="a-delete" data-toggle="modal" data-target="#hapus">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-actionImg-delete">
                                                                        <img src="../../img/icon/bank-delete.png">
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textAction font-RobotoCondensed-Light">
                                                                        Delete
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Keterangan admin -->
                                                    
                                                    <!-- Toggledown -->
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-rincianList">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="col-md-6 col-sm-6 col-xs-12 box-list">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField boxOut-titleAdmin font-PoppinsSemiBold">
                                                                                    Jabatan
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <select class="form-control dropdown-konfirmasiPembayaran dropdown-jabatan font-PoppinsLight">
                                                                                        <option value="" hidden></option>
                                                                                        <option value="">Pengurus</option>
                                                                                        <option value="" selected>Pelatih</option>
                                                                                        <option value="">Pengurus & Pelatih</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField boxOut-titleAdmin font-PoppinsSemiBold">
                                                                                    Email
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <input type="text" placeholder="" class="form-control field-text font-PoppinsLight" value="Lorem_ipsum@gmail.com">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-xs-12 box-list">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField boxOut-titleAdmin font-PoppinsSemiBold">
                                                                                    Password
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <input type="password" placeholder="" class="form-control field-text font-PoppinsLight" value="apapunitu123">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField boxOut-titleAdmin font-PoppinsSemiBold">
                                                                                    Ketik Ulang Password
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <input type="password" placeholder="" class="form-control field-text font-PoppinsLight" value="apapunitu123">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="box-buttonSave box-buttonSaveAdmin center-block">
                                                                    <button type="button" class="btn button-send font-RobotoCondensed-Bold" data-toggle="modal" data-target="#sukses">SIMPAN</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Toggledown -->
                                                </div>
                                            </div>
                                            <!-- /Edit - Admin 3 -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /Content sebelah kanan -->
                            </div>
                        </div>


                        <!-- Modal - Peringatan -->
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
                                                Apakah anda yakin akan menghapus Admin Mochamad Arif Pujiadi?
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

                        <!-- Modal - Sukses -->
                        <!--==================================================-->
                        <?php include '_sukses.php'; ?>
                        <!-- /Modal - Sukses -->
                        
                    </div>
                </section>
                <!-- /page content -->

                <!-- footer content -->
                <footer></footer>
                <!-- /footer content -->

            </div>
        </div>

        <?php include '_adminJs.php'; ?>
        <script src="../../js/custom/admin.js"></script>
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

                $('.a-rincian').on("click", function () {
                    $(this).parents('.box-bankList').find('.boxOut-rincianList').slideToggle(200);
                });

            });
        </script>
    </body>
</html>
