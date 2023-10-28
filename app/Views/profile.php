<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: black; /* Warna latar belakang hitam */
            color: white; /* Warna teks putih */
            display: flex;
            justify-content: flex-end; /* Menggeser card ke kanan */
            align-items: center;
            height: 100vh;
        }
        .card {
            max-width: 250px;
            background-color: #17a2b8; /* Warna latar belakang card (sesuaikan dengan preferensi Anda) */
            color: white;
        }
        .card img {
            width: 50%;
            height: auto;
            border-radius: 100%; /* Membuat foto bulat */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <img src="<?= $user['foto'] ?? 'ayuni.jpeg' ?>" alt="Profil Picture">
                    <h5 class="card-title">Profil</h5>
                    <table class="table mx-auto">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?= $user['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td><?= $user['nama_kelas'] ?></td>
                        </tr>
                        <tr>
                            <td>NPM</td>
                            <td>:</td>
                            <td><?= $user['npm'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>