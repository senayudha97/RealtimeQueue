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
      <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Panduan</h2>
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
              <h4>Bootstrap 4 Based</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
          <div class="box-item wow fadeInLeft" data-wow-delay="0.6s">
            <span class="icon">
              <i class="lni-laptop-phone"></i>
            </span>
            <div class="text">
              <h4>Fully Responsive</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
          <div class="box-item wow fadeInLeft" data-wow-delay="0.9s">
            <span class="icon">
              <i class="lni-cog"></i>
            </span>
            <div class="text">
              <h4>HTML5, CSS3 & SASS</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div class="show-box wow fadeInUp" data-wow-delay="0.3s">
          <img src="assets/img/feature/intro-mobile.png" alt="">
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div class="content-right">
          <div class="box-item wow fadeInRight" data-wow-delay="0.3s">
            <span class="icon">
              <i class="lni-leaf"></i>
            </span>
            <div class="text">
              <h4>Modern Design</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>
          <div class="box-item wow fadeInRight" data-wow-delay="0.6s">
            <span class="icon">
              <i class="lni-layers"></i>
            </span>
            <div class="text">
              <h4>Multi-purpose Template</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
          <div class="box-item wow fadeInRight" data-wow-delay="0.9s">
            <span class="icon">
              <i class="lni-leaf"></i>
            </span>
            <div class="text">
              <h4>Working Contact Form</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Modal Section Start -->
<div class="modal fade" id="add_ktp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pengurusan KTP Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="ktpbaruform">
        <div class="modal-body">
          <input type="text" class="form-control" id="name1" name="input[nama]" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control" id="phone1" name="input[nohp]" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="text" class="form-control" id="email1" name="input[email]" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <label for="kartu_keluarga1">File KK</label>
          <input type="file" id="kartu_keluarga1" name="kartu_keluarga" class="form-control">
          <label for="akta_kelahiran1">File Akta Kelahiran</label>
          <input type="file" id="akta_kelahiran1" name="akta_kelahiran" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" id="ktpbaru" class="btn btn-common">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="edit_ktp" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pengurusan Perubahan KTP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
        <div class="modal-body">
          <input type="text" class="form-control" id="name2" name="name" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control" id="phone2" name="phone" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="email" class="form-control" id="email2" name="email" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <label for="kartu_keluarga2">KK</label>
          <input type="file" id="kartu_keluarga2" name="kartu_keluarga" class="form-control">
          <label for="ktp_lama2">KTP Lama</label>
          <input type="file" id="ktp_lama2" name="ktp_lama" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-common">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!--  -->
<div class="modal fade" id="add_kk" tabindex="-3" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pengurusan KK Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
        <div class="modal-body">
          <input type="text" class="form-control" id="name3" name="name" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control" id="phone3" name="phone" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="email" class="form-control" id="email3" name="email" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <select name="jenis_pengajuan_kk" id="jenis_pengajuan_kk3" class="form-control" style="font-size: 11px;">
            <option value="0">- Pilih Jenis Pengajuan -</option>
            <option value="1">Penerbitan KK Bagi Pasangan Baru</option>
            <option value="2">KK Rusak/Hilang</option>
          </select>

          <div id="tmp_surat_pengantar3" class="d-none">
            <label for="surat_pengantar3">Surat Pengantar</label>
            <input type="file" id="surat_pengantar3" name="surat_pengantar" class="form-control">
          </div>
          <div id="tmp_buku_nikah3" class="d-none">
            <label for="buku_nikah3">Buku Nikah/Akta Perkawinan</label>
            <input type="file" id="buku_nikah3" name="buku_nikah" class="form-control">
          </div>
          <div id="tmp_keterangan_pindah3" class="d-none">
            <label for="keterangan_pindah3">Surat Keterangan Pindah</label>
            <input type="file" id="keterangan_pindah3" name="keterangan_pindah" class="form-control">
          </div>
          <div id="tmp_keterangan_kehilangan3" class="d-none">
            <label for="keterangan_kehilangan3">Surat Keterangan Kehilangan</label>
            <input type="file" id="keterangan_kehilangan3" name="keterangan_kehilangan" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-common">Kirim</button>
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
      <form>
        <div class="modal-body">
          <input type="text" class="form-control" id="name4" name="name" placeholder="Nama" required data-error="Isikan Nama anda">
          <input type="tel" class="form-control" id="phone4" name="phone" placeholder="No. Handphone" required data-error="Isikan No. Handphone anda">
          <input type="email" class="form-control" id="email4" name="email" placeholder="Email" required data-error="Isikan Alamat Email anda">

          <select name="jenus_perubahan_kk" id="jenus_perubahan_kk4" class="form-control" style="font-size: 11px;">
            <option value="0">- Pilih Jenis Pengajuan -</option>
            <option value="1">Penambahan Anggota Karena Kelahiran</option>
            <option value="2">Penambahan Anggota Karena Menumpang</option>
            <option value="3">Pengurangan Anggota Keluarga</option>
          </select>

          <div id="tmp_surat_pengantar4" class="d-none">
            <label for="surat_pengantar4">Surat Pengantar</label>
            <input type="file" id="surat_pengantar4" name="surat_pengantar" class="form-control">
          </div>
          <div id="tmp_keterangan_pindah4" class="d-none">
            <label for="keterangan_pindah4">Surat Keterangan Pindah</label>
            <input type="file" id="keterangan_pindah4" name="keterangan_pindah" class="form-control">
          </div>
          <div id="tmp_kk_lama4" class="d-none">
            <label for="kk_lama4">Kartu Keluarga yang Lama</label>
            <input type="file" id="kk_lama4" name="kk_lama" class="form-control">
          </div>
          <div id="tmp_keterangan_lahir4" class="d-none">
            <label for="keterangan_lahir4">Surat Keterangan Kelahiran</label>
            <input type="file" id="keterangan_lahir4" name="keterangan_lahir" class="form-control">
          </div>
          <div id="tmp_ket_luar_negeri4" class="d-none">
            <label for="ket_luar_negeri4">Surat Keterangan Datang Dari Luar Negeri</label>
            <input type="file" id="ket_luar_negeri4" name="ket_luar_negeri" class="form-control">
          </div>
          <div id="tmp_paspor4" class="d-none">
            <label for="paspor4">Paspor/Izin Tinggal Tetap</label>
            <input type="file" id="paspor4" name="paspor" class="form-control">
          </div>
          <div id="tmp_keterangan_kematian4" class="d-none">
            <label for="keterangan_kematian4">Surat Keterangan Kematian</label>
            <input type="file" id="keterangan_kematian4" name="keterangan_kematian" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-common">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal Section End -->

<?php require "footer.php" ?>

<!-- <section id="contact" class="section-padding bg-gray">
  <div class="container">
    <div class="section-header text-center">
      <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Kontak Kami</h2>
      <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
    </div>
    <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.3s">
      <div class="col-lg-7 col-md-12 col-sm-12">
        <div class="contact-block">
          <form id="contactForm">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message" rows="7" data-error="Write your message" required></textarea>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="submit-button text-left">
                  <button class="btn btn-common" id="form-submit" type="submit">Send Message</button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-5 col-md-12 col-xs-12">
        <div class="map">
          <object style="border:0; height: 280px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34015.943594576835!2d-106.43242624069771!3d31.677719472407432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75d90e99d597b%3A0x6cd3eb9a9fcd23f1!2sCourtyard+by+Marriott+Ciudad+Juarez!5e0!3m2!1sen!2sbd!4v1533791187584"></object>
        </div>
      </div>
    </div>
  </div>
</section> -->


<!-- <section id="pricing" class="section-padding">
  <div class="container">
    <div class="section-header text-center">
      <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Antrian</h2>
      <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="table wow fadeInLeft" data-wow-delay="1.2s">
          <div class="icon-box">
            <i class="lni-package"></i>
          </div>
          <div class="pricing-header">
            <p class="price-value">$10<span> /mo</span></p>
          </div>
          <div class="title">
            <h3>Pro</h3>
          </div>
          <ul class="description">
            <li>1 user</li>
            <li>10 GB storage</li>
            <li>Email support</li>
            <li>Lifetime updates</li>
          </ul>
          <button class="btn btn-common">Buy Now</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-xs-12 active">
        <div class="table wow fadeInUp" id="active-tb" data-wow-delay="1.2s">
          <div class="icon-box">
            <i class="lni-drop"></i>
          </div>
          <div class="pricing-header">
            <p class="price-value">$35<span> /mo</span></p>
          </div>
          <div class="title">
            <h3>Plus</h3>
          </div>
          <ul class="description">
            <li>10 user</li>
            <li>30 GB storage</li>
            <li>Priority email support</li>
            <li>Lifetime updates</li>
          </ul>
          <button class="btn btn-common">Buy Now</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="table wow fadeInRight" data-wow-delay="1.2s">
          <div class="icon-box">
            <i class="lni-star"></i>
          </div>
          <div class="pricing-header">
            <p class="price-value">$150<span> /mo</span></p>
          </div>
          <div class="title">
            <h3>Premium</h3>
          </div>
          <ul class="description">
            <li>Unlimited users</li>
            <li>Unlimited storage</li>
            <li>24/7 support</li>
            <li>Lifetime updates</li>
          </ul>
          <button class="btn btn-common">Buy Now</button>
        </div>
      </div>
    </div>
  </div>
</section> -->