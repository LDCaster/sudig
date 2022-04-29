<?= $this->extend('./layout/template3'); ?>

<?= $this->section('content3'); ?>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        <img src="http://localhost:8080/assets/img/surat_login.jpg" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Daftar</h4>
                        </div>
                        <div class="card-body">

                            <?= view('Myth\Auth\Views\_message_block') ?>

                            <form action="<?= route_to('register') ?>" method="post">
                                <?= csrf_field() ?>
                                <div class="form-group">
                                    <label for="username"><?= lang('Auth.username') ?></label>
                                    <input type="username" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email"><?= lang('Auth.email') ?></label>
                                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                    <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block"><?= lang('Auth.password') ?></label>
                                        <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off" name="password">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="pass_confirm"" class=" d-block"><?= lang('Auth.repeatPassword') ?></label>
                                        <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off" name="pass_confirm">
                                    </div>
                                </div>

                                <!-- <div class="form-divider">
                                    Alamat
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Negara</label>
                                        <select class="form-control selectric">
                                            <option>Indonesia</option>
                                            <option>Palestine</option>
                                            <option>Syria</option>
                                            <option>Malaysia</option>
                                            <option>Thailand</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Provinsi</label>
                                        <select class="form-control selectric">
                                            <option>West Java</option>
                                            <option>East Java</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Kota</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Kode Pos</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div> -->

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                        <label class="custom-control-label" for="agree">Saya setuju dengan syarat dan ketentuan</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        <?= lang('Auth.register') ?>
                                    </button>
                                </div>
                                <?= lang('Auth.alreadyRegistered') ?> <a href="<?= route_to('login') ?>"><?= lang('Auth.signIn') ?>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endsection(); ?>