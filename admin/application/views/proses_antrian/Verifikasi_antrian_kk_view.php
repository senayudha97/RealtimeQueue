<div class="container-fluid">
    <h2 class="mb-5"><?= $title; ?></h2>
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <?php $pengurusan = array(); ?>
    <?php $pengurusan[1] = 'Penambahan Anggota Karena Kelahiran'; ?>
    <?php $pengurusan[2] = 'Penambahan Anggota Karena Menumpang'; ?>
    <?php $pengurusan[3] = 'Pengurangan Anggota Keluaraga'; ?>
    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('antrian_bulanan/report'); ?>" method="POST" target="_blank">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-10 mb-3">
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
                        <th class="tg-0lax">Tanggal Antri</th>
                        <th class="tg-0lax">Nama</th>
                        <th class="tg-0lax">Nomor HP</th>
                        <th class="tg-0lax">Email</th>
                        <th class="tg-0lax">Jenis Antrian</th>
                        <th class="tg-0lax">Pengurusan</th>
                        <th class="tg-0lax" width="10%"><span class="fas fa-fw fa-edit"></span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $value) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td><?= content_date($value['tanggal_antrian']); ?></td>
                            <td><?= $value['nama']; ?></td>
                            <td><a target="_blank" href="https://api.whatsapp.com/send?phone=<?= preg_replace('/0/', '62', $value['nohp'], 1); ?>&text=hallo" class="btn btn-success btn-sm">Whatsapp &nbsp; <img width="20" src="<?= base_url('assets/img/wa.png'); ?>" alt=""></a></td>

                            <td><?= $value['email']; ?></td>
                            <td><?= $value['jenis'] == 1 ?  'Baru' : 'Perubahan'; ?></td>
                            <td><?= $pengurusan[$value['pengurusan']]; ?></td>
                            <td>
                                <a href="<?= base_url("verifikasi_antrian_kk/proses/" . $value['id']); ?>" class="btn btn-success rounded-left"><span class="fas fa-fw fa-check"></span>Proses Antrian</a>
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