<?php require "header.php" ?>
<!-- Button Modal Pengajuan -->
<?php include "button_modal_pelayanan.php"; ?>

<!-- Pduan Start -->
<?php include "Paduan.php"; ?>


<!-- MODAL KTP START -->
<?php include "Ktp_section.php"; ?>

<!-- MODAL KK START -->
<?php include "KK_Section.php"; ?>

<!-- MODAL AKTA START -->
<?php include "Akta_Section.php"; ?>

<!-- MODAL KIA START -->
<?php include "KIA_Section.php"; ?>

<div class="modal fade" id="edit_kk" tabindex="-4" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Pengurusan Perubahan KK</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="admin/kk_handler/kk_perubahan" enctype="multipart/form-data" method="POST">
                <div class="haiden">
                    <input type="text" name="input[jenis]" value="2">
                </div>
                <div class="modal-body">

                    <h5 class="text-dark">Kuota Tersedia : <button onclick="event.preventDefault()" class=" btn btn-sm font-weight-bold bg-danger text-light" id="kkready2"></button></h5>
                    <h6 class="text-dark">Jam Kehadiran Anda : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light jamKehadiranKK" id="jamKehadiranKKbaru"></button></h6>
                    <input type="text" name="input[jamkehadiran]" class="haiden jamKehediranKKInput">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="kkperubahanreservasi custom-control-input" id="customSwitch4">
                        <label class="kkperubahanreservasi custom-control-label" for="customSwitch4">Aktifkan Mode Reservasi</label>
                    </div>

                    <div id="kkperubahanreservasi">
                        <label for="tanggal_reservasi1">Tanggal Reservasi</label>
                        <input type="date" require id="tanggal_reservasi1" onchange="prosesTanggal($(this).val())" name="input[tanggal_antrian]" class="form-control resetable">
                    </div>
                    <script>
                        $('#kkperubahanreservasi').hide();
                        $('.kkperubahanreservasi').click(function() {
                            if ($(this).is(':checked')) {
                                $("input[type=date]").val("")
                                $('#kkperubahanreservasi').show();
                            } else {
                                let today = new Date();
                                let dd = String(today.getDate()).padStart(2, '0');
                                let mm = String(today.getMonth() + 1).padStart(2, '0');
                                let yyyy = today.getFullYear();
                                today = yyyy + '-' + mm + '-' + dd;

                                prosesTanggal(today);
                                $('#kkperubahanreservasi').hide();
                            }
                        });
                    </script> <input type="text" class="form-control resetable" id="name4" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
                    <input type="tel" class="form-control resetable" id="phone4" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
                    <input type="email" class="form-control resetable" id="email4" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

                    <select name="input[pengurusan]" id="opsikkubah" class="form-control resetableoptions" style="font-size: 11px;">
                        <option value="#">- Pilih Jenis Pengajuan -</option>
                        <option value="1">Penambahan Anggota Karena Kelahiran</option>
                        <option value="2">Penambahan Anggota Karena Menumpang</option>
                        <option value="3">Pengurangan Anggota Keluarga</option>
                    </select>

                    <div id="tmp_surat_pengantar4" class="d-none">
                        <label for="surat_pengantar4">Surat Pengantar</label>
                        <input type="file" require id="surat_pengantar4" name="file_surat_pengantar" class="form-control resetable">
                    </div>
                    <div id="tmp_keterangan_pindah4" class="d-none">
                        <label for="keterangan_pindah4">Surat Keterangan Pindah</label>
                        <input type="file" require id="keterangan_pindah4" name="file_surat_keterangan_pindah" class="form-control resetable">
                    </div>
                    <div id="tmp_kk_lama4" class="d-none">
                        <label for="kk_lama4">Kartu Keluarga yang Lama</label>
                        <input type="file" require id="kk_lama4" name="file_kk_lama" class="form-control resetable">
                    </div>
                    <div id="tmp_keterangan_lahir4" class="d-none">
                        <label for="keterangan_lahir4">Surat Keterangan Kelahiran</label>
                        <input type="file" require id="keterangan_lahir4" name="file_keterangan_kelahiran" class="form-control resetable">
                    </div>
                    <div id="tmp_ket_luar_negeri4" class="d-none">
                        <label for="ket_luar_negeri4">Surat Keterangan Datang Dari Luar Negeri</label>
                        <input type="file" id="ket_luar_negeri4" name="file_surat_keterangan_datang_dari_luar_negri" class="form-control resetable">
                    </div>
                    <div id="tmp_paspor4" class="d-none">
                        <label for="paspor4">Paspor/Izin Tinggal Tetap</label>
                        <input type="file" id="paspor" name="file_paspor_tinggal_tetap" class="form-control resetable">
                    </div>
                    <div id="tmp_keterangan_kematian4" class="d-none">
                        <label for="keterangan_kematian4">Surat Keterangan Kematian</label>
                        <input type="file" require id="keterangan_kematian4" name="file_surat_keterangan_kematian" class="form-control resetable">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" id="btn_kkubah" class="btn btn-common">Kirim</button>
                    <button type="button" ondblclick="event.preventDefault()" id="palsubah" class="btn btn-default">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Section End -->
<?php require "footer.php" ?>