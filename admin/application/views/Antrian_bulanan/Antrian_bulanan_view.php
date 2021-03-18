<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('antrian_bulanan/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<?php echo (base_url('antrian_bulanan/add')) ?>" class="btn btn-danger mb-3">Data Baru</a>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- <input type="text" class="form-control easydatepicker" name="tgl[awal]" value="<?= date('d-m-Y'); ?>"> -->
                                <input type="text" class="form-control easydatepicker" id="valtable" value="<?= date('d-m-Y'); ?>">
                            </div>
                            <div class="col-sm-6">
                                <button class="btn  btn-danger" id="search"><i class="fas fa-search"></i></button>
                                <!-- <input type="text" class="form-control easydatepicker" name="tgl[akhir]" value="<?= date('d-m-Y'); ?>"> -->
                                <!-- <button type="submit" class="btn btn-danger "><span class="fas fa-fw fa-file-pdf"></span>PDF</button> -->
                                &nbsp;
                                <!-- <button type="submit" name="excel" class="btn btn-success "><span class="fas fa-fw fa-file-excel"></span>Excel</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col-lg-12">
            <table id="table_id" class="table table-bordered nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="tg-0lax">No</th>
                        <th class="tg-0lax">Tanggal Antrian</th>
                        <th class="tg-0lax">Maksimal Antrian</th>
                        <th class="tg-0lax">Maksimal Antrian Perjaman</th>
                        <th class="tg-0lax">Aktif/Libur</th>
                        <th class="tg-0lax">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $value) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td><?= content_date($value['tanggal_antrian']); ?></td>
                            <td><?= $value['maksimal_antrian']; ?></td>
                            <td><?= $value['maksimal_antrian_perjam']; ?></td>
                            <td><?= $value['islibur'] == 1 ? "Libur" : "Aktif"; ?></td>
                            <td>
                                <a href="<?php echo (base_url('antrian_bulanan/edit/')) . $value['pk_antrian_bulanan'] ?>" class="btn btn-warning btn-sm "><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('antrian_bulanan/delete/') . $value['pk_antrian_bulanan']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
                            </td>

                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<script>
    $(document).ready(function() {
        var table = $('#table_id').DataTable({
            "scrollX": true,
        });

        $('#search').click(function() {
            event.preventDefault();
            table.search($('#valtable').val()).draw();
        });
    });
</script>