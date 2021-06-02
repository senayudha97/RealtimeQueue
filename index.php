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
            <h3><a>Akta Kelahiran</a></h3>
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_ktp">Tutup</button>
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_ktp">Tutup</button>
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_ktp">Tutup</button>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk">Tutup</button>
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
                <h3><a>PERUBAHAN DATA</a></h3>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk">Tutup</button>
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
              Surat Keterangan Kehilangan
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_kehilangan2_1" name="surat_kehilangan2_1">
                <label class="custom-file-label" for="surat_kehilangan2_1">Pilih file Surat Keterangan Kehilangan</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_baru">Tutup</button>
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
              Kartu Keluarga Lama
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_2" name="dokumen_lama2_2">
                <label class="custom-file-label" for="dokumen_lama2_2">Pilih file Kartu Keluarga Lama</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_baru">Tutup</button>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan">Tutup</button>
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
          <div class="col-md-6 col-lg-6 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_pengurangan1">
            <div class="services-item">
              <div class="icon">
                <i class="lni-car"></i>
              </div>
              <div class="services-content">
                <h3><a>PINDAH KELUAR</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xs-12" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_pengurangan2">
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan">Tutup</button>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan">Tutup</button>
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
          <input type="text" class="form-control resetable" id="name2_3" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone2_3" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="email" class="form-control resetable" id="email2_3" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <div class="row">
            <label class="col-lg-12" id="">
              Kartu Keluarga Lama
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_3" name="dokumen_lama2_3">
                <label class="custom-file-label" for="dokumen_lama2_3">Pilih file Kartu Keluarga Lama</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_perubahan">Tutup</button>
          <button type="submit" id="btn_kkperubahandata" class="btn btn-common">Kirim</button>
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
          <input type="text" class="form-control resetable" id="name2_4" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control resetable" id="phone2_4" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="email" class="form-control resetable" id="email2_4" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <div class="row">
            <label class="col-lg-12" id="">
              Kartu Keluarga Lama
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="dokumen_lama2_4" name="dokumen_lama2_4">
                <label class="custom-file-label" for="dokumen_lama2_4">Pilih file Kartu Keluarga Lama</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_perubahan">Tutup</button>
          <button type="submit" id="btn_kkpecah_1desa" class="btn btn-common">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" id="palsupecah_1desa" class="btn btn-default">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- PINDAH KELUAR -->
<div class="modal fade" id="mod_kk_perubahan_pengurangan1" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PINDAH KELUAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin/kk_handler/kk_pindah_keluar" enctype="multipart/form-data" method="POST">
        <div class="modal-body">
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_pengurangan">Tutup</button>
          <button type="submit" id="btn_kkpindah_keluar" class="btn btn-common">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" id="palsupindah_keluar" class="btn btn-default">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- KEMATIAN -->
<div class="modal fade" id="mod_kk_perubahan_pengurangan2" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_pengurangan">Tutup</button>
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_penambahan">Tutup</button>
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kk_perubahan_penambahan">Tutup</button>
          <button type="submit" id="btn_kkpenambahan_kelahiran" class="btn btn-common">Kirim</button>
          <button type="button" ondblclick="event.preventDefault()" id="palsupenambahan_kelahiran" class="btn btn-default">Kirim</button>
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
      <form action="admin/ktp_handler/ktp_baru" enctype="multipart/form-data" method="POST">
        <div class="haiden">
          <input type="text" name="input[jenis]" value="1">
        </div>
        <div class="modal-body">
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta">Tutup</button>
          <button type="submit" id="send_ktp" class="btn btn-common asli">Kirim</button>
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin/ktp_handler/ktp_baru" enctype="multipart/form-data" method="POST">
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
              Surat Keterangan Kehilangan
              <div class="custom-file">
                <input type="file" class="custom-file-input resetable" id="surat_kehilangan3_2" name="surat_kehilangan3_2">
                <label class="custom-file-label" for="surat_kehilangan3_2">Pilih file Surat Keterangan Kehilangan</label>
              </div>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta">Tutup</button>
          <button type="submit" id="send_ktp" class="btn btn-common asli">Kirim</button>
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
      <form action="admin/ktp_handler/ktp_baru" enctype="multipart/form-data" method="POST">
        <div class="haiden">
          <input type="text" name="input[jenis]" value="1">
        </div>
        <div class="modal-body">
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_akta">Tutup</button>
          <button type="submit" id="send_ktp" class="btn btn-common asli">Kirim</button>
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
      <form action="admin/ktp_handler/ktp_baru" enctype="multipart/form-data" method="POST">
        <div class="haiden">
          <input type="text" name="input[jenis]" value="1">
        </div>
        <div class="modal-body">
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kia">Tutup</button>
          <button type="submit" id="send_ktp" class="btn btn-common asli">Kirim</button>
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin/ktp_handler/ktp_baru" enctype="multipart/form-data" method="POST">
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kia">Tutup</button>
          <button type="submit" id="send_ktp" class="btn btn-common asli">Kirim</button>
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
      <form action="admin/ktp_handler/ktp_baru" enctype="multipart/form-data" method="POST">
        <div class="haiden">
          <input type="text" name="input[jenis]" value="1">
        </div>
        <div class="modal-body">
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#mod_kia">Tutup</button>
          <button type="submit" id="send_ktp" class="btn btn-common asli">Kirim</button>
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