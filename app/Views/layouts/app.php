<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url("assets/css/form.css")?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary"> <!-- Navbar di atas -->
        <div class="container">
            <!-- <a class="navbar-brand" href="#">Menu</a> -->
            <a class="nav-link <?= $title == '' ? 'active' : '' ?>" href="<?= base_url('/user/create') ?>">
            <a class="navbar-brand" href="<?= base_url('/user/create') ?>">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <hr class="horizontal dark mt-0">
            <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?= $title == 'List User' || $title == 'Create User' || $title == 'Edit User' || $title == 'Profile'  ? 'active' : '' ?>" href="<?= base_url('/user') ?>">
                        <span class="nav-link-text ms-1 text-white">User</span> <!-- Menambahkan kelas text-white -->
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $title == 'List Kelas' || $title == 'Create kelas' || $title == 'List anggota kelas' || $title == 'Edit Kelas' ? 'active' : '' ?>" href="<?= base_url('/kelas'); ?>">
                        <span class="nav-link-text ms-1 text-white">Kelas</span> <!-- Menambahkan kelas text-white -->
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content')?>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-bottom"> <!-- Navbar di bawah -->
        <div class="container">
            <!-- Isi dengan item-menu atau konten yang Anda inginkan di navbar bawah -->
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>
