<!-- |FIRST LAYER| -->
<div class="modal fade" id="mod_akta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">PENGURUSAN AKTA KELAHIRAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_baru">
                        <div class="services-item">
                            <div class="icon">
                                <i class="lni-add-files"></i>
                            </div>
                            <div class="services-content">
                                <h3><a>BARU</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_kehilangan">
                        <div class="services-item">
                            <div class="icon">
                                <i class="lni-question-circle"></i>
                            </div>
                            <div class="services-content">
                                <h3><a>HILANG</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_rusak">
                        <div class="services-item">
                            <div class="icon">
                                <i class="lni-cut"></i>
                            </div>
                            <div class="services-content">
                                <h3><a>RUSAK</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- |SECOND LAYER| -->
<!-- BARU -->
<div class="modal fade" id="mod_akta_baru" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">AKTA BARU</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="admin/akta_handler/akta_baru" enctype="multipart/form-data" method="POST">
                <div class="haiden">
                    <input type="text" name="input[jenis]" value="1">
                </div>
                <div class="modal-body">

                    <dilv class="reservasi">
                        <h5 class="text-dark">Kuota Tersedia : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light akta_reservasi"></button></h5>
                        <h6 class="text-dark">Jam Kehadiran Anda : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light jamKehadiranAkta" id="jamKehadiranAkta"></button></h6>

                        <input type="text" name="input[jamkehadiran]" class="haiden jamKehediranAktaInput">

                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="aktabarureservasi custom-control-input" id="dateaktabaru">
                            <label class="aktabarureservasi custom-control-label" for="dateaktabaru">Aktifkan Mode Reservasi</label>
                        </div>

                        <div id="aktabarureservasi">
                            <label for="tanggal_reservasi1">Tanggal Reservasi</label>
                            <input type="date" require id="tanggal_reservasi1" onchange="prosesTanggal($(this).val())" name="input[tanggal_antrian]" class="form-control resetable">
                        </div>
                        <script>
                            $('#aktabarureservasi').hide();
                            $('.aktabarureservasi').click(function() {
                                if ($(this).is(':checked')) {
                                    $("input[type=date]").val("")
                                    $('#aktabarureservasi').show();
                                } else {
                                    let today = new Date();
                                    let dd = String(today.getDate()).padStart(2, '0');
                                    let mm = String(today.getMonth() + 1).padStart(2, '0');
                                    let yyyy = today.getFullYear();
                                    today = yyyy + '-' + mm + '-' + dd;

                                    prosesTanggal(today);
                                    $('#aktabarureservasi').hide();
                                }
                            });
                        </script>
                    </dilv>

                    <!-- Data Diri -->
                    <input type="text" class="form-control resetable" id="name3_1" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
                    <input type="tel" class="form-control resetable" id="phone3_1" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
                    <input type="text" class="form-control resetable" id="email3_1" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

                    <!-- Doc -->
                    <div class="row">
                        <label class="col-lg-12" id="">
                            Surat Keterangan Kelahiran
                            <div class="custom-file">
                                <input type="file" class="custom-file-input resetable" id="surat_kelahiran3_1" name="surat_kelahiran3_1">
                                <label class="custom-file-label" for="surat_kelahiran3_1">Pilih file Surat Keterangan Kelahiran</label>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta">Kembali</button>
                    <button type="submit" id="akta_baru" class="btn btn-common asli">Kirim</button>
                    <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- KEHILANGAN -->
<div class="modal fade" id="mod_akta_kehilangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">KEHILANGAN AKTA</h5>
                &nbsp;
                &nbsp;
                <img src="assets/img/pos.png" width="50px" alt="">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="admin/akta_handler/akta_hilang" enctype="multipart/form-data" method="POST">
                <div class="haiden">
                    <input type="text" name="input[jenis]" value="1">
                </div>
                <div class="modal-body">
                    <!-- Data Diri -->
                    <input type="text" class="form-control resetable" id="name3_2" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
                    <input type="tel" class="form-control resetable" id="phone3_2" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
                    <input type="text" class="form-control resetable" id="email3_2" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

                    <!-- Doc -->
                    <div class="row">
                        <label class="col-lg-12" id="">
                            Surat Keterangan Kehilangan dari Kepolisian
                            <div class="custom-file">
                                <input type="file" class="custom-file-input resetable" id="surat_kehilangan3_2" name="surat_kehilangan3_2">
                                <label class="custom-file-label" for="surat_kehilangan3_2">Pilih file Surat Keterangan Kehilangan dari Kepolisian</label>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta">Kembali</button>
                    <button type="submit" id="akta_kehilangan" class="btn btn-common asli">Kirim</button>
                    <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- RUSAK -->
<div class="modal fade" id="mod_akta_rusak" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">KERUSAKAN AKTA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="admin/akta_handler/akta_rusak" enctype="multipart/form-data" method="POST">
                <div class="haiden">
                    <input type="text" name="input[jenis]" value="1">
                </div>
                <div class="modal-body">
                    <dilv class="reservasi">
                        <h5 class="text-dark">Kuota Tersedia : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light akta_reservasi"></button></h5>
                        <h6 class="text-dark">Jam Kehadiran Anda : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light jamKehadiranAkta" id="jamKehadiranAkta"></button></h6>

                        <input type="text" name="input[jamkehadiran]" class="haiden jamKehediranAktaInput">

                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="aktarusakreservasi custom-control-input" id="dateaktarusak">
                            <label class="aktarusakreservasi custom-control-label" for="dateaktarusak">Aktifkan Mode Reservasi</label>
                        </div>

                        <div id="aktarusakreservasi">
                            <label for="tanggal_reservasi1">Tanggal Reservasi</label>
                            <input type="date" require id="tanggal_reservasi1" onchange="prosesTanggal($(this).val())" name="input[tanggal_antrian]" class="form-control resetable">
                        </div>
                        <script>
                            $('#aktarusakreservasi').hide();
                            $('.aktarusakreservasi').click(function() {
                                if ($(this).is(':checked')) {
                                    $("input[type=date]").val("")
                                    $('#aktarusakreservasi').show();
                                } else {
                                    let today = new Date();
                                    let dd = String(today.getDate()).padStart(2, '0');
                                    let mm = String(today.getMonth() + 1).padStart(2, '0');
                                    let yyyy = today.getFullYear();
                                    today = yyyy + '-' + mm + '-' + dd;

                                    prosesTanggal(today);
                                    $('#aktarusakreservasi').hide();
                                }
                            });
                        </script>
                    </dilv>

                    <!-- Data Diri -->
                    <input type="text" class="form-control resetable" id="name3_3" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
                    <input type="tel" class="form-control resetable" id="phone3_3" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
                    <input type="text" class="form-control resetable" id="email3_3" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

                    <!-- Doc -->
                    <div class="row">
                        <label class="col-lg-12" id="">
                            Akta Lama
                            <div class="custom-file">
                                <input type="file" class="custom-file-input resetable" id="akta_lama3_3" name="akta_lama3_3">
                                <label class="custom-file-label" for="akta_lama3_3">Pilih file Akta Lama</label>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta">Kembali</button>
                    <button type="submit" id="akta_rusak" class="btn btn-common asli">Kirim</button>
                    <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Request Data Form -->
<script>
    $(document).ready(function() {
        $.get("admin/KK_handler/formKK", function(data) {
            let json = JSON.parse(data);

            (json[0].file != '') ? $("#kkhilang").attr("href", "admin/file_upload/form_pengajuan/kk/" + json[0].file): $("#kkhilang").hide();

            (json[1].file != '') ? $("#kkrusak").attr("href", "admin/file_upload/form_pengajuan/kk/" + json[1].file): $("#kkrusak").hide();

            (json[2].file != '') ? $("#kkperubahandata").attr("href", "admin/file_upload/form_pengajuan/kk/" + json[2].file): $("#kkperubahandata").hide();

            (json[3].file != '') ? $("#kkpecah1desaform").attr("href", "admin/file_upload/form_pengajuan/kk/" + json[3].file): $("#kkpecah1desaform").hide();

            (json[4].file != '') ? $("#kkpindahdesaform").attr("href", "admin/file_upload/form_pengajuan/kk/" + json[4].file): $("#kkpindahdesaform").hide();

            (json[5].file != '') ? $("#kkpindahkotaform").attr("href", "admin/file_upload/form_pengajuan/kk/" + json[5].file): $("#kkpindahkotaform").hide();

            (json[6].file != '') ? $("#kkkedatanganform").attr("href", "admin/file_upload/form_pengajuan/kk/" + json[6].file): $("#kkkedatanganform").hide();

        });
    });
</script>