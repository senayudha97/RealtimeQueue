<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <di class="row">
        <div class="col-lg-8">
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
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger ">Proses</button>
            </div>
        </div>
    </di>
</div>
</div>
<script>
    $(".form-control").prop("disabled", true);
</script>