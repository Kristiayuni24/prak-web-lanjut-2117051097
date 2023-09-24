<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #d3d3d3; /* Warna latar belakang */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            border: none;
            border-radius: 5px;
            background-color: #ffc0cb; /* Warna card */
            color: #fff; /* Warna teks pada card */
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); /* Efek bayangan */
        }
        img {
            display: block;
            margin: 0 auto;
            width: 250px;
            height: 250px;
            object-fit: cover;
            object-position: center;
            border-radius: 50%;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); /* Efek bayangan */
        }
        table {
            margin: 0 auto;
            font-size: 20px;
            line-height: 1.25;
            max-width: 300px;
        }
        td {
            padding: 8px 12px;
        }
    </style>
</head>
<body>
<div class="card text-center">
    <img src="<?php echo base_url('ayubi.png'); ?>" class="card-img-top rounded-circle mx-auto d-block" alt="...">
    <div class="card-body">
        <table class="table">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?= $kelas ?></td>
            </tr>
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td><?= $npm ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?= $alamat ?></td>
            </tr>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>