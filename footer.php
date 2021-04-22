    <!-- Footer Section Start -->
    <footer id="footer" class="footer-area section-padding">
      <div class="container">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="footer-logo"><img src="assets/img/logo.png" alt=""></h3>
                <div class="textwidget">
                  <p>Dinas Kependudukan dan Pencatatan Sipil Kabupaten Mojokerto</p>
                </div>
                <div class="social-icon">
                  <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                  <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                  <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
                  <a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12">
              <h3 class="footer-titel">Products</h3>
              <ul class="footer-link">
                <li><a href="#">Produk 1</a></li>
                <li><a href="#">Produk 2</a></li>
                <li><a href="#">Produk 3</a></li>
                <li><a href="#">Produk 4</a></li>
                <li><a href="#">Produk 5</a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
              <div class="map">
                <object style="border:0; height: 200px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34015.943594576835!2d-106.43242624069771!3d31.677719472407432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75d90e99d597b%3A0x6cd3eb9a9fcd23f1!2sCourtyard+by+Marriott+Ciudad+Juarez!5e0!3m2!1sen!2sbd!4v1533791187584"></object>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
              <h3 class="footer-titel">Contact</h3>
              <ul class="address">
                <li>
                  <a href="#"><i class="lni-map-marker"></i> Jl. R.A Basuni No.23, Mergelo, Sooko, Kec. Sooko, Mojokerto</a>
                </li>
                <li>
                  <a href="#"><i class="lni-phone-handset"></i> (0321) 328186 / <br> WA ( 08113202060 )</a>
                </li>
                <!-- <li>
                  <a href="#"><i class="lni-envelope"></i>dispendukcapil@mojokertokab.go.id</a>
                </li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright-content">
                <p>Design by <a target="_blank" href="https://github.com/senayudha97">Sena Yudha </a> & <a target="_blank" href="https://github.com/dimasfr">Dimas Fajar</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-arrow-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#jenis_pengajuan_kk3").on("change", function() {
          jenis = $("#jenis_pengajuan_kk3").val();
          $('#tmp_surat_pengantar3').addClass('d-none');
          $('#tmp_buku_nikah3').addClass('d-none');
          $('#tmp_keterangan_pindah3').addClass('d-none');
          $('#tmp_keterangan_kehilangan3').addClass('d-none');
          if (jenis == 1) {
            $('#tmp_surat_pengantar3').removeClass('d-none');
            $('#tmp_buku_nikah3').removeClass('d-none');
            $('#tmp_keterangan_pindah3').removeClass('d-none');
          }
          if (jenis == 2) {
            $('#tmp_surat_pengantar3').removeClass('d-none');
            $('#tmp_keterangan_kehilangan3').removeClass('d-none');
          }
        });

        $("#jenus_perubahan_kk4").on("change", function() {
          jenis = $("#jenus_perubahan_kk4").val();
          $('#tmp_surat_pengantar4').addClass('d-none');
          $('#tmp_keterangan_pindah4').addClass('d-none');
          $('#tmp_kk_lama4').addClass('d-none');
          $('#tmp_keterangan_lahir4').addClass('d-none');
          $('#tmp_ket_luar_negeri4').addClass('d-none');
          $('#tmp_paspor4').addClass('d-none');
          $('#tmp_keterangan_kematian4').addClass('d-none');
          if (jenis == 1) {
            $('#tmp_surat_pengantar4').removeClass('d-none');
            $('#tmp_kk_lama4').removeClass('d-none');
            $('#tmp_keterangan_lahir4').removeClass('d-none');
          }
          if (jenis == 2) {
            $('#tmp_surat_pengantar4').removeClass('d-none');
            $('#tmp_kk_lama4').removeClass('d-none');
            $('#tmp_keterangan_pindah4').removeClass('d-none');
            $('#tmp_ket_luar_negeri4').removeClass('d-none');
            $('#tmp_paspor4').removeClass('d-none');
          }
          if (jenis == 3) {
            $('#tmp_surat_pengantar4').removeClass('d-none');
            $('#tmp_kk_lama4').removeClass('d-none');
            $('#tmp_keterangan_kematian4').removeClass('d-none');
            $('#tmp_keterangan_pindah4').removeClass('d-none');
          }
        });
      });
    </script>

    </body>

    </html>