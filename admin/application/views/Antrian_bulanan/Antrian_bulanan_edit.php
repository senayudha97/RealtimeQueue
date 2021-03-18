<div class="container-fluid">
    <h1>Edit Antrian Bulanan</h1>
    <div class="row mt-5">
        <div class="col-lg-11">
            <form action="<?= base_url('Antrian_bulanan/edit'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="hidden" name="pk[pk_antrian_bulanan]" value="<?= $edit['pk_antrian_bulanan']; ?>">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[insert_by]">
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Tanggal Input
                    </div>
                    <div class="col-md-5">
                        <input type="text" class="form-control easydatepicker" value="<?= content_date($edit['tanggal_antrian']); ?>" name="input[tanggal_antrian]">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-2">
                        Maksimal Antrian
                    </div>
                    <div class="col-md-5">
                        <input type="text" class="form-control" value="<?= $edit['maksimal_antrian']; ?>" name="input[maksimal_antrian]">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-2">
                        Maksimal Antrian Perjam
                    </div>
                    <div class="col-md-5">
                        <input type="text" class="form-control" value="<?= $edit['maksimal_antrian_perjam']; ?>" name="input[maksimal_antrian_perjam]">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-2">
                        Hari Libur
                    </div>
                    <div class="col-md-5">
                        <input type="checkbox" class="form-control pull-left" <?= $edit['islibur'] == 1 ? "checked" : ""; ?> value="1" name="input[islibur]">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <input type="submit" class="btn btn-danger mt-3" value="Kirim">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<script>
    $(document).ready(function() {
        console.log('Berhasil JQuery');
    });
</script>