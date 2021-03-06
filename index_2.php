<?php require "header.php" ?>
<!-- Services Section Start -->
<section id="pelayanan" class="section-padding">
  <div class="container">
    <div class="section-header text-center">
      <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Pilihan Pelayanan</h2>
      <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
    </div>
    <div class="row">
      <!-- item -->
      <div class="col-md-6 col-lg-6 col-xs-12" data-toggle="modal" data-target="#mod_ktp">
        <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
          <div class="icon">
            <i class="lni-user"></i>
          </div>
          <div class="services-content">
            <h3><a>KTP</a></h3>
          </div>
        </div>
      </div>
      <!-- item -->
      <div class="col-md-6 col-lg-6 col-xs-12" data-toggle="modal" data-target="#mod_kk">
        <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
          <div class="icon">
            <i class="lni-users"></i>
          </div>
          <div class="services-content">
            <h3><a>KK</a></h3>
          </div>
        </div>
      </div>
      <!-- item -->
      <div class="col-md-6 col-lg-6 col-xs-12" data-toggle="modal" data-target="#mod_akta">
        <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
          <div class="icon">
            <i class="lni-home"></i>
          </div>
          <div class="services-content">
            <h3><a>Akta</a></h3>
          </div>
        </div>
      </div>
      <!-- item -->
      <div class="col-md-6 col-lg-6 col-xs-12" data-toggle="modal" data-target="#mod_kia">
        <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
          <div class="icon">
            <i class="lni-apartment"></i>
          </div>
          <div class="services-content">
            <h3><a>KIA</a></h3>
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

<!-- MODAL KTP START -->
<!-- |FIRST LAYER| -->
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
<!-- |SECOND LAYER| -->
<!-- PEMULA -->
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
<!-- KEHILANGAN -->
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
              Surat Keterangan Kehilangan dari Kepolisian
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_kehilangan1_2" name="surat_kehilangan1_2">
                <label class="custom-file-label" for="surat_kehilangan1_2">Pilih file Surat Keterangan Kehilangan dari Kepolisian</label>
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
<!-- RUSAK -->
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
<!-- MODAL KTP END -->
<!-- MODAL KK START -->
<!-- |FIRST LAYER| -->
<div class="modal fade" id="mod_kk" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PENGURUSAN KK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_baru">
            <div class="services-item">
              <div class="icon">
                <i class="lni-add-files"></i>
              </div>
              <div class="services-content">
                <h3><a>BARU</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan">
            <div class="services-item">
              <div class="icon">
                <i class="lni-pencil-alt"></i>
              </div>
              <div class="services-content">
                <h3><a>PERUBAHAN</a></h3>
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
<div class="modal fade" id="mod_kk_baru" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PENGURUSAN KK BARU</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_baru_kehilangan">
            <div class="services-item">
              <div class="icon">
                <i class="lni-question-circle"></i>
              </div>
              <div class="services-content">
                <h3><a>KEHILANGAN</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_baru_rusak">
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk">Kembali</button>
      </div>
    </div>
  </div>
</div>
<!-- PERUBAHAN -->
<div class="modal fade" id="mod_kk_perubahan" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PENGURUSAN PERUBAHAN KK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4 col-lg-4 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_perubahan">
            <div class="services-item">
              <div class="icon">
                <i class="lni-pencil-alt"></i>
              </div>
              <div class="services-content">
                <h3><a>PERUBAHAN <br> DATA</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_pengurangan">
            <div class="services-item">
              <div class="icon">
                <i class="lni-eraser"></i>
              </div>
              <div class="services-content">
                <h3><a>PENGURANGAN ANGGOTA</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_penambahan">
            <div class="services-item">
              <div class="icon">
                <i class="lni-add-files"></i>
              </div>
              <div class="services-content">
                <h3><a>PENAMBAHAN ANGGOTA</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk">Kembali</button>
      </div>
    </div>
  </div>
</div>
<!-- |THIRD LAYER| -->
<!-- KEHILANGAN -->
<div class="modal fade" id="mod_kk_baru_kehilangan" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PENGURUSAN KK HILANG</h5>
        &nbsp;
        &nbsp;
        <img src="assets/img/pos.png" width="50px" alt="">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin/kk_handler/kk_kehilangan" enctype="multipart/form-data" method="POST">
        <div class="modal-body">
          <input type="text" class="form-control resetable" id="name2_1" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone2_1" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="email" class="form-control resetable" id="email2_1" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <div class="row">
            <label class="col-lg-12" id="">
              Surat Keterangan Kehilangan dari Kepolisian
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_kehilangan2_1" name="surat_kehilangan2_1">
                <label class="custom-file-label" for="surat_kehilangan2_1">Pilih File</label>
              </div>
            </label>
            <label class="col-lg-12" id="">
              Fotocopy KK (Jika ada)
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_kehilangan2_1" name="surat_kehilangan2_1">
                <label class="custom-file-label" for="surat_kehilangan2_1">Pilih File</label>
              </div>
            </label>
            <label class="col-lg-12" id="">
              KTP Asli
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_kehilangan2_1" name="surat_kehilangan2_1">
                <label class="custom-file-label" for="surat_kehilangan2_1">Pilih File</label>
              </div>
            </label>
            <label class="col-lg-12" id="">
              Surat Nikah / Akta Cerai / Akta Kematian Asli
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_kehilangan2_1" name="surat_kehilangan2_1">
                <label class="custom-file-label" for="surat_kehilangan2_1">Pilih File</label>
              </div>
            </label>
            <label class="col-lg-12" id="">
              Ijazah Terkahir
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_kehilangan2_1" name="surat_kehilangan2_1">
                <label class="custom-file-label" for="surat_kehilangan2_1">Pilih File</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_baru">Kembali</button>
          <button type="submit" id="btn_kkkehilangan" class="btn btn-common">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" id="palsubaru" class="btn btn-default">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- RUSAK -->
<div class="modal fade" id="mod_kk_baru_rusak" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PENGURUSAN KK RUSAK</h5>
        &nbsp;
        &nbsp;
        <img src="assets/img/pos.png" width="50px" alt="">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin/kk_handler/kk_rusak" enctype="multipart/form-data" method="POST">
        <div class="modal-body">
          <input type="text" class="form-control resetable" id="name2_2" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone2_2" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="email" class="form-control resetable" id="email2_2" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <div class="row">
            <label class="col-lg-12" id="">
              Kartu Keluarga Asli Yang Rusak
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_2" name="dokumen_lama2_2">
                <label class="custom-file-label" for="dokumen_lama2_2">Pilih file Kartu Keluarga Lama</label>
              </div>
            </label>
            <label class="col-lg-12" id="">
              Surat Nikah / Cerai/ Kematian
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_2" name="dokumen_lama2_2">
                <label class="custom-file-label" for="dokumen_lama2_2">Pilih file Kartu Keluarga Lama</label>
              </div>
            </label>
            <label class="col-lg-12" id="">
              Ijazah Terakhir
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_2" name="dokumen_lama2_2">
                <label class="custom-file-label" for="dokumen_lama2_2">Pilih file Kartu Keluarga Lama</label>
              </div>
            </label>
            <label class="col-lg-12" id="">
              Akta Kelahiran
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_2" name="dokumen_lama2_2">
                <label class="custom-file-label" for="dokumen_lama2_2">Pilih file Kartu Keluarga Lama</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_baru">Kembali</button>
          <button type="submit" id="btn_kkrusak" class="btn btn-common">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" id="palsubaru" class="btn btn-default">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- PERUBAHAN -->
<div class="modal fade" id="mod_kk_perubahan_perubahan" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PERUBAHAN KK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-md-6 col-lg-6 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_perubahan1">
            <div class="services-item">
              <div class="icon">
                <i class="lni-pencil-alt"></i>
              </div>
              <div class="services-content">
                <h3><a>PERUBAHAN</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_perubahan2">
            <div class="services-item">
              <div class="icon">
                <i class="lni-users"></i>
              </div>
              <div class="services-content">
                <h3><a>PECAH KK DALAM 1 DESA</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan">Kembali</button>
      </div>
    </div>
  </div>
</div>
<!-- PENGURANGAN ANGGOTA -->
<div class="modal fade" id="mod_kk_perubahan_pengurangan" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PENGURANGAN ANGGOTA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_pengurangan_pindah">
            <div class="services-item">
              <div class="icon">
                <i class="lni-car"></i>
              </div>
              <div class="services-content">
                <h3><a>PINDAH KELUAR</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_pengurangan_kematian">
            <div class="services-item">
              <div class="icon">
                <i class="lni-pulse"></i>
              </div>
              <div class="services-content">
                <h3><a>KEMATIAN</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan">Kembali</button>
      </div>
    </div>
  </div>
</div>
<!-- PENAMBAHAN ANGGOTA -->
<div class="modal fade" id="mod_kk_perubahan_penambahan" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PENAMBAHAN ANGGOTA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_penambahan1">
            <div class="services-item">
              <div class="icon">
                <i class="lni-train"></i>
              </div>
              <div class="services-content">
                <h3><a>KEDATANGAN</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_penambahan2">
            <div class="services-item">
              <div class="icon">
                <i class="lni-users"></i>
              </div>
              <div class="services-content">
                <h3><a>KELAHIRAN</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan">Kembali</button>
      </div>
    </div>
  </div>
</div>
<!-- |FOURTH LAYER| -->
<!-- PERUBAHAN -->
<div class="modal fade" id="mod_kk_perubahan_perubahan1" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PERUBAHAN KK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin/kk_handler/kk_perubahan_data" enctype="multipart/form-data" method="POST">
        <div class="modal-body">

          <dilv class="reservasi">
            <h5 class="text-dark">Kuota Tersedia : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light kk_reservasi"></button></h5>
            <h6 class="text-dark">Jam Kehadiran Anda : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light jamKehadiranKK" id="jamKehadiranKK"></button></h6>
            <input type="text" name="input[jamkehadiran]" class="haiden jamKehediranKKInput">
            <div class="custom-control custom-switch">
              <input type="checkbox" class="kkperubahandata custom-control-input" id="customSwitch2">
              <label class="kkperubahandata custom-control-label" for="customSwitch2">Aktifkan Mode Reservasi</label>
            </div>

            <div id="kkperubahandata">
              <label for="tanggal_reservasi1">Tanggal Reservasi</label>
              <input type="date" require id="tanggal_reservasi1" onchange="prosesTanggal($(this).val())" name="input[tanggal_antrian]" class="form-control resetable">
            </div>
            <script>
              $('#kkperubahandata').hide();
              $('.kkperubahandata').click(function() {
                if ($(this).is(':checked')) {
                  $("input[type=date]").val("")
                  $('#kkperubahandata').show();
                } else {
                  let today = new Date();
                  let dd = String(today.getDate()).padStart(2, '0');
                  let mm = String(today.getMonth() + 1).padStart(2, '0');
                  let yyyy = today.getFullYear();
                  today = yyyy + '-' + mm + '-' + dd;

                  prosesTanggal(today);
                  $('#kkperubahandata').hide();
                }
              });
            </script>
          </dilv>
          <input type="text" class="form-control resetable" id="name2_3" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone2_3" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="email" class="form-control resetable" id="email2_3" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <div class="row">
            <label class="col-lg-4" id="">
              KK Asli
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_3" name="dokumen_lama2_3">
                <label class="custom-file-label" for="dokumen_lama2_3">Pilih file </label>
              </div>
            </label>
            <label class="col-lg-4" id="">
              KTP Asli
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_3" name="dokumen_lama2_3">
                <label class="custom-file-label" for="dokumen_lama2_3">Pilih file </label>
              </div>
            </label>
            <label class="col-lg-4" id="">
              Akta Kelahiran Asli
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_3" name="dokumen_lama2_3">
                <label class="custom-file-label" for="dokumen_lama2_3">Pilih file Akta </label>
              </div>
            </label>
          </div>
          <div class="row">
            <label class="col-lg-6" id="">
              Surat Nikah/Akta Cerai/ Akta Kematian
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_3" name="dokumen_lama2_3">
                <label class="custom-file-label" for="dokumen_lama2_3">Pilih file </label>
              </div>
            </label>
            <label class="col-lg-6" id="">
              Surat Mualaf / Baptis (Apabila Pindah Agama)
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_3" name="dokumen_lama2_3">
                <label class="custom-file-label" for="dokumen_lama2_3">Pilih file </label>
              </div>
            </label>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_perubahan">Kembali</button>
          <button type="submit" id="btn_kkkperubahandata" class="btn btn-common">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" id="palsuperubahandata" class="btn btn-default">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- PECAH KK DALAM 1 DESA -->
<div class="modal fade" id="mod_kk_perubahan_perubahan2" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PECAH KK DALAM 1 DESA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin/kk_handler/kk_pecah_1desa" enctype="multipart/form-data" method="POST">
        <div class="modal-body">

          <dilv class="reservasi">
            <h5 class="text-dark">Kuota Tersedia : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light kk_reservasi"></button></h5>
            <h6 class="text-dark">Jam Kehadiran Anda : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light jamKehadiranKK" id="jamKehadiranKK"></button></h6>
            <input type="text" name="input[jamkehadiran]" class="haiden jamKehediranKKInput">
            <div class="custom-control custom-switch">
              <input type="checkbox" class="kkpecah1desa custom-control-input" id="customSwitch3">
              <label class="kkpecah1desa custom-control-label" for="customSwitch3">Aktifkan Mode Reservasi</label>
            </div>

            <div id="kkpecah1desa">
              <label for="tanggal_reservasi1">Tanggal Reservasi</label>
              <input type="date" require id="tanggal_reservasi1" onchange="prosesTanggal($(this).val())" name="input[tanggal_antrian]" class="form-control resetable">
            </div>
            <script>
              $('#kkpecah1desa').hide();
              $('.kkpecah1desa').click(function() {
                if ($(this).is(':checked')) {
                  $("input[type=date]").val("")
                  $('#kkpecah1desa').show();
                } else {
                  let today = new Date();
                  let dd = String(today.getDate()).padStart(2, '0');
                  let mm = String(today.getMonth() + 1).padStart(2, '0');
                  let yyyy = today.getFullYear();
                  today = yyyy + '-' + mm + '-' + dd;

                  prosesTanggal(today);
                  $('#kkpecah1desa').hide();
                }
              });
            </script>
          </dilv>


          <input type="text" class="form-control resetable" id="name2_4" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone2_4" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="email" class="form-control resetable" id="email2_4" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <div class="row">
            <label class="col-lg-12" id="">
              KK Suami
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_4" name="dokumen_lama2_4">
                <label class="custom-file-label" for="dokumen_lama2_4">Pilih file </label>
              </div>
            </label>
            <label class="col-lg-12" id="">
              KK Istri
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_4" name="dokumen_lama2_4">
                <label class="custom-file-label" for="dokumen_lama2_4">Pilih file </label>
              </div>
            </label>
            <label class="col-lg-12" id="">
              Surat Nikah Asli
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_4" name="dokumen_lama2_4">
                <label class="custom-file-label" for="dokumen_lama2_4">Pilih file </label>
              </div>
            </label>
            <label class="col-lg-12" id="">
              Ijazah Terakhir Asli
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_4" name="dokumen_lama2_4">
                <label class="custom-file-label" for="dokumen_lama2_4">Pilih file </label>
              </div>
            </label>
            <label class="col-lg-12" id="">
              Akta Asli
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_4" name="dokumen_lama2_4">
                <label class="custom-file-label" for="dokumen_lama2_4">Pilih file </label>
              </div>
            </label>
            <label class="col-lg-12" id="">
              Surat Nikah Dari Orang Tua Suami
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_4" name="dokumen_lama2_4">
                <label class="custom-file-label" for="dokumen_lama2_4">Pilih file </label>
              </div>
            </label>
            <label class="col-lg-12" id="">
              Surat Nikah Dari Orang Tua Istri
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_4" name="dokumen_lama2_4">
                <label class="custom-file-label" for="dokumen_lama2_4">Pilih file </label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_perubahan">Kembali</button>
          <button type="submit" id="btn_kkpecah_1desa" class="btn btn-common">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" id="palsupecah_1desa" class="btn btn-default">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- PINDAH KELUAR -->
<div class="modal fade" id="mod_kk_perubahan_pengurangan_pindah" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PINDAH KELUAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_pengurangan_pindah_desa">
            <div class="services-item">
              <div class="icon">
                <i class="lni-car"></i>
              </div>
              <div class="services-content">
                <h3><a>PINDAH DESA/KECAMATAN</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_pengurangan_pindah_kota">
            <div class="services-item">
              <div class="icon">
                <i class="lni-apartment"></i>
              </div>
              <div class="services-content">
                <h3><a>PINDAH KELUAR KOTA</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan">Kembali</button>
      </div>
    </div>
  </div>
</div>
<!-- KEMATIAN -->
<div class="modal fade" id="mod_kk_perubahan_pengurangan_kematian" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">KEMATIAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin/kk_handler/kk_pengurangan_kematian" enctype="multipart/form-data" method="POST">
        <div class="modal-body">

          <dilv class="reservasi">
            <h5 class="text-dark">Kuota Tersedia : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light kk_reservasi"></button></h5>
            <h6 class="text-dark">Jam Kehadiran Anda : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light jamKehadiranKK" id="jamKehadiranKK"></button></h6>
            <input type="text" name="input[jamkehadiran]" class="haiden jamKehediranKKInput">
            <div class="custom-control custom-switch">
              <input type="checkbox" class="kkpengurangankematian custom-control-input" id="pengurangankematiankk">
              <label class="kkpengurangankematian custom-control-label" for="pengurangankematiankk">Aktifkan Mode Reservasi</label>
            </div>

            <div id="kkpengurangankematian">
              <label for="tanggal_reservasi1">Tanggal Reservasi</label>
              <input type="date" require id="tanggal_reservasi1" onchange="prosesTanggal($(this).val())" name="input[tanggal_antrian]" class="form-control resetable">
            </div>
            <script>
              $('#kkpengurangankematian').hide();
              $('.kkpengurangankematian').click(function() {
                if ($(this).is(':checked')) {
                  $("input[type=date]").val("")
                  $('#kkpengurangankematian').show();
                } else {
                  let today = new Date();
                  let dd = String(today.getDate()).padStart(2, '0');
                  let mm = String(today.getMonth() + 1).padStart(2, '0');
                  let yyyy = today.getFullYear();
                  today = yyyy + '-' + mm + '-' + dd;

                  prosesTanggal(today);
                  $('#kkpengurangankematian').hide();
                }
              });
            </script>
          </dilv>

          <input type="text" class="form-control resetable" id="name2_6" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone2_6" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="email" class="form-control resetable" id="email2_6" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <div class="row">
            <label class="col-lg-6" id="">
              Surat Keterangan Kematian
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_kematian2_6" name="surat_kematian2_6">
                <label class="custom-file-label" for="surat_kematian2_6">Pilih file Surat Keterangan Kematian</label>
              </div>
            </label>
            <label class="col-lg-6" id="">
              Kartu Keluarga Lama
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_6" name="dokumen_lama2_6">
                <label class="custom-file-label" for="dokumen_lama2_6">Pilih file Kartu Keluarga Lama</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_pengurangan">Kembali</button>
          <button type="submit" id="btn_kk_pengurangan_kematian" class="btn btn-common">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" id="palsu_pengurangan_kematian" class="btn btn-default">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- KEDATANGAN -->
<div class="modal fade" id="mod_kk_perubahan_penambahan1" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">KEDATANGAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin/kk_handler/kk_penambahan_kedatangan" enctype="multipart/form-data" method="POST">
        <div class="modal-body">

          <dilv class="reservasi">
            <h5 class="text-dark">Kuota Tersedia : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light kk_reservasi"></button></h5>
            <h6 class="text-dark">Jam Kehadiran Anda : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light jamKehadiranKK" id="jamKehadiranKK"></button></h6>
            <input type="text" name="input[jamkehadiran]" class="haiden jamKehediranKKInput">
            <div class="custom-control custom-switch">
              <input type="checkbox" class="kkpenambahankedatangan custom-control-input" id="datepenambahankedatangankk">
              <label class="kkpenambahankedatangan custom-control-label" for="datepenambahankedatangankk">Aktifkan Mode Reservasi</label>
            </div>

            <div id="kkpenambahankedatangan">
              <label for="tanggal_reservasi1">Tanggal Reservasi</label>
              <input type="date" require id="tanggal_reservasi1" onchange="prosesTanggal($(this).val())" name="input[tanggal_antrian]" class="form-control resetable">
            </div>
            <script>
              $('#kkpenambahankedatangan').hide();
              $('.kkpenambahankedatangan').click(function() {
                if ($(this).is(':checked')) {
                  $("input[type=date]").val("")
                  $('#kkpenambahankedatangan').show();
                } else {
                  let today = new Date();
                  let dd = String(today.getDate()).padStart(2, '0');
                  let mm = String(today.getMonth() + 1).padStart(2, '0');
                  let yyyy = today.getFullYear();
                  today = yyyy + '-' + mm + '-' + dd;

                  prosesTanggal(today);
                  $('#kkpenambahankedatangan').hide();
                }
              });
            </script>
          </dilv>

          <input type="text" class="form-control resetable" id="name2_7" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone2_7" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="email" class="form-control resetable" id="email2_7" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <div class="row">
            <label class="col-lg-6" id="">
              Surat Keterangan Pindah
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_pindah2_7" name="surat_pindah2_7">
                <label class="custom-file-label" for="surat_pindah2_7">Pilih file Surat Keterangan Pindah</label>
              </div>
            </label>
            <label class="col-lg-6" id="">
              Kartu Keluarga Lama
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_7" name="dokumen_lama2_7">
                <label class="custom-file-label" for="dokumen_lama2_7">Pilih file Kartu Keluarga Lama</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_penambahan">Kembali</button>
          <button type="submit" id="btn_kkpenambahan_kedatangan" class="btn btn-common">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" id="palsupenambahan_kedatangan" class="btn btn-default">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- KELAHIRAN -->
<div class="modal fade" id="mod_kk_perubahan_penambahan2" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">KELAHIRAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin/kk_handler/kk_penambahan_kelahiran" enctype="multipart/form-data" method="POST">
        <div class="modal-body">

          <dilv class="reservasi">
            <h5 class="text-dark">Kuota Tersedia : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light kk_reservasi"></button></h5>
            <h6 class="text-dark">Jam Kehadiran Anda : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light jamKehadiranKK" id="jamKehadiranKK"></button></h6>
            <input type="text" name="input[jamkehadiran]" class="haiden jamKehediranKKInput">
            <div class="custom-control custom-switch">
              <input type="checkbox" class="kkpenambahankelahiran custom-control-input" id="kelahirankk">
              <label class="kkpenambahankelahiran custom-control-label" for="kelahirankk">Aktifkan Mode Reservasi</label>
            </div>

            <div id="kkpenambahankelahiran">
              <label for="tanggal_reservasi1">Tanggal Reservasi</label>
              <input type="date" require id="tanggal_reservasi1" onchange="prosesTanggal($(this).val())" name="input[tanggal_antrian]" class="form-control resetable">
            </div>
            <script>
              $('#kkpenambahankelahiran').hide();
              $('.kkpenambahankelahiran').click(function() {
                if ($(this).is(':checked')) {
                  $("input[type=date]").val("")
                  $('#kkpenambahankelahiran').show();
                } else {
                  let today = new Date();
                  let dd = String(today.getDate()).padStart(2, '0');
                  let mm = String(today.getMonth() + 1).padStart(2, '0');
                  let yyyy = today.getFullYear();
                  today = yyyy + '-' + mm + '-' + dd;

                  prosesTanggal(today);
                  $('#kkpenambahankelahiran').hide();
                }
              });
            </script>
          </dilv>

          <input type="text" class="form-control resetable" id="name2_8" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone2_8" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="email" class="form-control resetable" id="email2_8" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <div class="row">
            <label class="col-lg-6" id="">
              Surat Keterangan Kelahiran
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_kelahiran2_8" name="surat_kelahiran2_8">
                <label class="custom-file-label" for="surat_kelahiran2_8">Pilih file Surat Keterangan Kelahiran</label>
              </div>
            </label>
            <label class="col-lg-6" id="">
              Kartu Keluarga Lama
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_8" name="dokumen_lama2_8">
                <label class="custom-file-label" for="dokumen_lama2_8">Pilih file Kartu Keluarga Lama</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_penambahan">Kembali</button>
          <button type="submit" id="btn_kkpenambahan_kelahiran" class="btn btn-common">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" id="palsupenambahan_kelahiran" class="btn btn-default">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- |FIFTH LAYER| -->
<!-- PINDAH DESA/KECAMATAN -->
<div class="modal fade" id="mod_kk_perubahan_pengurangan_pindah_desa" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PINDAH DESA/KECAMATAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin/kk_handler/kk_pindah_keluar" enctype="multipart/form-data" method="POST">
        <div class="modal-body">

          <dilv class="reservasi">
            <h5 class="text-dark">Kuota Tersedia : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light kk_reservasi"></button></h5>
            <h6 class="text-dark">Jam Kehadiran Anda : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light jamKehadiranKK" id="jamKehadiranKK"></button></h6>
            <input type="text" name="input[jamkehadiran]" class="haiden jamKehediranKKInput">
            <div class="custom-control custom-switch">
              <input type="checkbox" class="kkpindahkeluar custom-control-input" id="pindahkeluarkk">
              <label class="kkpindahkeluar custom-control-label" for="pindahkeluarkk">Aktifkan Mode Reservasi</label>
            </div>

            <div id="kkpindahkeluar">
              <label for="tanggal_reservasi1">Tanggal Reservasi</label>
              <input type="date" require id="tanggal_reservasi1" onchange="prosesTanggal($(this).val())" name="input[tanggal_antrian]" class="form-control resetable">
            </div>
            <script>
              $('#kkpindahkeluar').hide();
              $('.kkpindahkeluar').click(function() {
                if ($(this).is(':checked')) {
                  $("input[type=date]").val("")
                  $('#kkpindahkeluar').show();
                } else {
                  let today = new Date();
                  let dd = String(today.getDate()).padStart(2, '0');
                  let mm = String(today.getMonth() + 1).padStart(2, '0');
                  let yyyy = today.getFullYear();
                  today = yyyy + '-' + mm + '-' + dd;

                  prosesTanggal(today);
                  $('#kkpindahkeluar').hide();
                }
              });
            </script>
          </dilv>

          <input type="text" class="form-control resetable" id="name2_5" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone2_5" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="email" class="form-control resetable" id="email2_5" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <div class="row">
            <label class="col-lg-6" id="">
              Surat Keterangan Pindah
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_pindah2_5" name="surat_pindah2_5">
                <label class="custom-file-label" for="surat_pindah2_5">Pilih file Surat Keterangan Pindah</label>
              </div>
            </label>
            <label class="col-lg-6" id="">
              Kartu Keluarga Lama
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_5" name="dokumen_lama2_5">
                <label class="custom-file-label" for="dokumen_lama2_5">Pilih file Kartu Keluarga Lama</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_pengurangan_pindah">Kembali</button>
          <button type="submit" id="btn_kkpindah_keluar" class="btn btn-common">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" id="palsupindah_keluar" class="btn btn-default">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- PINDAH KELUAR KOTA -->
<div class="modal fade" id="mod_kk_perubahan_pengurangan_pindah_kota" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PINDAH KELUAR KOTA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin/kk_handler/kk_pindah_keluar" enctype="multipart/form-data" method="POST">
        <div class="modal-body">

          <dilv class="reservasi">
            <h5 class="text-dark">Kuota Tersedia : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light kk_reservasi"></button></h5>
            <h6 class="text-dark">Jam Kehadiran Anda : <button onclick="event.preventDefault()" class="btn btn-sm font-weight-bold bg-danger text-light jamKehadiranKK" id="jamKehadiranKK"></button></h6>
            <input type="text" name="input[jamkehadiran]" class="haiden jamKehediranKKInput">
            <div class="custom-control custom-switch">
              <input type="checkbox" class="kkpindahkeluar custom-control-input" id="pindahkeluarkk">
              <label class="kkpindahkeluar custom-control-label" for="pindahkeluarkk">Aktifkan Mode Reservasi</label>
            </div>

            <div id="kkpindahkeluar">
              <label for="tanggal_reservasi1">Tanggal Reservasi</label>
              <input type="date" require id="tanggal_reservasi1" onchange="prosesTanggal($(this).val())" name="input[tanggal_antrian]" class="form-control resetable">
            </div>
            <script>
              $('#kkpindahkeluar').hide();
              $('.kkpindahkeluar').click(function() {
                if ($(this).is(':checked')) {
                  $("input[type=date]").val("")
                  $('#kkpindahkeluar').show();
                } else {
                  let today = new Date();
                  let dd = String(today.getDate()).padStart(2, '0');
                  let mm = String(today.getMonth() + 1).padStart(2, '0');
                  let yyyy = today.getFullYear();
                  today = yyyy + '-' + mm + '-' + dd;

                  prosesTanggal(today);
                  $('#kkpindahkeluar').hide();
                }
              });
            </script>
          </dilv>

          <input type="text" class="form-control resetable" id="name2_5" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone2_5" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="email" class="form-control resetable" id="email2_5" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <div class="row">
            <label class="col-lg-6" id="">
              Surat Keterangan Pindah
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_pindah2_5" name="surat_pindah2_5">
                <label class="custom-file-label" for="surat_pindah2_5">Pilih file Surat Keterangan Pindah</label>
              </div>
            </label>
            <label class="col-lg-6" id="">
              Kartu Keluarga Lama
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_5" name="dokumen_lama2_5">
                <label class="custom-file-label" for="dokumen_lama2_5">Pilih file Kartu Keluarga Lama</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_pengurangan_pindah">Kembali</button>
          <button type="submit" id="btn_kkpindah_keluar" class="btn btn-common">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" id="palsupindah_keluar" class="btn btn-default">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- MODAL KK END -->
<!-- MODAL AKTA START -->
<!-- |FIRST LAYER| -->
<div class="modal fade" id="mod_akta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PENGURUSAN AKTA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3 col-lg-3 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_kelahiran">
            <div class="services-item">
              <div class="icon">
                <i class="lni-add-files"></i>
              </div>
              <div class="services-content">
                <h3><a>KELAHIRAN</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_kematian">
            <div class="services-item">
              <div class="icon">
                <i class="lni-question-circle"></i>
              </div>
              <div class="services-content">
                <h3><a>KEMATIAN</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_perkawinan">
            <div class="services-item">
              <div class="icon">
                <i class="lni-heart"></i>
              </div>
              <div class="services-content">
                <h3><a>PERKAWINAN</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_perceraian">
            <div class="services-item">
              <div class="icon">
                <i class="lni-cut"></i>
              </div>
              <div class="services-content">
                <h3><a>PERCERAIAN</a></h3>
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
<!-- KELAHIRAN -->
<div class="modal fade" id="mod_akta_kelahiran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
          <div class="col-md-3 col-lg-3 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_kelahiran_baru">
            <div class="services-item">
              <div class="icon">
                <i class="lni-add-files"></i>
              </div>
              <div class="services-content">
                <h3><a>BARU</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_kelahiran_hilang">
            <div class="services-item">
              <div class="icon">
                <i class="lni-question-circle"></i>
              </div>
              <div class="services-content">
                <h3><a>HILANG</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_kelahiran_rusak">
            <div class="services-item">
              <div class="icon">
                <i class="lni-cut"></i>
              </div>
              <div class="services-content">
                <h3><a>RUSAK</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_kelahiran_pembaruan">
            <div class="services-item">
              <div class="icon">
                <i class="lni-reload"></i>
              </div>
              <div class="services-content">
                <h3><a>PEMBARUAN</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta">Kembali</button>
      </div>
    </div>
  </div>
</div>
<!-- KEMATIAN -->
<div class="modal fade" id="mod_akta_kematian" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PENGURUSAN AKTA KEMATIAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3 col-lg-3 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_kematian_baru">
            <div class="services-item">
              <div class="icon">
                <i class="lni-add-files"></i>
              </div>
              <div class="services-content">
                <h3><a>BARU</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_kematian_hilang">
            <div class="services-item">
              <div class="icon">
                <i class="lni-question-circle"></i>
              </div>
              <div class="services-content">
                <h3><a>HILANG</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_kematian_rusak">
            <div class="services-item">
              <div class="icon">
                <i class="lni-cut"></i>
              </div>
              <div class="services-content">
                <h3><a>RUSAK</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_kematian_pembaruan">
            <div class="services-item">
              <div class="icon">
                <i class="lni-reload"></i>
              </div>
              <div class="services-content">
                <h3><a>PEMBARUAN</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta">Kembali</button>
      </div>
    </div>
  </div>
</div>
<!-- PERKAWINAN -->
<div class="modal fade" id="mod_akta_perkawinan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PENGURUSAN AKTA PERKAWINAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3 col-lg-3 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_perkawinan_baru">
            <div class="services-item">
              <div class="icon">
                <i class="lni-add-files"></i>
              </div>
              <div class="services-content">
                <h3><a>BARU</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_perkawinan_hilang">
            <div class="services-item">
              <div class="icon">
                <i class="lni-question-circle"></i>
              </div>
              <div class="services-content">
                <h3><a>HILANG</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_perkawinan_rusak">
            <div class="services-item">
              <div class="icon">
                <i class="lni-cut"></i>
              </div>
              <div class="services-content">
                <h3><a>RUSAK</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_perkawinan_pembaruan">
            <div class="services-item">
              <div class="icon">
                <i class="lni-reload"></i>
              </div>
              <div class="services-content">
                <h3><a>PEMBARUAN</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta">Kembali</button>
      </div>
    </div>
  </div>
</div>
<!-- PERCERAIAN -->
<div class="modal fade" id="mod_akta_perceraian" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PENGURUSAN AKTA PERCERAIAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3 col-lg-3 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_perceraian_baru">
            <div class="services-item">
              <div class="icon">
                <i class="lni-add-files"></i>
              </div>
              <div class="services-content">
                <h3><a>BARU</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_perceraian_hilang">
            <div class="services-item">
              <div class="icon">
                <i class="lni-question-circle"></i>
              </div>
              <div class="services-content">
                <h3><a>HILANG</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_perceraian_rusak">
            <div class="services-item">
              <div class="icon">
                <i class="lni-cut"></i>
              </div>
              <div class="services-content">
                <h3><a>RUSAK</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_perceraian_pembaruan">
            <div class="services-item">
              <div class="icon">
                <i class="lni-reload"></i>
              </div>
              <div class="services-content">
                <h3><a>PEMBARUAN</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta">Kembali</button>
      </div>
    </div>
  </div>
</div>
<!-- |THIRD LAYER| -->
<!-- KELAHIRAN BARU -->
<div class="modal fade" id="mod_akta_kelahiran_baru" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">AKTA KELAHIRAN BARU</h5>
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
          <input type="text" class="form-control resetable" id="name311" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone311" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="text" class="form-control resetable" id="email311" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <!-- Doc -->
          <div class="row">
            <label class="col-lg-12" id="">
              Surat Keterangan Kelahiran
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_kelahiran311" name="surat_kelahiran311">
                <label class="custom-file-label" for="surat_kelahiran311">Pilih file Surat Keterangan Kelahiran</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_kelahiran">Kembali</button>
          <button type="submit" id="akta_baru" class="btn btn-common asli">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- KELAHIRAN HILANG -->
<div class="modal fade" id="mod_akta_kelahiran_hilang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">AKTA KELAHIRAN HILANG</h5>
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
          <input type="text" class="form-control resetable" id="name312" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone312" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="text" class="form-control resetable" id="email312" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <!-- Doc -->
          <div class="row">
            <label class="col-lg-12" id="">
              Surat Keterangan Kehilangan dari Kepolisian
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_kehilangan312" name="surat_kehilangan312">
                <label class="custom-file-label" for="surat_kehilangan312">Pilih file Surat Keterangan Kehilangan dari Kepolisian</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_kelahiran">Kembali</button>
          <button type="submit" id="akta_baru" class="btn btn-common asli">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- KELAHIRAN RUSAK -->
<div class="modal fade" id="mod_akta_kelahiran_rusak" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">AKTA KELAHIRAN RUSAK</h5>
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
          <input type="text" class="form-control resetable" id="name313" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone313" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="text" class="form-control resetable" id="email313" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <!-- Doc -->
          <div class="row">
            <label class="col-lg-12" id="">
              Akta Lama
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="akta_lama313" name="akta_lama313">
                <label class="custom-file-label" for="akta_lama313">Pilih file Akta Lama</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_kelahiran">Kembali</button>
          <button type="submit" id="akta_rusak" class="btn btn-common asli">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- KELAHIRAN PEMBARUAN -->
<div class="modal fade" id="mod_akta_kelahiran_pembaruan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">AKTA KELAHIRAN PEMBARUAN</h5>
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
          <input type="text" class="form-control resetable" id="name314" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone314" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="text" class="form-control resetable" id="email314" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <!-- Doc -->
          <div class="row">
            <label class="col-lg-12" id="">
              Akta Lama
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="akta_lama314" name="akta_lama314">
                <label class="custom-file-label" for="akta_lama314">Pilih file Akta Lama</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_kelahiran">Kembali</button>
          <button type="submit" id="akta_rusak" class="btn btn-common asli">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- KEMATIAN BARU -->
<div class="modal fade" id="mod_akta_kematian_baru" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">AKTA KEMATIAN BARU</h5>
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
          <input type="text" class="form-control resetable" id="name321" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone321" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="text" class="form-control resetable" id="email321" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <!-- Doc -->
          <div class="row">
            <label class="col-lg-12" id="">
              Surat Keterangan Kematian
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_kematian321" name="surat_kematian321">
                <label class="custom-file-label" for="surat_kematian321">Pilih file Surat Keterangan Kematian</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_kematian">Kembali</button>
          <button type="submit" id="akta_baru" class="btn btn-common asli">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- KEMATIAN HILANG -->
<div class="modal fade" id="mod_akta_kematian_hilang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">AKTA KEMATIAN HILANG</h5>
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
          <input type="text" class="form-control resetable" id="name322" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone322" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="text" class="form-control resetable" id="email322" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <!-- Doc -->
          <div class="row">
            <label class="col-lg-12" id="">
              Surat Keterangan Kehilangan dari Kepolisian
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_kehilangan322" name="surat_kehilangan322">
                <label class="custom-file-label" for="surat_kehilangan322">Pilih file Surat Keterangan Kehilangan dari Kepolisian</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_kematian">Kembali</button>
          <button type="submit" id="akta_baru" class="btn btn-common asli">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- KEMATIAN RUSAK -->
<div class="modal fade" id="mod_akta_kematian_rusak" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">AKTA KEMATIAN RUSAK</h5>
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
          <input type="text" class="form-control resetable" id="name323" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone323" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="text" class="form-control resetable" id="email323" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <!-- Doc -->
          <div class="row">
            <label class="col-lg-12" id="">
              Akta Lama
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="akta_lama323" name="akta_lama323">
                <label class="custom-file-label" for="akta_lama323">Pilih file Akta Lama</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_kematian">Kembali</button>
          <button type="submit" id="akta_rusak" class="btn btn-common asli">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- KEMATIAN PEMBARUAN -->
<div class="modal fade" id="mod_akta_kematian_pembaruan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">AKTA KEMATIAN PEMBARUAN</h5>
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
          <input type="text" class="form-control resetable" id="name324" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone324" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="text" class="form-control resetable" id="email324" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <!-- Doc -->
          <div class="row">
            <label class="col-lg-12" id="">
              Akta Lama
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="akta_lama324" name="akta_lama324">
                <label class="custom-file-label" for="akta_lama324">Pilih file Akta Lama</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_kematian">Kembali</button>
          <button type="submit" id="akta_rusak" class="btn btn-common asli">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- PERKAWINAN BARU -->
<div class="modal fade" id="mod_akta_perkawinan_baru" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">AKTA PERKAWINAN BARU</h5>
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
          <input type="text" class="form-control resetable" id="name331" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone331" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="text" class="form-control resetable" id="email331" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <!-- Doc -->
          <div class="row">
            <label class="col-lg-12" id="">
              Surat Keterangan Perkawinan
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_kelahiran321" name="surat_kelahiran321">
                <label class="custom-file-label" for="surat_kelahiran321">Pilih file Surat Keterangan Perkawinan</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_perkawinan">Kembali</button>
          <button type="submit" id="akta_baru" class="btn btn-common asli">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- PERKAWINAN HILANG -->
<div class="modal fade" id="mod_akta_perkawinan_hilang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">AKTA PERKAWINAN HILANG</h5>
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
          <input type="text" class="form-control resetable" id="name332" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone332" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="text" class="form-control resetable" id="email332" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <!-- Doc -->
          <div class="row">
            <label class="col-lg-12" id="">
              Surat Keterangan Kehilangan dari Kepolisian
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_kehilangan332" name="surat_kehilangan332">
                <label class="custom-file-label" for="surat_kehilangan332">Pilih file Surat Keterangan Kehilangan dari Kepolisian</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_perkawinan">Kembali</button>
          <button type="submit" id="akta_baru" class="btn btn-common asli">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- PERKWINAN RUSAK -->
<div class="modal fade" id="mod_akta_perkawinan_rusak" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">AKTA PERKAWINAN RUSAK</h5>
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
          <input type="text" class="form-control resetable" id="name333" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone333" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="text" class="form-control resetable" id="email333" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <!-- Doc -->
          <div class="row">
            <label class="col-lg-12" id="">
              Akta Lama
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="akta_lama333" name="akta_lama333">
                <label class="custom-file-label" for="akta_lama333">Pilih file Akta Lama</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_perkawinan">Kembali</button>
          <button type="submit" id="akta_rusak" class="btn btn-common asli">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- PERKAWINAN PEMBARUAN -->
<div class="modal fade" id="mod_akta_perkawinan_pembaruan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">AKTA PERKAWINAN PEMBARUAN</h5>
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
          <input type="text" class="form-control resetable" id="name334" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone334" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="text" class="form-control resetable" id="email334" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <!-- Doc -->
          <div class="row">
            <label class="col-lg-12" id="">
              Akta Lama
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="akta_lama334" name="akta_lama334">
                <label class="custom-file-label" for="akta_lama334">Pilih file Akta Lama</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_perkawinan">Kembali</button>
          <button type="submit" id="akta_rusak" class="btn btn-common asli">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- PERCERAIAN BARU -->
<div class="modal fade" id="mod_akta_perceraian_baru" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">AKTA PERCERAIAN BARU</h5>
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
          <input type="text" class="form-control resetable" id="name341" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone341" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="text" class="form-control resetable" id="email341" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <!-- Doc -->
          <div class="row">
            <label class="col-lg-12" id="">
              Surat Keterangan Perceraian
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_kelahiran341" name="surat_kelahiran341">
                <label class="custom-file-label" for="surat_kelahiran341">Pilih file Surat Keterangan Perceraian</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_perceraian">Kembali</button>
          <button type="submit" id="akta_baru" class="btn btn-common asli">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- PERCERAIAN HILANG -->
<div class="modal fade" id="mod_akta_perceraian_hilang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">AKTA PERCERAIAN HILANG</h5>
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
          <input type="text" class="form-control resetable" id="name342" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone342" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="text" class="form-control resetable" id="email342" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <!-- Doc -->
          <div class="row">
            <label class="col-lg-12" id="">
              Surat Keterangan Kehilangan dari Kepolisian
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_kehilangan332" name="surat_kehilangan342">
                <label class="custom-file-label" for="surat_kehilangan342">Pilih file Surat Keterangan Kehilangan dari Kepolisian</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_perceraian">Kembali</button>
          <button type="submit" id="akta_baru" class="btn btn-common asli">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- PERCERAIAN RUSAK -->
<div class="modal fade" id="mod_akta_perceraian_rusak" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">AKTA PERCERAIAN RUSAK</h5>
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
          <input type="text" class="form-control resetable" id="name343" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone343" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="text" class="form-control resetable" id="email343" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <!-- Doc -->
          <div class="row">
            <label class="col-lg-12" id="">
              Akta Lama
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="akta_lama343" name="akta_lama343">
                <label class="custom-file-label" for="akta_lama343">Pilih file Akta Lama</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_perceraian">Kembali</button>
          <button type="submit" id="akta_rusak" class="btn btn-common asli">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- PERCERAIAN PEMBARUAN -->
<div class="modal fade" id="mod_akta_perceraian_pembaruan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">AKTA PERCERAIAN PEMBARUAN</h5>
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
          <input type="text" class="form-control resetable" id="name344" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone344" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="text" class="form-control resetable" id="email344" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <!-- Doc -->
          <div class="row">
            <label class="col-lg-12" id="">
              Akta Lama
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="akta_lama344" name="akta_lama344">
                <label class="custom-file-label" for="akta_lama344">Pilih file Akta Lama</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta_perceraian">Kembali</button>
          <button type="submit" id="akta_rusak" class="btn btn-common asli">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" class="btn btn-default palsu">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- MODAL AKTA END -->
<!-- MODAL KIA START -->
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
              Surat Keterangan Kehilangan dari Kepolisian
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_kehilangan4_2" name="surat_kehilangan4_2">
                <label class="custom-file-label" for="surat_kehilangan4_2">Pilih file Surat Keterangan Kehilangan dari Kepolisian</label>
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
<!-- MODAL KIA END -->
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