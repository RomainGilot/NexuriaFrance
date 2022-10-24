    <nav class="navbar">
        <a href="#" class="logo"><img src="web/img/logo.png" height="40px" alt="logo-nexuria">
            Nexuria France</a>
        <div class="nav-links" id="nav-links">
            <ul>
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#prestations">Prestations</a></li>
                <li><a href="tarifications">Tarifications</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>

        <iconify-icon icon="ci:hamburger" id="menu-hamburger" class="menu-hamburger" onclick="activeMenu()"></iconify-icon>

    </nav>

    <script>
        function activeMenu() {
            const menuHamburger = document.querySelector("#menu-hamburger");
            const navLinks = document.querySelector("#nav-links");

            navLinks.classList.toggle("active");
        }
    </script>