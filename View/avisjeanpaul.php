<?php include_once './head.php'; ?>

<body>
    <header>
        <a href="rechercher.php"><img src="resources/icones/back.png" id="iconeHeaderGauche"/></a>
        <p id="titre">Jean Paul</p>
        <a href="#"><img src="resources/icones/settings.png"  id="iconeHeaderDroit"/></a>
    </header>

    <div id="menuProfil">
        <a href="profiljeanpaul.php"><div id="ongletProfilGauche">Profil</div></a><!--
        --><a href="animauxjeanpaul.php"><div id="ongletProfilCentre">Animaux</div></a><!--
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
<!--    <button id="boutonVoter">Voter</button>-->

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
        </p>
    </div>
    
<!--    <footer>
        <input type="text" placeholder="Commentaire &agrave; envoyer ..."/>
        <button>Envoyer</button>
    </footer>-->
</body>