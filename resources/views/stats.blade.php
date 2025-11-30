<x-app title="Statistiken - Mit den Jungz">

    <div class="stats-page">
        <div class="container">

            <h1 class="page-title">SERVER <span class="highlight">STATS</span></h1>

            <div class="main-status-card loading" id="stats-container">
                <div class="status-indicator">
                    <span class="ping-dot"></span>
                    <span class="dot"></span>
                </div>

                <div class="status-content">
                    <h2 id="server-status-text">Lade Daten...</h2>
                    <p class="sub-info" id="server-ip-display">mitdenjungz.de</p>
                </div>
            </div>

            <div class="stats-grid">
                <div class="stat-box">
                    <div class="icon">👥</div>
                    <div class="info">
                        <span class="label">Spieler</span>
                        <span class="value" id="stat-players">- / -</span>
                    </div>
                </div>

                <div class="stat-box">
                    <div class="icon">🧊</div>
                    <div class="info">
                        <span class="label">Version</span>
                        <span class="value" id="stat-version">-</span>
                    </div>
                </div>

                <div class="stat-box">
                    <div class="icon">⚙️</div>
                    <div class="info">
                        <span class="label">Software</span>
                        <span class="value" id="stat-software">-</span>
                    </div>
                </div>

                <div class="stat-box">
                    <div class="icon">📶</div>
                    <div class="info">
                        <span class="label">Latenz</span>
                        <span class="value" id="stat-ping">- ms</span>
                    </div>
                </div>
            </div>

            <div class="motd-section">
                <h3>Nachricht des Tages</h3>
                <div class="motd-box">
                    <pre id="stat-motd">Lade...</pre>
                </div>
            </div>

            <div class="player-list-section">
                <h3>Aktuelle Spieler</h3>
                <div id="player-list" class="player-grid">
                    <p class="text-muted">Niemand online :(</p>
                </div>
            </div>

        </div>
    </div>

</x-app>
