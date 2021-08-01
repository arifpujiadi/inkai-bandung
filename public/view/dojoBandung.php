<!DOCTYPE html>
<html>
    <head>
        <title>Dojo</title>
        <!-- css -->
        <!--==================================================-->
        <?php include '_css.php'; ?>
        <link rel="stylesheet" href="../css/custom/dojoBandung.css">
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
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-backgroundContent">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="border-member center-block"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-memberIsi font-hero-Regular">
                                    DOJO
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="border-member center-block"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-memberText font-Humnst777CnBT informasiContent center">
                                    Berisi informasi dojo INKAI (Institut Karate-Do Indonesia) yang berlokasi di Bandung, sehingga pengguna website dapat mengetahui informasi dojo seperti alamat dojo, pelatih, jadwal latihan. 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- list dojo -->
                <!--==================================================-->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="container">
                            <div class="col-md-12 col-sm-12 col-xs-12 container-margin">

                                <?php for ($i = 0; $i < 5; $i++) { ?>
                                
                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-listDojo">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-dojo">
                                            <div class="col-md-12 col-sm-12 col-xs-12 box-fotoDojo" style="background-image: url('../img/dojo/dojo-2.JPG')"></div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 box-keterangan font-PoppinsLight">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-namaDojo font-Cambria-Bold center">
                                                        PKC - UNPAR
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 keterangan">
                                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                                            Jadwal
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 center">:</div>
                                                        <div class="col-md-9 col-sm-9 col-xs-9 box-jadwal">
                                                            Selasa, Kamis
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 keterangan">
                                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                                            Alamat
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 center">:</div>
                                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                                            Jl. Ciumbuleuit No.94, Hegarmanah Cidadap
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="box-buttonSave center-block">
                                                            <button type="button" class="btn button-save font-RobotoCondensed" onclick='window.location.assign("dojoDetail.php")'>Detail Dojo</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-listDojo">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-dojo">
                                            <div class="col-md-12 col-sm-12 col-xs-12 box-fotoDojo" style="background-image: url('../img/dojo/dojo-3.JPG')"></div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 box-keterangan font-PoppinsLight">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-namaDojo font-Cambria-Bold center">
                                                        PGII 1
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 keterangan">
                                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                                            Jadwal
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 center">:</div>
                                                        <div class="col-md-9 col-sm-9 col-xs-9 box-jadwal">
                                                            Jumat, Sabtu
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 keterangan">
                                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                                            Alamat
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 center">:</div>
                                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                                            Jl. Panatayuda No.2
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="box-buttonSave center-block">
                                                            <button type="button" class="btn button-save font-RobotoCondensed" onclick='window.location.assign("dojoDetail.php")'>Detail Dojo</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-listDojo">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-dojo">
                                            <div class="col-md-12 col-sm-12 col-xs-12 box-fotoDojo" style="background-image: url('../img/dojo/dojo-1.JPG')"></div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 box-keterangan font-PoppinsLight">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-namaDojo font-Cambria-Bold center">
                                                        Hikari Budokan
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 keterangan">
                                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                                            Jadwal
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 center">:</div>
                                                        <div class="col-md-9 col-sm-9 col-xs-9 box-jadwal">
                                                            Jumat, Sabtu
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 keterangan">
                                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                                            Alamat
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 center">:</div>
                                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                                            Jl. Burung Tungku No.8 Rajawali Barat 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="box-buttonSave center-block">
                                                            <button type="button" class="btn button-save font-RobotoCondensed" onclick='window.location.assign("dojoDetail.php")'>Detail Dojo</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <?php } ?>

                            </div>
                        </div>
                    </div> 
                </div>
                <!-- /list dojo -->

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