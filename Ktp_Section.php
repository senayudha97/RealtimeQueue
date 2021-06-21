<!-- First Layer -->
<div class="modal fade" id="mod_ktp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">PENGURUSAN KTP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_ktp_pemula">
                        <div class="services-item">
                            <div class="icon">
                                <i class="lni-add-files"></i>
                            </div>
                            <div class="services-content">
                                <h3><a>PEMULA</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_ktp_kehilangan">
                        <div class="services-item">
                            <div class="icon">
                                <i class="lni-question-circle"></i>
                            </div>
                            <div class="services-content">
                                <h3><a>KEHILANGAN</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_ktp_rusak">
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

<!-- Secon Layer -->
<!-- Pemula -->
<div class="modal fade" id="mod_ktp_pemula" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">KTP PEMULA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="admin/ktp_handler/ktp_pemula" enctype="multipart/form-data" method="POST">
                <div class="haiden">
                    <input type="text" name="input[jenis]" value="1">
                </div>


                <div class="modal-body">

                    <dilv class="reservasi">
                        <h5 class="text-dark">Kuota Tersedia : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light" id="ktp_reservasi"></button></h5>
                        <h6 class="text-dark">Jam Kehadiran Anda : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light jamKehadiranKTP" id="jamKehadiranKTPbaru"></button></h6>
                        <input type="text" name="input[jamkehadiran]" class="haiden jamKehediranKTPInput">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="ktpbarureservasi custom-control-input" id="customSwitch1">
                            <label class="ktpbarureservasi custom-control-label" for="customSwitch1">Aktifkan Mode Reservasi</label>
                        </div>

                        <div id="ktpbarureservasi">
                            <label for="tanggal_reservasi1">Tanggal Reservasi</label>
                            <input type="date" require id="tanggal_reservasi1" onchange="prosesTanggal($(this).val())" name="input[tanggal_antrian]" class="form-control resetable">
                        </div>
                        <script>
                            $('#ktpbarureservasi').hide();
                            $('.ktpbarureservasi').click(function() {
                                if ($(this).is(':checked')) {
                                    $("input[type=date]").val("")
                                    $('#ktpbarureservasi').show();
                                } else {
                                    let today = new Date();
                                    let dd = String(today.getDate()).padStart(2, '0');
                                    let mm = String(today.getMonth() + 1).padStart(2, '0');
                                    let yyyy = today.getFullYear();
                                    today = yyyy + '-' + mm + '-' + dd;

                                    prosesTanggal(today);
                                    $('#ktpbarureservasi').hide();
                                }
                            });
                        </script>
                    </dilv>
                    <!-- Data Diri -->
                    <input type="text" class="form-control resetable" id="name1_1" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
                    <input type="tel" class="form-control resetable" id="phone1_1" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
                    <input type="text" class="form-control resetable" id="email1_1" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

                    <!-- Doc -->
                    <div class="row">
                        <label class="col-lg-6" id="">
                            Kartu Keluarga
                            <div class="custom-file">
                                <input type="file" class="custom-file-input resetable" id="kartu_keluarga1_1" name="kartu_keluarga1_1">
                                <label class="custom-file-label" for="kartu_keluarga1_1">Pilih file Kartu Keluarga</label>
                            </div>
                        </label>
                        <label class="col-lg-6" id="">
                            Akta Kelahiran
                            <div class="custom-file">
                                <input type="file" class="custom-file-input resetable" id="akta_kelahiran1_1" name="akta_kelahiran1_1">
                                <label class="custom-file-label" for="akta_kelahiran1_1">Pilih file Akta Kelahiran</label>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_ktp">Kembali</button>
                    <button type="submit" id="send_ktp" class="btn btn-common asli">Kirim</button>
                    <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Kehilangan -->
<div class="modal fade" id="mod_ktp_kehilangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">KTP KEHILANGAN</h5>
                &nbsp;
                &nbsp;
                <img src="assets/img/pos.png" width="50px" alt="">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="admin/ktp_handler/ktp_kehilangan" enctype="multipart/form-data" method="POST">
                <div class="haiden">
                    <input type="text" name="input[jenis]" value="1">
                </div>
                <div class="modal-body">
                    <!-- Data Diri -->
                    <input type="text" class="form-control resetable" id="name1_2" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
                    <input type="tel" class="form-control resetable" id="phone1_2" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
                    <input type="text" class="form-control resetable" id="email1_2" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

                    <!-- Doc -->
                    <div class="row">
                        <label class="col-lg-6" id="">
                            Kartu Keluarga
                            <div class="custom-file">
                                <input type="file" class="custom-file-input resetable" id="kartu_keluarga1_2" name="kartu_keluarga1_2">
                                <label class="custom-file-label" for="kartu_keluarga1_2">Pilih file Kartu Keluarga</label>
                            </div>
                        </label>
                        <label class="col-lg-6" id="">
                            Akta Kelahiran
                            <div class="custom-file">
                                <input type="file" class="custom-file-input resetable" id="akta_kelahiran1_2" name="akta_kelahiran1_2">
                                <label class="custom-file-label" for="akta_kelahiran1_2">Pilih file Akta Kelahiran</label>
                            </div>
                        </label>
                        <label class="col-lg-12" id="">
                            Surat Keterangan Kehilangan
                            <div class="custom-file">
                                <input type="file" class="custom-file-input resetable" id="surat_kehilangan1_2" name="surat_kehilangan1_2">
                                <label class="custom-file-label" for="surat_kehilangan1_2">Pilih file Surat Keterangan Kehilangan</label>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_ktp">Kembali</button>
                    <button type="submit" id="send_ktp" class="btn btn-common asli">Kirim</button>
                    <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Rusak -->
<div class="modal fade" id="mod_ktp_rusak" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">KTP RUSAK</h5>
                &nbsp;
                &nbsp;
                <img src="assets/img/pos.png" width="50px" alt="">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="admin/ktp_handler/ktp_rusak" enctype="multipart/form-data" method="POST">
                <div class="haiden">
                    <input type="text" name="input[jenis]" value="1">
                </div>
                <div class="modal-body">
                    <!-- Data Diri -->
                    <input type="text" class="form-control resetable" id="name1_3" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
                    <input type="tel" class="form-control resetable" id="phone1_3" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
                    <input type="text" class="form-control resetable" id="email1_3" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

                    <!-- Doc -->
                    <div class="row">
                        <label class="col-lg-6" id="">
                            Kartu Keluarga
                            <div class="custom-file">
                                <input type="file" class="custom-file-input resetable" id="kartu_keluarga1_3" name="kartu_keluarga1_3">
                                <label class="custom-file-label" for="kartu_keluarga1_3">Pilih file Kartu Keluarga</label>
                            </div>
                        </label>
                        <label class="col-lg-6" id="">
                            Akta Kelahiran
                            <div class="custom-file">
                                <input type="file" class="custom-file-input resetable" id="akta_kelahiran1_3" name="akta_kelahiran1_3">
                                <label class="custom-file-label" for="akta_kelahiran1_3">Pilih file Akta Kelahiran</label>
                            </div>
                        </label>
                        <label class="col-lg-12" id="">
                            Dokumen Lama
                            <div class="custom-file">
                                <input type="file" class="custom-file-input resetable" id="dokumen_lama1_3" name="dokumen_lama1_3">
                                <label class="custom-file-label" for="dokumen_lama1_3">Pilih file KTP Lama</label>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_ktp">Kembali</button>
                    <button type="submit" id="send_ktp" class="btn btn-common asli">Kirim</button>
                    <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>