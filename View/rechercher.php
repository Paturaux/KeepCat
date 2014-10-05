<?php include_once './head.php'; ?>

<body>
    <?php headerTop('Rechercher', $retPage); ?>

    <div id="rechercheParNom">
        <img src="resources/icones/search_black.png" id="loupe"/>
        <input type="text" placeholder="Chercher..."/>
        <img src="resources/icones/delete_black.png" id="croix"/>        
        <button>Annuler</button>
    </div>
    
    <div id="trie">
        <p>Trier par note</p>
        <img src="resources/icones/down_black.png"/>
    </div>

    <div id="rechercheParDate">
        <img src="resources/icones/clock.png"/>
        D&eacute;but<input type="text" placeholder="01/01/2015 12:00"/>
        Fin&emsp;&nbsp;&thinsp;&thinsp;<input type="text" placeholder="20/01/2015 20:00"/>
    </div>

    <div id="rechercheParLieu">
        <img src="resources/icones/location.png"/>
        Lieu<input type="text" placeholder="Villeurbanne, 69100"/>
        <div id="geolocalisation">
            <img src="resources/icones/define_location.png"/>
        </div>
    </div>

    <div class="personneCherchee">
        <img src="resources/profil.png"/>
        <p class="nom">Pierre</p>
        <p class="note" style="color:#40d32d;">4.8</p>
    </div>
    <div class="personneCherchee">
        <img src="resources/profil.png"/>
        <p class="nom">Yves</p>
        <p class="note" style="color:#40d32d;">4.2</p>
    </div>
    <a href="index.php?page=profiljeanpaul">
        <div class="personneCherchee">
            <img src="resources/profil.png"/>
            <p class="nom">Jean Paul</p>
            <p class="note" style="color:#40d32d;">4.0</p>
        </div>
    </a>
    <div class="personneCherchee">
        <img src="resources/profil.png"/>
        <p class="nom">Fran&ccedil;ois</p>
        <p class="note" style="color:#40d32d;">3.1</p>
    </div>
    <div class="personneCherchee">
        <img src="resources/profil.png"/>
        <p class="nom">Charles</p>
        <p class="note" style="color:#40d32d;">2.8</p>
    </div>
    <div class="personneCherchee">
        <img src="resources/profil.png"/>
        <p class="nom">Herv&eacute;</p>
        <p class="note" style="color:#ff402d;">1.6</p>
    </div>
    <div class="personneCherchee" style="height:11px;border-bottom:none;">
        <img src="resources/profil.png"/>
        <p class="nom">Robert</p>
        <p class="note" style="color:#ff402d;">0.2</p>
    </div>
</body>