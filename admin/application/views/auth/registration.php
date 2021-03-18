<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center mb-5">
                            <h3 id="title" class="h3">Register E-Logsheet </h3>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('auth/registration'); ?>">
                            <div class="form-group row">
                                <div class="col-sm mb-3 mb-sm-0">
                                    <input type="text" value="<?= set_value('name'); ?>" name="name" class="form-control form-control-user" id="name" placeholder="Nama Lengkap">
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" value="<?= set_value('email'); ?>" class="form-control form-control-user" id="email" name="email" placeholder="Email">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Kata Sandi">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Kata Sandi">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger  btn-user btn-block">
                                Daftar
                            </button>
                        </form>
                        <hr>
                        <!-- <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div> -->
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Kembali ke halaman login!</a>
                        </div>
                        <div class="text-center">
                            <h6 class="h6 text-gray-900 mt-5">Powered by <img src="<?= base_url('assets/img/logo.svg') ?>" width="70" alt=""></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>