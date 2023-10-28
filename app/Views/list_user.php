<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
    <!-- Ini halaman list user -->
    

    <!-- Container -->
    <div class="container">
        <!-- Page Title -->
        <div class="text-center mt-5">
            <h2>Data User</h2>
            <p class="lead">Read Data</p>
        </div>

        <!-- User Table -->
        <div class="table-responsive mt-4">
            <table class="table table-bordered table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <a href = "<?= base_url('user/create')?>"> Tambah Data </a>
                    <?php foreach ($users as $user) { ?>

                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['nama'] ?></td>
                            <td><?= $user['npm'] ?></td>
                            <td><?= $user['nama_kelas'] ?></td>
                            <td style="display: flex;" class="align-middle text-center">
                                <a class="btn btn-link text-primary px-3 mb-0" href="<?= base_url('user/' . $user['id']) ?>"><i class="fas fa-eye me-2" aria-hidden="true"></i>Detail</a>
                                <a class="btn btn-link text-warning px-3 mb-0" href="<?= base_url('user/' . $user['id'] . '/edit') ?>"><i class="fas fa-pencil-alt me-2" aria-hidden="true"></i>Edit</a>
                                <form action="<?= base_url('user/' . $user['id']) ?>" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <?= csrf_field() ?>
                                    <button class="btn btn-link text-danger mb-0">
                                        <i class="fas fa-trash me-2" aria-hidden="true"></i>Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Add New User Button -->
        <div class="text-center mt-4">
            <a href="<?= base_url('user/create')?>" class="btn btn-success">Tambah User</a>
        </div>
    </div>
<?= $this->endSection() ?>
