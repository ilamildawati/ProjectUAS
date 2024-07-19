<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Halaman Tidak Ditemukan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #a3c9f0;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            max-width: 600px;
            padding: 20px;
            background-color: #c7d6e4;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            font-size: 3em;
            margin-bottom: 20px;
            color: #dc3545;
        }

        p {
            line-height: 1.5;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>404</h1>
        <p>Maaf, halaman yang Anda cari tidak dapat ditemukan.</p>

        <p>Berikut beberapa hal yang dapat Anda lakukan:</p>
        <ul>
            <li><a href="{{ url('/') }}">Kembali ke beranda</a></li>
        </ul>
    </div>
</body>
</html>
