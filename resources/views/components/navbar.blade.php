<nav class="main-navbar">
    <div class="container">
        <a href="/" class="brand-logo">
            MIT DEN JUNGZ
        </a>

        <div class="nav-links">
            <a href="/" class="{{ Request::is('/') ? 'active' : '' }}">HOME</a>
            <a href="/stats" target="_blank">STATISTIKEN</a>
            <a href="/map" class="{{ Request::is('map') ? 'active' : '' }}">LIVE MAP</a>
            <a href="https://discord.gg/kUEQqPMG7F" target="_blank">DISCORD</a>
        </div>
    </div>
</nav>
