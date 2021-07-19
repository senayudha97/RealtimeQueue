<style>
    .fixbutton {
        width: 300px;
    }
</style>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->

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
                <div class="file-upload">
                    <div class="row mb-3 pl-3">
                        <div class="col-sm-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#surat_kelahiran">Surat Keterangan Perkawinan <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="surat_kelahiran" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview Surat Keterangan Perkawinan dari Pengadilan Agama</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_surat_keterangan_perkawinan_agama']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_surat_keterangan_perkawinan_agama">Akta Kelahiran <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_surat_keterangan_perkawinan_agama" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview Akta Kelahiran</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_surat_keterangan_perkawinan_agama']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_surat_keterangan_perkawinan_desa">Surat Keterangan Perkawinan dari Desa <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_surat_keterangan_perkawinan_desa" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview Surat Keterangan Perkawinan dari Desa</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_surat_keterangan_perkawinan_desa']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_surat_nikah_ortu_suami">Surat Nikah Ortu Suami <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_surat_nikah_ortu_suami" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview Surat Nikah Ortu Suami</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_surat_nikah_ortu_suami']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_surat_nikah_ortu_istri">Surat Nikah Ortu Istri <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_surat_nikah_ortu_istri" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview Surat Nikah Ortu Istri</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_surat_nikah_ortu_istri']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_ktp_suami">KTP Suami <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_ktp_suami" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview KTP Suami</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_ktp_suami']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_ktp_istri">KTP Istri <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_ktp_istri" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview KTP Istri</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_ktp_istri']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_kk_suami">KK Suami <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_kk_suami" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview KK Suami</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_kk_suami']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_kk_istri">KK Istri <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_kk_istri" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview KK Istri</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_kk_istri']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_ktp_ayah_suami">KTP Ayah Suami <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_ktp_ayah_suami" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview KTP Ayah Suami</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_ktp_ayah_suami']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_ktp_ibu_suami">KTP Ibu Suami <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_ktp_ibu_suami" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview KTP Ibu Suami</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_ktp_ibu_suami']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_kk_ayah_suami">KK Ayah Suami <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_kk_ayah_suami" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview KK Ayah Suami</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_kk_ayah_suami']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_kk_ibu_suami">KK Ibu Suami <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_kk_ibu_suami" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview KK Ibu Suami</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_kk_ibu_suami']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_ktp_ayah_istri">KTP Ayah Istri <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_ktp_ayah_istri" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview KTP Ayah Istri</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_ktp_ayah_istri']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_ktp_ibu_istri">KTP Ibu Istri <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_ktp_ibu_istri" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview KTP Ibu Istri</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_ktp_ibu_istri']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_kk_ayah_istri">KK Ayah Istri <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_kk_ayah_istri" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview KK Ayah Istri</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_kk_ayah_istri']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_kk_ibu_istri">KK Ibu Istri <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_kk_ibu_istri" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview KK Ibu Istri</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_kk_ibu_istri']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_ktp_saksi1">KTP Saksi 1 <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_ktp_saksi1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview KTP Saksi 1</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_ktp_saksi1']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_ktp_saksi2">KTP Saksi 2 <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_ktp_saksi2" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview KTP Saksi 2</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_ktp_saksi2']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_foto_berdampingan">Foto Berdampingan <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_foto_berdampingan" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview Foto Berdampingan</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_foto_berdampingan']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_surat_keterangan_sehat_suami">Surat Sehat Suami <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_surat_keterangan_sehat_suami" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview Surat Sehat Suami</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_surat_keterangan_sehat_suami']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_surat_keterangan_sehat_istri">Surat Sehat Istri <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_surat_keterangan_sehat_istri" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview Surat Sehat Istri</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_surat_keterangan_sehat_istri']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_surat_rekomendasi">Surat Rekomendasi Dispenduk Luar Daerah <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_surat_rekomendasi" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview Surat Rekomendasi Dispenduk Luar Daerah</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_surat_rekomendasi']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_surat_komandan">Surat Izin dari Komandan <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_surat_komandan" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview Surat Izin dari Komandan</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_surat_komandan']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 mt-3">
                            <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#file_form">Form Isian <span class="fas fa-fw fa-file"></span></button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="file_form" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Preview Form Isian</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <center>
                                            <img class="card-img" src="<?= base_url('file_upload/akta/akta_perkawinan_baru/') . $data['file_form']; ?>" alt="">
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button class="text-light btn btn-danger" onclick="tolak()"><span class="fas fa-fw fa-times"></span> Tolak</button>
                    <button class="text-light btn btn-success" onclick="verif()"><span class="fas fa-fw fa-check"></span> Verifikai</button>
                </div>
            </div>
        </di>

</div>
</div>
<div class="haiden">
    <form action="<?= base_url($this->controller_dir . '/tolak'); ?>" method="post">
        <input type="text" value="<?= $data['id']; ?>" name="id">
        <input type="text" id="catatan" name="catatan">
        <button id="tolakform" type="submit">kirim</button>
    </form>
</div>
<script>
    function coba() {
        Swal.fire({
            title: 'Input something',
            input: 'textarea'
        }).then(function(result) {
            if (result.value) {
                Swal.fire(result.value)
            }
        })
    }

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
            cancelButtonText: 'Tidak',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?= base_url($this->controller_dir . '/verif/' . $data['id']); ?>";
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
            cancelButtonText: 'Tidak',
            reverseButtons: true,
            input: 'textarea'
        }).then((result) => {
            if (result.isConfirmed) {
                $('#catatan').val(result.value);
                $("#tolakform").trigger("click");
            }
        })
    }
    $('.haiden').hide();
</script>
<?php endif; ?>