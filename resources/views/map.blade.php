<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Map - Mit den Jungz</title>

    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Inter:wght@400;700&display=swap" rel="stylesheet">

    @vite(['resources/scss/main.scss', 'resources/js/app.js'])
</head>
<body class="map-layout flex flex-col">

<x-navbar />

<div class="map-wrapper">
    <iframe
        src="{{ $url }}"
        allowfullscreen>
    </iframe>

    <div class="loading-overlay">
        <div>
            <p class="loading-title">Lade Karte...</p>
            <p>Check ob der Server an ist!</p>
        </div>
    </div>
</div>

<x-footer />

</body>
</html>
