<div class="container-fluid">

    <!-- Proggress barr -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Form Pengajuan</h6>
        </div>
        <div class="card-body">
            <h4 class="small font-weight-bold mt-3">Antrian KTP Pemula</h4>
            <div class="row">
                <div class="col-6"><button class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>
                <div class="col-6"><button class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>
            </div>
            <h4 class="small font-weight-bold mt-3">Antrian KTP Hilang</h4>
            <div class="row">
                <div class="col-6"><button class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>
                <div class="col-6"><button class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>
            </div>
            <h4 class="small font-weight-bold mt-3">Antrian KTP Rusak</h4>
            <div class="row">
                <div class="col-6"><button class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>
                <div class="col-6"><button class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#runAntrian').click(function() {
            $.ajax({
                url: '<?= base_url('antrian_bulanan/runApp_antrian'); ?>',
                method: 'GET',
                datatype: 'json',
                success: function(param) {
                    if (param == 1) {
                        Swal.fire("Success", 'Program Antrian Dijalankan', 'success');
                        $('#stopAntrian').show();
                        $('#runAntrian').hide();
                    } else {
                        Swal.fire("Error", 'Setup Antrian Belum Sepenuhnya Terisi Bulan Ini', 'error')
                    }
                }
            });

        });


        $('#stopAntrian').click(function() {
            $.ajax({
                url: '<?= base_url('antrian_bulanan/stopApp_antrian'); ?>',
                method: 'GET',
                datatype: 'json',
                success: function(param) {

                    if (param == 1) {
                        Swal.fire("Success", 'Program Antrian Dihentikan', 'success');
                        $('#stopAntrian').hide();
                        $('#runAntrian').show();
                    } else {
                        Swal.fire("Error", 'Setup Antrian Belum Sepenuhnya Terisi Bulan Ini', 'error')
                    }
                }
            });

        });


        // setInterval(function() {
        //     $("#blink").fadeToggle();
        // }, 1000);
    });
</script>