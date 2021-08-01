<!-- jQuery -->
<script src="../../js/jquery-2.1.4.js"></script>
<!-- Bootstrap -->
<script src="../../js/bootstrap.js"></script>
<!-- NProgress -->
<script src="../../js/download/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="../../js/download/bootstrap-progressbar.js"></script>
<!-- Custom Theme Scripts -->
<script src="../../js/admin.js"></script>
<script>
    $(document).ready(function () {

        $('input,textarea').focus(function () {
            $(this).data('placeholder', $(this).attr('placeholder'))
                    .attr('placeholder', '');
        }).blur(function () {
            $(this).attr('placeholder', $(this).data('placeholder'));
        });

    });
</script>