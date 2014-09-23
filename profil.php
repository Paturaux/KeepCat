<?php include_once './head.html'; ?>

<body>
    <header>
        <a href="accueil.php"><img src="resources/icones/back.png" id="iconeHeaderGauche"/></a>
        <p id="titre">Profil</p>
        <a href="#"><img src="resources/icones/settings.png"  id="iconeHeaderDroit"/></a>
    </header>
    
    <div id="menuProfil">
        <a href="#"><div id="ongletProfilGauche" style="color:#fff;background:#2789e4;">Profil</div></a><!--
        --><a href="animaux.php"><div id="ongletProfilCentre">Animaux</div></a><!--
        --><a href="avis.php"><div id="ongletProfilDroit">Avis</div></a>
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
        <a href="#"><span class="boutonMenuBasSeul"><img src="resources/icones/edit.png"/>Modifier mon profil</span></a>
    </footer>
</body>