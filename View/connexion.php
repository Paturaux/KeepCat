<?php include_once './head.php'; ?>

<body id="corpsAccueil">
    <img src="resources/logo.png" id="logo"/>

    <div id="connexion">
        <form method="post" action="index.php?page=connexion&step=verif">
            <input type="text" class="text" name="mail" placeholder="Email" autocomplete="off"/>
            <input type="password" class="text" name="pass" placeholder="Mot de passe" autocomplete="off"/>
            <input type="submit" value="Se connecter"/>
        </form>
    </div>
    
    <button id="inscrire">S'inscrire ici</button>

</body>