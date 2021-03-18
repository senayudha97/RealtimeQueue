<!-- Footer -->
<footer id="footer" class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Design By <a href="https://github.com/senayudha97" target="_blank" class="text-danger">Sena Yudha</a></span>
        </div>
    </div>
</footer>
<!-- Flexbox container for aligning the toasts -->


<!-- <style>
    #footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 2.5rem;
        /* Footer height */
    }
</style> -->
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<button id="sidebarToggleTop" class="scroll-to-top rounded d-md-none rounded-circle mr-5">
    <i class="fa fa-bars"></i>
</button>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin logout ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Tekan tombol berwarna biru untuk konfirmasi logout</div>
            <div class="modal-footer">
                <button class="btn btn-secondary " type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger " href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Init data suhu -->

<!-- Init JS -->
<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }

    $('.easydatepicker').datetimepicker({
        timepicker: false,
        datepicker: true,
        format: 'd-m-Y',
        weeks: false
    });
    $('.easydatepicker').ready(function() {
        $(".easydatepicker").attr("placeholder", "Klik untuk input tanggal");
        $('.easydatepicker').attr('readonly', true);
    });

    $('.easytimepicker').datetimepicker({
        timepicker: true,
        datepicker: false,
        format: 'H:i',
        hours12: false,
        step: 5
    });

    $('.easytimepicker').ready(function() {
        $(".easytimepicker").attr("placeholder", "Klik untuk input waktu");
        $('.easytimepicker').attr('readonly', true);
    });

    $('.easydatetimepicker').datetimepicker({
        timepicker: true,
        datepicker: true,
        format: 'd-m-Y H:i',
        hours12: false,
    });
    $('.easydatetimepicker').ready(function() {
        $(".easydatetimepicker").attr("placeholder", "Klik untuk input waktu dan tanggal");
        $('.easydatetimepicker').attr('readonly', true);
    });

    //Untuk Menampilkan Format waktu saja gunakan class "getTime"
    setInterval(
        function DisplayTime() {
            var CurrentDate = new Date();
            var hours = CurrentDate.getHours();
            var minutes = CurrentDate.getMinutes();
            var seconds = CurrentDate.getSeconds();


            if (hours === 0) hours = 12;
            if (minutes <= 9) minutes = "0" + minutes;
            if (seconds <= 9) seconds = "0" + seconds;
            var currentTime = hours + ":" + minutes + ":" + seconds + " ";
            $('.getTime').val(currentTime);
        }, 1000);

    //Untuk Menampilkan Format tanggal waktu gunakan class "getDatetime"
    setInterval(
        function DisplayTime() {
            const o_date = new Intl.DateTimeFormat;
            const f_date = (m_ca, m_it) => Object({
                ...m_ca,
                [m_it.type]: m_it.value
            });
            const m_date = o_date.formatToParts().reduce(f_date, {});

            var CurrentDate2 = new Date();
            var hours = CurrentDate2.getHours();
            var minutes = CurrentDate2.getMinutes();
            var seconds = CurrentDate2.getSeconds();


            if (hours === 0) hours = 12;
            if (minutes <= 9) minutes = "0" + minutes;
            if (seconds <= 9) seconds = "0" + seconds;
            var currentTime = hours + ":" + minutes + ":" + seconds + " ";
            $('.getDatetime').val(m_date.day + '-' + m_date.month + '-' + m_date.year + ' ' + currentTime);
        }, 1000);

    $('#hidden_field').hide();
</script>

<!-- Datetime Picker -->
<script src="<?= base_url('assets/vendor/datetimepicker/jquery.datetimepicker.full.js'); ?>"></script>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<!-- <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script> -->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.js"></script>

<!-- Data Tables -->
<script type="text/javascript" src="<?= base_url('vendor/datatables/datatables.min.js'); ?>"></script>

<!-- Sweet Alert -->
<script src="<?= base_url('vendor/sweetalert/sweetalert2.all.min.js'); ?>"></script>




</body>
<script>

</script>

</html>