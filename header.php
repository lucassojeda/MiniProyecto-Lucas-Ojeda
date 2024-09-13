<!-- header.php -->
<header>
    <div id="menu-icon" onclick="toggleMenu()">
        <span>&#9776;</span>
    </div>
    <nav class="main-nav">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="5g.php">5G</a></li>
            <li><a href="6g.php">6G</a></li>
            <li><a href="diferencias.php">Diferencias</a></li>
            <nav id="sidebar">
        <div id="close-icon" onclick="toggleMenu()">&#10005;</div>
        <div class="menu-content">
            <h2>BIENVENIDOS</h2>
            <h3>SUSCRÍBETE</h3>
            <form id="subscription-form">
                <input type="email" placeholder="Ingresa tu correo" required>
                <button type="submit">SUSCRIBIRSE</button>
            </form>
        </div>
    </nav>
        </ul>
    </nav>
</header>
