<style>
    .modal-dialog {
        max-width: 1000px;
        /* New width for default modal */
    }
</style>
<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>

    <!-- Proggress barr -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Form Pengajuan</h6>
        </div>
        <div class="card-body">
            <div class="divider">
                <h4 class="small font-weight-bold mt-3">PENGURUSAN KK HILANG</h4>
                <div class="row">
                    <div class="col-6">
                        <button data-toggle="modal" data-target="#kkhilang" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button>
                    </div>

                    <div class="col-6">
                        <button data-toggle="modal" data-target="#kkhilangupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button>
                    </div>
                </div>
            </div>
            <div class="divider">
                <h4 class="small font-weight-bold mt-3">PENGURUSAN KK RUSAK</h4>
                <div class="row">
                    <div class="col-6">
                        <button data-toggle="modal" data-target="#kkrusak" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button>
                    </div>

                    <div class="col-6">
                        <button data-toggle="modal" data-target="#kkrusakupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button>
                    </div>
                </div>
            </div>
            <div class="divider">
                <h4 class="small font-weight-bold mt-3">PERUBAHAN DATA KK</h4>
                <div class="row">
                    <div class="col-6">
                        <button data-toggle="modal" data-target="#perubahandata" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button>
                    </div>

                    <div class="col-6">
                        <button data-toggle="modal" data-target="#perubahandataupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button>
                    </div>
                </div>
            </div>
            <div class="divider">
                <h4 class="small font-weight-bold mt-3">PECAH KK DALAM 1 DESA</h4>
                <div class="row">
                    <div class="col-6">
                        <button data-toggle="modal" data-target="#pecah1desa" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button>
                    </div>

                    <div class="col-6">
                        <button data-toggle="modal" data-target="#pecah1desaupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button>
                    </div>
                </div>
            </div>
            <div class="divider">
                <h4 class="small font-weight-bold mt-3">PINDAH DESA/KECAMATAN</h4>
                <div class="row">
                    <div class="col-6">
                        <button data-toggle="modal" data-target="#pindahdesa" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button>
                    </div>

                    <div class="col-6">
                        <button data-toggle="modal" data-target="#pindahdesaupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button>
                    </div>
                </div>
            </div>
            <div class="divider">
                <h4 class="small font-weight-bold mt-3">PINDAH KELUAR KOTA</h4>
                <div class="row">
                    <div class="col-6">
                        <button data-toggle="modal" data-target="#pindahkota" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button>
                    </div>

                    <div class="col-6">
                        <button data-toggle="modal" data-target="#pindahkotaupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button>
                    </div>
                </div>
            </div>
            <div class="divider">
                <h4 class="small font-weight-bold mt-3">KEDATANGAN</h4>
                <div class="row">
                    <div class="col-6">
                        <button data-toggle="modal" data-target="#kedatangan" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button>
                    </div>

                    <div class="col-6">
                        <button data-toggle="modal" data-target="#kedatanganupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="bracket">
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="kkhilang" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Preview Form KK Hilang <a href="<?= base_url('file_upload/form_pengajuan/kk/' . $data[0]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <center>
                    <div class="container">
                        <?php if ($data[0]['file'] == '') : ?>
                            <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                        <?php else : ?>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/kk/' . $data[0]['file']); ?>"></iframe>
                            </div> <?php endif; ?>
                    </div>
                </center>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="kkhilangupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Upload Form KK Hilang </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <center>
                    <div class="container mt-5 mb-5">
                        <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                            <input type="hidden" name="upload" value="kkhilang">
                            <input type="hidden" name="key" value="<?= $data[0]['id']; ?>">
                            <input type="hidden" name="file_lama" value="<?= $data[0]['file']; ?>">
                            <input type="file" name="kkhilang" required class="form-control">
                            <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                        </form>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>
<div id="bracket">
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="kkrusak" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Preview Form KK Rusak <a href="<?= base_url('file_upload/form_pengajuan/kk/' . $data[1]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <center>
                    <div class="container">
                        <?php if ($data[1]['file'] == '') : ?>
                            <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                        <?php else : ?>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/kk/' . $data[1]['file']); ?>"></iframe>
                            </div> <?php endif; ?>
                    </div>
                </center>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="kkrusakupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Upload Form KK Rusak </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <center>
                    <div class="container mt-5 mb-5">
                        <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                            <input type="hidden" name="upload" value="kkrusak">
                            <input type="hidden" name="key" value="<?= $data[1]['id']; ?>">
                            <input type="hidden" name="file_lama" value="<?= $data[0]['file']; ?>">
                            <input type="file" name="kkrusak" required class="form-control">
                            <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                        </form>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>

<div id="bracket">
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="perubahandata" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Preview Form KK Perubahan Data <a href="<?= base_url('file_upload/form_pengajuan/kk/' . $data[2]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <center>
                    <div class="container">
                        <?php if ($data[2]['file'] == '') : ?>
                            <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                        <?php else : ?>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/kk/' . $data[2]['file']); ?>"></iframe>
                            </div> <?php endif; ?>
                    </div>
                </center>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="perubahandataupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Upload Form KK Perubahan Data </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <center>
                    <div class="container mt-5 mb-5">
                        <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                            <input type="hidden" name="upload" value="perubahandata">
                            <input type="hidden" name="key" value="<?= $data[0]['id']; ?>">
                            <input type="hidden" name="file_lama" value="<?= $data[0]['file']; ?>">
                            <input type="file" name="perubahandata" required class="form-control">
                            <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                        </form>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>

<div id="bracket">
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="pecah1desa" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Preview Form Pecah KK dalam 1 Desa <a href="<?= base_url('file_upload/form_pengajuan/kk/' . $data[3]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <center>
                    <div class="container">
                        <?php if ($data[3]['file'] == '') : ?>
                            <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                        <?php else : ?>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/kk/' . $data[3]['file']); ?>"></iframe>
                            </div> <?php endif; ?>
                    </div>
                </center>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="pecah1desaupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Upload Form Pecah KK dalam 1 Desa </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <center>
                    <div class="container mt-5 mb-5">
                        <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                            <input type="hidden" name="upload" value="pecah1desa">
                            <input type="hidden" name="key" value="<?= $data[0]['id']; ?>">
                            <input type="hidden" name="file_lama" value="<?= $data[0]['file']; ?>">
                            <input type="file" name="pecah1desa" required class="form-control">
                            <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                        </form>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>

<div id="bracket">
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="pindahdesa" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Preview Form Pindah Desa/Kecamatan <a href="<?= base_url('file_upload/form_pengajuan/kk/' . $data[4]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <center>
                    <div class="container">
                        <?php if ($data[4]['file'] == '') : ?>
                            <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                        <?php else : ?>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/kk/' . $data[4]['file']); ?>"></iframe>
                            </div> <?php endif; ?>
                    </div>
                </center>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="pindahdesaupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Upload Form Pindah Desa/Kecamatan </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <center>
                    <div class="container mt-5 mb-5">
                        <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                            <input type="hidden" name="upload" value="pindahdesa">
                            <input type="hidden" name="key" value="<?= $data[0]['id']; ?>">
                            <input type="hidden" name="file_lama" value="<?= $data[0]['file']; ?>">
                            <input type="file" name="pindahdesa" required class="form-control">
                            <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                        </form>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>

<div id="bracket">
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="pindahkota" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Preview Form Pindah Kota <a href="<?= base_url('file_upload/form_pengajuan/kk/' . $data[5]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <center>
                    <div class="container">
                        <?php if ($data[5]['file'] == '') : ?>
                            <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                        <?php else : ?>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/kk/' . $data[5]['file']); ?>"></iframe>
                            </div> <?php endif; ?>
                    </div>
                </center>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="pindahkotaupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Upload Form Pindah Kota </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <center>
                    <div class="container mt-5 mb-5">
                        <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                            <input type="hidden" name="upload" value="pindahkota">
                            <input type="hidden" name="key" value="<?= $data[0]['id']; ?>">
                            <input type="hidden" name="file_lama" value="<?= $data[0]['file']; ?>">
                            <input type="file" name="pindahkota" required class="form-control">
                            <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                        </form>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>

<div id="bracket">
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="kedatangan" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Preview Form Kedatangan <a href="<?= base_url('file_upload/form_pengajuan/kk/' . $data[6]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <center>
                    <div class="container">
                        <?php if ($data[6]['file'] == '') : ?>
                            <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                        <?php else : ?>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/kk/' . $data[6]['file']); ?>"></iframe>
                            </div> <?php endif; ?>
                    </div>
                </center>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="kedatanganupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Upload Form Kedatangan </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <center>
                    <div class="container mt-5 mb-5">
                        <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                            <input type="hidden" name="upload" value="kedatangan">
                            <input type="hidden" name="key" value="<?= $data[0]['id']; ?>">
                            <input type="hidden" name="file_lama" value="<?= $data[0]['file']; ?>">
                            <input type="file" name="kedatangan" required class="form-control">
                            <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                        </form>
                    </div>
                </center>
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