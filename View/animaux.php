<?php include_once './head.html'; ?>

<body>
    <?php headerTop('Profil', $retPage); ?>
    
    <div id="menuProfil">
        <a href="index.php?page=profil"><div id="ongletProfilGauche">Profil</div></a><!--
        --><a href="#"><div id="ongletProfilCentre" style="color:#fff;background:#2789e4;">Animaux</div></a><!--
        --><a href="index.php?page=avis"><div id="ongletProfilDroit">Avis</div></a>
    </div>
    
    <?php 
    if(!empty($animals)){
        foreach($animals as $animal){
            echo '<div class="animal">
                    <img src="'.$animal['src'].'" class="chat"/>
                    <p class="nom">'.$animal['name'].'</p>
                    <p class="age"><img src="resources/icones/birthday.png"/>'.(new dateTime(date('Y-m-d')))->diff(new dateTime($animal['b_date']))->format('%y%').' ans</p>
                    <p class="race"><img src="resources/icones/cat_footprint.png"/>'.$animal['race'].'</p>
                    <img src="resources/icones/up_black.png" class="fleche" onclick="unroll(this, '.$animal['num'].')"/>
                </div>
                <div id="'.$animal['num'].'" class="description">'.$animal['description'].'</div>';
        }
    }
    ?>
    
    
    <script type="text/javascript">
        var listUnr = [];
        function unroll(src, idDesc){
            var descElem = document.getElementById(idDesc);
            var height = parseInt(descElem.style.height);
            height = (isNaN(height))? 0 : height;
            animate = {
                delay: 5,
                step: null
            };
            
            if(listUnr[idDesc] === undefined){
                listUnr[idDesc] = 'unr'; // la description est en train de descendre
                if(height <= 0) descElem.style.visibility = 'visible';
                animate.step = function frameUnroll() {
                    height++;
                    descElem.style.height = height + 'px';
                    if(height >= 100 || listUnr[idDesc] === undefined){ // Condition d'arrêt
                        clearInterval(timer);
                    }
                }
            }
            else{
                listUnr[idDesc] = undefined;

                animate.step = function frameRoll(){
                    height--;
                    descElem.style.height = height + 'px';
                    if(height <= 0) descElem.style.visibility = 'hidden';
                    if(height <= 0 || listUnr[idDesc] === 'unr'){ // Condition d'arrêt
                        clearInterval(timer);
                    }
                }
            }
            var timer = setInterval(animate.step, animate.delay);
        }
        
        
    </script>
    <footer>
        <a href="#"><span class="boutonMenuBasSeul"><img src="resources/icones/plus.png"/>Ajouter un chat</span></a>
    </footer>
</body>