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
            <div class="group-divider">
                <h3 class="mt-3">AKTA KELAHIRAN</h3>
                <hr>
                <div class="divider">
                    <h4 class="small font-weight-bold mt-3">AKTA KELAHIRAN BARU</h4>
                    <div class="row">
                        <div class="col-6"><button data-toggle="modal" data-target="#akta_kelahiran_baru" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>

                        <div class="col-6"><button data-toggle="modal" data-target="#akta_kelahiran_baruupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>

                    </div>
                </div>
                <div class="divider">
                    <h4 class="small font-weight-bold mt-3">AKTA KELAHIRAN HILANG</h4>
                    <div class="row">
                        <div class="col-6"><button data-toggle="modal" data-target="#akta_kelahiran_hilang" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>

                        <div class="col-6"><button data-toggle="modal" data-target="#akta_kelahiran_hilangupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>

                    </div>
                </div>
                <div class="divider">
                    <h4 class="small font-weight-bold mt-3">AKTA KELAHIRAN RUSAK</h4>
                    <div class="row">
                        <div class="col-6"><button data-toggle="modal" data-target="#akta_kelahiran_rusak" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>

                        <div class="col-6"><button data-toggle="modal" data-target="#akta_kelahiran_rusakupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>

                    </div>
                </div>
                <div class="divider">
                    <h4 class="small font-weight-bold mt-3">AKTA KELAHIRAN PEMBARUAN</h4>
                    <div class="row">
                        <div class="col-6"><button data-toggle="modal" data-target="#akta_kelahiran_pembaruan" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>

                        <div class="col-6"><button data-toggle="modal" data-target="#akta_kelahiran_pembaruanupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>

                    </div>
                </div>
            </div>
            <div class="group-divider">
                <h3 class="mt-3">AKTA KEMATIAN</h3>
                <hr>
                <div class="divider">
                    <h4 class="small font-weight-bold mt-3">AKTA KEMATIAN BARU</h4>
                    <div class="row">
                        <div class="col-6"><button data-toggle="modal" data-target="#akta_kematian_baru" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>

                        <div class="col-6"><button data-toggle="modal" data-target="#akta_kematian_baruupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>

                    </div>
                </div>
                <div class="divider">
                    <h4 class="small font-weight-bold mt-3">AKTA KEMATIAN HILANG</h4>
                    <div class="row">
                        <div class="col-6"><button data-toggle="modal" data-target="#akta_kematian_hilang" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>

                        <div class="col-6"><button data-toggle="modal" data-target="#akta_kematian_hilangupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>

                    </div>
                </div>
                <div class="divider">
                    <h4 class="small font-weight-bold mt-3">AKTA KEMATIAN RUSAK</h4>
                    <div class="row">
                        <div class="col-6"><button data-toggle="modal" data-target="#akta_kematian_rusak" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>

                        <div class="col-6"><button data-toggle="modal" data-target="#akta_kematian_rusakupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>

                    </div>
                </div>
                <div class="divider">
                    <h4 class="small font-weight-bold mt-3">AKTA KEMATIAN PEMBARUAN</h4>
                    <div class="row">
                        <div class="col-6"><button data-toggle="modal" data-target="#akta_kematian_pembaruan" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>

                        <div class="col-6"><button data-toggle="modal" data-target="#akta_kematian_pembaruanupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>

                    </div>
                </div>
            </div>
            <div class="group-divider">
                <h3 class="mt-3">AKTA PERKAWINAN</h3>
                <hr>

                <div class="divider">
                    <h4 class="small font-weight-bold mt-3">AKTA PERKAWINAN BARU</h4>
                    <div class="row">
                        <div class="col-6"><button data-toggle="modal" data-target="#akta_perkawinan_baru" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>

                        <div class="col-6"><button data-toggle="modal" data-target="#akta_perkawinan_baruupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>

                    </div>
                </div>
                <div class="divider">
                    <h4 class="small font-weight-bold mt-3">AKTA PERKAWINAN HILANG</h4>
                    <div class="row">
                        <div class="col-6"><button data-toggle="modal" data-target="#akta_perkawinan_hilang" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>

                        <div class="col-6"><button data-toggle="modal" data-target="#akta_perkawinan_hilangupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>

                    </div>
                </div>
                <div class="divider">
                    <h4 class="small font-weight-bold mt-3">AKTA PERKAWINAN RUSAK</h4>
                    <div class="row">
                        <div class="col-6"><button data-toggle="modal" data-target="#akta_perkawinan_rusak" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>

                        <div class="col-6"><button data-toggle="modal" data-target="#akta_perkawinan_rusakupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>

                    </div>
                </div>
                <div class="divider">
                    <h4 class="small font-weight-bold mt-3">AKTA PERKAWINAN PEMBARUAN</h4>
                    <div class="row">
                        <div class="col-6"><button data-toggle="modal" data-target="#akta_perkawinan_pembaruan" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>

                        <div class="col-6"><button data-toggle="modal" data-target="#akta_perkawinan_pembaruanupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>

                    </div>
                </div>
            </div>
            <div class="group-divider">
                <h3 class="mt-3">AKTA PERKAWINAN</h3>
                <hr>

                <div class="divider">
                    <h4 class="small font-weight-bold mt-3">AKTA PERCERAIAN BARU</h4>
                    <div class="row">
                        <div class="col-6"><button data-toggle="modal" data-target="#akta_perceraian_baru" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>

                        <div class="col-6"><button data-toggle="modal" data-target="#akta_perceraian_baruupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>

                    </div>
                </div>
                <div class="divider">
                    <h4 class="small font-weight-bold mt-3">AKTA PERCERAIAN HILANG</h4>
                    <div class="row">
                        <div class="col-6"><button data-toggle="modal" data-target="#akta_perceraian_hilang" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>

                        <div class="col-6"><button data-toggle="modal" data-target="#akta_perceraian_hilangupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>

                    </div>
                </div>
                <div class="divider">
                    <h4 class="small font-weight-bold mt-3">AKTA PERCERAIAN RUSAK</h4>
                    <div class="row">
                        <div class="col-6"><button data-toggle="modal" data-target="#akta_perceraian_rusak" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>

                        <div class="col-6"><button data-toggle="modal" data-target="#akta_perceraian_rusakupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>

                    </div>
                </div>
                <div class="divider">
                    <h4 class="small font-weight-bold mt-3">AKTA PERCERAIAN PEMBARUAN</h4>
                    <div class="row">
                        <div class="col-6"><button data-toggle="modal" data-target="#akta_perceraian_pembaruan" class="btn btn-info btn-block">Lihat Form Saat Ini <span class="fas fa-fw fa-search"></span></button></div>

                        <div class="col-6"><button data-toggle="modal" data-target="#akta_perceraian_pembaruanupload" class="btn btn-warning btn-block">Perbarui File Upload Saat Ini <span class="fas fa-fw fa-upload"></span></button></div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Modal -->
<div id="groupmodal">
    <div id="bracket">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_kelahiran_baru" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Preview AKTA KELAHIRAN BARU
                            <?php if ($data[0]['file'] != '') : ?>
                                <a href="<?= base_url('file_upload/form_pengajuan/akta/' . $data[0]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a>
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
                                    <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/akta/' . $data[0]['file']); ?>"></iframe>
                                </div> <?php endif; ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_kelahiran_baruupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Form AKTA KELAHIRAN BARU </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container mt-5 mb-5">
                            <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                                <input type="hidden" name="upload" value="akta_kelahiran_baru">
                                <input type="hidden" name="key" value="<?= $data[0]['id']; ?>">
                                <input type="hidden" name="file_lama" value="<?= $data[0]['file']; ?>">
                                <input type="file" name="akta_kelahiran_baru" required class="form-control">
                                <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div id="bracket">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_kelahiran_hilang" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Preview AKTA KELAHIRAN HILANG
                            <?php if ($data[1]['file'] != '') : ?>
                                <a href="<?= base_url('file_upload/form_pengajuan/akta/' . $data[1]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a>
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
                                    <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/akta/' . $data[1]['file']); ?>"></iframe>
                                </div> <?php endif; ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_kelahiran_hilangupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Form AKTA KELAHIRAN HILANG </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container mt-5 mb-5">
                            <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                                <input type="hidden" name="upload" value="akta_kelahiran_hilang">
                                <input type="hidden" name="key" value="<?= $data[1]['id']; ?>">
                                <input type="hidden" name="file_lama" value="<?= $data[1]['file']; ?>">
                                <input type="file" name="akta_kelahiran_hilang" required class="form-control">
                                <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div id="bracket">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_kelahiran_rusak" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Preview AKTA KELAHIRAN RUSAK
                            <?php if ($data[2]['file'] != '') : ?>
                                <a href="<?= base_url('file_upload/form_pengajuan/akta/' . $data[2]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a>
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
                                    <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/akta/' . $data[2]['file']); ?>"></iframe>
                                </div> <?php endif; ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_kelahiran_rusakupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Form AKTA KELAHIRAN RUSAK </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container mt-5 mb-5">
                            <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                                <input type="hidden" name="upload" value="akta_kelahiran_rusak">
                                <input type="hidden" name="key" value="<?= $data[2]['id']; ?>">
                                <input type="hidden" name="file_lama" value="<?= $data[2]['file']; ?>">
                                <input type="file" name="akta_kelahiran_rusak" required class="form-control">
                                <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div id="bracket">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_kelahiran_pembaruan" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Preview AKTA KELAHIRAN PEMBARUAN
                            <?php if ($data[3]['file'] != '') : ?>
                                <a href="<?= base_url('file_upload/form_pengajuan/akta/' . $data[3]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a>
                            <?php endif; ?>
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container">
                            <?php if ($data[3]['file'] == '') : ?>
                                <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                            <?php else : ?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/akta/' . $data[3]['file']); ?>"></iframe>
                                </div> <?php endif; ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_kelahiran_pembaruanupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Form AKTA KELAHIRAN PEMBARUAN </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container mt-5 mb-5">
                            <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                                <input type="hidden" name="upload" value="akta_kelahiran_pembaruan">
                                <input type="hidden" name="key" value="<?= $data[3]['id']; ?>">
                                <input type="hidden" name="file_lama" value="<?= $data[3]['file']; ?>">
                                <input type="file" name="akta_kelahiran_pembaruan" required class="form-control">
                                <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div id="bracket">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_kematian_baru" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Preview AKTA KEMATIAN BARU
                            <?php if ($data[4]['file'] != '') : ?>
                                <a href="<?= base_url('file_upload/form_pengajuan/akta/' . $data[4]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a>
                            <?php endif; ?>
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container">
                            <?php if ($data[4]['file'] == '') : ?>
                                <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                            <?php else : ?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/akta/' . $data[4]['file']); ?>"></iframe>
                                </div> <?php endif; ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_kematian_baruupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Form AKTA KEMATIAN BARU </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container mt-5 mb-5">
                            <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                                <input type="hidden" name="upload" value="akta_kematian_baru">
                                <input type="hidden" name="key" value="<?= $data[4]['id']; ?>">
                                <input type="hidden" name="file_lama" value="<?= $data[4]['file']; ?>">
                                <input type="file" name="akta_kematian_baru" required class="form-control">
                                <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div id="bracket">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_kematian_hilang" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Preview AKTA KEMATIAN HILANG
                            <?php if ($data[5]['file'] != '') : ?>
                                <a href="<?= base_url('file_upload/form_pengajuan/akta/' . $data[5]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a>
                            <?php endif; ?>
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container">
                            <?php if ($data[5]['file'] == '') : ?>
                                <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                            <?php else : ?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/akta/' . $data[5]['file']); ?>"></iframe>
                                </div> <?php endif; ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_kematian_hilangupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Form AKTA KEMATIAN HILANG </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container mt-5 mb-5">
                            <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                                <input type="hidden" name="upload" value="akta_kematian_hilang">
                                <input type="hidden" name="key" value="<?= $data[5]['id']; ?>">
                                <input type="hidden" name="file_lama" value="<?= $data[5]['file']; ?>">
                                <input type="file" name="akta_kematian_hilang" required class="form-control">
                                <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div id="bracket">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_kematian_rusak" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Preview AKTA KEMATIAN RUSAK
                            <?php if ($data[6]['file'] != '') : ?>
                                <a href="<?= base_url('file_upload/form_pengajuan/akta/' . $data[6]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a>
                            <?php endif; ?>
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container">
                            <?php if ($data[6]['file'] == '') : ?>
                                <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                            <?php else : ?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/akta/' . $data[6]['file']); ?>"></iframe>
                                </div> <?php endif; ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_kematian_rusakupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Form AKTA KEMATIAN RUSAK </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container mt-5 mb-5">
                            <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                                <input type="hidden" name="upload" value="akta_kematian_rusak">
                                <input type="hidden" name="key" value="<?= $data[6]['id']; ?>">
                                <input type="hidden" name="file_lama" value="<?= $data[6]['file']; ?>">
                                <input type="file" name="akta_kematian_rusak" required class="form-control">
                                <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div id="bracket">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_kematian_pembaruan" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Preview AKTA KEMATIAN PEMBARUAN
                            <?php if ($data[7]['file'] != '') : ?>
                                <a href="<?= base_url('file_upload/form_pengajuan/akta/' . $data[7]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a>
                            <?php endif; ?>
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container">
                            <?php if ($data[7]['file'] == '') : ?>
                                <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                            <?php else : ?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/akta/' . $data[7]['file']); ?>"></iframe>
                                </div> <?php endif; ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_kematian_pembaruanupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Form AKTA KEMATIAN PEMBARUAN </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container mt-5 mb-5">
                            <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                                <input type="hidden" name="upload" value="akta_kematian_pembaruan">
                                <input type="hidden" name="key" value="<?= $data[7]['id']; ?>">
                                <input type="hidden" name="file_lama" value="<?= $data[7]['file']; ?>">
                                <input type="file" name="akta_kematian_pembaruan" required class="form-control">
                                <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div id="bracket">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_perkawinan_baru" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Preview AKTA PERKAWINAN BARU
                            <?php if ($data[8]['file'] != '') : ?>
                                <a href="<?= base_url('file_upload/form_pengajuan/akta/' . $data[8]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a>
                            <?php endif; ?>
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container">
                            <?php if ($data[8]['file'] == '') : ?>
                                <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                            <?php else : ?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/akta/' . $data[8]['file']); ?>"></iframe>
                                </div> <?php endif; ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_perkawinan_baruupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Form AKTA PERKAWINAN BARU </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container mt-5 mb-5">
                            <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                                <input type="hidden" name="upload" value="akta_perkawinan_baru">
                                <input type="hidden" name="key" value="<?= $data[8]['id']; ?>">
                                <input type="hidden" name="file_lama" value="<?= $data[8]['file']; ?>">
                                <input type="file" name="akta_perkawinan_baru" required class="form-control">
                                <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div id="bracket">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_perkawinan_hilang" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Preview AKTA PERKAWINAN HILANG
                            <?php if ($data[9]['file'] != '') : ?>
                                <a href="<?= base_url('file_upload/form_pengajuan/akta/' . $data[9]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a>
                            <?php endif; ?>
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container">
                            <?php if ($data[9]['file'] == '') : ?>
                                <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                            <?php else : ?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/akta/' . $data[9]['file']); ?>"></iframe>
                                </div> <?php endif; ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_perkawinan_hilangupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Form AKTA PERKAWINAN HILANG </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container mt-5 mb-5">
                            <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                                <input type="hidden" name="upload" value="akta_perkawinan_hilang">
                                <input type="hidden" name="key" value="<?= $data[9]['id']; ?>">
                                <input type="hidden" name="file_lama" value="<?= $data[9]['file']; ?>">
                                <input type="file" name="akta_perkawinan_hilang" required class="form-control">
                                <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div id="bracket">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_perkawinan_rusak" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Preview AKTA PERKAWINAN RUSAK
                            <?php if ($data[10]['file'] != '') : ?>
                                <a href="<?= base_url('file_upload/form_pengajuan/akta/' . $data[10]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a>
                            <?php endif; ?>
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container">
                            <?php if ($data[10]['file'] == '') : ?>
                                <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                            <?php else : ?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/akta/' . $data[10]['file']); ?>"></iframe>
                                </div> <?php endif; ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_perkawinan_rusakupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Form AKTA PERKAWINAN RUSAK </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container mt-5 mb-5">
                            <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                                <input type="hidden" name="upload" value="akta_perkawinan_rusak">
                                <input type="hidden" name="key" value="<?= $data[10]['id']; ?>">
                                <input type="hidden" name="file_lama" value="<?= $data[10]['file']; ?>">
                                <input type="file" name="akta_perkawinan_rusak" required class="form-control">
                                <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div id="bracket">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_perkawinan_pembaruan" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Preview AKTA PERKAWINAN PEMBARUAN
                            <?php if ($data[11]['file'] != '') : ?>
                                <a href="<?= base_url('file_upload/form_pengajuan/akta/' . $data[11]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a>
                            <?php endif; ?>
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container">
                            <?php if ($data[11]['file'] == '') : ?>
                                <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                            <?php else : ?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/akta/' . $data[11]['file']); ?>"></iframe>
                                </div> <?php endif; ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_perkawinan_pembaruanupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Form AKTA PERKAWINAN PEMBARUAN </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container mt-5 mb-5">
                            <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                                <input type="hidden" name="upload" value="akta_perkawinan_pembaruan">
                                <input type="hidden" name="key" value="<?= $data[11]['id']; ?>">
                                <input type="hidden" name="file_lama" value="<?= $data[11]['file']; ?>">
                                <input type="file" name="akta_perkawinan_pembaruan" required class="form-control">
                                <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div id="bracket">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_perceraian_baru" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Preview AKTA PERCERAIAN BARU
                            <?php if ($data[12]['file'] != '') : ?>
                                <a href="<?= base_url('file_upload/form_pengajuan/akta/' . $data[12]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a>
                            <?php endif; ?>
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container">
                            <?php if ($data[12]['file'] == '') : ?>
                                <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                            <?php else : ?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/akta/' . $data[12]['file']); ?>"></iframe>
                                </div> <?php endif; ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_perceraian_baruupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Form AKTA PERCERAIAN BARU </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container mt-5 mb-5">
                            <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                                <input type="hidden" name="upload" value="akta_perceraian_baru">
                                <input type="hidden" name="key" value="<?= $data[12]['id']; ?>">
                                <input type="hidden" name="file_lama" value="<?= $data[12]['file']; ?>">
                                <input type="file" name="akta_perceraian_baru" required class="form-control">
                                <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div id="bracket">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_perceraian_hilang" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Preview AKTA PERCERAIAN HILANG
                            <?php if ($data[13]['file'] != '') : ?>
                                <a href="<?= base_url('file_upload/form_pengajuan/akta/' . $data[13]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a>
                            <?php endif; ?>
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container">
                            <?php if ($data[13]['file'] == '') : ?>
                                <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                            <?php else : ?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/akta/' . $data[13]['file']); ?>"></iframe>
                                </div> <?php endif; ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_perceraian_hilangupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Form AKTA PERCERAIAN HILANG </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container mt-5 mb-5">
                            <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                                <input type="hidden" name="upload" value="akta_perceraian_hilang">
                                <input type="hidden" name="key" value="<?= $data[13]['id']; ?>">
                                <input type="hidden" name="file_lama" value="<?= $data[13]['file']; ?>">
                                <input type="file" name="akta_perceraian_hilang" required class="form-control">
                                <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div id="bracket">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_perceraian_rusak" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Preview AKTA PERCERAIAN RUSAK
                            <?php if ($data[14]['file'] != '') : ?>
                                <a href="<?= base_url('file_upload/form_pengajuan/akta/' . $data[14]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a>
                            <?php endif; ?>
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container">
                            <?php if ($data[14]['file'] == '') : ?>
                                <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                            <?php else : ?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/akta/' . $data[14]['file']); ?>"></iframe>
                                </div> <?php endif; ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_perceraian_rusakupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Form AKTA PERCERAIAN RUSAK </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container mt-5 mb-5">
                            <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                                <input type="hidden" name="upload" value="akta_perceraian_rusak">
                                <input type="hidden" name="key" value="<?= $data[14]['id']; ?>">
                                <input type="hidden" name="file_lama" value="<?= $data[14]['file']; ?>">
                                <input type="file" name="akta_perceraian_rusak" required class="form-control">
                                <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div id="bracket">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_perceraian_pembaruan" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Preview AKTA PERCERAIAN PEMBARUAN
                            <?php if ($data[15]['file'] != '') : ?>
                                <a href="<?= base_url('file_upload/form_pengajuan/akta/' . $data[15]['file']); ?>" target="_blank" class="btn btn-success">Buka Full Screen</a>
                            <?php endif; ?>
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container">
                            <?php if ($data[15]['file'] == '') : ?>
                                <h1>Tidak pernah dilakukan upload form sebelumnya</h1>
                            <?php else : ?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?= base_url('file_upload/form_pengajuan/akta/' . $data[15]['file']); ?>"></iframe>
                                </div> <?php endif; ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta_perceraian_pembaruanupload" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Form AKTA PERCERAIAN PEMBARUAN </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <center>
                        <div class="container mt-5 mb-5">
                            <form method="POST" enctype="multipart/form-data" action="<?= base_url($this->controller_dir . '/edit'); ?>">
                                <input type="hidden" name="upload" value="akta_perceraian_pembaruan">
                                <input type="hidden" name="key" value="<?= $data[15]['id']; ?>">
                                <input type="hidden" name="file_lama" value="<?= $data[15]['file']; ?>">
                                <input type="file" name="akta_perceraian_pembaruan" required class="form-control">
                                <button type="submit" class="btn btn-block btn-success mt-3">UPLOAD <span class="fas fa-fw fa-upload"></span></button>
                            </form>
                        </div>
                    </center>
                </div>
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