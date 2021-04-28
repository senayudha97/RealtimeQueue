<style>
    .fixbutton {
        width: 300px;
    }
</style>

<div class="container-fluid">
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <?php if ($data['status'] != 0) : ?>
        <div class="jumbotron">
            <h1 class="display-4">Ooops!</h1>
            <p class="lead">Data ini sudah tidak tersedia.</p>
            <hr class="my-4">
            <p>Jika anda melakukan kesalahan dalam proses verifikasi silahkan hubungi admin.</p>
        </div>
    <?php else : ?>
        <?= $this->session->flashdata('message'); ?>
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        <di class="row">
            <div class="col-lg-12">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="input[nama]" class="form-control" value="<?= $data['nama']; ?>">
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">No HP</label>
                        <div class="col-sm-10">
                            <input type="text" name="input[nohp]" class="form-control" value="<?= $data['nohp']; ?>">
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="input[email]" class="form-control" value="<?= $data['email']; ?>">
                        </div>
                    </div>
                </div>
                <h3>File Upload User</h3>
                <!-- KK Baru -->
                <?php if ($data['jenis'] == 1) : ?>
                    <!-- KK pasangan baru  -->
                    <?php if ($data['pengurusan'] == 1) : ?>
                        <div class="row mb-3 pl-3">
                            <div class="col-sm-3">
                                <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#supeng">Surat Pengantar <span class="fas fa-fw fa-file"></span></button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="supeng" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Preview Surat Pengantar</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <center>
                                                <img class="card-img" src="<?= base_url('file_upload/kk_baru/') . $data['file_surat_pengantar']; ?>" alt="">
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#bunik">Buku Nikah <span class="fas fa-fw fa-file"></span></button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="bunik" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Preview Buku Nikah</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <center>
                                                <img class="card-img" src="<?= base_url('file_upload/kk_baru/') . $data['file_buku_nikah']; ?>" alt="">
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#supin">Surat Pindah <span class="fas fa-fw fa-file"></span></button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="supin" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Preview Surat Pindah</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <center>
                                                <img class="card-img" src="<?= base_url('file_upload/kk_baru/') . $data['file_surat_pindah']; ?>" alt="">
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($data['pengurusan'] == 2) : ?>
                        <div class="row mb-3 pl-3">
                            <div class="col-sm-3">
                                <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#supeng">Surat Pengantar <span class="fas fa-fw fa-file"></span></button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="supeng" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Preview Surat Pengantar</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <center>
                                                <img class="card-img" src="<?= base_url('file_upload/kk_baru/') . $data['file_surat_pengantar']; ?>" alt="">
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 pl-3">
                            <div class="col-sm-3">
                                <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#suhil">Surat Keterangan Hilang <span class="fas fa-fw fa-file"></span></button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="suhil" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Preview Surat Keterangan Hilang</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <center>
                                                <img class="card-img" src="<?= base_url('file_upload/kk_baru/') . $data['file_surat_keterangan_hilang']; ?>" alt="">
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- KK PErubahan -->
                <?php elseif ($data['jenis'] == 2) : ?>
                    <?php if ($data['pengurusan'] == 1) : ?>
                        <div class="row mb-3 pl-3">
                            <div class="col-sm-3">
                                <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#supeng">Surat Pengantar <span class="fas fa-fw fa-file"></span></button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="supeng" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Preview Surat Pengantar</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <center>
                                                <img class="card-img" src="<?= base_url('file_upload/kk_baru/') . $data['file_surat_pengantar']; ?>" alt="">
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#kkalma">KK Lama <span class="fas fa-fw fa-file"></span></button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="kkalma" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Preview KK Lama</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <center>
                                                <img class="card-img" src="<?= base_url('file_upload/kk_baru/') . $data['file_kk_lama']; ?>" alt="">
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#kkalma">KK Lama <span class="fas fa-fw fa-file"></span></button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="kkalma" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Preview KK Lama</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <center>
                                                <img class="card-img" src="<?= base_url('file_upload/kk_baru/') . $data['file_kk_lama']; ?>" alt="">
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($data['pengurusan'] == 2) : ?>
                        <div class="row mb-3 pl-3">
                            <div class="col-sm-4">
                                <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#supeng">Surat Pengantar <span class="fas fa-fw fa-file"></span></button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="supeng" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Preview Surat Pengantar</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <center>
                                                <img class="card-img" src="<?= base_url('file_upload/kk_baru/') . $data['file_surat_pengantar']; ?>" alt="">
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#ketpin">Keterangan Pindah <span class="fas fa-fw fa-file"></span></button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="ketpin" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Preview Keterangan Pindah</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <center>
                                                <img class="card-img" src="<?= base_url('file_upload/kk_baru/') . $data['file_surat_keterangan_pindah']; ?>" alt="">
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#kkalma">KK Lama <span class="fas fa-fw fa-file"></span></button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="kkalma" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Preview KK Lama</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <center>
                                                <img class="card-img" src="<?= base_url('file_upload/kk_baru/') . $data['file_kk_lama']; ?>" alt="">
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 pl-3 mt-3">
                            <?php if (!empty($data['file_surat_keterangan_datang_dari_luar_negri'])) : ?>
                                <div class="col-sm">
                                    <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#sutlur">Surat Keterangan Datang Dari Luar Negeri <span class="fas fa-fw fa-file"></span></button>
                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="sutlur" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Preview Surat Keterangan Datang Dari Luar Negeri</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <center>
                                                    <img class="card-img" src="<?= base_url('file_upload/kk_baru/') . $data['file_surat_keterangan_datang_dari_luar_negri']; ?>" alt="">
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($data['file_paspor_tinggal_tetap'])) : ?>
                                <div class="col-sm">
                                    <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#paspor">Surat Paspor/Izin Tinggal Tetap <span class="fas fa-fw fa-file"></span></button>
                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="paspor" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Preview Surat Paspor/Izin Tinggal Tetap</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <center>
                                                    <img class="card-img" src="<?= base_url('file_upload/kk_baru/') . $data['file_paspor_tinggal_tetap']; ?>" alt="">
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php elseif ($data['pengurusan'] == 3) : ?>
                        <div class="row mb-3 pl-3">
                            <div class="col-sm-4">
                                <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#supeng">Surat Pengantar <span class="fas fa-fw fa-file"></span></button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="supeng" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Preview Surat Pengantar</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <center>
                                                <img class="card-img" src="<?= base_url('file_upload/kk_baru/') . $data['file_surat_pengantar']; ?>" alt="">
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#ketpin">Keterangan Pindah <span class="fas fa-fw fa-file"></span></button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="ketpin" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Preview Keterangan Pindah</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <center>
                                                <img class="card-img" src="<?= base_url('file_upload/kk_baru/') . $data['file_surat_keterangan_pindah']; ?>" alt="">
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#kkalma">KK Lama <span class="fas fa-fw fa-file"></span></button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="kkalma" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Preview KK Lama</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <center>
                                                <img class="card-img" src="<?= base_url('file_upload/kk_baru/') . $data['file_kk_lama']; ?>" alt="">
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mb-3 mt-3 pl-3">
                            <div class="col-sm-3">
                                <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#surkemat">Surat Keterangan Kematian <span class="fas fa-fw fa-file"></span></button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="surkemat" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Preview Surat Keterangan Kematian</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <center>
                                                <img class="card-img" src="<?= base_url('file_upload/kk_baru/') . $data['file_surat_keterangan_kematian']; ?>" alt="">
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                <div class="modal-footer">
                    <button class="text-light btn btn-danger" onclick="tolak()"><span class="fas fa-fw fa-times"></span> Tolak</button>
                    <button class="text-light btn btn-success" onclick="verif()"><span class="fas fa-fw fa-check"></span> Verifikai</button>
                </div>
            </div>
        </di>
</div>
</div>
<script>
    $(".form-control").prop("disabled", true);

    function verif() {

        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Proses verifikasi user ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?= base_url('Verifikasi_antrian_kk/verif/' . $data['id']); ?>";
            }
        })
    }

    function tolak() {
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Proses tolak user ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?= base_url('Verifikasi_antrian_kk/tolak/' . $data['id']); ?>";
            }
        })
    }
</script>
<?php endif; ?>