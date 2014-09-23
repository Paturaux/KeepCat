<?php
/*
    Fonction parmettant d'inclure le eader dans toutes les pages en fonction de quelques paramètres
 * @param title: le titre de la page
 * @param retPage: (facultatif) L'URL des la page sur laquelle on peut retourner à partir de cette page.
*/
function headerTop($title, $retPage = null){
    echo '<header>
        '.(($retPage !== null)? '<a href="'.$retPage.'"><img src="resources/icones/back.png" id="iconeHeaderGauche"/></a>' : "").'
        <p id="titre">'.$title.'</p>
        <a href="index.php?page=deconnexion"><img src="resources/icones/settings.png"  id="iconeHeaderDroit"/></a>
        </header>';
}

