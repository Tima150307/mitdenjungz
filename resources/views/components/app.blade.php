<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Mit den Jungz' }}</title>
    <meta name="google-site-verification" content="gfqFzI2oziEnifGbf97TCi7j0lMPvah9eAdVjAwybJM" />

    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <meta name="description" content="{{ $description ?? 'Der beste Minecraft Server von den Jungz!' }}">
    <meta property="og:title" content="{{ $title ?? 'Mit den Jungz' }}" />
    <meta property="og:description" content="{{ $description ?? 'Der beste Minecraft Server.' }}" />
    <meta property="og:image" content="https://www.mitdenjungz.de/EIN-bild-du-hurensohn.svg" />

    @vite(['resources/scss/main.scss', 'resources/js/app.js'])
</head>
<body>

<x-navbar />

<main>
    {{ $slot }}
</main>

<x-footer />

</body>
</html>
