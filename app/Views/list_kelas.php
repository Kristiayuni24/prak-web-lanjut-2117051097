<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
    <!-- Ini halaman list user -->
   

    <!-- Container -->
    <div class="container">
        <!-- Page Title -->
        <div class="text-center mt-5">
            <h2>Data Kelas</h2>
            <p class="lead">Read Data</p>
        </div>

        <!-- User Table -->
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table table-striped table-bordered" style="background-color: white;">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Kelas</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($kelas as $kelas) { ?>
                            <tr>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold"><?= $no++ ?></span>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold"><?= $kelas['nama_kelas'] ?></span>
                                </td>
                                <td style="display: flex;" class="align-middle text-center">
                                    <a class="btn btn-link text-primary px-3 mb-0" href="<?= base_url('kelas/' . $kelas['id']) ?>"><i class="fas fa-eye me-2" aria-hidden="true"></i>Detail</a>
                                    <a class="btn btn-link text-warning px-3 mb-0" href="<?= base_url('kelas/' . $kelas['id'] . '/edit') ?>"><i class="fas fa-pencil-alt me-2" aria-hidden="true"></i>Edit</a>
                                    <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method="POST">
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
        </div>

        <!-- Add New User Button -->
        <div class="text-center mt-4">
            <a href="<?= base_url('kelas/create')?>" class="btn btn-success">Tambah Kelas</a>
        </div>
    </div>
<?= $this->endSection() ?>
