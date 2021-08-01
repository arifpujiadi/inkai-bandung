<header >
    <div id="nav">
        <div class="navbar navbar-default navbar-static edit-navbar">
            <div class="col-md-6 col-sm-6 col-xs-6 boxOut-headerText inherit center">
                <a href="../index.php">
                    <img class="header-logo" src="../img/icon/header-inkai-revisi.png">
                </a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">

                <!-- toggle -->
                <!--==================================================-->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle offcanvas-toggle edit-toggle pull-right" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
                        <span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                    </button>
                </div>
                <!-- /toggle -->


                <!-- menu -->
                <!--==================================================-->
                <div class="navbar-offcanvas navbar-offcanvas-touch inherit" id="js-bootstrap-offcanvas">
                    <div class="row">
                        <div class="hidden-lg hidden-md hidden-sm col-xs-12 boxOut-sideMenu flex">
                            <img src="../img/icon/logo-inkai-mobile.png">
                        </div>
                    </div>
                    <div class="row">
                        <div class="hidden-lg hidden-md hidden-sm col-xs-12 boxOut-titleMenu">
                            <div class="col-xs-12 box-titleMenu font-oswaldBold">
                                Menu
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-header edit-nav-header font-Japan center-block">
                        <li class="sideMenu-li col-md-2 col-sm-2 col-xs-12">
                            <a href="../index.php">
                                Home
                            </a>
                        </li>
                        <li class="sideMenu-li col-md-2 col-sm-2 col-xs-12">
                            <a href="anggota.php">
                                Anggota
                            </a>
                        </li>
                        <!-- Pengembangan -->
                        <!--
                        <li class="sideMenu-li col-md-2 col-sm-2 col-xs-12">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        Profil
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Dewan Guru</a></li>
                                                        <li><a href="#">Pengurus</a></li>
                                                        <li><a href="anggota.php">Anggota</a></li>
                                                    </ul>
                                                </li>
                        -->
                        <li class="sideMenu-li col-md-2 col-sm-2 col-xs-12" >
                            <a href="dojoBandung.php">
                                Dojo
                            </a>
                        </li>
                        <li class="sideMenu-li col-md-2 col-sm-2 col-xs-12" >
                            <a href="berita.php">
                                Berita
                            </a>
                        </li>
                        <li class="sideMenu-li col-md-2 col-sm-2 col-xs-12">
                            <a href="#" data-toggle="modal" data-target="#login">
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /menu -->

            </div>
        </div>
    </div>


    <!-- modal - login -->
    <!--==================================================-->
    <div class="row">
        <div id="login" class="modal modal-login fade" role="dialog">
            <div class="modal-dialog modal-md modal-margin">
                <div class="modal-content editModalLogin-content">
                    <div class="modalHeader-padding">
                        <div class="modal-header editModalLogin-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                    <div class="modal-body editModal-body boxOut-user">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 modal-logo">
                                <img class="center-block" src="../img/icon/logo-inkai.png">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 modal-keteranganLogin font-PoppinsSemiBold">
                                Login Admin
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-loginEmail font-openSans box-username">
                                <!-- field email -->
                                <input type="text" placeholder="Masukan email" class="form-control field-modalLogin" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-loginEmail font-openSans box-username">
                                <!-- field password -->
                                <input type="password" placeholder="Masukan password" class="form-control field-modalLogin" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-loginEmail font-openSans box-email">
                                <!-- field email, lupa password -->
                                <input type="text" placeholder="Masukan email" class="form-control field-modalLogin" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 box-buttonLogin">
                                <!-- button login  -->
                                <button type="button" class="btn button-modalLogin center-block" onclick='window.location.assign("admin/dashboard.php")'>Login</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 box-buttonReset">
                                <!-- button reset  -->
                                <button type="button" class="btn button-modalLogin center-block">Reset Password</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-lupaPassword box-lupaPassword text-center">
                                <a href="#">
                                    Lupa Password?
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-lupaPassword text-center box-login">
                                <a href="#">
                                    Login
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal - login -->

</header>