<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="navbar">
        <h2>Profil Mahasiswa</h2>

        <div>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('agent.tema') }}">Agent AI</a>
        </div>
    </div>

    <div class="container">

        <div class="profile-box">

            <h1>Detail Profil Akademis</h1>

            <div class="profile-item">
                <strong>NRP:</strong>
                <span class="highlight">{{ $nrp }}</span>
            </div>

            <div class="profile-item">
                <strong>Nama:</strong>
                {{ $nama }}
            </div>

            <div class="profile-item">
                <strong>Jurusan:</strong>
                {{ $jurusan }}
            </div>

            <div class="profile-item">
                <strong>Kampus:</strong>
                {{ $kampus }}
            </div>

            <div class="profile-item">
                <strong>Semester:</strong>
                {{ $semester }}
            </div>

            <div class="profile-item">
                <strong>IPK:</strong>
                <span class="highlight">{{ $ipk }}</span>
            </div>

            <a class="btn" href="{{ route('home') }}">
                Kembali ke Home
            </a>

        </div>

    </div>

</body>
</html>