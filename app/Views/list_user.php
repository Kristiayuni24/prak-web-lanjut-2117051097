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
                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['nama'] ?></td>
                            <td><?= $user['npm'] ?></td>
                            <td><?= $user['nama_kelas'] ?></td>
                            <td>
                                <!-- Add action buttons here, e.g., Edit and Delete -->
                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Add New User Button -->
        <div class="text-center mt-4">
            <a href="#" class="btn btn-success">Tambah User</a>
        </div>
    </div>
<?= $this->endSection() ?>
