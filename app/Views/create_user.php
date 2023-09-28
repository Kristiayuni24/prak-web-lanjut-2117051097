<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('./css/style.css'); ?>">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d3d3d3;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
        }
        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .is-invalid {
            border-color: #ff6347; /* Red border for invalid inputs */
        }
        .error-message {
            color: #ff6347;
            margin-top: 5px;
        }
        .center {
            text-align: center;
        }
        .btn {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
    <title>Create User</title>
</head>
<body>
    <div class="container">
        <div class="center">
            <?php $validation = \Config\Services::validation();?>

            <h2>Create User</h2>
        </div>

        <form action="<?= base_url('/user/store')?>" method="POST">
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

            <div class="center">
                <button type="submit" class="btn">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
