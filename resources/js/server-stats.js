async function loadLiveStatus() {
    try {
        const response = await fetch('https://api.mcsrvstat.us/3/88.211.211.182:25565');
        const data = await response.json(); // liefert online, players, version etc.[web:19]

        const container = document.getElementById('stats-container');
        const playerCountBadge = document.getElementById('player-count-badge');

        if (data.online) {
            container.classList.remove('loading', 'offline');
            container.classList.add('online');

            document.getElementById('server-status-text').textContent = 'Server Online';
            document.getElementById('stat-players').textContent = `${data.players.online} / ${data.players.max}`;
            document.getElementById('stat-version').textContent = data.version || '-';
            document.getElementById('stat-software').textContent = 'NeoForge';
            document.getElementById('stat-ping').textContent =
                data.debug?.ping ? `${Math.round(data.debug.ping)} ms` : '- ms';
            document.getElementById('stat-motd').textContent =
                data.motd?.clean?.join('\n') || 'Mit den Jungz';

            if (data.players.online > 0 && data.players.list) {
                displayPlayers(data.players.list);
                playerCountBadge.textContent = `${data.players.online} Spieler online`;
            } else {
                document.getElementById('player-list').innerHTML = '';
                playerCountBadge.textContent = 'Niemand online :(';
            }
        } else {
            container.classList.remove('loading', 'online');
            container.classList.add('offline');

            document.getElementById('server-status-text').textContent = 'Server Offline';
            document.getElementById('stat-players').textContent = '- / -';
            document.getElementById('stat-version').textContent = '-';
            document.getElementById('stat-software').textContent = '-';
            document.getElementById('stat-ping').textContent = '- ms';

            document.getElementById('player-list').innerHTML = '';
            playerCountBadge.textContent = 'Server offline';
        }
    } catch (error) {
        console.error('Fehler beim Laden der Stats:', error);
    }
}

function displayPlayers(playerList) {
    const container = document.getElementById('player-list');

    const normalized = playerList.map(p => (typeof p === 'string' ? p : p.name)); // API gibt Strings oder Objekte zurück[web:19]

    container.innerHTML = normalized
        .map(
            name => `
        <div class="player-chip">
            <img src="https://mc-heads.net/avatar/${name}/32" alt="${name}">
            <span>${name}</span>
        </div>
    `
        )
        .join('');
}

loadLiveStatus();
setInterval(loadLiveStatus, 10000);
