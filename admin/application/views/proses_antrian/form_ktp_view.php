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
            <h4 class="small font-weight-bold mt-3">Antrian KTP Pemula</h4>
            <div class="row">
                <div class="col-6"><button data-toggle="modal" data-target="#pemula" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>

                <div class="col-6"><button data-toggle="modal" data-target="#pemulaupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>

            </div>
            <h4 class="small font-weight-bold mt-3">Antrian KTP Hilang</h4>
            <div class="row">
                <div class="col-6"><button data-toggle="modal" data-target="#hilang" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>

                <div class="col-6"><button data-toggle="modal" data-target="#hilangupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>

            </div>
            <h4 class="small font-weight-bold mt-3">Antrian KTP Rusak</h4>
            <div class="row">
                <div class="col-6"><button data-toggle="modal" data-target="#rusak" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>

                <div class="col-6"><button data-toggle="modal" data-target="#rusakupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>

            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="pemula" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Preview Form KTP Pemula
                        <?php if ($data[0]['file'] != '') : ?>
                            <a href="<?= base_url('file_upload/form_pengajuan/ktp/' . $data[0]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a>
                        <?php endif; ?>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <center>
                    <div class="container">
                        <?php if ($data[0]['file'] == '') : ?>
                            <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                        <?php else : ?>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/ktp/' . $data[0]['file']); ?>"></iframe>
                            </div> <?php endif; ?>
                    </div>
                </center>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="pemulaupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Upload Form KTP Pemula </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <center>
                    <div class="container mt-5 mb-5">
                        <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                            <input type="hidden" name="upload" value="pemula">
                            <input type="hidden" name="key" value="<?= $data[0]['id']; ?>">
                            <input type="hidden" name="file_lama" value="<?= $data[0]['file']; ?>">
                            <input type="file" name="ktp_pemula" required class="form-control">
                            <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                        </form>
                    </div>
                </center>
            </div>
        </div>
    </div>



    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="hilang" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Preview Form KTP Hilang
                        <?php if ($data[1]['file'] != '') : ?>
                            <a href="<?= base_url('file_upload/form_pengajuan/ktp/' . $data[1]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a>
                        <?php endif; ?>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <center>
                    <div class="container">
                        <?php if ($data[1]['file'] == '') : ?>
                            <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                        <?php else : ?>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe style="height: 1000px;" class="embed-responsive-item" allowfullscreen src="<?= base_url('file_upload/form_pengajuan/ktp/' . $data[1]['file']); ?>"></iframe>
                            </div>
                        <?php endif; ?>
                    </div>
                </center>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="hilangupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Upload Form KTP Hilang </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <center>
                    <div class="container mt-5 mb-5">
                        <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                            <input type="hidden" name="upload" value="hilang">
                            <input type="hidden" name="key" value="<?= $data[1]['id']; ?>">
                            <input type="hidden" name="file_lama" value="<?= $data[1]['file']; ?>">
                            <input type="file" name="ktp_hilang" required class="form-control">
                            <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                        </form>
                    </div>
                </center>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="rusak" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Preview Form KTP Rusak
                        <?php if ($data[2]['file'] != '') : ?>
                            <a href="<?= base_url('file_upload/form_pengajuan/ktp/' . $data[2]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a>
                        <?php endif; ?>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <center>
                    <div class="container">
                        <?php if ($data[2]['file'] == '') : ?>
                            <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                        <?php else : ?>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe style="height: 1000px;" class="embed-responsive-item" allowfullscreen src="<?= base_url('file_upload/form_pengajuan/ktp/' . $data[2]['file']); ?>"></iframe>
                            </div>
                        <?php endif; ?>
                    </div>
                </center>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="rusakupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Upload Form KTP Rusak </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <center>
                    <div class="container mt-5 mb-5">
                        <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                            <input type="hidden" name="upload" value="rusak">
                            <input type="hidden" name="key" value="<?= $data[2]['id']; ?>">
                            <input type="hidden" name="file_lama" value="<?= $data[2]['file']; ?>">
                            <input type="file" name="ktp_rusak" required class="form-control">
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
        // Swal.fire(
        //     'Good job!',
        //     'You clicked the button!',
        //     'success'
        // )

    });
</script>