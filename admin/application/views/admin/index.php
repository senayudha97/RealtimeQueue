<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-3">
            <button id="runAntrian" class="btn btn-danger"><i class="fas fa-play"></i>&nbsp; Jalankan Program Antrian</button>
            <button id="stopAntrian" class="btn btn-danger"><i class="fas fa-stop"></i>&nbsp; Hentikan Program Antrian</button>
            <?php if ($status['status'] == 0) : ?>
                <script>
                    $('#stopAntrian').hide();
                </script>
            <?php else : ?>
                <script>
                    $('#runAntrian').hide();
                </script>
            <?php endif; ?>

            <script>
                setInterval(() => {
                    $.ajax({              
                        url: '<?= base_url('Rest_api/statusAntrian/2a734c44a3a1cd46dd54450a0dab6ecc'); ?>',
                        method: 'GET',
                        datatype: 'json',
                        success: function(status) {
                            if (status == 0) {
                                $('#stopAntrian').hide();
                                $('#runAntrian').show();
                            } else {
                                $('#runAntrian').hide();
                                $('#stopAntrian').show();
                            }
                        }
                    });
                }, 1000);
            </script>
        </div>
        <div class="col-9 bg-info" style="border-radius: 5px;">
            <div class="text-light mt-1" id="blink">
                <marquee behavior="" direction="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus maxime mollitia, quo, facilis iusto similique amet placeat in nihil, rerum inventore ea laudantium et debitis odit ipsum esse reprehenderit sint?</marquee>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Siducakpil</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <a href="#" class="font-weight-bold text-gray-800">Klik Disini</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">App Antrian</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <a href="#" class="font-weight-bold text-gray-800">Klik Disini</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">App Scan Barcode</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <a href="#" class="font-weight-bold text-gray-800">Klik Disini</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-qrcode fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">App Email</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <a href="#" class="font-weight-bold text-gray-800">Klik Disini</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-envelope fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Proggress barr -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Progress Bar</h6>
        </div>
        <div class="card-body">
            <h4 class="small font-weight-bold">Server Migration <span class="float-right">0%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">0%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Customer Database <span class="float-right">0%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Payout Details <span class="float-right">0%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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