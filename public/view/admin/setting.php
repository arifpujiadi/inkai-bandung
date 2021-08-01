<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Setting</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_adminCss.php'; ?>
        <link href="../../css/custom/admin/setting.css" rel="stylesheet">
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
                                Setting
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentPage">

                                <!-- Content Kiri -->
                                <!--==================================================-->
                                <div class="col-md-6 col-sm-6 col-xs-12 boxOut-content-left">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleContent font-Exo2SemiBold">
                                            Ubah Email
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-change-img">
                                            <div class="box-change-img center-block">
                                                <img src="../../img/icon/change-email.png">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                    Email Lama
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <!-- Field Email Lama -->
                                                    <input type="text" placeholder="Masukan email lama" class="form-control field-text font-PoppinsLight" id="emailLama">
                                                    <!-- /Field Email Lama -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                    Email Baru
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <!-- Field Email Baru -->
                                                    <input type="text" placeholder="Masukan email baru" class="form-control field-text font-PoppinsLight" id="emailBaru">
                                                    <!-- /Field Email Baru -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Content Kiri -->


                                <!-- Content Kanan -->
                                <!--==================================================-->
                                <div class="col-md-6 col-sm-6 col-xs-12 boxOut-content-right">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleContent font-Exo2SemiBold">
                                            Ubah Password
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-change-img">
                                            <div class="box-change-img center-block">
                                                <img src="../../img/icon/change-password.png">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-listField">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-PoppinsSemiBold">
                                                    Password Baru
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <!-- Field Password Baru -->
                                                    <input type="password" placeholder="Masukan password baru" class="form-control field-text font-PoppinsLight" id="password">
                                                    <!-- /Field Password Baru -->
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
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <!-- Field Ketik Ulang Password -->
                                                    <input type="password" placeholder="Ketik Ulang Password" class="form-control field-text font-PoppinsLight" id="confirmPassword">
                                                    <!-- /Field Ketik Ulang Password -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Content Kanan -->
                            </div>
                        </div>

                        <!-- Button Save -->
                        <!--==================================================-->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-save">
                                <div class="box-buttonSave center-block">
                                    <button type="button" class="btn button-save font-RobotoCondensed" data-toggle="modal" data-target="#sukses">Simpan</button>
                                </div>
                            </div>
                        </div>
                        <!-- /Button Save -->
                    </div>
                </section>
                <!-- /page content -->

                <!-- footer content -->
                <footer></footer>
                <!-- /footer content -->

            </div>
        </div>

        <?php include '_adminJs.php'; ?>
    </body>
</html>
