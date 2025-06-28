<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Aplikasi Laravel</h1>

        @if (isset($nama) && isset($npm))
            <div class="user-info">
                <p><strong>Nama:</strong> {{ $nama }}</p>
                <p><strong>NPM:</strong> {{ $npm }}</p>
            </div>
        @endif
    </div>
</body>
</html>