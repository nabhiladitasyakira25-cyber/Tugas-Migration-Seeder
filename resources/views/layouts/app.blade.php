<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Akademik</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f6f9;

            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background: #2c3e50;
            color: white;
            padding: 15px 30px;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        nav {
            background: #34495e;
            padding: 10px 30px;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        nav a {
            text-decoration: none;
            padding: 10px 15px;
            background: #1abc9c;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            transition: 0.3s;
        }

        nav a:hover {
            background: #16a085;
        }

        .container {
            padding: 30px;
            flex: 1; 
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            background: white;
        }

        table th {
            background: #1abc9c;
            color: white;
            padding: 12px;
        }

        table td {
            border: 1px solid #ddd;
            padding: 12px;
        }

        button {
            padding: 10px 18px;
            background: #3498db;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 8px;
        }

        button:hover {
            background: #2980b9;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        .alert-success {
            background: #d4edda;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 15px;
            color: #155724;
        }

        footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 15px;   
            font-size: 15px;
            margin-top: 20px;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>

<body>

    <header>
        <h1>Sistem Akademik</h1>
    </header>

    <nav>
        <a href="/">Menu</a>
        <a href="/dosen">Dosen</a>
        <a href="/mahasiswa">Mahasiswa</a>
        <a href="/matakuliah">Matakuliah</a>
        <a href="/jadwal">Jadwal</a>
        <a href="/krs">KRS</a>
    </nav>

    <div class="container">

        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')

    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Sistem Akademik | Dibuat oleh Nabila</p>
    </footer>

</body>
</html>