<header>
    <div class="logo"><a href="#">Tripkam<span class="point">.</span></a></div>
    <nav>
        <!-- menu responsive-->
        <ul class="sidebar">
            <li onclick=hideSidebar()><a href="#"><ion-icon name="close-outline"></ion-icon></a></li>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Nos bouquets</a></li>
            <li><a href="#">À propos</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Réservation</a></li>
        </ul>

        <!-- menu pc-->
        <ul>
            <li class="hideOnMobile"><a href="#">Accueil</a></li>
            <li class="hideOnMobile"><a href="#">Nos bouquets</a></li>
            <li class="hideOnMobile"><a href="#">À propos</a></li>
            <li class="hideOnMobile"><a href="#">Contact</a></li>
            <li class="hideOnPC open-btn" onclick=showSidebar()><a href="#"><ion-icon class="open-menu" name="menu-outline"></ion-icon></a></li>
        </ul>
    </nav>
    <button class="btn hideOnMobile">Réservation</button>
</header>