    <?= $this->extend('layouts/app')?>
    <?= $this->section('content')?>

    <div class="container">
        <div class="center">
            <?php $validation = \Config\Services::validation();?>

            <h2>Create User</h2>
        </div>

        <form action="<?= base_url('/user/store')?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input class="form-control <?= (empty(validation_show_error('nama'))) ? '' : 'is-invalid' ?>" type="text" name="nama" id="nama" value="<?= old('nama') ?>" required>
                <?= validation_show_error('nama'); ?>
            </div>

            <div class="form-group">
                <label for="npm">NPM:</label>
                <input class="form-control <?= (empty(validation_show_error('npm'))) ? '' : 'is-invalid' ?>" type="text" name="npm" id="npm" value="<?= old('npm') ?>" required>
                <?= validation_show_error('npm'); ?>
            </div>

            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <select name="kelas" id="kelas" class="form-control">
                    <?php foreach ($kelas as $item): ?>
                        <option value="<?= $item['id'] ?>">
                            <?= $item['nama_kelas'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="foto">Foto:</label>
                <input class="form-control" type="file" name="foto" id="foto">
            </div>

            <div class="center">
                <button type="submit" class="btn">Submit</button>
            </div>
        </form>
    </div>

    <?= $this->endSection()?>

