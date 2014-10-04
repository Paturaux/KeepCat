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
            <span class="input-group-addon"><img src="resources/site/search-24.png"/></span>
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
              <button type="button" class="btn btn-default">Trier par note</button>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-default">Trier par prix</button>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-default">Trier par nom</button>
            </div>
       </div>
    </form>
    <hr>
    <table class="table table-striped">
        <tr>
            <th>Photo</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Note</th>
        </tr>
        <tr>
            <td>Test</td>
            <td>Test</td>
            <td>Test</td>
            <td>Test</td>
        </tr>

    </table>
</div>
    
<?php
require_once 'footer.php';

