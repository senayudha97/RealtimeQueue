<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->

    <?= form_error('menu', '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        ', '</div>'); ?>

    <?= $this->session->flashdata('message'); ?>

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <di class="row">
        <div class="col-lg-6">
            <a href="" class="btn btn-danger rounded-0 mb-5" data-toggle="modal" data-target="#addModal">Data Baru</a>
            <table id="table_id" class="table table-bordered nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Mesin Sulzer/ Unit No</th>
                        <th scope="col">Hari/ Tanggal</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $row['mesin_sulzer']; ?></td>
                            <td><?= content_date($row['tanggal_input']); ?></td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm btn-sm editModal" data-id="<?= $row['pk_setup_perjaman_mesin']; ?>" data-toggle="modal" data-target="#editModal"><span class="fa fa-edit"></span></a>&nbsp;
                                <a href="<?= base_url('setup_perjaman_mesin/delete/') . $row['pk_setup_perjaman_mesin']; ?>" class="btn btn-danger btn-sm btn-sm" onclick="javascript: return confirm('Anda yakin ingin menghapus?')"><span class="fa fa-trash"></span></a>
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


<!-- Modal add-->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Setup Perjaman Mesin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('setup_perjaman_mesin/add'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="hidden" name="input[pk_setup_perjaman_mesin]" value="<?= 'SPM' . date('dhs'); ?>">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[insert_by]">
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Mesin Sulzer/ Unit No</label>
                        <input type="text" class="form-control" name="input[mesin_sulzer]">
                    </div>
                    <div class="form-group">
                        <label for="no_dokumen">Hari/ Tanggal</label>
                        <input type="text" class="form-control easydatepicker" name="input[tanggal_input]">
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
                <h5 class="modal-title" id="exampleModalLabel">Setup Perjaman Mesin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('setup_perjaman_mesin/edit'); ?>" method="POST">
                <div id="hidden_field">
                    <input type="hidden" id="pk_setup_perjaman_mesin" name="pk[pk_setup_perjaman_mesin]">
                    <input type="hidden" value="<?= $user['id']; ?>" name="input[update_by]">
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Mesin Sulzer/ Unit No</label>
                        <input type="text" class="form-control" id="mesin_sulzer" name="input[mesin_sulzer]">
                    </div>
                    <div class="form-group">
                        <label for="no_dokumen">Hari/ Tanggal</label>
                        <input type="text" class="form-control easydatepicker" id="tanggal_input" name="input[tanggal_input]">
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


        $('.editModal').on('click', function() {
            $('#pk_setup_perjaman_mesin, #mesin_sulzer, #tanggal_input').val(''); //clear

            var id = $(this).data('id');
            console.log(id);

            $.ajax({
                url: "<?= base_url('setup_perjaman_mesin/ajax'); ?>",
                method: 'GET',
                data: {
                    data: id
                },
                datatype: 'json',
                success: function(data) { //menampilkan
                    var hasil = JSON.parse(data);
                    $('#pk_setup_perjaman_mesin').val(hasil.pk_setup_perjaman_mesin);
                    $('#mesin_sulzer').val(hasil.mesin_sulzer);
                    $('#tanggal_input').val(hasil.tanggal_input);
                }
            });
        });

    });
</script>