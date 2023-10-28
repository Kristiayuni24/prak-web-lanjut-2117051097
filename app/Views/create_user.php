<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<style>
        body {
            background-color: #e0e0e0; /* Warna abu-abu */
        }
    </style>
<div class="container mt-5">
  <div class="card" style="width: 300px; margin: 0 auto; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); border-radius: 10px;">
    <div class="card-body">
      <form method="POST" action="<?= base_url('/user/store') ?>" enctype="multipart/form-data">
        <h1 class="h3 mb-3 fw-normal">Create User</h1>
        <div class="form-floating">
          <input type="text" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama" name="nama" value="<?= old('nama') ?>">
          <label for="floatingName">Nama</label>
          <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
            <div class="invalid-feedback">
              <?= session('validation')->getError('nama'); ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="form-floating">
          <input type="number" class="form-control mt-2 <?= session('validation') ? 'is-invalid' : '' ?>" id="floatingNpm" placeholder="NPM" name="npm" value="<?= old('npm') ?>">
          <label for="floatingNpm">NPM</label>
          <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
            <div class="invalid-feedback">
              <?= session('validation')->getError('npm'); ?>
            </div>
          <?php endif; ?>
        </div>
        <select class="form-select mt-2" aria-label="Default select example" name="kelas">
          <option value="" selected disabled>Pilih Kelas</option>
          <?php
          foreach ($kelas as $item) {
          ?>
            <option value="<?= $item['id'] ?>"><?= $item['nama_kelas'] ?></option>
          <?php } ?>
        </select>
        <div class="form-floating">
          <div class="">
            <label for="formFile" class="form-label">Foto Mahasiswa</label>
            <input class="form-control form-control-sm" id="formFile" type="file" name="foto">
          </div>
        </div>

        <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Submit</button>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection('content') ?>
