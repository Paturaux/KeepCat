<?php include_once './head.php'; ?>

<body>
    <?php headerTop('Profil', $retPage); ?>
    
    <div id="menuProfil">
        <a href="#"><div id="ongletProfilGauche" style="color:#fff;background:#2789e4;">Profil</div></a><!--
        --><a href="index.php?page=animaux"><div id="ongletProfilCentre">Animaux</div></a><!--
        --><a href="index.php?page=avis"><div id="ongletProfilDroit">Avis</div></a>
    </div>
    
    <div id="photoProfil">
        <img src="resources/profil.png"/>
    </div>
    
    <div id="generalProfil">
        <p id="nom"><?php echo $user->first_name.' '.$user->name;?></p>
        <p id="age"><img src="resources/icones/birthday.png"/><?php echo $user->age.' ans'; ?></p>
        <p id="lieu"><img src="resources/icones/location.png"/>Lyon</p>
        <span id="note">4.0</span>
    </div>
    
    <div id="corpsProfil">
        Entour&eacute; par les chats depuis tous petit et vivant en apparetement sur Lyon, je n'ai pas la possibilit&eacute; d'en avoir un. Je me propose donc pour garder le votre. Gentil, attention et amoureux des animaux, je pense avoir le profil id&eacute;al pour garder votre chat.
    </div>
    
    <footer>
        <a href="#"><span class="boutonMenuBasSeul"><img src="resources/icones/edit.png"/>Modifier mon profil</span></a>
    </footer>
</body>