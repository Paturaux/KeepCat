<?php
$title = 'Connexion';
require_once 'head.php';
?>
<div class="contain_corps" id="connection">
    <h1>Connexion</h1>
    <form method="post" action="index.php?page=connexion&step=verif<?php echo isset($_GET['dst'])? '&dst='.$_GET['dst'] : ""; ?>">
        <div class="input-group">
            <span class="input-group-addon"><img src="resources/site/contacts.png"/></span>
            <input type="text" name="mail" class="form-control" placeholder="Adresse mail">
        </div>

        <div class="input-group">
            <span class="input-group-addon"><img src="resources/site/key.png"/></span>
            <input type="password" name="pass" class="form-control" placeholder="Mot de passe">
        </div>
        <input type="submit" value="Connexion" class="btn btn-sm btn-info">
    </form>
    
</div>

<?php require_once 'footer.php'; ?>