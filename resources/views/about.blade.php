<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
</head>
<body>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/blog">Blog</a>
    <a href="/contact">Contact</a>

    <h1>Halaman About</h1>
        <h3>name: {{ $name }}</h3>
        <h3>age: {{ $age }}</h3>
        <h3>Password: {{ $password }}</h3>

    <img src="{{ asset('img/1.jpeg') }}" alt="Gambar 1" width="300">
</body>
</html>