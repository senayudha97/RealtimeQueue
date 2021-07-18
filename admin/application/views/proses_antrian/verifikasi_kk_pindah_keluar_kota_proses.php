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
                <div class="row">
                    <div class="col-sm-3">
                        <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#ktp">KTP <span class="fas fa-fw fa-file"></span></button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="ktp" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Preview KTP</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <center>
                                        <img class="card-img" src="<?= base_url('file_upload/kk/kk_pindah_kota/') . $data['file_ktp']; ?>" alt="">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#kk">Kartu Keluarga <span class="fas fa-fw fa-file"></span></button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="kk" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Preview Kartu Keluarga</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <center>
                                        <img class="card-img" src="<?= base_url('file_upload/kk/kk_pindah_kota/') . $data['file_kk']; ?>" alt="">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#ktpselfie">KTP Selfie <span class="fas fa-fw fa-file"></span></button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="ktpselfie" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Preview KTP Selfie</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <center>
                                        <img class="card-img" src="<?= base_url('file_upload/kk/kk_pindah_kota/') . $data['file_ktp_selfie']; ?>" alt="">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#sptjm">SPTJM <span class="fas fa-fw fa-file"></span></button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="sptjm" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Preview SPTJM</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <center>
                                        <img class="card-img" src="<?= base_url('file_upload/kk/kk_pindah_kota/') . $data['file_sptjm']; ?>" alt="">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 mt-3">
                        <button class="btn btn-warning text-dark fixbutton" data-toggle="modal" data-target="#fileform">Form Isian <span class="fas fa-fw fa-file"></span></button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="fileform" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Preview Form Isian</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <center>
                                        <img class="card-img" src="<?= base_url('file_upload/kk/kk_pindah_kota/') . $data['file_form']; ?>" alt="">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer col-12">
                <button class="text-light btn btn-danger" onclick="tolak()"><span class="fas fa-fw fa-times"></span> Tolak</button>
                <button class="text-light btn btn-success" onclick="verif()"><span class="fas fa-fw fa-check"></span> Verifikai</button>
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