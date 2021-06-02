<?php require "header.php" ?>
<!-- Services Section Start -->
<section id="pelayanan" class="section-padding">
  <div class="container">
    <div class="section-header text-center">
      <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Pilihan Pelayanan</h2>
      <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
    </div>
    <div class="row">
      <!-- Services item -->
      <div class="col-md-6 col-lg-6 col-xs-12" data-toggle="modal" data-target="#add_ktp">
        <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
          <div class="icon">
            <i class="lni-user"></i>
          </div>
          <div class="services-content">
            <h3><a>KTP Baru</a></h3>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-xs-12" data-toggle="modal" data-target="#edit_ktp">
        <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
          <div class="icon">
            <i class="lni-users"></i>
          </div>
          <div class="services-content">
            <h3><a>Perubahan KTP</a></h3>
          </div>
        </div>
      </div>
      <!-- Services item -->
      <div class="col-md-6 col-lg-6 col-xs-12" data-toggle="modal" data-target="#add_kk">
        <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
          <div class="icon">
            <i class="lni-home"></i>
          </div>
          <div class="services-content">
            <h3><a>KK Baru</a></h3>
          </div>
        </div>
      </div>
      <!-- Services item -->
      <div class="col-md-6 col-lg-6 col-xs-12" data-toggle="modal" data-target="#edit_kk">
        <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
          <div class="icon">
            <i class="lni-apartment"></i>
          </div>
          <div class="services-content">
            <h3><a>Perubahan KK</a></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Services Section End -->

<!-- Features Section Start -->
<section id="features" class="section-padding">
  <div class="container">
    <div class="section-header text-center">
      <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Alur Pengajuan</h2>
      <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div class="content-left">
          <div class="box-item wow fadeInLeft" data-wow-delay="0.3s">
            <span class="icon">
              <i class="lni-rocket"></i>
            </span>
            <div class="text">
              <h5>Pilih menu pelayanan.</h5>
            </div>
          </div>
          <div class="box-item wow fadeInLeft" data-wow-delay="0.6s">
            <span class="icon">
              <i class="lni-laptop-phone"></i>
            </span>
            <div class="text">
              <h5>Masukan data diri anda.</h5>
            </div>
          </div>
          <div class="box-item wow fadeInLeft" data-wow-delay="0.9s">
            <span class="icon">
              <i class="lni-cog"></i>
            </span>
            <div class="text">
              <h5>Upload berkas yang diperlukan sesuai jenis pengajuan.</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div class="show-box wow fadeInUp" data-wow-delay="0.3s">
          <img src="assets/img/feature/intro-mobile2.png" alt="">
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div class="content-right">
          <div class="box-item wow fadeInRight" data-wow-delay="0.3s">
            <span class="icon">
              <i class="lni-leaf"></i>
            </span>
            <div class="text">
              <h5>Pengajuan di proses oleh petugas.</h5>
            </div>
          </div>
          <div class="box-item wow fadeInRight" data-wow-delay="0.6s">
            <span class="icon">
              <i class="lni-layers"></i>
            </span>
            <div class="text">
              <h5>Anda mendapat QR Code dari Email.</h5>
            </div>
          </div>
          <div class="box-item wow fadeInRight" data-wow-delay="0.9s">
            <span class="icon">
              <i class="lni-leaf"></i>
            </span>
            <div class="text">
              <h5>Scan QR Code di kantor dispenduk untuk mendapat antrian.</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Modal KTP BARU -->
<div class="modal fade" id="add_ktp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pengurusan KTP Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin/ktp_handler/ktp_baru" enctype="multipart/form-data" method="POST">
        <div class="haiden">
          <input type="text" name="input[jenis]" value="1">
        </div>
        <div class="modal-body">

          <dilv class="reservasi">
            <h5 class="text-dark">Kuota Tersedia : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light" id="ktpready1"></button></h5>
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

          <input type="text" class="form-control resetable" id="name1" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone1" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="text" class="form-control resetable" id="email1" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">



          <label for="kartu_keluarga1">File KK</label>
          <input type="file" require id="kartu_keluarga1" name="kartu_keluarga1" class="form-control resetable">
          <label for="akta_kelahiran1">File Akta Kelahiran</label>
          <input type="file" require id="akta_kelahiran1" name="akta_kelahiran1" class="form-control resetable">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" id="ktpbaru" class="btn btn-common asli">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>

        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal KTP PERUBAHAN -->
<div class="modal fade" id="edit_ktp" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pengurusan Perubahan KTP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin/ktp_handler/ktp_perubahan" enctype="multipart/form-data" method="POST">
        <div class="haiden">
          <input type="text" name="input[jenis]" value="2">
        </div>
        <div class="modal-body">
          <h5 class="text-dark">Kuota Tersedia : <button onclick="event.preventDefault()" class=" btn btn-sm font-weight-bold bg-danger text-light" id="ktpready2"></button></h5>
          <h6 class="text-dark">Jam Kehadiran Anda : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light jamKehadiranKTP" id="jamKehadiranKTPbaru"></button></h6>
          <input type="text" name="input[jamkehadiran]" class="haiden jamKehediranKTPInput">
          <div class="custom-control custom-switch">
            <input type="checkbox" class="ktpperubahanreservasi custom-control-input" id="customSwitch2">
            <label class="ktpperubahanreservasi custom-control-label" for="customSwitch2">Aktifkan Mode Reservasi</label>
          </div>

          <div id="ktpperubahanreservasi">
            <label for="tanggal_reservasi2">Tanggal Reservasi</label>
            <input type="date" require id="tanggal_reservasi2" onchange="prosesTanggal($(this).val())" name="input[tanggal_antrian]" class="form-control resetable">
          </div>
          <script>
            $('#ktpperubahanreservasi').hide();
            $('.ktpperubahanreservasi').click(function() {
              if ($(this).is(':checked')) {
                $("input[type=date]").val("")
                $('#ktpperubahanreservasi').show();
              } else {
                let today = new Date();
                let dd = String(today.getDate()).padStart(2, '0');
                let mm = String(today.getMonth() + 1).padStart(2, '0');
                let yyyy = today.getFullYear();
                today = yyyy + '-' + mm + '-' + dd;

                prosesTanggal(today);
                $('#ktpperubahanreservasi').hide();
              }
            });
          </script> <input type="text" class="form-control resetable" id="name2" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone2" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="email" class="form-control resetable" id="email2" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <label for="kartu_keluarga2">KK</label>
          <input type="file" require id="kartu_keluarga2" name="kartu_keluarga1" class="form-control resetable">
          <label for="ktp_lama2">KTP Lama</label>
          <input type="file" require id="ktp_lama2" name="ktp_lama" class="form-control resetable">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-common asli">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- KK BARU -->
<div class="modal fade" id="add_kk" tabindex="-3" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pengurusan KK Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin/kk_handler/kk_baru" enctype="multipart/form-data" method="POST">
        <div class="haiden">
          <input type="text" name="input[jenis]" value="1">
        </div>
        <div class="modal-body">
          <h5 class="text-dark">Kuota Tersedia : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light" id="kkready1"></button></h5>
          <h6 class="text-dark">Jam Kehadiran Anda : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light jamKehadiranKK" id="jamKehadiranKKbaru"></button></h6>
          <input type="text" name="input[jamkehadiran]" class="haiden jamKehediranKKInput">
          <div class="custom-control custom-switch">
            <input type="checkbox" class="kkbarureservasi custom-control-input" id="customSwitch3">
            <label class="kkbarureservasi custom-control-label" for="customSwitch3">Aktifkan Mode Reservasi</label>
          </div>

          <div id="kkbarureservasi">
            <label for="tanggal_reservasi1">Tanggal Reservasi</label>
            <input type="date" require id="tanggal_reservasi1" onchange="prosesTanggal($(this).val())" name="input[tanggal_antrian]" class="form-control resetable">
          </div>
          <script>
            $('#kkbarureservasi').hide();
            $('.kkbarureservasi').click(function() {
              if ($(this).is(':checked')) {
                $("input[type=date]").val("")
                $('#kkbarureservasi').show();
              } else {
                let today = new Date();
                let dd = String(today.getDate()).padStart(2, '0');
                let mm = String(today.getMonth() + 1).padStart(2, '0');
                let yyyy = today.getFullYear();
                today = yyyy + '-' + mm + '-' + dd;

                prosesTanggal(today);
                $('#kkbarureservasi').hide();
              }
            });
          </script> <input type="text" class="form-control resetable" id="name3" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone3" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="email" class="form-control resetable" id="email3" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <select name="input[pengurusan]" id="opsikkbaru" class="form-control resetableoptions" style="font-size: 11px;">
            <option value="#" selected>- Pilih Jenis Pengajuan -</option>
            <option value="1">Penerbitan KK Bagi Pasangan Baru</option>
            <option value="2">KK Rusak/Hilang</option>
          </select>

          <div id="tmp_surat_pengantar3" class="d-none">
            <label for="surat_pengantar3">Surat Pengantar</label>
            <input type="file" require id="surat_pengantar3" name="file_surat_pengantar" class="form-control resetable">
          </div>
          <div id="tmp_buku_nikah3" class="d-none">
            <label for="buku_nikah3">Buku Nikah/Akta Perkawinan</label>
            <input type="file" require id="buku_nikah3" name="file_buku_nikah" class="form-control resetable">
          </div>
          <div id="tmp_keterangan_pindah3" class="d-none">
            <label for="keterangan_pindah3">Surat Keterangan Pindah</label>
            <input type="file" require id="keterangan_pindah3" name="file_surat_pindah" class="form-control resetable">
          </div>
          <div id="tmp_keterangan_kehilangan3" class="d-none">
            <label for="keterangan_kehilangan3">Surat Keterangan Kehilangan</label>
            <input type="file" require id="keterangan_kehilangan3" name="file_surat_keterangan_hilang" class="form-control resetable">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" id="btn_kkbaru" class="btn btn-common">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" id="palsubaru" class="btn btn-default">Kirim</button>

        </div>
      </form>
    </div>
  </div>
</div>

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
<script>
  $('.resetable').val('');
  $("input[type=checkbox]").prop('checked', false);

  $(".resetableoptions").val("#");
  $('#btn_kkubah').hide();
  $('#btn_kkbaru').hide();


  $('#opsikkubah').change(function() {
    if ($('#opsikkubah').val() != '#') {
      $('#palsubah').hide();
      $('#btn_kkubah').show();
    } else {
      $('#palsubah').show();
      $('#btn_kkubah').hide();
    }
  });

  $('#opsikkbaru').change(function() {
    if ($('#opsikkbaru').val() != '#') {
      $('#palsubaru').hide();
      $('#btn_kkbaru').show();
    } else {
      $('#palsubaru').show();
      $('#btn_kkbaru').hide();
    }
  });

  let tanggal_antrian = 0;

  function prosesTanggal(param) {
    tanggal_antrian = param;
  }

  function RealtimeCounter() {

    let today = new Date();
    let dd = String(today.getDate()).padStart(2, '0');
    let mm = String(today.getMonth() + 1).padStart(2, '0');
    let yyyy = today.getFullYear();
    today = yyyy + '-' + mm + '-' + dd;

    if (tanggal_antrian == 0) {
      tanggal_antrian = today;
    }

    setInterval(() => {
      $.ajax({
        url: 'admin/Realtime_counter/counter',
        method: 'GET',
        data: {
          tanggal_antrian: tanggal_antrian
        },
        datatype: 'json',
        success: function(param) {
          const data = JSON.parse(param);
          $('#rtktp').text(data.ktp.nilai);
          $('#rtkk').text(data.kk.nilai);

          if (data.maxAntrian == 0) {
            $('.asli').hide();
            $('.palsu').show();

            $('#ktpready1').text('ANTRIAN TANGGAL INI TIDAK TERSEDIA');
            $('#ktpready2').text('ANTRIAN TANGGAL INI TIDAK TERSEDIA');
            $('#kkready1').text('ANTRIAN TANGGAL INI TIDAK TERSEDIA');
            $('#kkready2').text('ANTRIAN TANGGAL INI TIDAK TERSEDIA');
          } else {
            $('.palsu').hide();
            $('.asli').show();

            $('#ktpready1').text(data.maxAntrian.nilai - data.ktp.nilai);
            $('#ktpready2').text(data.maxAntrian.nilai - data.ktp.nilai);
            $('#kkready1').text(data.maxAntrian.nilai - data.kk.nilai);
            $('#kkready2').text(data.maxAntrian.nilai - data.kk.nilai);
            $('.jamKehadiranKTP').text(data.jamKTP);
            $('.jamKehadiranKK').text(data.jamKK);
            $('.jamKehediranKTPInput').val(data.jamKTP);
            $('.jamKehediranKKInput').val(data.jamKK);
          }
        }
      });
    }, 1000);
  }

  RealtimeCounter();
</script>


<?php require "footer.php" ?>