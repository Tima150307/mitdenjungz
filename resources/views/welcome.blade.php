<x-app title="Startseite - Mit den Jungz">

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
                    <button id="copy-btn" class="btn-primary">
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

    <section class="features-section">
        <div class="container">
            <h2 class="section-title">Was uns ausmacht</h2>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🏗️</div>
                    <h3>Freies Bauen</h3>
                    <p>Bau was du willst - solange es nicht komplett hässlich ist (wie Marvin xd)</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">⚔️</div>
                    <h3>PvP & Chaos</h3>
                    <p>Spontane Fights und bescheuerte Challenges</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">📊</div>
                    <h3>Stats & Rankings</h3>
                    <p>Wer ist der krasseste? Wer hat die meiste Playtime? Check die Stats!</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🎮</div>
                    <h3>Keine Randoms</h3>
                    <p>Nur Leute die wir kennen - nur die Jungz!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="whats-up-section">
        <div class="container">
            <h2 class="section-title">Was läuft gerade?</h2>

            <div class="updates-grid">
                <div class="update-card">
                    <div class="update-icon">🚀</div>
                    <h3>Server Start</h3>
                    <p>Der Server wird bald aufgesetzt - stay tuned!</p>
                </div>

                <div class="update-card">
                    <div class="update-icon">🎉</div>
                    <h3>Neues Feature</h3>
                    <p>Stats-Seite ist live! Check wer grade am krassesten ist!</p>
                </div>
            </div>
        </div>
    </section>

</x-app>
