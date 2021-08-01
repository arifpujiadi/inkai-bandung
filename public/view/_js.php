<script src="../js/jquery-2.1.4.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.offcanvas.js"></script>
<script src="../js/download/jquery.bootstrap-autohidingnavbar.js"></script>
<script src="../js/material.js"></script>
<script src="../js/ripples.js"></script>
<script src="../js/download/nprogress.js"></script>
<script src="../js/download/bootstrap-progressbar.js"></script>
<script>
    $(document).ready(function () {

//        $("div.navbar-static").autoHidingNavbar();

        $('#nav').affix({
            offset: {
                top: $('#header-top').height()
            }
        });

        $('#sidebar').affix({
            offset: {
                top: 1000
            }
        });


        /*---------- Material js ----------*/
        $.material.init();

        $('input,textarea').focus(function () {
            $(this).data('placeholder', $(this).attr('placeholder'))
                    .attr('placeholder', '');
        }).blur(function () {
            $(this).attr('placeholder', $(this).data('placeholder'));
        });

    });

    if (typeof NProgress != 'undefined') {
        $(document).ready(function () {
            NProgress.start();
        });

        $(window).load(function () {
            NProgress.done();
        });
    }
</script>
<script>
    $(document).ready(function () {

        $('.box-lupaPassword').find('a').on('click', function (e) {
            $(this).parents('.boxOut-user').find('.box-username').hide(20);
            $(this).parents('.boxOut-user').find('.box-lupaPassword').hide();
            $(this).parents('.boxOut-user').find('.box-buttonLogin').hide();
            $(this).parents('.boxOut-user').find('.box-email').show(20);
            $(this).parents('.boxOut-user').find('.box-login').show();
            $(this).parents('.boxOut-user').find('.box-buttonReset').show();
        });

        $('.box-login').find('a').on('click', function (e) {
            $(this).parents('.boxOut-user').find('.box-username').show(20);
            $(this).parents('.boxOut-user').find('.box-lupaPassword').show();
            $(this).parents('.boxOut-user').find('.box-buttonLogin').show();
            $(this).parents('.boxOut-user').find('.box-email').hide(20);
            $(this).parents('.boxOut-user').find('.box-login').hide();
            $(this).parents('.boxOut-user').find('.box-buttonReset').hide();
        });


    });
</script>