<?= $this->extend('./layout/template3'); ?>

<?= $this->section('content3'); ?>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="http://localhost:8080/assets/img/logo.png" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Lupa Password</h4>
                        </div>

                        <div class="card-body">

                            <!-- <p class="text-muted">We will send a link to reset your password</p> -->
                            <p class="text-muted"><?= view('Myth\Auth\Views\_message_block') ?></p>
                            <p><?= lang('Auth.enterEmailForInstructions') ?></p>

                            <form action="<?= route_to('forgot') ?>" method="post">
                                <?= csrf_field() ?>

                                <div class="form-group">
                                    <label for="email"><?= lang('Auth.emailAddress') ?></label>
                                    <input name="email" type="email" aria-describedby="emailHelp" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="Email" name="email" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        <?= session('errors.email') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        <?= lang('Auth.sendInstructions') ?>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; <div class="bullet"></div> Your Website <a href=""><?= date('Y'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endsection(); ?>