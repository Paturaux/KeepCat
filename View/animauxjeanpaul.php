<?php include_once './head.php'; ?>

<body>
    <header>
        <a href="rechercher.php"><img src="resources/icones/back.png" id="iconeHeaderGauche"/></a>
        <p id="titre">Jean Paul</p>
        <a href="#"><img src="resources/icones/settings.png"  id="iconeHeaderDroit"/></a>
    </header>
    
    <div id="menuProfil">
        <a href="profiljeanpaul.php"><div id="ongletProfilGauche">Profil</div></a><!--
        --><a href="#"><div id="ongletProfilCentre" style="color:#fff;background:#2789e4;">Animaux</div></a><!--
        --><a href="avisjeanpaul.php"><div id="ongletProfilDroit">Avis</div></a>
    </div>
    
    <div class="animal">
        <img src="resources/chat1.jpg" class="chat"/>
        <p class="nom">F&eacute;lix</p>
        <p class="age"><img src="resources/icones/birthday.png"/>4 ans</p>
        <p class="race"><img src="resources/icones/cat_footprint.png"/>American</p>
        <img src="resources/icones/up_black.png" class="fleche"/>
    </div>
    <div id="description">
        
    </div>
    <div class="animal">
        <img src="resources/chat2.jpg" class="chat"/>
        <p class="nom">Micka</p>
        <p class="age"><img src="resources/icones/birthday.png"/>6 ans</p>
        <p class="race"><img src="resources/icones/cat_footprint.png"/>Ragdoll</p>
        <img src="resources/icones/down_black.png" class="fleche"/>
    </div>
    <div class="animal">
        <img src="resources/chat3.jpg" class="chat"/>
        <p class="nom">Adora</p>
        <p class="age"><img src="resources/icones/birthday.png"/>1 ans</p>
        <p class="race"><img src="resources/icones/cat_footprint.png"/>Exotic</p>
        <img src="resources/icones/down_black.png" class="fleche"/>
    </div>
    
    <footer>
        <a href="#"><span class="boutonMenuBasSeul"><img src="resources/icones/plus.png"/>Demander la garde</span></a>
    </footer>
</body>