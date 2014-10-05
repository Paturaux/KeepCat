<?php
$title = "Se proposer";
require_once 'head.php';
?>

<div class="contain_corps" id="propose">
    <h1>Se proposer comme gardien</h1>
    <p class="help">
        Ici vous pouvez vous proposer comme gardien de chat pour une certaine p�riode.
        C'est � dire que des utilisateurs pourrons vous contacter pour que vous vous occupiez de leur chat pendant cette p�riode.
        Vous pouvez demander un r�mun�ration pour le temps que vous gardez le chat (Attention � ne pas �tre trop ch�re, sinon vous n'int�resserez personne).
    </p>
    <hr>
    
    <div class="panel panel-primary" id="pane-state">
        <div class="panel-heading">
            <h3 class="panel-title">Votre statut</h3>
        </div>
        <form id="form_price" method="post">
            <div class="input-group inpt-date">
                <span class="input-group-addon">Votre prix </span>
                <input type="text" class="form-control" placeholder="Ex: 10.50" value="15.00 &euro;" disabled>
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button" title="Editer"><img src="resources/site/edit.png"/></button>
                </span>
            </div>
        </form>
        <label>P�riode actuelle</label>
        <div class="btn-group btn-group-justified">
            <div class="btn-group">
                <button type="button" class="btn btn-default order-btn active">Non gardien</button>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-default order-btn">Gardien</button>
            </div>
       </div>
       <label>Chats</label>
       <div class="btn-group btn-group-justified">
            
            <div class="btn-group">
                <button type="button" class="btn btn-default order-btn active">Aucun chat en garde</button>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-default order-btn">Chats en garde</button>
            </div>
       </div>
    </div>
    <hr>
    
    <div class="panel panel-primary" id="pane-add">
        <div class="panel-heading">
            <h3 class="panel-title">Ajouter une p�riode</h3>
        </div>
        <form method="post">
            <div class="input-group inpt-date">
                <span class="input-group-addon">Date d�but</span>
                <input type="text" class="form-control" placeholder="JJ/MM/AAAA">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><img src="resources/site/calendar-24.png"/></button>
                </span>
            </div>
            <div class="input-group inpt-date">
                <span class="input-group-addon">Date de fin</span>
                <input type="text" class="form-control" placeholder="JJ/MM/AAAA">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><img src="resources/site/calendar-24.png"/></button>
                </span>
            </div>
            <button class="btn-valide btn btn-lg btn-info">Valider</button>
        </form>
    </div>
    <hr>
    <div class="panel panel-primary" id="pane-list">
        <div class="panel-heading">
            <h3 class="panel-title">Vos p�riodes en tant que gardien</h3>
        </div>
        <table class="table table-striped">
        <tr>
            <th>Date d�but</th>
            <th>Date fin</th>
            <th>Temps</th>
            <th>Actions</th>
        </tr>
        <?php 
        if(isset($listeUsers)){
            foreach($listeUsers as $user){
                echo '<tr>'
                    .'<td><div class="circle-img"></div></td>'
                    .'<td>'.$user['name'].'</td>'
                    .'<td>'.$user['price'].' &euro;/semaine</td>'
                    .'<td '.(($user['mark'] <= 2)? 'class="bad-mark"':'class="good-mark"').'>'.$user['mark'].'</td>'
                    .'</tr>';
            }
        }
        
        ?>
        </table>
    </div>
    
    

</div>


<?php 
    require_once 'footer.php';
?>

