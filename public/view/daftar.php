<!DOCTYPE html>
<html>
    <head>
        <title>Form Online</title>
        <!-- css -->
        <!--==================================================-->
        <?php include '_css.php'; ?>
        <link rel="stylesheet" href="../css/custom/daftar.css">
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
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 container-margin">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleContent font-hero-Regular center">
                                            Formulir Pendaftaran Ujian Kenaikan Tingkat 
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 30px;">
                                        <div class="col-md-6 col-sm-6 col-xs-6 boxOut-gashukuUjian">
                                            <input class="single-check" type="checkbox" id="method-1" />
                                            <label class="label-inputPrimary font-RobotoCondensed-Bold" for="method-1">Gashuku</label>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 boxOut-gashukuUjian">
                                            <input class="single-check" type="checkbox" id="method-2" />
                                            <label class="label-inputPrimary font-RobotoCondensed-Bold" for="method-2">Ujian</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 table-responsive table-primary boxOut-primaryTop">
                                        <table class="table col-md-12 col-sm-12 col-xs-12 font-Roboto-Light">
                                            <tr class="title-table">
                                                <td style="width: 120px;">Nomor Anggota</td>
                                                <td class="center" style="width: 5px;">:</td>
                                                <td colspan="4">
                                                    <input name="number" type="text" placeholder="" class="form-control field-primary font-Roboboto" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" maxlength="12">
                                                </td>
                                            </tr>
                                            <tr class="blue-tableTr">
                                                <td>Dojo / Ranting</td>
                                                <td>:</td>
                                                <td colspan="4">
                                                    <input type="text" placeholder="" class="form-control field-primary font-Roboboto" >
                                                </td>
                                            </tr>
                                            <tr class="grey-tableTr">
                                                <td>Tingkatan Kyu</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" placeholder="" class="form-control field-primary font-Roboboto number" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" maxlength="2">
                                                </td>
                                                <td>Sabuk</td>
                                                <td>:</td>
                                                <td>
                                                    <select class="form-control dropdown-headerSelectLeft font-Roboboto">
                                                        <option value="" selected disabled hidden>Warna Sabuk</option>
                                                        <option value="">Coklat</option>
                                                        <option value="">Biru</option>
                                                        <option value="">Hijau</option>
                                                        <option value="">Kuning</option>
                                                        <option value="">Putih</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="col-md-12">
                                            <div class="col-md-6 col-xs-12 red">
                                                <table class="table col-md-12 col-sm-12 col-xs-12 font-Roboto-Light">
                                                    <tr class="grey-tableTr">
                                                        <td>Tingkatan Kyu</td>
                                                        <td>:</td>
                                                        <td>
                                                            <input type="text" placeholder="" class="form-control field-primary font-Roboboto number" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" maxlength="2">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-6 col-xs-12 red">
                                                <table class="table col-md-12 col-sm-12 col-xs-12 font-Roboto-Light">
                                                    <tr class="grey-tableTr">
                                                        <td>Sabuk</td>
                                                        <td>:</td>
                                                        <td>
                                                            <select class="form-control dropdown-headerSelectLeft font-Roboboto">
                                                                <option value="" selected disabled hidden>Warna Sabuk</option>
                                                                <option value="">Coklat</option>
                                                                <option value="">Biru</option>
                                                                <option value="">Hijau</option>
                                                                <option value="">Kuning</option>
                                                                <option value="">Putih</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
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


        <!-- footer -->
        <!--==================================================-->
        <footer>
            <?php include '_footer.php'; ?>
        </footer>
        <!-- /footer -->


    </body>
    <!-- js -->
    <!--==================================================-->
    <?php include '_js.php'; ?>



</html>