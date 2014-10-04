<?php include_once './head.php'; ?>

<body>
    <?php headerTop('Carte', $retPage); ?>
    <img src="resources/map.png"/>
    <div id="localiserLieu">
        <img src="resources/icones/location.png"/>
        <input type="text" placeholder="Villeurbanne, 69100"/>
        <div id="geolocalisation">
            <img src="resources/icones/define_location.png"/>
        </div>
    </div>
</body>