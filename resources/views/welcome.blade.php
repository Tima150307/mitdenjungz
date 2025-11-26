<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startseite - Mit den Jungz</title>

    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Inter:wght@400;700&display=swap" rel="stylesheet">

    @vite(['resources/scss/main.scss', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen">

<x-navbar />

<header class="home-header">
    <div class="glow-effect"></div>

    <div class="content-wrapper relative z-10 text-center">
        <h1>WILLKOMMEN BEI <span class="text-gradient">DEN JUNGZ</span></h1>

        <p class="subtitle">
            Unser privater Minecraft Server. Wer Scheiße baut, fliegt sofort! (Marvin)<br>
            Joint jetzt und holt euch eure tägliche Dosis Kopfschmerzen!
        </p>

        <div class="ip-box-container">
            <div class="server-card">
                <span id="server-ip" class="ip-text">hier.die.domain.du.hurensohn.de</span>

                <button onclick="copyIp()" class="btn-primary">
                    <span>IP KOPIEREN</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                    </svg>
                </button>
            </div>

            <p id="copy-feedback" class="feedback-text">In Zwischenablage kopiert!</p>
        </div>
    </div>
</header>

<x-footer />

<script>
    function copyIp() {
        const ip = document.getElementById('server-ip').innerText;
        navigator.clipboard.writeText(ip).then(() => {
            const feedback = document.getElementById('copy-feedback');
            feedback.style.opacity = '1';
            setTimeout(() => {
                feedback.style.opacity = '0';
            }, 2000);
        });
    }
</script>
</body>
</html>
