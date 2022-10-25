<?= $this->extend('./layout/template3'); ?>

<?= $this->section('content3'); ?>
<div id="app">
    <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                <div class="p-4 m-3">
                    <img src="http://localhost:8080/assets/img/logo.png" alt="logo" width="80" class="shadow-light rounded-circle mb-2 mt-2">
                    <h4 class="text-dark font-weight-normal">Selamat Datang </h4>
                    <!-- <span class="font-weight-bold">Sudig</span> -->
                    <p class="text-muted">Sebelum anda memulai, Anda harus Login atau Daftar. Jika Anda belum memiliki Akun.</p>

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form method="post" action="<?= route_to('login') ?>" class="needs-validation" novalidate="">
                        <?= csrf_field() ?>

                        <?php if ($config->validFields === ['email']) : ?>
                            <div class="form-group">
                                <label for="login"><?= lang('Auth.email') ?></label>
                                <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" tabindex="1" placeholder="<?= lang('Auth.email') ?>">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="form-group">
                                <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                                <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" tabindex="1" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label"><?= lang('Auth.password') ?></label>
                            </div>
                            <input id="password" type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" tabindex="2" placeholder="<?= lang('Auth.password') ?>" required>
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                        </div>

                        <?php if ($config->allowRemembering) : ?>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                    <?= lang('Auth.rememberMe') ?>
                                </label>
                            </div>
                        <?php endif; ?>

                        <div class="form-group text-right">

                            <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" <?= lang('Auth.loginAction') ?>tabindex="4">
                                Masuk
                            </button>
                        </div>

                        <?php if ($config->allowRegistration) : ?>
                            <p><a href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
                        <?php endif; ?>
                        <?php if ($config->activeResetter) : ?>
                            <p><a href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
                        <?php endif; ?>
                    </form>

                    <div class="text-center mt-5 text-small">
                        <div class="mt-2">
                            <a href="#">Privacy Policy</a>
                            <div class="bullet"></div>
                            <a href="#">Terms of Service</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="http://localhost:8080/assets/img/surat_login.jpg">
                <div class="absolute-bottom-left index-2">
                    <div class="text-light p-5 pb-2">
                        <div class="mb-5 pb-3">
                            <h1 class="mb-2 display-4 font-weight-bold" style="text-shadow: 2px 2px black;">Kerja Mudah Dimana Saja</h1>
                            <h4 class="font-weight-normal text-muted-transparent" style="text-shadow: 2px 2px black;">Surat Digital </h4>
                        </div>
                        <!-- Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA"></a> on <a class="text-light bb" target="_blank" href="">Unsplash</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endsection(); ?>