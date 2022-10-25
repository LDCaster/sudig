<?= $this->extend('./layout/template3'); ?>

<?= $this->section('content3'); ?>
<div id="app">
    <section class="section">
        <div class="container mt-1">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="http://localhost:8080/assets/img/logo.png" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Reset Password</h4>
                        </div>

                        <div class="card-body">
                            <?= view('Myth\Auth\Views\_message_block') ?>

                            <p><?= lang('Auth.enterCodeEmailPassword') ?></p>

                            <form action="<?= route_to('reset-password') ?>" method="post">
                                <?= csrf_field() ?>
                                <div class="form-group">
                                    <label for="token"><?= lang('Auth.token') ?></label>
                                    <input id="token" type="text" class="form-control <?php if (session('errors.token')) : ?>is-invalid<?php endif ?>" name="token" placeholder="<?= lang('Auth.token') ?>" value="<?= old('token', $token ?? '') ?>" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        <?= session('errors.token') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email"><?= lang('Auth.email') ?></label>
                                    <input id="email" type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        <?= session('errors.email') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password"><?= lang('Auth.newPassword') ?></label>
                                    <input id="password" type="password" class="form-control pwstrength <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" data-indicator="pwindicator" name="password" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        <?= session('errors.password') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="pass_confirm"><?= lang('Auth.newPasswordRepeat') ?></label>
                                    <input id="pass_confirm" type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        <?= session('errors.pass_confirm') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        <?= lang('Auth.resetPassword') ?>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endsection(); ?>