<?php
$title = 'Rechercher';
require_once 'head.php';
?>

<div class="contain_corps" id="search">
    <h1>Rechercher un gardien</h1>
    <p>
        Ici vous pouvez trouver des personnes suceptibles de garder votre chat.
        Vous devez préciser de quelle date à quelle date vous voulez que votre chat soit gardé.
        Vous pouvez aussi utiliser la carte interactive afin de trouver des gardiens près de chez vous.
    </p>
    <hr>
    <form id="form_search" method="post">
        <div class="input-group inpt-date">
            <span class="input-group-addon">Date début</span>
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
        <div class="input-group">
            <span class="input-group-addon"><img src="resources/site/tag.png"/></span>
            <input type="text" class="form-control" placeholder="Nom ou mots clé">
        </div>
        <div class="input-group">
            <span class="input-group-addon">Lieu</span>
            <input type="text" class="form-control" placeholder="Ex: Villeurbanne 69100">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" title="Me localiser"><img src="resources/site/define_location-25.png"/></button>
            </span>
        </div>
        <div class="btn-group btn-group-justified">
            <div class="btn-group">
                <button type="button" class="btn btn-default order-btn active" onclick="selectOrder(this, 'mark');">Trier par note</button>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-default order-btn" onclick="selectOrder(this, 'price');">Trier par prix</button>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-default order-btn" onclick="selectOrder(this, 'name');">Trier par nom</button>
            </div>
       </div>
        <button class="btn-search btn btn-lg btn-info"><img src="resources/site/search.png"/>  Rechercher</button>
    </form>
    <hr>
    <table class="table table-striped">
        <tr>
            <th>Photo</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Note</th>
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
<script type="text/javascript">
    var listBttOrder = [];
    window.addEventListener('load', function(){
        listBttOrder = document.getElementsByClassName('order-btn');
    }, false);


    function selectOrder(elem, orderType){
            //console.log(listBttOrder);
            //console.log(elem.className);
            for(var i=0; i < listBttOrder.length; i++){
                if(listBttOrder[i] !== elem){
                    console.log(listBttOrder[i]);
                    listBttOrder[i].className = listBttOrder[i].className.replace(' active', "");     
                }
            }
            if(elem.className.indexOf('active') == -1){
                elem.className += " active";
            }
            
        }
    
</script>
<?php
require_once 'footer.php';

