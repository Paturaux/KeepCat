<?php include_once './head.php'; ?>

<body>
    <?php headerTop('Profil', $retPage); ?>

    <div id="menuProfil">
        <a href="index.php?page=profil"><div id="ongletProfilGauche">Profil</div></a><!--
        --><a href="index.php?page=animaux"><div id="ongletProfilCentre">Animaux</div></a><!--
        --><a href="#"><div id="ongletProfilDroit" style="color:#fff;background:#2789e4;">Avis</div></a>
    </div>

    <p id="note">4.0</p>
    <div id="barreEtoile">
        <img src="resources/icones/star_pleine.png" />
        <img src="resources/icones/star_pleine.png" />
        <img src="resources/icones/star_pleine.png" />
        <img src="resources/icones/star_pleine.png" />
        <img src="resources/icones/star_vide.png"/>
    </div>

    <div class="commentaire">
        <p class="auteurAvis">Eveline</p>
        <div class="noteAvis">
            <img src="resources/icones/star_pleine.png" />
            <img src="resources/icones/star_pleine.png" />
            <img src="resources/icones/star_pleine.png" />
            <img src="resources/icones/star_pleine.png" />
            <img src="resources/icones/star_vide.png"/>
        </div>
        <p class="commentaireAvis">
            Bon gardien. Je n'ai eu aucun soucis avec lui.
        </p>
    </div>
    <div class="commentaire">
        <p class="auteurAvis">Thomas</p>
        <div class="noteAvis">
            <img src="resources/icones/star_pleine.png" />
            <img src="resources/icones/star_pleine.png" />
            <img src="resources/icones/star_pleine.png" />
            <img src="resources/icones/star_vide.png"/>
            <img src="resources/icones/star_vide.png"/>
        </div>
        <p class="commentaireAvis">
            Pas ch&egrave;re mais j'ai retrouvé mon chat un peux plus maigre qu'avant.
        </p>
    </div>
    <div class="commentaire">
        <p class="auteurAvis">Marine</p>
        <div class="noteAvis">
            <img src="resources/icones/star_pleine.png" />
            <img src="resources/icones/star_pleine.png" />
            <img src="resources/icones/star_pleine.png" />
            <img src="resources/icones/star_pleine.png" />
            <img src="resources/icones/star_pleine.png" />
        </div>
        <p class="commentaireAvis">
            Excelent gardien et peux co&ucirc;teux je le recommande &agrave; tous les lyonnais souhaitant faire garder leur chat.
        </p>
    </div>
    <div class="commentaire">
        <p class="auteurAvis">Adrien</p>
        <div class="noteAvis">
            <img src="resources/icones/star_pleine.png" />
            <img src="resources/icones/star_pleine.png" />
            <img src="resources/icones/star_pleine.png" />
            <img src="resources/icones/star_pleine.png" />
            <img src="resources/icones/star_vide.png"/>
        </div>
        <p class="commentaireAvis">
            Impeccable ! :)
        </p>
    </div>
    
</body>