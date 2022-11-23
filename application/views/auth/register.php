<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">

            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('Auth/registrasi') ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="fullname" placeholder="Full Name" name="fullname">
                                <?= form_error('fullname', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="email" placeholder="Email Address" name="email">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" placeholder="Password" name="password1">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-user btn-block" style="background-color: #7DE5ED ;">
                                Register
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Anda sudah punya akun ?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>