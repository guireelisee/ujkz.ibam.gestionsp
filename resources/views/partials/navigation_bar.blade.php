	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
        <div class="navbar-wrapper  ">
            <div class="navbar-content scroll-div " >
                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.index') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Tableau de bord</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('bordereau.index') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Bordereau</span></a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Cessation de service</span></a>
                    </li>

                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Fiches</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="">Audience avec le directeur</a></li>
                            <li><a href="">Autorisation de prélèvement</a></li>
                            <li><a href="">Autorisation absence</a></li>
                            <li><a href="">Autorisation de passage dans les salles</a></li>
                            <li><a href="">Inscription standarde</a></li>
                            <li><a href="">Maison des hôtes</a></li>
                        </ul>
                    </li>

                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Lettres</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="">Président de l'UO</a></li>
                            <li><a href="">Demandes de salle</a></li>
                        </ul>
                    </li>

                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Notes de service</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="">Interim coordonnateur</a></li>
                            <li><a href="">Réunions</a></li>
                            <li><a href="">Reports des réunions</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Notes d'information</span></a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Personnels</span></a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Prise de service</span></a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Visiteurs</span></a>
                    </li>

                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Configurations</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{ route('ampliation.index') }}">Ampliations</a></li>
                            <li><a href="{{ route('filiere.index') }}">Filières</a></li>
                            <li><a href="{{ route('salle.index') }}">Salles</a></li>
                            <li><a href="">Fonctions</a></li>
                            <li><a href="">Titres</a></li>
                            <li><a href="{{ route('types.index') }}">Types</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
