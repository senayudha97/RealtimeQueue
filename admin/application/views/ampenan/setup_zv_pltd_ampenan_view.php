<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->

    <?= form_error('menu', '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        ', '</div>'); ?>

    <?= $this->session->flashdata('message'); ?>

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <di class="row">
        <div class="col-lg-8">
            <a href="" class="btn btn-danger rounded-0 mb-5" data-toggle="modal" data-target="#addModal">Data Baru</a>
            <table id="table_id" class="table table-bordered nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="tg-0pky">No</th>
                        <th class="tg-0pky">Hari/ tanggal</th>
                        <th class="tg-0pky">PLTD</th>
                        <th class="tg-0pky">Mesin</th>
                        <th class="tg-0pky">Generator</th>
                        <th class="tg-0lax">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= content_date($row['tanggal_input']); ?></td>
                            <td><?= $row['pltd']; ?></td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm mesin" data-id="<?= $row['pk_setup_zv_pltd_ampenan']; ?>" data-toggle="modal" data-target="#detailModalMesin"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td>
                                <div class="btn btn-success btn-sm btn-sm generator" data-id="<?= $row['pk_setup_zv_pltd_ampenan']; ?>" data-toggle="modal" data-target="#detailModalGenerator"><span class="fa fa-info-circle"> &nbsp;</span>Lihat Detail</div>
                            </td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm btn-sm editModal" data-id="<?= $row['pk_setup_zv_pltd_ampenan']; ?>" data-toggle="modal" data-target="#editModal"><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('setup_zv_pltd_ampenan/delete/') . $row['pk_setup_zv_pltd_ampenan']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </di>
</div>
</div>


<!-- Modal detail mesin-->
<div class="modal fade" id="detailModalMesin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Setup Zv Pltd Ampenan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header">
                        Mesin
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Mesin No</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="no_mesin" name="input[no_mesin]">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Merek</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="merek_mesin" name="input[merek_mesin]">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Type</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="type_mesin" name="input[type_mesin]">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal detail generator-->
<div class="modal fade" id="detailModalGenerator" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Setup Zv Pltd Ampenan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card mt-3">
                    <div class="card-header">
                        generator
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Merek</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="merek_generator" name="input[merek_generator]">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Type</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="type_generator" name="input[type_generator]">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal add-->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Setup Zv Pltd Ampenan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('setup_zv_pltd_ampenan/add'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="hidden" name="input[pk_setup_zv_pltd_ampenan]" value="<?= 'SZPA' . date('dhs'); ?>">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[insert_by]">
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="no_dokumen">Hari/ Tanggal</label>
                        <input type="text" class="form-control easydatepicker" name="input[tanggal_input]">
                    </div>
                    <div class="form-group">
                        <label for="">PLTD</label>
                        <input type="text" class="form-control" name="input[pltd]">
                    </div>
                    <div class="card">
                        <div class="card-header">
                            Mesin
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Mesin No</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="input[no_mesin]">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Merk</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="input[merek_mesin]">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Type</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="input[type_mesin]">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header">
                            Generator
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Merk</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="input[merek_generator]">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Type</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="input[type_generator]">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger ">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Setup Zv Pltd Ampenan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('setup_zv_pltd_ampenan/edit'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="hidden" name="pk[pk_setup_zv_pltd_ampenan]" id="pk_setup_zv_pltd_ampenan">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[update_by]">
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="no_dokumen">Hari/ Tanggal</label>
                        <input type="text" class="form-control easydatepicker" id="edit_tanggal_input" name="input[tanggal_input]">
                    </div>
                    <div class="form-group">
                        <label for="">PLTD</label>
                        <input type="text" class="form-control" id="edit_pltd" name="input[pltd]">
                    </div>
                    <div class="card">
                        <div class="card-header">
                            Mesin
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Mesin No</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="edit_no_mesin" name="input[no_mesin]">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Merk</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="edit_merek_mesin" name="input[merek_mesin]">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Type</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="edit_type_mesin" name="input[type_mesin]">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header">
                            Generator
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Merk</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="edit_merek_generator" name="input[merek_generator]">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Type</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="edit_type_generator" name="input[type_generator]">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger ">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#table_id').DataTable();

        $('.mesin').on('click', function() {
            $('#no_mesin, #merek_mesin, #type_mesin').val(''); //clear

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('setup_zv_pltd_ampenan/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#no_mesin').val(hasil.no_mesin);
                    $('#merek_mesin').val(hasil.merek_mesin);
                    $('#type_mesin').val(hasil.type_mesin);
                }
            });
        });

        $('.generator').on('click', function() {
            $('#merek_generator, #type_generator').val(''); //clear

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('setup_zv_pltd_ampenan/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#merek_generator').val(hasil.merek_generator);
                    $('#type_generator').val(hasil.type_generator);
                }
            });
        });

        $('.editModal').on('click', function() {
            $('#no_mesin, #merek_mesin, #type_mesin').val('');
            $('#merek_generator, #type_generator').val('');

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('setup_zv_pltd_ampenan/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#pk_setup_zv_pltd_ampenan').val(hasil.pk_setup_zv_pltd_ampenan);
                    $('#edit_tanggal_input').val(hasil.tanggal_input);
                    $('#edit_pltd').val(hasil.pltd);
                    $('#edit_no_mesin').val(hasil.no_mesin);
                    $('#edit_merek_mesin').val(hasil.merek_mesin);
                    $('#edit_type_mesin').val(hasil.type_mesin);
                    $('#edit_merek_generator').val(hasil.merek_generator);
                    $('#edit_type_generator').val(hasil.type_generator);
                }
            });
        });

    });
</script>