<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Akademik</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f6fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* NAVBAR */
        .navbar-custom {
            background: linear-gradient(to right, #2c3e50, #34495e);
            box-shadow: 0px 3px 8px rgba(0,0,0,0.3);
        }

        .navbar-custom .navbar-brand {
            font-weight: bold;
            font-size: 20px;
            color: white;
        }

        .navbar-custom .nav-link {
            color: white !important;
            font-weight: 600;
            margin-left: 10px;
        }

        .navbar-custom .nav-link:hover {
            color: #1abc9c !important;
        }

        /* CONTENT */
        .content {
            flex: 1;
            padding-bottom: 30px;
        }

        /* FOOTER */
        footer {
            background: linear-gradient(to right, #2c3e50, #34495e);
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 14px;
            box-shadow: 0px -3px 8px rgba(0,0,0,0.3);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom px-4">
        <a class="navbar-brand" href="/">Sistem Akademik</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="/dosen">Dosen</a></li>
                <li class="nav-item"><a class="nav-link" href="/mahasiswa">Mahasiswa</a></li>
                <li class="nav-item"><a class="nav-link" href="/matakuliah">Matakuliah</a></li>
                <li class="nav-item"><a class="nav-link" href="/jadwal">Jadwal</a></li>
                <li class="nav-item"><a class="nav-link" href="/krs">KRS</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4 content">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')

    </div>

    <footer>
        &copy; {{ date('Y') }} Sistem Akademik 
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>