<nav class="main-navbar">
    <input type="checkbox" id="burger-toggle">
    <label for="burger-toggle" class="menu-backdrop"></label>

    <div class="container">
        <a href="/" class="brand">MIT DEN JUNGZ</a>

        {{-- Desktop Navigation --}}
        <ul class="nav-links">
            <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">HOME</a></li>
            <li><a href="/stats" class="{{ Request::is('stats') ? 'active' : '' }}">STATISTIKEN</a></li>
            <li><a href="/map" class="{{ Request::is('map') ? 'active' : '' }}">LIVE MAP</a></li>
            <li><a href="https://discord.gg/yHTwNAWhhy" target="_blank">DISCORD</a></li>
        </ul>

        {{-- Burger Menu Icon --}}
        <label for="burger-toggle" class="burger-menu">
            <span></span>
            <span></span>
            <span></span>
        </label>
    </div>

    {{-- Mobile Navigation --}}
    <nav class="mobile-nav">
        <a href="/" class="{{ Request::is('/') ? 'active' : '' }}">HOME</a>
        <a href="/stats" class="{{ Request::is('stats') ? 'active' : '' }}">STATISTIKEN</a>
        <a href="/map" class="{{ Request::is('map') ? 'active' : '' }}">LIVE MAP</a>
        <a href="https://discord.gg/KUEQmPMZT" target="_blank">DISCORD</a>
    </nav>
</nav>
