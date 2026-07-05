<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4f6f9;
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar{
            background:#212529;
        }

        .navbar-brand{
            color:white !important;
            font-weight:bold;
        }

        .nav-link{
            color:#bfbfbf !important;
            font-weight:500;
        }

        .nav-link.active{
            color:#1da1ff !important;
        }

        .card{
            margin-top:30px;
            border:none;
            border-radius:10px;
            box-shadow:0 3px 12px rgba(0,0,0,.12);
        }

        .judul{
            color:#1877f2;
            font-weight:bold;
        }

        footer{
            margin-top:40px;
            padding:20px;
            text-align:center;
            color:#666;
            border-top:1px solid #ddd;
            background:white;
        }

        table th{
            background:#d8e9ff;
            text-align:center;
        }

        table td{
            text-align:center;
        }

        table td:nth-child(2){
            text-align:left;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            🎓 Portal Akademik
        </a>

        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Jadwal Kuliah</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Daftar Tugas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="card">
        <div class="card-body p-5">

            <h1 class="judul text-center">
                Jadwal Perkuliahan
            </h1>

            <p class="text-center text-secondary mb-4">
                Simulasi data statis untuk kebutuhan pengujian automasi deployment.
            </p>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="120">Hari</th>
                        <th>Mata Kuliah</th>
                        <th width="150">Waktu</th>
                        <th width="180">Ruangan</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td><b>Senin</b></td>
                        <td>Rekayasa Perangkat Lunak</td>
                        <td>08:00 - 10:30</td>
                        <td>Lab Komputer 2</td>
                    </tr>

                    <tr>
                        <td><b>Rabu</b></td>
                        <td>Pengujian & Pemeliharaan Perangkat Lunak</td>
                        <td>11:00 - 13:30</td>
                        <td>Ruang Teori 4.1</td>
                    </tr>

                    <tr>
                        <td><b>Kamis</b></td>
                        <td>Arsitektur Enterprise</td>
                        <td>14:00 - 16:30</td>
                        <td>Ruang Teori 2.3</td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>

</div>

<footer>
    © 2026 Pengujian CI/CD Pipeline - Sistem Informasi Akademik Sederhana
</footer>

</body>
</html>