<?php include_once './head.html'; ?>

<body>
    <header>
        <a href="rechercher.php"><img src="resources/icones/back.png" id="iconeHeaderGauche"/></a>
        <p id="titre">Jean Paul</p>
        <a href="#"><img src="resources/icones/settings.png"  id="iconeHeaderDroit"/></a>
    </header>

    <div id="menuProfil">
        <a href="#"><div id="ongletProfilGauche" style="color:#fff;background:#2789e4;">Profil</div></a><!--
        --><a href="animauxjeanpaul.php"><div id="ongletProfilCentre">Animaux</div></a><!--
        --><a href="avisjeanpaul.php"><div id="ongletProfilDroit">Avis</div></a>
    </div>

    <div id="photoProfil">
        <img src="resources/profil.png"/>
    </div>

    <div id="generalProfil">
        <p id="nom">Jean Paul</p>
        <p id="prix"><img src="resources/icones/prix.png"/>20 &euro; / semaine</p>
        <p id="lieu"><img src="resources/icones/location.png"/>Lyon</p>
        <p id="age"><img src="resources/icones/birthday.png"/>26 ans</p>
        <span id="note">4.0</span>
    </div>

    <div id="corpsProfil">

    </div>

    <footer>
        <a href=""><span class="boutonMenuBas"><img src="resources/icones/message.png"/>Joindre</span></a><!-- WhiteSpace
        --><a href=""><span class="boutonMenuBas"><img src="resources/icones/plus.png"/>Demander</span></a>
    </footer>
</body>