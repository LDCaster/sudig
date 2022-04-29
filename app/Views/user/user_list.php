<?= $this->extend('layout/template2'); ?>

<?= $this->section('content2'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>User List</h1>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Image</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><img src="/assets/img/avatar/<?= user()->user_img; ?>" height="50px"></td>
                                <td><?= $user->username; ?></td>
                                <td><?= $user->email; ?></td>
                                <td><?= $user->name; ?></td>
                                <td><a href=" <?= base_url('user/user_list/' . $user->userid); ?>" class="btn btn-info">Detail</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</div>
<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; <div class="bullet"></div> Your Website <a href=""><?= date('Y'); ?></a>
    </div>
    <div class="footer-right">

    </div>
</footer>
</div>
</div>
<?= $this->endsection(); ?>