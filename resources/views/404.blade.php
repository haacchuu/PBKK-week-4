<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Tidak Ditemukan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="container">

        <div class="error-box">

            <h1>404</h1>

            <h2>Halaman Tidak Ditemukan</h2>

            <p>
                URL yang kamu masukkan tidak tersedia.
            </p>

            <a class="btn" href="{{ route('home') }}">
                Kembali ke Home
            </a>

        </div>

    </div>

</body>
</html>