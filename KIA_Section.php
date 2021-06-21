<!-- |FIRST LAYER| -->
<div class="modal fade" id="mod_kia" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">PENGURUSAN KIA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_kia_pemula">
                        <div class="services-item">
                            <div class="icon">
                                <i class="lni-add-files"></i>
                            </div>
                            <div class="services-content">
                                <h3><a>PEMULA</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_kia_kehilangan">
                        <div class="services-item">
                            <div class="icon">
                                <i class="lni-question-circle"></i>
                            </div>
                            <div class="services-content">
                                <h3><a>KEHILANGAN</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_kia_rusak">
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
<!-- PEMULA -->
<div class="modal fade" id="mod_kia_pemula" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">KIA PEMULA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="admin/KIA_handler/kia_pemula" enctype="multipart/form-data" method="POST">
                <div class="haiden">
                    <input type="text" name="input[jenis]" value="1">
                </div>
                <div class="modal-body">

                    <dilv class="reservasi">
                        <h5 class="text-dark">Kuota Tersedia : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light kk_reservasi"></button></h5>
                        <h6 class="text-dark">Jam Kehadiran Anda : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light jamKehadiranKIA" id="jamKehadiranKK"></button></h6>
                        <input type="text" name="input[jamkehadiran]" class="haiden jamKehediranKIAInput">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="KIArusakrservasi custom-control-input" id="dateKIApemula">
                            <label class="KIArusakrservasi custom-control-label" for="dateKIApemula">Aktifkan Mode Reservasi</label>
                        </div>

                        <div id="KIArusakrservasi">
                            <label for="tanggal_reservasi1">Tanggal Reservasi</label>
                            <input type="date" require id="tanggal_reservasi1" onchange="prosesTanggal($(this).val())" name="input[tanggal_antrian]" class="form-control resetable">
                        </div>
                        <script>
                            $('#KIArusakrservasi').hide();
                            $('.KIArusakrservasi').click(function() {
                                if ($(this).is(':checked')) {
                                    $("input[type=date]").val("")
                                    $('#KIArusakrservasi').show();
                                } else {
                                    let today = new Date();
                                    let dd = String(today.getDate()).padStart(2, '0');
                                    let mm = String(today.getMonth() + 1).padStart(2, '0');
                                    let yyyy = today.getFullYear();
                                    today = yyyy + '-' + mm + '-' + dd;

                                    prosesTanggal(today);
                                    $('#KIArusakrservasi').hide();
                                }
                            });
                        </script>
                    </dilv>

                    <!-- Data Diri -->
                    <input type="text" class="form-control resetable" id="name4_1" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
                    <input type="tel" class="form-control resetable" id="phone4_1" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
                    <input type="text" class="form-control resetable" id="email4_1" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

                    <!-- Doc -->
                    <div class="row">
                        <label class="col-lg-6" id="">
                            Kartu Keluarga
                            <div class="custom-file">
                                <input type="file" class="custom-file-input resetable" id="kartu_keluarga4_1" name="kartu_keluarga4_1">
                                <label class="custom-file-label" for="kartu_keluarga4_1">Pilih file Kartu Keluarga</label>
                            </div>
                        </label>
                        <label class="col-lg-6" id="">
                            Akta Kelahiran
                            <div class="custom-file">
                                <input type="file" class="custom-file-input resetable" id="akta_kelahiran4_1" name="akta_kelahiran4_1">
                                <label class="custom-file-label" for="akta_kelahiran4_1">Pilih file Akta Kelahiran</label>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kia">Kembali</button>
                    <button type="submit" id="kia-pemula" class="btn btn-common asli">Kirim</button>
                    <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- KEHILANGAN -->
<div class="modal fade" id="mod_kia_kehilangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">KIA KEHILANGAN</h5>
                &nbsp;
                &nbsp;
                <img src="assets/img/pos.png" width="50px" alt="">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="admin/KIA_handler/kia_kehilangan" enctype="multipart/form-data" method="POST">
                <div class="haiden">
                    <input type="text" name="input[jenis]" value="1">
                </div>
                <div class="modal-body">
                    <!-- Data Diri -->
                    <input type="text" class="form-control resetable" id="name4_2" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
                    <input type="tel" class="form-control resetable" id="phone4_2" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
                    <input type="text" class="form-control resetable" id="email4_2" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

                    <!-- Doc -->
                    <div class="row">
                        <label class="col-lg-6" id="">
                            Kartu Keluarga
                            <div class="custom-file">
                                <input type="file" class="custom-file-input resetable" id="kartu_keluarga4_2" name="kartu_keluarga4_2">
                                <label class="custom-file-label" for="kartu_keluarga4_2">Pilih file Kartu Keluarga</label>
                            </div>
                        </label>
                        <label class="col-lg-6" id="">
                            Akta Kelahiran
                            <div class="custom-file">
                                <input type="file" class="custom-file-input resetable" id="akta_kelahiran4_2" name="akta_kelahiran4_2">
                                <label class="custom-file-label" for="akta_kelahiran4_2">Pilih file Akta Kelahiran</label>
                            </div>
                        </label>
                        <label class="col-lg-12" id="">
                            Surat Keterangan Kehilangan
                            <div class="custom-file">
                                <input type="file" class="custom-file-input resetable" id="surat_kehilangan4_2" name="surat_kehilangan4_2">
                                <label class="custom-file-label" for="surat_kehilangan4_2">Pilih file Surat Keterangan Kehilangan</label>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kia">Kembali</button>
                    <button type="submit" id="kia_kehilangan" class="btn btn-common asli">Kirim</button>
                    <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- RUSAK -->
<div class="modal fade" id="mod_kia_rusak" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">KIA RUSAK</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="admin/KIA_handler/kia_rusak" enctype="multipart/form-data" method="POST">
                <div class="haiden">
                    <input type="text" name="input[jenis]" value="1">
                </div>
                <div class="modal-body">
                    <dilv class="reservasi">
                        <h5 class="text-dark">Kuota Tersedia : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light kk_reservasi"></button></h5>
                        <h6 class="text-dark">Jam Kehadiran Anda : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light jamKehadiranKIA" id="jamKehadiranKK"></button></h6>
                        <input type="text" name="input[jamkehadiran]" class="haiden jamKehediranKIAInput">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="KIApemularservasi custom-control-input" id="dateKIArusak">
                            <label class="KIApemularservasi custom-control-label" for="dateKIArusak">Aktifkan Mode Reservasi</label>
                        </div>

                        <div id="KIApemularservasi">
                            <label for="tanggal_reservasi1">Tanggal Reservasi</label>
                            <input type="date" require id="tanggal_reservasi1" onchange="prosesTanggal($(this).val())" name="input[tanggal_antrian]" class="form-control resetable">
                        </div>
                        <script>
                            $('#KIApemularservasi').hide();
                            $('.KIApemularservasi').click(function() {
                                if ($(this).is(':checked')) {
                                    $("input[type=date]").val("")
                                    $('#KIApemularservasi').show();
                                } else {
                                    let today = new Date();
                                    let dd = String(today.getDate()).padStart(2, '0');
                                    let mm = String(today.getMonth() + 1).padStart(2, '0');
                                    let yyyy = today.getFullYear();
                                    today = yyyy + '-' + mm + '-' + dd;

                                    prosesTanggal(today);
                                    $('#KIApemularservasi').hide();
                                }
                            });
                        </script>
                    </dilv>

                    <!-- Data Diri -->
                    <input type="text" class="form-control resetable" id="name4_3" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
                    <input type="tel" class="form-control resetable" id="phone4_3" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
                    <input type="text" class="form-control resetable" id="email4_3" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

                    <!-- Doc -->
                    <div class="row">
                        <label class="col-lg-6" id="">
                            Kartu Keluarga
                            <div class="custom-file">
                                <input type="file" class="custom-file-input resetable" id="kartu_keluarga4_3" name="kartu_keluarga4_3">
                                <label class="custom-file-label" for="kartu_keluarga4_3">Pilih file Kartu Keluarga</label>
                            </div>
                        </label>
                        <label class="col-lg-6" id="">
                            Akta Kelahiran
                            <div class="custom-file">
                                <input type="file" class="custom-file-input resetable" id="akta_kelahiran4_3" name="akta_kelahiran4_3">
                                <label class="custom-file-label" for="akta_kelahiran4_3">Pilih file Akta Kelahiran</label>
                            </div>
                        </label>
                        <label class="col-lg-12" id="">
                            KIA Lama
                            <div class="custom-file">
                                <input type="file" class="custom-file-input resetable" id="dokumen_lama4_3" name="dokumen_lama4_3">
                                <label class="custom-file-label" for="dokumen_lama4_3">Pilih file KIA Lama</label>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kia">Kembali</button>
                    <button type="submit" id="kia_rusak" class="btn btn-common asli">Kirim</button>
                    <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>