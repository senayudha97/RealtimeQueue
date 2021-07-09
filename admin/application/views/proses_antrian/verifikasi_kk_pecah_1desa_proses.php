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
                <div class="row mb-3 pl-3">
                    <div class="col-sm-4">
                        <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#kksuami">Kartu Keluarga Suami <span class="fas fa-fw fa-file"></span></button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="kksuami" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Preview Kartu Keluarga Suami</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <center>
                                        <img class="card-img" src="<?= base_url('file_upload/kk/kk_pecah1desa/') . $data['file_kk_suami']; ?>" alt="">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#kksistri">Kartu Keluarga Istri <span class="fas fa-fw fa-file"></span></button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="kksistri" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Preview Kartu Keluarga Istri</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <center>
                                        <img class="card-img" src="<?= base_url('file_upload/kk/kk_pecah1desa/') . $data['file_kk_istri']; ?>" alt="">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#suratnikah">Surat Nikah <span class="fas fa-fw fa-file"></span></button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="suratnikah" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Preview Surat Nikah</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <center>
                                        <img class="card-img" src="<?= base_url('file_upload/kk/kk_pecah1desa/') . $data['file_surat_nikah']; ?>" alt="">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mb-3 pl-3">
                    <div class="col-sm-4">
                        <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#Ijazahsuami">Ijazah Suami <span class="fas fa-fw fa-file"></span></button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="Ijazahsuami" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Preview Ijazah Suami</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <center>
                                        <img class="card-img" src="<?= base_url('file_upload/kk/kk_pecah1desa/') . $data['file_ijazah_suami']; ?>" alt="">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#IjazahIstri">Ijazah Istri <span class="fas fa-fw fa-file"></span></button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="IjazahIstri" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Preview Ijazah Istri</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <center>
                                        <img class="card-img" src="<?= base_url('file_upload/kk/kk_pecah1desa/') . $data['file_ijazah_istri']; ?>" alt="">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#akta">Akta <span class="fas fa-fw fa-file"></span></button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="akta" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Preview Akta</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <center>
                                        <img class="card-img" src="<?= base_url('file_upload/kk/kk_pecah1desa/') . $data['file_akta']; ?>" alt="">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 pl-3">
                    <div class="col-sm-4">
                        <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#suratnikahortusuami">Surat Nikah Orang Tua Suami <span class="fas fa-fw fa-file"></span></button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="suratnikahortusuami" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Preview Surat Nikah Orang Tua SUami</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <center>
                                        <img class="card-img" src="<?= base_url('file_upload/kk/kk_pecah1desa/') . $data['file_surat_nikah_ortu_suami']; ?>" alt="">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#suratnikahortuistri">Surat Nikah Orang Tua Istri <span class="fas fa-fw fa-file"></span></button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="suratnikahortuistri" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Preview Surat Nikah Orang Tua Istri</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <center>
                                        <img class="card-img" src="<?= base_url('file_upload/kk/kk_pecah1desa/') . $data['file_surat_nikah_ortu_istri']; ?>" alt="">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#sptjm">SPTJM <span class="fas fa-fw fa-file"></span></button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="sptjm" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Preview SPTJM</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <center>
                                        <img class="card-img" src="<?= base_url('file_upload/kk/kk_pecah1desa/') . $data['file_sptjm']; ?>" alt="">
                                    </center>
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
    <form action="<?= base_url('Verifikasi_antrian_ktp/tolak'); ?>" method="post">
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
                window.location.href = "<?= base_url('Verifikasi_antrian_ktp/verif/' . $data['id']); ?>";
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